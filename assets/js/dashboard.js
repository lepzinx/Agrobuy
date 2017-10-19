$(document).ready(function () {


    carregarnotificacoes();
    setInterval(function () {
        carregarnotificacoes();
    }, 1000);
});




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


//// NAVIGATING THROUGH DEAL PHASES
/// FIRST CHOOSEN CATEGORIES
$( "#step1" ).click(function(e) { e.preventDefault(); 
$('#step1, #step2, #step3, #step4').removeClass('done');
$('#pl1, #pl2, #pl3, #pl4').removeClass('pl');                             
                       });


$( "#step2" ).click(function(e) { e.preventDefault(); 
$('#step1').addClass('done');
$('#pl1').addClass('pl');
$('#step2,#step3, #step4').removeClass('done');
$('#pl2,#pl3,#pl4').removeClass('pl');                             
                       });

$( "#step3" ).click(function(e) { e.preventDefault(); 
$('#step1, #step2').addClass('done');
$('#pl1,#pl2').addClass('pl');
$('#step3, #step4').removeClass('done');
$('#pl3,#pl4').removeClass('pl');                             
                       });

$( "#step4" ).click(function(e) { e.preventDefault(); 
$('#step1, #step2,#step3').addClass('done');
$('#pl1,#pl2,#pl3').addClass('pl');
$('#step4').removeClass('done');
$('#pl4').removeClass('pl');
                                                   
                       });
$( "#step5" ).click(function(e) { e.preventDefault();
$('#step1, #step2,#step3, #step4').addClass('done');
$('#pl1,#pl2,#pl3,#pl4').addClass('pl');
                                });

// TOOLTIP
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

function carregarnotificacoes() {
    var url;
    url = $('#url').attr('action');
    jQuery.post(url, function (data) {
        $("#notify").empty().append(data);
    });
}
