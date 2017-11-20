<header id="head_zn">
    <div id="head_box_zn">
        <a href="" class="login_zn">
            <img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_CMS.DS.'logo_zn.png';?>">
        </a>
        <ul id="head_nav_box_zn">
            <li class="head_list_zn">
                <a href="<?php echo urlCMS('index','index')?>" class="name">
                    健康云
                </a>
            </li>
            <li class="head_list_zn" id="dyp">
                <a href="" class="name">
                    独易品
                </a>
                <div class="dyw_list">
                    <p><a href="">独易网</a></p>
                    <p><a href="">独一张</a></p>
                    <p><a href="">食维健</a></p>
                </div>
            </li>
            <li class="head_list_zn">
                <a href="" class="name">
                    招商加盟
                </a>
            </li>
            <li class="head_list_zn">
                <a href="" class="name">
                    健康商城
                </a>
            </li>
            <li class="head_list_zn">
                <a href="" class="name">
                    太常集团
                </a>
            </li>
        </ul>
        <!--搜索-->
         <div class="search_box">
                <form class="search-form" method="get" action="<?php echo SHOP_SITE_URL;?>">
                <input type="hidden" value="search" id="search_act" name="act">
                 <input type="text" placeholder="搜索关键词" name="keyword">
                 <div class="search_zn"></div>
                 </form> 
         </div>
    </div>
</header>



<!-- 导航 -->
<!--  
<div id="navBar">
  <div id="navBox">
    <div class="l"></div>
    <div class="r"></div>
    <ul class="nc-nav-menu" id="jsddm">
      <li nctype="nav_submenu" <?php echo $output['index_sign'] == 'index'?'class="current"':'class="link"'; ?>><a href="<?php echo CMS_SITE_URL;?>"><?php echo $lang['cms_site_name'];?></a></li>
      <li nctype="nav_submenu" <?php echo $output['index_sign'] == 'article'?'class="current"':'class="link"'; ?>><a href="<?php echo CMS_SITE_URL;?>/index.php?act=article&op=article_list"><?php echo $lang['cms_article'];?><i></i></a>
        <div class="nc-nav-submenu">
          <?php if(!empty($output['article_class_list']) && is_array($output['article_class_list'])) {?>
          <?php foreach($output['article_class_list'] as $value) {?>
          <a href="<?php echo CMS_SITE_URL;?>/index.php?act=article&op=article_list&class_id=<?php echo $value['class_id'];?>"><?php echo $value['class_name'];?></a>
          <?php } ?>
          <?php } ?>
        </div>
      </li>
      <li nctype="nav_submenu" <?php echo $output['index_sign'] == 'picture'?'class="current"':'class="link"'; ?>> <a href="<?php echo CMS_SITE_URL;?>/index.php?act=picture&op=picture_list"><?php echo $lang['cms_picture'];?><i></i></a>
        <div class="nc-nav-submenu">
          <?php if(!empty($output['picture_class_list']) && is_array($output['picture_class_list'])) {?>
          <?php foreach($output['picture_class_list'] as $value) {?>
          <a href="<?php echo CMS_SITE_URL;?>/index.php?act=picture&op=picture_list&class_id=<?php echo $value['class_id'];?>"><?php echo $value['class_name'];?></a>
          <?php } ?>
          <?php } ?>
        </div>
      </li>
      <li nctype="nav_submenu" <?php echo $output['index_sign'] == 'special'?'class="current"':'class="link"'; ?>><a href="<?php echo CMS_SITE_URL;?>/index.php?act=special&op=special_list"><?php echo $lang['cms_special'];?></a></li>
      <?php if(!empty($output['navigation_list']) && is_array($output['navigation_list'])) {?>
      <?php foreach($output['navigation_list'] as $value) {?>
      <li class="link"><a href="<?php echo $value['navigation_link'];?>" <?php echo $value['navigation_open_type']=='1'?'target="_blank"':'';?>><?php echo $value['navigation_title'];?></a></li>
      <?php } ?>
      <?php } ?>
    </ul>
  </div>
</div>
<script type="text/javascript">
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function jsddm_open()
{	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('div').eq(0).css('visibility', 'visible');}

function jsddm_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{	closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}

$(document).ready(function()
{	$('#jsddm > li').bind('mouseover', jsddm_open);
	$('#jsddm > li').bind('mouseout',  jsddm_timer);});

document.onclick = jsddm_close;
  </script>
  -->