<?php
/**
 * The main template file
 */
get_header(); ?>

<main>

  <?php
  $part = ( have_posts() ) ? 'loop' : 'empty';
  get_template_part( 'template-parts/content-' . $part );
  ?>

</main>

<?php get_footer(); ?>
