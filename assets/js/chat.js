$(document).ready(function() {
	                   
    $('#mensagens').animate({ scrollTop: 9999999 }, 500);

	                    carregarmensagens();
	                    setInterval(function(){
		                carregarmensagens();
	                     },1000);
                          });
            
            function carregarmensagens() {
	var url;
	url = $('#url').attr('action');
	jQuery.post(url, function(data) {
		$("#mensagens").empty().append(data);
	});
            }

          

$("#enviarMensagem").click(function (e) {
    e.preventDefault();
    var url = $('#enviar').attr('action');
    var data = $('#enviar').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {
            document.getElementById("texto").value = "";
            $('#mensagens').animate({ scrollTop: 9999999 }, 500);
		    carregarmensagens();
           
        },
        error: function (e) {
            
        }
    });

     });

$('#texto').keydown(function(e){
 if (e.which == 13){
    e.preventDefault();
    var url = $('#enviar').attr('action');
    var data = $('#enviar').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {
            document.getElementById("texto").value = "";

            $('#mensagens').animate({ scrollTop: 9999999 }, 500);
		    carregarmensagens();
           
        },
        error: function (e) {
            
        }
    });
 }
})


