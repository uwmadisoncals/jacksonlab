<?php
/**
 * The template for displaying home.php (body.blog)(the designated blog, when static front page is chosen.)
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

get_header(); ?>

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>
  <div class="collegeFeature2">
  	<?php if (function_exists( 'muneeb_ssp_slider')) {muneeb_ssp_slider( 6 );} ?> <!-- Production: 1755 , Local: 6 -->
  </div>

	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'content', 'home' ); ?>
					

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>