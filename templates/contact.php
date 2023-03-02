<?php
/**
 * Template Name: Contact
 */


get_header(); ?>

<section class="contact-section intro">
    <div class="container-sm">
        <div class="contact-flex">
            <div class="contact-left">
                <div class="contact-left-intro">
                    <h1><?php the_title(); ?></h1>
                    <div class="cil-flex">
                        <div class="cil-flex-left">
                            <p><?php echo carbon_get_the_post_meta('contact_text') ?></p>
                        </div>
                        <div class="cil-flex-right">
                            <?php echo wpautop(carbon_get_the_post_meta('contact_info')); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="contact-form">
                    <h3>Contact us to discuss your site screening.</h3>
                    <div class="form">
                        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                    </div>
                </div>
            </div>
            <div class="contact-right" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('contact_image'), 'full'); ?>);">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
