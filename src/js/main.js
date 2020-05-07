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

	let slide_id;
	$("a[href ^= '#popup-presentation']").on("click", function () {
		slide_id = parseInt($(this).data("slide")) - 1;
		console.log(slide_id);
		review_carusel.update();
	});

	var review_carusel = new Swiper(".js-swiper__popup .swiper-container", {
		slidesPerView: 1,
		slidesPerColumn: 1,
		spaceBetween: 0,
		loop: false,
		mode: 'horizontal',
		freeMode: false,
		initialSlide: slide_id,
		autoHeight: false,
		slidesPerGroup: 1,
		pagination: {
			el: ".js-swiper__popup .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".js-swiper__popup .swiper-button-next",
			prevEl: ".js-swiper__popup .swiper-button-prev",
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
			1100: {
				slidesPerView: 6,
				slidesPerColumn: 2,
				spaceBetween: 16,
			},
			990: {
				slidesPerView: 5,
				slidesPerColumn: 2,
				spaceBetween: 16,
			},
			750: {
				slidesPerView: 4,
				slidesPerColumn: 2,
				spaceBetween: 16,
			},
			550: {
				slidesPerView: 3,
				slidesPerColumn: 2,
				spaceBetween: 16,
			},
			400: {
				slidesPerView: 2,
				slidesPerColumn: 2,
				slidesPerGroup: 1,
				spaceBetween: 16,
			},
		},
	});

	var review_carusel = new Swiper(".js-swiper__galery .swiper-container", {
		slidesPerView: 2,
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
			1100: {
				slidesPerView: 4,
				slidesPerColumn: 1,
				spaceBetween: 16,
			},
			800: {
				slidesPerView: 3,
				slidesPerColumn: 1,
				spaceBetween: 16,
			},
			600: {
				slidesPerView: 2,
				slidesPerColumn: 1,
				slidesPerGroup: 1,
				spaceBetween: 16,
			},
			350: {
				slidesPerView: 1,
				slidesPerColumn: 1,
				slidesPerGroup: 1,
				spaceBetween: 16,
			},
		},
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

	$('a[href*="#"]:not(a[data-popup])').on('click', function (e) {
		e.preventDefault();
		var id = $(this).attr('href'),
			top = $(id).offset().top;

		$('body,html').animate({
			scrollTop: (top - 150)
		}, 1500);
	});

	//popup inputs
	$(".popup-input").on("input", function () {
		if ($(this).val() != "") {
			$(this).parent().addClass("popup-label--inputed");
			console.log("OK")
		} else {
			$(this).parent().removeClass("popup-label--inputed");
			console.log("else");
		}
	});

	$('.menu-list__link').each(function () {
		var location = window.location.hash;
		var link = this.hash;
		if (location == link) {
			$(this).parent().addClass('menu-list__item--current');
			$(this).parent().siblings().addClass('menu-list__item--current');
		}
	});

	$(".burger").on("click", function () {
		$(".menu-list").slideToggle(500);
		$(".menu").toggleClass("menu--active");
		$('.ham').toggleClass('active');
	});

	$("a[href^='#popup-present']").on("click", function () {
		let brand = $(this).parent().siblings(".brands-desc").children(".brands-desc__name").text();
		$(".brand-name--js").text(brand);
	});
});