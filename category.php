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

<div class="nav-bar b">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/home.png">
        <div class="bread-nav">
            <span> 当前位置：</span>
            <?php get_breadcrumbs();?>          
        </div>
    </div>
    
    
    <div class="con-container">
        <div class="con-left">
            <div class="media-list">


            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="media-item">
                    <div class="media-title">
                        <a href="<?php the_permalink()?>" target="_blank"><?php the_title(); ?></a>
                    </div>
                    <div class="media-widget">
                        <div class="media-content">
                            <div class="media-info">
                                <div class="media-author">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/avatar.jpg">
                                    admin
                                </div>
                                <div class="media-description">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            <div class="media-meta">
                                <span><?php the_time('Y-m-d');?>  &nbsp;&nbsp;</span>
                                <span><a href="#">最新资讯</a> &nbsp;&nbsp;</span>
                                <span>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/browse.svg">
                                    <?php echo getPostViews(get_the_ID()); ?>
                                </span>
                            </div>
                        </div>
                        <?php
                        $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_post()->ID), 'full');
                        if(!empty($thumbnail_image)): 
                        ?>
                            <div class="media-thumbnail">                        
                                <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                            </div>
                        <?php else: ?>
                            
                        <?php endif ?>
                    </div>
                </div><!--media-widget-->
                <?php endwhile; ?>
            <?php endif; ?>
                


                <!--
                <div class="media-item">
                    <div class="media-title">
                        <a href="#?id=556">LOGO设计的时候为什么要画那些圈圈？</a>
                    </div>
                    <div class="media-widget">
                        <div class="media-content">
                            <div class="media-info">
                                <div class="media-author">
                                    <img src="images/avatar.jpg">
                                    admin
                                </div>
                                <div class="media-description">
                                    <p>
                                        你们知道Twitter的小鸟logo是由13个圆圈套合而成的吗？这个经典的小鸟logo是2012年更新之后的成果。记得Twitter当时说，这个logo由13个重叠的圆圈组成。不管怎么说，这种用正圆卡出来的弧形确实让人看着很舒服，比随手画出来的弧线要好很多（大神的随手画除外）。
                                        下面这组图来自网络，是很久以前小编在网上看到的。当时最让我惊讶的不是画面上有颜色的主体部分，而是背后那些复杂的辅助线。这些辅助线让小编想到当初高考时候的那道圆的平面几何题。在那之前，小编从来没想过能用数学画出这么感性的东西。
                                        后来，就慢慢看到很多logo都是用这种方法画出来的。下面这组图是设计师 Dor
                                    </p>
                                </div>
                            </div>
                            <div class="media-meta">
                                <span>2021-03-30 &nbsp;&nbsp;</span>
                                <span><a href="#">最新资讯</a> &nbsp;&nbsp;</span>
                                <span>
                                    <img src="images/browse.svg">
                                    206
                                </span>
                            </div>
                        </div>
                        
                        <div class="media-thumbnail">
                            <img src="images/index/img-32.png">
                        </div>
                    </div>
                </div> media-widget-->

            </div>
        
            <div class="nav-container">
            <?php
                the_posts_pagination(array(
                    'mid_size' => 3, 
                    'prev_text' => '<', 
                    'next_text' => '>',
                    'screen_reader_text' => ' ',
                    'aria_label' => "xxx",
                ));
            ?>
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





<?php
get_footer();
