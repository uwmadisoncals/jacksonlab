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
  

	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

			<?php
			$args = array(
				"post_type"=> array("post"),
				"posts_per_page" => "-1",
				"orderby" => "date",
				"category_name"=>"research"

			);

			$labNewsQuery = new WP_Query($args);

			?>
				
				<?php if(have_posts()) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'home' ); ?>
						
						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php endif;?>
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>