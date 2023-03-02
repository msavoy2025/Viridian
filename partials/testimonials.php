<?php 
/**
 * Testimonials
 *
 * @package viridian
 */

?>


<div class="slider article-slider scroller">

	<?php
	$args = array(
		'posts_per_page' => -1,
		'post_type'      => 'testimonial',
	);

	if ( ! empty( $selected = carbon_get_the_post_meta( 'crb_testimonials' ) ) ) {
		$args['post__in'] = wp_list_pluck( $selected, 'id' );
		$args['orderby']  = 'post__in';
		$args['order']    = 'ASC';
	}

	$testimonial = new WP_Query( $args );

	while( $testimonial->have_posts() ) : $testimonial->the_post();
	?>
		<div class="slide article-slide mini-article-slide">
			<?php the_content(); ?>

			<div class="article-absolute">
				<p class="dinger-bold-wide"><?php the_title(); ?></p>
				<p class="dinger-wide"><?php echo carbon_get_the_post_meta('test_position') ?></p>
			</div>
		</div>

	<?php endwhile; wp_reset_query(); ?>
</div>