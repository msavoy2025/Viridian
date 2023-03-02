<?php 

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
get_header(); ?>

<div class="container-sm">
    <h1 class="intro"><?php the_title(); ?></h1>
</div> 
<div class="container-sm">
    <div class="single-article-img" style="background:url(<?php echo $url ?>)"></div>
</div>

<div class="single-article-content">
    <?php the_content(); ?>
    <a href="/articles"><button class="btn articleBtn">Back To Articles <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
</div>

<section class="articles-slider">
    <div class="container-sm">
        <h1>More Articles</h1>
        <h3>Find press and news related content below.</h3>
    </div>
    
    <?php get_template_part('partials/slider-articles'); ?>
</section>

<?php get_footer(); ?>
