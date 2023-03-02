<?php
/**
 * Template Name: Articles
 */


get_header(); ?>

<section class="articles-intro intro">
    <div class="container-sm">
        <h1><?php the_title(); ?></h1>
        <div class="articles-intro-content"><?php the_content(); ?></div>
    </div>
</section>

<section class="articles-overall">
    <div class="container-sm">
        <div class="articles">
        <?php
            $posts = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            ));

            while($posts->have_posts()) {
            $posts->the_post(); 
        ?>
        
            <div class="article">
                <a class="article_link" href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
                    <div class="article-absolute">
                        <p class="dinger-bold-wide">read article</p> 
                        <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow.svg'); ?>">
                    </div>
                </a>
            </div>

        <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
