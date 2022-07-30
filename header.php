<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php wp_head();?>
    <title><?php wp_title(''); ?></title>
    <!-- Stylesheets -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/color.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/flaticon.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">


    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png"
        type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
        <!-- Main Header -->
        <header class="main-header header-style-one">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><?php the_custom_logo();?>
                            </div>
                        </div>
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img
                                    src="<?php bloginfo('template_directory'); ?>/assets/images/icons/icon-bar.png"
                                    alt=""></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <?php   wp_nav_menu( array( 
                                'theme_location'    => 'top-menu',
                                'depth'             =>  3,
                                'menu_class'        => 'top-bar',
                                 ) ); 
                                ?>
                                </div>
                            </nav>
                        </div>
               
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="header-upper" style="height: 100px;">
                    <div class="auto-container">
                        <div class="inner-container">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo"><?php the_custom_logo();?>
                                </div>
                            </div>
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img
                                        src="<?php bloginfo('template_directory'); ?>/assets/images/icons/icon-bar-2.png"
                                        alt="">
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
           
                        </div>
                    </div>
                </div>
            </div><!-- End Sticky Menu -->
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-remove"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><img
                                        src="<?php bloginfo('template_directory'); ?>/assets/images/toolzappwht.png"
                                        alt=""></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                 
                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>