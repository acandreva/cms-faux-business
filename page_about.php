<?php

/*Template Name: About*/

get_header(); ?>
<div class="container marginspage">
    <div class="row">
        <div class="eight columns">
            <?php if (have_posts()) : 
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?> 
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
        <div class="four columns sidebarstyle">
            <div class="searchbx">
                <?php get_search_form(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>