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
	<link href="<?=base_url()?>assets/css/dashboard_profile.css" rel="stylesheet">
    
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
                                        <a><label class="btn btn-primary active" id="comprar">Comprar</label></a>
                                        <a href="dashboard_vend.html"><label class="btn btn-primary">Vender</label></a>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="menu1" class="tab-pane fade in active"><br>
                                        <ul>
                                            <a><li><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
                                            <a href=""><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
                                            <a><li><span class="glyphicon glyphicon-file"></span><p> Pedir Orçamento</p></li></a>
                                            <a><li><span class="glyphicon glyphicon-list-alt"></span><p> Meus Orçamentos</p></li></a>
                                            <a><li id="m1"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputo e Disputas</p></li></a>
                                            <a><li id="m2"><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
                                            <a><li class="active" id="m3"><span class="glyphicon glyphicon-user"></span><p> Perfil e Configurações</p></li></a>
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
               <div class="col-sm-6">
                   
                    <div class="tab-pane fade in" id="companyprofile" >
                                <h2 id="companyname">Nome da Empresa</h2>
                                <img id="companyprofilepic" src="<?=base_url()?>assets/images/placeholders/profile1.jpg" height="100px;">
                                
                                <table>
                                   <tr> <td  colspan="4"><h3> Informações de Negócios</h3></td></tr>
                                        <tr>
                                    <tr>
                                    <td class="feature"> Tipo de Negócio</td>
                                    <td class="pdata"> Comércio </td>
                                    <td class="feature">Principais Produtos</td>
                                    <td class="pdata"> Implementos Agrícolas </td>                                    
                                    </tr>
                                       <tr> <td  colspan="4"><h3> Informações de Endereço</h3></td></tr>
                                        <tr>
                                    <td class="feature">Estado</td>
                                    <td class="pdata">São Paulo</td>
                                    <td class="feature">Município</td>
                                    <td class="pdata"> Itirapina </td>
                                    </tr>
                                         <tr> <td  colspan="4"><h3> Informações de Contato</h3></td></tr>
                                        <tr>
                                          <tr>
                                    <td class="feature">E-mail</td>
                                    <td class="pdata">cargapesada@gmail.com</td>
                                    <td class="feature">Telefone</td>
                                    <td class="pdata"> 016-332402454 </td>
                                    </tr>
                                    <tr>
                                    <td class="feature">Celular/ Whatsapp</td>
                                    <td class="pdata"> 016-99767-8976 </td>
                                    </tr>
                                </table>
                                                                
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
                    
                </div>
            </div>
               <div class="col-sm-4">
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
            </div>
        </div>
            </section>
            <script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
   <script src="<?=base_url()?>assets/js/dashboard.js"></script>
            
            </body></html>