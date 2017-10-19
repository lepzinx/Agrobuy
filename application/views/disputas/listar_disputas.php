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
	<header id="header">
		<!--header-->


		<div class="header-middle">
			<!--header-middle-->
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
											<a href="<?=base_url()?>index.php/dashboard"><label class="btn btn-primary">Comprar</label></a>
											<a href="<?=base_url()?>index.php/dashboard/venda"><label class="btn btn-primary active">Vender</label></a>
										</div>
									</div>
									<div class="tab-content">
										<div id="menu2" class="tab-pane fade in active">
											<br>
											<ul>
												<a><li><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
												<a href='<?=base_url()?>index.php/usuarios/mensagens'><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
												<a href='<?=base_url()?>index.php/anuncios/novoanuncio'><li><span class="glyphicon glyphicon-bullhorn"></span><p> Criar Anúncio</p></li></a>
												<a href='<?=base_url()?>index.php/dashboard/meusanuncios'><li><span class="glyphicon glyphicon-list-alt"></span><p> Meus Anúncios</p></li></a>
												<a><li class="active" id="m4"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputação e Disputas</p></li></a>
												<a><li id="m5"><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
												<a><li id="m6"><span class="glyphicon glyphicon-user"></span><p> Perfil e Configurações</p></li></a>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="sidebar2">
							<ul id="reputation">
								<h4> Reputação e Disputas</h4>
								<hr>
								<a><li>Minha Reputação</li></a>
								<a><li>Iniciar uma Disputa</li></a>
								<a><li>Denunciar</li></a>
							</ul>
						</div>
						<div id="sidebar3">
							<ul id="servicesb">
								<h4> Serviços</h4>
								<hr>
								<a><li>Minha Conta Virtual</li></a>
								<a><li><hr></li></a>
								<a><li>Agentes de Compra</li></a>
							</ul>
						</div>
						<div id="sidebar4">
							<ul id="servicess">
								<h4> Serviços</h4>
								<hr>
								<a><li>Cotações de Frete</li></a>
								<li role="separator"><hr class="divider"></li>
								<a><li>Minha Conta Virtual</li></a>
							</ul>
						</div>
						<div id="sidebar5">
							<ul id="profile">
								<h4>Perfil e Configurações</h4>
								<hr>
								<a href='<?= base_url()?>index.php/dashboard/editarperfil'><li>Editar meu Perfil</li></a>
								<a><li>Editar Minhas Informações</li></a>
								<a><li>Editar Minhas Informações de Pagamento</li></a>
								<a><li>Editar Minhas Configurações</li></a>
							</ul>
						</div>

					</div>
				</div>
				<div class="col-sm-9" id="content">
					<h2>Notificações</h2>
					<div class="notify">
						<ul class="notifications">
							<li><a href="" class="notificated"><i class="fa fa-comment" aria-hidden="true"><span class="buttonbadge alert">4</span></i>Mensagens não lidas</a></li>

							<li><a href="" class="notificated"><i class="fa fa-list" aria-hidden="true"><span class="buttonbadge alert">10</span></i>Ações Pendentes</a></li>
						</ul>
						<ul class="notifications">
							<li><a href=""><i class="fa fa-exclamation-triangle" aria-hidden="true"><span class="buttonbadge">0</span></i>Disputas Pendentes </a></li>

							<li><a href=""><i class="fa fa-thumbs-o-up" aria-hidden="true"><span class="buttonbadge">0</span></i>Avaliações Pendentes </a></li>
						</ul>
					</div>
					<div class="outterborder">
						
						<div id="pannel-content">
							<div id="minhasvend">
								<ul class="nav nav-tabs nav-justified">
									<li class="active"><a data-toggle="tab" href="#compra0"> Negociacões <br>&#40;<?=$qtd_negociacoes?>&#41;</a></li>
								</ul>
								<div class="tab-content">
									<div id="compra0" class="tab-pane fade in active">
									
										<div class="tab-content">
											<div id="compra1" class="tab-pane fade in active">
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
                                                            <?php foreach($negociacao_compra as $nego){ ?>
															<td></td>
															<td><?=$nego->negociacao_id?></td>
															<td><p><?=$nego->negociacao_data?></p></td>
															<td> R$ <?=$nego->negociacao_frete?></td>
															<td> R$ <?=$nego->negociacao_preco?></td>
                                                            <?php if($nego->negociacao_status == 0){?>
															<td colspan="2"> <a data-toggle="tooltip" title="Aguardando o Cliente fechar negócio">Aguardando o Cliente</a></td>
                                                            <?php }else if($nego->negociacao_status == 1){?>
															<td colspan="2"> <a data-toggle="tooltip" title="Aguardando o Cliente realizar o pagamento">Aguardando pagamento</a></td>
															<?php }else if($nego->negociacao_status == 2){?>
															<td colspan="2"> <a data-toggle="tooltip" title="Aguardando o envio">Envio pendente</a></td>
															<?php }else if($nego->negociacao_status == 3){?>
															<td colspan="2"> <a data-toggle="tooltip" title="Produto enviado">Em trânsito</a></td>
															<?php }else if($nego->negociacao_status == 4){?>
															<td colspan="2"> <a data-toggle="tooltip" title="Aguardando a aprovação do cliente">Em conferência</a></td>
															<?php }else if($nego->negociacao_status == 5){?>
															<td colspan="2"> <a data-toggle="tooltip" title="Produto entregue">Finalizado</a></td>
                                                            <?php } ?>
															<td>
																<div class="dropdown show">
																	<a class="btn btn-primary dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="fa fa-list" aria-hidden="true"></i>
																	</a>
																	<ul id="actiondropdown" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
																		<li><a href="<?=base_url()?>index.php/dashboard/novadisputa/<?=$nego->negociacao_id?>"></i> Iniciar disputa</a></li>
																		<?php if($this->negociacao_model->verificaDisputa($nego->negociacao_id)){?>
																		<li><a href="<?=base_url()?>index.php/dashboard/finalizardisputa/<?=$nego->negociacao_id?>"><span class="glyphicon glyphicon-edit"></span>Finalizar disputa</a></li>
                                                                        <?php } else{ ?>
																		<li class="disabled"><a href="#"><span class="glyphicon glyphicon-edit"></span>Finalizar disputa</a></li>
                                                                        <?php } ?>
																	</ul>
																</div>
															</td>
                                                            <?php $anuncio = $this->anuncios_model->pegarAnuncioId($nego->anuncio_id);
                                                                  ?>
														</tr>
													</tbody>
													<tbody class="titem">
														<tr class="theader3">
															<td></td>
															<td><a data-toggle="tooltip" title="Clique para ver as informações do Fornecedor."><span class="glyphicon glyphicon-user"></span> <?=$this->usuarios_model->nomeEmpresa($nego->usuario2_id)?></a></td>
															<td colspan="2"><p>Produto</p></td>
															<td><p>Quantidade</p></td>
															<td><p>Unidade</p></td>
															<td><p>Preço Unitário</p></td>
															<td>Preço dos Produtos</td>
														</tr>
														<tr class="tdata">
                                                            <?php foreach($anuncio as $anun){?>
															<td colspan="2"><img class="productimg" src="<?=base_url() . $anun->anuncio_imagem1?>" height="100" width="100"></td>
															<td colspan="2"><span data-toggle="tooltip" title="Clique para ver mais detalhes do Produto"><a data-toggle="modal" data-target="#productModal"> <?=$anun->anuncio_titulo?></a></span></td>
															<td><p> <?=$nego->negociacao_qtd?> </p></td>
															<td><p> <?=$anun->anuncio_unidade?> </p></td>
															<td><p> R$ <?=$nego->negociacao_precounitario?> </p></td>
															<td><p> R$ <?=$nego->negociacao_preco?></p></td>
                                                            <?php } 
                                                                  }?>
														</tr>
													</tbody>
												</table>
												<div class="container bottomnav">
                                                    <?php echo $pagination;?>
												</div>
											</div>
										</div>

						
						</div>
					</div>
	</section>
</body>
<footer id="footer">
	<!--Footer-->
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
