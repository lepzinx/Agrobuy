///// Toggle - show subcategories by selecting categories

$(function() {
  $('#filter1').on('change', function() {
    var $target = $('.c' + $(this).val());
    if ($target.is(":hidden")) {
      $('.ndfilter').hide();
        $('#filter2').show();
      $target.show();
        $('#filter3').hide();
    }})});

$(function() {
  $('#filter2').on('change', function() {
    var $target = $('.cc' + $(this).val());
    if ($target.is(":hidden")) {
      $('.rdfilter').hide();
        $('#filter3').show();
      $target.show();} else {
          $('#filter3').hide();
      }
  })});




/// ANIMATE SELECT FIELDS IN ORDER TO THEY STAY INLINE! 


$( "#filter1" ).mouseenter(function() {
$( "#filter1" ).animate({ width: "380px" }, 400 );
$('#filter2').animate({ width: "160px" }, 400 );
$('#filter3').animate({ width: "80px" }, 400 );
    
});

$( "#filter2" ).mouseenter(function() {
$( "#filter2" ).animate({ width: "380px" }, 400 );
$('#filter1').animate({ width: "160px" }, 400 );
$('#filter3').animate({ width: "160px" }, 400 );
    
});

$( "#filter3" ).mouseenter(function() {
$( "#filter3" ).animate({ width: "380px" }, 400 );
$('#filter1').animate({ width: "80px" }, 400 );
$('#filter2').animate({ width: "160px" }, 400 );
    
});