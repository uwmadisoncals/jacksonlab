<!-- Custom Loop 4 0f 8, cat "cropping" (29) -->

<!-- Start Custom Loop 4 0f 8 -->
<?php

$args = array(
"posts_per_page" => "1",
"cat"=>"29"
//"cat"=>"666"
);

$GLOBALS['currentloop'] = "4";

$frontpageQuery4 = new WP_Query($args) ; 

if($frontpageQuery4->have_posts()) : ?>

	<?php while ( $frontpageQuery4->have_posts() ) : $frontpageQuery4->the_post(); ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery4</p>

<?php endif; ?>
<!-- End Custom Loop 4 0f 8 -->

<?php $GLOBALS['currentloop'] = "0";  ?>