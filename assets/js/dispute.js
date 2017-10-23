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



$( "#produto" ).click(function(e) {
    e.preventDefault();
    $('#myTabs a[href="#problema"]').tab('show');
    $('#nav1').toggleClass('done');
    $('#nav2').toggleClass('active');
    $('.product').css("display","block");
});

$( "#pagamento" ).click(function(e) {
    e.preventDefault();
    $('#myTabs a[href="#problema"]').tab('show');
    $('#nav1').toggleClass('done');
    $('#nav2').toggleClass('active');
    $('.payment').css("display","block");
});

$( "#arrependimento" ).click(function(e) {
    e.preventDefault();
    $('#myTabs a[href="#problema"]').tab('show');
    $('#nav1').toggleClass('done');
    $('#nav2').toggleClass('active');
    $('.return').css("display","block");
});

$( "#back" ).click(function(e) {
    e.preventDefault();
    $('#myTabs a[href="#filtro"]').tab('show');
    $('#nav1').toggleClass('done');
    $('#nav2').toggleClass('active');
    $('.product').css("display","none");
    $('.payment').css("display","none");
    $('.return').css("display","none");
});



$('#pb0').change(function() {
    var selected_option = $('#pb0').val();
    if (selected_option == 'Eu ainda não recebi o produto'){
        $('#actionn').fadeIn();
        $('#actions').fadeOut();
    } else if (selected_option =='Eu recebi um produto defeituoso, incompleto ou diferente das condições anunciadas'){
        $('#actions').fadeIn();
        $('#actionn').fadeOut();
    }
    
});

$('#pb1').change(function() {
    var selected_option = $('#pb1').val();
    
    if (selected_option == 'Gostaria de trocar o produto que recebi por um novo'){
        $('#description0').fadeIn();
    } else if (selected_option =='Gostaria pedir um abatimento no preço total'){
        $('#description0').fadeIn();
    }
    
    else if (selected_option =='Gostaria de devolver o produto e receber meu dinheiro de volta'){
       $('#description0').fadeIn();
    }
    
});

$('#pb2').change(function() {
    var selected_option = $('#pb2').val();
    
    if (selected_option == 'O produto que recebi veio com defeito'){
        $('#event0').fadeIn();
        $('#event1').fadeOut();
        $('#event2').fadeOut();
    } else if (selected_option =='O produto que recebi veio incompleto'){
        $('#event0').fadeOut();
        $('#event1').fadeIn();
        $('#event2').fadeOut();
    }
    
    else if (selected_option =='O produto que recebi é diferente do anunciado'){
       $('#event0').fadeOut();
        $('#event1').fadeOut();
        $('#event2').fadeIn();
    } else{
        $('#event0').fadeOut();
        $('#event1').fadeOut();
        $('#event2').fadeOut();
    }
    
});
