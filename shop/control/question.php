<?php 
/**
 * 问答
 *
 *
 *
 **by 太常系统 www.sxtaichang.com*/


defined('InShopNC') or exit('Access Invalid!');
class questionControl extends BaseHomeControl{
    public function __construct(){
        parent::__construct();
    }
    /*
     * 问答首页
     */
    public function indexOp(){
        Tpl::showpage("question.index","home_dw_layout");
    }
}
?>