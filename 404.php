<?php 
/* Template: 404 page (Not Found) */

get_header(); ?>
<div class="container marginspage">
    <div class="row">
        <div class="eight columns">
            <div class="confused">
                <img src="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/confused.png" alt="You seem a little lost because this page doesn't exist.">
            </div>
            <h2>Uh oh!</h2>
            <h3>Seems like you're looking for something we don't have.</h3>

            <h2>Try searching for what you need:</h2>
            <?php get_search_form(); ?>
        </div>
<!--Sidebar -->
        <div class="four columns sidebarstyle">
            <div class="searchbx">
                <?php get_search_form(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

