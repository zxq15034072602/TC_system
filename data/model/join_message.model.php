<?php
/**
 * 加盟意向管理
 *
 *
 *
 *
 * by 太常系统 www.sxtaichang.com
 */
defined('InShopNC') or exit('Access Invalid!');
class join_messageModel extends Model{
    public function __construct(){
        parent::__construct("join_message");
    }
    /**
     * 列表
     *
     * @param array $condition 检索条件
     * @param obj $page 分页
     * @return array 数组结构的返回结果
     */
    public function getmessageList($condition,$page=''){
        $condition_str = $this->_condition($condition);
        $param = array();
        $param['table'] = 'join_message';
        $param['where'] = $condition_str;
        $param['limit'] = $condition['limit'];
        $param['order']	= (empty($condition['order'])?'join_message_time desc':$condition['order']);
        $result = Db::select($param,$page);
        return $result;
    }
    /**
     * 构造检索条件
     *
     * @param int $id 记录ID
     * @return string 字符串类型的返回结果
     */
    private function _condition($condition){
        $condition_str = '';
    
        if ($condition['join_name'] != ''){
            $condition_str .= " and join_message_name like '%". $condition['join_name'] ."%'";
        }
        if ($condition['join_mobile'] != ''){
            $condition_str .= " and join_message_mobile = '". $condition['join_mobile'] ."'";
        }
        if ($condition['join_type'] != 0){
            $condition_str .= " and join_message_type = '". $condition['join_type'] ."'";
        }
        return $condition_str;
    }
    /*
     * 更新
     * @param array $update
     * @param array $condition
     * @return bool
     */
    public function modify($update, $condition){
        return $this->where($condition)->update($update);
    }
    /**
     * 删除
     *
     * @param int $id 记录ID
     * @return bool 布尔类型的返回结果
     */
    public function del($id){
        if (intval($id) > 0){
            $where = " join_message_id = '". intval($id) ."'";
            $result = Db::delete('join_message',$where);
            return $result;
        }else {
            return false;
        }
    }
    /*
     * 增加
     * @param array $param
     * @return bool
     */
    public function save($param){
        return $this->insert($param);
    }
}