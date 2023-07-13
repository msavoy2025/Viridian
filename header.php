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

        	<?php
        	$capabilites_title = carbon_get_theme_option( 'crb_header_capabilies_title' );
        	$capabilites 	   = carbon_get_theme_option( 'crb_header_capabilites_items' );
        	?>
            <div class="header-menu">
                <div class="child-close">close capabilities menu</div>
                <a href="/leadership"><p class="menu-item mobile_menu_txt">Leadership</p></a>

                <?php if ( ! empty( $capabilites ) ):  ?>
	                <p class="menu-item menu-item-has-children mobile_menu_txt"><?php echo esc_html( $capabilites_title ); ?> <span class="mobile_cross_vert checked"></span> <span class="mobile_cross_hor"></span></p>
	                    <div class="sub-menu-wrap">
	                        <div class="sub-menu container">
	                            <div class="sub-menu-items">
	                                <div class="sub-menu-item-names">
	                                	<?php foreach ( $capabilites as $index => $item ) : ?>
		                                    <h2 class="sub-menu-item-name menu-name-<?php echo $index + 1; ?>">
		                                        <span class="menu-name-desk">
		                                            <a href="<?php echo esc_url( $item['url'] ); ?>">
		                                            	<?php echo esc_html( $item['title'] ); ?>
		                                            </a>
		                                        </span>

		                                        <span class="menu-name-mob">
		                                            <a href="<?php echo esc_url( $item['url'] ); ?>">
		                                            	<?php echo esc_html( $item['title'] ); ?>
		                                            </a>
		                                        </span>
		                                    </h2>
	                                	<?php endforeach ?>
	                                </div>

	                                <div class="sub-menu-item-inner">
	                                	<?php foreach ( $capabilites as $index => $item ) :
	                                		if ( ! empty( $item['side_text'] ) && $item['button_enable'] ): ?>
			                                    <div class="sub-menu-item-copy menu-copy-<?php echo $index + 1; ?> <?php echo ( $index == 0 ) ? 'show' : ''; ?>">
			                                    	<?php if ( ! empty( $item['side_text'] ) ) : ?>
				                                        <h2>
				                                        	<?php echo esc_html( $item['side_text'] ); ?>
				                                        </h2>
			                                    	<?php endif;

			                                    	if ( $item['button_enable'] ) : ?>
				                                        <a href="<?php echo esc_url( $item['button_url'] ); ?>" target="<?php echo esc_attr( $item['button_target'] ); ?>"><button class="btn headerBtn"><span>
				                                        	<?php echo esc_html( $item['button_label'] ); ?>
				                                        </span> <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>"></button></a>
			                                        <?php endif ?>
			                                    </div>
	                                		<?php endif;
                                		endforeach ?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
                <?php endif ?>
                <a href="/case-studies"><p class="menu-item mobile_menu_txt menu_cs">Case Studies</p></a>
                <a href="/contact-us"><p class="menu-item mobile_menu_txt menu-item-with-arrow bold">Work Together
                    <span class="menu_mobile_work"><img src="<?php echo get_theme_file_uri('/dist/images/work_arrow_mob.svg'); ?>"></span>
                </p></a>
            </div>
        </div>
    </div>
</header>

<header class="container header__hidden">
    <div class="logo">
        <a href="/">
            <div class="logo_desktop">
                <img src="http://viridian.flywheelsites.com/wp-content/uploads/2022/04/logo_cream.svg" alt="" />
            </div>
        </a>
    </div>
    <div class="nav_open mobile_menu_txt">Menu</div>
    <div class="nav_wrap">
        <div class="nav_inner">

            <?php
            $capabilites_title = carbon_get_theme_option( 'crb_header_capabilies_title' );
            $capabilites       = carbon_get_theme_option( 'crb_header_capabilites_items' );
            ?>
            <div class="header-menu">
                <div class="child-close">close capabilities menu</div>
                <a href="/leadership"><p class="menu-item mobile_menu_txt">Leadership</p></a>

                <?php if ( ! empty( $capabilites ) ):  ?>
                    <p class="menu-item menu-item-has-children mobile_menu_txt"><?php echo esc_html( $capabilites_title ); ?> <span class="mobile_cross_vert checked"></span> <span class="mobile_cross_hor"></span></p>
                        <div class="sub-menu-wrap">
                            <div class="sub-menu container">
                                <div class="sub-menu-items">
                                    <div class="sub-menu-item-names">
                                        <?php foreach ( $capabilites as $index => $item ) : ?>
                                            <h2 class="sub-menu-item-name menu-name-<?php echo $index + 1; ?>">
                                                <span class="menu-name-desk">
                                                    <a href="<?php echo esc_url( $item['url'] ); ?>">
                                                        <?php echo esc_html( $item['title'] ); ?>
                                                    </a>
                                                </span>

                                                <span class="menu-name-mob">
                                                    <a href="<?php echo esc_url( $item['url'] ); ?>">
                                                        <?php echo esc_html( $item['title'] ); ?>
                                                    </a>
                                                </span>
                                            </h2>
                                        <?php endforeach ?>
                                    </div>

                                    <div class="sub-menu-item-inner">
                                        <?php foreach ( $capabilites as $index => $item ) :
                                            if ( ! empty( $item['side_text'] ) && $item['button_enable'] ): ?>
                                                <div class="sub-menu-item-copy menu-copy-<?php echo $index + 1; ?> <?php echo ( $index == 0 ) ? 'show' : ''; ?>">
                                                    <?php if ( ! empty( $item['side_text'] ) ) : ?>
                                                        <h2>
                                                            <?php echo esc_html( $item['side_text'] ); ?>
                                                        </h2>
                                                    <?php endif;

                                                    if ( $item['button_enable'] ) : ?>
                                                        <a href="<?php echo esc_url( $item['button_url'] ); ?>" target="<?php echo esc_attr( $item['button_target'] ); ?>"><button class="btn headerBtn"><span>
                                                            <?php echo esc_html( $item['button_label'] ); ?>
                                                        </span> <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>"></button></a>
                                                    <?php endif ?>
                                                </div>
                                            <?php endif;
                                        endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endif ?>
                <a href="/case-studies"><p class="menu-item mobile_menu_txt menu_cs">Case Studies</p></a>
                <a href="/contact-us"><p class="menu-item mobile_menu_txt menu-item-with-arrow bold">Work Together
                    <span class="menu_mobile_work"><img src="<?php echo get_theme_file_uri('/dist/images/work_arrow_mob.svg'); ?>"></span>
                </p></a>
            </div>
        </div>
    </div>
</header>
