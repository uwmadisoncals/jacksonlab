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
  //Global Variables
  global $post;
  global $pagenow;
  global $current_screen;

  // Associated Post's Variables
  $jsSlider_post = get_field_object("associated_post"); //Get the field object for associated post
  $jlSlider_excerpt = $jsSlider_post['value']->post_excerpt; //Get associated posts's excerpt
  $jlSlider_excerpt_isEmpty = empty($jlSlider_excerpt); //Return whether the associated post has an excerpt
  $jsSlider_post_ID = $jsSlider_post['value']->ID; //Get associated posts's ID
  $editPostUrl = get_edit_post_link($jsSlider_post_ID); //Get associated post's edit post link
  $editPostName = get_the_title($jsSlider_post_ID); //Get associated posts's title

  //Jacksonlab-slides cpt Variables
  $thisPostCat = get_the_terms($post->ID,'jacksonlab-slides-category'); //Get all the terms for this custom taxonomy


  //Array Manipulation that yields an array of all the slugs for current post
  $result=array();

   if($thisPostCat){
    foreach($thisPostCat as $key => $value){
      //echo $key .", ";
      foreach($value as $k =>$v){
        $result[$k][$key]= $v;
      }
    }
  }

  $slugs[] = $result['slug'];
  $slugs0 = $slugs[0]; //An array containing all the slugs for this custom taxonomy for current post

  //DEBUG
  //logit($post->ID, '$post->ID: ');
  //logit($thisPostCat, '$thisPostCat: ');
  //logit($ssq,'$ssq: ');
  //logit($result,'$result');
  //logit($slugs,'$slugs');
  logit($hasResearch,'$hasResearch');
  logit($slugs0,'$slugs0');

  //DEBUG
  //echo "current screen is : " . $current_screen->post_type;
  //echo "pagenow is : " . $pagenow;
  //echo "jlSlider_excerpt is : " . empty($jlSlider_excerpt);

  if($current_screen->post_type === 'jacksonlab-slider' && 'post.php' == $pagenow){

      //Display warning if Associated Post has no excerpt
      if($jlSlider_excerpt_isEmpty){
        echo '<div id="message" class="error">
        <p><strong>WARNING</strong>: The associated post, <a href="' . $editPostUrl . '">' . $editPostName . '</a> , that you selected does not have an excerpt to display!</p>
        </div>';
      }

      //Display Warning if 'research' slug is not selected as jacksonlab-slides-category
      if($slugs0){
        
        if(!in_array("research",$slugs0)){

        echo '<div id="message" class="error">
        <p><strong>WARNING</strong>: You need to enable the "research" category on this page!</p>
        </div>';  
        }
      }
  }


}
add_action('admin_notices', 'my_admin_notice');
