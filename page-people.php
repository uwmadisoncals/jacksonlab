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

				<?php 

					//Define arguments for new WP Query
					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
						);

					//Instantiate new WP Query Object
					$people_query = new WP_Query($args);

				 ?>

				<?php 

				if($people_query->have_posts()) :


					while ( $people_query->have_posts() ) : $people_query->the_post(); ?>

						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts</p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
				
			</div><!-- #content -->

		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>