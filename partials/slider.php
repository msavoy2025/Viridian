<?php
/**
 * Slider
 *
 * @package viridian
 */

?>


<div class="slider scroller">

<?php
    $count = 1;
    $slider = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'case',
      ));

      //$count_posts = $slider->post_count;
      //$posts = get_posts('case');
    while($slider->have_posts()) {
      $slider->the_post(); ?>

    <div class="slide" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('cs_hero'), 'full' ); ?>)">
      <span class="hide__link"></span>
      <a href="<?php the_permalink(); ?>">
        <div class="slide_content">
          <div class="slide_top">
            <div class="st_left dinger-bold-wide">case study <span><?php echo $count++; ?></span>/ <span class="case__number">8</span></div>
            <!-- removed, leaving in case they want it back<div class="st_right dinger-bold-wide"><?php echo date('Y'); ?></div>-->
          </div>

          <div class="slide-name"><?php the_title(); ?></div>
          <div class="slide-location"><?php echo carbon_get_the_post_meta('cs_location'); ?></div>
            <div class="slide_bot">
                <p class="dinger-bold-wide">view case study</p>
                <img src="<?php echo get_theme_file_uri('/dist/images/case_study_arrow.svg'); ?>">
            </div>

        </div>
        <div class="wisp_overlay" style="background-image:url(<?php echo get_theme_file_uri( '/dist/images/wispy_overlay-min.png'); ?>)"></div>
      </a>
      <span class="section__overlay" style="background: <?php echo ( carbon_get_the_post_meta( 'crb_background_color' ) ) ? carbon_get_the_post_meta( 'crb_background_color' ) : '#000'; ?>; opacity: <?php echo ( carbon_get_the_post_meta( 'crb_overlay' ) && is_numeric( carbon_get_the_post_meta( 'crb_overlay' ) ) ) ? carbon_get_the_post_meta( 'crb_overlay' ) : '.1'; ?>;"></span><!-- /.section__overlay -->
    </div>

<?php } ?>
</div>

<?php wp_reset_postdata(); ?>
