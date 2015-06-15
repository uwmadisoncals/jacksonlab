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
$GLOBALS['currentloop'] = "0";
 ?>


<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>

<!--
<div class="collegeFeature2">
<?php // if (function_exists( 'muneeb_ssp_slider')) {muneeb_ssp_slider( 1777 );} ?>
</div>
-->

	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

			<div id="owl-example" class="owl-carousel">
				<div><img style="display:block;width:100%;height:auto;margin: 3px;" src="http://hostcals.localhost/jacksonlab/wp-content/uploads/sites/91/2015/06/feature_img1-11.jpg" alt="">Your Content</div>
				<div><img style="display:block;width:100%;height:auto;margin: 3px;" src="http://hostcals.localhost/jacksonlab/wp-content/uploads/sites/91/2015/06/Biofuel-Trial-Aerial-3.jpg" alt="">Your Content</div>
				<div><img style="display:block;width:100%;height:auto;margin: 3px;" src="http://hostcals.localhost/jacksonlab/wp-content/uploads/sites/91/2015/06/feature_img1-11.jpg" alt="">Your Content</div>
				<div><img style="display:block;width:100%;height:auto;margin: 3px;" src="http://hostcals.localhost/jacksonlab/wp-content/uploads/sites/91/2015/06/Biofuel-Trial-Aerial-3.jpg" alt="">Your Content</div>
			</div>

				<!-- Start The default Loop -->
				<?php

				if(have_posts()) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'front_page' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php else: ?>
					<p>sorry no posts found from default query</p>

				<?php endif; ?>
				<!-- End The default Loop -->
				

				<!-- Include Custom Loop 1 0f 8, cat "forages" (26) -->
				<?php get_template_part('frontpage','loop_1' ); ?>

				<!-- Include Custom Loop 2 0f 8, cat "science of agroecology" (27) -->
				<?php //get_template_part('frontpage','loop_2' ); ?>

				<!-- Include Custom Loop 3 0f 8, cat "carbon" (28) -->
				<?php get_template_part('frontpage','loop_3' ); ?>

				<!-- Include Custom Loop 4 0f 8, cat "cropping" (29) -->
				<?php get_template_part('frontpage','loop_4' ); ?>
	
				<!-- Include Custom Loop 5 0f 8, cat "pasture agroecosystems" (30) -->
				<?php get_template_part('frontpage','loop_5' ); ?>
				
				<!-- Include Custom Loop 6 0f 8, cat "grasses" (31) -->
				<?php get_template_part('frontpage','loop_6' ); ?>

				<!-- Include Custom Loop 7 0f 8, cat "agriculture Ecosystems" (32) -->
				<?php //get_template_part('frontpage','loop_7' ); ?>

				<!-- Include Custom Loop 8 0f 8, cat "icelandic" (33) -->
				<?php  get_template_part('frontpage','loop_8' ); ?>
				

				<!-- restore global $post to default loop after all custom WP_Queries -->
				<?php wp_reset_postdata(); ?>






			</div><!-- #content -->
			<?php// get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>