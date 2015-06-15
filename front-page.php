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
$args = array(
"posts_per_page" => "-1",
//"cat"=>"25"
"cat"=>"666"
);

$frontpageQuery = new WP_Query($args) ; 

 ?>

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>

	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

				<?php if($frontpageQuery->have_posts()) : ?>

					<?php while ( $frontpageQuery->have_posts() ) : $frontpageQuery->the_post(); ?>

						<?php get_template_part( 'content', 'front_page' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php else: ?>
					<p>sorry no posts found</p>

				<?php endif; ?>
			</div><!-- #content -->
			<?php// get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>