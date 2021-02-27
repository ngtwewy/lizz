<?php
/**
 * The template for displaying single posts and pages.
 * 
 * Author: ngtwewy <62006464@qq.com>
 * Author URI: http://javascript.net.cn
 * Theme URI: https://github.com/ngtwewy/snowland
 * License: Apache Licence 2.0
 * License URI: http://www.apache.org/licenses/LICENSE-2.0
 */

get_header();
?>

    <div class="nav-bar b">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/home.png">
        <div class="bread-nav">
            <span> 当前位置：</span>
            <?php get_breadcrumbs();?>               
        </div>
    </div>
    
    

    <div class="page-container">
        <div class="media-title"><?php the_title(); ?></div>
        <!-- <div class="media-meta">
            <span>2021-03-30 &nbsp;&nbsp;</span>
            <span><a href="#">最新资讯</a> &nbsp;&nbsp;</span>
            <span>
                <img src="images/browse.svg">
                206
            </span>
        </div> -->
        <div class="article-con">
            <?php 
            if ( have_posts() ) {

                while ( have_posts() ) {
                    the_post();
                    the_content();
                    // get_template_part( 'template-parts/content', get_post_type() );
                }
            }
            ?>
        </div>
    </div>



    <?php get_footer(); ?>