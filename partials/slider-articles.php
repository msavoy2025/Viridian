<?php 
/**
 * Slider Articles
 *
 * @package viridian
 */

?>


<div class="slider scroller">

  <?php
      $slider = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type'      => 'post',
        'orderby'        => 'rand'
        ));

      while($slider->have_posts()) {
        $slider->the_post(); ?>

      
        <div class="slide article-slide">
          
            <h3><?php the_title(); ?></h3>
            <div class="article-absolute">
              <a class="article_link" href="<?php the_permalink(); ?>">
                <p class="dinger-bold-wide">read article</p> 
                <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>">
              </a>
            </div>
          
        </div>
  <?php } ?>  
        <div class="slide article-slide article-slide-end">
          <a class="article_link" href="/articles">
            <h3>All press is just a click away.</h3>
            <div class="article-absolute">
                <button class="btn sliderBtn">View All News <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button>
            </div>
          </a>  
        </div>      
</div>