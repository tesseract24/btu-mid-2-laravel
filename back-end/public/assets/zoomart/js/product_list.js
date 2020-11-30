var prev_min_price = $("#min_value").val();
var prev_max_price = $("#max_value").val();
var min_price = $("#min_value").val();;
var max_price = $("#max_value").val();

$( document ).ready(function() {
  $('.brand_bl ul li').click(function () {
    if ( $( this ).hasClass('active') ){
      $( this ).removeClass('active');
      $(this).find('input').removeAttr('checked');
    }
    else {
      $( this ).addClass('active');
      $(this).find('input').attr('checked', 'checked');
    }
  });

  var $boxes = $('input[name="propertyValues[]"]:checked');
  $boxes.each(function(){
    $(this).parent().addClass('active');
  });

  $(".price").keyup(function(e) {
    min_price = $("#min_value").val();
    max_price = $("#max_value").val();
  });

  $('#order-by').on('change', function(){
    var orderBy = $(this).val();
    console.log(orderBy);
    window.location.href = '?order_by='+orderBy;
  });

  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ prev_min_price, prev_max_price ],
    slide: function( event, ui ) {
      $( "#min_value" ).val( ui.values[ 0 ]);
      $( "#max_value" ).val( ui.values[ 1 ]);
      min_price = $("#min_value").val();
      max_price = $("#max_value").val();
    }
  });
  var maxValues = $('#slider-range').slider("option", "max");
  var minValues = $('#slider-range').slider("option", "min");

  $( "#min_value" ).val( $( "#slider-range" ).slider( "values", 0 ) );
  $( "#max_value" ).val( $( "#slider-range" ).slider( "values", 1 ) );

  $( "#min_value" ).change(function() {
    if ( $(this).val() < minValues ){
      $(this).val(minValues);
    }
    $( "#slider-range" ).slider( "values", 0, $(this).val() );
  });
  $( "#max_value" ).change(function() {
    if ( $(this).val() > maxValues ){
      $(this).val(maxValues);
    }
    $( "#slider-range" ).slider( "values", 1, $(this).val() );
  });


  $('.home_cat').click(function () {
    if ( $( this ).hasClass('hid') ){
      $( this ).removeClass('hid');
    }
    else {
      $( this ).addClass('hid');
    }
  });
});
