$(document).ready(function() {
	$(document).on('click', '.scroll-to', function () {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top - 80
			}, 1000);
		}
	});
	$(document).on('click', '.accordion', function () {
		var pergunta = $(this).data('pergunta')
		$('.resposta-'+ pergunta).toggleClass('active');
	});
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
	
		if (scroll >= 500) {
			$(".logo-parceiro").addClass("t-scroll");
		}
		else{
			$(".logo-parceiro").removeClass("t-scroll");
		}
	});
});