<?php
/**
 * Template Name: Sellers
 */


get_header(); ?>

<section class="cap-intro-section sellers-intro-section intro">
    <div class="container-sm">
        <?php get_template_part('partials/capabilities/intro') ?>
    </div>
</section>

<section class="cap-under-intro-section sellers-uis" id="section-liability-assumption">
    <div class="container-sm">
        <div class="sellers-under-intro">
            <div class="comm-under-intro sui-flex sui-flex-upper">
                <div class="cui-left sui-left">
                    <h1><?php echo carbon_get_the_post_meta('sui_title'); ?></h1>
                </div>
                <div class="cui-right sui-right">
                    <img src="<?php echo get_theme_file_uri('/dist/images/multi_arrow.svg'); ?>">
                    <p><?php echo carbon_get_the_post_meta('sui_under_image'); ?></p>
                </div>
            </div>

            <div class="comm-under-intro sui-flex sui-flex-lower">
                <div class="cui-left sui-left">
                    <h3><?php echo carbon_get_the_post_meta('sui_left'); ?></h3>
                </div>
                <div class="cui-right sui-right">
                    <img class="sui-right-spacer" src="<?php echo get_theme_file_uri('/dist/images/multi_arrow.svg'); ?>">
                    <div class="suir-copy">
                        <?php echo wpautop(carbon_get_the_post_meta('sui_right')); ?>
                    </div>
                </div>
            </div>

            <?php if ( ! empty( carbon_get_the_post_meta( 'video' ) ) ) : ?>
	            <div class="sui-full">
	                <video autoplay loop muted>
	                    <source src="<?php echo wp_get_attachment_url( carbon_get_the_post_meta( 'video' ) ); ?>" type="video/mp4" />
	                </video>
	            </div>
            <?php endif ?>
        </div>
    </div>
</section>

<section class="sellers-steps-section">
    <div class="container-sm">
        <h1 class="risk-steps-title"><?php echo carbon_get_the_post_meta('sellers_steps_title'); ?></h1>
        <div class="risk-steps">
            <div class="risk-step">
                <h1>01</h1>
                <div class="risk-step-copy">
                    <?php echo wpautop(carbon_get_the_post_meta('sellers_step_1')); ?>
                </div>
            </div>
            <div class="risk-step">
                <h1>02</h1>
                <div class="risk-step-copy">
                    <?php echo wpautop(carbon_get_the_post_meta('sellers_step_2')); ?>
                </div>
            </div>
            <div class="risk-step">
                <h1>03</h1>
                <div class="risk-step-copy">
                    <?php echo wpautop(carbon_get_the_post_meta('sellers_step_3')); ?>
                </div>
            </div>
            <div class="risk-step">
                <h1>04</h1>
                <div class="risk-step-copy">
                    <?php echo wpautop(carbon_get_the_post_meta('sellers_step_4')); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sellers-testimonials-section">
<?php get_template_part('partials/testimonials'); ?>
</section>

<?php get_template_part('partials/capabilities/icons'); ?>

<section class="cta-section sellers-cta-section">
    <div class="container-sm">
        <div class="cta sellers-cta">
            <span class="arrows"></span>
            
            <h1><?php echo carbon_get_the_post_meta('cta_title') ?></h1>
            
            <p><?php echo carbon_get_the_post_meta('cta_subtitle') ?></p>
            
            <a href="/work-together"><button class="btn ctaBtn">Work Together <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
