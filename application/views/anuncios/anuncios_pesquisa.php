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
		
						<h2><span class="glyphicon glyphicon-th-list"></span> Categorias</h2><!--category-productsr-->
						<div class="panel-group category-products" id="accordian">
						 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#g1" title="Setor primário">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Produtos Agropecuários
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="g1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/1" id="c0"><li>Produção Vegetal</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/2" id="c1"><li>Produção Animal</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/3" id="c2"><li>Produção Florestal</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/4" id="c3"><li>Pesca e Aquicultura</li></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#g2" title="Setor secundário">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Insumos Agropecuários
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="g2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/5" id="c4"><li>Sementes e Mudas</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/6" id="c5"><li>Defensivos e Fertilizantes, Químicos e Biológicos</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/7" id="c6"><li>Máquinas, Equipamentos e Ferramentas</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/8" id="c7"><li>Rações, Suplementos e Farmacêuticos</li></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#g3" title="Setor terciario">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Produtos Beneficiados e Transformados
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="g3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/9" id="c8"><li>Alimentos Beneficiados ou Transformados</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/10" id="c9"><li>Carnes e Laticínios</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/11" id="c10"><li>Polpas, Sucos, Extratos e Bebidas</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/12" id="c11"><li>Artefatos de Couro e Fabricação de Calçados</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/13" id="c12"><li>Celulose, Papel e Produtos de Papel</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/14" id="c13"><li>Fibras, Têxteis e Vestuário</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/15" id="c14"><li>Combustíveis e Bioenergia</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/16" id="c15"><li>Produtos do Fumo</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/17" id="c16"><li>Produtos da Madeira</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/18" id="c17"><li>Outros produtos</li></a>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#g4" title="Setor terciario">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Serviços
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="g4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/19" id="c18"><li>Transportes</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/20" id="c19"><li>Armazenamento</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/21" id="c20"><li>Intermediação financeira e seguros</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/22" id="c21"><li>Consultorias e Recomendações</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/23" id="c22"><li>Propriedades</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/24" id="c23"><li>Engenharia, Testes/Análises Técnicas e P &amp; D</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/25" id="c24"><li>Serviços Operacionais</li></a>
                                                <a href="<?=base_url()?>index.php/anuncios/categoria1/26" id="c25"><li>Outros Serviços</li></a>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
						</div><!--/category-productsr-->
                            <form method="post"  action='<?=base_url()?>index.php/anuncios/pesquisaav'>
										<h2><i class="fa fa-usd" aria-hidden="true"></i> Preço</h2>
							<div class="well">
								 <input type="text" name='preco' class="span2" value="" data-slider-min="0" data-slider-max="2000" data-slider-step="5" data-slider-value="[0,600]" id="sl2" ><br />
								 <b>R$ 0</b> <b class="pull-right">R$ 500</b>
							</div>
						</div><!--/price-range-->
						<div class="brands_products"><!--brands_products-->
							<h2 id="attributes"><span class="glyphicon glyphicon-tags"></span> Produtos</h2>
							<div class="brands-name">
                                
								<ul class="nav nav-pills nav-stacked">
									<li><a><b>Condição:</b> <span id="btn-group2" data-toggle="buttons">
                                                <label class="btn btn-radio">
                                                <input type="radio" name="options" value='Novo' id="novo" autocomplete="off"> Novo
                                              </label>
                                              <label class="btn btn-radio">
                                                <input type="radio" name="options" value='Usado' id="usado" autocomplete="off"> Usado
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
											<li><a><label><input  name='exw' value='1' type="checkbox">Transportadora - Pago pelo Cliente &#40;EXW&#41;</label></a></li>
											<li><a><label><input name='ddp' value='1' type="checkbox">Transportadora - Pago pelo Fornecedor &#40;DDP&#41;</label></a></li>
											<li><a><label><input name='correios' value='1' type="checkbox">Correios </label></a></li>
											<li><a><label><input name='busca' value='1' type="checkbox">Cliente Busca </label></a></li>
											<li><a><label><input name='entrega' value='1' type="checkbox">Fornecedor Entrega </label></a></li>
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
											<li><a><label><input name='boleto' value='1' type="checkbox"> Boleto Bancário</label></a></li>
											<li><a><label><input name='visa' value='1' type="checkbox"> Visa/ Mastercard</label></a></li>
											<li><a><label><input name='amex' value='1'type="checkbox"> American Express </label></a></li>
											<li><a><label><input name='paypal' value='1' type="checkbox"> PayPal </label></a></li>
										</ul>
                                        <div class='col-md-8'></div>
                                    <div class='col-md-4'><button type='submit' class="btn-success"><i class="fa fa-search" aria-hidden="true"></i></div>
									</div>
                                    
								</div>
                                        
							</div>
								</ul>
                                
				                     </form>
                                
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
                        <div id='pesquisa'>          <?php 
    if(empty($anuncios)){ ?>
          <div class="col-sm-8">Não foi encontrado nenhum resultado </div>
   <?php
    }else{
                         foreach($anuncios as $anun){ ?>
                            <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?=base_url().$anun->anuncio_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?=$anun->anuncio_id?>"><h3 class="adtitle"> <?=$anun->anuncio_titulo?></h3></a>
                                        <a href=""><p class="adcompany"><?=$this->usuarios_model->nomeEmpresa($anun->usuario_id);?></p></a>
                                        <p class="companyloc"><em><?=$this->usuarios_model->enderecoEmpresa($anun->usuario_id);?> - <?=$this->usuarios_model->estadoEmpresa($anun->usuario_id);?> </em></p>
                                        <h5 class="adprice">R$ <?=$anun->anuncio_preco?></h5><h6 class="adunit">/<?=$anun->anuncio_unidade?></h6>
                                        <h6><b><?=$anun->anuncio_qtdminimo?></b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
                                   
									<div class="product-overlay">
										<div class="overlay-content">
											<p><b> 10 Vendidos</b></p>
                                        <p class="adcredit"><b><i class="fa fa-credit-card" aria-hidden="true"></i> 12x R$ 8,33 sem juros</b></p>
                                        
                                        <p class="adevaluate">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </p> 
										</div>
									</div>
								</div>
							</div>
                            
						</div><!--- /PRODUCT #1-->
						
                            <?php } }?>
                        <?php echo $pagination; ?>
   
                      
                        </div>
					
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
    

</body>
</html>