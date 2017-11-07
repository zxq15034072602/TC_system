<?php
/**
 * 加盟意向
 *

 *
 **by 太常系统 www.sxtaichang.com*/

defined('InShopNC') or exit('Access Invalid!');

class join_messageControl extends SystemControl{
    public function __construct(){
        parent::__construct();
    }
    /*
     * 加盟意向列表
     */
    public function indexOp(){
        $join_messageModel=Model('join_message');
        
        /**
         * 删除
         */
        if (chksubmit()){
            if (is_array($_POST['del_id']) && !empty($_POST['del_id'])){
                foreach ($_POST['del_id'] as $k => $v){
                    $v = intval($v);
                    $condition['join_message_id']=$v;
                    $join_messageModel->del($condition);
                    $this->log('删除意向信息[ID:'.implode(',',$_POST['del_id']).']',null);
                    showMessage("删除意向信息成功");
                }
            }else {
                showMessage("请选择要删除的内容");
            }
        }
        
        //检索条件
        $condition=array();
        if(preg_match("/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/", $_GET["search_title"])){
            $condition['join_mobile']=$_GET["search_title"];
        }else{
            $condition['join_name']=$_GET["search_title"];
        }
        $condition['join_type']=trim($_GET['search_join_id']);
        /**
         * 分页
         */
        $page	= new Page();
        $page->setEachNum(10);
        $page->setStyle('admin');
        $join_message_list=$join_messageModel->getmessageList($condition,$page);
        Tpl::output("join_messages",$join_message_list);
       
        Tpl::output("page",$page->show());
        Tpl::showpage("join_message.index");
    }
    /*
     * 短信通知用户预约
     *
     */
    public function send_sms_noticeOp(){
        if(!preg_match('/^0?(13|15|17|18|14)[0-9]{9}$/i',$_REQUEST['mobile'])||empty($_REQUEST['mobile'])){
            showMessage("手机为空！或者手机号码不正确");
        }
        $sms = new Sms();
        $sms_content='【'.C('site_name').'】 您好，您的意向请求我们已经收到，届时会有工作人员联系您，请保持电话畅通！感谢您选择我们';
        $result = $sms->send($_REQUEST['mobile'],$sms_content);
        if($result){
            $join_message_model=Model("join_message");//获取预约表模型
            $update['join_message_status']=1;
            $condition['join_message_id']=$_REQUEST['join_message_id'];
            $join_message_model->modify($update,$condition);
            showMessage("通知成功，请尽快安排相关人员联系客户！");
        }else{
            showMessage("短信通道异常，请稍后再试");
        }
    }
    
}