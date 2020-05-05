/** @format */

$(function () {
	var review_carusel = new Swiper(".js-swiper__propose .swiper-container", {
		slidesPerView: 3,
		slidesPerColumn: 1,
		spaceBetween: 16,
		loop: false,
		autoHeight: false,
		slidesPerGroup: 3,
		pagination: {
			el: ".js-swiper__propose .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".js-swiper__propose .swiper-button-next",
			prevEl: ".js-swiper__propose .swiper-button-prev",
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

	var review_carusel = new Swiper(".js-swiper__clients .swiper-container", {
		slidesPerView: 7,
		slidesPerColumn: 2,
		spaceBetween: 16,
		loop: false,
		autoHeight: false,
		slidesPerGroup: 1,
		pagination: {
			el: ".js-swiper__clients .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".js-swiper__clients .swiper-button-next",
			prevEl: ".js-swiper__clients .swiper-button-prev",
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

	var review_carusel = new Swiper(".js-swiper__galery .swiper-container", {
		slidesPerView: 1,
		slidesPerColumn: 1,
		spaceBetween: 16,
		loop: false,
		autoHeight: false,
		slidesPerGroup: 1,
		navigation: {
			nextEl: ".js-swiper__galery .swiper-button-next",
			prevEl: ".js-swiper__galery .swiper-button-prev",
		},
		breakpoints: {
			990: {
				slidesPerView: 1,
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

	var review_carusel = new Swiper(".js-swiper__awards .swiper-container", {
		slidesPerView: 5,
		slidesPerColumn: 1,
		spaceBetween: 16,
		loop: false,
		autoHeight: false,
		slidesPerGroup: 1,
		navigation: {
			nextEl: ".js-swiper__awards .swiper-button-next",
			prevEl: ".js-swiper__awards .swiper-button-prev",
		},
		breakpoints: {
			990: {
				slidesPerView: 1,
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

	var popup__speed = 240;

	function popup__open(id) {
		var utm = window.location.href;
		$('.js-utm').val(utm);
		$('.popup').each(function () {
			var this__id = $(this).attr('id');
			if (this__id == id) {
				$('.popup').fadeOut(popup__speed);
				$('#' + this__id).fadeIn(popup__speed);
				$('body').addClass('js-no-scroll');
			};
		});
	}

	function popup__ready() {
		var this__hash = window.location.hash.replace("#", "");
		popup__open(this__hash);
	};

	$(document).ready(function () {
		popup__ready();
		$('body').on('click', '*[data-popup]', function () {
			var this__link = $(this).data("popup").replace("#", "");
			popup__open(this__link);
		});
		$('body').on('click', '.js-popup__close', function () {
			$('.popup').fadeOut(popup__speed);
			history.pushState(null, null, window.location.href.split('#')[0]);
			$('body').removeClass('js-no-scroll');
		});
		$('body').on('click', '*[data-popup-title]', function () {
			var this__link = $(this).data("popup").replace("#", "");
			var utm = window.location.href;
			var title = $(this).data('popup-title');
			var value = $(this).data('popup-value');
			$('#' + this__link + ' .js-title--text').text(title);
			$('#' + this__link + ' .js-value--text').text(value);
			$('#' + this__link + ' .js-title--val').text(title);
			$('#' + this__link + ' .js-value--val').text(value);
		});
	});

	$(".questions-item").click(function () {
		$(this).toggleClass("questions-item--closed");
		$(this).children(".questions-inner").slideToggle(500);
		$(this).siblings().children(".questions-inner").slideUp(500);
		$(this).siblings().addClass("questions-item--closed");
	});

	$(document).mouseup(function (e) {
		var container = $(".questions-item");
		if (container.has(e.target).length === 0) {
			container.addClass("questions-item--closed");
			container.children(".questions-inner").slideUp(500);
		}
	});

	$('a[href*="#"]').on('click', function (e) {
		e.preventDefault();
		var id = $(this).attr('href'),
			top = $(id).offset().top;

		$('body,html').animate({
			scrollTop: (top - 150)
		}, 1500);
	});
});