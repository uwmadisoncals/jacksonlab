<?php

$thumbURL;
$defaultImagePath = get_stylesheet_directory_uri() . "/images/dragonfly.jpg";

//logit(is_null($thumbURL),'$thumbURL_0');

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	$thumbID = get_post_thumbnail_id();
	$thumbURL = wp_get_attachment_image_src($thumbID)[0];
} 

if(!is_null($thumbURL)){

	echo "style=\"background-image: url('" . $thumbURL . "');background-size:cover;background-position:50% 50%;\""; 
	//echo "style=\"background-image: url('" . $thumbURL . "');background-size:cover;\"";

}else{
	echo "style=\"background-image: url('" . $defaultImagePath . "');background-size:cover;background-position:50% 50%;\""; 
	//echo "style=\"background-image: url('" . $defaultImagePath . "');background-size:cover;\"";
}

//logit($imagePath,'$image_ath');
//logit($thumbID,'$thumbID');

?>
