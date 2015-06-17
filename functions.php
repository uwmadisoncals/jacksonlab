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

function my_admin_notice(){
  global $pagenow;
  global $current_screen;

 
  $jsSlider_post = get_field_object("associated_post");
  $jlSlider_excerpt = $jsSlider_post['value']->post_excerpt;
  $jlSlider_excerpt_isEmpty = empty($jlSlider_excerpt);
  $jsSlider_post_ID = $jsSlider_post['value']->ID;

  $editPostUrl = get_edit_post_link($jsSlider_post_ID);
  $editPostName = get_the_title($jsSlider_post_ID);

  //echo "current screen is : " . $current_screen->post_type;
  //echo "pagenow is : " . $pagenow;
  //echo "jlSlider_excerpt is : " . empty($jlSlider_excerpt);

  if($current_screen->post_type === 'jacksonlab-slider' && 'post.php' == $pagenow && $jlSlider_excerpt_isEmpty){

      echo '<div id="message" class="error">
      <p><strong>WARNING</strong>: The associated post, <a href="' . $editPostUrl . '">' . $editPostName . '</a> , that you selected does not have an excerpt to display!</p>
    </div>';

  }


}
add_action('admin_notices', 'my_admin_notice');
