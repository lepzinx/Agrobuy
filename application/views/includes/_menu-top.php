            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="logo pull-left">
                                <a href="<?=base_url()?>" title="Home - Agrobuy"><img src="<?=base_url()?>assets/images/home/logo.png" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <form id='formPesquisa' method='post' action='<?=base_url()?>index.php/anuncios/pesquisa'>
                            <div class="search_box pull-left">
                                <div id="search_category">
                                     <select id="search_category" onChange='alteraAction(this.value)' class="form-control">
                                         <option value='Produtos'> Produtos</option>
                                         <option value='Orcamentos'> Orçamentos</option>                    
                                     </select>
                                </div>
                                <input type="text" name='pesquisar' placeholder="O que está procurando?">
                                <button type='submit' class="btn-default" id="basic-addon"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                                </form>
                            
                        </div>
                        <div class="col-sm-4">
                            <nav class="navbar ">
  <div class="container-fluid">
    <div class="collapse navbar-collapse shop-menu" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         
              
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comprar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>index.php/orcamentos/novoorcamento">Criar Pedido de Orçamento</a></li>
            <li><a href="<?=base_url()?>index.php/dashboard/meusorcamentos">Meus Orçamentos</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vender <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>index.php/anuncios/novoanuncio">Criar Anúncio</a></li>
            <li><a href="<?=base_url()?>index.php/dashboard/meusanuncios">Meus Anúcios</a></li>
            <li><a href="#">Impulsionar Anúncios!</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ajuda <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Dúvidas Freqüentes</a></li>
            <li><a href="#">Reclamações</a></li>
            <li><a href="#">Iniciar Disputa</a></li>
            <li><a href="#">Denunciar Anúncio</a></li>
              <hr style="margin:5px;">
              <li><a href="#">Sobre a Agrobuy</a></li>
            <li><a href="#">Contato</a></li>
         
          </ul>
        </li>
            <?php if($this->usuarios_model->checarSessao()){ ?>
          <li><a href="<?=base_url()?>index.php/usuarios/sair">Sair </a></li>
          <?php }else{?>
        <li><a href="<?=base_url()?>index.php/usuarios">Registro/Login</a></li>
          <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->
