<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=375, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<!--<meta property="og:image" content="<?php echo get_theme_file_uri('/dist/images/Anchovies_Logo.gif') ?>" />
<meta property="og:video" content="<?php echo get_theme_file_uri('/dist/images/Anchovies_Logo.mp4') ?>" />
<meta property="og:title" content="Anchovies" />
<meta property="og:description" content="Anchovies is a creative agency unafraid to shake things up in order to fill the world with surprise and delight." />
<meta property="og:type" content="website" />-->
<link rel="shortcut icon" href="<?php echo get_theme_file_uri('/dist/images/icon_green.ico'); ?>" type="image/x-icon">

<title>Viridian</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="container">
    <div class="logo">
        <?php
        if(is_front_page()) :
        ?>
            <a href="/">
                <div class="logo_desktop">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('header_logo_light'), 'full'); ?>">
                </div>
            </a>
        <?php
        else :
        ?>
            <a href="/">
                <div class="logo_desktop">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('header_logo_dark'), 'full'); ?>">
                </div>
            </a>
        <?php
        endif;
        ?>
    </div>
    <div class="nav_open mobile_menu_txt">Menu</div>
    <div class="nav_wrap">
        <div class="nav_inner">

            <div class="header-menu">
                <div class="child-close">close capabilities menu</div>
                <a href="/leadership"><p class="menu-item mobile_menu_txt">Leadership</p></a>
                <p class="menu-item menu-item-has-children mobile_menu_txt">Capabilities <span class="mobile_cross_vert checked"></span> <span class="mobile_cross_hor"></span></p>
                    <div class="sub-menu-wrap">
                        <div class="sub-menu container">
                            <div class="sub-menu-items">
                                <div class="sub-menu-item-names">
                                    <h2 class="sub-menu-item-name menu-name-1">
                                        <span class="menu-name-desk">
                                            <a href="/sellers-of-distressed-real-estate">Sellers of Distressed Real Estate</a>
                                        </span>

                                        <span class="menu-name-mob">
                                            <a href="/sellers-of-distressed-real-estate">Sellers of Distressed Real Estate</a>
                                        </span>
                                    </h2>
                                    <h2 class="sub-menu-item-name menu-name-2">
                                        <span class="menu-name-desk">
                                            <a href="/buyers-tenants">Buyers & Tenants</a>
                                        </span>

                                        <span class="menu-name-mob">
                                            <a href="/buyers-tenants">Buyers & Tenants</a>
                                        </span>
                                    </h2>
                                    <h2 class="sub-menu-item-name menu-name-3">
                                        <span class="menu-name-desk">
                                            <a href="/community-partners">Community Partners</a>
                                        </span>

                                        <span class="menu-name-mob">
                                            <a href="/community-partners">Community Partners</a>
                                        </span>
                                    </h2>
                                    <h2 class="sub-menu-item-name menu-name-4">
                                        <span class="menu-name-desk">
                                            <a href="/capital-partners">Capital Partners</a>
                                        </span>

                                        <span class="menu-name-mob">
                                            <a href="/capital-partners">Capital Partners</a>
                                        </span>
                                    </h2>
                                </div>

                                <div class="sub-menu-item-inner">
                                    <div class="sub-menu-item-copy menu-copy-1 show">
                                        <h2>Revitalized land in highly desirable geographical locations ready for modern facilities.</h2>
                                        <a href="/sellers-of-distressed-real-estate"><button class="btn headerBtn"><span>Sellers of Distressed Real Estate</span> <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>"></button></a>
                                    </div>
                                    <div class="sub-menu-item-copy menu-copy-2">
                                        <h2>Revitalized land in highly desirable geographical locations ready for modern facilities.</h2>
                                        <a href="/buyers-tenants"><button class="btn headerBtn"><span>Buyers &amp; Tenants</span> <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>"></button></a>
                                    </div>
                                    <div class="sub-menu-item-copy menu-copy-3">
                                        <h2>Revitalized land in highly desirable geographical locations ready for modern facilities.</h2>
                                        <a href="/community-partners"><button class="btn headerBtn"><span>Community Partners</span> <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>"></button></a>
                                    </div>
                                    <div class="sub-menu-item-copy menu-copy-4">
                                        <h2>Revitalized land in highly desirable geographical locations ready for modern facilities.</h2>
                                        <a href="/capital-partners"><button class="btn headerBtn"><span>Capital Partners</span> <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>"></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <a href="/case-studies"><p class="menu-item mobile_menu_txt menu_cs">Case Studies</p></a>
                <a href="/contact-us"><p class="menu-item mobile_menu_txt menu-item-with-arrow bold">Work Together
                    <span class="menu_mobile_work"><img src="<?php echo get_theme_file_uri('/dist/images/work_arrow_mob.svg'); ?>"></span>
                </p></a>
            </div>
        </div>
    </div>
</header>
