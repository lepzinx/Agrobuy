//// ADD ACTIVE CLASS TO SELECTED RADIO INPUT
$('.radio-group label').on('click', function () {
    $('a label.active').removeClass('active');
    $(this).addClass('active');
});

///// SHOW AUXILARY SIDEBAR ON HOVER - 'reputacao e disputas'
$("#m1,#m4,#sidebar2").hover(function() {
    $("#sidebar2").css("display","block");
    $("#m1,#m4").css("background-color","#3b4248").css("color","#fff");
},function() {
    $("#sidebar2").css("display","none");
    $("#m1,#m4").css("background-color","initial").css("color","#bcc7bd");
});

///// SHOW 'SERVICOS' SIDEBAR ON HOVER

$("#m2,#sidebar3").hover(function() {
    $("#sidebar3").css("display","block");
    $("#m2").css("background-color","#3b4248").css("color","#fff");
    
},function() {
    $("#sidebar3").css("display","none");
    $("#m2").css("background-color","initial").css("color","#bcc7bd");
});

$("#m5,#sidebar4").hover(function() {
    $("#sidebar4").css("display","block");
    $("#m5").css("background-color","#3b4248").css("color","#fff");
    
},function() {
    $("#sidebar4").css("display","none");
    $("#m5").css("background-color","initial").css("color","#bcc7bd");
});
///// show 3rd sidebar on hover - 'perfil e configuracoes'
$("#m3,#m6,#sidebar5").hover(function() {
    $("#sidebar5").css("display","block");
    $("#m3,#m6").css("background-color","#3b4248").css("color","#fff");
},function() {
    $("#sidebar5").css("display","none");
     $("#m3,#m6").css("background-color","initial").css("color","#bcc7bd");
});
