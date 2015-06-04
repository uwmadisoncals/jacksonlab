<?php

//Define arguments for new WP Query

$testargs = array(
	'numberposts'=> 1,
	'post_type'=>array('post'),
	'category__and'=>array(27,29) // 29:frontpage-feature, 27:research
	);

//Instantiate new WP Query Object
$test_query = new WP_Query($testargs);

?>

<?php if($test_query->have_posts()) : ?>

	<?php while ( $test_query->have_posts() ) : $test_query->the_post(); ?>

		<p class="entry-title" style="font-size:1em;"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></p>
		<span> Categories: <?php the_category('</span> <span>'); ?> </span>
		<hr>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>

		<p>there are no matching posts</p>

<?php endif ?>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>