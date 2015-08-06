<?php
/**
 * The template used for displaying page content in home.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<header class="entry-header">

		<?php 
			$postCats = get_the_category();
			if ($postCats) {
			  foreach($postCats as $cat) {

			    //echo $cat->name . ' ';
			    
			    switch($cat->name){

			    	case "research":
			    	//echo "<h1>Research</h1>";
			    	break;

			    	default:
			    	break;

			    }
			  }
			}

		 ?>

		<h2 class="entry-title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h1>
		<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->



			<span class="post-author">By: 

				<a href="<?php the_author_link(); ?>"> 
				<?php the_author();
				 ?>
				</a>

			</span>

			<span class="post-date">, <?php echo the_time('F j, Y'); ?></span>





		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if(has_post_thumbnail()) : ?>


		<div class="featured-image" >
		<?php 
		$thumnailArgs = array(
		'alt'	=> trim( strip_tags( $attachment->post_excerpt ) ),
		'title'	=> trim( strip_tags( $attachment->post_title ) ),
		);

		$getPost = get_post(); //logit($getPost,'$getPost');
		$thumbID = get_post( get_post_thumbnail_id() ); //logit($thumbID,'thumbID');
		$thumbCaption = $thumbID->post_excerpt; //logit($thumbCaption,'$thumbCaption');
		?>



			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('','medium',$thumbnailArgs); ?></a>
			<?php if(isset($thumbCaption)) :
			echo "<div class=\"thumb-caption\"><p>";
			echo $thumbCaption . "</p></div>";
			endif;
			?>
		</div><!-- END .featured-image -->

		<?php endif; ?>

		<div class="main-article-content">
		<?php the_content();   ?>
		</div>
		

	<span> Categories: <?php the_category('</span> <span>'); ?> </span>
	<br>
	<span><?php the_tags(); ?></span>




		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->