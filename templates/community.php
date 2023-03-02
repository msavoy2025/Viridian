<?php
/**
 * Template Name: Community Partners
 */
$count = 1;
$principles = carbon_get_theme_option('crb_principles');
$icons = carbon_get_the_post_meta('crb_buyers');
get_header(); ?>

<section class="cap-intro-section intro">
    <div class="container-sm">
        <?php get_template_part('partials/capabilities/intro-bold') ?>
    </div>
</section>

<section class="cap-under-intro-section comm-uis">
    <div class="container-sm">
        <div class="comm-under-intro">
            <div class="cui-left">
                <h1><?php echo carbon_get_the_post_meta('cui_left'); ?></h1>
            </div>
            <div class="cui-right">
                <img src="<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('cui_image'), 'full' ); ?>">
                <p><?php echo carbon_get_the_post_meta('cui_right'); ?></p>
            </div>
        </div>

        <div class="comm-principles" id="section-guiding-principles">
            <div class="cp-left">
                <h3><?php echo carbon_get_the_post_meta('cp_left_title') ?></h3>
                <div class="cpl-flex">
                    <div class="cpl-left">
                        <img src="<?php echo get_theme_file_uri('/dist/images/stats_arrow.svg'); ?>">
                        <?php echo wpautop(carbon_get_the_post_meta('cpl_left')); ?>
                    </div>
                    <div class="cpl-right">
                        <img src="<?php echo get_theme_file_uri('/dist/images/stats_arrow.svg'); ?>">
                        <?php echo wpautop(carbon_get_the_post_meta('cpl_right')); ?>
                    </div>
                </div>
            </div>
            <div class="cp-right">
                <?php echo wpautop(carbon_get_the_post_meta('cp_right_open')); ?>
                <div class="lead_princs comm-princs">
                    <?php foreach ($principles as $principle) : ?>
                        <div class="lead_princ">
                            <p><span class="bold"><?php echo $count++; ?>.</span> <?php echo $principle['princ_text']; ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('partials/testimonials'); ?>
</section>


<section class="comm-policy-section" id="section-comm-policy">
    <div class="container-sm">
        <h1>Environment Policy</h1>
        <div class="comm-policy">
            <div class="comm-policy-left">
                <?php echo wpautop(carbon_get_the_post_meta('comm_commitment')); ?>
            </div>
            <div class="comm-policy-right">
                <?php echo wpautop(carbon_get_the_post_meta('comm_expectations')); ?>
            </div>
        </div>
    </div>
</section>

<section class="comm-brownfield-section">
    <div class="container-sm">
        <div class="comm-brownfield">
            <div class="comm-brownfield-left">
                <h1>What's a brownfield?</h1>
                <h3><?php echo carbon_get_the_post_meta('comm_brown'); ?></h3>
            </div>
            <div class="comm-brownfield-img">
                <img src="<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('comm_brown_img'), 'full' ); ?>">
            </div>
        </div>
    </div>
</section>

<section class="comm-ps-section">
    <div class="container-sm">
        <div class="comm-ps">
            <div class="problem">
                <img src="<?php echo get_theme_file_uri('/dist/images/stats_arrow.svg'); ?>">
                <div class="problem-copy">
                    <div class="problem-title"><?php echo carbon_get_the_post_meta('comm_problem_title'); ?></div>
                    <p class="emph-sm"><?php echo carbon_get_the_post_meta('comm_problem'); ?></p>
                </div>
            </div>
            <div class="solution">
                <img src="<?php echo get_theme_file_uri('/dist/images/stats_arrow.svg'); ?>">
                <div class="solution-copy">
                    <div class="solution-title"><?php echo carbon_get_the_post_meta('comm_solution_title'); ?></div>
                    <p class="emph-sm"><?php echo carbon_get_the_post_meta('comm_solution'); ?></p>
                    <div class="stats-btn">
                        <button class="btn btn_stats btn_menu_open">Who We Serve <img src="<?php echo get_theme_file_uri('/dist/images/arrow_cream_sm.svg'); ?>"></button>
                    </div>
                </div>
            </div>
        </div>
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
    <span class="arrow"></span>

    <div class="container-sm">
        <div class="cta comm-cta">
            <h1><?php echo carbon_get_the_post_meta('cta_title'); ?></h1>
            <div class="emph-sm">
                <?php echo carbon_get_the_post_meta('cta_subtitle'); ?>
            </div>
            <a href="/work-together"><button class="btn ctaBtn">Work Together <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
