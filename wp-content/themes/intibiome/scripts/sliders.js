$(document).ready(function() {
	$('.slider-products, .slider-discoveries').slick({
	  	slidesToShow   : 3,
	  	slidesToScroll : 1,
		arrows		   : false,
	  	autoplay 	   : true,
	  	autoplaySpeed  : 4000,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});
});