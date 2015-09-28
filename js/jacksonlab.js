(function($) {

	$( document ).ready(function() {



	$("#jacksonlab-owl-carousel").owlCarousel({
 
     // autoPlay: 10000, //Set AutoPlay to 3 seconds
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

	    	
	    	//Generate dimensions vals for slider elements
	    	var owlItemHeight = $('.owl-item').height(); //get .owl-item height
	    	//var owlItemHeight = 562;
	    	console.log(owlItemHeight);
 			$(".text-content").height(owlItemHeight); //give .text-content height of owlItemHeight
			$(".owl-item div img").css({"max-height":owlItemHeight});
	    	var SliderImgHeight = $(".owl-item div img").height();
	    	var SliderImgWidth = $(".owl-item div img").width();
	    	console.log("image height:"+ SliderImgHeight +". image Width: "+ SliderImgWidth+".");


	    	//Generate dimension vals for .JL_featured_wrap img
	    	var JL_featured_wrap_hght = $('.JL_featured_wrap').height();//height of .JL_featured_wrap
	    	var JL_featured_wrap_width = $('.JL_featured_wrap').width(); //width of .JL_featured_wrap, not including padding
	    	var JL_featured_wrap_w_less = JL_featured_wrap_width *.9; //compute 90% of JL_featured_wrap_width
	    	//console.log("JL_featured_wrap_hght: "+JL_featured_wrap_hght);
	    	//console.log("JL_featured_wrap_width: "+JL_featured_wrap_width);
	    	//console.log("JL_featured_wrap_w_less: "+JL_featured_wrap_w_less);
	    	$(".JL_featured_wrap > h2,.JL_featured_wrap > p").css({"max-width":JL_featured_wrap_w_less});



	    	//apply class if box has no featured image
	    	$( ".JL_featured_wrap" ).each(function( i ) {

			  if($( this ).find('.imgWrap').length ==0){

			  	$(this).closest('.JL_featured_wrap').addClass('no-fimg');

			  }//endif

			});

			
			$(".coverLink").mouseover(function(e) {
				var elem = $(this).closest('.imgWrap').find('.imgWrapContainer');
				
				$(elem).addClass("hovered");
			});
			
			$(".coverLink").mouseout(function(e) {
				var elem = $(this).closest('.imgWrap').find('.imgWrapContainer');
				$(elem).removeClass("hovered");
			});


	    	//$(".imgWrap").css({"max-height":JL_featured_wrap_hght});

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

	    	//asign width to people-meta labels
	    	
	    	var arr = [];//array to hold label widths

	    	$('.people-meta .label').each(function(i){

	    	arr.push( $(this).width() ); //populate arr with widths of labels

	    	});

	    	var maxWidth = Math.max.apply(Math,arr); //get max width

	    	$('.people-meta .label').each(function(i){

	    		$(this).css({width:maxWidth}); //apply maxWidth to all labels
	    	});



	    }//END body.is (single-people)

	});

})( jQuery );
