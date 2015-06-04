<?php 

//Define arguments for new WP Query
$testargs2 = array(
	'numberposts'=> 1,
	'post_type'=>array('post'),
	'category__and'=>array(28,29) // 29:frontpage-feature, 28:research-cat-1
	);

//Instantiate new WP Query Object
$test_query2 = new WP_Query($testargs2);

?>
	<?php if($test_query2->have_posts()) : ?>

		<?php while ( $test_query2->have_posts() ) : $test_query2->the_post(); ?>

			<!-- <p class="entry-title" style="font-size:3em;"><a style="color: pink" href="<?php //echo get_post_permalink(); ?>"><?php //the_title(); ?></a></p> 
			<span> Categories: <?php //the_category('</span> <span>'); ?> </span>
			<hr> -->
			<?php get_template_part( 'content', 'home' ); ?>
			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php else: ?>

			<p>there are no matching posts</p>

	<?php endif ?>

<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>