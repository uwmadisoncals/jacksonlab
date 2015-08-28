<?php
/**
 * The template used for displaying page content in page-people.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

		$firstNameObj = get_field_object("field_5564a3db10eb3");
		$lastNameObj = get_field_object("field_5564a3fb10eb4");
		$profTitleObj = get_field_object("field_5564a41f10eb5");
		//$descObj = get_field_object("field_5564a43b10eb6");
		$photoObj = get_field_object("field_5564b45d56e40");
		$displayOrderObj = get_field_object("field_55b68b329e479");
		$currentProjectObj = get_field_object("field_55c8ccee6cdea");//Current Projects
		$peopleCatObj = get_field_object("field_55ce25bc90eb6"); //Person Category 
		$choicesArr = $peopleCatObj['choices']; //create associative array with value-label pairings
 		$choiceLabel = $choicesArr[ $peopleCatObj['value'] ]; //get the label associated with current value 
		 
		 $thisID = get_the_ID();

		 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php echo get_post_permalink($thisID); ?>"><?php the_title(); ?></a></h1>
		<h3 class="proTitle"><?php  echo $profTitleObj['value']; ?></h3>

	</header><!-- .entry-header -->

	<div class="entry-content cf">
		
	<div class="imageWrapper">

		<a href="<?php echo get_post_permalink($thisID); ?>" title="login"><img src="<?php echo $photoObj['value']['sizes']['large']; ?>" alt="<?php echo $photoObj['value']['alt'] ?>" width="260"></a>

	</div><!--END .imageWrapper -->

	<div class="description people-description">
		<?php echo $currentProjectObj['value']; ?>
		<?php //echo custom_field_excerpt(); ?>
	</div>


	
	<div class="cf"></div>
			<div class="readmore">
			<a href="<?php echo get_post_permalink($thisID); ?>" class="readmoreLink">
				<p>Read more</p>				
			</a><!-- END .readmoreLink -->

		</div><!--END .readmore -->
		

		<?php //the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->