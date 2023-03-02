<?php
/**
 * Template Name: Leadership
 */
$count = 1;
$principles = carbon_get_the_post_meta('crb_principles');
$founders = carbon_get_the_post_meta('crb_founders');
$teams = carbon_get_the_post_meta('crb_employees');
$videoURL = carbon_get_the_post_meta('lead_video');
get_header(); ?>

<section class="intro">
    <div class="container-sm">
        <div class="leadership-intro">
            <div class="leadership-intro-left">
                <h1><?php the_title(); ?></h1>
                <div class="lil-flex">
                    <div class="lil-flex-left">
                        <p class="bold"><?php echo carbon_get_the_post_meta('lead_intro_text_left'); ?></p>
                    </div>
                    <div class="lil-flex-right">
                        <p><?php echo carbon_get_the_post_meta('lead_intro_text_right'); ?></p>
                    </div>
                </div>
            </div>
            <div class="leadership-intro-right">
                <h1 class="leadership-intro-mob"><?php the_title(); ?></h1>
                <h3><?php echo carbon_get_the_post_meta('lead_intro_text_large'); ?></h3>
            </div>
        </div>
    </div>
</section>

<section class="leadership-solutions" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('lead_sol_bg'), 'full'); ?>);">
    <div class="container-sm">
        <div class="ls_mini">
            <p class="dinger-bold">viridian solutions</p>
            <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>">
        </div>
        <div class="ls_title">
            <?php echo wpautop(carbon_get_the_post_meta('lead_sol_title')); ?>
        </div>
        <div class="ls_bot">
            <h3 class="ls_bot_left"><?php echo carbon_get_the_post_meta('lead_sol_copy'); ?></h3>
            <div class="ls_bot_right">
                <div class="lsbr_left">
                    <h1><?php echo carbon_get_the_post_meta('lead_sol_start'); ?></h1>
                    <p class="dinger-bold-wide">when we started</p>
                </div>
                <div class="lsbr_right">
                    <h1><?php echo carbon_get_the_post_meta('lead_sol_proj'); ?></h1>
                    <p class="dinger-bold-wide">Total project capitalization</p>
                </div>
            </div>
        </div>
    </div>

   <div class="section__overlay" style="background: <?php echo ( carbon_get_the_post_meta( 'lead_sol_background_color' ) ) ? carbon_get_the_post_meta( 'lead_sol_background_color' ) : '#000'; ?>; opacity: <?php echo ( carbon_get_the_post_meta( 'lead_sol_overlay' ) && is_numeric( carbon_get_the_post_meta( 'lead_sol_overlay' ) ) ) ? carbon_get_the_post_meta( 'lead_sol_overlay' ) : '.1'; ?>;"></div><!-- /.section__overlay -->
</section>

<section class="leadership-video" style="display: none;">
    <div class="container-sm">
        <div class="lead-video">
            <div class="lead-video-left">
                <h1><?php echo carbon_get_the_post_meta('lead_video_title'); ?></h1>
            </div>
            <div class="lead-video-right">
                <div class="lead-video-display" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('lead_video_bg'), 'full'); ?>);">
                    <div class="lvd-copy play">
                        <h3>Play Video</h3>
                        <img src="<?php echo get_theme_file_uri('/dist/images/play.svg'); ?>">
                    </div>
                </div>
                <?php echo wpautop(carbon_get_the_post_meta('lead_video_info')); ?>
            </div>
        </div>
    </div>
</section>

<section class="leadership-principles">
    <div class="container-sm">
        <h1 class="lead-princ-title"><?php echo carbon_get_the_post_meta('lead_princ_title'); ?></h1>
        <div class="lead-princ-flex">
            <div class="lpf-left">
                <h3><?php echo carbon_get_the_post_meta('lead_large_copy'); ?></h3>
                <div class="lpfl-flex">
                    <p class="lpfl-flex-left"><?php echo carbon_get_the_post_meta('lead_small_copy_left'); ?></p>
                    <p class="lpfl-flex-right"><?php echo carbon_get_the_post_meta('lead_small_copy_right'); ?></p>
                </div>
                <a href="https://viridian.flywheelsites.com/community-partners/#section-comm-policy"><button class="btn princBtn">Read our Environmental Policy <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
            </div>
            <div class="lpf-right">
                <h3>Our 6 guiding principles <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>"></h3>
                <div class="lead_princs">
                    <?php foreach ($principles as $principle) : ?>
                            <div class="lead_princ">
                                <p class="bold"><?php echo $count++; ?>.</p>
                                <p><?php echo $principle['princ_text']; ?></p>
                            </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="leadership-team">
    <span class="arrows"></span>

    <div class="container-sm">
        <div class="lead-team-intro">
            <h1><?php echo carbon_get_the_post_meta('team_intro_title'); ?></h1>
            <h3><?php echo carbon_get_the_post_meta('team_intro_subtitle'); ?></h3>
        </div>
        <div class="team-sub">
            <h1>Our Team</h1>
            <div class="team">
                <?php foreach ($teams as $team) : ?>
                    <div class="team_member" style="background-image:url(<?php echo wp_get_attachment_image_url($team['emp_img'], 'full'); ?>);">
                        <div class="team_color_bg"></div>
                        <div class="team_copy">
                            <h3><?php echo $team['emp_name']; ?></h3>
                            <p><?php echo $team['emp_role']; ?></p>
                            <p><?php echo $team['emp_location']; ?></p>
                            <div class="emp_copy"><?php echo wpautop($team['emp_copy']); ?></div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="founders-sub">
            <h1>Our Founders</h1>
            <div class="founders">
                <?php foreach ($founders as $founder) : ?>
                    <div class="founder" style="background-image:url(<?php echo wp_get_attachment_image_url($founder['founder_img'], 'full'); ?>);">
                        <div class="founder_copy">
                            <p class="founder-absolute dinger-bold-wide"><?php echo $founder['founder_status']; ?></p>
                            <div class="founder_inner">
                                <h3><?php echo $founder['founder_name']; ?></h3>
                                <p>Founder</p>
                                <p><?php echo $founder['founder_description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!--Noting out in case they want this back<div class="founder founder_last">
                    <p class="dinger-bold">our motto in latin</p>
                    <h1>Nec<br>aspera<br>terrent.</h1>
                    <h3>They are not afraid of difficulties."</h3>
                </div>-->
            </div>
        </div>
    </div>
</section>

<section class="articles-slider">
    <div class="container-sm">
        <h1>Articles</h1>
        <h3>Insights and Industry News</h3>
    </div>

    <?php get_template_part('partials/slider-articles'); ?>
</section>

<div class="video">
    <div class="video_close">
        <img src="<?php echo get_theme_file_uri('/dist/images/close.svg'); ?>">
    </div>
    <?php echo wp_oembed_get($videoURL); ?>
</div>

<?php get_footer(); ?>
