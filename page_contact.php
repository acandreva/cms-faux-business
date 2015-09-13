<?php

/*Template Name: Contact*/

get_header(); ?>
<div class="container marginspage">
    <div class="row">
        <div class="eight columns">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=zva8IKwRa_XI.k8LgUX_E4OUQ" id="slickslocate" class="map"></iframe>
            <?php if (have_posts()) : 
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?> 
                    <h3><?php the_title(); ?></h3>
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