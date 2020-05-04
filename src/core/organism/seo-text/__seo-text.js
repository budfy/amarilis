$(document).ready(function() {
	$('.js-show-seo-text').on('click', function(){
		$(this).parents('.seo-text').toggleClass('is-open');
	});
});