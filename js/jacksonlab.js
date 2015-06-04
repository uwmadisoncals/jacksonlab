(function($) {

	$( document ).ready(function() {

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
	    	$("article:nth-of-type(3n)").after('<p class=\"cf\"></p>');
	    }

	});

})( jQuery );
