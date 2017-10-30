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
	<link href="<?=base_url()?>assets/css/dashboard.css" rel="stylesheet">
    
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
							<a href=""><img src="<?=base_url()?>assets/images/home/logo.png" alt="" /></a>
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
                                        <a><label class="btn btn-primary active" id="comprar">Comprar</label></a>
                                        <a href="<?=base_url()?>index.php/dashboard/venda"><label class="btn btn-primary">Vender</label></a>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="menu1" class="tab-pane fade in active"><br>
                                        <ul>
                                            <a><li class="active"><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
                                            <a href="<?=base_url()?>index.php/usuarios/mensagens"><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
                                            <a href="<?=base_url()?>index.php/orcamento/novoorcamento"><li><span class="glyphicon glyphicon-file"></span><p> Pedir Orçamento</p></li></a>
                                            <a href="<?=base_url()?>index.php/dashboard/meusorcamentos"><li><span class="glyphicon glyphicon-list-alt"></span><p> Meus Orçamentos</p></li></a>
                                            <a><li id="m1"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputação e Disputas</p></li></a>
                                            <a><li id="m2"><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
                                            <a><li id="m3"><span class="glyphicon glyphicon-user"></span><p> Perfil e Configurações</p></li></a>
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
                            <a href="<?=base_url()?>index.php/dashboard/editarperfil"><li>Editar meu Perfil</li></a>
                            <a><li>Editar Minhas Informações</li></a>
                            <a><li>Editar Minhas Informações de Pagamento</li></a>
                            <a><li>Editar Minhas Configurações</li></a>
                        </ul>
                    </div>
                         
                </div>
                </div>          
            <div class="col-sm-9" id="content"  >
            <h2>Notificações</h2>
                <div class="notify" id="notify">
              
                </div>
            <div class="outterborder">
                <select id="nav-selector">
                    <option value="negb">Minhas Compras</option>
                    <option value="negs">Minhas Vendas</option>
                    <option value="quote">Meus Orçamentos</option>
                    <option value="offer">Meus Anúncios</option>
                    <option value="evaluation">Minhas Avaliações</option>
                    <option value="disputes">Minhas Disputas</option>
                </select>
                <div id="pannel-content">
                    <div id="minhascomp">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a data-toggle="tab" href="#compra0">Ativas <br>&#40;20&#41;</a></li>
                            <li><a data-toggle="tab" href="#compra6">Finalizadas <br>&#40;34&#41;</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="compra0" class="tab-pane fade in active">
                                <ul class="nav nav-tabs nav-justified deal-phases">
                                    <li id="step1" class="active"><a data-toggle="tab" href="#compra1">Negociando <br>&#40;<?=$qtd1?>&#41;</a></li>
                                    <li id="pl1" class="progressline"></li>
                                    <li id="step2"><a data-toggle="tab" href="#compra2">Pagamento Pendente <br>&#40;<?=$qtd2?>&#41;</a></li>
                                    <li id="pl2" class="progressline"></li>
                                    <li id="step3"><a data-toggle="tab" href="#compra3">Envio Pendente<br>&#40;<?=$qtd3?>&#41;</a></li>
                                    <li id="pl3" class="progressline"></li>
                                    <li id="step4"><a data-toggle="tab" href="#compra4">Em Trânsito <br>&#40;<?=$qtd4?>&#41;</a></li>
                                    <li id="pl4" class="progressline"></li>
                                    <li id="step5"><a data-toggle="tab" href="#compra5">Em Conferência <br>&#40;<?=$qtd5?>&#41;</a></li>
                                </ul>
                        <div class="tab-content">
                            <div id="compra1" class="tab-pane fade in active">
								<?php if($compra1 != null){
                                foreach($compra1 as $cmp){?>
                                <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Negociação Nº</th>
                                            <th>Data</th>
                                            <th>Preço do Frete</th>
                                            <th>Preço Total</th>
                                            <th colspan="2">Status</th>
                                            <th>Ações</th>
                                        </tr>      
                                        <tr class="theader2">
                                            
                                            <td></td>
                                            <td><span data-toggle="tooltip" title="Clique para ver mais detalhes"><a href="" data-toggle="modal" 
                                                                                                                     data-negocioid ="<?=$cmp->negociacao_id?>"
                                                                                                                     data-status="<?=$this->negociacao_model->verificaStatus($cmp->negociacao_id)?>"
                                                                                                                     data-data="<?=$cmp->negociacao_data?>"
                                                                                                                     data-preco="<?=$cmp->negociacao_preco?>"
                                                                                                                     data-img="<?=base_url().$this->usuarios_model->fotoPerfil($cmp->usuario2_id)?>"
                                                                                                                     data-titulo="<?=$this->anuncios_model->pegarTituloPorId($cmp->anuncio_id)?>"
                                                                                                                     data-nomeEmpresa="<?=$this->usuarios_model->nomeEmpresa($cmp->usuario2_id)?>"
                                                                                                                     data-qtd="<?=$cmp->negociacao_qtd?>"
                                                                                                                     data-unidade="<?=$this->anuncios_model->pegarUnidadePorId($cmp->anuncio_id)?>"
                                                                                                                     data-precounitario="<?=$cmp->negociacao_precounitario?>"
                                                                                                                     data-endereco="<?=$this->usuarios_model->enderecoEmpresa($cmp->usuario1_id)?>"
                                                                                                                     data-estado="<?=$this->usuarios_model->estadoEmpresa($cmp->usuario1_id)?>"
                                                                                                                     data-rua="<?=$this->usuarios_model->ruaEmpresa($cmp->usuario1_id)?>"
                                                                                                                     
                                                                                                                     
                                                                                                                     id="negocioModal"
                                                                                                                     data-target="#dealModal"><?=$cmp->negociacao_id?></a></span></td>
                                            <td><p><?=$cmp->negociacao_data?></p></td>
                                            <td> R$ <?=$cmp->negociacao_frete?></td>
                                            <td> R$ <?=$cmp->negociacao_preco?></td>
                                            <td colspan="2"> <?=$this->negociacao_model->verificaStatus($cmp->negociacao_id);?></td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-primary dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-list" aria-hidden="true"></i>
                                                    </a>
                                                    <ul id="actiondropdown" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <?php if($this->negociacao_model->verificaStatus($cmp->negociacao_id) == "Aguardando cliente fechar negocio"){?>
                                                        <li class=""><a href="#" id="fecharProposta" data-toggle="modal" data-per="fechar negócio?" data-act="<?=base_url()?>index.php/dashboard/fecharnegocio/<?=$cmp->negociacao_id?>" data-target="#confirmationModal"><i class="fa fa-handshake-o" aria-hidden="true"></i> Fechar Negócio</a></li>
                                                        <?php }else{?>
														<li class="disabled"><a href="#" class="disabled"><i class="fa fa-handshake-o" aria-hidden="true"></i> Fechar Negócio</a></li>
                                                        <?php }?>
                                                        <li><a href="<?=base_url()?>index.php/dashboard/alterarnegociacao/<?=$cmp->negociacao_id?>"><span class="glyphicon glyphicon-edit"></span>Editar Proposta</a></li>
                                                        <li><a href="#" data-toggle="modal" data-per="recusar proposta?" id="recusaProposta" data-act="<?=base_url()?>index.php/dashboard/recusarproposta/<?=$cmp->negociacao_id?>" data-target="#confirmationModal"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Recusar Proposta</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-per="excluir a proposta?" id="excluirProposta" data-act="<?=base_url()?>index.php/dashboard/excluirproposta/<?=$cmp->negociacao_id?>" data-target="#confirmationModal"><span class="glyphicon glyphicon-remove"></span>Excluir Proposta</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="titem">
                                        <tr class="theader3" >
                                            <td></td>
                                            <td><a><span class="glyphicon glyphicon-user"></span> <?=$this->usuarios_model->nomeEmpresa($cmp->usuario2_id)?></a></td>
                                            <td colspan="2"><p>Produto</p></td>
                                            <td><p>Quantidade</p></td>
                                            <td><p>Unidade</p></td>
                                            <td><p>Preço Unitário</p></td>
                                            <td>Preço dos Produtos</td>
                                        </tr>
                                        <tr class="tdata">
                                            
                                            <td colspan="2"><img class="productimg" src="<?=base_url().$this->usuarios_model->fotoPerfil($cmp->usuario2_id)?>" height="100" width="100"></td>
                                                  <td colspan="2"><a data-toggle="modal" data-target="#productModal"> <?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarTituloPorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarTituloPorId($cmp->anuncio_id);
                                                                                        }?></a></td>
											<td><p> <?=$cmp->negociacao_qtd?> </p></td>
											<td><p><?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarUnidadePorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarUnidadePorId($cmp->anuncio_id);
                                                                                        }?>  </p></td>
                                            <td><p> R$ <?=$cmp->negociacao_precounitario?> </p></td>
                                            <td><p> R$ <?=$cmp->negociacao_preco?></p></td>
                                        </tr>
                                    </tbody>
                                </table>  
                                <?php } ?>
                                <div class="container bottomnav" >
                               <?=$paginacao_compra1;?>
                                </div>
								<?php
                                      }else{?>
								<table class="tabledisplay">
									<tbody class="titem">
										<tr class="theader1">
											<th></th>
											<th>Não existem negociações</th>
											<th></th>
											<th></th>
											<th></th>
											<th colspan="2"></th>
											<th></th>
										</tr>
										<tr class="theader2">

											<td></td>
											<td></td>
											<td><p></p></td>
											<td> </td>
											<td> </td>
											<td colspan="2"> </td>
											<td></td>
										</tr>
									</tbody>

								</table><?php } ?>
                            </div>
                            <div id="compra2" class="tab-pane fade">
								<?php if($compra2 != null){
                                foreach($compra2 as $cmp){?>
                                <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Negociação Nº</th>
                                            <th>Data</th>
                                            <th>Preço do Frete</th>
                                            <th >Preço Total</th>
                                            <th colspan="2">Status</th>
                                            <th>Ações</th>
                                        </tr>      
                                        <tr class="theader2">
											
											<td></td>
											<td><span data-toggle="tooltip" title="Clique para ver mais detalhes"><a href="" data-toggle="modal" data-target="#dealModal"><?=$cmp->negociacao_id?></a></span></td>
											<td><p><?=$cmp->negociacao_data?></p></td>
											<td> R$ <?=$cmp->negociacao_frete?></td>
											<td> R$ <?=$cmp->negociacao_preco?></td>
                                            <td colspan="2"> <a href="#" data-toggle="tooltip" title="Para prosseguir, por gentileza pague pelo pedido">Aguardando Pagamento</a></td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-success dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-usd" aria-hidden="true"></i> Pagar
                                                    </a>
                                                    <ul id="paymentdropdown" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="#"><i class="fa fa-barcode" aria-hidden="true"></i> Boleto Bancário</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> Cartão de Crédito</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fa fa-paypal" aria-hidden="true"></i>  PayPal</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="titem">
										<tr class="theader3">
											<td></td>
											<td><a><span class="glyphicon glyphicon-user"></span> <?=$this->usuarios_model->nomeEmpresa($cmp->usuario2_id)?></a></td>
											<td colspan="2"><p>Produto</p></td>
											<td><p>Quantidade</p></td>
											<td><p>Unidade</p></td>
											<td><p>Preço Unitário</p></td>
											<td>Preço dos Produtos</td>
										</tr>
										<tr class="tdata">
											<td colspan="2"><img class="productimg" src="<?=base_url().$this->usuarios_model->fotoPerfil($cmp->usuario2_id)?>" height="100" width="100"></td>
                                                                                        <td colspan="2"><a data-toggle="modal" data-target="#productModal"> <?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarTituloPorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarTituloPorId($cmp->anuncio_id);
                                                                                        }?></a></td>
											<td><p> <?=$cmp->negociacao_qtd?> </p></td>
											<td><p><?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarUnidadePorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarUnidadePorId($cmp->anuncio_id);
                                                                                        }?>  </p></td>
											<td><p> R$ <?=$cmp->negociacao_precounitario?> </p></td>
											<td><p> R$ <?=$cmp->negociacao_preco?></p></td>
										</tr>
                                    </tbody>
                                </table>  
								<?php } ?>
								<div class="container bottomnav"><?=$paginacao_compra2;?>
                                </div>
								<?php
                                      }else{?>
								<table class="tabledisplay">
									<tbody class="titem">
										<tr class="theader1">
											<th></th>
											<th>Não existem negociações esperando pagamento.</th>
											<th></th>
											<th></th>
											<th></th>
											<th colspan="2"></th>
											<th></th>
										</tr>
										<tr class="theader2">

											<td></td>
											<td></td>
											<td><p></p></td>
											<td> </td>
											<td> </td>
											<td colspan="2"> </td>
											<td></td>
										</tr>
									</tbody>

								</table><?php } ?>
                            </div>
                            <div id="compra3" class="tab-pane fade">
								<?php
                                if($compra3 != null){
                                foreach($compra3 as $cmp){?>
                                <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Negociação Nº</th>
                                            <th>Data</th>
                                            <th>Preço do Frete</th>
                                            <th >Preço Total</th>
                                            <th colspan="2">Status</th>
                                            <th>Ações</th>
                                        </tr>      
                                        <tr class="theader2">
											
                                            <td></td>
											<td><span data-toggle="tooltip" title="Clique para ver mais detalhes"><a href="" data-toggle="modal" data-target="#dealModal"><?=$cmp->negociacao_id?></a></span></td>
											<td><p><?=$cmp->negociacao_data?></p></td>
											<td> R$ <?=$cmp->negociacao_frete?></td>
											<td> R$ <?=$cmp->negociacao_preco?></td>
                                            <td colspan="2"> <a href="#" data-toggle="tooltip" title="Por gentileza, aguarde enquanto o fornecedor providencia o envio do seu produto.">Aguardando Envio</a></td>
                                            <td><a href="#" data-toggle="tooltip" title="Fazer Reclamação"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tbody class="titem">
										<tr class="theader3">
											<td></td>
											<td><a><span class="glyphicon glyphicon-user"></span> <?=$this->usuarios_model->nomeEmpresa($cmp->usuario2_id)?></a></td>
											<td colspan="2"><p>Produto</p></td>
											<td><p>Quantidade</p></td>
											<td><p>Unidade</p></td>
											<td><p>Preço Unitário</p></td>
											<td>Preço dos Produtos</td>
										</tr>
										<tr class="tdata">
											<td colspan="2"><img class="productimg" src="<?=base_url().$this->usuarios_model->fotoPerfil($cmp->usuario2_id)?>" height="100" width="100"></td>
											       <td colspan="2"><a data-toggle="modal" data-target="#productModal"> <?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarTituloPorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarTituloPorId($cmp->anuncio_id);
                                                                                        }?></a></td>
											<td><p> <?=$cmp->negociacao_qtd?> </p></td>
											<td><p><?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarUnidadePorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarUnidadePorId($cmp->anuncio_id);
                                                                                        }?>  </p></td>
											<td><p> R$ <?=$cmp->negociacao_precounitario?> </p></td>
											<td><p> R$ <?=$cmp->negociacao_preco?></p></td>
										</tr>
                                    </tbody>
                                </table>  
                            <?php } ?>
								<div class="container bottomnav"><?=$paginacao_compra3;?>
                                </div>
								<?php
                                      }else{?>
								<table class="tabledisplay">
									<tbody class="titem">
										<tr class="theader1">
											<th></th>
											<th>Não existem negociações com envio pendente</th>
											<th></th>
											<th></th>
											<th></th>
											<th colspan="2"></th>
											<th></th>
										</tr>
										<tr class="theader2">

											<td></td>
											<td></td>
											<td><p></p></td>
											<td> </td>
											<td> </td>
											<td colspan="2"> </td>
											<td></td>
										</tr>
									</tbody>

								</table><?php } ?>
                            </div>
                            <div id="compra4" class="tab-pane fade">
								<?php if($compra4 != null){
                                foreach($compra4 as $cmp){?>
                                <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Negociação Nº</th>
                                            <th>Data</th>
                                            <th>Preço do Frete</th>
                                            <th >Preço Total</th>
                                            <th colspan="2">Status</th>
                                            <th>Ações</th>
                                        </tr>      
                                        <tr class="theader2">
											
                                            <td></td>
											<td><span data-toggle="tooltip" title="Clique para ver mais detalhes"><a href="" data-toggle="modal" data-target="#dealModal"><?=$cmp->negociacao_id?></a></span></td>
											<td><p><?=$cmp->negociacao_data?></p></td>
											<td> R$ <?=$cmp->negociacao_frete?></td>
											<td> R$ <?=$cmp->negociacao_preco?></td>
                                            <td colspan="2"> <a href="#" data-toggle="tooltip" title="Por favor, aguarde. Seu produto está a caminho.">Produto em Trânsito</a></td>
                                            <td><a href="#" data-toggle="tooltip" title="Fazer Reclamação"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tbody class="titem">
										<tr class="theader3">
											<td></td>
											<td><a><span class="glyphicon glyphicon-user"></span> <?=$this->usuarios_model->nomeEmpresa($cmp->usuario2_id)?></a></td>
											<td colspan="2"><p>Produto</p></td>
											<td><p>Quantidade</p></td>
											<td><p>Unidade</p></td>
											<td><p>Preço Unitário</p></td>
											<td>Preço dos Produtos</td>
										</tr>
										<tr class="tdata">
											<td colspan="2"><img class="productimg" src="<?=base_url().$this->usuarios_model->fotoPerfil($cmp->usuario2_id)?>" height="100" width="100"></td>
											       <td colspan="2"><a data-toggle="modal" data-target="#productModal"> <?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarTituloPorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarTituloPorId($cmp->anuncio_id);
                                                                                        }?></a></td>
											<td><p> <?=$cmp->negociacao_qtd?> </p></td>
											<td><p><?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarUnidadePorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarUnidadePorId($cmp->anuncio_id);
                                                                                        }?>  </p></td>
											<td><p> R$ <?=$cmp->negociacao_precounitario?> </p></td>
											<td><p> R$ <?=$cmp->negociacao_preco?></p></td>
										</tr>
                                    </tbody>
                                </table>  
                               <?php } ?>
								<div class="container bottomnav"><?=$paginacao_compra4;?>
                                </div>
								<?php
                                      }else{?>
								<table class="tabledisplay">
									<tbody class="titem">
										<tr class="theader1">
											<th></th>
											<th>Não existem negociações em trânsito</th>
											<th></th>
											<th></th>
											<th></th>
											<th colspan="2"></th>
											<th></th>
										</tr>
										<tr class="theader2">

											<td></td>
											<td></td>
											<td><p></p></td>
											<td> </td>
											<td> </td>
											<td colspan="2"> </td>
											<td></td>
										</tr>
									</tbody>

								</table><?php } ?>
                            </div>
                            <div id="compra5" class="tab-pane fade">
								<?php if($compra5 != null){
                                foreach($compra5 as $cmp){?>
                                <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Negociação Nº</th>
                                            <th>Data</th>
                                            <th>Preço do Frete</th>
                                            <th >Preço Total</th>
                                            <th colspan="2">Status</th>
                                            <th>Ações</th>
                                        </tr>      
                                        <tr class="theader2">
											
                                            <td></td>
											<td><span data-toggle="tooltip" title="Clique para ver mais detalhes"><a href="" data-toggle="modal" data-target="#dealModal"><?=$cmp->negociacao_id?></a></span></td>
											<td><p><?=$cmp->negociacao_data?></p></td>
											<td> R$ <?=$cmp->negociacao_frete?></td>
											<td> R$ <?=$cmp->negociacao_preco?></td>
                                            <td colspan="2"> <a href="#" data-toggle="tooltip" title="Por favor, confira se está tudo certo com o produto">Conferência Pendente</a></td>
                                            <td><a href="#" data-toggle="tooltip" title="Está tudo Ok!"><span class="glyphicon glyphicon-check"></span></a>
                                                <a href="#" data-toggle="tooltip" title="Tem algo de errado.Fazer Reclamação"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tbody class="titem">
										<tr class="theader3">
											<td></td>
											<td><a><span class="glyphicon glyphicon-user"></span> <?=$this->usuarios_model->nomeEmpresa($cmp->usuario2_id)?></a></td>
											<td colspan="2"><p>Produto</p></td>
											<td><p>Quantidade</p></td>
											<td><p>Unidade</p></td>
											<td><p>Preço Unitário</p></td>
											<td>Preço dos Produtos</td>
										</tr>
										<tr class="tdata">
											<td colspan="2"><img class="productimg" src="<?=base_url().$this->usuarios_model->fotoPerfil($cmp->usuario2_id)?>" height="100" width="100"></td>
											       <td colspan="2"><a data-toggle="modal" data-target="#productModal"> <?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarTituloPorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarTituloPorId($cmp->anuncio_id);
                                                                                        }?></a></td>
											<td><p> <?=$cmp->negociacao_qtd?> </p></td>
											<td><p><?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarUnidadePorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarUnidadePorId($cmp->anuncio_id);
                                                                                        }?>  </p></td>
											<td><p> R$ <?=$cmp->negociacao_precounitario?> </p></td>
											<td><p> R$ <?=$cmp->negociacao_preco?></p></td>
										</tr>
                                    </tbody>
                                </table>  
                               <?php } ?>
								<div class="container bottomnav"><?=$paginacao_compra5;?>
                                </div>
								<?php 
                                      }else{?>
								    <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Não existem negociações em conferência</th>
                                            <th></th>
                                            <th></th>
                                            <th ></th>
                                            <th colspan="2"></th>
                                            <th></th>
                                        </tr>      
                                        <tr class="theader2">
											
                                            <td></td>
											<td></td>
											<td><p></p></td>
											<td> </td>
											<td> </td>
                                            <td colspan="2"> </td>
                                            <td ></td>
                                        </tr>
                                    </tbody>
                              
                                </table>  
                               
                           <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="compra6" class="tab-pane fade">
						<?php 
                        if($compra5 != null){
                            foreach($compra5 as $cmp){?>
                        <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Negociação Nº</th>
                                            <th>Data</th>
                                            <th>Preço do Frete</th>
                                            <th >Preço Total</th>
                                            <th colspan="2">Status</th>
                                            <th>Ações</th>
                                        </tr>      
                                        <tr class="theader2">
											
                                            <td></td>
											<td><span data-toggle="tooltip" title="Clique para ver mais detalhes"><a href="" data-toggle="modal" data-target="#dealModal"><?=$cmp->negociacao_id?></a></span></td>
											<td><p><?=$cmp->negociacao_data?></p></td>
											<td> R$ <?=$cmp->negociacao_frete?></td>
											<td> R$ <?=$cmp->negociacao_preco?></td>
                                            <td colspan="2"> <a href="#" data-toggle="tooltip" title="O negócio foi concluído com sucesso.">Negócio Concluído</a></td>
                                            <td ><a href="#" data-toggle="tooltip" title="Houve algo de errado após a negociação.Fazer Reclamação"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tbody class="titem">
										<tr class="theader3">
											<td></td>
											<td><a><span class="glyphicon glyphicon-user"></span> <?=$this->usuarios_model->nomeEmpresa($cmp->usuario2_id)?></a></td>
											<td colspan="2"><p>Produto</p></td>
											<td><p>Quantidade</p></td>
											<td><p>Unidade</p></td>
											<td><p>Preço Unitário</p></td>
											<td>Preço dos Produtos</td>
										</tr>
										<tr class="tdata">
											<td colspan="2"><img class="productimg" src="<?=base_url().$this->usuarios_model->fotoPerfil($cmp->usuario2_id)?>" height="100" width="100"></td>
											       <td colspan="2"><a data-toggle="modal" data-target="#productModal"> <?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarTituloPorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarTituloPorId($cmp->anuncio_id);
                                                                                        }?></a></td>
											<td><p> <?=$cmp->negociacao_qtd?> </p></td>
											<td><p><?php if($cmp->anuncio_id == 0){
                                                                                            echo $this->orcamento_model->pegarUnidadePorId($cmp->orcamento_id);
                                                                                        }else{
                                                                                            echo $this->anuncios_model->pegarUnidadePorId($cmp->anuncio_id);
                                                                                        }?>  </p></td>
											<td><p> R$ <?=$cmp->negociacao_precounitario?> </p></td>
											<td><p> R$ <?=$cmp->negociacao_preco?></p></td>
										</tr>
                                    </tbody>
                                </table>  
						<?php }
                        }else{?>
                         <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Não existem negociações finalizadas</th>
                                            <th></th>
                                            <th></th>
                                            <th ></th>
                                            <th colspan="2"></th>
                                            <th></th>
                                        </tr>      
                                        <tr class="theader2">
											
                                            <td></td>
											<td></td>
											<td><p></p></td>
											<td> </td>
											<td> </td>
                                            <td colspan="2"> </td>
                                            <td ></td>
                                        </tr>
                                    </tbody>
                              
                                </table>  
                               
                           <?php } ?>

                    </div>
                </div>
                    </div>
                    <br /><br />
                    <?php if($orcamentos != null){?>
                    <div id="meusorc">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a data-toggle="tab" href="#orc0">Recebidos <br>&#40;20&#41;</a></li>
                            <li><a data-toggle="tab" href="#orc1">Enviados <br>&#40;34&#41;</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                    <div id="orc0" class="tab-pane fade in active">
                        
                        <table class="tabledisplay">
                            <?php foreach($orcamentos as $orc){ ?>
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            
                                            <th>Pedido de Orçamento</th>
                                            <th colspan="2">Data</th>
                                            <th>Quantidade</th>
                                            <th >Unidade</th>
                                            <th colspan="2">Status</th>
                                            <th>Condições de Frete</th>
                                            <th>Condições de Pagamento</th>
                                            <th>Ações</th>
                                            
                                        </tr>      
                                        <tr class="theader2">
                                            
                                            <td><span><?=$orc->orcamento_id?></span></td>
                                            <td colspan="2"><p><?=$orc->orcamento_datainicio?></p></td>
                                            <td> <?=$orc->orcamento_qtd?></td>
                                            <td> <?=$orc->orcamento_unidade?></td>
                                            <td colspan="2"> <a href="#" data-toggle="tooltip" title="O pedido de Orçamento está em aberto">Recebendo Orçamentos</a></td>
                                          
                                            <td>
                                                 <?php if($orc->orcamento_exwon == 1){ ?>
                                                Transportadora - EXW, 
                                                 <?php } if($orc->orcamento_ddpon == 1){ ?>
                                                Transportadora - DDP,
                                            <?php } if($orc->orcamento_correioon == 1){ ?>
                                                Correios,
                                                <?php } if($orc->orcamento_levaon == 1){ ?>
                                                Fornecedor Entrega
                                                 <?php } if($orc->orcamento_buscaon == 1){ ?>
                                                Cliente busca
                                                 <?php }?>
                                            </td>
                                            <td>Boleto, Cartão de Crédito, PayPal</td>
                                            <td ><a href="#" data-toggle="tooltip" title="Excluir Pedido de Orçamento"><span class="glyphicon glyphicon-remove"></span></a></td>
                                        </tr>
                                    </tbody>
                                 
                                    <tbody class="titem">
                                        <tr class="theader3" >
                                            
                                            <td></td>
                                            <td colspan="2"><p>Fornecedor</p></td>
                                            <td><p>Preço Unitário</p></td>
                                            <td><p>Preço dos Produtos</p></td>
                                            <td><p>Preço do Frete</p></td>
                                            <td><p>Preço Total</p></td>
                                            <td>Condições de Frete</td>
                                            <td>Condições de Pagamento</td>
                                            <td>Ações</td>
                                        </tr>
                                           <?php $orcamento_feito = $this->orcamento_model->carregarOrcamentosRecebidos($orc->orcamento_id);
                                    
                                    foreach($orcamento_feito as $of){
                                    ?>
                                        <tr class="tdata">
                                            <td><img class="productimg" src="<?=base_url().$this->usuarios_model->fotoPerfil($of->usuario2_id)?>" height="100" width="100"></td>
                                            <td colspan="2"><a><span class="glyphicon glyphicon-user"></span><?=$this->usuarios_model->nomeEmpresa($of->usuario2_id)?></a></td>    
                                            <td><p> R$ <?=$of->of_precounitario?> </p></td>
                                            <td><p> R$ <?=$of->of_total?></p></td>
                                            <td><p> R$ <?=$of->of_frete?></p></td>
                                            <td><p> R$ <?=$of->of_total + $of->of_frete?></p></td>
                                            <td><p> <?php if($of->of_exw == 1){ ?>
                                                Transportadora - EXW, 
                                                 <?php } if($of->of_ddp == 1){ ?>
                                                Transportadora - DDP,
                                            <?php } if($of->of_correios == 1){ ?>
                                                Correios,
                                                <?php } if($of->of_entregar == 1){ ?>
                                                Fornecedor Entrega
                                                 <?php } if($of->of_buscar == 1){ ?>
                                                Cliente busca
                                                 <?php }?>
                                                </p></td>
                                            <td><p> Boleto, Cartão de Crédito</p></td>
                                            <td>
                                            <div class="dropdown show" data-toggle="tooltip" title="Aceitar Orçamento">
                                                    <a class="glyphicon glyphicon-check dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </a>
                                                    <div id="paymentdropdown" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        
                                                        <?php if($of->of_exw == 1){ ?>
                                                <a class="dropdown-item" href="<?=base_url()?>index.php/dashboard/aceitarexw/<?=$of->of_id?>">Transportadora - EXW</a>
                                                 <?php } if($of->of_ddp == 1){ ?>
                                                <a class="dropdown-item" href="<?=base_url()?>index.php/dashboard/aceitarddp/<?=$of->of_id?>">Transportadora - DDP</a>
                                            <?php } if($of->of_correios == 1){ ?>
                                                <a class="dropdown-item" href="<?=base_url()?>index.php/dashboard/aceitarcorreios/<?=$of->of_id?>">Correios</a>
                                                <?php } if($of->of_entregar == 1){ ?>
                                                <a class="dropdown-item" href="<?=base_url()?>index.php/dashboard/aceitarentrega/<?=$of->of_id?>">Fornecedor Entrega</a>
                                                 <?php } if($of->of_buscar == 1){ ?>
                                                <a class="dropdown-item" href="<?=base_url()?>index.php/dashboard/aceitarbuscar/<?=$of->of_id?>">Cliente Busca</a>
                                                 <?php }?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            <a href="<?=base_url()?>index.php/dashboard/recusarorcamento/<?=$of->of_id?>" data-toggle="tooltip" title="Recusar Orçamento"><span class="glyphicon glyphicon-remove"></span></a></td>
                                        </tr>  
                                    </tbody>
                                </table>  
                        <div class="container bottomnav" >
                               <?=$paginacao_orcamentos1?>
                                </div>
                    </div>  
                                    <?php }
                        }?>
                    <div id="orc1" class="tab-pane fade">
                        <table class="tabledisplay">
                                    <tbody class="titem">
                                        <tr class="theader1">
                                            <th></th>
                                            <th>Negociação Nº</th>
                                            <th>Data</th>
                                            <th>Preço do Frete</th>
                                            <th >Preço Total</th>
                                            <th colspan="2">Status</th>
                                            <th>Ações</th>
                                        </tr>      
                                        <tr class="theader2">
                                            <td></td>
                                            <td><span data-toggle="tooltip" title="Clique para ver mais detalhes"><a href="" data-toggle="modal" data-target="#dealModal">12345678</a></span></td>
                                            <td><p>12/12/2013</p></td>
                                            <td> R$ 1,000.00</td>
                                            <td> R$ 11,000.00</td>
                                            <td colspan="2"> <a href="#" data-toggle="tooltip" title="O negócio foi concluído com sucesso.">Negócio Concluído</a></td>
                                            <td ><a href="#" data-toggle="tooltip" title="Houve algo de errado após a negociação.Fazer Reclamação"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tbody class="titem">
                                        <tr class="theader3" >
                                            <td></td>
                                            <td><a><span class="glyphicon glyphicon-user"></span>Fazenda Sta. Agnobalda da Serra</a></td>
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
                        <div class="container bottomnav" >
                                    <ul class="pagination">
                                        <li class="active"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">&raquo;</a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
                        <?php 
                        
                        } ?>
                <div id="productModal" class="modal fade">
                            
                    <!-- Modal Contents -->
                    <div class="row">
                    <div class="col-sm-3" data-dismiss="modal"></div>
                    <div class="col-sm-3 modalbg col" >
                    
                                <!-- main slider carousel -->
                                <div class="row">
                                    <div id="slider">
                                        <div class="col-md-12" id="carousel-bounding-box">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                                <!-- main slider carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="active item" data-slide-number="0">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar1.jpg" alt="Five feet High and Risin'"class="img-show">
                                                    </div>
                                                    <div class="item" data-slide-to="1">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar2.jpg" class="img-show">
                                                    </div>
                                                    <div class="item" data-slide-number="2">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar3.jpg" class="img-show">
                                                    </div>
                                                    <div class="item" data-slide-number="3">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar1.jpg" class="img-show">
                                                    </div>
                                                    <div class="item" data-slide-number="4">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar2.jpg" class="img-show">
                                                    </div>
                                                    <div class="item" data-slide-number="5">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar3.jpg" class="img-show">
                                                    </div>
                                                    <div class="item" data-slide-number="6">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar1.jpg" class="img-show">
                                                    </div>
                                                    <div class="item" data-slide-number="7">
                                                        <img src="<?=base_url()?>assets/images/product-details/similar2.jpg" class="img-show">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                    </div>
                    <hr>
                    
                    <div id="slider-thumbs" class="carousel slide" data-ride="carousel" data-interval="false">
                        <!-- thumb navigation carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <a id="carousel-selector-0" class="selected">
                                    <img src="<?=base_url()?>assets/images/product-details/similar1.jpg" class="img-thumb">
                                </a>                            
                                <a id="carousel-selector-1">
                                    <img src="<?=base_url()?>assets/images/product-details/similar2.jpg" class="img-thumb">
                                </a>                            
                                <a id="carousel-selector-2">
                                    <img src="<?=base_url()?>assets/images/product-details/similar3.jpg" class="img-thumb">
                                </a>                            
                            </div>
                            <div class="item">
                             <a id="carousel-selector-3">
                                <img src="<?=base_url()?>assets/images/product-details/similar1.jpg" class="img-thumb">
                                </a>
                             <a id="carousel-selector-4">
                                <img src="<?=base_url()?>assets/images/product-details/similar2.jpg" class="img-thumb">
                                </a>
                             <a id="carousel-selector-5">
                                <img src="<?=base_url()?>assets/images/product-details/similar3.jpg" class="img-thumb">
                                </a>
                            </div>
                            <div class="item">
                             <a id="carousel-selector-6">
                                <img src="<?=base_url()?>assets/images/product-details/similar1.jpg" class="img-thumb">
                                </a>
                             <a id="carousel-selector-7">
                                <img src="<?=base_url()?>assets/images/product-details/similar2.jpg" class="img-thumb">
                                </a>
                                </div>
                        </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slider-thumbs" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slider-thumbs" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>		
                    <div class="col-sm-4 modalbg col">
                        <div>
                            <!-- The Close Button --> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Fechar">
                                <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Editar Anúncio">
                                <span class="glyphicon glyphicon-edit edit"></span>
                            </button>
                        </div>
                        <br>
                        <br>
							<div class="product-information"><!--/product-information-->
								<div id="product-information">
                                    <h2 id="itemtitle">Arado AF Baldan</h2>
								<span id="productid"><p>ID do Produto: 6c0-xxxxxx-yyyy</p></span>
                                    <hr>
									<p><span id="productprice">R$ 3.500,00</span><em>/unidade</em>
									<span class="separator"> | </span> 1 Unidade  <em>(Pedido Mínimo)</em></p>
                                    
                                    <div id="supplyability">
                                        <p><b>Disponibilidade:</b> 10 <em>Unidades</em></p>
                                        <p><b>Condição:</b> Novo</p>
                                       <p><b>Condições de Frete: </b>Transportadora - EXW, Cliente Busca, Fornectedor Entrega</p>
                                        </div>
                                    <hr>
                                    <div id="buyingcond">
                                        <p><b>Pagamento:</b><img height="25px;" src="images/ico/cards.png"></p>
                                        <p><b>Suporte:</b> <a><i class="fa fa-get-pocket"></i> Compra Garantida</a></p>
                                        </div>
                                        
								</div>
                            </div><!--/product-information-->
						</div>
                    <div class="col-sm-2" data-dismiss="modal"></div>
                    </div>
                    <div class="row">
                    <div class="col-sm-3" data-dismiss="modal"></div>
                    <div id="category" class="category-tab shop-details-tab col-sm-7 modalbg col"><!--category-tab-->
                        <ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Detalhes do Produto</a></li>
							</ul>
                            <div class="tab-content">
							<div class="tab-pane fade in active" id="details" >
								<h3> Características</h3>
                                <hr>
                                
                                <h4 class="pddesc"> Geral</h4>
                                <table>
                                <tr>
                                    <td class="feature">Peso</td>
                                    <td class="pdata"> 200kg</td>
                                </tr>
                                <tr>
                                        <td class="feature">Tamanho</td>
                                        <td class="pdata"> 3,0 x 1,0 x 1,5 metros</td>
                                </tr>
                                <tr>
                                    <td class="feature">Tipo de Cultivo / Criação</td>
                                    <td class="pdata"> - </td>                                    
                                    </tr></table>
                                <table>
                                    <tr><td class="feature"> Nome Científico</td>
                                    <td class="pdata"> - </td></tr>
                                    <tr>
                                    <td class="feature">Variedade</td>
                                    <td class="pdata"> - </td>                                    
                                    </tr>
                                    <tr>
                                      <td class="feature"> Certificação </td>
                                    <td class="pdata"> ISO9001</td>
                                    </tr>
                                    </table>
                                    <table>
                                        <tr>
                                    <td class="feature">Tipo</td>
                                    <td class="pdata">Arado</td>
                                    </tr>
                               <tr>
                                    <td class="feature">Modelo</td>
                                    <td class="pdata"> BG-150 </td>
                                    </tr>
                                <tr>
                                    <td class="feature"> Custom </td>
                                    <td class="pdata"> - </td>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="pddesc"> Frete</h4>
                                <table>
                                    <tr>
                                        <td class="feature">Tipo de Frete:</td>
                                        <td class="pdata"> Transportadora - EXW, Cliente Busca, Fornectedor Entrega </td>
                                    </tr>
                                    <tr>
                                        <td class="feature"> Empacotamento: </td>
                                        <td class="pdata"> Sem embalagem </td>
                                    </tr>       
                                    <tr>
                                        <td class="feature"> Detalhe do Envio:</td>
                                        <td class="pdata"> Enviado 5 dias após o pagamento </td>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="pddesc"> Descrição do Produto</h4>
                            <div id="productdesc"></div>
							</div>
                            										
				</div>
			</div>
                    <div class="col-sm-2" data-dismiss="modal"></div>
                        </div>
                </div><!-- PRODUCT MODAL ------------------------------>
                <div id="dealModal" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" title="Fechar">
                                 <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                            </button>
                            <div class="modal-header">
                                    <h2> Negociação Nº <em id="negocioid"></em></h2>
                                </div>
                            <div class="modal-body">
                                <h3 data-toggle="tooltip" id="status" title="Aguardando o Cliente fechar negócio">Aguardando o Cliente fechar negócio</h3>
                                <br>
                                <h5 data-toggle="tooltip" id="data" title="Data de início da negociação">12/12/2013</h5>
                                <br>
                                <h3> Preço Total R$<b id="preco_total">  </b></h3>
                            </div>
                            <div class="modal-title">
                                <h3> Produtos</h3>
                            </div>
                            <div class="modal-body">
                                
                                <table class="tabledisplay">
                                    <tbody>
                                        <tr class="theader3" >
                                            <td></td>
                                            <td><a><span class="glyphicon glyphicon-user"></span> <div id='nomeEmpresa'>Fazenda Sta. Agnobalda da Serra</div></a></td>
                                            <td colspan="2"><p>Produto</p></td>
                                            <td><p>Quantidade</p></td>
                                            <td><p>Unidade</p></td>
                                            <td><p>Preço Unitário</p></td>
                                            <td>Preço dos Produtos</td>
                                        </tr>
                                        <tr class="tdata">
                                            <td colspan="2"><img class="productimg" id="img" src="<?=base_url()?>assets/images/placeholders/mock1.jpg" height="100" width="100"></td>
                                            <td colspan="2"><a id="titulo"> Soja em Saca Bibibi Bobobó</a></td>    
                                            <td><p id='qtd'> 100 </p></td>
                                            <td><p id='unidade'> Sacas &#40;sc.&#41; </p></td>
                                            <td><p id='preocunitario'> R$ 100,00 </p></td>
                                            <td><p id='precototal'> R$ 10.000,00</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-title">
                                <h3> Condições de Compra</h3>
                            </div>
                            <div class="modal-body">
                                <h4>Quantidade:</h4>
                                <p id='qtd_c'> 100</p><p id='_c'> Sacas &#40;sc.&#41; </p>
                                <h4>Preço Unitário</h4>
                                <p id='preco_uc'> R$ 100,00</p>/<p id='unidade_c2'>/ Saca (sc.)</p>
                                <h4>Pagamento</h4>
                                <p> <i class="fa fa-barcode" aria-hidden="true" data-toggle="tooltip" title="Boleto Bancário"></i><img src="<?=base_url()?>assets/images/ico/cards.png" width="100" data-toggle="tooltip" title="Cartões de Crédito"> </p>
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
                                            <td><h4 id='rua'>Rua Charlinho de Menezes, 900</h4></td>
                                            <td><h4 id='endereco'>Marília - <span id="estado">SP</span></h4></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="theader2">
                                        <th>Condição</th>
                                        <th>Custo</th>
                                    </tr>
                                    <tr class="tdata">
                                        <td>
                                            <div class="radio">
                                                <label><input type="radio" id='transp' name="optradio" disabled><h4> Transportadora - EXW </h4></label>
                                            </div>
                                        </td>
                                    <td><label for="trans"><h4> <a data-toggle="tooltip" title="O Fornecedor está cotando a melhor solução logística">Aguardando Cotação</a> </h4></label></td>
                                    </tr>
                                    <tr class="tdata">
                                    <td> <div class="radio">
                                                <label><input type="radio" id='clib' name="optradio"><h4> Cliente Busca</h4></label>
                                            </div></td>
                                    <td><label for="clib"><h4> R$ 0,00 </h4></label></td>
                                    </tr>
                                    
                                    <tr class="tdata">
                                    <td><div class="radio">
                                                <label><input type="radio" id='forne' name="optradio"><h4> Fornecedor Entrega</h4></label>
                                            </div></td>
                                    <td><label for="forne"><h4> R$ 100,00 </h4></label></td>
                                    </tr>
                                        <tr class="tdata">
                                    <td><div class="radio">
                                                <label><input type="radio" id='forne' name="optradio"><h4> Correios - PAC</h4></label>
                                            </div></td>
                                    <td><label for="forne"><h4> R$ 16,90 </h4></label></td>
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
                <div Id="confirmationModal" class="modal fade">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h5> Você tem certeza que deseja <p id="pergunta"> ISSO AKI?</p></h5><br />
                                <a type="button" id="confirmar" href="#" class="btn btn-success">Sim</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- /MODAL DE CONFIRMAÇÃO-------------------->
                
                <div class="col-sm-3" id="reputacao">
                   
                <div id="miniprofile">
                    <div class="tab-pane fade in" id="companyprofile" >
                        <h4 id="companyname">Nome da Empresa</h4>
                        <img id="companyprofilepic" src="<?=base_url()?>assets/images/placeholders/profile1.jpg" height="100px;">
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
                                <img src="<?=base_url()?>assets/images/ico/thermometer.png" height="100px;">
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
                </div>

            </div>
            </div>
        </div>
    </section>
    </body>
	<footer id="footer" ><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=base_url()?>assets/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=base_url()?>assets/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=base_url()?>assets/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?=base_url()?>assets/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?=base_url()?>assets/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

<form id='url' action='<?=base_url()?>index.php/dashboard/atualizarNotificacoes'></form>
  
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
   <script src="<?=base_url()?>assets/js/dashboard.js"></script>
<script type="text/javascript">
    
    	$('#dealModal').on('show.bs.modal', function (event) {
		 var button = $(event.relatedTarget) // Button that triggered the modal
                 var negocioid = button.data('negocioid');
                 var preco = button.data('preco');
                 var status = button.data('status');
                 var data = button.data('data');
                 var nomeEmpresa = button.data('nomeEmpresa');
                 var img = button.data('img');
                 var qtd = button.data('qtd');
                 var titulo = button.data('titulo');
                 var precounitario = button.data('precounitario');
                 var unidade = button.data('unidade');
                 var endereco = button.data('endereco');
                 var rua = button.data('rua');
                 var estado = button.data('estado');

                 
                 
                  // inserir na o nome na pergunta de confirmação dentro da modal
		 var modal = $(this)
		 modal.find('#negocioid').text(negocioid);
                 modal.find('#preco_total').text(preco);
                 modal.find('#data').text(data);
                 modal.find('#status').text(status);
                 modal.find('#nomeEmpresa').text(nomeEmpresa);
                 modal.find('#qtd').text(qtd);
                 modal.find('#titulo').text(titulo);
                 modal.find('#preocunitario').text(precounitario);
                 modal.find('#precototal').text(preco);
                 modal.find('#unidade').text(unidade);
                 modal.find('#unidade_c').text(unidade);
                 modal.find('#unidade_c2').text(unidade);
                 modal.find('#qtd_c').text(qtd);
                 modal.find('#preco_uc').text(preco);
                 modal.find('#preco_tc').text(preco);
                 modal.find('#endereco').text(endereco);
                 modal.find('#rua').text(rua);
                 modal.find('#estado').text(estado);
                 
		  
		})
                
                $('#confirmationModal').on('show.bs.modal', function (event) {
		 var button = $(event.relatedTarget) // Button that triggered the modal
                  var id = button.data('act'); // vamos buscar o valor do atributo data-id
                  var pergunta = button.data('per');
                  // inserir na o nome na pergunta de confirmação dentro da modal
		 var modal = $(this)
		 modal.find('p#pergunta').text(pergunta);
                 modal.find('a#confirmar').attr('href', id); // mudar dinamicamente o link, href do botão confirmar da modal
		  
		})
    
    
</script>
</body>
</html>
