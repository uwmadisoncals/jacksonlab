<?php 

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//add theme support for post-thumbnails
//see: http://codex.wordpress.org/Post_Thumbnails
add_theme_support( 'post-thumbnails' );