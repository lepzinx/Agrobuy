$('.radio-group label').on('click', function () {
    $('a label.active').removeClass('active');
    $(this).addClass('active');
});

///// show second sidebar on hover - 'reputacao e disputas'
$("#m1,#m4,#sidebar2").hover(function() {
    $("#sidebar2,#reputation").css("display","block");
    $("#m1,#m4").css("background-color","#3b4248").css("color","#fff");
},function() {
    $("#sidebar2,#reputation").css("display","none");
    $("#m1,#m4").css("background-color","initial").css("color","#bcc7bd");
});

///// show second sidebar on hover - 'servicos'
$("#m2,#m5,#sidebar3").hover(function() {
    $("#sidebar3,#services").css("display","block");
    $("#m2,#m5").css("background-color","#3b4248").css("color","#fff");
    
},function() {
    $("#sidebar3,#services").css("display","none");
    $("#m2,#m5").css("background-color","initial").css("color","#bcc7bd");
});
///// show 3rd sidebar on hover - 'perfil e configuracoes'
$("#m3,#m6,#sidebar4").hover(function() {
    $("#sidebar4,#profile").css("display","block");
    $("#m3,#m6").css("background-color","#3b4248").css("color","#fff");
},function() {
    $("#sidebar4,#profile").css("display","none");
     $("#m3,#m6").css("background-color","initial").css("color","#bcc7bd");
});
