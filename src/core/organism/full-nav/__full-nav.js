$(document).ready(function(){
	$('.full-menu__btn.--js').on('click', function(){
		$('.nav').toggleClass('is-open');
		$('body').toggleClass('js-no-scroll');
	});
	var height = $(this).scrollTop();
		$(window).scroll(function(e) {
		var height = $(this).scrollTop();
		$('.nav ')[height >= 1  ? 'addClass' : 'removeClass']('fixed');
	});
});