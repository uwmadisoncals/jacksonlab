(function($) {

	$( document ).ready(function() {



	$("#jacksonlab-owl-carousel").owlCarousel({
 
      //autoPlay: 4000, //Set AutoPlay to 3 seconds
      singleItem:true,

 
  	});


	    //alert("test");
	    
	    //Applies enclosed js to template page-people.php
	    if($('body').is(".page-people")){

	    	//alert("this is page-people");
	    	
	    	  function isEmpty( el ){
			      return !$.trim(el.html())
			  }

	    	$(".people-description").each(function(index){
	    		//console.log(index + ": "+ $(this).text());

				if (isEmpty($(this))) {

			     $(this).css({"background-color": "transparent"});

    			// console.log($(this)+ " is empty");
			  }

	    	});
	    }

	    //Applies enclosed js to template page-home.php
	    if($('body').is(".page-home")){

	    	//Add clearfix after every third article
	    	$("article:nth-of-type(3n)").after('<p class=\"cf jlclear\"></p>');
	    }

	    //Applies this js to template home.php
	    if($('body').is(".blog")){
	    	var childLength = $('article .featured-image').length;
	    	console.log(childLength);


	    	console.log("is in blog");

	    	/*if($('.featured-image').length){
	    		$(".main-article-content").addClass("no-fenatured-image");
	    	}*/

	    	/*
	    	$("article").children('.entry-content').each(function(){
	    		//console.log($('.main-article-content > .featured-image');
	    		if($('.main-article-content .featured-image').length){
	    		console.log($('.main-article-content > .featured-image'));
	    		}
	    	}); */


	    }

	    if($('body').is(".single-people")){

	    	if( $(".imageWrapper > img").length ){

	    	var imageHeight = $(".imageWrapper > img").height(); //get computed height of the image, returns number of pixels without the px unit

	    	//console.log(imageHeight);

	    	$(".people-meta").height(imageHeight);

	    	}


	    }

	});

})( jQuery );
