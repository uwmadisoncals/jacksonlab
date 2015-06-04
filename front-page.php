<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

get_header(); ?>

<?php 
global $wpdb;

  $idObj = get_category_by_slug('frontpage-feature'); 
  $id = $idObj->term_id;
  global $id;

//logit( $wpdb, '$wpdb: ');
logit( $id, '$id: ');
//logit(  $idObj, '$idObj: ');

?>

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>

<div class="collegeFeature2">
  	<?php if (function_exists( 'muneeb_ssp_slider')) {muneeb_ssp_slider( 6 );} ?> <!-- Production: 1755 , Local: 6 -->
</div>

	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

			<?php 

			global $post;
			$post_backup = $post;

			//Define arguments for new WP Query
			$args = array(
				'numberposts'=> -1,
				'post_type'=>array('post','page'),
				'category_name'=>'frontpage-feature'
				);

			//Instantiate new WP Query Object
			$frontpage_query = new WP_Query($args);

			?>
				
				<div class="featured-article-wrapper">

					<?php if($frontpage_query->have_posts()) : ?>

						<?php while ( $frontpage_query->have_posts() ) : $frontpage_query->the_post(); ?>
							
							<?php //get_template_part( 'content', 'home' ); ?>

							<?php get_template_part( 'loop', 'research' ); ?>

							<?php //get_template_part( 'loop', 'cat2' ); ?>
						
							<?php comments_template( '', true ); ?>

						<?php endwhile; // end of the loop. ?>

					<?php else: ?>

						<p>there are no matching posts</p>

					<?php endif ?>

					<?php //wp_reset_query();  // Restore global post data stomped by the_post(). ?>
					<?php $post = $post_backup; ?>

					<?php //call widget 'jacksonlab-widget-1'

					if(is_active_sidebar('jacksonlab-widget-1' )) :
						dynamic_sidebar('jacksonlab-widget-1' );
					endif;

					 ?>
					 
					<div class="cf"></div> <!-- clears both to bottom of .featured-article-wrapper-->

				 </div><!-- END .featured-article-wrapper -->

			</div><!-- #content -->

		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>



</div>