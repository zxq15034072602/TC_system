<?php
/**
 * 会场签到
 *

 *
 **by 太常系统 www.sxtaichang.com*/

defined('InShopNC') or exit('Access Invalid!');
class signControl extends SystemControl{
    public  function __construct(){
        parent::__construct();
    }
    /*
     * 会场签到列表
     */
    public  function signListOp(){
        $sign_model=Model("sign_member");
        if(chksubmit()){//删除
            if (is_array($_POST['del_id']) && !empty($_POST['del_id'])){
                foreach ($_POST['del_id'] as $k => $v){
                    $condition['id']=$v;
                    $sign_model->drop($condition);
                    $this->log('删除签到信息[ID:'.implode(',',$_POST['del_id']).']',null);
                }
                showMessage("删除签到信息成功");
            }else {
                showMessage("请选择要删除的内容");
            }
        }
        //检索条件
        $condition=array();
        if(preg_match("/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/", $_GET["search_title"])){
            $condition['sign_mobile']=$_GET["search_title"];
        }else{
            $condition['sign_name']=$_GET["search_title"];
        }
        $condition['sign_role']=trim($_GET['search_join_id']);
        /**
         * 分页
         */
        $page	= new Page();
        $page->setEachNum(10);
        $page->setStyle('admin');
        $sign_list=$sign_model->getlist($condition,$page);
        Tpl::output("sign_list",$sign_list);
        Tpl::output("page",$page->show());
        Tpl::output("search_title",$_GET['search_title']);
        Tpl::output("search_join_id",$_GET['search_join_id']);
        Tpl::showpage("sign_member.list");
    }
}