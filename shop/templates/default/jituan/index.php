<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $output['html_title'];?></title>
    <link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL;?>/group/css/public_zn.css">
    <link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL;?>/group/css/dyw_index_zn.css">
    <!--<link rel="stylesheet" href="css/demo.css">-->
    <link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL;?>/group/css/style.css">
    <script src="<?php echo SHOP_TEMPLATES_URL;?>/group/js/modernizr.custom.53451.js"></script>
</head>
<body>
    <div id="login_zn">
        <p>  
        <?php if ($_SESSION['is_login']) {?>
            <span><a href="<?php echo urlShop('login','logout');?>">退出</a></span>
            <span>|</span>
            <span><a href="<?php echo urlShop('member','home');?>">个人中心</a></span>
            <span style="font-size:12px;color:#e5e5e5;margin-left:12px;margin-right:12px;">|</span>
            <span><a href="<?php echo urlShop('member','home');?>"><?php echo $_SESSION['member_name'];?></a></span>
            
         <?php } else {?>
            <span><a href="<?php echo urlShop("login","login")?>">登录</a></span>
            <span>|</span>
            <span><a href="<?php  echo urlShop("login","register")?>">注册</a></span>
        <?php }?>
        </p>
    </div>
    <header id="head_zn">
        <div id="head_box_zn">
            <a href="<?php echo BASE_SITE_URL;?>"  class="login_zn">
                <img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$output['setting_config']['group_logo']; ?>" alt="">
            </a>
            <ul id="head_nav_box_zn">
                <li class="head_list_zn">
                    <a  href="">
                        太常集团
                    </a>
                </li>
                <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){?>
                <?php foreach($output['nav_list'] as $nav){?>
                <?php if($nav['nav_location'] == '4'){?>
                <li class="head_list_zn">
                    <a  <?php
        if($nav['nav_new_open']) {
            echo ' target="_blank"';
        }
        switch($nav['nav_type']) {
            case '0':
                echo ' href="' . $nav['nav_url'] . '"';
                break;
            case '1':
                echo ' href="' . urlShop('search', 'index',array('cate_id'=>$nav['item_id'])) . '"';
                if (isset($_GET['cate_id']) && $_GET['cate_id'] == $nav['item_id']) {
                    echo ' class="current"';
                }
                break;
            case '2':
                echo ' href="' . urlShop('article', 'article',array('ac_id'=>$nav['item_id'])) . '"';
                if (isset($_GET['ac_id']) && $_GET['ac_id'] == $nav['item_id']) {
                    echo ' class="current"';
                }
                break;
            case '3':
                echo ' href="' . urlShop('activity', 'index', array('activity_id'=>$nav['item_id'])) . '"';
                if (isset($_GET['activity_id']) && $_GET['activity_id'] == $nav['item_id']) {
                    echo ' class="current"';
                }
                break;
            case '4':
                echo ' href="' . urlShop('video', 'video', array('vd_id'=>$nav['item_id'])) . '"';
                if (isset($_GET['vd_id']) && $_GET['vd_id'] == $nav['item_id']) {
                    echo ' class="current"';
                }
                break;
        }
        ?> >
                        <?php echo $nav['nav_title'] ?>
                    </a>
                </li>
                <?php }?>
                <?php }?>
                <?php }?>
            </ul>
            <div class="search_box">
                <span class="search_zn">
                </span>
                <form class="search-form" method="get" action="<?php echo SHOP_SITE_URL;?>">
                <input type="hidden" value="search" id="search_act" name="act">
                <div class="search_box_zn">
                    <span class="search_arrow_zn"></span>
                    <input type="text" placeholder="搜索关键词" name="keyword">
                    <i></i>
                </div>
                </form>
            </div>
        </div>
    </header>
    <nav id="nav_zn" >
       <?php echo $output['web_html']['index_group'];?>
    </nav>
    <ul id="activity_zn">
        <li class="activity_list_zn">
            <?php echo rec(19,1);?>
            
        </li>
        <li class="activity_list_zn">
            <?php echo rec(18,1);?>
            
        </li>
        <li class="activity_list_zn">
            <a href="">
                <?php echo rec(17,1);?>
               
            </a>
        </li>
    </ul>
    <section id="section_zn">
        <div id="dynamic_zn">
            <p class="activity_title_zn">
                <i></i>
                集团动态
            </p>
            <p class="parting_line_zn"></p>
            <div id="aggregative_zn">
                <div id="news_zn">
                    <p class="news_title_zn">
                        新闻动态
                    </p>
                    <ul class="news_box_zn">
                         <?php if($output['new_article']&&is_array($output["new_article"])) {?>
                         <?php foreach ($output['new_article'] as $k=>$article) {?>
                        <li class="news_list_zn">
                            <a <?php if($article['article_url']!=''){?>target="_blank"<?php }?> href="<?php if($article['article_url']!='')echo $article['article_url'];else echo urlShop('article', 'show', array('article_id'=>$article['article_id']));?>">
                                <span><?php echo sprintf("%02d",$k+1) ?></span>
                                <p><?php echo str_cut($article['article_title'], 70)?></p>
                            </a>
                        </li>
                        <?php }?>
                       <?php }?>
                    </ul>
                    <p class="look_more_news_zn">
                        <a href="<?php echo urlShop("article","article",array("ac_id"=>14))?>">更多新闻&gt;</a>
                    </p>
                </div>
                <div id="symposium_zn">
                    <p class="news_title_zn">
                        专题
                    </p>
                    <ul class="fixed_symposium_zn">
                        <li class="fixed_symposium_list_zn">
                               <?php echo rec(20,1);?>
                        </li>
                        <li class="fixed_symposium_list_zn">
                               <?php echo rec(21,1);?>
                        </li>
                        <li class="fixed_symposium_list_zn">
                            <?php echo rec(22,1);?>
                        </li>
                        <li class="fixed_symposium_list_zn">
                            <?php echo rec(23,1);?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="our_domain_zn">
            <div id="our_domain_box_zn">
                <p class="activity_title_zn">
                    <i></i>
                    我们的产业
                </p>
                <p class="parting_line_zn"></p>
                <ul class="our_domain_zn">
                    <li class="our_domain_list_zn">
                        <a href="http://www.sxtaichang.com">
                            <p>独一张</p>
                            <img src="https://mini.s-shot.ru/1920x1200/JPEG/1920/Z100/?www.sxtaichang.com" alt="" width="380" height="285">
                        </a>
                    </li>
                    <li class="our_domain_list_zn">
                        <a href="http://www.shiweijian.com.cn">
                            <p>食维健</p>
                            <img src="https://mini.s-shot.ru/1920x1200/JPEG/1920/Z100/?www.shiweijian.com.cn" alt="" width="380" height="285">
                        </a>
                    </li>
                    <li class="our_domain_list_zn">
                        <a href="<?php echo urlShop("index","selfindex")?>">
                            <p>独易网</p>
                            <img src="https://mini.s-shot.ru/1920x1200/JPEG/1920/Z100/?www.duyiwang.cn" alt="" width="380" height="285">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="our_service_zn">
            <p class="activity_title_zn">
                <i></i>
                我们的服务
            </p>
            <p class="parting_line_zn"></p>
            <ul class="our_service_box_zn">
                <li class="our_service_list_zn">
                    <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/jiankangguanlishi.png" alt="">
                    <p class="service_title_zn">健康管理师</p>
                    <div class="hide_box_zn">
                        <p class="hide_title_zn">健康管理师</p>
                        <p class="hide_parting_line_zn"></p>
                        <p class="hide_con_zn">
                            健康管理师是从事个体和群体健康的检测、分析、评估以及健康咨询、指导和危险因素干预等工作的专业人员。主要从事的工作内容包括：采集和管理个人或群体的健康信息；评估个人或群体的健康和疾病危险性；进行个人或群体的健康咨询与指导；制定个人或群体的健康促进计划。
                        </p>
                        <span><a href="<?php echo urlShop("article","member_advisor_list")?>">了解更多</a></span>
                    </div>
                </li>
                <li class="our_service_list_zn">
                    <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/yinyangshi.png" alt="">
                    <p class="service_title_zn">营养师</p>
                    <div class="hide_box_zn">
                        <p class="hide_title_zn">营养师</p>
                        <p class="hide_parting_line_zn"></p>
                        <p class="hide_con_zn">
                            5A健管体系中的指导师也由取得国家相应职业资格证的专业人员担任，包括营养师心理咨询师、体能康复师、医师、药师、社会师等，由这些专业人士提供一对一咨询指导和跟踪辅导服务，使客户从营养、心理、运动康复、社会等多角度得到全面的健康维护和保障服务。
                        </p>
                        <span><a href="http://www.shiweijian.com.cn/a/yingyangshi/">了解更多</a></span>
                    </div>
                </li>
                <li class="our_service_list_zn">
                    <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/jiankangganyu.png" alt="">
                    <p class="service_title_zn">健康干预</p>
                    <div class="hide_box_zn">
                        <p class="hide_title_zn">健康干预</p>
                        <p class="hide_parting_line_zn"></p>
                        <p class="hide_con_zn">
                            实施健康干预是变被动的疾病治疗为主动的管理健康，达到节约医疗费用支出、维护健康的目的。具体做法是通过专业的护理人员对个人和群体提供有针对性的健康指导，并干预实施。它帮助、指导人们成功有效地把握与维护自身的健康。
                        </p>
                        <span><a href="http://www.shiweijian.com.cn">了解更多</a></span>
                    </div>
                </li>
            </ul>
        </div>
        <div id="join_us_zn">
            <p class="activity_title_zn">
                <i></i>
                加入我们
            </p>
            <p class="parting_line_zn"></p>
            <div class="container">
                <div id="dg-container" class="dg-container">
                    <div class="dg-wrapper">
                        <?php if($output['group_join'][0]['code_info']&&is_array($output['group_join'][0]['code_info'])) {?>
                        <?php foreach ($output['group_join'][0]['code_info'] as $val) {?>
                        <a href="<?php echo $val['pic_url'];?>"><img src="<?php echo UPLOAD_SITE_URL.'/'.$val['pic_img'];?>" alt="<?php echo $val['pic_name']?>"><div><?php echo $val["pic_name"]?></div></a>
                        <?php }?>
                        <?php }?>
                    </div>
                    <nav>
                        <span class="dg-prev">&lt;</span>
                        <span class="dg-next">&gt;</span>
                    </nav>
                </div>
            </div>
        </div>
       
    </section>
    <div id="show_zn">
        <ul class="show_box_zn">
          <?php if($output['group_recommend'][1]&&is_array($output['group_recommend'][1]['code_info'])) {?>
            <?php foreach ($output['group_recommend'][1]['code_info'] as $k=>$v) {?>
            <li class="show_list_zn">
                <ul class="big_canal_zn">
                    <li class="big_canal_list_zn">
                        <a href="">
                            <?php if($k==1){echo "大渠道展示";}elseif($k==2){echo "门店加盟展示";}elseif($k==3){echo '商家入驻展示';}?>
                        </a>
                    </li>
                    <?php foreach($v['pic_list'] as $cv){?>
                    <?php if($cv['pic_img']) {?>
                    <li class="big_canal_list_zn">
                        <a href="<?php echo $cv['pic_url']?>">
                            <img src="<?php echo UPLOAD_SITE_URL.DS.$cv['pic_img']?>" alt="">
                        </a>
                    </li>
                    <?php }?>
                    <?php }?>
                </ul>
            </li>
            <?php }?>
            <?php }?>
        </ul>
    </div>
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
    <ul id="prompt_zn">
        <li>
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/bottom_zn_01.png" alt="">
            <ul class="online_zn">
                <li class="online_list_zn">
                    <a href="<?php echo urlShop("show_joinin")?>">
                        <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/on_line_zn.png" alt="">
                        <span>商店加盟</span>
                    </a>
                
            </ul>
            <i></i>
        </li>
        <li>
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/bottom_zn_02.png" alt="">
            <div class="line_us_zn">
                <p>独易网</p>
                <p><?php echo $GLOBALS['setting_config']['site_tel400']; ?></p>
            </div>
            <i></i>
        </li>
        <li>
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/bottom_zn_03.png" alt="">
            <div class="leave_tel_zn">
                <p>留下您的电话，方便我们联系您</p>
                <input type="text">
            </div>
            <i></i>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/image/image_zn/bottom_zn_04.png" alt="">
            </a>
        </li>
    </ul>
    <script src="<?php echo SHOP_TEMPLATES_URL;?>/group/js/jquery.min.js"></script>
    <script src="<?php echo SHOP_TEMPLATES_URL;?>/group/js/jquery.gallery.js"></script>
    <script>
        var search_flag_zn=true;
        $('.search_zn').click(function(){
            if(search_flag_zn==true){
                $('.search_box_zn').show();
                search_flag_zn=false;
            }else{
                $('.search_box_zn').hide();
                search_flag_zn=true;
            }
        })
//        轮播图
        $(function(){
            $('#dg-container').gallery();
            //第一张显示
            $(".pic li").eq(0).show();
            //鼠标滑过手动切换，淡入淡出
            $("#position li").mouseover(function() {
                $(this).addClass('cur').siblings().removeClass("cur");
                var index = $(this).index();
                i = index;//不加这句有个bug，鼠标移出小圆点后，自动轮播不是小圆点的后一个
                // $(".pic li").eq(index).show().siblings().hide();
                $(".pic li").eq(i).fadeIn(1500).siblings().fadeOut(1500);
            });
            //自动轮播
            var i=0;
            var timer=setInterval(play,3000);
            //向右切换
            function play(){
                i++;
                i = i > 2 ? 0 : i ;
                $("#position li").eq(i).addClass('cur').siblings().removeClass("cur");
                $(".pic li").eq(i).fadeIn(1500).siblings().fadeOut(1500);
            }
            //向左切换
            function playLeft(){
                i--;
                i = i < 0 ? 2 : i ;
                $("#position li").eq(i).addClass('cur').siblings().removeClass("cur");
                $(".pic li").eq(i).fadeIn(1500).siblings().fadeOut(1500);
            }
            //鼠标移入移出效果
            $("#container").hover(function() {
                clearInterval(timer);
            }, function() {
                timer=setInterval(play,3000);
            });
            //左右点击切换
            $("#prev").click(function(){
                playLeft();
            })
            $("#next").click(function(){
                play();
            })
        })
    </script>
</body>
</html>