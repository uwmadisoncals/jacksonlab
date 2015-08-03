<!-- Custom Loop 3 0f 8, cat "carbon" (28) -->

<!-- Start Custom Loop 3 0f 8 -->
<?php

$args = array(
"posts_per_page" => "1",
"cat"=>"28"
//"cat"=>"666"
);

$GLOBALS['currentloop'] = "3";

$frontpageQuery3 = new WP_Query($args) ; 

if($frontpageQuery3->have_posts()) : ?>

	<?php while ( $frontpageQuery3->have_posts() ) : $frontpageQuery3->the_post(); ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery3</p>

<?php endif; ?>
<!-- End Custom Loop 3 0f 8 -->

<?php $GLOBALS['currentloop'] = "0";  ?>