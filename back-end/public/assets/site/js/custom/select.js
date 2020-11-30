$(function() {
$(".select-style-grey").change(function (){
    var default_value= $(this).find(".default").val();
    var selected_value=$("option:selected", this).val();

    if (default_value!=selected_value) { $(this).removeClass('select-style-grey'); $(this).addClass('select-style-white');}
    else { $(this).removeClass('select-style-white'); $(this).addClass('select-style-grey');}
});
});