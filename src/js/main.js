/** @format */

$(function () {
	var review_carusel = new Swiper(".js-swiper__demo .swiper-container", {
		slidesPerView: 3,
		slidesPerColumn: 1,
		spaceBetween: 16,
		loop: false,
		autoHeight: false,
		slidesPerGroup: 3,
		pagination: {
			el: ".js-swiper__demo .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".js-swiper__demo .swiper-button-next",
			prevEl: ".js-swiper__demo .swiper-button-prev",
		},
		breakpoints: {
			990: {
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
		},
	});
});