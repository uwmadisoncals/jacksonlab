<!-- Custom Loop 8 0f 8, cat "icelandic" (33) -->

<!-- Start Custom Loop 8 0f 8 -->
<?php

$args = array(
"posts_per_page" => "1",
"cat"=>"33"
//"cat"=>"666"
);

$GLOBALS['currentloop'] = "8";

$frontpageQuery8 = new WP_Query($args) ; 

if($frontpageQuery8->have_posts()) : ?>

	<?php while ( $frontpageQuery8->have_posts() ) : $frontpageQuery8->the_post(); ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery8</p>

<?php endif; ?>
<!-- End Custom Loop 8 0f 8 -->

<?php $GLOBALS['currentloop'] = "0";  ?>