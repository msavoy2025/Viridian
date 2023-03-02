<?php 
/**
 * Capability Intro
 *
 * @package viridian
 */

$stat_check = carbon_get_the_post_meta('cap_intro_check_stats');
$content_check = carbon_get_the_post_meta('cap_intro_check_content');
?>


<div class="cap-intro-upper">
    <div class="cap-intro-left">
        <h1 class="cil-desk-title"><?php the_title(); ?></h1>
        <div class="cap-intro-flex">
            <p class="bold"><?php echo carbon_get_the_post_meta('cap_intro_left'); ?></p>
            <p><?php echo carbon_get_the_post_meta('cap_intro_right'); ?></p>
        </div>
    </div>
    <div class="cap-intro-right">
        <h1 class="cir-mob-title"><?php the_title(); ?></h1>
        <h3><?php echo carbon_get_the_post_meta('cap_intro_large'); ?></h3>
    </div>
</div>

<h1 class="cap-intro-textsep">
    <span><?php echo carbon_get_the_post_meta('cap_intro_textsep'); ?></span>
</h1>

<div class="cap-intro-lower">
    <div class="cil-left">
        <?php if (!empty($content_check)) : ?>
            <div class="cill-flex">
                <div class="cill-flex-left">
                    <?php echo wpautop(carbon_get_the_post_meta('cap_intro_content_2')); ?>
                </div>
                <div class="cill-flex-right">
                    <?php echo wpautop(carbon_get_the_post_meta('cap_intro_content_3')); ?>
                </div>
            </div>
        <?php else : ?>
            <div class="cill-single">
                <?php echo wpautop(carbon_get_the_post_meta('cap_intro_content_1')); ?>
            </div>
        <?php endif; ?>
        <div class="cap-intro-stats">
            <?php if (!empty($stat_check)) : ?>
                <div class="cis-single">
                    <?php echo wpautop(carbon_get_the_post_meta('cap_intro_single_stat')); ?>
                </div>
            <?php else : ?>
                <?php get_template_part('partials/stats'); ?>
            <?php endif; ?>
        </div>

    </div>
    <div class="cil-right" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('cap_intro_img'), 'full' ); ?>);">
        <div class="scratch-cover" style="background-image:url(<?php echo get_theme_file_uri('/dist/images/scratch.png'); ?>);"></div>
    </div>
</div>