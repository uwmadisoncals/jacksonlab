<!-- Custom Loop 6 0f 8, cat "grasses" (31) -->

<!-- Start Custom Loop 6 0f 8 -->
<?php

$args = array(
"posts_per_page" => "1",
"cat"=>"31"
//"cat"=>"666"
);

$GLOBALS['currentloop'] = "6";

$frontpageQuery6 = new WP_Query($args) ; 

if($frontpageQuery6->have_posts()) : ?>

	<?php while ( $frontpageQuery6->have_posts() ) : $frontpageQuery6->the_post(); ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery6</p>

<?php endif; ?>
<!-- End Custom Loop 6 0f 8 -->

<?php $GLOBALS['currentloop'] = "0";  ?>