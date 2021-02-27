<?php
/**
 * 主模版文件
 * 
 * Author: ngtwewy <62006464@qq.com>
 * Author URI: http://javascript.net.cn
 * Theme URI: https://github.com/ngtwewy/snowland
 * License: Apache Licence 2.0
 * License URI: http://www.apache.org/licenses/LICENSE-2.0
 */

get_header();
?>


    <div class="hot">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-26.png">
        <div class="hot-container">
            <div class="hot-item-panel" style="margin-top:1px">
                <?php query_posts('cat=7&posts_per_page=3'); while(have_posts()): the_post(); ?>  
                <a href="<?php the_permalink()?>" target="_blank">
                    <div class="hot-item"><span><?php the_title();?></span><span><?php the_date("Y-m-d");?></span></div>
                </a>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    
    
    <div class="widget-header">
        <div class="widget-title">
            全国竞价
        </div>
        <div class="widget-desc">
            National bidding
        </div>
    </div>


    <div class="widget-content jj">
        <div class="widget-jj">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-1.png">
            <div class="idesc">全国车商报价，哪里便宜哪里买 </div>
            <a href="https://v.youku.com/v_show/id_XNDExMjg4MDc2OA==.html" target="_blank">
                <span>查看详情</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
            </a>
        </div>
        <div class="widget-jj">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-2.png">
            <div class="idesc">全国车商报价，哪里便宜哪里买 </div>
            <a href="https://v.youku.com/v_show/id_XNDExMjg4MDc2OA==.html" target="_blank">
                <span>查看详情</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
            </a>
        </div>
        <div class="widget-jj">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-28.png">
            <div class="idesc">线上看车拼团、一台也是批发价  </div>
            <a href="https://v.youku.com/v_show/id_XNDExMjg4MDc2OA==.html" target="_blank">
                <span>查看详情</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
            </a>
        </div>
    </div>


    <div class="widget-header">
        <div class="widget-title">
            安心存管
        </div>
        <div class="widget-desc">
            Safe deposit
        </div>
    </div>

    <div class="widget-content safe">
        <a class="safe-one">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-32.png">
            <div class="safe-info">
                购车订金银行监管、见车交车再付款<br>
                交易安全有保障          
            </div>
        </a>
        <a class="safe-two">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-13.png">
            <div class="safe-info">
                启运交车双检测<br>
                太平洋承保检测结果        
            </div>
        </a>
    </div>



    <div class="widget-header">
        <div class="widget-title">
            车贷超市
        </div>
        <div class="widget-desc">
            Chedai supermarket
        </div>
    </div>

    <div class="widget-content mkt">
        <div class="market">
            <div class="market-header">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-19.png">
                <span>邮政银行车贷</span>
            </div>
            <div class="market-body">
                <div class="body-widget b1">
                    <div>200,000</div>
                    <div>预评估可借</div>
                </div>
                <div class="body-widget b2">
                    <div>1-3天</div>
                    <div>线下审批</div>
                </div>
                <div class="body-widget b3">
                    <a href="https://fin.rongzer.com/finance-platformfjco/psbccsl/c-loan?productId=PSBC" target="_blank">
                        <div>立即申请</div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                    </a>
                </div>
            </div>
            <div class="market-footer">
                <div class="footer-one">
                    年利率4.35%-6.3% | 12个月
                </div>
                <div class="footer-two">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-18.png">
                    <div>95580</div>
                </div>
            </div>
        </div><!-- .market -->
        <div class="market">
            <div class="market-header">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-17.png">
                <span>广发银行 E秒贷</span>
            </div>
            <div class="market-body">
                <div class="body-widget b1">
                    <div>200,000</div>
                    <div>预评估可借</div>
                </div>
                <div class="body-widget b2">
                    <div>1-20分钟</div>
                    <div>在线审批 支用</div>
                </div>
                <div class="body-widget b3">
                    <a href="https://fin.rongzer.com/finance-platformfjco/cgb/e-loan?productId=CGB" target="_blank">
                        <div>立即申请</div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                    </a>
                </div>
            </div>
            <div class="market-footer">
                <div class="footer-one">
                    年利率4.35%-6.3% | 12个月
                </div>
                <div class="footer-two">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-18.png">
                    <div>95580</div>
                </div>
            </div>
        </div><!-- .market -->
        <div class="market">
            <div class="market-header">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-24.png">
                <span>中国建设银行</span>
            </div>
            <div class="market-body">
                <div class="body-widget b1">
                    <div>200,000</div>
                    <div>预评估可借</div>
                </div>
                <div class="body-widget b2">
                    <div>1-5分钟</div>
                    <div>线下审批</div>
                </div>
                <div class="body-widget b3">
                    <a href="https://fin.rongzer.com/finance-platformfjco/ccbcsl/c-loan?productId=CCBCL" target="_blank">
                        <div>立即申请</div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                    </a>
                </div>
            </div>
            <div class="market-footer">
                <div class="footer-one">
                    年利率4.35%-6.3% | 12个月
                </div>
                <div class="footer-two">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-18.png">
                    <div>95580</div>
                </div>
            </div>
        </div><!-- .market -->
        <div class="market">
            <div class="market-header">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-23.png">
                <span>中国银行</span>
            </div>
            <div class="market-body">
                <div class="body-widget b1">
                    <div>200,000</div>
                    <div>预评估可借</div>
                </div>
                <div class="body-widget b2">
                    <div>1-3天</div>
                    <div>线下审批</div>
                </div>
                <div class="body-widget b3">
                    <a href="https://fin.rongzer.com/finance-platformfjco/boc/e-found?productId=BOC" target="_blank">
                        <div>立即申请</div>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                    </a>
                </div>
            </div>
            <div class="market-footer">
                <div class="footer-one">
                    年利率4.35%-6.3% | 12个月
                </div>
                <div class="footer-two">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-18.png">
                    <div>95580</div>
                </div>
            </div>
        </div><!-- .market -->
    </div>



    <div class="market-banner-container">
        <div class="banner-container">
            <p class="ititle">保险超市</p>
            <!-- <img src="<?php bloginfo('template_url'); ?>/assets/./images/index/select.png" alt=""> -->
            <div class="form-panel">
                <form method="post" action="<?php bloginfo('siteurl')?>/wp-content/plugins/basicform/insert.php" id="i-form">
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="">行驶城市</label>
                            <input type="text" name="city">
                        </div>
                        <div class="form-group">
                            <label for="">车牌号码</label>
                            <input type="text" name="chepai"">
                        </div>
                        <div class="form-group">
                            <label for="aa">新车</label>
                            <input type="checkbox" name="xinche" id="aa">     
                        </div>
                    </div>

                    <div class="form-inline two">
                        <div class="form-group">
                            <label for="">手机号&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="mobile">
                        </div>
                        <div class="form-group" style="margin-left:50px">
                            <label for="bb">上年新车本年续保</label>
                            <input type="checkbox" name="xubao" id="bb">   
                        </div>
                        <a href="javascript:;" class="btn" id="ss">
                            <div>立即申请</div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                        </a>
                    </div>
                    <div class="form-desc">
                        点击立即报价即代表您已阅读并同意<span>《个人信息保护政策》、《车险产品备案详情》</span>
                    </div>

                    <div class="qr-con">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/qrcode-wx.png" alt="">
                        <p>扫描二维码</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php bloginfo('siteurl')?>/wp-content/themes/main/assets/js/axios.min.js"></script>
<script>
function isubmit1(){
    var f = document.querySelector('#i-form');
    var formData = new FormData(f);
    console.log("提交。。。", formData);
    axios({
        method: 'post',
        url: document.querySelector('#i-form').getAttribute("action"),
        responseType: 'json',
        data: formData
    })
    .then(function (response) {
        if(response.data.code==true){
            alert(response.data.msg);
        }else{
            alert(response.data.msg);
        }
    })
    .catch(function (error) {
        console.log(error);
    });
}
document.querySelector("#ss").addEventListener("click",isubmit1);
</script>



    

    <div class="widget-container cop">
        <div class="widget-header">
            <div class="widget-title">
                合作招商
            </div>
            <div class="widget-desc">
                business cooperation
            </div>
        </div>
        <div class="widget-content">
            <div class="cop">
                <div class="cop-title">
                    车商入驻   
                </div>
                <div class="cop-desc">
                    发布优势车源、提供有竞争力报价   
                </div>
                <a href="/join" target='_blank'>
                    <div>立即入驻</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                </a>
            </div>
            <div class="cop">
                <div class="cop-title">
                    车商入驻   
                </div>
                <div class="cop-desc">
                    入驻展示，让车主更多选择，并优化与车主资信的匹配度。
                    触及低线城市的分散化直客渠道，降低了车贷机构的渠道维建成本；直客车主来源地域的分散化，以及渠道的集中管理，大大降低了道德风险；
                    拍车在线将成为各车贷金融机构的优质合作渠道。
                </div>
                <a href="/join" target='_blank'>
                    <div>立即入驻</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                </a>
            </div>
            <div class="cop">
                <div class="cop-title">
                    车商入驻   
                </div>
                <div class="cop-desc">
                    入驻展示，让车主更多选择，并优化与车主资信的匹配度。
                    触及低线城市的分散化直客渠道，降低了车贷机构的渠道维建成本；直客车主来源地域的分散化，以及渠道的集中管理，大大降低了道德风险；
                    拍车在线将成为各车贷金融机构的优质合作渠道。
                </div>
                <a href="/join" target='_blank'>
                    <div>立即入驻</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-20.png">
                </a>
            </div>
        </div>
    </div>



    <div class="widget-header img">
        <div class="widget-title">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-27.png">
        </div>
        <div class="widget-desc">
            找车大平台，省钱更省心
        </div>
    </div>

    <div class="widget-content ifindc">
        <div class="ifind">
            <div class="ifind-content">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-27.png">
                <div class="ifind-desc">
                    <p>拍车在线通过全国车商竞价，哪里便宜哪里买！ </p>
                    <p>购车订金由"银行"监管，交易安全有保障！ </p>
                    <p>订车交车双检测，检测失误则由保险机构赔偿。 </p>
                    <p>同时，拍车在线汇聚千款低价新车、百款车贷保险，让车主更多选择，更多省心！</p>
                </div>
            </div>
        </div>
        <div class="ifind videoq">
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/videojs/video-js.min.css">
            <script src="<?php bloginfo('template_url'); ?>/assets/videojs/video.min.js"></script>

            <video 
                id="player" 
                class="video-js vjs-fluid" 
                poster="http://www.jinjiangvip.com/wp-content/themes/spirit/assets/images/video.jpg"
                data-url="http://cloud.restfulapi.cn/html/jinjiang/video/pro.mp4"
            ></video>
            <style>
            #player{
                width:100%;
                height:100%;
            }
            </style>
            <script>
            // 播放器
            if(document.querySelector("#player")){
            var src = document.querySelector("#player").dataset.url;
            var options = {
                fluid: false,
                // autoplay: 'muted',
                preload: 'none',
                controls: true
            };
            var player = videojs('player', options, function onPlayerReady() {
                console.log('Your player is ready!');
            });
            player.src({
                src: src,
                // type: 'application/x-mpegURL'
                type: 'video/webm'
            });
            // player.load();
            // player.play();
            }
 
            </script>
        </div>
    </div>



    <div class="widget-header">
        <div class="widget-title black">
            小程序功能
        </div>
    </div>
    <div class="widget-content app">
        <a class="app-icon" href="javascript:;">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-16.png">
            <p>竞拍</p>
        </a>
        <a class="app-icon" href="javascript:;">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-21.png">
            <p>团购</p>
        </a>
        <a class="app-icon" href="javascript:;">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-22.png">
            <p>车贷</p>
        </a>
        <a class="app-icon" href="javascript:;">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-15.png">
            <p>保险</p>
        </a>
    </div>



    <div class="widget-header">
        <div class="widget-title">
            合作招商
        </div>
        <div class="widget-desc">
            business cooperation
        </div>
    </div>

    <div class="widget-content">
        <!-- Swiper -->
        <div class="swiper-container1">
            <div class="swiper-wrapper">
            <?php query_posts('cat=6&posts_per_page=8'); while(have_posts()): the_post(); ?>
                <div class="swiper-slide">
                    <?php
                    $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_post()->ID), 'full');
                    if(!empty($thumbnail_image)): 
                    ?>
                        <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-30.png">
                    <?php endif ?>
                    <div class="tt"><?php the_title(); ?></div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
            </div>
            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-next1"></div>
            <div class="swiper-button-prev1"></div>
        </div>
    </div>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container1', {
      slidesPerView: 3,
      spaceBetween: 30,
    //   pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    //   },
        navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
        },
    });
  </script>
 

    <div class="widget-header">
        <div class="widget-title black">
            200个交车节点城市
        </div>
    </div>
    <div class="widget-content map">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-29.png" alt="">
    </div>



    
    <div class="widget-container ho">
        <div class="widget-header">
            <div class="widget-title">
                公司荣誉
            </div>
            <div class="widget-desc">
                Company Honor
            </div>
        </div>
    
        <div class="widget-content j">
            <?php query_posts('cat=11&posts_per_page=4'); while(have_posts()): the_post(); ?>
                <a href="javascript:;">
                    <?php
                    $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_post()->ID), 'full');
                    if(!empty($thumbnail_image)): 
                    ?>
                        <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/index/jiang.jpg">
                    <?php endif ?>
                </a>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        <div class="widget-content news">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-25.png" alt="">
            <ul>
                <!-- <li><a href="#">XXX今日成功加盟拍车在线</a><span>2020-11-12</span></li>-->
                <?php query_posts('cat=7&posts_per_page=3'); while(have_posts()): the_post(); ?>  
                    <li><a href="<?php the_permalink()?>" target="_blank"><?php the_title();?></a><span><?php echo get_the_date("Y-m-d");?></span></li>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            </ul>
        </div>
    </div>




    <div class="widget-header">
        <div class="widget-title">
            加入我们
        </div>
        <div class="widget-desc">
            Join Us
        </div>
    </div>
    <div class="widget-content da">
        <p>如果你有梦想，</p>
        <p>如果你极度渴望梦想成真，</p>
        <p>如果你愿意付出非凡代价， </p>
        <p>请到<img src="<?php bloginfo('template_url'); ?>/assets/images/index/img-27.png">舞台来，一起成就你！！</p>
    </div>

    <div class="widget-content dada">
        <div class="swiper-container2">
            <div class="swiper-wrapper">
                <?php query_posts('cat=9&posts_per_page=8'); while(have_posts()): the_post(); ?>
                <div class="swiper-slide">
                    <?php
                    $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_post()->ID), 'full');
                    if(!empty($thumbnail_image)): 
                    ?>
                        <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/default.jpg">
                    <?php endif ?>
                    <div class="i-name"><?php the_title();?></div>
                    <div class="i-desc"><?php the_excerpt();?></div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-button-next2"></div>
            <div class="swiper-button-prev2"></div>
        </div>
    </div>
    <script>
        var swiper = new Swiper('.swiper-container2', {
          slidesPerView: 4,
          spaceBetween: 30,
        //   pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        //   },
            navigation: {
                nextEl: '.swiper-button-next2',
                prevEl: '.swiper-button-prev2',
            },
        });
      </script>



<?php
get_footer();