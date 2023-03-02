<?php 
$images = carbon_get_the_post_meta('crb_gallery');
$details = carbon_get_the_post_meta('crb_details');
$facts = carbon_get_the_post_meta('crb_facts');
$teams = carbon_get_the_post_meta('crb_team');
$devs = carbon_get_the_post_meta('crb_dev');

$facts_title   = carbon_get_the_post_meta( 'crb_facts_title' );
$team_title    = carbon_get_the_post_meta( 'crb_team_title' );
$dev_title     = carbon_get_the_post_meta( 'crb_dev_title' );
$related_title = carbon_get_the_post_meta( 'crb_related_title' );
get_header(); ?>

    <section class="single-intro intro">
        <div class="container-sm">
            <div class="page_title">
                <h1><?php the_title(); ?></h1>
                <h3><?php echo carbon_get_the_post_meta('cs_location'); ?></h3>
            </div>
        </div>
    </section>

    <section class="single-intro-flex">
        <div class="container-sm">
            <div class="sif-item facts">
                <p class="sif-item-intro cs-small-bold">
                	<?php echo esc_html( $facts_title ); ?>
                </p>
                <?php foreach ( $facts as $fact ) : ?>
                    <div class="sif-item-flex">
                        <p class="fact_title cs-small-bold"><?php echo $fact['fact_title']; ?></p>
                        <p class="fact_title cs-small"><?php echo $fact['fact_copy']; ?></p>
                    </div>
                <?php endforeach ?>    
            </div>
            <div class="sif-item case-team">
                <p class="sif-item-intro  cs-small-bold">
                	<?php echo esc_html( $team_title ); ?>
                </p>
                <?php foreach ( $teams as $team ) : ?>
                    <div class="sif-item-flex">
                        <p class="fact_title cs-small-bold"><?php echo $team['team_title']; ?></p>
                        <p class="fact_title cs-small"><?php echo $team['team_copy']; ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <?php if ( ! empty( $images ) ) : ?>
	    <section class="single-gallery">
	        <div class="container-sm">
	            <div class="gallery">
	                <?php foreach ( $images as $image ) : ?>
	                    <div class="gallery-item" style="background-image:url(<?php echo wp_get_attachment_image_url( $image['gallery_img'], 'full' ); ?>)"></div>
	                <?php endforeach ?>
	            </div>
	            <div class="gallery-dots"></div>
	            <div class="gallery-next" style="background-image:url(<?php echo get_theme_file_uri('/dist/images/gallery_arrow.svg'); ?>);"></div>
	            <div class="gallery-prev" style="background-image:url(<?php echo get_theme_file_uri('/dist/images/gallery_arrow.svg'); ?>);"></div>
	        </div>
	    </section>
    <?php endif ?>

    <section class="single-details">
        <div class="container-sm">
            <?php foreach ( $details as $detail ) : ?>
                <div class="single-detail">
                    <img class="sdc-desktop-img" src="<?php echo wp_get_attachment_image_url($detail['detail_arrow'], 'full'); ?>">
                    <div class="single-detail-copy">
                        <div class="sdc-mobile">
                            <img class="sdc-mobile-img" src="<?php echo wp_get_attachment_image_url($detail['detail_arrow'], 'full'); ?>">
                            <h3><?php echo $detail['detail_title']; ?></h3>
                        </div>
                        <?php echo wpautop($detail['detail_copy']); ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="single-slider">
        <h2 class="container-sm">
        	<?php if ( ! empty( $related_title ) ) {
        		echo esc_html( $related_title);
        	} else {
        		_e( 'More Case Studies', 'crb' );
        	} ?>
            <span class="has__swipe"></span>
        </h2>
        
        <?php get_template_part('partials/slider'); ?>
    </section>

<?php get_footer(); ?>
