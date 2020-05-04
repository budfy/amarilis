$(document).ready(function(){
    $('.big-input__input').on('change', function(){
        var this__cout = $(this).val();
        if ( this__cout) {
            $(this).parents('.big-input').addClass('is-has');
        } else {
            $(this).parents('.big-input').removeClass('is-has');
        }
    });
});