/** @format */

$(function () {
	$('.features-wrapper').slick({
		mobileFirst: true,
		dots: false,
		arrows: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		focusOnSelect: true,
		responsive: [{
			breakpoint: 550,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			},
			breakpoint: 1024,
			settings: 'unslick',
		}]
	});

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


	$(window).on("load", function () {
		var popup_carusel = new Swiper(".js-swiper__popup .swiper-container", {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 0,
			loop: true,
			mode: 'horizontal',
			freeMode: false,
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

		let slide_id;
		$("a[href ^= '#popup-presentation']").on("click", function () {
			slide_id = $(this).data("slide") - 1;
			$('#popup-presentation').attr('style', 'display:none');
			popup_carusel.slideTo(slide_id);
		});

		setTimeout(() => {
			$('#popup-presentation').attr('style', 'display:none');
		}, 100);
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
			450: {
				slidesPerView: 1,
				slidesPerColumn: 1,
				slidesPerGroup: 1,
				spaceBetween: 16,
			},
		},
	});

	$(".questions-item").click(function () {
		$(this).toggleClass("questions-item--closed");
		$(this).children(".questions-inner").slideToggle(240);
		$(this).siblings().children(".questions-inner").slideUp(240);
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
			//console.log("OK")
		} else {
			$(this).parent().removeClass("popup-label--inputed");
			//console.log("else");
		}
	});

	// $('.menu-list__link').each(function () {
	// 	var location = window.location.hash;
	// 	var link = this.hash;
	// 	if (location == link) {
	// 		$(this).parent().addClass('menu-list__item--current');
	// 		$(this).parent().siblings().addClass('menu-list__item--current');
	// 	}
	// });

	$(".burger").on("click", function () {
		$(".menu-list").slideToggle(500);
		$(".menu").toggleClass("menu--active");
		$(".hamRotate").toggleClass("active");
	});

	$(".menu-list__link").on("click", function () {
		if (window.matchMedia("(max-width: 1023px)").matches) {
			$(".hamRotate").removeClass("active");
			$(".menu-list").slideUp(500);
			$(".menu").removeClass("menu--active");
		}
	})

	$("a[href^='#popup-present']").on("click", function () {
		let brand = $(this).parent().siblings(".brands-desc").children(".brands-desc__name").text();
		$(".brand-name--js").text(brand);
	});

	var lastId, topMenu = $(".header"),
		topMenuHeight = topMenu.outerHeight() + 15,
		menuItems = topMenu.find(".menu-list__link"),
		scrollItems = menuItems.map(function () {
			var item = $($(this).attr("href"));
			if (item.length) {
				return item;
			}
		});

	menuItems.click(function (e) {
		var href = $(this).attr("href"),
			offsetTop = href === "#" ? 0 : $(href).offset().top - 148 - topMenuHeight + 1;
		$('html, body').stop().animate({
			scrollTop: offsetTop
		}, 300);
		e.preventDefault();
	});

	$(window).scroll(function () {
		var fromTop = $(this).scrollTop() + topMenuHeight + 148;
		var cur = scrollItems.map(function () {
			if ($(this).offset().top < fromTop)
				return this;
		});
		cur = cur[cur.length - 1];
		var id = cur && cur.length ? cur[0].id : "";

		if (lastId !== id) {
			lastId = id;
			menuItems.parent().removeClass("menu-list__item--current").end().filter("[href='#" + id + "']").parent().addClass("menu-list__item--current");
		}
	});

	var height = $(this).scrollTop();
	$(window).scroll(function (e) {
		var height = $(this).scrollTop();
		$('.top ')[height >= 1 ? 'addClass' : 'removeClass']('fixed');
	});

	//calculator functions
	let price,
		count,
		summ,
		arrSumm = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		totalSumm = 0,
		localSumm,
		arrSummStorage;

	$('.counter-calc__minus').on("click", function () {
		let $input = $(this).parent().find('.counter-calc__text');
		let count = parseInt($input.val()) - 20;
		count = count < 0 ? 0 : count;
		if (count % 20 != 0) {
			count = 20 * Math.round(count / 20)
		}
		$input.val(count);
		$input.change();
	});

	$('.counter-calc__plus').on("click", function () {

		let $input = $(this).parent().find('.counter-calc__text');
		count = parseInt($input.val()) + 20;
		if (count % 20 != 0) {
			count = 20 * Math.round(count / 20)
		}
		$input.val(count);
		$input.change();
	});

	$(".order-checkbox .order-input").on("input", function () {
		price = parseInt($(this).parent().siblings(".order-counter--wrapper").find(".order-price__value").text()),
			count = parseInt($(this).parent().siblings(".order-counter--wrapper").find(".counter-calc__text").val());
		if ($(this).prop('checked') === true) {
			$(this).parent().siblings(".order-counter--wrapper").slideDown(240);
			$(this).parent().siblings(".order-counter--wrapper").find(".counter-calc__text").removeAttr('disabled').val(20);
			count = parseInt($(this).parent().siblings(".order-counter--wrapper").find(".counter-calc__text").val());
			calc(price, count);
			$(this).parent().siblings(".order-counter--wrapper").find(".order-summ__value").val(summ.toLocaleString() + "₽");
			arrSummStorage = $(this).parent().siblings(".order-counter--wrapper").find(".order-summ__value").data("id");
			arrayValues(summ, arrSummStorage);
			// console.log("price = " + price);
			// console.log("count = " + count);
			// console.log("summ = " + summ);
		} else {
			$(this).parent().siblings(".order-counter--wrapper").slideUp(240);
			$(this).parent().siblings(".order-counter--wrapper").find(".counter-calc__text").attr("disabled", true).val(0);
			count = 0;
			summ = 0;
			arrSummStorage = $(this).parent().siblings(".order-counter--wrapper").find(".order-summ__value").data("id");
			$(this).parent().siblings(".order-counter--wrapper").find(".order-summ__value").val(count);
			arrayValues(summ, arrSummStorage);
		}
	});

	$(".counter-calc__text").on("input, change", function () {
		count = parseInt($(this).val());
		if (count < 0) {
			count = 0;
		}
		if (count % 20 != 0) {
			count = 20 * Math.round(count / 20);
		}
		$(this).val(count);
		price = parseInt($(this).parent().siblings(".order-price").find(".order-price__value").text());
		calc(price, count);
		$(this).parent().siblings(".order-summ").find(".order-summ__value").val(summ.toLocaleString() + "₽");
		$(this).parent().siblings(".order-summ").find(".order-summ__value").val(summ.toLocaleString() + "₽");
		arrayValues(summ, arrSummStorage);
	});

	function calc(price, count) {
		summ = price * count;
		console.log("price = " + price);
		console.log("count = " + count);
		console.log("summ = " + summ);
		return summ;
	};

	function arrayValues(localSumm, arrSummStorage) {
		arrSumm[arrSummStorage] = localSumm;
		arraySum(arrSumm);
		console.log("id= " + arrSummStorage + "/ localSumm= " + localSumm + "/ array: " + arrSumm + "/ totalSumm= " + totalSumm);
		$(".order-bill__summ").val(totalSumm.toLocaleString() + " ₽")
	};

	function arraySum(array) {
		totalSumm = 0;
		for (var i = 0; i < array.length; i++) {
			totalSumm += array[i];
		}
	};

	// forms sender
	let $brandId;
	$(".brands-button").on("click", function () {
		$brandId = $(this).data('brand');
		//console.log($brandId);
	});

	$(".popup-form").not("#popup-present .popup-form").submit(function () {
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: th.serialize(),
		}).done(function () {
			setTimeout(function () {
				th.trigger("reset");
				$.fancybox.close();
			}, 500);
		});
		return false;
	});

	$("#popup-present .popup-form").submit(function () {
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: th.serialize(),
		}).done(function () {
			setTimeout(function () {
				th.trigger("reset");
				$.fancybox.close();
			}, 500);
			$.ajax({
				url: 'presentations/' + $brandId + '.pdf',
				dataType: 'binary',
				xhrFields: {
					'responseType': 'blob'
				},
				success: function (data, status, xhr) {
					var blob = new Blob([data], {
						type: xhr.getResponseHeader('Content-Type')
					});
					var link = document.createElement('a');
					link.href = window.URL.createObjectURL(blob);
					link.download = 'presentations/' + $brandId + '.pdf';
					link.click();
				}
			});
		});
		return false;
	});

	$(".mobile-tell__btn-wrap").on("click", function () {
		$(this).children("svg").toggleClass("--disable");
		$(this).siblings(".mobile-tell__messengers").toggle(260);
		$(this).siblings().children().find(".mobile-tell__messenger").toggleClass("--animated");
		$(this).children(".mobile-tell__close").toggleClass("--active");
	});

	$(".popup-slide__text-wrapper, .order-scroll").mCustomScrollbar({
		axis: "y",
		theme: "light"
	});

});