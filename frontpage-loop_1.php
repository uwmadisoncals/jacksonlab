<!-- Custom Loop 1 0f 8, cat "forages" (26) -->

<!-- Start Custom Loop 1 0f 8 -->
<?php

$args = array(
"posts_per_page" => "-1",
"cat"=>"26"
//"cat"=>"666"
);

$GLOBALS['currentloop'] = "1";


$frontpageQuery = new WP_Query($args) ;

if($frontpageQuery->have_posts()) : ?>

	<?php while ( $frontpageQuery->have_posts() ) : $frontpageQuery->the_post(); ?>

		<?php


		//logit($frontpageQuery->posts, '$frontpageQuery->posts: ');

		//logit($GLOBALS['currentloop'], 'currentloop: ');

		 ?>

		<?php get_template_part( 'content', 'front_page' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

<?php else: ?>
	<p>sorry no posts found from $frontpageQuery</p>

<?php endif; ?>
<!-- End Custom Loop 1 0f 8 -->


<?php $GLOBALS['currentloop'] = "0";  ?>