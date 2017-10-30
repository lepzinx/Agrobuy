<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Editar negociação | Agrobuy</title>
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/dispute.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/css/product-details.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
	<!-- Generic page styles JQUERY UPLOAD -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.fileupload.css">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?=base_url()?>assets/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<header>
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
	</div>

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
											<a href=""><label class="btn btn-primary">Comprar</label></a>
											<a href=""><label class="btn btn-primary active">Vender</label></a>
										</div>
									</div>
									<div class="tab-content">
										<div id="menu2" class="tab-pane fade in active">
											<br>
											<ul>
												<a><li><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
												<a><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
												<a><li><span class="glyphicon glyphicon-bullhorn"></span><p> Criar Anúncio</p></li></a>
												<a><li><span class="glyphicon glyphicon-list-alt"></span><p> Meus Anúncios</p></li></a>
												<a><li id="m4" class="active"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputação e Disputas</p></li></a>
												<a id="m5"><li><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
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
						<h2>Alterar proposta</h2>
						<p class="lead"></p>
					</div><!-- page-header -->
             <?php foreach($negociacao as $nego){ ?>
                                       
	<div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" title="Fechar">
                                 <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                            </button>
                            <form method="post" action="<?=base_url()?>index.php/dashboard/editarnegociacao/<?=$nego->negociacao_id?>">
                            <div class="modal-header">
                                    <h2> Negociação Nº <em><?=$nego->negociacao_id?></em></h2>
                                </div>
                            <div class="modal-body">
                                <h5 data-toggle="tooltip" title="Data de início da negociação"></h5>
                                <br>
                                <h3> Preço Unitário <b> R$ <?=$nego->negociacao_precounitario?></b></h3>
                            </div>
                            <div class="modal-title">
                                <h3> Condições de Compra</h3>
                            </div>
                            <div class="modal-body">
                                <h4>Quantidade:</h4>
                                <input name="quantidade" value="<?=$nego->negociacao_qtd?>" class="form-control" /><p> <?=$this->anuncios_model->pegarUnidadePorId($nego->anuncio_id)?></p>
                                <h4>Preço Unitário:</h4>
                                <input name="preco" value="<?=$nego->negociacao_precounitario?>" class="form-control">
                                <h4>Pagamento</h4>
                                <p> <i class="fa fa-barcode" aria-hidden="true" data-toggle="tooltip" title="Boleto Bancário"></i><img src="<?=base_url()?>assets/images/ico/cards.png" width="100" data-toggle="tooltip" title="Cartões de Crédito"> </p>
                            </div>
                            <div class="modal-title">
                                <h3> Condições de Frete</h3>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <tr>
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
                                    <td><input name="fornecedor_entrega" value="<?=$nego->negociacao_entrega?>" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-title">
                                <h3> Ações</h3>
                            </div>
                            <div class="modal-body action-buttons">
                                <button type="submit"><span class="glyphicon glyphicon-new-window"></span> Atualizar Proposta</button>
                            </form>
                            </div>
                        </div>
                                              
             <?php }?>

	<script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>
	<script src="<?=base_url()?>assets/js/dispute.js"></script>
	<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
	<script src="<?=base_url()?>assets/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload.js"></script>
	<!-- The File Upload processing plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload-process.js"></script>
	<!-- The File Upload image preview & resize plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload-image.js"></script>
	<!-- The File Upload validation plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload-validate.js"></script>
        <script src="<?=base_url()?>assets/js/product-details.js"></script>

	<script src="<?=base_url()?>assets/js/messages_pt_BR.js"></script>
</body>
</html>
