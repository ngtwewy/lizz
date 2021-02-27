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

<?php 
setPostViews(get_the_ID()); // 更新文章浏览次数
?> 



    <div class="nav-bar b">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/home.png">
        <div class="bread-nav">
            <span> 当前位置：</span>
            <?php get_breadcrumbs();?>        
        </div>
    </div>
    
    
    <div class="con-container">
        <div class="con-left">
            <div class="article-content">
                <div class="media-title"><?php the_title(); ?></div>
                <div class="media-meta">
                    <span><?php the_time('Y-m-d H:i');?> &nbsp;&nbsp;</span>
                    <span><?php the_category(',');?> &nbsp;&nbsp;</span>
                    <span>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/browse.svg">
                        <?php echo getPostViews(get_the_ID()); ?>
                    </span>
                </div>
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
        </div>
        
        <div class="article-container con-right">
            <div class="right-sider-header">
                <span><?php echo get_term_by('id', 7, 'category')->name ?></span>
                <a href="<?php echo get_category_link(7);?>" target="_blank">更多 ></a>
            </div>
            <div class="article-list">
                <?php query_posts('cat=7&posts_per_page=8'); while(have_posts()): the_post(); ?>
                    <div class="article-item">
                        <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>


    


<?php get_footer(); ?>