<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php wp_head(); ?>
    <?php
        $keywords = "";
        $description = "";
        if (is_home()) {
            
        } elseif (is_category()) {
            $keywords = single_cat_title('', false);
            $description = category_description();
        } elseif (is_tag()) {
            $keywords = single_tag_title('', false);
            $description = tag_description();
        } elseif(is_single()){
            $description = get_the_excerpt();
        }
        $keywords = trim(strip_tags($keywords));
        $description = trim(strip_tags($description));
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/swiper/swiper.css" />
    <script src="<?php bloginfo('template_url'); ?>/assets/swiper/swiper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>
</head>
<body>
    <?php
    wp_body_open();
    ?>

    <div class="header-container">
        <header>
            <div class="logo">
                <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"></a>
            </div>
            <div class="nav-bar">
                <?php 
                $nav_str = wp_nav_menu( array(  
                    'theme_location'    => '', //[保留]用于在调用导航菜单时指定注册过的某一个导航菜单名，如果没有指定，则显示第一个  
                    'menu'              => 'top_menu', //[可删]使用导航菜单的名称调用菜单，可以是 id, slug, name (按顺序匹配的) 。  
                    'container'         => false, //[可删]最外层容器标签名  
                    'container_class'   => '',//[可删]最外层容器class名  
                    'container_id'      => '',//[可删]最外层容器id值  
                    'menu_class'        => 'nav-list', //[可删]ul 节点的 class 属性值  
                    'menu_id'           => '', //[可删]ul 节点的 id 属性值  
                    'echo'              => false, //[可删]确定直接显示导航菜单还是返回 HTML 片段，如果想将导航的代码作为赋值使用，可设置为false  
                    'fallback_cb'       => 'wp_page_menu', //[可删]备用的导航菜单函数，用于没有在后台设置导航时调用  
                    'before'            => '', //[可删]显示在导航a标签之前  
                    'after'             => '', //[可删]显示在导航a标签之后    
                    'link_before'       => '', //[可删]显示在导航链接名之前  
                    'link_after'        => '', //[可删]显示在导航链接名之后  
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  //[可删]使用字符串替换修改ul的class  
                    'depth'             => 0, //[可删]显示菜单的深度, 当数值为0时显示所有深度的菜单，-1所有菜单平级显示  
                    'walker'            => '' //[可删]自定义的遍历对象，调用一个对象定义显示导航菜单      
                ));
                echo str_replace('sub-menu', 'select', $nav_str);
                ?>
                <?php
                /*
                <ul class="nav-list">
                    <li class="menu-item"><a href="/">首页</a></li>
                    <li class="menu-item">
                        <a href="#">全国底价</a>
                        <ul class="select">
                            <li class="menu-item"><a href="">企业简介</a></li>
                            <li class="menu-item"><a href="">企业简介</a></li>
                            <li class="menu-item"><a href="">企业简介</a></li>
                            <li class="menu-item"><a href="">企业简介</a></li>
                            <li class="menu-item"><a href="">企业简介</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="#">安心存管</a></li>
                    <li class="menu-item"><a href="#">车贷超市</a></li>
                    <li class="menu-item"><a href="#">保险超市</a></li>
                    <li class="menu-item"><a href="#">合作招商</a></li>
                    <li class="menu-item"><a href="#">公司介绍</a></li>
                    <li class="menu-item"><a href="#">媒体报道</a></li>
                    <li class="menu-item"><a href="#">加入</a></li>
                </ul>
                */ 
                ?>
            </div>
        </header>
        <!-- 幻灯片 -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php query_posts('cat=10&posts_per_page=3'); while(have_posts()): the_post(); ?>  
                <a class="swiper-slide" href="javascript:;">
                    <?php
                    $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_post()->ID), 'full');
                    if(!empty($thumbnail_image)): 
                    ?>
                        <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/default.jpg">
                    <?php endif ?>
                </a>
            <?php endwhile; wp_reset_query(); ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div style="clear: both;"></div>
        </div>
    </div>