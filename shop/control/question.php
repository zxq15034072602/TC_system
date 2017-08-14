<?php 
/**
 * 问答
 *
 *
 *
 **by 太常系统 www.sxtaichang.com*/


defined('InShopNC') or exit('Access Invalid!');
class questionControl extends BaseHomeControl{
    private $model;
    public function __construct(){
        parent::__construct();
        /**
         * 分类导航
         */
        $nav_link = array(
            array(
                'title'=>'首页',
                'link'=>SHOP_SITE_URL
            ),
            array(
                'title'=>"健康问答"
            )
        );
        Tpl::output('nav_link_list',$nav_link);
        $this->model=Model();
    }
    /*
     * 问答首页
     */
    public function indexOp(){
        
        Tpl::showpage("question.index","home_dw_layout");
    }
    /*
     * 提问
     */
    public function questionOp(){
        $member_id=$this->getMemberAndGradeInfo(true)['member_id'];
        if($_SESSION['is_login'] !== '1'){
            showMessage("请先登录！");
        }
        if(empty($_POST['question_title'])){
            showMessage("问题标题不能为空！","","html","error");
        }
        $condition['field']="question_title";
        $condition['where']="question_member = $member_id";
        $title=$this->model->table("question")->select($condition);
        if($title[0]['question_title']==$_POST['question_title']){
            showMessage("请不要提交重复的问题","","html","error");
        }
        $insert_array['question_title']=$_POST['question_title'];
        $insert_array['question_content']=$_POST['question_content'];
        $insert_array['question_time']=time();
        $insert_array['question_member'] =$member_id;
        if($this->model->table("question")->insert($insert_array)){
            showMessage("提问成功！请耐心等待指导老师回答",urlShop("question","quesion_list"),"html");
        }
         showMessage("提问失败！","","html","error");
    }
    /*
     * 问答列表
     */
    public function question_listOp(){
        if($_REQUEST['question_status']!=3){//判断待解决/已解决
            $condition="question.question_status=$_REQUEST[question_status]";
        }
        $page	= new Page();
        $page->setEachNum(10);
        $page->setStyle('admin');
        $on="question.question_member=member.member_id";
        $question_list=$this->model->table("question,member")->where($condition)->join("left")->on($on)->limit($page->getLimitStart(),$page->getEachNum())->select();
        
        if($question_list){
            foreach ($question_list as &$question){
                $condition="answer.answer_qid=$question[question_id]";
                $question['answer_list']=$this->model->table("answer,member")->order("answer.answer_id desc")->where($condition)->join("left")->on("answer.answer_guide=member.member_id")->limit(2)->select();
            }
        }
        Tpl::output("question_list",$question_list);
        Tpl::output('show_page',$page->show());
        Tpl::showpage("question.list","home_dw_layout");
    }
    /*
     * 问答详情页
     */
    public function question_showOp(){
        if(empty($_REQUEST['qid'])){
            showMessage("问题id为空","","html","error");
        }
        $on="question.question_member=member.member_id";
        $question=$this->model->table("question,member")->where($condition)->join("left")->on($on)->find();
        if($question){
            $condition="answer.answer_qid=$question[question_id]";
            $question['answer_list']=$this->model->table("answer,member")->order("answer.answer_id desc")->where($condition)->join("left")->on("answer.answer_guide=member.member_id")->select();
        }
        var_dump($question);
        $member_info=$this->getMemberAndGradeInfo(true);
        Tpl::output("member_info",$member_info);
        Tpl::output("question",$question);
        Tpl::showpage("question.show","home_dw_layout");
    }
}
?>