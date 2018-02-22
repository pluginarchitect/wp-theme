<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title><?php bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description', 'display' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Cookie|Josefin+Sans|Lobster+Two" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<!-- <?php bloginfo( 'name' ); ?> -->
<!-- <?php echo get_bloginfo( 'description', 'display' ); ?> -->


<?php
  $masthead_classes = [ 'masthead', 'blueprint' ];
  if( is_front_page() ) $masthead_classes[] = 'masthead--hero';
?>
<header class="<?php echo implode( ' ', $masthead_classes ); ?>">

  <?php get_template_part( 'navigation/main' ); ?>

  <?php if( is_front_page() ): ?>
   <div class="hero">

      <div class="container">

         <div class="hero--logo" style="background-image: url('<?php echo pa_get_logo_url(); ?>');">
           <!-- This section intentionally left blank.-->
         </div>

         <div class="hero--feature">
            <strong class="hero--feature-title">Work In Progress</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, nisi! Quasi rem repellat atque, dignissimos expedita quas at odit ad ipsa eius obcaecati vel aspernatur consectetur nesciunt voluptatibus labore cum?</p>
            <!-- <a class="button" href="#">Read More</a> -->
         </div>
      </div>

   </div>
  <?php elseif( is_singular() ): ?>
   <div class="hero--post">
      <h1 class="hero--post-title"><?php the_title(); ?></h1>
   </div>
  <?php endif; ?>

</header>

<div class="wrap content">
