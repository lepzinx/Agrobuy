<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Agrobuy | Painel de Negócios </title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/dashboard_vend.css" rel="stylesheet">
    
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

<body>
	<header id="header"><!--header-->
		
		
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
			</div>
		</div><!--/header-middle-->
	
		</header><!--/header-->
	
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
                                        <a href="dashboard_comp.html"><label class="btn btn-primary">Comprar</label></a>
                                        <a href="<?=base_url()?>index.php/dashboard/venda"><label class="btn btn-primary active">Vender</label></a>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="menu2" class="tab-pane fade in active"><br>
                                        <ul>
                                            <a href='<?=base_url()?>index.php/dashboard/venda'><li ><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
                                            <a href='<?=base_url()?>index.php/usuarios/mensagens'><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
                                            <a href='<?=base_url()?>index.php/anuncios/novoanuncio'><li><span class="glyphicon glyphicon-bullhorn"></span><p> Criar Anúncio</p></li></a>
                                            <a><li class="active"><span class="glyphicon glyphicon-list-alt"></span><p> Meus Anúncios</p></li></a>
                                            <a><li id="m4"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputação e Disputas</p></li></a>
                                            <a><li id="m5"><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
                                            <a><li id="m6"><span class="glyphicon glyphicon-user"></span><p> Perfil e Configurações</p></li></a>
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
                            <a href='<?= base_url()?>index.php/dashboard/editarperfil'><li>Editar meu Perfil</li></a>
                            <a><li>Editar Minhas Informações</li></a>
                            <a><li>Editar Minhas Informações de Pagamento</li></a>
                            <a><li>Editar Minhas Configurações</li></a>
                        </ul>
                    </div>
                         
                </div>
                </div>          
            <div class="col-sm-9" id="content"  >
        
       
                            
                    <div id="meusorc"> </div>
                    <div id="meusanunc">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a data-toggle="tab" href="#anuna">Ativos <br></a></li>
                            <li><a data-toggle="tab" href="#anunf">Finalizados <br></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="anuna" class="tab-pane fade in active">
                                <?php foreach($anuncio as $anun) {?>;
                                <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader4" >
                                            <td></td>
                                            <td><a data-toggle="modal" data-target="#productModal"><span class="glyphicon glyphicon-unchecked"></span> Anúncio ID: <?=$anun->anuncio_id?></a></td>
                                            <td colspan="2"><p>Título</p></td>
                                            <td><p>Disponibilidade</p></td>
                                            <td><p>Unidade</p></td>
                                            <td><p>Preço Unitário</p></td>
                                            <td>Ações</td>
                                        </tr>
                                        <tr class="tdata">
                                            <td colspan="2"><img class="productimg" src="<?=base_url().$anun->anuncio_imagem1?>" height="100" width="100" data-toggle="modal" data-target="#productModal"></td>
                                            <td colspan="2"><a target='_blank' href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?= $anun->anuncio_id?>"> <?=$anun->anuncio_titulo?></a></td>    
                                            <td><p> <?=$anun->anuncio_disponibilidade?> </p></td>
                                            <td><p> <?=$anun->anuncio_unidade?> </p></td>
                                            <td><p> R$ <?=$anun->anuncio_preco?> </p></td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-primary dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-list" aria-hidden="true"></i>
                                                    </a>
                                                    <ul id="actiondropdown" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li class=""><a href="<?=base_url()?>index.php/anuncios/editaranuncio/<?=$anun->anuncio_id?>"><span class="glyphicon glyphicon-edit"></span> Editar Anúncio</a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-share"></span> Impulsionar Anúncio!</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#confirmationModal"><span class="glyphicon glyphicon-remove"></span>Desativar Anúncio</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>  
                                
                                <?php } ?>
                                <div class="container bottomnav" >
                                  <?php echo $paginacao_venda1 ?>
                                </div>
                            </div>
                            
                                
                            
                            
                            
                            <div id="anunf" class="tab-pane fade">
                               <?php foreach($anuncio as $anun) {?>;
                                <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader4" >
                                            <td></td>
                                            <td><a data-toggle="modal" data-target="#productModal"><span class="glyphicon glyphicon-unchecked"></span> Anúncio ID: <?=$anun->anuncio_id?></a></td>
                                            <td colspan="2"><p>Título</p></td>
                                            <td><p>Disponibilidade</p></td>
                                            <td><p>Unidade</p></td>
                                            <td><p>Preço Unitário</p></td>
                                            <td>Ações</td>
                                        </tr>
                                        <tr class="tdata">
                                            <td colspan="2"><img class="productimg" src="<?=base_url().$anun->anuncio_imagem1?>" height="100" width="100" data-toggle="modal" data-target="#productModal"></td>
                                            <td colspan="2"><a data-toggle="modal" data-target="#productModal"> <?=$anun->anuncio_titulo?></a></td>    
                                            <td><p> <?=$anun->anuncio_disponibilidade?> </p></td>
                                            <td><p> <?=$anun->anuncio_unidade?> </p></td>
                                            <td><p> R$ <?=$anun->anuncio_preco?> </p></td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-primary dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-list" aria-hidden="true"></i>
                                                    </a>
                                                    <ul id="actiondropdown" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li class=""><a href="#"><span class="glyphicon glyphicon-edit"></span> Editar Anúncio</a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-share"></span> Impulsionar Anúncio!</a></li>
                                                        <li><a href="#" id='excluirModal' data-toggle="modal" 
                                                               data-target="#<?=$anun->anuncio_id?>Modal"><span class="glyphicon glyphicon-remove"></span>Desativar Anúncio</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>  
                                      <div Id="<?=$anun->anuncio_id?>Modal" class="modal fade">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h5> Você tem certeza? que deseja <p> deletar este anuncio??</p></h5>
                               
                                <form method='post' action='<?=base_url()?>index.php/anuncios/deletaranuncio/<?=$anun->anuncio_id?>' >
                                <button type="button" class="btn btn-success">Sim</button>
                                <button type="submit" class="btn btn-danger" data-dismiss="modal">Não</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div> 
                                <?php } ?>
                                <div class="container bottomnav" >
                                 <?php echo $paginacao_venda1 ?>
                                </div>
  
                            </div>               
                        </div>
                        
                    </div>
                </div>
                </div>

            </div>
                
 
                <div id="dealModal" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" title="Fechar">
                                 <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                            </button>
                            <div class="modal-header">
                                    <h2> Negociação Nº <em>12345678</em></h2>
                                </div>
                            <div class="modal-body">
                                <h3 data-toggle="tooltip" title="Por gentileza, avalie essa negociação. Se tudo estiver Ok, é hora de fechar negócio!">Resposta Pendente</h3>
                                <br>
                                <h5 data-toggle="tooltip" title="Data de início da negociação">12/12/2013</h5>
                                <br>
                                <h3> Preço Total <b> R$ 11.000,00</b></h3>
                            </div>
                            <div class="modal-title">
                                <h3> Produtos</h3>
                            </div>
                            <div class="modal-body">
                                
                                <table class="tabledisplay">
                                    <tbody>
                                        <tr class="theader3" >
                                            <td></td>
                                            <td><a><span class="glyphicon glyphicon-user"></span> Fazenda Sta. Agnobalda da Serra</a></td>
                                            <td colspan="2"><p>Produto</p></td>
                                            <td><p>Quantidade</p></td>
                                            <td><p>Unidade</p></td>
                                            <td><p>Preço Unitário</p></td>
                                            <td>Preço dos Produtos</td>
                                        </tr>
                                        <tr class="tdata">
                                            <td colspan="2"><img class="productimg" src="<?=base_url()?>assets/images/placeholders/mock1.jpg" height="100" width="100"></td>
                                            <td colspan="2"><a> Soja em Saca Bibibi Bobobó</a></td>    
                                            <td><p> 100 </p></td>
                                            <td><p> Sacas &#40;sc.&#41; </p></td>
                                            <td><p> R$ 100,00 </p></td>
                                            <td><p> R$ 10.000,00</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-title">
                                <h3> Condições de Compra</h3>
                            </div>
                            <div class="modal-body">
                                <h4>Quantidade:</h4>
                                <p class="form-control"> 100</p><p> Sacas &#40;sc.&#41; </p>
                                <h4>Preço Unitário</h4>
                                <p class="form-control"> R$ 100,00</p>
                                <h4>Pagamento</h4>
                                <p> <i class="fa fa-barcode" aria-hidden="true" data-toggle="tooltip" title="Boleto Bancário"></i><img src="images/ico/cards.png" width="100" data-toggle="tooltip" title="Cartões de Crédito"> </p>
                            </div>
                            <div class="modal-title">
                                <h3> Condições de Frete</h3>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <thead>
                                        <tr class="theader2">
                                            <th>Endereço de Entrega</th>
                                            
                                        </tr>
                                        <tr class="tdata">
                                            <td><h4>Rua Charlinho de Menezes, 900</h4></td>
                                            <td><h4>Marília - SP</h4></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="theader2">
                                        <th>Condição</th>
                                        <th>Custo</th>
                                    </tr>
                                    <tr class="tdata">
                                    <td><h4> Transportadora - EXW </h4></td>
                                    <td><h4> <a data-toggle="tooltip" title="O Fornecedor está cotando a melhor solução logística">Aguardando Cotação</a> </h4></td>
                                    </tr>
                                    <tr class="tdata">
                                    <td><h4> Cliente Busca</h4></td>
                                    <td><h4> R$ 0,00 </h4></td>
                                    </tr>
                                    
                                    <tr class="tdata">
                                    <td><h4> Fornecedor Entrega</h4></td>
                                    <td><h4> R$ 100,00 </h4></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-title">
                                <h3> Ações</h3>
                            </div>
                            <div class="modal-body action-buttons">
                                <button href="#" data-toggle="modal" data-target="#confirmationModal"><i class="fa fa-handshake-o" aria-hidden="true"></i> Fechar Negócio</button>
                                <button href="#"><span class="glyphicon glyphicon-edit"></span>Editar Proposta</button>
                                <button href="#" data-toggle="modal" data-target="#confirmationModal"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Recusar Proposta</button>
                                <button href="#" data-toggle="modal" data-target="#confirmationModal"><span class="glyphicon glyphicon-remove"></span>Excluir Proposta</button>
                                
                            </div>
                        </div>
                    </div>
                </div> <!-- /MODAL DETALHE DA NEGOCIAÇÃO-------------------->
          <!-- /MODAL DE CONFIRMAÇÃO-------------------->
                
            <!--<div class="col-sm-3" id="reputacao">
                   
                <div id="miniprofile">
                    <div class="tab-pane fade in" id="companyprofile" >
                        <h4 id="companyname">Nome da Empresa</h4>
                        <img id="companyprofilepic" src="images/placeholders/profile1.jpg" height="100px;">
                        <h4>Cetificações</h4>
                        <p>Checagem de Dados<i class="fa fa-question-circle" aria-hidden="true"></i>:</p>
                        <span class="glyphicon glyphicon-ok-circle"></span>
                        <span class="glyphicon glyphicon-map-marker"></span>
                        <span class="glyphicon glyphicon-ok"></span>
                        <a class="btn-sm btn-default"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        <br>
                        <p>Suporte:<a> <i class="fa fa-get-pocket"></i> Compra Garantida</a></p>
                        <div class="container">
                            <div class="spdesc">
                                <h3><a href="">Reputação</a></h3>
                                <img src="images/ico/thermometer.png" height="100px;">
                                <ul id="reputacao" class="nav-justified">
                                    <li><a href=""><span class="glyphicon glyphicon-plus-sign"></span><br> Positivas &#40;30&#41;</a></li>
                                    <li><a href=""><span class="glyphicon glyphicon-minus-sign"></span><br> Neutras &#40;2&#41;</a></li>
                                    <li><a href=""><span class="glyphicon glyphicon-remove-sign"></span><br> Negativas &#40;1&#41;</a></li>
                                </ul>
                            </div>                               
                        </div>
                    </div>
                </div>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                                <a data-toggle="collapse" href="#collapse1"><h3 class="panel-title">Minha Conta Virtual</h3></a>
                            
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table id="vabalance">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th> Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 31/08/2017</td>
                                            <td> R$ 200.00</td>
                                        </tr>    
                                    </tbody>
                                </table>
                            
                            </div>
                            <div class="panel-footer">
                                <table id="vaoperations">
                                    <thead>
                                        <tr>
                                            <th><a href=""><i class="fa fa-money" aria-hidden="true"></i> Transferir Valores</a></th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href=""><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Minhas Contas</a></td>
                                            <td> <a href=""><i class="fa fa-history" aria-hidden="true"></i> Histórico</a></td>
                                        </tr>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
                </div>-->
            </div>
        </div>
    </section>
    </body>
	<footer id="footer"><!--Footer-->		
	</footer><!--/Footer-->
	

  
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
   <script src="<?=base_url()?>assets/js/dashboard_vend.js"></script>

</body>
</html>
