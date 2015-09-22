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

					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
						'meta_key'=>'order_displayed',
						'orderby'=>'meta_value_num',
						'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								array('key'=>'people_category', 'value'=>'alumni','compare'=>'=' ),
							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_faculty = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_faculty->have_posts()) : 

					$thisCat_posts = $people_query_faculty->posts;
					$thisCatPostID =$thisCat_posts[0]->ID;
					$peopleCatObj = get_field_object("field_55ce25bc90eb6",$thisCatPostID); //Person Category 
					$choicesArr = $peopleCatObj['choices']; //create associative array with value-label pairings
 					$choiceLabel = $choicesArr[ $peopleCatObj['value'] ]; //get the label associated with current value
 					?>
		

						<h1 class="peopleCatTitle"> <?php echo $choiceLabel; ?> </h1>
						<?php while ( $people_query_faculty->have_posts() ) : $people_query_faculty->the_post(); ?>

						<?php get_template_part( 'content', 'alumni' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

				<!-- <p>there are no matching posts. faculty </p> -->
				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>


			
			</div><!-- #content -->

		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>