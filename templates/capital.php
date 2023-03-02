<?php
/**
 * Template Name: Capital Partners
 */
$videoURL = carbon_get_the_post_meta('cap_video');
get_header(); ?>

<section class="cap-intro-section intro">
    <div class="container-sm">
        <?php get_template_part('partials/capabilities/intro') ?>
    </div>
</section>

<section class="cap-under-intro-section comm-uis">
    <div class="container-sm">
        <div class="comm-under-intro  cap-under-intro">
            <div class="comm-ui-left">
                <h1><?php echo carbon_get_the_post_meta('cui_title'); ?></h1>
                <h3><?php echo carbon_get_the_post_meta('cui_subtitle'); ?></h3>
                <div class="cuil-flex">
                    <img class="cuil-mob" src="<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('cui_image'), 'full' ); ?>">
                    <div class="cuil-left">
                        <?php echo wpautop(carbon_get_the_post_meta('cui_left')); ?>
                    </div>
                    <div class="cuil-right">
                        <?php echo wpautop(carbon_get_the_post_meta('cui_right')); ?>
                    </div>
                </div>
            </div>
            <div class="comm-ui-right">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('cui_image'), 'full' ); ?>">
            </div>
        </div>
    </div>

    <?php get_template_part('partials/testimonials'); ?>
</section>

<?php if(!empty($videoURL)) : ?>
    <section class="capital-video-section">
        <div class="container-sm">
            <div class="video_cover" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('cap_vid_cover'), 'full' ); ?>);">
                <div class="video_cover_absolute play">
                    <h1><?php echo carbon_get_the_post_meta('cap_vid_title'); ?></h1>
                    <img src="<?php echo get_theme_file_uri('/dist/images/play.svg'); ?>">
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php get_template_part('partials/capabilities/icons'); ?>

<section class="cta-section">
    <span class="arrow"></span>

    <div class="container-sm">
        <div class="cta cap-cta">
            <h1><?php echo carbon_get_the_post_meta('cta_title') ?></h1>
            <h3><?php echo carbon_get_the_post_meta('cta_subtitle') ?></h3>
            <a href="/work-together"><button class="btn ctaBtn">Work Together <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
        </div>
    </div>
</section>

<div class="video">
    <div class="video_close">
        <img src="<?php echo get_theme_file_uri('/dist/images/close.svg'); ?>">
    </div>
    <?php echo wp_oembed_get($videoURL); ?>
</div>

<?php get_footer(); ?>
