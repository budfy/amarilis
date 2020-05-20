var popup__speed = 240;

function popup__open(id) {
	var utm = window.location.href;
	$('.js-utm').val(utm);
	$('.popup').each(function () {
		var this__id = $(this).attr('id');
		if (this__id == id) {
			//$('.popup').fadeOut(popup__speed);
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
		var this__close_all_popup = $(this).data('popupclose');
		if (this__close_all_popup) {
			$('.popup').fadeOut(popup__speed);
		}
		var this__link = $(this).data("popup").replace("#", "");
		popup__open(this__link);
	});
	$('body').on('click', '.js-popup__close', function () {
		$(this).parents('.popup').fadeOut(popup__speed);
		//$('.popup').fadeOut(popup__speed);
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