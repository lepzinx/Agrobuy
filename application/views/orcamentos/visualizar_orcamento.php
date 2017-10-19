<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php foreach($orcamento as $orc){ ?>
    <title> <?=$orc->orcamento_titulo?> | Agrobuy</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link href=<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/orcamento-details.css" rel="stylesheet">
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
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?=$orc->orcamento_categoria?></a></li>
            <li class="breadcrumb-item"><a href="#"><?=$orc->orcamento_categoria2?></a></li>
            <li class="breadcrumb-item active"> <?=$orc->orcamento_categoria3?></li>
        </ol>
		<div id="cont1" class="container">
            <div class="product-details"><!--product-details-->
                <div class="row"> 
                <div class="col-sm-3">
                    
                    <!-- main slider carousel -->
                    <div class="row">
                        <div id="slider">
                            <div class="col-md-12" id="carousel-bounding-box">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <!-- main slider carousel items -->
                                    <div class="carousel-inner">
                                        <?php if(!$orc->orcamento_imagem1 == null){ ?>
                                        <div class="active item" data-slide-number="0">
                                            <img src="<?=base_url().$orc->orcamento_imagem1?>" class="img-show">
                                        </div>
                                        <?php } ?>
                                            <?php if(!$orc->orcamento_imagem2 == null){ ?>
                                        <div class="item" data-slide-to="1">
                                            <img src="<?=base_url().$orc->orcamento_imagem2?>" class="img-show">
                                        </div>
                                            <?php }?>
                                            <?php if(!$orc->orcamento_imagem3 == null){ ?>
                                        <div class="item" data-slide-number="2">
                                            <img src="<?=base_url().$orc->orcamento_imagem3?>" class="img-show">
                                        </div>
                                            <?php } ?>
                                            <?php if(!$orc->orcamento_imagem4 == null){ ?>
                                        <div class="item" data-slide-number="3">
                                            <img src="<?=base_url().$orc->orcamento_imagem4?>" class="img-show">
                                        </div>
                                            <?php }?>
                                            <?php if(!$orc->orcamento_imagem5 == null){ ?>
                                        <div class="item" data-slide-number="4">
                                            <img src="<?=base_url().$orc->orcamento_imagem5?>" class="img-show">
                                        </div>
                                            <?php } ?>
                             
                                    </div>
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">

                                        <!-- The Close Button -->
                                        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                                        <!-- Modal Caption (Image Text) -->
                                        <div id="caption"></div>
                                        <!-- Modal Content (The Image) -->
                                        <img class="modal-content" id="img01">

                                        
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
                                
                                <?php if(!$orc->orcamento_imagem1 == null){ ?>
                                <a id="carousel-selector-0" class="selected">
                                    <img src="<?=base_url().$orc->orcamento_imagem1?>" class="img-thumb">
                                </a>        
                                <?php } ?>
                                <?php if(!$orc->orcamento_imagem2 == null){ ?>
                                <a id="carousel-selector-1">
                                    <img src="<?=base_url().$orc->orcamento_imagem2?>" class="img-thumb">
                                </a>                          
                                <?php } ?>
                                <?php if(!$orc->orcamento_imagem3 == null){ ?>
                                <a id="carousel-selector-2">
                                    <img src="<?=base_url().$orc->orcamento_imagem3?>" class="img-thumb">
                                </a>                     
                                <?php } ?>
                        
                            </div>
                            <div class="item">
                           <?php if(!$orc->orcamento_imagem4 == null){ ?>
                                <a id="carousel-selector-3">
                                <img src="<?=base_url().$orc->orcamento_imagem4?>" class="img-thumb">
                                </a>
                                <?php }?>
                                <?php if(!$orc->orcamento_imagem5 == null){ ?>
                             <a id="carousel-selector-4">
                                <img src="<?=base_url().$orc->orcamento_imagem5?>" class="img-thumb">
                                </a>
                                <?php }?>
                
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
                <div class="col-sm-9" class="orcamento">
                    <h6> Pedido de Orçamento Nº <em><?=$orc->orcamento_id?></em></h6>
                                <h5 data-toggle="tooltip" title="Data de início da negociação"><?=$orc->orcamento_datainicio?></h5>  
                            <div class="modal-header">
                                    <h3><?=$orc->orcamento_titulo?></h3>
                                </div>
                            <div class="modal-body">
                                <textarea class="form-control" rows="10" cols="50" readonly> <?=$orc->orcamento_detalhes?></textarea>
                            </div>
                            <div class="title">
                                <h4> Orçamentos Comparados</h4>
                            </div>
                            <div class="box-body">
                                <table>
                                    
                                <tr><td><h4>Orçamento Solicitado pelo Cliente</h4></td><td><h4>Seu Orçamento:</h4></td></tr>
                                <tr class="titlerow"><td><p class="ptitle">Quantidade Solicitada:</p></td><td><p class="ptitle">Quantidade:</p></td></tr>
                                <tr><td><p> <?=$orc->orcamento_qtd?> </p><p><?=$orc->orcamento_unidade?>;</p></td><td><p> <?=$orc->orcamento_qtd?> </p><p><?=$orc->orcamento_unidade?>; </p></td></tr>
                                <tr class="titlerow"><td><p class="ptitle">Preço Desejado:</p></td><td> <p class="ptitle">Seu Preço:</p></td></tr>
                                <tr><td><p><?=$orc->orcamento_preco?> </p><b> /<?=$orc->orcamento_unidade?> </b></td><td><p><input class="form-control qtd" type="number"></p><b> <?=$orc->orcamento_unidade?></b></td></tr>
                                <tr><td><p> Preço Total:<b> R$ <?=$orc->orcamento_preco?></b></p></td><td><p class="ptitle"> Seu Total:<b> R$ 10.000,00</b></p></td></tr>
                                <?php if($orc->orcamento_creditoon == 1){?>
                                <tr><td><p> O Cliente solicita que o Fornecedor também <b>aceite</b> cartões de crédito</p></td><td><label><input type="checkbox"> <p>Aceito Cartões de Crédito</p></label></td></tr>
                                <?php }?>
                                <tr class="titlerow"><td><p class="ptitle"> O Cliente solicita que você aceite Fretes por:</p></td><td><p>Destes, quais você aceita?</p></td></tr>
                                    <tr><td>Correios</td><td><label><input type="checkbox" checked>Aceito</label></td></tr>
                                    <?php if($orc->orcamento_exwon == 1){?>
                                    <tr><td>Transportadora - EXW</td><td><label><input type="checkbox">Aceito</label></td></tr>
                                    <?php } ?>
                                    <?php if($orc->orcamento_ddpon == 1){?>
                                    <tr><td>Transportadora - DDP</td><td><label><input type="checkbox">Aceito</label></td></tr>
                                    <?php }?>
                                    <?php if($orc->orcamento_buscaon == 1){?>
                                    <tr><td>Cliente Buscar</td><td><label><input type="checkbox">Aceito</label></td></tr>
                                    <?php } ?>
                                    <?php if($orc->orcamento_levaon == 1){?>
                                    <tr><td>Fornecedor Entregar</td><td><label><input type="checkbox">Aceito</label></td></tr>
                                    <?php }?>
                                </table>
                            </div>
                            <div class="title">
                                <h4> Ações</h4>
                            </div>
                            <div class="modal-body action-buttons">
                                <button href="#" data-toggle="modal" data-target="#confirmationModal"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar Pedido de Orçamento</button>
                                <button href="#" data-toggle="modal" data-target="#confirmationModal"><i class="fa fa-file-text" aria-hidden="true"></i> Enviar Orçamento</button>
                            </div>
						</div>
                </div>            
            </div>
        </div>
	</section>
    <?php }?>
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
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="<?=base_url()?>assets/js/product-details.js"></script>
</body>
</html>