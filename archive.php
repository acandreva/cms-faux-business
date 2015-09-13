<?php
/*Template Name: Archive Page*/

get_header(); ?>
<div class="container marginspage">
    <div class="row">
        <div class="eight columns">
            <?php the_post(); ?>
<!--Data Context-->
            <h3>Archive by Month:</h3>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
            <h3>Archive by Category:</h3>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
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

