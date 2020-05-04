function tabs__base(){
	$('.tabs__block.--js').hide();
	$('.tabs__block.--js.is-show').show();
};
function tabs__open(i){
	var tab = $(i).data('tab');
	$(i).parents('.tabs').find('.tabs__btn').removeClass('is-active');
	$(i).addClass('is-active');
	$(i).parents('.tabs').find('.tabs__block').hide();
	$(i).parents('.tabs').find('.tabs__block').removeClass('is-show');
	$(i).parents('.tabs').find('.--'+tab).addClass('is-show');
	$(i).parents('.tabs').find('.--'+tab).show();
};
$(document).ready(function(){
	tabs__base();
	$('body').on('click', '.tabs__btn.--js', function(){
		tabs__open(this);
	});	
});