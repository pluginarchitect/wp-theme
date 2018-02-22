<?php

add_theme_support( 'custom-logo' );
// add_theme_support( 'post-thumbnails' );
// add_image_size( 'square-large', 500, 500, true );

register_nav_menus( array(
    'primary'   => __( 'Primary Menu' ),
    'secondary' => __( 'Secondary Menu' ),
    'tertiary'  => __( 'Tertiary Menu' ),
    'social'    => __( 'Social Links Menu' ),
) );
register_sidebar( array(
   'name' => __( 'Sidebar' ),
    'id' => 'hbhf-sidebar',
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<strong class="title">',
    'after_title' => '</strong>'
));

function pa_get_logo_url(){
  $logo = get_theme_mod( 'custom_logo' );
  $logo_src = wp_get_attachment_image_src( $logo , 'full' );
  return $logo_src[0];
}
