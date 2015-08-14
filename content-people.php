<?php
/**
 * The template used for displaying page content in page-people.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

<!-- Variables --> 
<?php  $peopleCatObj = get_field_object("field_55ce25bc90eb6"); //Person Category ?>



<!-- display research-scientist grouping -->
<?php  

 				$choicesArr = $peopleCatObj['choices']; //create associative array with value-label pairings

 				$choiceLabel = $choicesArr[ $peopleCatObj['value'] ]; //get the label associated with current value 
 				?>

	<!--<h1><?php// echo $choiceLabel; ?></h1> -->

	<?php get_template_part( 'content', 'people-article' ); ?>









<?php /*

//logit( $firstNameObj, '$firstNameObj:' ); 
//logit( $lastNameObj, '$lastNameObj:' ); 
//logit( $profTitleObj, '$profTitleObj:' ); 
//logit( $descObj, '$descObj:' );
//logit( $photoObj, '$photoObj:' ); */
?>