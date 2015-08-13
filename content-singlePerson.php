<?php
/**
 * The template for displaying content in the single-people.php template
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

<?php 
		$firstNameObj = get_field_object("field_5564a3db10eb3");
		$lastNameObj = get_field_object("field_5564a3fb10eb4");
		$profTitleObj = get_field_object("field_5564a41f10eb5");
		//$descObj = get_field_object("field_5564a43b10eb6");
		$photoObj = get_field_object("field_5564b45d56e40");

		$phoneObj = get_field_object("field_55c8bcf160175"); //phone
		$addressObj = get_field_object("field_55c8bd2460176");//address
		$emailObj = get_field_object("field_55c8bd4860177");//email
		$currentProjectObj = get_field_object("field_55c8ccee6cdea");//Current Projects
		$research_interestsObj = get_field_object("field_55c8cd4d35f4a");//Research and Professional Interests
		$educationObj = get_field_object("field_55c8bddf6440d");//education
		$manuscriptsObj = get_field_object("field_55c8bdf76440e");//Manuscripts
		$presentationsObj = get_field_object("field_55c8ca9d518b4");//Presentations and Lectures
		$abstractsObj = get_field_object("field_55c8cac1518b5");//Abstracts and Posters
		$proPositionsObj = get_field_object("field_55c8caf8518b6");//Professional Positions and Responsibilities
		$honorsObj = get_field_object("field_55c8cb26518b7");//Honors, Grants and Fellowships
		$membershipsObj = get_field_object("field_55c8cb44518b8");//Memberships, Clubs and committees


		$thisID = get_the_ID();

		//logit($phoneObj,'$phoneObj: ');
		//logit($phoneObj['value'],'$phoneObj[value]: ');

 ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h3 class="proTitle"><?php  echo $profTitleObj['value']; ?></h3>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="topSectionWrapper cf">
			<div class="imageWrapper">

				<img src="<?php echo $photoObj['value']['sizes']['large']; ?>" alt="#" width="260">
			
			</div><!--END .imageWrapper -->

			<div class="people-meta cf">

						<div id="phone">
							<?php 
								if(!$phoneObj['value']=="") : ?>
									<div class="label"><span><?php echo $phoneObj['label'];  ?>:</span></div>
									<div class="data"><span><?php echo $phoneObj['value']; ?></span></div>
								<?php endif; ?>
						</div><div class="cf"></div>

						<div id="address">
							<?php 
								if(!$addressObj['value']=="") : ?>
									<div class="label"><span><?php echo $addressObj['label'];  ?>:</span></div>
									<div class="data"><span><p><?php echo $addressObj['value']; ?></p></span></div>
							<?php endif; ?>
						</div><div class="cf"></div>

						<div id="email">
							<?php 
								if(!$emailObj['value']=="") : ?>
									<div class="label"><span><?php echo $emailObj['label'];  ?>:</span></div>
									<div class="data"><span><?php echo $emailObj['value']; ?></span></div>
								<?php endif; ?>
						</div>

			</div><!-- END people-meta cf -->

		</div><!-- END topSectionWrapper -->


			<!-- NEW CONTENT HERE -->
			<div class="cf"></div>
			
			<div class="lower-div">
				<div id="current-projects">
					<?php 
						if(!$currentProjectObj['value']=="") : ?>
							<div class="title"><h3><?php echo $currentProjectObj['label'];  ?></h3></div>
							<div class="content-area"><?php echo $currentProjectObj['value']; ?></div>
						<?php endif; ?>
				</div>

				<div id="research">
					<?php 
						if(!$research_interestsObj['value']=="") : ?>
						<div class="title"><h3><?php echo $research_interestsObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $research_interestsObj['value']; ?></div>
					<?php endif; ?>
				</div>

				<div id="education">
					<?php 
						if(!$educationObj['value']=="") : ?>
						<div class="title"><h3><?php echo $educationObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $educationObj['value']; ?></div>
					<?php endif; ?>
				</div>

				<div id="manuscripts">
					<?php 
						if(!$manuscriptsObj['value']=="") : ?>
						<div class="title"><h3><?php echo $manuscriptsObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $manuscriptsObj['value']; ?></div>
					<?php endif; ?>
					
				</div>

				<div id="presentations">
					<?php 
						if(!$presentationsObj['value']=="") : ?>
						<div class="title"><h3><?php echo $presentationsObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $presentationsObj['value']; ?></div>
					<?php endif; ?>
				</div>

				<div id="abstracts">
					<?php 
						if(!$abstractsObj['value']=="") : ?>
						<div class="title"><h3><?php echo $abstractsObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $abstractsObj['value']; ?></div>
					<?php endif; ?>
				</div>

				<div id="professional">
					<?php 
						if(!$proPositionsObj['value']=="") : ?>
						<div class="title"><h3><?php echo $proPositionsObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $proPositionsObj['value']; ?></div>
					<?php endif; ?>
				</div>

				<div id="honors">
					<?php 
						if(!$honorsObj['value']=="") : ?>
						<div class="title"><h3><?php echo $honorsObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $honorsObj['value']; ?></div>
					<?php endif; ?>
				</div>

				<div id="memberships">
					<?php 
						if(!$membershipsObj['value']=="") : ?>
						<div class="title"><h3><?php echo $membershipsObj['label'];  ?></h3></div>
						<div class="content-area"><?php echo $membershipsObj['value']; ?></div>
					<?php endif; ?>
				</div>
			</div><!-- END .lower-div-->

			<!-- END NEW CONTENT -->

		<?php //the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} else {
				$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 68 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyeleven' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #author-info -->
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
