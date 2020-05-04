$(window).load(function() {
	var review_carusel = new Swiper('.js-swiper__reviews .swiper-container', {
		slidesPerView: 2,
		slidesPerColumn: 1,
		spaceBetween: 16,
		loop:false,
		autoHeight:true,
		slidesPerGroup: 1,
		pagination: {
			el: '.js-swiper__reviews .swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.js-swiper__reviews .swiper-button-next',
			prevEl: '.js-swiper__reviews .swiper-button-prev',
		},
		breakpoints: {
			991: {
			  slidesPerView: 2,
			  slidesPerColumn: 1,
			  spaceBetween: 16,
			},
			640: {
			  slidesPerView: 1,
			  slidesPerColumn: 1,
			  slidesPerGroup: 1,
			  spaceBetween: 16,
			},
		}
	});	 
});