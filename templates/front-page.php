<?php
/**
 * Template Name: Home
 */

$processes = carbon_get_the_post_meta('crb_processes');
get_header(); ?>


<div class="subheader" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('subheader_bg'), 'full'); ?>);">
    <div class="container-sm">
        <div class="subheader_mid">
            <p class="dinger-bold"><?php echo carbon_get_the_post_meta('subheader_textsm') ?></p>

            <div class="title__slider js-title-slider">
                <div class="single__title">
                    <h1>Delivering Creative Renewal of Distressed Real Estate</h1>
                </div>

                <!--<div class="single__title">
                    <h1>We Reposition Non-Productive Real Estate</h1>
                </div>

                <div class="single__title">
                    <h1>Integration of Brownfield Development with Property Cleanup</h1>
                </div>-->
            </div><!-- /.title__slider js-title-slider -->
        </div>
    </div>

    <div class="section__overlay" style="background: <?php echo ( carbon_get_the_post_meta( 'subheader_background_color' ) ) ? carbon_get_the_post_meta( 'subheader_background_color' ) : '#000'; ?>; opacity: <?php echo ( carbon_get_the_post_meta( 'subheader_overlay' ) && is_numeric( carbon_get_the_post_meta( 'subheader_overlay' ) ) ) ? carbon_get_the_post_meta( 'subheader_overlay' ) : '.1'; ?>;"></div><!-- /.section__overlay -->
</div>

<section class="about-section">
    <div class="container-sm">
        <div class="about-text">
            <h3><?php echo carbon_get_the_post_meta('about_title') ?></h3>
            <div class="about-copy">
                <?php echo wpautop(carbon_get_the_post_meta('about_text')); ?>
            </div>
        </div>
        <div class="about-img">
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('about_img'), 'full'); ?>">
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container-sm">
    	<?php if ( ! empty( carbon_get_the_post_meta( 'stats_left_text' ) ) || ! empty( carbon_get_the_post_meta( 'stats_right_text' ) ) ): ?>
	        <div class="stats-flex stats-flex-top">
	        	<?php if ( ! empty( carbon_get_the_post_meta( 'stats_left_text' ) ) ) : ?>
		            <div class="stats-left">
		                <?php echo apply_filters( 'the_content', carbon_get_the_post_meta( 'stats_left_text' ) ); ?>
		            </div><!-- /.stats-left -->
	        	<?php endif;

	        	if ( ! empty( carbon_get_the_post_meta( 'stats_right_text' ) ) ) : ?>
		            <div class="stats-right">
		                <?php echo apply_filters( 'the_content', carbon_get_the_post_meta( 'stats_right_text' ) ); ?>
		            </div><!-- /.stats-right -->
	        	<?php endif ?>
	        </div><!-- /.stats-flex -->
    	<?php endif ?>

        <div class="stats-flex">
            <div class="stats-left">
                <div class="problem">
                    <img src="<?php echo get_theme_file_uri('/dist/images/stats_arrow.svg'); ?>">
                    
                    <div class="problem-copy">
                        <div class="problem-title"><?php echo carbon_get_the_post_meta('prob_title'); ?></div>
                       
                        <p class="emph-sm"><?php echo carbon_get_the_post_meta('prob_text'); ?></p>
                    </div>
                </div>
                
                <div class="solution">
                    <img src="<?php echo get_theme_file_uri('/dist/images/stats_arrow.svg'); ?>">
                    
                    <div class="solution-copy">
                        <div class="solution-title"><?php echo carbon_get_the_post_meta('solution_title'); ?></div>
                        
                        <p class="emph-sm"><?php echo carbon_get_the_post_meta('solution_text'); ?></p>
                        
                        <div class="stats-btn">
                            
                                <button class="btn btn_stats btn_menu_open">Who We Serve <img src="<?php echo get_theme_file_uri('/dist/images/arrow_cream_sm.svg'); ?>"></button>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="stats-right">
                <h2 class="stats_copy"><?php echo carbon_get_the_post_meta('stats_large_txt'); ?></h2>

                <div class="stats">
                    <div class="stats-intro">
                        <p><?php echo carbon_get_the_post_meta('stats_intro'); ?></p>
                    </div>
                  
                    <?php get_template_part('partials/stats'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process-section arrowAnimation">
    <div class="process-section_wrap">
        <div class="process-section_wrap-inner"></div>

        <div class="container-sm">
            <div class="process-intro">
                <div class="process-intro-left">
                    <img src="<?php echo get_theme_file_uri('/dist/images/shovel.png'); ?>">
                </div>
                <div class="process-intro-right">
                    <div class="pir-flex">
                        <p class="pir-flex-left">
                            <?php echo carbon_get_the_post_meta('pir_flex_left'); ?>
                        </p>
                        <p class="pir-flex-right">
                            <?php echo carbon_get_the_post_meta('pir_flex_right'); ?>
                        </p>
                    </div>
                    <h3><?php echo carbon_get_the_post_meta('pir_larger'); ?></h3>
                </div>
            </div>

            <h1 class="before-process-title"><?php echo carbon_get_the_post_meta('pir_largest'); ?></h1>
        </div>
    </div><!-- /.process-section_wrap -->

    <div class="process-steps">
        <?php foreach ( $processes as $process ) : ?>
            <div class="process-step">
                <div class="process-step-bg" style="background-image:url(<?php echo wp_get_attachment_image_url( $process['process_bg'], 'full' ); ?>);"></div><!-- /.process-step-bg -->

                <div class="container-sm">
                    <div class="process-step-upper">
                        <div class="process-num"><?php echo $process['process_num']; ?></div>
                        <p class="dinger-bold">our process</p>
                    </div>
                    <div class="process-step-lower">
                        <div class="psl-left">
                            <h2><?php echo $process['process_title']; ?></h2>
                            <div class="process-subtitle emph-sm-mob"><?php echo $process['process_subtitle']; ?></div>
                        </div>
                        <div class="process-copy-mob">
                            <div class="pcm-cross">
                                <div class="process-copy-vert"></div>
                                <div class="process-copy-hor"></div>
                            </div>
                            <p class="dinger-bold-wide">learn more</p>
                        </div>
                        <div class="psl-right">
                            <div class="process-copy emph-sm"><?php echo $process['process_copy']; ?></div>
                        </div>

                        <div class="hide__section">
                            <div class="inner__entry">.
                                <div class="process-num"><?php echo $process['process_num']; ?></div>

                                <h2><?php echo $process['process_title']; ?></h2>

                                <div class="process-copy emph-sm"><?php echo $process['process_copy']; ?></div>
                            </div><!-- /.inner__entry -->
                        </div><!-- /.hide__section -->
                    </div>
                </div>

                <div class="section__overlay" style="background: <?php echo ( $process['background_color'] ) ? $process['background_color'] : '#000'; ?>; opacity: <?php echo ( $process['overlay'] && is_numeric( $process['overlay'] ) ) ? $process['overlay'] : '.1'; ?>;"></div><!-- /.section__overlay -->
            </div>
        <?php endforeach ?>
    </div>

</section>

<section class="case-studies-home">
    <div class="container-sm">
        <div class="csh-intro">
            <h1><?php echo carbon_get_the_post_meta('cs_home_title') ?></h1>
            <h3><?php echo carbon_get_the_post_meta('cs_home_subtitle') ?></h3>
            <div class="csh-stats">
                <?php get_template_part('partials/stats'); ?>
            </div>
        </div>

        <span class="has__swipe"></span>
    </div>

    <?php get_template_part('partials/slider'); ?>
</section>

<section class="cta-home">
    <div class="container-sm">
        <?php get_template_part('partials/advanced-menu'); ?>
    </div>
</section>

<?php get_footer(); ?>
