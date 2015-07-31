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

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>

	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

				<div class="slider-content">

				<div id="jacksonlab-owl-carousel" class="owl-carousel">
				</div><!-- END #jacksonlab-owl-carousel.owl-carousel
					
				</div><!--END .slider-content -->

				<div class="non-slider-content">
					
				

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'front_page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

				</div><!-- END .non-slider-content -->

			</div><!-- #content -->

			<?php //get_sidebar(); ?>

			<div class="clear"></div>

		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>