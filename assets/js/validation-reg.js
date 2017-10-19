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
    
    $("#accinfo").validate({
       rules: {
           
           useracc: 
           {required: true,
           minlength: [5]},
           
           nome:
           {required: true,
           minlength: [7]},
           
           imail:
           {required: true,
           minlength: [5],
           email:true},
           
           cemail:
           {required: true,
            equalTo: '[name="imail"]',
           email:true},
           
           cel:
           {required: true,
            },
           
           pass:
           {required: true,
            minlength: [6],
            },
           
           cpass:
           {required: true,
            minlength: [6],
            equalTo: '[name="pass"]',
            },
    
}})
    $("#businfo").validate({
       rules: {
           cpf:
           {
               required:true,
               minlength: [11],
               cpfBR:true,
           },
           cnpj:
           {
               required:true,
               minlength: [14],
               
           },
           cep:
           {
               required:true,
               minlength: [8],
               
           },

}})});
///// MASKSS

$(document).ready(function(){

  $('#tel').mask('(99) 9999-9999');
  $('#cel').mask('(99) 9 9999-9999');
  $('#cpf').mask('999.999.999-99');
  $('#cnpj').mask('00.000.000/0001-00');
  $('#cep').mask('00000-000');
    
});