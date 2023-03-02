<?php
/**
 * Template Name: Risk Management
 */


get_header(); ?>

<section class="intro">
    <div class="container-sm">
        <div class="leadership-intro risk-intro">
            <div class="leadership-intro-left">
                <h1><?php the_title(); ?></h1>
                <div class="lil-flex">
                    <div class="lil-flex-left">
                        <?php echo wpautop(carbon_get_the_post_meta('risk_intro_text_left')); ?>
                    </div>
                    <div class="lil-flex-right">
                        <?php echo wpautop(carbon_get_the_post_meta('risk_intro_text_right')); ?>
                    </div>
                </div>
            </div>
            <div class="leadership-intro-right">
                <h1 class="leadership-intro-mob"><?php the_title(); ?></h1>
                <h3><?php echo carbon_get_the_post_meta('risk_intro_text_large'); ?></h3>
            </div>
        </div>
    </div>
</section>

<section class="risk-steps-section">
    <div class="risk-steps-image-section">
        <div class="container-sm">
            <div class="risk-steps-image" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('risk_steps_image'), 'full'); ?>);"></div>
        </div>  
    </div>

    <div class="risk-steps-copy">
        <div class="container-sm">
            <h1 class="risk-steps-title"><?php echo carbon_get_the_post_meta('risk_steps_title'); ?></h1>
            <div class="risk-steps">
                <div class="risk-step">
                    <h1>01</h1>
                    <div class="risk-step-copy">
                        <?php echo wpautop(carbon_get_the_post_meta('risk_step_1')); ?>
                    </div>
                </div>
                <div class="risk-step">
                    <h1>02</h1>
                    <div class="risk-step-copy">
                        <?php echo wpautop(carbon_get_the_post_meta('risk_step_2')); ?>
                    </div>
                </div>
                <div class="risk-step">
                    <h1>03</h1>
                    <div class="risk-step-copy">
                        <?php echo wpautop(carbon_get_the_post_meta('risk_step_3')); ?>
                    </div>
                </div>
                <div class="risk-step">
                    <h1>04</h1>
                    <div class="risk-step-copy">
                        <?php echo wpautop(carbon_get_the_post_meta('risk_step_4')); ?>
                    </div>
                </div>
            </div>
            <div class="risk-flowchart">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('risk_flow'), 'full'); ?>);">
            </div>
        </div>
    </div>
</section>

<section class="risk-policy-section">
    <div class="container-sm">
        <div class="risk-policy-intro">
            <div class="rpi-left">
                <h3><?php echo carbon_get_the_post_meta('risk_policy_title'); ?></h3>
                <div class="rpi-left-copy">
                    <?php echo wpautop(carbon_get_the_post_meta('risk_policy_subtitle')); ?>
                </div>
            </div>
            <div class="rpi-right" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('risk_policy_img'), 'full'); ?>);"></div>
        </div>

        <h1 class="risk-policy-title">
            <span>Environment Policy</span>
        </h1>

        <div class="risk-policies">
            <div class="risk-policy risk-commitment">
                <?php echo wpautop(carbon_get_the_post_meta('risk_policy_commitment')); ?>
            </div>
            <div class="risk-policy risk-expectations">
                <?php echo wpautop(carbon_get_the_post_meta('risk_policy_expectations')); ?>
            </div>
        </div>
    </div>
</section>

<section class="risk-cta-section">
    <div class="risk-cta">
        <div class="cta-copy">
            <h1><?php echo carbon_get_the_post_meta('cta_title') ?></h1>
            <a href="/work-together"><button class="btn ctaBtn">Work Together <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
