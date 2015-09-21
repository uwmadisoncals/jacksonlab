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
						
						/*
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
						)*/
	

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

						<?php endif; 
						wp_reset_postdata(); //reset loop and prepare for next custom loop
						?>
						<!-- End jacksonlab slider loop : $jlSliderQuery -->

					</div><!-- END #jacksonlab-owl-carousel -->

					
				</div><!--END .slider-content -->



				


				

						<div class="non-slider-content">

						<div class="row" id="row1">
							<div class="JL_featured_wrap span-33" id="box1">

								<?php 
				
	
								$mod = get_theme_mod( 'jacksonlab_options_id' );
								
								if($mod != 0) :
								
								$the_query = new WP_Query( array( 'posts_per_page' => 1, 'page_id' => $mod ) ); ?>
								
									<?php if ( $the_query->have_posts() ) : ?>
									
										<!-- the loop -->
										<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										
											<?php if (has_post_thumbnail()) :
												
											    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
											    $bgImage = $thumb[0]; 
											?>

		    								<div class="imgWrap">
		    								<div class="pane"></div> 
		    								
		    									<div class="imgWrapContainer">
		    										<div class="imgWrapPic" src="<?php echo $bgImage ?>" style="background:url(<?php echo $bgImage; ?>); background-position: center center; background-size: cover;" ></div>
		    									</div>
		    									<h2><?php the_title(); ?></h2>
		    								
												<p><?php the_excerpt(); ?></p>
												
												<a href="<?php the_permalink(); ?>" class="coverLink"><?php the_title(); ?></a>
		    								
		    								</div><!-- END .imgWrap -->

											

											<?php else: ?>
	    
										


											<div class="imgWrap">

		    								<div class="pane"></div> 
		    								
		    									<div class="imgWrapContainer">
		    										<div class="imgWrapPic"></div>
		    									</div>
		    									<h2><?php the_title(); ?></h2>
		    								
												<p><?php the_excerpt(); ?></p>
												
												<a href="<?php the_permalink(); ?>" class="coverLink"><?php the_title(); ?></a>
		    								
		    								</div><!-- END .imgWrap -->
											
											
											<?php endif; ?>
										
										<?php endwhile; ?><!-- end of the loop -->
										
										<?php wp_reset_postdata(); ?>
									
									<?php else : ?>
										<!-- Don't show anything -->
									<?php endif; ?> 
								
								<?php endif; ?>
								
							</div><!--END .JL_featured_wrap #box1 -->


							<div class="JL_featured_wrap span-33" id="box2">
								
								<?php 
				
	
								$mod = get_theme_mod( 'jacksonlab_options_id_2' );
								
								if($mod != 0) :
								
								$the_query = new WP_Query( array( 'posts_per_page' => 1, 'page_id' => $mod ) ); ?>
								
								<?php if ( $the_query->have_posts() ) : ?>
								
									<!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
									<?php if (has_post_thumbnail()) :
												
											    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
											    $bgImage = $thumb[0]; 
											?>

		    								<div class="imgWrap">
		    								<div class="pane"></div>
		    									<div class="imgWrapContainer">
		    										<div class="imgWrapPic" src="<?php echo $bgImage ?>" style="background:url(<?php echo $bgImage; ?>); background-position: center center; background-size: cover;" ></div>
		    									</div>
		    									<h2><?php the_title(); ?></h2>
		    								
												<p><?php the_excerpt(); ?></p>
												
												<a href="<?php the_permalink(); ?>" class="coverLink"><?php the_title(); ?></a>

		    								
		    								</div><!-- END .imgWrap -->

											

											<?php else: ?>
	    
										
											<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
											
												<p><?php the_excerpt(); ?></p>
											
											
											<?php endif; ?>									
									<?php endwhile; ?>
									<!-- end of the loop -->
									
									<?php wp_reset_postdata(); ?>
								
								<?php else : ?>
									<!-- Don't show anything -->
								<?php endif; ?>
								
								<?php endif; ?>
								
							</div><!--END .JL_featured_wrap #box2 -->

							<div class="JL_featured_wrap span-33" id="box3">
								
								<?php 
				
	
								$mod = get_theme_mod( 'jacksonlab_options_id_3' );
								
								if($mod != 0) :
								
								$the_query = new WP_Query( array( 'posts_per_page' => 1, 'page_id' => $mod ) ); ?>
								
								<?php if ( $the_query->have_posts() ) : ?>
								
									<!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
											<?php if (has_post_thumbnail()) :
												
											    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
											    $bgImage = $thumb[0]; 
											?>

		    								<div class="imgWrap">
		    								<div class="pane"></div>
		    									<div class="imgWrapContainer">
		    										<div class="imgWrapPic" src="<?php echo $bgImage ?>" style="background:url(<?php echo $bgImage; ?>); background-position: center center; background-size: cover;" ></div>
		    									</div>
		    									<h2><?php the_title(); ?></h2>
		    								
												<p><?php the_excerpt(); ?></p>
												
												<a href="<?php the_permalink(); ?>" class="coverLink"><?php the_title(); ?></a>

		    								
		    								</div><!-- END .imgWrap -->

											

											<?php else: ?>
	    
										
											<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
											
												<p><?php the_excerpt(); ?></p>
											
											
											<?php endif; ?>
									
									<?php endwhile; ?>
									<!-- end of the loop -->
									
									<?php wp_reset_postdata(); ?>
								
									<?php else : ?>
									<!-- Don't show anything -->
									<?php endif; ?>
								
								<?php endif; ?>
								
							</div><!--END .JL_featured_wrap #box3 -->
						</div>

						<div class="row" id="middle-section">
							<?php 

								// the query
								$the_query = new WP_Query( array( 'posts_per_page' => 1, 'page_id' => 1749 ) ); ?>

								<?php if ( $the_query->have_posts() ) : ?>

									<!-- pagination here -->

									<!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<div class="middleContent"><?php the_content(); ?></div>
									<?php endwhile; ?>
									<!-- end of the loop -->

									<!-- pagination here -->

									<?php wp_reset_postdata(); ?>

								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
							

						</div><!-- #middle-section -->

						<div class="row" id="row2">
							<div class="JL_featured_wrap span-33" id="box1">
								
								<?php 
				
	
								$mod = get_theme_mod( 'jacksonlab_options_id_4' );
								
								if($mod != 0) :
								
								$the_query = new WP_Query( array( 'posts_per_page' => 1, 'page_id' => $mod ) ); ?>
								
								<?php if ( $the_query->have_posts() ) : ?>
								
									<!-- pagination here -->
								
									<!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
										<?php if (has_post_thumbnail()) :
												
											    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
											    $bgImage = $thumb[0]; 
											?>

		    								<div class="imgWrap">
		    								<div class="pane"></div>

		    									<div class="imgWrapContainer">
		    										<div class="imgWrapPic" src="<?php echo $bgImage ?>" style="background:url(<?php echo $bgImage; ?>); background-position: center center; background-size: cover;" ></div>
		    									</div>
		    									<h2><?php the_title(); ?></h2>
		    								
												<p><?php the_excerpt(); ?></p>
												
												<a href="<?php the_permalink(); ?>" class="coverLink"><?php the_title(); ?></a>
		    								
		    								</div><!-- END .imgWrap -->

											

											<?php else: ?>
	    
										
											<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
											
												<p><?php the_excerpt(); ?></p>
											
											
											<?php endif; ?>
									
									<?php endwhile; ?>
									<!-- end of the loop -->
									
									<?php wp_reset_postdata(); ?>
								
								<?php else : ?>
									<!-- Don't show anything -->
								<?php endif; ?>
								
							<?php endif ?>
								
							</div><!--END .JL_featured_wrap #box1 -->

							<div class="JL_featured_wrap span-33" id="box2">
								
								<?php 
				
	
								$mod = get_theme_mod( 'jacksonlab_options_id_5' );
								
								if($mod != 0) :
								
								$the_query = new WP_Query( array( 'posts_per_page' => 1, 'page_id' => $mod ) ); ?>
								
								<?php if ( $the_query->have_posts() ) : ?>
								
									<!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
										<?php if (has_post_thumbnail()) :
												
											    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
											    $bgImage = $thumb[0]; 
											?>

		    								<div class="imgWrap">
		    								<div class="pane"></div>
		    									<div class="imgWrapContainer">
		    										<div class="imgWrapPic" src="<?php echo $bgImage ?>" style="background:url(<?php echo $bgImage; ?>); background-position: center center; background-size: cover;" ></div>
		    									</div>
		    									<h2><?php the_title(); ?></h2>
		    								
												<p><?php the_excerpt(); ?></p>
												
												<a href="<?php the_permalink(); ?>" class="coverLink"><?php the_title(); ?></a>

		    								
		    								</div><!-- END .imgWrap -->

											

											<?php else: ?>
	    
										
											<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
											
												<p><?php the_excerpt(); ?></p>
											
											
											<?php endif; ?>
									
									<?php endwhile; ?>
									<!-- end of the loop -->
									
									<?php wp_reset_postdata(); ?>
								
								<?php else : ?>
									<!-- Don't show anything -->
								<?php endif; ?>
								
								<?php endif; ?>
								
							</div><!--END .JL_featured_wrap #box2 -->

							<div class="JL_featured_wrap span-33" id="box3">
								
								<?php 
				
	
								$mod = get_theme_mod( 'jacksonlab_options_id_6' );
								
								if($mod != 0) :
								
								$the_query = new WP_Query( array( 'posts_per_page' => 1, 'page_id' => $mod ) ); ?>
								
								<?php if ( $the_query->have_posts() ) : ?>
								
									<!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

											<?php if (has_post_thumbnail()) :
												
											    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
											    $bgImage = $thumb[0]; 
											?>

		    								<div class="imgWrap">
		    								<div class="pane"></div>
		    									<div class="imgWrapContainer">
		    										<div class="imgWrapPic" src="<?php echo $bgImage ?>" style="background:url(<?php echo $bgImage; ?>); background-position: center center; background-size: cover;" ></div>
		    									</div>
		    									<h2><?php the_title(); ?></h2>
		    								
												<p><?php the_excerpt(); ?></p>
												
												<a href="<?php the_permalink(); ?>" class="coverLink"><?php the_title(); ?></a>

		    								
		    								</div><!-- END .imgWrap -->

											

											<?php else: ?>
	    
										
											<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
											
												<p><?php the_excerpt(); ?></p>
											
											
											<?php endif; ?>
									
									<?php endwhile; ?>
									<!-- end of the loop -->
									
									<?php wp_reset_postdata(); ?>
								
								<?php else : ?>
									<!-- Don't show anything -->
								<?php endif; ?>
								
								<?php endif; ?>
								
							</div><!--END .JL_featured_wrap #box3 -->
						</div>

						</div><!-- END .non-slider-content -->

				 	



			</div><!-- #content -->

			<?php //get_sidebar(); ?>

			<div class="clear"></div>

		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>