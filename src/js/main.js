/** @format */

$(function () {
	$(".product__tab-btn_js").on("click", function (e) {
		let id = $(this).attr("href");
		e.preventDefault();

		$(this).addClass("product__tab-btn--current");
		$(this)
			.siblings(".product__tab-btn")
			.removeClass("product__tab-btn--current");
		$(id).addClass("product__tab--current");
		$(id).siblings(".product__tab_js").removeClass("product__tab--current");
	});
});
