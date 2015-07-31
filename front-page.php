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
							//logit($jlSliderQuery->posts,'$jlSliderQuery->posts(): ');

							/* In loop Variables */
							//$thisID = $jlSliderQuery->post->ID;

							$field_objects = get_field_objects();
							//$jlSlider_title =  get_field_object("slider_title");
							//$jlSlider_excerpt =  get_field_object("slider_excerpt");
							$jsSlider_image = get_field_object("image");

							$jsSlider_post = get_field_object("associated_post");

							$jsSlider_image_url = $jsSlider_image['value']['url'];
							$jsSlider_image_alt = $jsSlider_image['value']['alt'];

							$jsSlider_post_ID = $jsSlider_post['value']->ID;

							$jlSlider_excerpt = $jsSlider_post['value']->post_excerpt;
							$jsSlider_post_url = get_post_permalink( $jsSlider_post_ID );

							//debug variables
							//logit($jsSlider_post,'$jsSlider_post: ');
							//logit($jlSlider_excerpt,'$jlSlider_excerpt: ');
							//logit($jsSlider_post_url,'$jsSlider_post_url: ');
							//logit($thisID,'$thisID: ');
							//logit($field_objects,'$field_objects: ');
							//logit($jsSlider_image,'$jsSlider_image: ');
							//logit($jlSlider_title,'$jlSlider_title: ');
							//logit($jsSlider_image_url,'$jsSlider_image_url: ');
							//logit($jsSlider_image_alt,'$jsSlider_image_alt: ');
							//logit($jlSlider_title['value'],'$jlSlider_title value: ');

							?>		

								<?php if ( 'jacksonlab-slider' == get_post_type() ) : ?>
								<div>
									<img src="<?php echo $jsSlider_image_url; ?>" alt="<?php echo $jsSlider_image_alt; ?>">
									<div class="text-content">
										<div>
										<a href="<?php echo get_post_permalink($jsSlider_post_ID); ?>"><?php echo get_the_title($jsSlider_post_ID);/*$jlSlider_title['value'];*/ ?></a>
										</div>
										<p><?php echo $jlSlider_excerpt; ?><br><span><a href="<?php echo $jsSlider_post_url; ?>">Read More<span class="fa fa-external-link"></span></a></span></p>
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

				<div class="row" id="row1">
					<div class="JL_featured_wrap span-33" id="box1"></div>
					<div class="JL_featured_wrap span-33" id="box2"></div>
					<div class="JL_featured_wrap span-33" id="box3"></div>
				</div>

				<div class="row" id="middle-section">
					
				</div><!-- #middle-section -->

				<div class="row" id="row2">
					<div class="JL_featured_wrap span-33" id="box1"></div>
					<div class="JL_featured_wrap span-33" id="box2"></div>
					<div class="JL_featured_wrap span-33" id="box3"></div>
				</div>
					
				

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