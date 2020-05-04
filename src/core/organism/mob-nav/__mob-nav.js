$(document).ready(function(){
    $('.js-mob-nav__open').click(function(){
        $('.mob-nav').toggleClass('is-open');
        $('body').toggleClass('js-no-scroll');
    });	
    $('.mob-menu__toogle-btn').on('click', function(){
		$(this).parents('.mob-menu__item').toggleClass('is-open');
	});
});