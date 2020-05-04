$(document).ready(function(){
	$('.counter-calc__btn.--plus.--js').on('click', function(){
	    var thsCount = $(this).parents('.counter-calc').find('.counter-calc__input').val();
	    thsCount = parseInt(thsCount) + 1;
	    $(this).parents('.counter-calc').find('.counter-calc__input').val(thsCount);             
	});
	$('.counter-calc__btn.--minus.--js').on('click', function(){
	    var thsCount = $(this).parents('.counter-calc').find('.counter-calc__input').val();
	    if (thsCount >= 2) {
	        thsCount = parseInt(thsCount) - 1;
	        $(this).parents('.counter-calc').find('.counter-calc__input').val(thsCount);              
	    }
	});
});