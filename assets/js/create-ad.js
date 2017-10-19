//// HOOVERING ON CATEGORIES
// PRODUTOS AGRICOLAS
$('#prodagri1').hover(function(){
    $(this).css("border","1px solid #bada55")
        .css("border-radius","20px"), $('#cat1')
        .css("color","#bada55");
}, function(){
    $(this).css("border","1px solid #fff"), $('#cat1')
    .css("color","inherit");
});
// INSUMOS
$('#insumos1').hover(function(){
    $(this).css("border","1px solid #dd6259")
        .css("border-radius","20px"), $('#cat2')
        .css("color","#dd6259");
}, function(){
    $(this).css("border","1px solid #fff"), $('#cat2')
    .css("color","inherit");
});
// PRODUTOS BENEFICIADOS E TRANSFORMADOS
$('#prodbentran1').hover(function(){
    $(this).css("border","1px solid #2b6ca3")
        .css("border-radius","20px"), $('#cat3')
        .css("color","#2b6ca3");
}, function(){
    $(this).css("border","1px solid #fff"), $('#cat3')
    .css("color","inherit");
});
// SERVIÇOS
$('#servprof1').hover(function(){
    $(this).css("border","1px solid #fe980f")
        .css("border-radius","20px"), $('#cat4')
        .css("color","#fe980f");
}, function(){
    $(this).css("border","1px solid #fff"), $('#cat4')
    .css("color","inherit");
});



//// CLICKING ON BUTTONS GIVES SEQUENCE TO STEPS
/// FIRST CHOOSEN CATEGORIES
$( "#ca1, #ca2, #ca3, #ca4" ).click(function(e) { e.preventDefault(); 
$('#pills0 a[href="#sub-category-tab"]').tab('show');
$('#step1').addClass('done');
$('#pl1').addClass('pl');                             
                       });
/// FIRST BACK BUTTON
$( "#ca-1" ).click(function(e) { e.preventDefault(); 
$('#pills0 a[href="#category-tab"]').tab('show');
$('#step1').removeClass('done');
$('#pl1').removeClass('pl');                             
                       });



$(".categoryfilter option").click(function(){
        $("#ca5").css("display","none");

    });
$(".final").click(function(){
        $("#ca5").fadeIn();
    });

$("#ca5").click(function (e) {
    e.preventDefault();
    var url = $('#anunCategoria').attr('action');
    var data = $('#anunCategoria').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {
            $('#pills0 a[href="#product-details-tab"]').tab('show');
            $('#step2').addClass('done');
            $('#pl2').addClass('pl');
        },
        error: function () {
            alert('Erro ao selecionar, tente trocar de categoria e entre em contato com um administrador sobre o erro.');
        }
    });
//$('#pills0 a[href="#product-details-tab"]').tab('show');
//$('#step2').addClass('done');
//$('#pl2').addClass('pl');
     });
/// SECOND BACK BUTTON
$( "#ca-2" ).click(function(e) { e.preventDefault(); 
$('#pills0 a[href="#sub-category-tab"]').tab('show');
$('#step2').removeClass('done');
$('#pl2').removeClass('pl');
     });

$("#ca6").click(function (e) {
    e.preventDefault();
       
    var url = $('#final').attr('action');
    var data = $('#final').serialize();
if($("#politica").is(':checked')){
      $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {

            
        },
        error: function () {
            alert('Erro ao finalizar publicação, verifique se está tudo preenchido corretamente, ou fale com um administrador sobre o erro.');
        }
    });
    }else{
    $('#textoerro').append("Aceite os termos para prosseguir!");
    }
    //$('#pills0 a[href="#publish-tab"]').tab('show'); 
//$('#step3').addClass('done');
///$('#pl3').addClass('pl');                              
});

$("#ca7").click(function (e) {
    e.preventDefault();
     
    var url = $('#pform').attr('action');
    var data = $('#pform').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {

            $('#pills0 a[href="#publish-tab"]').tab('show');
            $('#step3').addClass('done');
            $('#pl3').addClass('pl');
        },
        error: function () {
            alert('Erro ao cadastrar dados, verifique se está tudo preenchido corretamente, ou fale com um administrador sobre o erro.');
        }
    });
//$('#pills0 a[href="#publish-tab"]').tab('show'); 
//$('#step3').addClass('done');
//$('#pl3').addClass('pl');                              
});


// PRODUTOS AGRÍCOLAS
$("#ca1").click(function(){
$("#0").css('display','block'),
$("#1").css('display','block'),
$("#2").css('display','block'),
$("#3").css('display','block')
});

// INSUMOS
$("#ca2").click(function(){
$("#4").css('display','block'),
$("#5").css('display','block'),
$("#6").css('display','block'),
$("#7").css('display','block')
});
// PRODUTOS BENEFICIADOS E TRANSFORMADOS
$("#ca3").click(function(){
$("#8").css('display','block'),
$("#9").css('display','block'),
$("#10").css('display','block'),
$("#11").css('display','block'),
$("#12").css('display','block'),
$("#13").css('display','block'),
$("#14").css('display','block'),
$("#15").css('display','block'),
$("#16").css('display','block'),
$("#17").css('display','block')
});
// PRODUTOS BENEFICIADOS E TRANSFORMADOS
$("#ca4").click(function(){
$("#18").css('display','block'),
$("#19").css('display','block'),
$("#20").css('display','block'),
$("#21").css('display','block'),
$("#22").css('display','block'),
$("#23").css('display','block'),
$("#24").css('display','block'),
$("#25").css('display','block')
});



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
//// PRODUCT INFO


/// CHOOSE IF PRICE IS VISIBLE OR NOT

$("[name=pvis]").change(function() {
    $("#pvisible").toggle();
    $("#pconsult").toggle();
    
});

/// CHANGE PRODUCT UNIT TO UNIT CHOOSEN
$(function() {
   var myInput = $('#unitbox');
   myInput.change(function() {
       $('.unitbox0').val(myInput.val());
   });
});



/// SHOW FREIGHT COMPANY MODAL/TYPE IF FREIGHT COMPANY IS CHOOSEN
$('#fcompany').click(function() {
    $("#ftype").toggle(this.checked);
    $('#fmodal1').toggle(this.checked);
});
// SHOW DISCLAIMER ABOUT EXW TERM
$('input[name="toptions"]').change(function() {
    $("#exwalert").toggle(100);
    $('#ddpalert').toggle(100);
});


/// SHOW CORREIOS MODAL IF CORREIOS IS CHOOSEN
$('#fcorreios').click(function() {
    $('#fmodal2').toggle(this.checked);
});

/// SHOW NEGOCIATED MODAL IF NEGOCIATION IS CHOOSEN
$('#fneg').click(function() {
    $('#fmodal3').toggle(this.checked);
});

//// ADD ACTIVE CLASS FOR SELECTED LABELS
$('.btn-input').change(function(){
    var closest = $(this).closest('.btn')
   $(closest).toggleClass('active'); 
});

/// IF USER ACCEPT COMPRA GARANTIDA, DISPLAY PAYMENT CONDITIONS. IF NOT, DISPLAY DISCLAIMER
$('#cg').change(function() {
    $("#payment").toggle(this.checked);
    $("#nocg").toggle();
});





/// ADVISE TRASACTION COSTS BY CLICKING PAYMENT METHODS


$('.payment').click(function() {
    $("#payment-warning").toggle(this.checked);
});

