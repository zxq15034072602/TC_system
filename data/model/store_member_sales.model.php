<?php
/**
 * 订单管理
 *
 *
 *
 *
 * by 太常系统 www.sxtaichang.com
 */
defined('InShopNC') or exit('Access Invalid!');
class store_member_salesModel extends Model{
    /**
     * 取得消费列表
     * @param unknown $condition
     * @param string $pagesize
     * @param string $field
     * @param string $order
     * @param string $limit
     * @param unknown $extend 追加返回那些表的信息,如array('order_common','order_goods','store')
     * @return Ambigous <multitype:boolean Ambigous <string, mixed> , unknown>
     */
    public function getSalesList($condition, $pagesize = '', $field = '*', $order = 'sales_id desc', $limit = '', $extend = array(), $master = false){
        $list = $this->table('store_member_sales')->field($field)->where($condition)->page($pagesize)->order($order)->limit($limit)->master($master)->select();
        if (empty($list)) return array();
        $sales_list = array();
        foreach ($list as $sales) {
            if (!empty($extend)) $sales_list[$sales['sales_id']] = $sales;
        }
        if (empty($sales_list)) $sales_list = $list;
    
        
        //追加返回店铺信息
        if (in_array('store',$extend)) {
            $store_id_array = array();
            foreach ($order_list as $value) {
                if (!in_array($value['store_id'],$store_id_array)) $store_id_array[] = $value['store_id'];
            }
            $store_list = Model('store')->getStoreList(array('store_id'=>array('in',$store_id_array)));
            $store_new_list = array();
            foreach ($store_list as $store) {
                $store_new_list[$store['store_id']] = $store;
            }
            foreach ($sales_list as $sales_id => $sales) {
                $sales_list[$sales_id]['extend_store'] = $store_new_list[$sales['store_id']];
            }
        }
    
        //追加返回买家信息
        if (in_array('member',$extend)) {
            foreach ($sales_list as $sales_id => $sales) {
                $sales_list[$sales_id]['extend_member'] = Model('member')->getMemberInfoByID($sales['buyer_id']);
            }
        }
    
        //追加返回商品信息
        if (in_array('sales_goods',$extend)) {
            //取商品列表
            $order_goods_list = $this->getSalesGoodsList(array('sales_id'=>array('in',array_keys($sales_list))));
            if (!empty($order_goods_list)) {
                foreach ($order_goods_list as $value) {
                    $sales_list[$value['sales_id']]['extend_order_goods'][] = $value;
                }
            } else {
                $sales_list[$value['sales_id']]['extend_order_goods'] = array();
            }
        }
    
        return $sales_list;
    }
    /**
     * 取得消费商品表列表
     * @param unknown $condition
     * @param string $fields
     * @param string $limit
     * @param string $page
     * @param string $order
     * @param string $group
     * @param string $key
     */
    public function getSalesGoodsList($condition = array(), $fields = '*', $limit = null, $page = null, $order = 'ssg_id desc', $group = null, $key = null) {
        return $this->table('sales_goods')->field($fields)->where($condition)->limit($limit)->order($order)->group($group)->key($key)->page($page)->select();
    }
    /*
     * 增加消费记录
     * @param $insert_sales
     * @param $sales_good
     */
    public function addSales($insert_sales,$sales_good){
        if(empty($insert_sales)&&!is_arry($insert_sales)||empty($sales_good)&&!is_array($sales_good)){
            return false;
        }
        $last_sales_id=$this->table('store_member_sales')->field("sales_id")->limit(1)->order("sales_id desc")->find();
        $insert_sales['sales_sn']=$this->makeOrderSn($last_sales_id['sales_id']);
        $this->beginTransaction();
        try{
            $insert_id	= $this->table('store_member_sales')->insert($insert_sales);
            if(!$insert_id){
               throw  new Exception();
            }
            foreach ($sales_good as $k=>$goods){
                $sales_good[$k]["sales_id"]=$insert_id;
            }
            $insert_good_id=$this->table('sales_goods')->insertall($sales_good);
            if(!$insert_good_id){
                throw new Exception();
            }
            $this->commit();
            //添加相应的积分
            if (C('points_isuse')){
                Model('points')->savePointsLog('member_sales',array('pl_memberid'=>$insert_sales['buyer_id'],'pl_membername'=>$insert_sales['buyer_name'],'store_name'=>$_SESSION['store_name'],'sales_sn'=>$insert_sales['sales_sn'],'orderprice'=>$insert_sales['sales_amount'],'pl_adminname'=>$insert_sales['sales_operate_name']),true);
            }
            return $insert_id;
        }catch (Exception $e){
            $this->rollback();
            return false;
        }
        
    }
    /*
     * 删除消费单
     */
    public function dropSales($sales_id){
        if(empty($sales_id)){
            return false;
        }
        $where = " sales_id = '". intval($sales_id) ."'";
        $result = Db::delete('store_member_sales',$where);
        return $result;
    }
    /**
     * 订单编号生成规则，n(n>=1)个订单表对应一个支付表，
     * 生成订单编号(年取1位 + $pay_id取13位 + 第N个子订单取2位)
     * 1000个会员同一微秒提订单，重复机率为1/100
     * @param $pay_id 支付表自增ID
     * @return string
     */
    public function makeOrderSn($pay_id) {
        //记录生成子订单的个数，如果生成多个子订单，该值会累加
        static $num;
        if (empty($num)) {
            $num = 1;
        } else {
            $num ++;
        }
        return (date('d',time()) % 9+1) . sprintf('%015d', $pay_id) . sprintf('%02d', $num);
    }
}