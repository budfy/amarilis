$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() >= 500) {
			$('.scroll__top.--js').show();
		} else {
			$('.scroll__top.--js').hide();
		}
	});
	$('body').on('click', '.scroll__top.--js', function(){	
		$('body,html').animate({scrollTop:0},320);
	});
});