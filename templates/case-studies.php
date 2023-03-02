<?php
/**
 * Template Name: Case Studies
 */


get_header(); ?>

<section class="case-studies-intro intro">
    <div class="container-sm">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</section>

<section class="case-studies-overall">
    <div class="container-sm">
        <?php get_template_part('partials/slider'); ?>
    </div>
</section>


<?php get_footer(); ?>
