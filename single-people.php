<?php
/**
 * The Template for displaying all single posts.
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

get_header(); ?>

<?php 
		$firstNameObj = get_field_object("field_5564a3db10eb3");
		$lastNameObj = get_field_object("field_5564a3fb10eb4");
		$profTitleObj = get_field_object("field_5564a41f10eb5");
		$descObj = get_field_object("field_5564a43b10eb6");
		$photoObj = get_field_object("field_5564b45d56e40");
		$displayOrderObj = get_field_object("field_55b68b329e479");

		 //echo $firstNameObj['label']; echo $firstNameObj['value']; 
		 //echo $lastNameObj['label'];
		 //echo $profTitleObj['label'];
		 //echo $descObj['label'];
		 
		 $thisID = get_the_ID();

 ?>

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>

	<div id="main">

		<div id="primary">
			<div id="content" role="main">
			
			

				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php get_template_part( 'content', 'singlePerson' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->

		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>