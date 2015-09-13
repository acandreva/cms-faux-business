<?php

/* Template Name: Services Page*/

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
            <div class="coupons" id="deals">
                <h2>Coupons</h2>
                <a href="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/coupon1.png" id="coupon1" title="Slick's Coupon | 10 percent off your oil change" target="_blank"></a>
                <a href="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/coupon2.png" id="coupon2" title="Slick's Coupon | $50 off collision repair" target="_blank"></a>
                <a href="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/coupon3.png" id="coupon3" title="Slick's Coupon | $10 off tire change" target="_blank"></a>
                <a href="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/coupon4.png" id="coupon4" title="Slick's Coupon | Free engine check" target="_blank"></a>
            </div>
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