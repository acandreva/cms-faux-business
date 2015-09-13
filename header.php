<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Slick's Auto Body</title>
<?php wp_head(); ?>
    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!--<link rel="shortcut icon" href="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/favicon.ico">-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!--For navigation auto-hide-->
    <script type="text/javascript" src="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/js/headroom.min.js"></script>
    <!--For mobile menu
    <script type="text/javascript" src="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/js/jquery.ultimate-burger-menu.js"></script>
    <!--homepage slideshow-->
    <script type="text/javascript" src="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/js/jquery.backstretch.min.js"></script>

    <script type="text/javascript" src="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/js/main.js"></script>

</head>
<body>
    <header id="header" class="header fixed">
        <div class="container">
            <div class=" row clearfix" style="width:100%;">
                <?php if ( is_front_page() ) { ?>
                    <div class="twelve columns">
                        <?php wp_nav_menu(array(
                            'sort_column' => 'menu_order',
                            'container_class' => 'menu-header1'
                        )); ?>
                    </div>
                <?php } else { ?>
                    <div class="four columns logo"><a href="http://allisoncandreva.com/wp_2/" alt="Slicks Auto Body"><img src="http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/slicks_navy_small.png"></a></div>
                    <div class="eight columns">
                        <?php wp_nav_menu(array(
                            'sort_column' => 'menu_order',
                            'container_class' => 'menu-header2'
                        )); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </header>
<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->
