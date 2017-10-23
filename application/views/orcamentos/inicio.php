<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Resultados da Busca | Agrobuy</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/shop.css" rel="stylesheet">
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
	
	<section id="advertisement">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?=base_url()?>assets/images/shop/advertisement.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?=base_url()?>assets/images/shop/advertisement.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?=base_url()?>assets/images/shop/advertisement.jpg" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
                        <div class="price-range"><!--price-range-->
							<h2><i class="fa fa-usd" aria-hidden="true"></i> Preço</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[0,600]" id="sl2" ><br />
								 <b>R$ 0</b> <b class="pull-right">R$ 600</b>
							</div>
						</div><!--/price-range-->
						<h2><span class="glyphicon glyphicon-th-list"></span> Categorias</h2><!--category-productsr-->
						<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Peças Para Máquinas Agrícolas &#40;<b>27</b>&#41; </a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Peças Para Máquinas De Transporte &#40;<b>71</b>&#41;</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Equipamentos Meteorológicos &#40;<b>25</b>&#41;</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Demais Peças &#40;<b>153</b>&#41;</a></h4>
								</div>
							</div>
							
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2 id="attributes"><span class="glyphicon glyphicon-tags"></span> Produtos</h2>
							<div class="brands-name">
                                
								<ul class="nav nav-pills nav-stacked">
									<li><a><b>Condição:</b> <span id="btn-group2" data-toggle="buttons">
                                                <label class="btn btn-radio active">
                                                <input type="radio" name="options" id="novo" autocomplete="off" checked> Novo
                                              </label>
                                              <label class="btn btn-radio">
                                                <input type="radio" name="options" id="usado" autocomplete="off"> Usado
                                              </label>
                                            </span></a></li>
								 <div class="panel panel-default sidebarcol">
								<div>
									<li><a data-toggle="collapse" class="frete" href="#frete">
											<span class="badge pull-right"></span>
											<b>Frete:</b>
                                        </a></li>
								</div>
								<div id="frete" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul>
											<li><a><label><input type="checkbox">Transportadora - Pago pelo Cliente &#40;EXW&#41;</label></a></li>
											<li><a><label><input type="checkbox">Transportadora - Pago pelo Fornecedor &#40;DDP&#41;</label></a></li>
											<li><a><label><input type="checkbox">Correios </label></a></li>
											<li><a><label><input type="checkbox">Cliente Busca </label></a></li>
											<li><a><label><input type="checkbox">Fornecedor Entrega </label></a></li>
										</ul>
									</div>
								</div>
							</div>
                                    <div class="panel panel-default sidebarcol">
								<div>
									<li><a data-toggle="collapse" href="#pgto">
											<span class="badge pull-right"></span>
											<b>Pagamento:</b>
                                        </a></li>
								</div>
								<div id="pgto" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul>
											<li><a><label><input type="checkbox"> Boleto Bancário</label></a></li>
											<li><a><label><input type="checkbox"> Visa/ Mastercard</label></a></li>
											<li><a><label><input type="checkbox"> American Express </label></a></li>
											<li><a><label><input type="checkbox"> PayPal </label></a></li>
										</ul>
									</div>
								</div>
							</div>
								</ul>
							</div>
						</div><!--/brands_products-->
                        <br>
                        <div class="brands_products"><!--brands_products-->
							<h2 id="attributes"><i class="fa fa-address-card" aria-hidden="true"></i> Cliente</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<div class="panel panel-default sidebarcol">
								<div>
									<li><a data-toggle="collapse" href="#muni">
											<span class="badge pull-right"></span>
											<b>Município</b>
                                        </a></li>
								</div>
								<div id="muni" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul>
											<li><a><label><input type="checkbox"> São Paulo - SP</label></a></li>
											<li><a><label><input type="checkbox"> Belo Horizonte - MG</label></a></li>
											<li><a><label><input type="checkbox"> Curitiba - PR </label></a></li>
											<li><a><label><input type="checkbox"> Demais </label></a></li>
										</ul>
									</div>
								</div>
							</div>   
								</ul>
							</div>
						</div><!--/brands_products-->
						
				
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?=base_url()?>assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
                    <div id="sorting" class="col-sm-9">
                        <?php foreach($orcamentos as $orc){ ?>
                        <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?=base_url(). $orc->orcamento_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/orcamentos/visualizarorcamento/<?=$orc->orcamento_id?>"><h3 class="adtitle"> <?=$orc->orcamento_titulo?></h3></a>
                                                                                <?php if($orc->orcamento_logado == 1){ ?>
                                        <a href=""><p class="adcompany"><i class="fa fa-address-card" aria-hidden="true"></i> <?=$this->usuarios_model->nomeEmpresa($orc->usuario_id)?></p></a>
                                        <?php }else{?>
                                           <a href=""><p class="adcompany"><i class="fa fa-address-card" aria-hidden="true"></i> Não cadastrado</p></a>
                                        <?php } ?>
                                        <br>
                                                      <?php if($orc->orcamento_logado == 1){ ?>
                                        <p class="clientloc"><em><?=$this->usuarios_model->enderecoEmpresa($orc->usuario_id)?> - <?=$this->usuarios_model->estadoEmpresa($orc->usuario_id)?></em></p>
                                        <?php }else{?>
                                           <p class="clientloc"><em>Local não cadastrado</em></p>
                                        <?php } ?>
                                        
                                        <br>
                                        <h5 class="adprice">± R$ <?=$orc->orcamento_preco?></h5><h6 class="adunit">/<?=$orc->orcamento_unidade?></h6>
                                        <h6><b>10</b> Peças (<b>Quantidade</b>)</h6>
									</div>
                                   
									<div class="product-overlay">
										<div class="overlay-content">
											<ul> <p><b>Fretes Aceitos:</b></p>
                                                                                            <?php if($orc->orcamento_exwon == 1){ ?>
											<li><label><p>Transportadora - Pago pelo Cliente &#40;EXW&#41;</p></label></li>
                                                                                            <?php } ?>
                                                                                        <?php if($orc->orcamento_ddpon == 1){ ?>
											<li><label><p>Transportadora - Pago pelo Fornecedor &#40;DDP&#41;</p></label></li>
                                                                                        <?php } if($orc->orcamento_correioon == 1){ ?>
											<li><label><p>Correios </p></label></li>
                                                                                        <?php } if($orc->orcamento_buscaon == 1){ ?>
											<li><label><p>Cliente Busca </p></label></li>
                                                                                        <?php } if($orc->orcamento_levaon == 1){ ?>
											<li><label><p>Fornecedor Entrega </p></label></li>
                                                                                        <?php } ?>
										</ul>
										</div>
									</div>
								</div>
							</div>
                            
						</div><!--- /PRODUCT #1-->
                        <?php } ?>
                        <?=$pagination;?>
					
				</div>
			</div>
		</div>
        </div>
	</section>
	
	<footer id="footer"><!--Footer-->
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
					<p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.simplePagination.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    
      <script type='text/javascript'>
  
  $('selector').pagination({
        items: 20,
        itemOnPage: 8,
        currentPage: 1,
        cssStyle: '',
        prevText: '<span aria-hidden="true">&laquo;</span>',
        nextText: '<span aria-hidden="true">&raquo;</span>',
        onInit: function () {
            // fire first page loading
        },
        onPageClick: function (page, evt) {
            // some code
        }
    });
</script>
</body>
</html>