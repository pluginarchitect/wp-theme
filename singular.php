<?php
/**
 * The main template file
 */
get_header(); ?>

<div class="container">

    <?php while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
