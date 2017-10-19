        <script src="<?=base_url()?>assets/js/jquery.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?=base_url()?>assets/js/price-range.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
        <script src="<?=base_url()?>assets/js/main.js"></script>
      <input type='hidden' id='pesquisa1' value='<?=base_url()?>index.php/anuncios/pesquisa'>
<input type='hidden' id='pesquisa2' value='<?=base_url()?>index.php/orcamentos/pesquisa'>

<script type='text/javascript'>

function alteraAction(valor) { 
    var ac1 = $('#pesquisa1').val();
    var ac2 = $('#pesquisa2').val();
    if (valor == "Produtos") {
        $('#formPesquisa').attr('action', ac1);
    }
    if(valor == 'Orcamentos'){
        $('#formPesquisa').attr('action', ac2);
    }
}
</script>