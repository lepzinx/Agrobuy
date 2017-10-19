<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Editar Anúncio | Agrobuy</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/create-ad.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.0/quill.snow.css" rel="stylesheet">
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
        <br>
        <div class="container"> 
            <?php if($this->session->userdata['usuario_id'] == $usuario){?>

    <h2>Detalhes do anúncio</h2>    
        <div id="cont1" class="container">
          <?php foreach($anuncio as $anun){ ?>
          <form id="pform" method="post" action="<?=base_url()?>index.php/anuncios/alteraranuncio/<?=$anun->anuncio_id?>">  
          <div class="product-details"><!--product-details-->
               
                <div class="col-sm-5" >
                    
						 <div id="imgbox">
                <label class="control-label">Carregue as novas imagens imagens para trazer mais detalhe ao seu anuncio:</label>
            <input id="input-1" name='image1' type="file" class="file">
            <input id="input-1" name='image2' type="file" class="file">
            <input id="input-1" name='image3' type="file" class="file">
            <input id="input-1" name='image4' type="file" class="file">
            <input id="input-1" name='image5' type="file" class="file">
            
                </div>
						</div>
                <div class="col-sm-7">
                    
				<div id="product-information"class="product-information"><!--/product-information-->
                                    
                                <span id="productid"></span>
                                        <div class="form-group">
                                          <textarea id="title" class="form-control" name="title" type="text" placeholder=""  maxlength="30" rows="1"><?=$anun->anuncio_titulo?></textarea></div>  
                                    <hr>
                                        <div id="details">
                                        <p><b>Preço:</b></p>
                                        <br>
                                        <span id="btn-group1" data-toggle="buttons">
                                            <label class="btn btn-radio active">
                                                <input type="radio" name="pvis" value="visivel" id="visivel" autocomplete="off" checked> Visível
                                              </label>
                                            <label class="btn btn-radio">
                                                <input type="radio" name="pvis" value='consulta' id="sobcon" autocomplete="off"> Sob Consulta
                                              </label>
                                            <br>
                                            </span>
                                        <div class="visib" id="pvisible">
									<p id="valueunit">R$</p>
                                        <div class="form-group">
                                            <input class="form-control money" id="productprice" value='<?=$anun->anuncio_preco?>' name="pprice" type="text"> 
                                        </div>
                                        <p><em>/</em></p> 
                                            <select id="unitbox" name='unitbox' placeholder="Unidade(s)"> 
                                            <option disabled class="unitclass">Unidades</option>
                                            <option class="unitopt" value="Unidade(s)">Unidade(s)</option>
                                            <option class="unitopt" value="Análises/ Amostras">Análises/ Amostras</option>
                                            <option class="unitopt" value="Animal(is)">Animal(is)</option>
                                            <option class="unitopt" value="Caixa(s)">Caixa(s)</option>
                                            <option class="unitopt" value="Cartela(s)">Cartela(s)</option>
                                            <option class="unitopt" value="Conjunto(s)">Conjunto(s)</option>
                                            <option class="unitopt" value="Container de 20 Pés">Container de 20 Pés</option>
                                            <option class="unitopt" value="Container de 40 pés">Container de 40 Pés</option>
                                            <option class="unitopt" value="Container de 40 Pés High Cube">Container de 40 Pés High Cube</option>
                                            <option class="unitopt" value="Dúzia(s)">Dúzia(s)</option>
                                            <option class="unitopt" value="Estojo(s)">Estojo(s)</option>
                                            <option class="unitopt" value="Galão(ões)">Galão(ões)</option>
                                            <option class="unitopt" value="Grão(s)">Grão(s)</option>
                                            <option class="unitopt" value="Pacote(s)">Pacote(s)</option>
                                            <option class="unitopt" value="Pallet(s)">Pallet(s)</option>
                                            <option class="unitopt" value="Par(es)">Par(es)</option>
                                            <option class="unitopt" value="Peça(s)">Peça(s)</option>
                                            <option class="unitopt" value="Saca(s)">Saca(s)</option>


                                            <option disabled class="unitclass">Peso</option>
                                            <option class="unitopt" value="Arroba Líquida">Arroba Líquida</option>
                                            <option class="unitopt" value="Bushel(s)">Bushel(s)</option>
                                            <option class="unitopt" value="Miligrama(s)">Miligrama(s)</option>
                                            <option class="unitopt" value="Grama(s)">Grama(s)</option>
                                            <option class="unitopt" value="Kilograma(s)">Kilograma(s)</option>
                                            <option class="unitopt" value="Tonelada(s)">Tonelada(s)</option>
                                            <option class="unitopt" value="Unidade(s) Animal(is)">Unidade(s) Animal(is)</option>

                                            <option disabled class="unitclass">Volume</option>
                                            <option class="unitopt" value="Barril(is)">Barril(is)</option>
                                            <option class="unitopt" value="Mililitro(s)">Mililitro(s)</option>
                                            <option class="unitopt" value="Centímetro(s) Cúbico(s)">Centímetro(s) Cúbico(s)</option>
                                            <option class="unitopt" value="Litro(s)">Litro(s)</option>
                                            <option class="unitopt" value="Metro(s) Cúbico(s)">Metro(s) Cúbico(s)</option>

                                            <option disabled class="unitclass">Comprimento</option>
                                            <option class="unitopt" value="Milímetro(s)">Milímetro(s)</option>
                                            <option class="unitopt" value="Centímetro(s)">Centímetro(s)</option>
                                            <option class="unitopt" value="Metro(s)">Metro(s)</option>
                                            <option class="unitopt" value="Kilômetro(s)">Kilômetro(s)</option>
                                            <option class="unitopt" value="Milha Náutica">Milha Náutica</option>

                                            <option disabled class="unitclass"> Área</option>
                                            <option class="unitopt" value="Milímetro(s) Quadrados">Milímetro(s) Quadrados</option>
                                            <option class="unitopt" value="Centímetro(s) Quadrado(s)">Centímetro(s) Quadrado(s)</option>
                                            <option class="unitopt" value="Metro(s) Quadrado(s)">Metro(s) Quadrado(s)</option>
                                            <option class="unitopt" value="Kilômetro(s)">Kilômetro(s) Quadrado(s)</option>
                                            <option class="unitopt" value="Hectare(s)">Hectare(s)</option>
                                            <option class="unitopt" value="Alqueire(s) Paulista(s)">Alqueire(s) Paulista(s)</option>
                                            <option class="unitopt" value="Alqueire do Norte(s)">Alqueire do Norte(s)</option>
                                            <option class="unitopt" value="Alqueire Mineiro(s)">Alqueire Mineiro(s)</option>
                                            <option class="unitopt" value="Alqueire Baiano(s)">Alqueire Baiano(s)</option>

                                            <option disabled class="unitclass">Dinheiro</option>
                                            <option class="unitopt" value="Reais">Reais</option>

                                            <option disabled class="unitclass"> Quantidade de Matéria</option>
                                            <option class="unitopt" value="Mol(s)">Mol(s)</option>

                                            <option disabled class="unitclass"> Concentração</option>
                                            <option class="unitopt" value="Mol(s)/Litro">Mol(s)/Litro</option>

                                            <option disabled class="unitclass"> Temperatura</option>
                                            <option class="unitopt" value="Grau(s) Celsius">Grau(s) Celsius</option>

                                            <option disabled class="unitclass"> Potência</option>
                                            <option class="unitopt" value="Watt(s)">Watt(s)</option>
                                            <option class="unitopt" value="Kilowatt(s)">Kilowatt(s)</option>
                                            <option class="unitopt" value="Megawatt(s)">Watt(s)</option>

                                            <option disabled class="unitclass">Pressão</option>
                                            <option class="unitopt" value="Pascal">Pascal</option>

                                            <option disabled class="unitclass"> Tensão Elétrica</option>
                                            <option class="unitopt" value="Volt(s)">Volt(s)</option>

                                            <option disabled class="unitclass">Resistência Elétrica</option>
                                            <option class="unitopt" value="Ohm">Ohm(s)</option>

                                            <option disabled class="unitclass">Frequência</option>
                                            <option class="unitopt" value="Hertz">Hertz</option>
                                            <option class="unitopt" value="Kilohertz">Kilohertz</option>
                                            <option class="unitopt" value="Megahertz">Megahertz</option>

                                            <option disabled class="unitclass">Fluxo Luminoso</option>
                                            <option class="unitopt" value="Lúmen(s)">Lúmen(s)</option>

                                            <option disabled class="unitclass">Radiação Ionizante</option>
                                            <option class="unitopt" value="Röntgen(s)">Röntgen(s)</option>
                                        
                                            </select>
                                        <?php if($anun->anuncio_negociavel == 1) {?>
                                        <label class="btn btn-default"><input class="btn-input" name="negociavel" value='1' type="checkbox" checked> Negociável</label>
                                        <?php }else{ ?>
                                        <label class="btn btn-default"><input class="btn-input" name="negociavel" value='1' type="checkbox"> Negociável</label>
                                        <?php } ?>
                                            </div>
                                        <div class="visib" id="pconsult">
                                                <p id="pcons">Sob Consulta.</p>
                                                <!--<a class="btn btn-default cart"><i class="fa fa-comment-o" aria-hidden="true"></i> Consultar</a>-->
                                            </div> 
                                            
                                            
									   <span id="separator">|</span>
                                        
                                        <div class="form-group">
                                           
                                        <input id="minqt" class="form-control" name="minqt" value='<?=$anun->anuncio_qtdminimo?>' type="number" onkeypress="return event.charCode >= 48" min="1">
                                        </div>
                                        <input class="unitbox0" type="text" placeholder="Unidade(s)" disabled><label class="btn btn-default" for="minorder">
                                             <?php if($anun->anuncio_pedidominimo == 1) {?><input id="minorder" name='pedidominimo' value='1' class="btn-input" type="checkbox" checked>(Pedido Mínimo)</label> <?php }else{?> <input id="minorder" name='pedidominimo' value='1' class="btn-input" type="checkbox">(Pedido Mínimo)<?php }?>
                                        <br>
                                        <p><b>Disponibilidade:</b></p>
                                        <div class="form-group">
                                            <input id="available" name="available" value='<?=$anun->anuncio_disponibilidade?>' class="form-control" type="number" placeholder="0" onkeypress="return event.charCode >= 48" min="1">
                                        </div>
                                                <input class="unitbox0" type="text" placeholder="Unidade(s)" disabled>
                                        <br>
                                        <p><b>Condição:</b></p>
                                            <span id="btn-group2" data-toggle="buttons">
                                               <?php if($anun->anuncio_condicao == 'Novo'){?>
                                                <label class="btn btn-radio active">
                                                <input type="radio" name="options" value='Novo' id="novo" autocomplete="off" checked> Novo
                                              </label>
                                              <label class="btn btn-radio">
                                                <input type="radio" name="options" value='Usado' id="usado" autocomplete="off"> Usado
                                              </label>
                                               <?php }else{ ?>
                                                <label class="btn btn-radio">
                                                <input type="radio" name="options" value='Novo' id="novo" autocomplete="off"> Novo
                                              </label>
                                              <label class="btn btn-radio active">
                                                <input type="radio" name="options" value='Usado' id="usado" autocomplete="off" checked> Usado
                                              </label>
                                                
                                               <?php }?>
                                            </span>
                                            </div>
                                        <hr>
                                        
                                        <div id="freight" class="form-control" style="border: 0px;">
                                            <p><b>Frete</b> - O produto poderá ser entregue através de: </p><br>      
                                            <ul class="fcond">
                                                <li>
                                                    <?php if($anun->anuncio_transportadoraon == 1){?>
                                                    <label for="fcompany" class="btn btn-default">
                                                        <input id="fcompany" class="btn-input" value='1'  name="transportadora" type="checkbox" checked> Transportadora
                                                    </label>
                                                    <?php }else{ ?>
                                                      <label for="fcompany" class="btn btn-default">
                                                        <input id="fcompany" class="btn-input" value='1'  name="transportadora" type="checkbox"> Transportadora
                                                    </label>
                                                    <?php }?>
                                                </li>
                                                <li>
                                                     <?php if($anun->anuncio_correioon == 1){?>
                                                    <label for="fcorreios" class="btn btn-default">
                                                        <input id="fcorreios" class="btn-input" value='1' name="correio" type="checkbox" checked> Correios
                                                    </label>
                                                       <?php }else{ ?>
                                                      <label for="fcorreios" class="btn btn-default">
                                                        <input id="fcorreios" class="btn-input" value='1' name="correio" type="checkbox"> Correios
                                                    </label>
                                                    <?php }?>
                                                </li>
                                                <li>
                                                     <?php if($anun->anuncio_negociantes == 1){?>
                                                    <label for="fneg" class="btn btn-default">
                                                        <input id="fneg" class="btn-input" name="negociantesOn" value='1' type="checkbox" checked> Negociantes
                                                    </label>
                                                       <?php }else{ ?>
                                                      <label for="fneg" class="btn btn-default">
                                                        <input id="fneg" class="btn-input" name="negociantesOn" value='1' type="checkbox"> Negociantes
                                                    </label>
                                                    <?php }?>
                                                    
                                                </li>
                                            </ul>
                                            
                                            <div id="fmodal1">
                                                <p><b>Transportadora - Termos do Frete:</b></p>
                                                <br>
                                                <span id="btn-group4" data-toggle="buttons">
                                                     <?php if($anun->anuncio_transportadoratermos == 1){?>
                                                     <label class="btn btn-radio active">
                                                        <input type="radio" name="toptions" value='exw' id="exw" autocomplete="off" checked> EXW
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="toptions" value='ddp' id="ddp" autocomplete="off"> DDP
                                                    </label>
                                                       <?php }else{ ?>
                                                       <label class="btn btn-radio">
                                                        <input type="radio" name="toptions" value='exw' id="exw" autocomplete="off"> EXW
                                                    </label>
                                                    <label class="btn btn-radio active">
                                                        <input type="radio" name="toptions" value='ddp' id="ddp" autocomplete="off" checked> DDP
                                                    </label>
                                                    <?php }?>
                                                    
                                                   
                                                </span>
                                                                              
                                                                      
                                                <div id="exwalert" class="alert alert-warning "><i class="fa fa-info-circle" aria-hidden="true"></i> Ao optar pelo termo <b>EXW</b>, o <b>Cliente</b> deverá arcar com os <em>Custos e Riscos</em> do transporte das mercadorias pela transportadora. Para saber mais, acesse os <a> Termos de Frete Agrobuy</a>.</div>
                                                
                                                <div id="ddpalert" class="alert alert-warning"><i class="fa fa-info-circle" aria-hidden="true"></i> Ao optar pelo termo <b>DDP</b>, o <b>Fornecedor</b> se propõe a arcar com os <em>Custos e Riscos</em> do transporte das mercadorias pela transportadora. Para saber mais, acesse os <a> Termos de Frete Agrobuy</a>.</div>
                                            </div>
                                            <div id="ftype">
                                                <p><b>Transportadora - Tipo de Frete:</b></p>
                                                <br>
                                                <span id="btn-group4" data-toggle="buttons">
                                                    <?php if($anun->anuncio_transportadoratermos == 0){?>
                                                       <label class="btn btn-radio active">
                                                        <input type="radio" name="optionstipo" value='Padrao' id="" autocomplete="off" checked> Padrão
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Viva' id="" autocomplete="off"> Carga Viva
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Controlada' id="" autocomplete="off"> Carga Controlada
                                                    </label>
                                                    <label class="btn btn-radio">
                                                    <input type="radio" name="optionstipo" value='TempControladas' id="" autocomplete="off"> Temperatura Controlada
                                                    </label>
                                                       <?php }else if($anun->anuncio_transportadoratermos == 1){ ?>
                                                           <label class="btn btn-radio ">
                                                        <input type="radio" name="optionstipo" value='Padrao' id="" autocomplete="off"> Padrão
                                                    </label>
                                                    <label class="btn btn-radio active">
                                                        <input type="radio" name="optionstipo" value='Viva' id="" autocomplete="off" checked> Carga Viva
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Controlada' id="" autocomplete="off"> Carga Controlada
                                                    </label>
                                                    <label class="btn btn-radio">
                                                    <input type="radio" name="optionstipo" value='TempControladas' id="" autocomplete="off"> Temperatura Controlada
                                                    </label>
                               
                                                    <?php }else if($anun->anuncio_transportadoratermos == 2){ ?>
                                                           <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Padrao' id="" autocomplete="off"> Padrão
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Viva' id="" autocomplete="off"> Carga Viva
                                                    </label>
                                                    <label class="btn btn-radio active">
                                                        <input type="radio" name="optionstipo" value='Controlada' id="" autocomplete="off" checked> Carga Controlada
                                                    </label>
                                                    <label class="btn btn-radio">
                                                    <input type="radio" name="optionstipo" value='TempControladas' id="" autocomplete="off"> Temperatura Controlada
                                                    </label>
                                                    
                                                    <?php }else if($anun->anuncio_transportadoratermos == 3){ ?>
                                                    
                                                           <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Padrao' id="" autocomplete="off"> Padrão
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Viva' id="" autocomplete="off"> Carga Viva
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="optionstipo" value='Controlada' id="" autocomplete="off"> Carga Controlada
                                                    </label>
                                                    <label class="btn btn-radio active">
                                                    <input type="radio" name="optionstipo" value='TempControladas' id="" autocomplete="off" checked> Temperatura Controlada
                                                    </label>
                                                    
                                                    <?php } ?>
                                                 
                                                </span>
                                            </div>
                                            <div id="fmodal2">
                                                                                        
                                                <p><b>Correios - Termos de Frete:</b></p>
                                                <br>
                                                <ul class="fcond">
                                                    <li>
                                                        <a class="btn btn-default active">
                                                            <input id="pac" name="correios" type="checkbox" checked  onclick="return false;"> PAC
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <?php if($anun->anuncio_sedexon == 1){ ?>
                                                        <label for="sedex" class="btn btn-default">
                                                            
                                                            <input id="sedex" class="btn-input" value='1' name="sedex" type="checkbox" checked> Sedex
                                                        </label>
                                                        <?php }else{ ?>
                                                        <label for="sedex" class="btn btn-default">
                                                            
                                                            <input id="sedex" class="btn-input" value='1' name="sedex" type="checkbox"> Sedex
                                                        </label>
                                                        <?php }?>
                                                    </li>
                                                </ul>
                                            </div>                                       
                                            <div id="fmodal3">
                                                <p><b>Negociantes - Termos de Frete:</b></p>
                                                <br>
                                                <ul class="fcond">
                                                    <li>
                                                          <?php if($anun->anuncio_negocianteleva == 1){ ?>
                                                      <label for="ffornecedor" class="btn btn-default">
                                                            <input id="ffornecedor" class="btn-input" name="negociado" value='1' type="checkbox" checked> O Fornecedor entrega o Produto
                                                        </label>
                                                        <?php }else{ ?>
                                                     <label for="ffornecedor" class="btn btn-default">
                                                            <input id="ffornecedor" class="btn-input" name="negociado" value='1' type="checkbox"> O Fornecedor entrega o Produto
                                                        </label>
                                                        <?php }?>
                                                      
                                                    </li>
                                                    <li>
                                                          <?php if($anun->anuncio_negociantebusca == 1){ ?>
                                                      <label for="fcliente" class="btn btn-default">
                                                            <input id="fcliente" class="btn-input" name="negociado1" value='1' type="checkbox" checked> O Cliente retira o Produto
                                                        </label>
                                                        <?php }else{ ?>
                                                     <label for="fcliente" class="btn btn-default">
                                                            <input id="fcliente" class="btn-input" name="negociado1" value='1' type="checkbox"> O Cliente retira o Produto
                                                        </label>
                                                        <?php }?>
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                            
                                    <hr>
                    <div id="pay">                
                        <p><b>Pagamento:</b></p>
                        <br>
                        <?php if($anun->anuncio_compragarantida == 1){ ?>
                        <label id="compg"><a><i class="fa fa-get-pocket"></i> <input id="cg" name="garantida" value="1" type="checkbox" checked>Compra Garantida</a></label>
                        <?php } else {?>
                        <label id="compg"><a><i class="fa fa-get-pocket"></i> <input id="cg" name="garantida" value="1" type="checkbox">Compra Garantida</a></label>
                        <?php } ?>
                                    <div id="payment">
                                        
                                        <ul class="fcond">
                                            <?php if ($anun->anuncio_boletoon == 1) { ?>
                                                        <li><label for="boleto" class="checkbox-inline"><input id="boleto" name="boleto" value="1" type="checkbox" checked  onclick="return false;">Boleto Bancário</label></li>
                                                    <?php } else { ?>
                                                        <li><label for="boleto" class="checkbox-inline"><input id="boleto" name="boleto" value="1" type="checkbox"   onclick="return false;">Boleto Bancário</label></li>
                                                    <?php } ?>

                                                    <?php if ($anun->anuncio_visamasteron == 1) { ?>
                                                        <li><label for="visamaster" class="checkbox-inline"><input id="visamaster" name="visamaster" value="1" class="payment" type="checkbox" checked>Visa / Mastercard</label></li>
                                                    <?php } else { ?>
                                                        <li><label for="visamaster" class="checkbox-inline"><input id="visamaster" name="visamaster" value="1" class="payment" type="checkbox">Visa / Mastercard</label></li>
                                                            <?php } ?>
                                                         <?php if ($anun->anuncio_amexon == 1) { ?>
                                                         <li><label for="amex" class="checkbox-inline"><input id="amex" name="amex" value="1" type="checkbox" class="payment" checked> Amex</label></li>
                                                    <?php } else { ?>
                                                        <li><label for="amex" class="checkbox-inline"><input id="amex" name="amex" value="1" type="checkbox" class="payment"> Amex</label></li>
                                                            <?php } ?>
                                                           <?php if ($anun->anuncio_paypalon == 1) { ?>
                                                         <li><label for="paypal" class="checkbox-inline"><input id="paypal" name="paypal" value="1" type="checkbox" class="payment" checked> PayPal</label></li>
                                                    <?php } else { ?>
                                                         <li><label for="paypal" class="checkbox-inline"><input id="paypal" name="paypal" value="1" type="checkbox" class="payment"> PayPal</label></li>
                                                            <?php } ?>

                                        
                                       
                                       
                                            </ul>
                                        
                                        
                                        <div id="payment-warning" class="alert alert-warning"> <i class="fa fa-info-circle" aria-hidden="true"></i> Lembre-se: ao optar pelo uso serviço dos métodos de pagamentos escolhidos você poderá incorrer em <a> custos de transação</a>.</div>
                                        

                                    </div>
                        <div id="nocg" class="alert alert-danger"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atenção: ao optar por não usar a <a><i class="fa fa-get-pocket"></i>Compra Garantida</a>, o <b>Agrobuy não disponibiliza NENHUM outro mecanismo para pagamento através do site</b>; portanto, qualquer transação ocorrerá fora da plataforma, excluindo o <b>Agrobuy</b> de <em>qualquer eventual dever</em> por parte de si, para com compradores e vendedores. Todas as demais ferramentas também ficarão indisponíveis para uso ao longo desta transação.</div>
                        </div>                                 
								
                            </div><!--/product-information-->
						</div>      
                <div id="category" class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Detalhes do Produto</a></li>
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
                                    <td class="pdata"> <input name="peso" value="<?=$anun->anuncio_peso?>" type="text"></td>
                                </tr>
                                <tr>
                                        <td class="feature">Tamanho</td>
                                        <td class="pdata"> <input name="tamanho" value="<?=$anun->anuncio_tamanho?>" type="text"></td>
                                </tr>
                                <tr>
                                    <td class="feature">Tipo de Cultivo / Criação</td>
                                    <td class="pdata"><input name='cultivocriacao' <?=$anun->anuncio_cultivocriacao?> type="text"></td>                                    
                                    </tr></table>
                                <table>
                                    <tr><td class="feature"> Nome Científico</td>
                                    <td class="pdata"><input name='cientifico' value="<?=$anun->anuncio_nomecientifico?>" type="text"></td></tr>
                                    <tr>
                                    <td class="feature">Variedade</td>
                                    <td class="pdata"><input name='variedade' value="<?=$anun->anuncio_variedade?>" type="text"></td>                                    
                                    </tr>
                                    <tr>
                                      <td class="feature"> Certificação </td>
                                    <td class="pdata"> <input name='certificacao' value='<?=$anun->anuncio_certificacao?>' type="text"></td>
                                    </tr>
                                    </table>
                                <table>
                                        <tr>
                                    <td class="feature">Tipo</td>
                                    <td class="pdata"><input name='tipo2' value='<?=$anun->anuncio_tipoequip?>' type="text"></td>
                                    </tr>
                               <tr>
                                    <td class="feature">Marca</td>
                                    <td class="pdata"> <input name='marca' value='<?=$anun->anuncio_marca?>' type="text"> </td>
                                    </tr>
                                <tr>
                                    <td class="feature"> Modelo </td>
                                    <td class="pdata"><input name='modelo'  value='<?=$anun->anuncio_modelo?>' type="text"></td>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="pddesc"> Empacotamento e Envio</h4>
                                <table>
                                    <tr>
                                    <td class="feature"> Empacotamento: </td>
                                    <td class="pdata pack"> <input name='empacotamento' value='<?=$anun->anuncio_empacotamento?>' type="text"> </td>
                                    </tr>
                               <tr>
                                    <td class="feature"> Detalhe do Envio:</td>
                                    <td class="pdata pack"> <input name='detalheenvio' type="text" value="<?=$anun->anuncio_detalheenvio?>"> </td>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="pddesc"> Descrição do Produto</h4>
                                <div id="productdesc">
        
                                    <div id='editor-container'>
                                   
                                    </div>
                                    <input type="hidden" name="teste2" id= "teste2">
                                    
                                                                <script type="text/javascript">
function pegaValorDiv(){
var caminho = document.getElementById("editor-container").innerHTML; //aqui eu pego o valor da div 'teste' e coloco na variavel
document.getElementById("teste2").value = caminho; //aqui eu envio o conteudo da var para o campo 'teste2'
}
</script>
                                   
                                </div>
							</div>
                            <!--/category-tab-->
				</div>
			</div>
                
            </div><!--/product-details-->
            <button type='submit' class="btn btn-default" onclick="pegaValorDiv()">Editar</button>
                </form>
   
        </div>
    </div>
 
        </section>
          <?php }
          
          }else{ 
                
                redirect(base_url().'index.php/usuarios');
            }
?>
            
	
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
    <script src="https://cdn.quilljs.com/1.3.0/quill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
		<script src="<?=base_url()?>assets/js/create-ad.js"></script>
    <script src="<?=base_url()?>assets/js/validation-ad.js"></script>
    <script src="<?=base_url()?>assets/js/messages_pt_BR.js"></script>
    
        
        <script>
        var quill = new Quill('#editor-container', {
  modules: {
    toolbar: [
      [{ 'size': ['small', false, 'large', 'huge'] },{ 'font': [] }],
      ['bold', 'italic', 'underline'],
      ['image', 'video'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'align': [] }],  // custom dropdown
        
          [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  ['clean']                                         // remove formatting button
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'  // or 'bubble'
});
        </script>
        
</body>
</html>