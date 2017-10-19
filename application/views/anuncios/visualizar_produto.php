<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php foreach($anuncio as $anun){ ?>
    <title> <?=$anun->anuncio_titulo?> | Agrobuy</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/product-details.css" rel="stylesheet">
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
        <div id="categorytree"> <a><?=$anun->anuncio_categoria1?></a> > <a> <?=$anun->anuncio_categoria2?></a> > <a><?=$anun->anuncio_categoria3?></a> </div>
		<div id="cont1" class="container">
            <div class="product-details"><!--product-details-->
                <div class="row"> 
                <div class="col-sm-5" >
                    
                    <!-- main slider carousel -->
                    <div class="row">
                        <div id="slider">
                            <div class="col-md-12" id="carousel-bounding-box">
                              <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <!-- main slider carousel items -->
                                    <div class="carousel-inner">
                                        <?php if(!$anun->anuncio_imagem1 == null){ ?>
                                        <div class="active item" data-slide-number="0">
                                            <img src="<?=base_url().$anun->anuncio_imagem1?>" class="img-show">
                                        </div>
                                        <?php } ?>
                                            <?php if(!$anun->anuncio_imagem2 == null){ ?>
                                        <div class="item" data-slide-to="1">
                                            <img src="<?=base_url().$anun->anuncio_imagem2?>" class="img-show">
                                        </div>
                                            <?php }?>
                                            <?php if(!$anun->anuncio_imagem3 == null){ ?>
                                        <div class="item" data-slide-number="2">
                                            <img src="<?=base_url().$anun->anuncio_imagem3?>" class="img-show">
                                        </div>
                                            <?php } ?>
                                            <?php if(!$anun->anuncio_imagem4 == null){ ?>
                                        <div class="item" data-slide-number="3">
                                            <img src="<?=base_url().$anun->anuncio_imagem4?>" class="img-show">
                                        </div>
                                            <?php }?>
                                            <?php if(!$anun->anuncio_imagem5 == null){ ?>
                                        <div class="item" data-slide-number="4">
                                            <img src="<?=base_url().$anun->anuncio_imagem5?>" class="img-show">
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
                                
                                <?php if(!$anun->anuncio_imagem1 == null){ ?>
                                <a id="carousel-selector-0" class="selected">
                                    <img src="<?=base_url().$anun->anuncio_imagem1?>" class="img-thumb">
                                </a>        
                                <?php } ?>
                                <?php if(!$anun->anuncio_imagem2 == null){ ?>
                                <a id="carousel-selector-1">
                                    <img src="<?=base_url().$anun->anuncio_imagem2?>" class="img-thumb">
                                </a>                          
                                <?php } ?>
                                <?php if(!$anun->anuncio_imagem3 == null){ ?>
                                <a id="carousel-selector-2">
                                    <img src="<?=base_url().$anun->anuncio_imagem3?>" class="img-thumb">
                                </a>                     
                                <?php } ?>
                        
                            </div>
                            <div class="item">
                           <?php if(!$anun->anuncio_imagem4 == null){ ?>
                                <a id="carousel-selector-3">
                                <img src="<?=base_url().$anun->anuncio_imagem4?>" class="img-thumb">
                                </a>
                                <?php }?>
                                <?php if(!$anun->anuncio_imagem5 == null){ ?>
                             <a id="carousel-selector-4">
                                <img src="<?=base_url().$anun->anuncio_imagem5?>" class="img-thumb">
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
                <div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<div id="product-information">
                                    <h2 id="itemtitle"><?=$anun->anuncio_titulo?></h2>
								<span id="productid"><p>ID do Produto: <?=$anun->anuncio_id?></p></span>
                                                                <hr>     
                                                                    <?php if ($anun->anuncio_tipopreco == 0) { ?>
                                                                        <p><span id="productprice">R$<?= $anun->anuncio_preco ?></span><em>/<?=$anun->anuncio_unidade?></em>
                                                                        <?php } else { ?>
                                                                            <p><span id="productprice">R$ Sob Consulta</span><em>/unidade</em>
                                                                        <?php } ?>
                                    
									<span class="separator"> | </span> <?=$anun->anuncio_pedidominimo?> <?=$anun->anuncio_unidade?>  <em>(Pedido Mínimo)</em></p>
                                    
                                    <div id="supplyability">
                                        <p><b>Disponibilidade:</b> <em><?=$anun->anuncio_disponibilidade?></em></p>
                                        <p><b>Condição:</b> <?=$anun->anuncio_condicao?></p>
                                       <p><b>Condições de Frete: </b>
                                           <?php if($anun->anuncio_transportadoraon == 1){
                                               if($anun->anuncio_transportadoratermos == 1){ ?>
                                                  Transportadora - EXW,
                                               <?php } else{ ?>
                                                    Transportadora - DDP,
                                           <?php } }?>
                                                    <?php if($anun->anuncio_correioon == 1){
                                               if($anun->anuncio_sedexon == 1){ ?>
                                                  Correio - PAC/SEDEX,
                                               <?php } else{ ?>
                                                    Correio - PAC,
                                                    <?php } } ?>
                                                      <?php if($anun->anuncio_negociantes == 1){
                                               if($anun->anuncio_negociantesbusca == 1){ ?>
                                                      Cliente Busca,
                                               <?php } else if($anun->anuncio_negociantesleva == 1){ ?>
                                                    Fornectedor Entrega
                                                      <?php } }?>
                                            </p>
                                        </div>
                                    <hr>
                                    <div id="buyingcond">
                                        <p><b>Pagamento:</b><?php if($anun->anuncio_boletoon == 1){
                                            echo "Boleto Bancario,";
                                        }
                                        if($anun->anuncio_visamasteron == 1){
                                            echo " Visa/Master Card,";
                                        }
                                          if($anun->anuncio_amexon == 1){
                                            echo "Amex,";
                                        }
                                        if($anun->anuncio_paypalon == 1){
                                            echo "Paypal";
                                        }
?></p>
                                        <p><b>Suporte:</b> <a><?php if($anun->anuncio_compragarantida == 1){ ?><i class="fa fa-get-pocket"></i> Compra Garantida</a></p>
                                        <?php } ?>
                                    <label id="qlabel" for="quantity">Quantidade:</label>
									<input class="form-control" id="quantity" type="text" value="1" />
                                        <div id="buybuttons">
									<button type="button" class="btn cart">
										<i class="fa fa-shopping-cart"></i>
										Comprar
									</button>
                                    <button type="button" class="btn btn-default cartinv" data-toggle="modal" data-target="#dealModal">
										<i class="fa fa-handshake-o" aria-hidden="true"></i>
										Negociar
									</button>
                                            </div>
                                        </div>
                                    <hr>
                                    <div id="assistbuttons">
                                    <p>Salvar: </p>
                                        <a type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-floppy-disk"></span></a>
                                    <p>Denunciar: </p>    
                                        <a type="button" class="btn btn-default btn-xs"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                                    <p>Compartilhar: </p>
                                        <a type="button" class="btn btn-default btn-xs"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                        <a type="button" class="btn btn-default btn-xs"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>    
                                        
								</div>
                            </div><!--/product-information-->
						</div>
                <div id="contactspan">
                
                <a>Baldan Implementos Agrícolas</a> <span class="glyphicon glyphicon-ok-circle"></span><br>
                <p>Itirapina - SP | Comércio</p>
                <hr>
                <p>Reputação:</p><img src="<?=base_url()?>assets/images/ico/thermometer.png" height="25px;"><br>
                <p>Checagem de Dados:</p>
                <span class="glyphicon glyphicon-ok-circle"></span>
                <span class="glyphicon glyphicon-map-marker"></span>
                <span class="glyphicon glyphicon-ok"></span><br>
                <p>Suporte:<a> <i class="fa fa-get-pocket";></i> Compra Garantida</a></p>
                <hr style="margin: 10px 0px;">
                <p>Envie uma mensagem para esse Fornecedor:</p>    
                    <form  id='enviar' method='post' action='<?= base_url()?>index.php/usuarios/mandarmensagem/<?=$anun->usuario_id?>' >
                <textarea id="msgsupplier"  type='text' name='texto' placeholder="Faça perguntas sobre Preço, Frete, Qualidade, Tamanho, etc." rows="4" Value=""></textarea>
                <button id="enviarMensagem" type='submit' class="btn cartinv"> <i class="fa fa-commenting-o" aria-hidden="true"></i> Enviar</button>
                    </form>
                </div><!--/product-details-->
                </div>
                <div id="category" class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Detalhes do Produto</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">Perfil do Fornecedor</a></li>
                                <li><a href="#reviews" data-toggle="tab">Avaliações do Produto (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="details" >
								<h3> Características</h3>
                                <hr>
                                
                                <h4 class="pddesc"> Geral</h4>
                                <table>
                                <tr>
                                    <td class="feature">Peso</td>
                                    <td class="pdata"><?=$anun->anuncio_peso?></td>
                                </tr>
                                <tr>
                                        <td class="feature">Tamanho</td>
                                        <td class="pdata"> <?=$anun->anuncio_tamanho?></td>
                                </tr>
                                <tr>
                                    <td class="feature">Tipo de Cultivo / Criação</td>
                                    <td class="pdata"> - <?=$anun->anuncio_cultivocriacao?></td>                                    
                                    </tr></table>
                                <table>
                                    <tr><td class="feature"> Nome Científico</td>
                                    <td class="pdata"> - <?=$anun->anuncio_nomecientifico?></td></tr>
                                    <tr>
                                    <td class="feature">Variedade</td>
                                    <td class="pdata"> - <?=$anun->anuncio_variedade?></td>                                    
                                    </tr>
                                    <tr>
                                      <td class="feature"> Certificação </td>
                                    <td class="pdata"> <?=$anun->anuncio_certificacao?></td>
                                    </tr>
                                    </table>
                                    <table>
                                        <tr>
                                    <td class="feature">Tipo</td>
                                    <td class="pdata"><?=$anun->anuncio_tipoequip?></td>
                                    </tr>
                               <tr>
                                    <td class="feature">Modelo</td>
                                    <td class="pdata"> <?=$anun->anuncio_modelo?> </td>
                                    </tr>
                                <tr>
                                    <td class="feature"> Custom </td>
                                    <td class="pdata"> - <?=$anun->anuncio_marca?></td>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="pddesc"> Frete</h4>
                                <table>
                                    <tr>
                                        <td class="feature">Tipo de Frete:</td>
                                        <td class="pdata">   <?php if($anun->anuncio_transportadoraon == 1){
                                               if($anun->anuncio_transportadoratermos == 1){ ?>
                                                  Transportadora - EXW,
                                               <?php } else{ ?>
                                                    Transportadora - DDP,
                                           <?php } }?>
                                                    <?php if($anun->anuncio_correioon == 1){
                                               if($anun->anuncio_sedexon == 1){ ?>
                                                  Correio - PAC/SEDEX,
                                               <?php } else{ ?>
                                                    Correio - PAC,
                                                    <?php } } ?>
                                                      <?php if($anun->anuncio_negociantes == 1){
                                               if($anun->anuncio_negociantesbusca == 1){ ?>
                                                      Cliente Busca,
                                               <?php } else if($anun->anuncio_negociantesleva == 1){ ?>
                                                    Fornectedor Entrega
                                                      <?php } }?>
                                             </td>
                                    </tr>
                                    <tr>
                                        <td class="feature"> Empacotamento: </td>
                                        <td class="pdata"> <?=$anun->anuncio_empacotamento?></td>
                                    </tr>       
                                    <tr>
                                        <td class="feature"> Detalhe do Envio:</td>
                                        <td class="pdata"> <?=$anun->anuncio_detalheenvio?> </td>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="pddesc"> Descrição do Produto</h4>
                            <div id="productdesc"><?=$anun->anuncio_descricao?></div>
							</div>
    <?php 
    
    $usuario = $this->usuarios_model->pegarUsuarioPorId($anun->usuario_id);
    
                                               }
                                               foreach($usuario as $usu){
    
    ?>
							
							<div class="tab-pane fade in" id="companyprofile" >
                                <h2 id="companyname"><?=$usu->usuario_nome?></h2>
                                <img id="companyprofilepic" src="<?=base_url()?><?=$usu->usuario_imagemperfil?>" height="100px;">
                                <table>
                                    <tr><td class="feature"> Tipo de Negócio</td>
                                    <td class="pdata"> 
                                    <?php 
                                    if($usu->usuario_tiponegocio1 == 1){
                                        echo " Produtor Rural (Pecuarista/ Prod. Florestal, etc);";
                                    }
                                     if($usu->usuario_tiponegocio2 == 1){
                                        echo " Empresa Comercial(Trader/Escritorio);";
                                    }
                                     if($usu->usuario_tiponegocio3 == 1){
                                        echo " Agroindústria;";
                                    }
                                     if($usu->usuario_tiponegocio4 == 1){
                                        echo " Distribuidor/Atacadista;";
                                    }
                                     if($usu->usuario_tiponegocio5 == 1){
                                        echo " Associação/Cooperativa;";
                                    }
                                     if($usu->usuario_tiponegocio6 == 1){
                                        echo " Prestador de Serviços( Transporte, Finanças,etc);";
                                    }
                                     if($usu->usuario_tiponegocio7 == 1){
                                        echo " Start-up;";
                                    }
                                    ?>
                                
                                    </td></tr>
                                    <tr>
                                    <td class="feature">Principais Produtos</td>
                                    <td class="pdata"> <?=$usu->usuario_interessevenda1?> </td>                                    
                                    </tr>
                                    <tr>
                                      <td class="feature"> Número de Empregados </td>
                                    <td class="pdata"> 10</td>
                                    </tr>
                                    <tr>
                                      <td class="feature"> Ano de Estabelecimento </td>
                                    <td class="pdata"> 2003</td>
                                    </tr>
                                    </table>
                                    <table>
                                        <tr>
                                    <td class="feature">Estado</td>
                                    <td class="pdata"><?=$usu->usuario_estado?></td>
                                    </tr>
                               <tr>
                                    <td class="feature">Município</td>
                                    <td class="pdata"> <?=$usu->usuario_municipio?> </td>
                                    </tr>
                                </table>
                                <table>
                                        <tr>
                                    <td class="feature">E-mail</td>
                                    <td class="pdata"><?=$usu->usuario_email?></td>
                                    </tr>
                               <tr>
                                    <td class="feature">Telefone</td>
                                    <td class="pdata"> <?=$usu->usuario_tel?> </td>
                                    </tr>
                                    <tr>
                                    <td class="feature">Celular/ Whatsapp</td>
                                    <td class="pdata"> <?=$usu->usuario_cel?> </td>
                                    </tr>
                                </table>
                                <div class="container" style="max-width: 960px;">
                                    <div class="spdesc"><h3>Reputação </h3>
                                    <img src="<?=base_url()?>assets/images/ico/thermometer.png" height="100px;">
                                        <ul id="reputacao" class="nav nav-pills nav-justified">
                                            <li class="active"><a data-toggle="pill" href="#positiva"><span class="glyphicon glyphicon-plus-sign"></span> Positivas &#40;30&#41;</a></li>
                                            <li><a data-toggle="pill" href="#neutra"><span class="glyphicon glyphicon-minus-sign"></span> Neutras &#40;2&#41;</a></li>
                                            <li><a data-toggle="pill" href="#negativa"><span class="glyphicon glyphicon-remove-sign"></span> Negativas &#40;1&#41;</a></li>
                                        </ul>
  
                                            <div class="tab-content">
                                                <div id="positiva" class="tab-pane fade in active">
                                                    <h3><span class="glyphicon glyphicon-plus-sign"></span> Avaliações Positivas &#40;30&#41;</h3>
                                                    <div class="sreviews">
                                                        <div class="evaluation">
                                                            <ul>
                                                                <li><a href=""><i class="fa fa-user"></i>Usuário</a></li>
                                                                <li><a><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                                                <li><a><i class="fa fa-calendar-o"></i>12 Ago 2017</a></li>
                                                            </ul>
                                                            <b>Avaliação: </b> <span class="glyphicon glyphicon-plus-sign"></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
                                                        </div>
                                                        <div class="evaluation">
                                                            <ul>
                                                                <li><a href=""><i class="fa fa-user"></i>Usuário</a></li>
                                                                <li><a><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                                                <li><a><i class="fa fa-calendar-o"></i>12 Ago 2017</a></li>
                                                            </ul>
                                                            <b>Avaliação: </b> <span class="glyphicon glyphicon-plus-sign"></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
                                                        </div>
                                                        <div class="container" >
                                                            <ul class="pagination">
                                                                <li class="active"><a href="">1</a></li>
                                                                <li><a href="">2</a></li>
                                                                <li><a href="">3</a></li>
                                                                <li><a href="">&raquo;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="neutra" class="tab-pane fade">
                                                    <h3><span class="glyphicon glyphicon-minus-sign"></span> Avaliações Neutras</h3>
                                                    <div class="sreviews">
                                                        <div class="evaluation">
                                                            <ul>
                                                                <li><a href=""><i class="fa fa-user"></i>Usuário</a></li>
                                                                <li><a><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                                                <li><a><i class="fa fa-calendar-o"></i>12 Ago 2017</a></li>
                                                            </ul>
                                                            <b>Avaliação: </b> <span class="glyphicon glyphicon-minus-sign"></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
                                                        </div>
                                                        <div class="evaluation">
                                                            <ul>
                                                                <li><a href=""><i class="fa fa-user"></i>Usuário</a></li>
                                                                <li><a><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                                                <li><a><i class="fa fa-calendar-o"></i>12 Ago 2017</a></li>
                                                            </ul>
                                                            <b>Avaliação: </b> <span class="glyphicon glyphicon-minus-sign"></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="negativa" class="tab-pane fade">
                                                    <h3><span class="glyphicon glyphicon-remove-sign"></span> Avaliações Negativas &#40;1&#41;</h3>
                                                    <div class="sreviews">
                                                        <div class="evaluation">
                                                            <ul>
                                                                <li><a href=""><i class="fa fa-user"></i>Usuário</a></li>
                                                                <li><a><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                                                <li><a><i class="fa fa-calendar-o"></i>12 Ago 2017</a></li>
                                                            </ul>
                                                            <b>Avaliação: </b> <span class="glyphicon glyphicon-remove-sign"></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>                               
                                </div>
                                
                         <h3 class="spdesc"> Imagens e Vídeos</h3>        
                                <div class="container">
  
  <div id="firmCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#firmCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#firmCarousel" data-slide-to="1"></li>
      <li data-target="#firmCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?=base_url()?>assets/images/placeholders/come1.jpg" alt="" style="width:auto;">
      </div>

      <div class="item">
        <img src="<?=base_url()?>assets/images/placeholders/come2.jpg" alt="" style="width:auto;">
      </div>
    
      <div class="item">
        <img src="<?=base_url()?>assets/images/placeholders/come3.png" alt="" style="width:auto;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#firmCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#firmCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div> 
                         <?php }?>
							</div>
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Usuário</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>12 Ago 2017</a></li>
									</ul>
                                    <b>Avaliação: </b> <img src="<?=base_url()?>assets/images/product-details/rating.png" alt="" />
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam</p>
									<!--<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>-->
								</div>
							</div>
                            <!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Produtos Relacionados</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=base_url()?>assets/images/home/recommend1.jpg" alt="" />
													<h2>R$ 100,00</h2>
													<p>Produto Relacionado 1</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=base_url()?>assets/images/home/recommend2.jpg" alt="" />
													<h2>R$ 200,00</h2>
													<p>Produto Relacionado 2</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=base_url()?>assets/images/home/recommend3.jpg" alt="" />
													<h2>R$ 1.200,00</h2>
													<p> Produto Relacionado 3</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
                            <?php foreach($anuncio as $anun) { ?>
					<div id="dealModal" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" title="Fechar">
                                 <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                            </button>
                            <div class="modal-header">
                                    <h2> Negociação Nº <em><?=$anun->anuncio_id?></em></h2>
                                </div>
                            <div class="modal-body">
                                <h5 data-toggle="tooltip" title="Data de início da negociação"></h5>
                                <br>
                                <h3> Preço Unitário <b> R$ <?=$anun->anuncio_preco?></b></h3>
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
                                <input value="100" class="form-control"><p> Sacas &#40;sc.&#41; </p>
                                <h4>Preço Unitário:</h4>
                                <input value="R$ 100,00" class="form-control">
                                <h4>Pagamento</h4>
                                <p> <i class="fa fa-barcode" aria-hidden="true" data-toggle="tooltip" title="Boleto Bancário"></i><img src="images/ico/cards.png" width="100" data-toggle="tooltip" title="Cartões de Crédito"> </p>
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
                                    <td><input value="R$ 100,00" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-title">
                                <h3> Ações</h3>
                            </div>
                            <div class="modal-body action-buttons">
                                <a><button href="#" data-toggle="modal" data-target="#confirmationModal"><span class="glyphicon glyphicon-new-window"></span> Enviar Proposta</button></a>
                            </div>
                        </div>
                    </div>
                </div>><!-- /MODAL DETALHE DA NEGOCIAÇÃO-------------------->
				</div>
			</div>

                <?php } ?></div>
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
        
        <script type='text/javascript'>
            
            $("#enviarMensagem").click(function (e) {
    e.preventDefault();
    var url = $('#enviar').attr('action');
    var data = $('#enviar').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {
            $('#enviar').append('Enviado!');
            $('#enviarMensagem').prop("disabled", true)

           
        },
        error: function (e) {
            
        }
    });

     });
        
        </script>
</body>
</html>
