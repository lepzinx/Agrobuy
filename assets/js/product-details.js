jQuery(function($) {
  function fixDiv() {
    var $cache = $('#contactspan');
    if ($(window).scrollTop() > 700)
      $cache.css({
        'position': 'fixed',
        'top': '10px'
      });
    else
      $cache.css({
        'position': 'absolute',
        'top': '128px',
          'left':'1040px'
      });
  }
  $(window).scroll(fixDiv);
  fixDiv();
});


 // handles the carousel thumbnails
 $('[id^=carousel-selector-]').click( function(){
 var id_selector = $(this).attr("id");
 var id = id_selector.substr(id_selector.length -1);
 id = parseInt(id);
 $('#myCarousel').carousel(id);
 $('[id^=carousel-selector-]').removeClass('selected');
 $(this).addClass('selected');
 });

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
var id = $('.item.active').data('slide-number');
id = parseInt(id);
$('[id^=carousel-selector-]').removeClass('selected');
$('[id^=carousel-selector-'+id+']').addClass('selected');
});

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
$('#myCarousel img,#firmCarousel img').click(function(){
var img = $(this);
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
$('body').css('overflow','hidden');
});
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
$('body').css('overflow','initial');

}
