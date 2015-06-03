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

//register new widgetized area
function jacksonlab_widgets_init(){

	if (function_exists('register_sidebar')) {  
     register_sidebar(array(  
      'name' => 'jaksonlab Widgets',  
      'id'   => 'jacksonlab-widget-1',  
      'description'   => 'A customized widget area for the front page of jacksonlab, located on .....',  
      'before_widget' => '<div id="jl-widget" class="jl-widget">',  
      'after_widget'  => '</div>',  
      'before_title'  => '<h2>',  
      'after_title'   => '</h2>'  
     ));  
    }//Endif

}//END jacksonlab_widgets_init()
add_action('widgets_init','jacksonlab_widgets_init');