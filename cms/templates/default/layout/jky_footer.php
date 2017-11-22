<?php defined('InShopNC') or exit('Access Invalid!');?>

<footer id="foot_zn">
        <ul class="foot_box_zn">
            <li class="foot_list_zn">
                <p class="foot_title_zn">新手上路</p>
                <a href="<?php echo urlShop('member', 'home');?>">个人中心</a>
                <a href="">企业用户</a>
                <a href="<?php echo urlShop("article","",array('article_id'=>25)) ?>">合作伙伴</a>
                <a href="">新闻媒体</a>
            </li>
            <li class="foot_list_zn">
                <p class="foot_title_zn">特色服务</p>
                <a href="<?php echo urlShop("article","article",array('ac_id'=>2)) ?>">常见问题</a>
                <a href="">售后政策</a>
                <a href="">价格保护</a>
                <a href="">退换货政策</a>
            </li>
            <li class="foot_list_zn">
                <p class="foot_title_zn">服务支持</p>
                <a href="">公司账户</a>
                <a href="">自助服务</a>
                <a href="">故障申报</a>
                <a href="<?php echo urlShop("article","",array('article_id'=>23)) ?>">求职者</a>
            </li>
            <li class="foot_list_zn">
                <p class="foot_title_zn">关于我们</p>
                <a href="<?php echo urlShop("article","",array('article_id'=>22)) ?>">了解独易</a>
                <a href="<?php echo urlShop("article","",array('article_id'=>24)) ?>">加入独易</a>
                <a href="">新浪微博</a>
                <a href="<?php echo urlShop("article","",array('article_id'=>23)) ?>">联系我们</a>
            </li>
            <li class="foot_list_zn">
                <p class="foot_title_zn">官方微信</p>
                <img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$GLOBALS['setting_config']['site_logowx']; ?>" alt="">
                <p class="tel_zn"><?php echo $GLOBALS['setting_config']['site_tel400']; ?></p>
            </li>
        </ul>
        <p class="foot_partling_zn"></p>
        <?php if(is_array($output['$link_list']) && !empty($output['$link_list'])) { ?>
            		  
        <p class="friendship_zn">
            <span>友情链接：</span>
            <?php 	foreach($output['$link_list'] as $key=>$val) {
            		  	    
            		  		if($val['link_pic'] == ''){
            		  ?>
            <?php if($key!=0) {?>
            <span class="parting_span">|</span>
            <?php }?>
            <a href="<?php echo $val['link_url']; ?>" title="<?php echo $val['link_title']; ?>"><?php echo str_cut($val['link_title'],15);?></a>
          
            
           
        
        <?php
            		  		}
            		 	}
            		 }
            		 ?>
         </p>
        <p class="foot_end_zn"><?php echo $output['setting_config']['icp_number']; ?></p>
        <p class="foot_end_zn"><?php echo html_entity_decode($output['setting_config']['statistics_code'],ENT_QUOTES); ?></p>
        <p class="foot_end_zn">reserved.</p>
    </footer>


<?php defined('InShopNC') or exit('Access Invalid!');?>
<!--v3-b12-->
<!-- 
<div class="clear">&nbsp;</div>
<!-- 代码开始 -->
<!--  
<?php if($_GET['op'] != 'special_detail'){?>
<div id="tbox">
    <?php if($_SESSION['is_login'] == '1'){?>
    <a id="publishArticle" href="<?php echo CMS_SITE_URL;?>/index.php?act=publish&op=publish_article" target="_blank" title="<?php echo $lang['cms_article_commit'];?>">&nbsp;</a>
    <a id="publishPicture" href="<?php echo CMS_SITE_URL;?>/index.php?act=publish&op=publish_picture" target="_blank" title="<?php echo $lang['cms_picture_commit'];?>">&nbsp;</a>
    <?php } ?>
    <a id="gotop" href="JavaScript:void(0);" title="<?php echo $lang['cms_go_top'];?>" style="display:none;">&nbsp;</a> </div>
<?php } ?>
<!-- 代码结束 -->
<!--   
<div id="footer">
  <p><a href="<?php echo SHOP_SITE_URL;?>"><?php echo $lang['nc_index'];?></a>
    <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){?>
    <?php foreach($output['nav_list'] as $nav){?>
    <?php if($nav['nav_location'] == '2'){?>
    | <a  <?php if($nav['nav_new_open']){?>target="_blank" <?php }?>href="<?php switch($nav['nav_type']){
    	case '0':echo $nav['nav_url'];break;
    	case '1':echo urlShop('search', 'index', array('cate_id'=>$nav['item_id']));break;
    	case '2':echo urlShop('article', 'article',array('ac_id'=>$nav['item_id']));break;
    	case '3':echo urlShop('activity', 'index',array('activity_id'=>$nav['item_id']));break;
    }?>"><?php echo $nav['nav_title'];?></a>
    <?php }?>
    <?php }?>
    <?php }?>
  </p>
  <?php echo $output['setting_config']['icp_number']; ?><br />
  <?php echo html_entity_decode($output['setting_config']['statistics_code'],ENT_QUOTES); ?> </div> -->
<?php if (C('debug') == 1){?>
<div id="think_page_trace" class="trace">
  <fieldset id="querybox">
    <legend><?php echo $lang['nc_debug_trace_title'];?></legend>
    <div> <?php print_r(Tpl::showTrace());?> </div>
  </fieldset>
</div>
<?php }?>
<!--  
<?php if($_GET['op'] != 'special_detail'){?>
<script language="javascript">
//返回顶部
backTop=function (btnId){
	var btn=document.getElementById(btnId);
	var d=document.documentElement;
	window.onscroll=set;
	btn.onclick=function (){
		btn.style.display="none";
		window.onscroll=null;
		this.timer=setInterval(function(){
			d.scrollTop-=Math.ceil(d.scrollTop*0.1);
			if(d.scrollTop==0) clearInterval(btn.timer,window.onscroll=set);
		},10);
	};
	function set(){btn.style.display=d.scrollTop?'block':"none"}
};
backTop('gotop');
</script>
<?php } ?>

</body></html>
-->

