<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 * @package WordPress
 * @subpackage CALSv2
 * @since CALS 2.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
<meta name="viewport" content="width=320.1, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" /> 
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
 <!-- iOS Device Startup Images -->
 
<!-- iPhone -->
<!--<link rel="apple-touch-startup-image"
      media="(device-width: 320px)"
      href="<?php echo get_template_directory_uri(); ?>/images/startup-iphone.png">-->
<!-- iPhone (Retina) -->
<!--<link rel="apple-touch-startup-image"
      media="(device-width: 320px)
         and (-webkit-device-pixel-ratio: 2)"
      href="<?php echo get_template_directory_uri(); ?>/images/startup-iphone4.png">-->
      
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/default_app_logo.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/default_app_logo@2x.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/default_app_logo@2x.png" />


<!-- iPhone SPLASHSCREEN-->
        <link href="apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
        <!-- iPhone (Retina) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPad (portrait) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
        <!-- iPad (landscape) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
        <!-- iPad (Retina, portrait) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPad (Retina, landscape) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-1496x2048.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--[if IE]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie7.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie8.css" />
<![endif]-->
 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>
 <!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery_easing.js"></script>-->
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.iosslider.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-css-transform.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-rotate.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/browserdetect.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mainactions.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<?php $options = twentyeleven_get_theme_options();
$current_colorscheme = $options['link_color']; 


?>

<body <?php body_class(); ?> id="<?php echo $current_colorscheme; ?>">

<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<hgroup class="heading">
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>

			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( $header_image ) :
					// Compatibility with versions of WordPress prior to 3.4.
					if ( function_exists( 'get_custom_header' ) ) {
						// We need to figure out what the minimum width should be for our featured image.
						// This result would be the suggested width if the theme were to implement flexible widths.
						$header_image_width = get_theme_support( 'custom-header', 'width' );
					} else {
						$header_image_width = HEADER_IMAGE_WIDTH;
					}
					?>
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logoImage">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					/*if ( is_singular() && has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ /*$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
							$image[1] >= $header_image_width ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else :*/
						// Compatibility with versions of WordPress prior to 3.4.
						if ( function_exists( 'get_custom_header' ) ) {
							$header_image_width  = get_custom_header()->width;
							$header_image_height = get_custom_header()->height;
						} else {
							$header_image_width  = HEADER_IMAGE_WIDTH;
							$header_image_height = HEADER_IMAGE_HEIGHT;
						}
						?>
					<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
				<?php /*endif;*/ // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>

			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="globalSearch">
				<?php get_search_form(); ?>
				<div class="filtered" style="display: none;">
					<ul>
					<li class="subheading" style="display: block;">Results <span id="filter-count"></span></li>
					<?php

// The Query
query_posts('');

// The Loop
while ( have_posts() ) : the_post();
	echo '<li>';
	echo '<a href="';
	the_permalink();
	echo '">';
	the_title();
	echo '</a>';
	echo '</li>';
endwhile;

// Reset Query
wp_reset_query();

cals_search_feed('http://news.cals.wisc.edu/?feed=rss2&cat=-20,-21,-66,-67,0', 40, 1, -1); 
cals_search_feed('http://ecals.cals.wisc.edu/feed/', 40, 1, -1); 
?>

						<!-- Hard code any additional search terms here -->
						<!--<li><a href="#">Search Item 1</a></li>-->
						
					</ul>
				</div>
				</div>
			<?php
				else :
			?>
				<?php get_search_form(); ?>
			<?php endif; ?>

			
			</hgroup>
			
			<nav id="access" role="navigation">
				<a href="#" class="mobileNavTrigger">Navigation</a>
				<a href="#" class="mobileSettingsTrigger">Navigation</a>
				<div class="mobileScrollTop"></div>
				<div class="centerfix">
				<a href="#" class="totop" title="Go to the top of the page">Go to the top of the page</a>
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				
				<!-- The markup of the navigation if it is hard coded -->
				<!--<ul class="clearfix">
			  		<li><a href="#">Students</a></li>
			  		<li><a href="#">Alumni</a></li>
			  		<li><a href="#">Faculty &amp; Staff</a></li>
			  		<li><a href="#">Industry &amp; Community</a></li>
			  		<li><a href="#">Research</a></li>
			  		<li><a href="#">Outreach</a></li>
  				</ul>-->
	  				<div class="customMenuItems"> 
	  					<ul class="menu">
  							<?php if ( is_user_logged_in() ) : ?>
								<li class="menu-item">
									<a href="https://agronomy.wisc.edu/jackson/media/gallery.php">LAB</a>
									<ul class="sub-menu">
										<li class="menu-item">
											<a href="https://agronomy.wisc.edu/jackson/media/gallery.php">media</a>
											<ul class="sub-menu">
												<li class="menu-item"><a href="https://agronomy.wisc.edu/jackson/media/seasonal.php">Seasonal Growth</a></li>

											</ul>
										</li>
										<li class="menu-item"><a href="https://uwmadison.app.box.com/files/0/f/3057793855/Jackson_Lab">agenda</a></li>
										<!--<li class="menu-item"><a href="#">personal page</a></li>-->
									</ul>
								</li>

	  						<?php endif; ?>

	  						<?php if ( !is_user_logged_in() ) : ?>
								<li class="menu-item"><a href="<?php echo admin_url(); ?>">Login</a></li>
	  						<?php endif; ?>
	  					</ul>
	  				</div><!-- .customMenuItems -->
				</div><!-- .centerfix -->
				
			</nav><!-- #access -->
			
			
<div class="headingbg clearfix"></div>
	<?php if ( has_nav_menu( 'utility_links' ) ) { ?>
	<div class="utilityLinks"><?php wp_nav_menu( array( 'theme_location' => 'utility_links' ) ); ?></div>
	
	<?php } ?>
	</header><!-- #branding -->

<div id="mobile-menu">
	<div id="mobile-menu-inner">
	<div class="mobile-search"><input type="search" placeholder="Search" /></div>
	<!--<a href="/" class="mobileHome">Home</a>-->
	<div id="mobile-menu-container"></div>
	</div>
</div>
<div id="mobile-filter">
	<div id="mobile-filter-inner">
	</div>
</div>
	