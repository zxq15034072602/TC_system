<?php defined('InShopNC') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/index.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/index.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/healthSchool_qty.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/dyw_pc.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/health_zn.css" rel="stylesheet" type="text/css">
<script src="<?php echo RESOURCE_SITE_URL;?>/js/waypoints.js"></script>
<script src="<?php echo SHOP_TEMPLATES_URL;?>/dw/js/index.js"></script>
<script type="text/javascript" src="<?php echo SHOP_RESOURCE_SITE_URL;?>/js/home_index.js" charset="utf-8"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/ie6.js" charset="utf-8"></script>
<![endif]-->
<style>
body{background-color: #f8f8f8; }

</style>

<!--  首页 start  -->
<div class="banner_yyt">
    <?php echo $output['web_html']['index_big'];?>
</div>

<div id="health_zn">
    <div class="health_title_zn">
        <p class="health_title">
            <span></span>
            <span>健/康/专/区</span>
            <span></span>
        </p>
        <p class="health_title_english">Health zone</p>
    </div>
    <ul class="sort_box_zn">
        <li class="sort_list_zn">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/list_zn_01.png" alt=""/>
            <span class="find_store_zn"><a href="#">找门店</a></span>
            <div class="address_box">
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=北京+">北京市</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=天津+">天津市</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=山西+太原市+">太原市</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=河北+石家庄市+">石家庄</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=内蒙古+">内蒙古</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=辽宁+">辽宁省</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=上海+">上海市</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=江苏+">江苏省</a>
                <a href="index.php?order=&act=store_list&cate_id=0&keyword=&area_info=浙江+">浙江省</a>
            </div>
            <span class="look_more">
                <a href="<?php echo urlShop("store_list","index")?>">查看更多</a>
            </span>
        </li>
        <li class="sort_list_zn">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/list_zn_02.png" alt=""/>
            <span class="find_store_zn"><a href="<?php echo urlShop('article',"member_advisor_list")?>">找老师</a></span>
            <div class="address_box">
                <?php if($output['member_advisor_list']&&is_array($output['member_advisor_list'])) {?>
                <?php foreach ($output['member_advisor_list'] as $member_advisor) {?>
                <a href="<?php echo urlShop("member_advisohome","index",array("mid"=>$member_advisor['member_id'])) ?>"><?php if($member_advisor['member_truename']){ echo $member_advisor['member_truename'];}else{echo $member_advisor['member_name'];}?></a>
                <?php }?>
                <?php }?>
            </div>
            <span class="look_more">
                <?php if(count($output['member_advisor_list'])>=9) {?>
                <a href="<?php echo urlShop('article',"member_advisor_list")?>">查看更多</a>
                <?php }?>
            </span>
        </li>
        <li class="sort_list_zn">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/list_zn_03.png" alt=""/>
            <span class="find_store_zn"><a href="<?php echo urlShop('index',"index")?>">找产品</a></span>
            <div class="address_box">
                <?php if($output['goods_list']&&is_array($output['goods_list'])) {?>
                <?php foreach ($output['goods_list'] as $goods) {?>
                <a href="<?php echo urlShop("goods","index",array("goods_id"=>$goods['goods_id']))?>"><?php echo str_cut($goods['goods_name'], 8)?></a>
                <?php }?>
                <?php }?>
            </div>
            <span class="look_more">
                <?php  if(count($output['goods_list'])>=9) {?>
                <a href="<?php echo urlShop('index',"index")?>">查看更多</a>
                <?php }?>
            </span>
        </li>
        <li class="sort_list_zn">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/list_zn_04.png" alt=""/>
            <span class="find_store_zn"><a href="#">找视频</a></span>
            <div class="address_box">
                <?php if($output['video_list']&&is_array($output['video_list'])) {?>
                <?php foreach ($output['video_list'] as $video) {?>
                <a href="<?php echo urlShop('video',"show",array("video_id"=>$video['video_id'],'parent_id'=>4))?>" title="<?php echo $video["video_title"];?>"><?php echo str_cut($video["video_title"], 8)?></a>
                <?php }?>
                <?php }?>
            </div>
            <span class="look_more">
                <?php  if(count($output['video_list'])>=9) {?>
                <a href="<?php echo urlShop('video','video',array("vd_id"=>4))?>">查看更多</a>
                <?php }?>
            </span>
        </li>
    </ul>
    <div class="health_question_zn">
        <div class="health_question_box_zn">
            <div class="health_click_title_zn">
                <span class="health_knowledge_zn">健康<br/>知识</span>
                <span class="health_question_zn_zn">健康<br/>问答</span>
            </div>
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/smile_man_zn.png" alt="" class="smile_man_zn"/>
            <div class="health_con_zn">
                <div class="title_zn">
                    <p class="frist_p_zn">健康知识</p>
                    <div class="over_box">
                        <p class="color_p_zn">
                            <span>He</span><span>alth</span>
                        </p>
                        <p class="color_p_zn">
                            <span>K</span><span>nowledge</span>
                        </p>
                    </div>
                </div>
                
                <?php if($output['article_class']&&is_array($output['article_class'])) {?>
                <?php foreach ($output['article_class'] as $article_class) {?>
                <ul class="sort_health_zn">
                    <li class="sort_title_zn"><?php echo str_cut($article_class['tag_name'], 4)?></li>
                    <?php $num=0;?>
                    <?php foreach ($output['article_list'] as $article) {?>
                    <?php if($article['tag_id'] == $article_class['tag_id']&&$num<2) {?>
                    <li class="sort_con_zn"><a href="<?php echo urlShop("article","show",array('article_id'=>$article['article_id'],'childshow'=>1))?>"><?php echo str_cut($article['article_title'], 54)?></a></li>                 
                    <?php $num++;?>
                    <?php }?>
                    <?php }?>
                </ul>
                <?php }?>
                <?php }?>
            </div>
            <div class="health_question_con_zn">
                <div class="title_zn">
                    <p class="frist_p_zn">健康问答</p>
                    <div class="over_box">
                        <p class="color_p_zn">
                            <span>Q</span><span>uestion</span>
                        </p>
                        <p class="color_p_zn last_p_zn">
                            <span>&</span>  <span>A</span><span>nswer</span>
                        </p>
                    </div>
                </div>
                <ul class="question_con_zn">
                   
                    <li class="question_title_zn">
                        <a href="#">
                            <span>问</span>
                            <span class="prompt_zn">大腿皮肤表面有小疙瘩，但是不疼不痒，怎么办？</span>
                        </a>
                    </li>
                    <li class="question_con_zn_list">
                        <a href="#">
                            <span>答</span>
                            <span>你好，这个情况有很久了吧？ 这是毛周角化，与体内缺乏维生素A有关可以口服胡萝卜素胶囊，外涂维A酸乳膏，每天晚上涂一次，平时多吃蔬菜水果，尤其胡萝卜多吃 没有影响，保持皮肤滋润是好的 这个没有太好的办法，可以做激光脱毛，可以永久去除掉不客气 </span>
                        </a>
                    </li>
                </ul>
                <ul class="question_con_zn">
                    <li class="question_title_zn">
                        <a href="#">
                            <span>问</span>
                            <span class="prompt_zn">大腿皮肤表面有小疙瘩，但是不疼不痒，怎么办？</span>
                        </a>
                    </li>
                    <li class="question_con_zn_list">
                        <a href="#">
                            <span>答</span>
                            <span>你好，这个情况有很久了吧？ 这是毛周角化，与体内缺乏维生素A有关可以口服胡萝卜素胶囊，外涂维A酸乳膏，每天晚上涂一次，平时多吃蔬菜水果，尤其胡萝卜多吃 没有影响，保持皮肤滋润是好的 这个没有太好的办法，可以做激光脱毛，可以永久去除掉不客气 </span>
                        </a>
                    </li>
                </ul>
                <ul class="question_con_zn">
                    <li class="question_title_zn last_question_zn">
                        <a href="#">
                            <span>问</span>
                            <span class="prompt_zn">大腿皮肤表面有小疙瘩，但是不疼不痒，怎么办？</span>
                        </a>
                    </li>
                    <li class="question_con_zn_list last_question_con">
                        <a href="#">
                            <span>答</span>
                            <span>你好，这个情况有很久了吧？ 这是毛周角化，与体内缺乏维生素A有关可以口服胡萝卜素胶囊，外涂维A酸乳膏，每天晚上涂一次，平时多吃蔬菜水果，尤其胡萝卜多吃 没有影响，保持皮肤滋润是好的 这个没有太好的办法，可以做激光脱毛，可以永久去除掉不客气 </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="health_answer">
    <div class="health_title_zn">
        <p class="health_title">
            <span></span>
            <span>健/康/问/答</span>
            <span></span>
        </p>
        <p class="health_title_english">Health zone</p>
    </div>
    <ul class="health_a_con">
       <?php if($output['member_advisor_wd_list']&&is_array($output['member_advisor_wd_list'])) {?>
       <?php foreach ($output['member_advisor_wd_list'] as $advisor) {?>
       <li class="health_a_one">
           <a href="javascript:void(0)" class="health_a_header" title="<?php if($advisor['member_truename']) {echo $advisor['member_truename'];}else{echo $advisor['member_name'];} ?>">
           <img src="<?php if ($output['master_info']['member_avatar']!='') { echo UPLOAD_SITE_URL.'/'.ATTACH_AVATAR.DS.$output['master_info']['member_avatar']; } else { echo UPLOAD_SITE_URL.'/'.ATTACH_COMMON.DS.C('default_user_portrait'); } ?>" width="129" height="129" style="border-radius: 50%;">
           </a>
           <div class="health_a_right">
               <a href="javascript:void(0)" class="health_a_name">
                   <span><?php if($advisor['member_truename']) {echo $advisor['member_truename'];}else{echo $advisor['member_name'];} ?></span>
                   <span>JON ZHANG</span>
               </a>
               <a href="javascript:void(0)" class="health_a_phone">电话：<?php if($advisor['member_mobile']) {echo $advisor['member_mobile'];}else{echo "暂未绑定电话";}?></a>
               <a href="javascript:void(0)" class="health_a_mendian">所在地区：<?php echo $advisor['member_areainfo']?></a>
           </div>
           <?php if($advisor['answer']&&is_array($advisor['answer'])) {?>
           <div class="health_b_right">
               <a href="<?php echo urlShop("question","question_show",array("qid"=>$advisor['answer']['question_id']))?>" class="health_b_q">Q : <?php echo str_cut($advisor['answer']['question_title'], 20)?></a>
               <a href="javascript:void(0)" class="health_b_a">A : <?php echo str_cut($advisor['answer']['answer_content'], 90,"...")?></a>
               <a href="<?php echo urlShop("question","question_list",array("question_status"=>3))?>" class="health_b_more">查看更多</a>
           </div>
           <?php }?>
       </li>
      <?php }?>
      <?php }?>
    </ul>
</div>

<div class="healthSchoolSmallBox_qty">
<!--小保健讲堂开始-->
		<div class="healthBox_qty">
			<div class="health_title_zn">
                <p class="health_title">
                    <span></span>
                    <span>健/康/讲/堂</span>
                    <span></span>
                </p>
                <p class="health_title_english">Health zone</p>
            </div>
			<div class="healthRightBox_qty">
				<div class="healthTopFont_qty">
					
				</div>
				<div class="healthBottomFont_qty">
					
				</div>
			</div>
		</div>
		<!--小保健讲堂结束-->
		<!--保健讲堂开始-->
		<div class="healthRoom_qty">
			<div class="healthRoomLeft_qty">
        	<?php echo loadadv(1055);?>
        	</div>
			<div class="healthRoomRight_qty">
				<div class="healthRoomTop_qty">
					<ul>
					    <?php foreach ($output['video_recommend'][1]['code_info'] as $k=>$screen){?>
					    <?php if($k<=2) {?>
						<li><a href="<?php echo $screen['pic_url']?>"> <img src="<?php echo UPLOAD_SITE_URL.DS.$screen['pic_img']?>" />
					    <div class="heathRoomFont_qty">
						<span style="text-align:center;"><?php echo $screen['pic_name']?></span>
						
						</div>	
						</a></li>
						<?php }?>
						<?php }?>
					</ul>
				</div>
				<div class="healthRoomBottom_qty">
					<ul class="img_qty">
					    <?php foreach ($output['video_recommend'][0]['code_info'] as $focus){?>
					    <?php foreach ($focus['pic_list'] as $child_focus) {?>
					    <?php if($child_focus['pic_img']) {?>
						<li><a href="<?php echo $child_focus['pic_url']?>"> <img src="<?php echo UPLOAD_SITE_URL.DS.$child_focus['pic_img']?>" />
								<div class="healthRoomBs_qty"><?php echo $child_focus['pic_name'] ?></div>
						</a></li>
						<?php }?>
						<?php }?>
						<?php }?>
					</ul>
					<ul class="lrbtns_qty">
						<li class="lbtns_qty">&lt;</li>
						<li class="rbtns_qty">&gt;</li>
					</ul>
				</div>
			</div>
		</div>
		<!--保健讲堂结束-->
</div>


<div class="goods_for">
    <div class="health_title_zn">
        <p class="health_title">
            <span></span>
            <span>商/品/推/荐</span>
            <span></span>
        </p>
        <p class="health_title_english">Health zone</p>
    </div>
    <ul class="goods_for_con">
        
        <li class="goods_for_one">
            <?php echo rec(9);?>
        </li>
        <li class="goods_for_one">
            <?php echo rec(10);?>
        </li>
        <li class="goods_for_one">
            <?php echo rec(11);?>
        </li>
        <li class="goods_for_one">
            <?php echo rec(12);?>
        </li>

    </ul>
    <div class="goods_forMore"><a href="<?php echo urlShop("index","index")?>" style="color:#fff">更多</a></div>
    <div class="goods_forME">TRADITIONAL NOURISHING</div>
</div>

<!--左边固定弹框开始-->
<!--  

<div class="fixedBox_qty">
	<ul>
		<li>电话
			<div class="tele_qty">13545687561</div>
		</li>
		<li>微信
			<div class="weixin_qty"></div>
		</li>
		<li>QQ
			<div class="tele_qty">1454231@qq.com</div>
		</li>
		<li>咨询
			<div class="tele_qty">您有什么想咨询的</div>
		</li>
	</ul>
</div>
-->
<!--左边国定弹框结束-->


<!--  首页 end  -->
<script>
//跑马车效果
var imgW=$('.img_qty li').width();
var index=0;
var s=setInterval(move,2000)
function move(){
	 $('.img_qty').stop(true,true)
     $('.img_qty').animate({marginLeft:-imgW},function(){
   	 $('.img_qty li:first').appendTo($('.img_qty'))
     $('.img_qty').css({marginLeft:0})
   })
}
$('.rbtns_qty').click(function(){
	move();
})
$('.lbtns_qty').click(function(){
	 $('.img_qty').stop(true,true)
	 $('.img_qty li:last').prependTo($('.img_qty'))
	 $('.img_qty').css({marginLeft:-imgW});
	 $('.img_qty').animate({marginLeft:0});
})
$('.healthRoomBottom_qty').hover(function(){
	clearInterval(s)
},function(){
	s=setInterval(move,2000)
})
</script>
<script>
function click_zn(){
    $(document).on('click','.health_knowledge_zn',function(){
        $(this).css('background','#a3cb32').css('color','#fff');
        $('.health_question_zn_zn').css('color','#999').css('background','#fff');
        $('.health_con_zn').css('display','block');
        $('.health_question_con_zn').css('display','none');
    });
    $(document).on('click','.health_question_zn_zn',function(){
        $(this).css('background','#a3cb32').css('color','#fff');
        $('.health_knowledge_zn').css('color','#999').css('background','#fff');
        $('.health_question_con_zn').css('display','block');
        $('.health_con_zn').css('display','none');
    });
}
    click_zn();
</script>

<div class="clear"></div>








<div class="footer-line"></div>

