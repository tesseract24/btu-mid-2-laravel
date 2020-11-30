$( document ).ready(function() {
    $('.right_menu h3').click(function () {
        if ( $( '.right_menu' ).hasClass('hid') ){
            $( '.right_menu' ).removeClass('hid');
        }
        else {
            $( '.right_menu' ).addClass('hid');
        }
    });
});