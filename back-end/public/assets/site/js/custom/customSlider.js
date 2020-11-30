var $range = $("#range_slider_size");
var $range2 = $("#range_slider_price");


$range.ionRangeSlider({
    type: "double",
    min: 10,
    max: 100,
    from: 10,
    to: 50,
    hide_min_max: true,
    hide_from_to: true,
    grid: false
});
$range2.ionRangeSlider({
    type: "double",
    min: 0,
    max: 5000,
    from: 0,
    to: 2000,
    hide_min_max: true,
    hide_from_to: true,
    grid: false
});
var size="მმ";
$range.on("change", function () {
    var $this = $(this),
        value = $this.prop("value").split(";");
    $("#size_range").html(value[0] + " - " + value[1] + " "+size );
});
$range2.on("change", function () {
    var $this = $(this),
        value = $this.prop("value").split(";");
    $("#price_range").html(value[0] + " - " + value[1] + " ₾ ");
});