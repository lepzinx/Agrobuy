<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Editar Meu Perfil | Agrobuy</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/dashboard_profile_edit.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<header>
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/home/logo.png" alt="" /></a>
						</div>
				
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Minha Conta</a></li>
								<li><a href=""><i class="fa fa-question-circle"></i> Ajuda</a></li>
								<li><a href="checkout.html"><i class="fa fa-get-pocket"></i> Compra Garantida</a></li>
							</ul>
						</div>
					</div>
				</div>
            </div></div>
	
	</header><!--/header-->
	<body>
	<section>
       
        
    <div class="container">
       <div class="row">
       <div class="col-sm-2" id="sidebarnav">
                <div class="container sidebars">
                    <div id="sidebar1">
                        <div id="sidebar">
                            <div class="well">       
                                <div class="btn-group radio-group nav nav-pills">
                                    
                                    <div id="pillbg">   
                                        <a><label class="btn btn-primary active" id="comprar">Comprar</label></a>
                                        <a href="dashboard_vend.html"><label class="btn btn-primary">Vender</label></a>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="menu1" class="tab-pane fade in active"><br>
                                        <ul>
                                            <a><li><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
                                            <a href=""><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
                                            <a><li><span class="glyphicon glyphicon-file"></span><p> Pedir Orçamento</p></li></a>
                                            <a><li><span class="glyphicon glyphicon-list-alt"></span><p> Meus Orçamentos</p></li></a>
                                            <a><li id="m1"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputação e Disputas</p></li></a>
                                            <a><li id="m2"><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
                                            <a><li id="m3" class="active"><span class="glyphicon glyphicon-user"></span><p> Perfil e Configurações</p></li></a>
                                        </ul>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                    <div id="sidebar2">
                        <ul id="reputation"><h4> Reputação e Disputas</h4><hr>
                            <a><li>Minha Reputação</li></a>
                            <a><li>Iniciar uma Disputa</li></a>
                            <a><li>Denunciar</li></a>
                        </ul>
                    </div>
                    <div id="sidebar3">
                        <ul id="servicesb"><h4> Serviços</h4><hr>
                            <a><li>Minha Conta Virtual</li></a>
                            <a><li><hr></li></a>                            
                            <a><li>Agentes de Compra</li></a>
                        </ul></div>
                    <div id="sidebar4">
                        <ul id="servicess"><h4> Serviços</h4><hr>
                            <a><li>Cotações de Frete</li></a>
                             <li role="separator"><hr class="divider"></li>
                            <a><li>Minha Conta Virtual</li></a>
                        </ul></div>
                    <div id="sidebar5">
                        <ul id="profile"><h4>Perfil e Configurações</h4><hr>
                            <a><li>Editar meu Perfil</li></a>
                            <a><li>Editar Minhas Informações</li></a>
                            <a><li>Editar Minhas Informações de Pagamento</li></a>
                            <a><li>Editar Minhas Configurações</li></a>
                        </ul>
                    </div>
                         
                </div>
                </div>
       <div class="col-sm-10">
        <div class="page-header">
            <h2>Qual tipo de informação você gostaria de atualizar?</h2>
        </div><!-- page-header -->
        
        <ul class="nav nav-tabs" role="tablist" id="myTabs">
            <li class="regtab active"><a id="nav1" href="#account" role="tab" data-toggle="tab">Informações de Negócio</a></li>
            <li class="regtab"><a id="nav2" href="#busin" role="tab" data-toggle="tab">Informações de Endereço</a></li>
            <li class="regtab"><a id="nav3" href="#ativ" role="tab" data-toggle="tab">Informações Gerais</a></li>
        </ul>
        <?php foreach($usuario as $usu){ ?>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="account">
        <h3>Informações de Negócio</h3>
          
        <form action='<?= base_url()?>index.php/dashboard/atualizardadosbus' method="post">
                    <div id="infoacc" class="form-group checkbox">
                    <h4>Tipo de Negócio:</h4>
                    <?php if($usu->usuario_tiponegocio1 == 1){?>
                    <label class="tneg"><input type="checkbox" name="ProdutorRural" value="1" checked> Produtor Rural &#40; Pecuarista/ Prod. Florestal, etc&#41;</label>
                    <?php }else{ ?>
                     <label class="tneg"><input type="checkbox" name="ProdutorRural" value="1"> Produtor Rural &#40; Pecuarista/ Prod. Florestal, etc&#41;</label>
                    <?php } ?>
                     <?php if($usu->usuario_tiponegocio2 == 1){?>
                    <label class="tneg"><input type="checkbox" name="Trader" value="1" checked> Empresa Comercial &#40;Trader/ Escritório&#41; </label>
                    <?php }else{ ?>
      <label class="tneg"><input type="checkbox" name="Trader" value="1"> Empresa Comercial &#40;Trader/ Escritório&#41; </label>
                    <?php } ?>
                    
                     <?php if($usu->usuario_tiponegocio3 == 1){?>
                    <label class="tneg"><input name="Agroindustria" value="1" type="checkbox" checked> Agroindústria</label>
                    <?php }else{ ?>
                    <label class="tneg"><input name="Agroindustria" value="1" type="checkbox"> Agroindústria</label>
                    <?php } ?>
                     <?php if($usu->usuario_tiponegocio4 == 1){?>
                         <label class="tneg"><input type="checkbox" name="Distribuidor" value="1" checked> Distribuidor/Atacadista</label>
                    <?php }else{ ?>
                              <label class="tneg"><input type="checkbox" name="Distribuidor" value="1"> Distribuidor/Atacadista</label>
                    <?php } ?>
                    
                     <?php if($usu->usuario_tiponegocio5 == 1){?>
                              <label class="tneg"><input type="checkbox" name="Coperativa" value="1" checked> Associação/Cooperativa</label>
                    <?php }else{ ?>
                                <label class="tneg"><input type="checkbox" name="Coperativa" value='1'> Associação/Cooperativa</label>
                    <?php } ?>
                    
                     <?php if($usu->usuario_tiponegocio6 == 1){?>
                                <label class="tneg"><input type="checkbox" name="Prestador" value="1" checked=""> Prestador de Serviços &#40;Transporte, Finanças, etc&#41;</label>
                    <?php }else{ ?>
                                <label class="tneg"><input type="checkbox" name="Prestador" value="1"> Prestador de Serviços &#40;Transporte, Finanças, etc&#41;</label>
                    <?php } ?>
                    
                     <?php if($usu->usuario_tiponegocio7 == 1){?>
                                <label class="tneg"><input type="checkbox" name="Startup" value="1" checked> Start-up</label>
                    <?php }else{ ?>
                                <label class="tneg"><input type="checkbox" name="Startup" value="1"> Start-up</label>
                    <?php } ?>

                    </div>
            <button type='submit' class='btn btn-xs btn-primary'> Salvar </button>
        </form>
        
                                
                                               
            </div> 
                  
            <div role="tabpanel" class="tab-pane fade" id="busin">
                
                <form id="businfo" class="form-inline form-group" method="post" action='<?=base_url()?>index.php/dashboard/atualizardadosendereco'>
                <h3>Informações de Endereço</h3>
                
            
     <ul class="list-group col-xs-7">
              <li class="list-group-item list-group-item-info"> Seu Endereço</li>
              <li class="list-group-item">
              <table class="endinfo">
              <tr>
              <td>
              <?=$usu->usuario_ruaouacesso?>, <?=$usu->usuario_numerooukm?> &#40; CEP: <?=$usu->usuario_cep?>
              &#41; - <?=$usu->usuario_municipio?> - <?=$usu->usuario_estado?>
              </td>
              <td><button type="button" data-toggle="modal" data-target="#endModal" class="btn btn-xs btn-primary">Alterar</button></td>
              </tr>
              </table>
              </li> 
              <a href="#" class="list-group-item list-group-item-success"> Endereço</a>
          </ul>
                     <!-- Modal -->
                        
<div class="modal fade" id="endModal" tabindex="-1" role="dialog" aria-labelledby="endModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="endModalLabel">Alterar endereço</h4>
      </div>
    
      <div class="modal-body">
        <div class="trow">
                    <label>Tipo de Endereço: </label>
                    <span id="tend" data-toggle="buttons">
                        <?php if($usu->usuario_tipoendereco == 0){?>
                        <label class="btn btn-radio active">
                                    <input type="radio" name="tend" value='urbano' id="urban" checked> Urbano
                                </label>
                                <label class="btn btn-radio">
                                    <input type="radio" name="tend" value='rural' id="rural"> Rural
                                </label>
                        <?php }else{ ?>
                           <label class="btn btn-radio">
                                    <input type="radio" name="tend" value='urbano' id="urban"> Urbano
                                </label>
                                <label class="btn btn-radio active">
                                    <input type="radio" name="tend" value='rural' id="rural" checked> Rural
                                </label>
                        
                        
                        <?php } ?>
                    </span>
             </div>
    <!-- SE URBANA-->
                    <div id="purban">
                        <div class="trow">
                            <label>CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="" value='<?=$usu->usuario_cep?>' name="cep">    
                        </div>
                            
                        <div class="trow">
                            <label for="#estado">Estado</label><br>
                            <select class="form-control" name="estado" id="uestado">
                                <option value="<?=$usu->usuario_estado?>" disabled selected><?=$usu->usuario_estado?></option>
                                <option value="SP">São Paulo</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PR">Paraná</option>
                                <option value="GO">Goiás</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="MA">Maranhão</option>                   
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantis</option>
                            </select>
                        </div>
                             
                        <div class="trow">
                            <label>Município</label>
                            <input type="text" class="form-control" id="umunicipio" placeholder="" value='<?=$usu->usuario_municipio?>' name="municipio">
                        </div>
                            
                        <div class="trow">
                            <label>Rua</label>
                            <input type="text" class="form-control" id="rua" placeholder="" value='<?=$usu->usuario_ruaouacesso?>' name="rua">
                        </div>
                            
                        <div class="trow">
                            <label>Número</label>
                            <input type="number" class="form-control" id="numero" placeholder="" value='<?=$usu->usuario_numerooukm?>' name="numero">
                        </div>
                        
                        <div class="trow">
                          <label>Complemento</label>
                          <input type="text" class="form-control" id="complemento" placeholder="" value='<?=$usu->usuario_complemento?>' name="complemento">
                        </div>
                        
                    </div>
    <!-- SE  NA ÁREA RURAL-->
                    <div id="prural">
                          
                        <div class="trow">
                            <label for="#estado">Estado</label><br>
                            <select class="form-control" name="estado" id="uestado">
                                <option value="<?=$usu->usuario_estado?>" disabled selected><?=$usu->usuario_estado?></option>
                                <option value="SP">São Paulo</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PR">Paraná</option>
                                <option value="GO">Goiás</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="MA">Maranhão</option>                   
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantis</option>
                            </select>
                        </div>
                            
                        <div class="trow">
                            <label>Município</label>
                            <input type="text" class="form-control" id="rmunicipio" value='<?=$usu->usuario_municipio?>' placeholder="" name="municipio">
                        </div>
                            
                        <div class="trow">
                            <label>Acesso na Rodovia</label>
                            <input type="text" class="form-control" id="estrada" placeholder="" value='<?=$usu->usuario_ruaouacesso?>' name="estrada">
                        </div>
                      
                        <div class="trow">
                            <label>Km/Nº</label>
                            <input type="number" class="form-control" id="km" placeholder="" value='<?=$usu->usuario_numerooukm?>' name="km">
                        </div>
                            
                      <div class="trow">
                          <label>Complemento</label>
                          <input type="text" class="form-control" id="complemento" placeholder="" value='<?=$usu->usuario_complemento?>' name="complemento">
                        </div>
                        </div>
                        

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-default">Atualizar</button>
      </div>
    </div>
  </div>
</div>
                         </form>

                            
            </div>
                  
            <div role="tabpanel" class="tab-pane fade" id="ativ">
                   <h3> Informações de Contato</h3>
                    <div class="row">       
   
                        <form id="accinfo" name="accinfo" class="form-inline" action="<?=base_url() ?>index.php/dashboard/atualizarDadosInfo" method='post'>
                    <p> As informações com <em>*</em> são obrigatórias.</p>
                    <div id="infoacc" class="form-group">

        
                        
        <div class="trow">
            <p><em>* </em>Nome Completo</p>
        <input type="text" class="form-control" id="name" placeholder="" name="nome" value="<?=$usu->usuario_nome?>" required>
        </div>
        
        <div class="trow">
        <p><em>* </em>E-mail</p>
        <input type="text" class="form-control" id="email" placeholder="" name="email" value='<?=$usu->usuario_email?>' required>
        
        </div>
        
        <div class="trow">
        <p>Telefone</p>        
        <input type="tel" class="form-control" id="tel" placeholder="" value='<?=$usu->usuario_tel?>' name="tel">
        
            
        <p>Celular/ Whatsapp</p>
        <input type="tel" class="form-control" id="cel" placeholder="" value='<?=$usu->usuario_cel?>'  name="cel">
        </div>
        
        
        <div class="trow">
        <p><em>* </em>Senha</p>
        <input type="password" class="form-control" id="pass" placeholder="" name="pass" required>
       
        </div>
                                           <button class="btn btn-default" type='submit'  id="btnAvanca1">Salvar<span class="glyphicon glyphicon-chevron-right"></span></button>
    </div> 
                   
</form>

        <?php } ?>
            </div> 
                    </div>

                        </div>
                    
        </div><!-- container -->             
        </div>
        </div>
    </div>
</section>
	
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="<?=base_url()?>assets/js/dashboard_profile_edit.js"></script>
    <script src="<?=base_url()?>assets/js/validation-profile-edit.js"></script>
    <script src="<?=base_url()?>assets/js/messages_pt_BR.js"></script>
</body>
</html>