<?php

/*Template Name: Blog Page*/

get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
    <div class="container blogcontent">
        <div class="row">
            <div class="twelve columns">
<!-- BEGIN LOOP -->
                <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                <div class="blog-posts">
                    <h4><?php the_category(', ') ?></h4>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="hide-content">
                        <div class="metainfo">
                            <?php the_time('F jS, Y') ?>
                            <span class="meta-glyph">|</span>
                            <a href="<?php comments_link(); ?>">
                            Comments</a>
                            <span class="meta-glyph social-shortcode">|</span>
                        </div> 
                        <div class="social-shortcode">
                            <?php echo do_shortcode('[ssba]'); ?>
                        </div>
                    </div>
                    <span class="hide-content">
                    <?php the_content(); ?>
                    </span>
                </div>
                <div class="clear"></div>
                <?php endwhile; ?> <!-- end while -->
                    <div class="next_prev"><p><?php posts_nav_link(' | ', '&lsaquo; previous', 'next &rsaquo;'); ?></p></div>
                <?php endif; //end if
                wp_reset_query(); ?>
<!-- END LOOP -->
            </div>
        </div>
    </div><!--END CONTAINER-->
<?php get_footer(); ?>

