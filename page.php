<?php get_header(); ?>
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
<!-- BEGIN SIDEBAR AREA -->
        <div class="four columns sidebarstyle">
            <div class="searchbx">
                <?php get_search_form(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
<!-- END SIDEBAR AREA -->
    </div>
</div>
<?php get_footer(); ?>