$( ".compra" ).click(function() {
    var $target = $('.c' + $(this).data('value'));
    $target.toggle();
});

$( ".vende" ).click(function() {
    var $target = $('.v' + $(this).data('value'));
    $target.toggle();
});


$( "p" ).click(function() {
var $linea = $('.l' + $(this).data('value'));
var n = $("input:checked", this).length;
     if(n == 0){
    $($linea).hide(); //if there are none checked, hide visible elements
  } else {
    $($linea).show(); //otherwise (some are selected) fadeIn - if the div is hidden.
  };
});



$("[name=tend]").click(function() {
    $("#purban").toggle();
    $("#prural").toggle();
    alert("SORTA O SOM");
    
});