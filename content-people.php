<?php
/**
 * The template used for displaying page content in page-people.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php 

		$firstNameObj = get_field_object("field_5564a3db10eb3");
		$lastNameObj = get_field_object("field_5564a3fb10eb4");
		$profTitleObj = get_field_object("field_5564a41f10eb5");
		$descObj = get_field_object("field_5564a43b10eb6");

		 echo $firstNameObj['label']; echo $firstNameObj['value']; 
		 //echo $lastNameObj['label'];
		 //echo $profTitleObj['label'];
		 //echo $descObj['label'];

		 ?>

		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php 
logit( $firstNameObj, '$firstNameObj:' ); 
logit( $lastNameObj, '$lastNameObj:' ); 
logit( $profTitleObj, '$profTitleObj:' ); 
logit( $descObj, '$descObj:' ); 
?>