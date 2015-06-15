<?php
/**
 * The template used for displaying page content in front-page.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>


<?php
logit($GLOBALS['currentloop'], 'currentloop: ');

switch( $GLOBALS['currentloop'] ){
	case "0" :
	$specialClass= "loop-default";
	break;

	case "1" :
	$specialClass= "loop-1";
	break;

	case "2" :
	$specialClass= "loop-2";
	break;

	case "3" :
	$specialClass= "loop-3";
	break;

	case "4" :
	$specialClass= "loop-4";
	break;

	case "5" :
	$specialClass= "loop-5";
	break;

	case "6" :
	$specialClass= "loop-6";
	break;

	case "7" :
	$specialClass= "loop-7";
	break;

	case "8" :
	$specialClass= "loop-8";
	break;

	default:
	$specialClass="loop-default";

}

 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class($specialClass); ?>>
	<header class="entry-header">
		<h3 class="entry-title"><?php the_title(); ?></h3>
		<h3><?php the_category(); ?></h3>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php //the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
