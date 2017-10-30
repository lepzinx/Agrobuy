<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Agrobuy | Cotações de Frete </title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/dashboard_freight.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
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
                                        <a href="dashboard_vend.html"><label class="btn btn-primary active">Vender</label></a>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="menu2" class="tab-pane fade in active"><br>
                                        <ul>
                                            <a><li><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
                                            <a><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
                                            <a><li><span class="glyphicon glyphicon-bullhorn"></span><p> Criar Anúncio</p></li></a>
                                            <a><li><span class="glyphicon glyphicon-list-alt"></span><p> Meus Anúncios</p></li></a>
                                            <a><li id="m4"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputação e Disputas</p></li></a>
                                            <a id="m5"><li class="active"><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
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
                            <a><li>Editar meu Perfil</li></a>
                            <a><li>Editar Minhas Informações</li></a>
                            <a><li>Editar Minhas Informações de Pagamento</li></a>
                            <a><li>Editar Minhas Configurações</li></a>
                        </ul>
                    </div>
                         
                </div>
                </div>        
            <div class="col-sm-9" id="content"  >
            <h2>Cotações</h2>
                <div id='notify' class="notify">
                    
                </div>
            <div class="outterborder">
                <div id="pannel-content">
                    <div id="minhasvend">
                        <ul class="nav nav-tabs nav-justified">
                            <li><a data-toggle="tab" href="#search">Em Aberto <br>&#40;220&#41;</a></li>
                            <li><a data-toggle="tab" href="#freights">Enviadas<br>&#40;34&#41;</a></li>
                            <li class="active"><a data-toggle="tab" href="#freightd">Recebidas <br>&#40;20&#41;</a></li>
                        </ul>
                        <div class="tab-content">
                        <div id="search" class="tab-pane fade">
                        <div class="tab-content">
                           <div class="panel-group">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1"> <span class="glyphicon glyphicon-search"></span> Encontrar Pedidos de Cotação de Frete</a>
                                  </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                  <ul class="list-group">
                                    <li class="list-group-item">Tipo de Carga: 
                                    <div class="btn-group" role="group" aria-label="...">
                                      <label for="normal" class="btn btn-default">
                                                        <input id="normal" class="btn-input"  type="checkbox"> Normal
                                                    </label>
                                      <label for="cviva" class="btn btn-default">
                                                        <input id="cviva" class="btn-input"  type="checkbox"> Carga Viva
                                                    </label>
                                      <label for="ccontrol" class="btn btn-default">
                                                        <input id="ccontrol" class="btn-input"  type="checkbox"> Carga Controlada
                                                    </label>
                                      <label for="tempocontrol" class="btn btn-default">
                                                        <input id="tempocontrol" class="btn-input"  type="checkbox"> Temperatura Controlada
                                                    </label>
                                    </div>
                                   </li>
                                    <li class="list-group-item">Origem: 
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#de-sp">São Paulo</button>
                                      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#de-mg">Minas Gerais</button>
                                      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#de-pr">Paraná</button>
                                    </div>
                                    <div id="de-sp" class="collapse" role="group" aria-label="...">
                                    <div class="btn-group btn-group-xs">
                                    <label class="btn btn-default">
                                         <input id="adamantina" class="btn-input" type="checkbox"> Adamantina &#40;10&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="itu" class="btn-input" type="checkbox"> Itu &#40;1&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="Piracicaba" class="btn-input" type="checkbox"> Piracicaba &#40;3&#41;
                                    </label>
                                    </div>
                                    </div>
                                    <div id="de-mg" class="collapse" role="group" aria-label="...">
                                    <div class="btn-group btn-group-xs">
                                    <label class="btn btn-default">
                                         <input id="adamantina" class="btn-input" type="checkbox"> Belo Horizonte &#40;10&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="itu" class="btn-input" type="checkbox"> Governador Valadares &#40;1&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="Piracicaba" class="btn-input" type="checkbox"> Uberlândia &#40;3&#41;
                                    </label>
                                    </div>
                                    </div>
                                    </li>
                                    <li class="list-group-item">Destino:
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#or-sp">São Paulo</button>
                                      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#or-mg">Minas Gerais</button>
                                      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#or-pr">Paraná</button>
                                    </div>
                                    <div id="or-sp" class="collapse" role="group" aria-label="...">
                                    <div class="btn-group btn-group-xs">
                                    <label class="btn btn-default">
                                         <input id="adamantina" class="btn-input" type="checkbox"> Adamantina &#40;10&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="itu" class="btn-input" type="checkbox"> Itu &#40;1&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="Piracicaba" class="btn-input" type="checkbox"> Piracicaba &#40;3&#41;
                                    </label>
                                    </div>
                                    </div>
                                    <div id="or-mg" class="collapse" role="group" aria-label="...">
                                    <div class="btn-group btn-group-xs">
                                    <label class="btn btn-default">
                                         <input id="adamantina" class="btn-input" type="checkbox"> Belo Horizonte &#40;10&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="itu" class="btn-input" type="checkbox"> Governador Valadares &#40;1&#41;
                                    </label>
                                    <label class="btn btn-default">
                                         <input id="Piracicaba" class="btn-input" type="checkbox"> Uberlândia &#40;3&#41;
                                    </label>
                                    </div>
                                    </div>
                                    </li>
                                    <li class="list-group-item">Distância &#40;est.&#41;:        
  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                 <div id="slider-range"></div></li>
                                  </ul>
                                  <div class="panel-footer btn-default "> <span class="glyphicon glyphicon-repeat"></span> Atualizar Filtro</div>
                                </div>
                              </div>
                            </div>
                                
                            <table class="tabledisplay">
                                <?php foreach($negociacoes as $nego) {?>
                                <tbody class="titem">
                                    <tr class="theader1">
                                        <th>Frete Nº</th>
                                        <th>Categoria</th>
                                        <th>Negociação</th>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Origem</th>
                                        <th>Destino</th>
                                        <th>Distância&#40;est.&#41;</th>
                                        <th>Status</th>
                                        
                                    </tr>      
                                    <tr class="theader2">
                                        
                                        <td><span data-toggle="tooltip" title="Clique para ver detalhes do Frete"><a href="" data-toggle="modal" 
                                                                                                                     data-mapa="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCFylacez159N8j2PIGoaNev9xnh_9IuP8&origin=<?=$this->usuarios_model->cidadeCotacao($nego->usuario2_id)?>&destination=<?=$this->usuarios_model->cidadeCotacao($nego->usuario1_id)?>&avoid=tolls|highways"
                                                                                                                     data-titulo="<?=$this->anuncios_model->pegarTituloPorId($nego->anuncio_id)?>"
                                                                                                                     data-id="<?=$nego->anuncio_id?>"
                                                                                                                     data-origem="<?=$this->usuarios_model->ruaempresa($nego->usuario2_id).' '.$this->usuarios_model->cidadeEstado($nego->usuario2_id)?>"
                                                                                                                     data-destino="<?=$this->usuarios_model->ruaempresa($nego->usuario1_id).' '.$this->usuarios_model->cidadeEstado($nego->usuario1_id)?>"
                                                                                                                     data-complemento="<?=$this->usuarios_model->complemento($nego->usuario1_id)?>"
                                                                                                                     data-distancia="<?=$this->negociacao_model->pegarDistanciaEstimada($this->usuarios_model->cidadeCotacao($nego->usuario2_id),$this->usuarios_model->cidadeCotacao($nego->usuario2_id))?>"
                                                                                                                     data-categorias="<?=$this->anuncios_model->pegarCategorias($nego->anuncio_id)?>"
                                                                                                                     data-categoriafrete="<?=$this->anuncios_model->pegarTransportadoraTipo($nego->anuncio_id);?>"
                                                                                                                     data-act='<?=base_url()?>index.php/dashboard/criarcotacao/<?=$nego->negociacao_id?>'
                                                                                                                     
                                                                                                                     data-target="#freightModal"><?=$nego->anuncio_id?></a></span></td>
                                        <td> <?=$this->anuncios_model->pegarTransportadoraTipo($nego->anuncio_id);?></td>
                                        <td><span data-toggle="tooltip" title="Clique para ver detalhes da Negociação"><a href="" data-toggle="modal" data-target="#dealModal"><?=$nego->negociacao_id?></a></span></td>
                                        <td><span data-toggle="tooltip" title="Clique para ver detalhes do Produto"><a href="" data-toggle="modal" data-target="#productModal"> <?=$this->anuncios_model->pegarTituloPorId($nego->anuncio_id)?></a></span></td>
                                        <td><p><?=$nego->negociacao_qtd?> <?=$this->anuncios_model->pegarUnidadePorId($nego->anuncio_id)?>  </p></td>
                                        <td><p><?=$this->usuarios_model->cidadeEstado($nego->usuario2_id)?></p></td>
                                        <td> <?=$this->usuarios_model->cidadeEstado($nego->usuario1_id)?> </td>
                                        <td><p><?=$this->negociacao_model->pegarDistanciaEstimada($this->usuarios_model->cidadeCotacao($nego->usuario2_id),$this->usuarios_model->cidadeCotacao($nego->usuario2_id))?></p></td>
                                        <td><a data-toggle="tooltip" title="Por gentileza, selecione uma cotação ou aguarde para receber mais.">Em Cotação</a></td>
                                        
                                    </tr>
                                    
                                </tbody><?php }?>
                            </table>
                                 
                                <div class="container bottomnav" >
                                      <?=$paginacao_trans1?>
                                </div>
                            
                        </div>
                    </div>
                           <div id="freightd" class="tab-pane fade in active">
                        <div class="tab-content">
                          
                            <table class="tabledisplay">
                                  <?php foreach($recebidas as $rec){?>
                           <tbody class="titem">
                               
                                    <tr class="theader1">
                                        <th>Frete Nº</th>
                                        <th>Categoria</th>
                                        <th>Negociação</th>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Origem</th>
                                        <th>Destino</th>
                                        <th>Distância&#40;est.&#41;</th>
                                        <th>Status</th>
                                        
                                    </tr>      
                                    <tr class="theader2">
                                        
                                        <td><span data-toggle="tooltip" title="Clique para ver detalhes do Frete"><a href="#"><?=$rec->anuncio_id?></a></span></td>
                                        <td> <?=$this->anuncios_model->pegarTransportadoraTipo($rec->anuncio_id);?></td>
                                        <td><span data-toggle="tooltip" title="Clique para ver detalhes da Negociação"><a href="" data-toggle="modal" data-target="#dealModal"><?=$rec->negociacao_id?></a></span></td>
                                        <td><span data-toggle="tooltip" title="Clique para ver detalhes do Produto"><a href="" data-toggle="modal" data-target="#productModal"> <?=$this->anuncios_model->pegarTituloPorId($rec->anuncio_id)?></a></span></td>
                                        <td><p><?=$rec->negociacao_qtd?> <?=$this->anuncios_model->pegarUnidadePorId($rec->anuncio_id)?>  </p></td>
                                        <td><p><?=$this->usuarios_model->cidadeEstado($rec->usuario2_id)?></p></td>
                                        <td> <?=$this->usuarios_model->cidadeEstado($rec->usuario1_id)?> </td>
                                        <td><p><?=$this->negociacao_model->pegarDistanciaEstimada($this->usuarios_model->cidadeCotacao($rec->usuario2_id),$this->usuarios_model->cidadeCotacao($rec->usuario2_id))?></p></td>
                                        <td><a data-toggle="tooltip" title="Por gentileza, selecione uma cotação ou aguarde para receber mais.">Em Cotação</a></td>
                                        
                                    </tr>
                                </tbody>
                                <tbody class="titem">
                                   
                                    <tr class="theader3" >
                                       <td><p> Cotação Nº</p></td>
                                        <td colspan="3"> Trasportador</td>
                                        <td><p> Prazo para Embarque</p></td>
                                        <td><p> Responsável pela Carga</p></td>
                                        <td colspan="2"><p>Preço Cotado</p></td>
                                        <td>Ações</td>
                                    </tr>
                                     <?php $cot_recebidas = $this->negociacao_model->pegarCotacoesRecebidas($rec->negociacao_id);
                                     foreach($cot_recebidas as $cot){?>
                                    <tr class="tdata">
                                        <td><p><?=$cot->cotacao_id?></p></td>
                                        <td colspan="3"> <a data-toggle="tooltip" title="Clique para ver as informações do transportador."><i class="fa fa-truck" aria-hidden="true"></i> <?=$this->usuarios_model->nomeEmpresa($cot->usuario_id)?></a></td>  
                                        <td><?=$cot->cotacao_embarque?> dias úteis</td>
                                        <td><?php if($cot->cotacao_responsavel == 0){
                                            echo 'Transportadora';
                                        }else{
                                            echo 'Cliente';
                                        }?></td>
                                        <td colspan="2"><p> R$ <?=$cot->cotacao_preco?></p></td>
                                        <td><div class="dropdown show">
                                            <a class="btn btn-primary dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-list" aria-hidden="true"></i>
                                            </a>
                                            <ul id="actiondropdown" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li class=""><a href="#" data-toggle="modal" data-per="aceitar a cotação?" data-act="<?=base_url()?>index.php/dashboard/aceitarcotacao/<?=$rec->negociacao_id?>" data-target="#confirmationModal"><i         class="fa fa-handshake-o" aria-hidden="true"></i> Selecionar Cotação</a></li>
                                                <li><a href="#" data-toggle="modal" data-per="recusar a cotação?" data-act="<?=base_url()?>index.php/dashboard/recusarcotacao/<?=$rec->negociacao_id?>" data-target="#confirmationModal"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Recusar Cotação</a></li>
                                                <li role="separator"><hr class="divider"></li>
                                                <li class="disabled"><a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Agendar Embarque</a></li>
                                            </ul>
                                            </div>
                                        </td>
                                    </tr>
                                     <?php } ?>
                                </tbody>
                             <?php }?>
                            </table>
                                
                                <div class="container bottomnav" >
                                  <?=$paginacao_trans3?>
                                </div>
                            
                        </div>
                    </div>
                        <div id="freights" class="tab-pane fade">
                             <?php foreach($cotacoes as $cot){?>
                        <table class="tabledisplay">
                             
                                    <tbody class="titem">
                                      
                                        <tr class="theader1">
                                       <th>Frete Nº</th>
                                        <th>Categoria</th>
                                        <th>Negociação</th>                    
                                        <th>Origem</th>
                                        <th>Destino</th>
                                        <th>Distância&#40;est.&#41;</th>
                                        <th>Status</th>
                                        <th>Preço</th>
                                        </tr>      
                                        
                                        <tr class="theader2">
                                            
                                        <td><span data-toggle="tooltip" title="Clique para ver detalhes do Frete"><a><?=$cot->cotacao_id?></a></span></td>
                                        <td> <?=$cot->cotacao_categoria?></td>
                                        <td><span ><a><?=$cot->negociacao_id?></a></span></td>
                                        <td><p><?=$cot->cotacao_origem?></p></td>
                                        <td> <?=$cot->cotacao_destino?> </td>
                                        <td><p><?=$cot->cotacao_distancia?></p></td>
                                        <td><a data-toggle="tooltip"><?php if($cot->cotacao_finalizada == 1){
                                            echo "Finalizada";
                                        }else{
                                            echo "Em Cotação";
                                        }?></a></td>
                                        <td>R$<?=$cot->cotacao_preco?></td>
                                            <?php }?>
                                    </tbody>
                                    
                                
                                </table>  
                        <div class="container bottomnav" >
                                <?=$paginacao_trans2?>
                        </div>
                            </div>
                        </div>
                    </div>           
                </div>
                </div>
                </div>
            <div class="col-sm-1" >    
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
                                        <p><b>Pagamento:</b><img height="25px;" src="<?=base_url()?>assets/images/ico/cards.png"></p>
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
                                            <td colspan="2"><img class="productimg" src="images/placeholders/mock1.jpg" height="100" width="100"></td>
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
                                <p> 100</p><p> Sacas &#40;sc.&#41; </p>
                                <h4>Preço Unitário</h4>
                                <p> R$ 100,00</p>
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
                                    <td><select class="logistics">
                                        <option>Cotação Nº 19100 - Heavy Charge Logística</option>
                                        <option>Cotação Nº 19230 - Pedro &amp; Bino Logistics</option>
                                        </select></td>
                                    <td><select class="logistics">
                                        <option>R$ 1.000,00</option>
                                        <option>R$ 1.200,00</option>
                                        </select></td>
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
                                <button href="#" data-toggle="modal" data-target="#confirmationModal"><span class="glyphicon glyphicon-floppy-saved"></span> Gravar Alterações no Frete</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- /MODAL DETALHE DA NEGOCIAÇÃO-------------------->
                <div id="freightModal" class="modal fade">
                                       
                    <!-- Modal Contents -->
                    <div class="row">
                    <div class="col-sm-3" data-dismiss="modal"></div>
                    <div class="col-sm-3 modalbg col" >
                    
                                <!-- show map -->
                                <div class="row">
                                    <div id="map">
                                        <iframe id="mapa"
  width="420"
  height="450"
  frameborder="0" style="border:0"
  src="" allowfullscreen>
</iframe>
                                    </div>
                                </div>
                    </div>		
                    <div class="col-sm-4 modalbg col">
                        <div>
                            <!-- The Close Button --> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Fechar">
                                <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                            </button>
                        </div>
                        <br>
                        <br>
                        <div class="product-information"><!--/product-information-->                            
								<div id="product-information">
                                    
                                                                    <h2 id="itemtitle">Frete <span id="id">12394</span>: <span id="titulo">Soja em Saca</span></h2>
                                    <hr>
                                    <div>
                                        <p><b>Origem:</b><span id="origem">Av. Marechal Deodoro 33 <em>Piracicaba - SP</em></span></p>
                                        <p><b>Destino:</b><span id="destino">Rua Charlinho de Menezes, 970 <em>Lins - SP</em></span></p>
                                        <p><b>Complemento:</b><span id="complemento"></span></p>
                                        <p><b>Distância&#40;estimada&#41;:</b><span id="distancia">233 KM</span></p>
                                        <p><b>Peso:</b> <span id="peso">Não Informado</span></p>
                                        <p><b>Categoria do Produto:</b></p>
                                        <span id="categorias"></span>
                                        <p><b>Categoria de Frete:</b> <span id='categoriafrete'>Normal</span></p>
                                    </div>
                                    <hr>
                                    <div id="buyingcond">
                                        <p><b>Pagamento:</b><img height="25px;" src="<?=base_url()?>assets/images/ico/cards.png"></p>      
                                    </div>
                                        
								</div>
                            </div><!--/product-information-->
						</div>
                    <div class="col-sm-2" data-dismiss="modal"></div>
                    </div>
                    <div class="row">
                    <div class="col-sm-3" data-dismiss="modal"></div>
                    <div id="category" class="category-tab shop-details-tab col-sm-7 modalbg col"><!--category-tab-->
                    
                        <h3> Ofereça uma Cotação:</h3>
                        <form class="criarcot" id='cotacao' method='post'>
                         <div class="btn-group btn-group-justified">
                          <div class="btn btn-default">Prazo para Embarque:
                          <div class="input-group">
                          <input type="number" name="prazo" class="form-control">
                          <span class="">dias úteis</span>
                        </div>
                            </div>
                          <div class="btn btn-default">Responsável pela Carga: 
                          <br>
                          <select name="responsavel">
                              <option value='0' selected>Transportadora</option>
                              <option value='1'>Contratante</option>
                          </select>
                          
                          </div>
                          <div class="btn btn-default">Preço da sua Cotação:
                          <br>
                          <input name='preco' type="number" class="form-control">
                          </div>
                             <div class="btn btn-default" type="submit"> <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Enviar nova Cotação</button></div>
                        </div>
                       </form>
			</div>
                    <div class="col-sm-2" data-dismiss="modal"></div>
                        </div>
                </div><!-- FREIGHT MODAL ------------------------------>
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
            </div>    
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
	<footer id="footer" ><!--Footer-->		
	</footer><!--/Footer-->
	


      <script src="<?=base_url()?>assets/js/jquery.js"></script>
      <script src="<?=base_url()?>assets/js/price-range.js"></script>
      <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
      <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
      <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
      <script src="<?=base_url()?>assets/js/main.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script src="<?=base_url()?>assets/js/dashboard_freight.js"></script>
       <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 1, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.values[ 0 ] + " Km -" + ui.values[ 1 ] + "Km"   );
      }
    });
    $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + "Km - " +
       $( "#slider-range" ).slider( "values", 1 ) + " Km" );
  } );
  </script>
  <form id='url' action='<?=base_url()?>index.php/dashboard/atualizarNotificacoesTransportes'/>
  <script>
      $(document).ready(function () {


    carregarnotificacoes();
    setInterval(function () {
        carregarnotificacoes();
    }, 1000);
});
function carregarnotificacoes() {
    var url;
    url = $('#url').attr('action');
    jQuery.post(url, function (data) {
        $("#notify").empty().append(data);
    });
}

  
  
  $('#freightModal').on('show.bs.modal', function (event) {
		 var button = $(event.relatedTarget);// Button that triggered the modal
                 var mapa = button.data('mapa');
                 var id = button.data('id');
                 var titulo = button.data('titulo');
                 var origem = button.data('origem');
                 var destino = button.data('destino');
                 var complemento = button.data('complemento');
                 var distancia = button.data('distancia');
                 var peso = button.data('peso');
                 var categorias = button.data('categorias');
                 var categoriafrete = button.data('categoriafrete');
                 var act = button.data('act');
         

                 
                 
                  // inserir na o nome na pergunta de confirmação dentro da modal
		 var modal = $(this)
		 modal.find('#mapa').attr('src',mapa);
                 modal.find('#id').text(id);
                 modal.find('#titulo').text(titulo);
                 modal.find('#origem').text(origem);
                 modal.find('#destino').text(destino);
                 modal.find('#complemento').text(complemento);
                 modal.find('#distancia').text(distancia);
                 modal.find('#peso').text(peso);
                 modal.find('#categorias').text(categorias);
                 modal.find('#categoriafrete').text(categoriafrete);
                 modal.find('#cotacao').attr('action',act);;
                          
                 
		  
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