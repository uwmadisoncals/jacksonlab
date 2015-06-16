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

				<div class="slider-content">

					<div id="jacksonlab-owl-carousel" class="owl-carousel">

						<?php

						/* Pre Loop Variables */

						//WP_Query Args
						$jlSliderArgs = array(
						"post_type"=> array("jacksonlab-slider","post"),
						"posts_per_page" => "-1",
						//"category__in"=> array(25), //categories, 34:jacksonlab-slide-research , 25:research
						//"meta_key" =>"jacksonlab-slides-category-field",
						//"meta_value"=>"research"
						"tax_query"=> array(
							"relation"=> "OR",
							array(
							"taxonomy" => "jacksonlab-slides-category",
							"field" => "slug",
							"terms" => array("research")
							),
							array(
							"taxonomy" => "category",
							"field" => "slug",
							"terms"=>array("research")
							)
						)
	

						);
						//New WP_Query
						$jlSliderQuery = new WP_Query($jlSliderArgs) ;//

						//Start jacksonlab slider loop
						if($jlSliderQuery->have_posts()) : ?>

							<?php while ( $jlSliderQuery->have_posts() ) : $jlSliderQuery->the_post(); ?>

							<?php
							//debug posts 
							logit($jlSliderQuery->posts,'$jlSliderQuery->posts(): ');

							/* In loop Variables */
							$field_objects = get_field_objects();
							$jlSlider_title =  get_field_object("slider_title");
							$jlSlider_excerpt =  get_field_object("slider_excerpt");
							$jsSlider_image = get_field_object("image");

							$jsSlider_image_url = $jsSlider_image['value']['url'];
							$jsSlider_image_alt = $jsSlider_image['value']['alt'];

							//debug variables
							logit($field_objects,'$field_objects: ');
							logit($jsSlider_image,'$jsSlider_image: ');
							logit($jlSlider_title,'$jlSlider_title: ');
							logit($jsSlider_image_url,'$jsSlider_image_url: ');
							logit($jsSlider_image_alt,'$jsSlider_image_alt: ');
							//logit($jlSlider_title['value'],'$jlSlider_title value: ');

							?>		

								<?php if ( 'jacksonlab-slider' == get_post_type() ) : ?>
								<div>
									<img src="<?php echo $jsSlider_image_url; ?>" alt="<?php echo $jsSlider_image_alt; ?>">
									<div class="text-content">
										<a href="<?php  ?>"><?php echo $jlSlider_title['value']; ?></a>

										<p><?php echo $jlSlider_excerpt['value']; ?><span><?php  ?></span></p>
									</div>
									
								</div>
								<?php endif; ?>

							<?php endwhile; // end of the loop. ?>

						<?php else: ?>
							<p>sorry no posts found from jlSliderQuery</p>

						<?php endif; ?>
						<!-- End jacksonlab slider loop -->

					</div><!-- END #jacksonlab-owl-carousel -->

				</div><!--END .slider-content -->


				<div class="non-slider-content">


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

				</div><!--END .non-slider-content -->

			</div><!-- #content -->

			<div class="clear"></div>

		</div><!-- #primary -->

	</div><!-- END #main -->

<?php get_footer(); ?>

</div><!-- END .mobileScroll -->