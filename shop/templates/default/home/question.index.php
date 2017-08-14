<?php defined('InShopNC') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/all.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/wenda_zdw.css" rel="stylesheet" type="text/css">
<!--  问答首页 start -->

<section>
    <!--导航条-->
    <ul class="nav">
        <li><a href="#" class="active">首页</a></li>
        <li><a href="#">咨询</a></li>
    </ul>
    <!--提问专区-->
    <div class="twzq">
        <img src="<?php echo SHOP_TEMPLATES_URL?>/dw/image/wd-twzq_zdw.png"/>
        
        <div class="banner">
            <img src="<?php echo SHOP_TEMPLATES_URL?>/dw/image/wd_banner_zdw.png"/>
            <form action="">
                <ul>
                    <li>
                        <label>您的问题是</label>
                        <input name="" value="" size="64" placeholder="标题：写下你的问题"/>
                    </li>
                    <li>
                        
                        <textarea name="que" class="que" placeholder="选填，详细说明您的问题，以便获得更好的答案"></textarea>
                    </li>
                    
                    <li>
                        <a href="#">我们的指导老师，将及时回答您的问题</a>
                    </li>
                    <li>
                        平台咨询电话：<?php echo $GLOBALS['setting_config']['site_tel400']; ?>
                    </li>
                    
                </ul>
                <input class="btn" type="submit" value="立即询问"/>
            </form>
        </div>
    </div>
    <!--热点问题-->
    <div class="rdtw">
        <div class="rdtw">
            <img src="<?php echo SHOP_TEMPLATES_URL?>/dw/image/wd_rdtw_zdw.png"/>
        </div>
        <div class="rdtw_qa">
            <div>
                <ul class="rdtw_qqq">
                    <b>遗传性多发性骨瘤怎么治疗？预后如何？</b>
                    <span>2016.01.05</span><br/>
                </ul>
                <ul class="rdtw_aaa">
                <p>遗传性多发性骨软骨瘤亦称为多发性外生骨疣、骨干端连续症、遗传性畸形性软骨发育异常症等。目前国内外多数学者采用遗传性多发性骨软骨瘤这一名称。
                <br/>治疗：<br/>
                无症状者不需处理。如有疼痛，肢体功能障碍者、骨骼发育畸形，或有合并症时，可做局部肿瘤切除，矫正骨骼畸形应待骨骼发育成熟之后进行，以免畸形复发。
                <br/>预后：<br/>
                如发生恶变可转化为软骨肉瘤、恶性纤维组织细胞瘤或骨肉瘤。一旦恶变应采取相应的治疗措施，以求治愈。
                </p>
                </ul>
            </div>
            <ul class="rdtw_bottom">
                <li class="lf"><a href="#">匿名提问</a></li>
                <li class="rt"><a href="#">张老师的回答</a></li>
            </ul>
            <img src="<?php echo SHOP_TEMPLATES_URL?>/dw/image/wd_yisheng_zdw.png"/>
            <button>张医师 | 预约 +</button>
        </div>
        <div class="rdtw_qa">
            <div>
                <ul class="rdtw_qqq">
                    <b>遗传性多发性骨瘤怎么治疗？预后如何？</b>
                    <span>2016.01.05</span><br/>
                </ul>
                <ul class="rdtw_aaa">
                    <p>遗传性多发性骨软骨瘤亦称为多发性外生骨疣、骨干端连续症、遗传性畸形性软骨发育异常症等。目前国内外多数学者采用遗传性多发性骨软骨瘤这一名称。
                        <br/>治疗：<br/>
                        无症状者不需处理。如有疼痛，肢体功能障碍者、骨骼发育畸形，或有合并症时，可做局部肿瘤切除，矫正骨骼畸形应待骨骼发育成熟之后进行，以免畸形复发。
                        <br/>预后：<br/>
                        如发生恶变可转化为软骨肉瘤、恶性纤维组织细胞瘤或骨肉瘤。一旦恶变应采取相应的治疗措施，以求治愈。
                    </p>
                </ul>
            </div>
            <ul class="rdtw_bottom">
                <li class="lf"><a href="#">匿名提问</a></li>
                <li class="rt"><a href="#">张老师的回答</a></li>
            </ul>
            <img src="themes/image/wd_yisheng_zdw.png"/>
            <button>张医师 | 预约 +</button>
        </div>
        <!--查看更多-->
        <button>查看更多</button>
    </div>
</section>


<!--  问答首页 end -->