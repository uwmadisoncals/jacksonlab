<!-- Include Custom Loop 2 0f 8, cat "science of agroecology" (27) -->

<!-- Start Custom Loop 2 0f 8 -->
<?php

$args = array(
"posts_per_page" => "1",
"cat"=>"27"
//"cat"=>"666"
);

$GLOBALS['currentloop'] = "2";

$frontpageQuery2 = new WP_Query($args) ; 

if($frontpageQuery2->have_posts()) : ?>

	<?php while ( $frontpageQuery2->have_posts() ) : $frontpageQuery2->the_post(); ?>

		<?php //logit($GLOBALS['currentloop'], 'currentloop_from2: '); ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery2</p>

<?php endif; ?>
<!-- End Custom Loop 2 0f 8 -->

<?php $GLOBALS['currentloop'] = "0";  ?>