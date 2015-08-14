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

			<!-- 
			TODO: Need to make people-category title, just once. consider making an array with values set to false.array_fill() and range()
		
			-->

<!--------------------------------------------------- -------------------------------------------------------------------------- -->
				<?php 

					//Define arguments for new WP Query
					/*$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
						'meta_key'=>'order_displayed',
						'orderby'=>'meta_value_num',
						'order'=>'ASC'
						);*/

					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
							'meta_key'=>'order_displayed',
							'orderby'=>'meta_value_num',
							'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								array('key'=>'people_category', 'value'=>'faculty','compare'=>'=' ),
								//array('key'=>'people_category', 'value'=>'research-scientist','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'post-doctoral-researcher','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'graduate-student','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'research-specialist-technician','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'undergraduate','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'alumni','compare'=>'=')

							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_faculty = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_faculty->have_posts()) : 


						while ( $people_query_faculty->have_posts() ) : $people_query_faculty->the_post(); ?>
						<?php //logit($people_query->posts,'$people_query->posts : '); ?>

						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts. faculty </p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

<!---------------------------------------------------- ------------------------------------------------------------------------- -->

<?php 



					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
							'meta_key'=>'order_displayed',
							'orderby'=>'meta_value_num',
							'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								
								array('key'=>'people_category', 'value'=>'research-scientist','compare'=>'='),

							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_research_scientist = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_research_scientist->have_posts()) : 

						while ( $people_query_research_scientist->have_posts() ) : $people_query_research_scientist->the_post(); ?>

						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts. research-scientist</p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>




<!---------------------------------------------------- ------------------------------------------------------------------------- -->

				<?php 



					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
							'meta_key'=>'order_displayed',
							'orderby'=>'meta_value_num',
							'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								//array('key'=>'people_category', 'value'=>'faculty','compare'=>'=' ),
								//array('key'=>'people_category', 'value'=>'research-scientist','compare'=>'='),
								array('key'=>'people_category', 'value'=>'post-doctoral-researcher','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'graduate-student','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'research-specialist-technician','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'undergraduate','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'alumni','compare'=>'=')

							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_post_doctoral_researcher = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_post_doctoral_researcher->have_posts()) :


					while ( $people_query_post_doctoral_researcher->have_posts() ) : $people_query_post_doctoral_researcher->the_post(); ?>
						<?php //logit($people_query->posts,'$people_query->posts : '); ?>
						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts. post-doctoral-researcher</p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>


<!---------------------------------------------------- ------------------------------------------------------------------------- -->
				<?php 



					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
							'meta_key'=>'order_displayed',
							'orderby'=>'meta_value_num',
							'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								//array('key'=>'people_category', 'value'=>'faculty','compare'=>'=' ),
								//array('key'=>'people_category', 'value'=>'research-scientist','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'post-doctoral-researcher','compare'=>'='),
								array('key'=>'people_category', 'value'=>'graduate-student','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'research-specialist-technician','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'undergraduate','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'alumni','compare'=>'=')

							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_graduate_student = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_graduate_student->have_posts()) :


					while ( $people_query_graduate_student->have_posts() ) : $people_query_graduate_student->the_post(); ?>
						<?php //logit($people_query->posts,'$people_query->posts : '); ?>
						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts. graduate-student</p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

<!---------------------------------------------------- ------------------------------------------------------------------------- -->
				<?php 



					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
							'meta_key'=>'order_displayed',
							'orderby'=>'meta_value_num',
							'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								//array('key'=>'people_category', 'value'=>'faculty','compare'=>'=' ),
								//array('key'=>'people_category', 'value'=>'research-scientist','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'post-doctoral-researcher','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'graduate-student','compare'=>'='),
								array('key'=>'people_category', 'value'=>'research-specialist-technician','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'undergraduate','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'alumni','compare'=>'=')

							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_research_specialist_technician = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_research_specialist_technician->have_posts()) :


					while ( $people_query_research_specialist_technician->have_posts() ) : $people_query_research_specialist_technician->the_post(); ?>
						<?php //logit($people_query->posts,'$people_query->posts : '); ?>
						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts. research-specialist-technician</p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

<!---------------------------------------------------- ------------------------------------------------------------------------- -->
				<?php 



					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
							'meta_key'=>'order_displayed',
							'orderby'=>'meta_value_num',
							'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								//array('key'=>'people_category', 'value'=>'faculty','compare'=>'=' ),
								//array('key'=>'people_category', 'value'=>'research-scientist','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'post-doctoral-researcher','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'graduate-student','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'research-specialist-technician','compare'=>'='),
								array('key'=>'people_category', 'value'=>'undergraduate','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'alumni','compare'=>'=')

							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_undergraduate = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_undergraduate->have_posts()) :


					while ( $people_query_undergraduate->have_posts() ) : $people_query_undergraduate->the_post(); ?>
						<?php //logit($people_query->posts,'$people_query->posts : '); ?>
						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts. undergraduate</p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>


<!---------------------------------------------------- ------------------------------------------------------------------------- -->
				<?php 



					$args = array(
						'numberposts'=> -1,
						'post_type'=>'people',
							'meta_key'=>'order_displayed',
							'orderby'=>'meta_value_num',
							'order'=>'ASC',
						'meta_query'=>array(
								'relation'=>'OR',
								//array('key'=>'people_category', 'value'=>'faculty','compare'=>'=' ),
								//array('key'=>'people_category', 'value'=>'research-scientist','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'post-doctoral-researcher','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'graduate-student','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'research-specialist-technician','compare'=>'='),
								//array('key'=>'people_category', 'value'=>'undergraduate','compare'=>'='),
								array('key'=>'people_category', 'value'=>'alumni','compare'=>'=')

							),//END array
						);

					//Instantiate new WP Query Object
					$people_query_alumni = new WP_Query($args);

				 ?>

				<?php 

				if($people_query_alumni->have_posts()) :


					while ( $people_query_alumni->have_posts() ) : $people_query_alumni->the_post(); ?>
						<?php //logit($people_query->posts,'$people_query->posts : '); ?>
						<?php get_template_part( 'content', 'people' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
				

				<?php else : ?>

					<p>there are no matching posts. alumni</p>

				<?php endif ?>

				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
	

<!---------------------------------------------------- ------------------------------------------------------------------------- -->
			
			</div><!-- #content -->

		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>