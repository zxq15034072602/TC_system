<?php defined('InShopNC') or exit('Access Invalid!');?> 
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/footer.css" rel="stylesheet" type="text/css">
<!-- 底部 start -->
<div class="footer">
    <div class="footer_con">
        <div class="footer_one">
            <div class="contact_us">
                <div class="contact_a">联系我们</div>
                <div class="contact_b">CONTACT US</div>
            </div>
            <div class="our_tell">公司热线<?php echo $GLOBALS['setting_config']['site_tel400']; ?></div>
            <div class="our_adress">公司地址 山西省太原市小店区电子商务产业园区B座2层</div>
        </div>
        <div class="footer_one footer_two">
            <div class="contact_us">
                <div class="contact_a">关于我们</div>
                <div class="contact_b">ABOUT US</div>
            </div>
            <a href="<?php echo urlShop("article","",array('article_id'=>22)) ?>" class="our_tell">公司介绍</a>
            <a href="" class="our_adress">媒体报道</a>
        </div>
        <div class="footer_one footer_two">
            <div class="contact_us">
                <div class="contact_a">招商加盟</div>
                <div class="contact_b">CHINA MERCHANTS</div>
            </div>
            <div class="our_tell">市场合作 0351-2351212</div>
            <a href="" class="our_adress">招商须知</a>
        </div>
        <div class="look_at">
            <div class="look_me">扫我关注</div>
            <img class="erWeiMa" src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$GLOBALS['setting_config']['site_logowx']; ?>" alt="">
        </div>
    </div>
</div>

<!-- 底部 end -->

<?php echo getChat($layout);?>
<?php if (C('debug') == 1){?>
<div id="think_page_trace" class="trace">
  <fieldset id="querybox">
    <legend><?php echo $lang['nc_debug_trace_title'];?></legend>
    <div> <?php print_r(Tpl::showTrace());?> </div>
  </fieldset>
</div>
<?php }?>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.cookie.js"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/qtip/jquery.qtip.min.js"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<!-- 对比 -->
<script src="<?php echo SHOP_RESOURCE_SITE_URL;?>/js/compare.js"></script>
<script type="text/javascript">
$(function(){
	// Membership card
	$('[nctype="mcard"]').membershipCard({type:'shop'});
});
//v4
function fade() {
	$("img[rel='lazy']").each(function () {
		var $scroTop = $(this).offset();
		if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {
			$(this).hide();
			$(this).attr("src", $(this).attr("data-url"));
			$(this).removeAttr("rel");
			$(this).removeAttr("name");
			$(this).fadeIn(500);
		}
	});
}
if($("img[rel='lazy']").length > 0) {
	$(window).scroll(function () {
		fade();
	});
};
fade();
</script>