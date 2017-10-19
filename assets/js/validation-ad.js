$(document).ready(function(){
    
   $.validator.setDefaults({
    errorClass: 'help-block',
    highlight: function(element) {
      $(element)
        .closest('.form-group')
        .addClass('has-error');
    },
    unhighlight: function(element) {
      $(element)
        .closest('.form-group')
        .removeClass('has-error');
    },
    errorPlacement: function (error, element) {
      if (element.prop('type') === 'checkbox') {
        error.insertBefore(element.parent());
      } else {
        error.insertBefore(element);
      }
    }
  });
    
    $("#pform").validate({
       rules: {
           title: 
           {required: true,
           minlength: [5]},
           
           pprice:
           {required:true},
           
           minqt:
           {required:"#minorder:checked",
            digits:true},
           
           available:
           {required:true},
           
           freight:
           {required: true}
                       
       },
        messages: {
            freight:{
                required: "Por gentileza, escolha pelo menos uma condição de frete."
            },
            minqt:{
                required: "Já que o pedido deverá conter uma quantidade mínima, por gentileza, especifique-a abaixo:"
            }
        }
   }); 
});
/// NUMBER VALIDATION

$('.money').mask("#,##0.00", {reverse: true});

//// RED BOX APPEAR WHEN INPUT IS NOT VALID

