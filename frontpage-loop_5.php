<!-- Custom Loop 5 0f 8, cat "pasture agroecosystems" (30) -->

<!-- Start Custom Loop 5 0f 8 -->
<?php

$args = array(
"posts_per_page" => "-1",
"cat"=>"30"
//"cat"=>"666"
);

$frontpageQuery5 = new WP_Query($args) ; 

if($frontpageQuery5->have_posts()) : ?>

	<?php while ( $frontpageQuery5->have_posts() ) : $frontpageQuery5->the_post(); ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery5</p>

<?php endif; ?>
<!-- End Custom Loop 5 0f 8 -->