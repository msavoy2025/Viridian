<?php
/**
 * Template Name: Buyers & Tenants
 */

$icons = carbon_get_the_post_meta('crb_buyers');
get_header(); ?>

<section class="cap-intro-section intro">
    <div class="container-sm">
        <?php get_template_part('partials/capabilities/intro'); ?>

    </div>
</section>

<section class="cap-under-intro-section">
    <div class="container-sm">
        <div class="buyer-under-intro">
            <div class="bui-left">
                <h3><?php echo carbon_get_the_post_meta('bui_left'); ?></h3>
            </div>
            <div class="bui-right">
                <?php echo wpautop(carbon_get_the_post_meta('bui_flex')); ?>
            </div>
        </div>
    </div>

    <?php get_template_part('partials/testimonials'); ?>
</section>

<section class="buyers-why-section">
    <div class="container-sm">
        <div class="buyers-why-intro">
            <h1>Why <br>Brownfields?</h1>
            <div class="bwi-flex">
                <h3><?php echo carbon_get_the_post_meta('buyers_why_left_2'); ?></h3>
                <h3><?php echo carbon_get_the_post_meta('buyers_why_right_2'); ?></h3>
            </div>
        </div>
    </div>

    <div class="slider">
        <?php
        $count = 1;
        $slider = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'case',
        ));

        while($slider->have_posts()) {
        $slider->the_post(); ?>

            <div class="slide" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('cs_hero'), 'full' ); ?>)">
                <div class="slide_content">
                <div class="slide_top">
                    <div class="st_left dinger-bold-wide">case study <span><?php echo $count++; ?></span>/8</div>
                    <div class="st_right dinger-bold-wide"><?php echo date('Y'); ?></div>
                </div>

                <div class="slide-name"><?php the_title(); ?></div>
                <div class="slide-location"><?php echo carbon_get_the_post_meta('cs_location'); ?></div>

                <a href="<?php the_permalink(); ?>">
                    <div class="slide_bot">
                        <p class="dinger-bold-wide">view case study</p>
                        <img src="<?php echo get_theme_file_uri('/dist/images/case_study_arrow.svg'); ?>">
                    </div>
                </a>
                </div>
                <div class="wisp_overlay" style="background-image:url(<?php echo get_theme_file_uri( '/dist/images/wispy_overlay-min.png'); ?>)"></div>
            </div>
        <?php } wp_reset_query(); ?>
    </div>
    <div class="buyers_btn">
        <a href="/case-studies"><button class="btn btn_stats">View All Case Studies <img src="<?php echo get_theme_file_uri('/dist/images/arrow_cream_sm.svg'); ?>"></button></a>
    </div>
</section>

<section class="icons-section">
    <div class="container">
        <div class="icons-container">
            <div class="icons">
                <div class="icons">
                    <?php foreach ( $icons as $icon ) : ?>
                        <div class="icon" >
                            <img src="<?php echo wp_get_attachment_image_url( $icon['buyers_img'], 'full' ); ?>">
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <h2><?php echo carbon_get_the_post_meta('buyers_icon_copy'); ?></h2>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container-sm">
        <div class="cta buyer-cta">
            <span class="arrows"></span>
            
            <h2><?php echo carbon_get_the_post_meta('cta_title') ?></h2>

            <a href="/work-together"><button class="btn ctaBtn">Work Together <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
        </div>
    </div>
</section>


<?php get_footer(); ?>
