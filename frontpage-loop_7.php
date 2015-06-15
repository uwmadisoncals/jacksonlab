<!-- Custom Loop 7 0f 8, cat "agriculture Ecosystems" (32) -->

<!-- Start Custom Loop 7 0f 8 -->
<?php

$args = array(
"posts_per_page" => "1",
"cat"=>"32"
//"cat"=>"666"
);

$GLOBALS['currentloop'] = "7";

$frontpageQuery7 = new WP_Query($args) ; 

if($frontpageQuery7->have_posts()) : ?>

	<?php while ( $frontpageQuery7->have_posts() ) : $frontpageQuery7->the_post(); ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery7</p>

<?php endif; ?>
<!-- End Custom Loop 7 0f 8 -->

<?php $GLOBALS['currentloop'] = "0";  ?>