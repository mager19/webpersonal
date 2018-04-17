jQuery(document).ready(function($) {

     	var userFeed = new Instafeed({
    	get: 'user',
        userId: '36759062',
        accessToken: '36759062.1677ed0.c12b78d05b474395910d3740290b79c0',
        template: '<div><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div>',
        limit: 20,
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        	 after: function () {
       		$('.instagramFeed').slick({
       			slidesToShow: 1,
  				slidesToScroll: 1,
  				autoplay: true,
  				autoplaySpeed: 0,
  				speed: 8000,
				dots: false,
				infinite: true,
				centerMode: true,
		    	cssEase: 'linear',
		  		slidesToShow: 8,
		  		slidesToScroll: 1,
		  		arrows:true,
		  		pauseOnHover: true,
		  		responsive: [
		  			
				    {
				      breakpoint: 800,
				      settings: {
				        slidesToShow: 3,
				        slidesToScroll: 1,
				        infinite: true,
				        
				      }
		    		},    		
		    		{
		      		  breakpoint: 480,
		      		  settings: {
		        	  slidesToShow: 3,
		        	  slidesToScroll: 1,
		        	  arrows: false,
		      		}
		    },
		    	]
       		});
    	}
    });
    userFeed.run();



  		//  $('.your-class').slick({
		  //   speed: 5000,
		  //   autoplay: true,
		  //   autoplaySpeed: 0,
		  //   centerMode: true,
		  //   cssEase: 'linear',
		  //   slidesToShow: 1,
		  //   slidesToScroll: 1,
		  //   variableWidth: true,
		  //   infinite: true,
		  //   initialSlide: 1,
		   
		  // });



});