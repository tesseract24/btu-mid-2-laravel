$( document ).ready(function() {
  function footer_func(){
    window_height = $(window).height();
    footer_scrollTop = $('#footer').position().top;
    footer_height = $('#footer').outerHeight();
    if (footer_scrollTop < (window_height - footer_height)) {
      $('#footer').css({'margin-top' : (window_height - footer_scrollTop - footer_height)});
    }
  }
  footer_func();
  /*function search_width() {
  var k = $('.bot_header .logo').outerWidth();
  var t = $('.bot_header .shops').outerWidth();
  var sum = k + t + 100;
  if ( $(window).width() > 767 ){
  $('.bot_header .search_block').css({'width': 'calc(100% - ' + sum + 'px)'});
}
else{
$('.bot_header .search_block').css({'width': '100%'});
}
}
search_width();
$(window).resize(function () {
search_width();
});*/

$('#search').keyup(function(){

  $.ajax({
    url:'/search',
    type:'post',
    data:{
      '_token': $('meta[name="csrf-token"]').attr('content'),
      keyword: $(this).val()
    },
    success: function(data){
      console.log(data);
      $('#search').autocomplete({
        source: data,
        select: function( event, ui ) {
          window.location.href = ui.item.url;
        }
      });
    }
  });
});

$('.user_outer .user').click(function () {
  if( $('.user_inner').hasClass('vis') ){
    $('.user_inner').removeClass('vis');
  }
  else{
    $('.user_inner').addClass('vis');
  }
});


$('#menu .list_in >a').click(function (e) {
  if( $(this).closest('.list_in').has('.main-sub-menu').length > 0 ){
    e.preventDefault();
  }
  if( $(this).closest('.list_in').hasClass('vis') ){
    $(this).closest('.list_in').removeClass('vis');
  }
  else{
    $('#menu .list_in').removeClass('vis');
    $(this).closest('.list_in').addClass('vis');
  }
});
$('#menu .list_in').mouseleave(function () {
  $(this).removeClass('vis');
});

$(document).on('click', '.value_up', function (e) {
  // $('.value_up').click(function (e) {
  e.preventDefault();
  var inp = $(this).closest('.inp_block').find('input').val();
  var new_val = +inp + 1;
  $(this).closest('.inp_block').find('input').val(new_val);
});

$(document).on('click', '.value_down', function (e) {
  // $('.value_down').click(function (e) {
  e.preventDefault();
  var inp = $(this).closest('.inp_block').find('input').val();
  var new_val = +inp - 1;
  if(new_val < 1){
    return false;
  }
  $(this).closest('.inp_block').find('input').val(new_val);
});

$('.inp_block input, button.cart_prod').click(function (e) {
  e.preventDefault();
});

$('.inner_partners .owl-carousel').owlCarousel({
  items: 6,
  margin: 50,
  responsiveClass:true,
  responsive:{
    0:{
      items:2,
      nav:true,
      margin: 30
    },
    400:{
      items:3,
      nav:true,
      margin: 30
    },
    600:{
      items:4,
      nav:false
    },
    1000:{
      items:6,
      nav:true,
      loop:false
    }
  },
  nav: false,
  loop: false
});


/*$(document).on('click', '.Classname', function(){
$('html, body').animate({scrollTop: 0}, 500);
return false;
});

$( '.main_ui input' ).on('click', function () {
var k = $(this).outerWidth();
$('#ui-datepicker-div').css({'width' : k });
});

$( "#datepicker" ).datepicker({
firstDay: 1,
showOtherMonths: true,
dayNames: [ "კვირა", "ორშაბათი", "სამშაბათი", "ოთხშაბათი", "ხუთშაბათი", "პარასკევი", "შაბათი" ],
dayNamesMin: [ "კვი", "ორშ", "სამ", "ოთხ", "ხუთ", "პარ", "შაბ" ],
dayNamesSort: [ "კვ", "ორ", "სა", "ოთ", "ხუ", "პა", "შა" ],
monthNames: [ "იანვარი", "თებერვალი", "მარტი", "აპრილი", "მაისი", "ივნისი", "ივლისი", "აგვისტო", "სექტემბერი", "ოქტომბერი", "ნოემბერი", "დეკემბერი" ],
monthNamesShort: [ "იან", "თებ", "მარ", "აპრ", "მაი", "ივნ", "ივლ", "აგვ", "სექ", "ოქტ", "ნოე", "დეკ" ]
});

$(window).resize(function(){

});
*/

});
