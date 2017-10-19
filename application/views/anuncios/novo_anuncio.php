<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Criar Anúncio | Agrobuy</title>
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
  <ul id="pills0" class="nav nav-pills nav-justified">
    <li id="step1" class="active"><a data-toggle="pill" href="#category-tab">1. O que está anunciando?</a></li>
      <li id="pl1" class="progressline"></li>
    <li id="step2"><a data-toggle="pill" href="#sub-category-tab" >2.Categoria do seu Anúncio</a></li>
      <li id="pl2" class="progressline"></li>
    <li id="step3"><a data-toggle="pill" href="#product-details-tab">3. Descreva seu Anúncio</a></li>
      <li id="pl3" class="progressline"></li>
    <li><a data-toggle="pill" href="#publish-tab">4. Confirmar e Publicar!</a></li>
  </ul>
  
  <div class="tab-content" style="margin: 0px;padding: 0px;">
    <div id="category-tab" class="tab-pane fade in active" >
     <div class="row">
                <h2> O que você está anunciando?</h2>
                <div id="prodagri" class="table-responsive">
                    <a id="ca1" href=""><div id="prodagri1">
                    <h3 id="cat1"> Produtos Agrícolas</h3>
                    <img class="catimage" src="<?=base_url()?>assets/images/placeholders/cat.jpg" width="160px;">
                    </div></a>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Exemplos:</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Produção Vegetal</td>
                            <td> Arroz, Café, Trigo, Frutas, Legumes</td>
                        </tr>
                        <tr>
                            <td> Produção Animal</td>
                            <td> Bovinos, Leite Cru, Suínos, Aves, Ovos</td>
                        </tr>
                        <tr>
                            <td> Produção Florestal</td>
                            <td> Silvicultura, Extração Vegetal</td>
                        </tr>
                        <tr>
                            <td> Pesca e Aquicultura</td>
                            <td> Peixes, Crustáceos</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div id="insumos" class="table-responsive">
                    <a id="ca2" href=""><div id="insumos1"><h3 id="cat2">Insumos</h3>
                    <img class="catimage" src="<?=base_url()?>assets/images/placeholders/cat.jpg" width="160px;"></div></a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Exemplos: </th>
                            <th>  </th>
                        </tr>
                        </thead>
                            <tbody>
                        <tr>
                            <td> Mudas e Sementes</td>
                            <td> Sementes, Mudas Frutíferas, Mudas Florestais</td>
                        </tr>
                        <tr>
                            <td> Defensivos e Fertilizantes, Químicos e Biológicos</td>
                            <td> Adubos e Fertilizantes, Defensivos Agrícolas, Controles Biológicos</td>
                        </tr>
                        <tr>
                            <td> Máquinas, Equipamentos e Ferramentas</td>
                            <td> Máquinas e Implementos Agrícolas, Peças, Ferramentas, Irrigação</td>
                        </tr>
                        <tr>
                            <td> Rações, Suplementos e Farmacêuticos</td>
                            <td> Rações, Silagem, Remédios</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div id="prodbentran" class="table-responsive">
                    <a id="ca3" href=""><div id="prodbentran1" >
                    <h3 id="cat3"> Produtos Beneficiados e Transformados</h3>
                    <img class="catimage1" src="<?=base_url()?>assets/images/placeholders/cat.jpg" width="160px;">
                    </div></a>
                        <table class="table table-striped">
                    <thead>
                        <tr>
                            <th > Exemplos: </th>
                            <th> </th>
                            <th> </th>
                            <th> </th>
                        </tr>
                        <tr>
                            <th colspan="2"> Alimentares
                            </th>
                            <th colspan="2"> Não-alimentares
                            </th>
                        </tr>
                          
                        </thead>
                        <tbody>
                        <tr>
                            <td> Alimentos Beneficiados ou Transformados</td>
                            <td> Açúcares, Arroz em Saco, Óleos e Gorduras, Farinhas</td>
                            <td> Artefatos de Couro e Fabricação de Calçados</td>
                            <td> Couro Cru, Selas, Solas e Saltos</td>
                        </tr>
                        <tr>
                            <td> Carnes e Laticínios</td>
                            <td> Carne Bovina, Leite Pasteurizado, Queijos</td>
                            <td> Celulose, Papel e Produtos de Papel</td>
                            <td> Papel, Celulose</td>
                        </tr>
                        <tr>
                            <td> Polpas, Sucos, Extratos e Bebidas</td>
                            <td> Suco Concentrado de Laranja</td>
                            <td> Fibras, Têxteis e Vestuário</td>
                            <td> Algodão para Tecelagem, Linhas</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> Combustíveis e Bioenergia</td>
                            <td> Etanol, Biodiesel</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> Produtos do Fumo</td>
                            <td> Fumo Seco Enrolado ou Picado</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> Produtos da Madeira</td>
                            <td> Móveis, Carvão Vegetal</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div id="servprof" class="table-responsive">
                    <a id="ca4" href=""><div id="servprof1">
                    <h3 id="cat4"> Serviços</h3>
                    <img class="catimage" src="<?=base_url()?>assets/images/placeholders/cat.jpg" width="160px;">
                        </div></a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Exemplos:  </th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Transportes</td>
                            <td> Fretes, Fretes de Animais Vivos, Fretes de Produtos Controlados</td>
                        </tr>
                        <tr>
                            <td> Armazenamento</td>
                            <td> Armazenagem em Silos, Armazenagem em Barracões</td>
                        </tr>
                        <tr>
                            <td> Intermediação Financeira e Seguros</td>
                            <td> Crédito Rural, Seguro de Safra, Seguro de Carga</td>
                        </tr>
                        <tr>
                            <td> Consultorias e Recomendações</td>
                            <td> Consultoria Agrícola, Consultoria Agroindustrial</td>
                        </tr>
                        <tr>
                            <td> Engenharia, Testes/Análises Técnicas e P &amp; D</td>
                            <td> Análises de Solo, Experimentos, Projetos de Irrigação</td>
                        </tr>
                        <tr>
                            <td> Serviços Operacionais</td>
                            <td> Serviço de Colheita, Aluguel de Máquinas</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>  
    </div>
    <div id="sub-category-tab" class="tab-pane fade">
      <div>
          <h2>Em qual categoria se classifica seu anúncio?</h2>
          
          <hr>
          <button id="ca-1" class="btn btn-radio">Voltar</button>
          <br>
          <form id="anunCategoria" method="post" action='<?= base_url()?>index.php/anuncios/fazerCadastroAnuncio'>
                    <select multiple size="26" id="filter1" name="filtro1" class="categoryfilter" style="height:220px;">
                        <option id="0" value="0" class="stfilter">Produção Vegetal</option>
                        <option id="1" value="1" class="stfilter">Produção Animal</option>
                        <option id="2" value="2" class="stfilter">Produção Florestal</option>
                        <option id="3" value="3" class="stfilter">Pesca e Aquicultura</option>
                        <option id="4" value="4" class="stfilter">Sementes e Mudas</option>
                        <option id="5" value="5" class="stfilter">Defensivos e Fertilizantes, Químicos e Biológicos</option>
                        <option id="6" value="6" class="stfilter">Máquinas, Equipamentos e Ferramentas</option>
                        <option id="7" value="7" class="stfilter">Rações, Suplementos e Farmacêuticos</option>
                        <option id="8" value="8" class="stfilter">Alimentos Beneficiados ou Transformados</option>
                        <option id="9" value="9" class="stfilter">Carnes e Laticínios</option>
                        <option id="10" value="10" class="stfilter">Polpas, Sucos, Extratos e Bebidas</option>
                        <option id="11" value="11" class="stfilter">Artefatos de Couro e Fabricação de Calçados</option>
                        <option id="12" value="12" class="stfilter">Celulose, Papel e Produtos de Papel</option>
                        <option id="13" value="13" class="stfilter">Fibras, Têxteis e Vestuário</option>
                        <option id="14" value="14" class="stfilter">Combustíveis e Bioenergia</option>
                        <option id="15" value="15" class="stfilter">Produtos do Fumo</option>
                        <option id="16" value="16" class="stfilter">Produtos da Madeira</option>
                        <option id="17" value="17" class="stfilter">Outros Produtos</option>
                        <option id="18" value="18" class="stfilter">Transportes</option>
                        <option id="19" value="19" class="stfilter">Armazenamento</option>
                        <option id="20" value="20" class="stfilter">Intermediação Financeira e Seguros</option>
                        <option id="21" value="21" class="stfilter">Consultorias e Recomendações</option>
                        <option id="22" value="22" class="stfilter">Propriedades</option>
                        <option id="23" value="23" class="stfilter">Engenharia, Testes/Análises Técnicas e P &amp; D</option>
                        <option id="24" value="24" class="stfilter">Serviços Operacionais</option>
                        <option id="25" value="25" class="stfilter">Outros Serviços</option>
                    </select>
                    <select multiple size="26" id="filter2" name="filtro2" class="categoryfilter"  style="height:220px;">
                    
                        <option id="0a" value="0" class="ndfilter c0">Arroz, Trigo e Outros Cereais</option>
                        <option id="0b" value="1" class="ndfilter c0">Café em Grão</option>
                        <option id="0c" value="2" class="ndfilter c0 final">Laranja</option>
                        <option id="0d" value="3" class="ndfilter c0 final">Cana-de-açúcar</option>
                        <option id="0e" value="4" class="ndfilter c0 final">Milho em Grão</option>
                        <option id="0f" value="5" class="ndfilter c0 final">Soja  em Grão</option>
                        <option id="0g" value="6" class="ndfilter c0">Algodão</option>
                        <option id="0h" value="7" class="ndfilter c0">Frutas</option>
                        <option id="0i" value="8" class="ndfilter c0">Legumes</option>
                        <option id="0j" value="9" class="ndfilter c0">Verduras</option>
                        <option id="0k" value="10" class="ndfilter c0">Tubérculos</option>
                        <option id="0l" value="11" class="ndfilter c0">Oleaginosas e Sementes</option>
                        <option id="0m" value="111" class="ndfilter c0 final">Demais Produtos Agrícolas</option>

                        <option id="1a" value="12" class="ndfilter c1">Bovinos</option>
                        <option id="1b" value="13" class="ndfilter c1">Leite Cru</option>
                        <option id="1c" value="14" class="ndfilter c1">Suínos</option>
                        <option id="1d" value="15" class="ndfilter c1">Aves</option>
                        <option id="1e" value="151" class="ndfilter c1">Ovos</option>
                        <option id="1f" value="16" class="ndfilter c1">Outros Animais Vivos</option>
                        <option id="1g" value="17" class="ndfilter c1">Outros Produtos de Origem Animal</option>

                        <option id="2a" value="18" class="ndfilter c2">Silvicultura</option>
                        <option id="2b" value="19" class="ndfilter c2">Extração Vegetal</option>
                        
                        <option id="3a" value="20" class="ndfilter c3">Peixes</option>
                        <option id="3b" value="21" class="ndfilter c3">Moluscos</option>
                        <option id="3c" value="22" class="ndfilter c3">Crustáceos</option>
                        <option id="3d" value="23" class="ndfilter c3">Demais Produtos da Pesca e Aquicultura</option>

                        <option id="4a" value="Sementes" class="ndfilter c4 final">Sementes</option>
                        <option id="4b" value="Mudas Frutíferas" class="ndfilter c4 final">Mudas Frutíferas</option>
                        <option id="4c" value="Mudas Florestais" class="ndfilter c4 final">Mudas Florestais</option>
                        <option id="4d" value="Demais mudas" class="ndfilter c4 final">Demais Mudas</option>

                        <option id="5a" value="24" class="ndfilter c5">Adubos e Fertilizantes</option>
                        <option id="5b" value="25" class="ndfilter c5">Defensivos Agrícolas</option>
                        <option id="5c" value="26" class="ndfilter c5">Controles Biológicos</option>
                        <option id="5d" value="Demais Químicos Orgânicos" class="ndfilter c5 final">Demais Químicos Orgânicos</option>
                        <option id="5e" value="Demais Químicos Inorgânicos" class="ndfilter c5 final">Demais Químicos Inorgânicos</option>

                        <option id="6a" value="27" class="ndfilter c6">Máquinas Agrícolas</option>
                        <option id="6b" value="28" class="ndfilter c6">Máquinas e Veículos de Transporte</option>
                        <option id="6c" value="29" class="ndfilter c6">Implementos Agrícolas</option>
                        <option id="6d" value="30" class="ndfilter c6">Peças</option>
                        <option id="6e" value="31" class="ndfilter c6">Instalações Rurais</option>
                        <option id="6f" value="32" class="ndfilter c6">Irrigação, Metereologia e Agricultura de Precisão</option>
                        <option id="6g" value="33" class="ndfilter c6">Equipamentos, Ferramentas e EPIs</option>

                        <option id="7a" value="34" class="ndfilter c7">Rações e Outros Produtos Alimentares</option>
                        <option id="7b" value="35" class="ndfilter c7">Farmacêuticos para Animais</option>
                        
                        <option id="8a" value="36" class="ndfilter c8">Açúcares e Doces</option>
                        <option id="8b" value="37" class="ndfilter c8">Arroz Beneficiado e Derivados</option>
                        <option id="8c" value="38" class="ndfilter c8">Café Beneficiado e Derivados</option>
                        <option id="8d" value="39" class="ndfilter c8">Trigo, Mandioca ou Milho Beneficiados e Derivados</option>
                        <option id="8e" value="40" class="ndfilter c8">Óleos e Gorduras Vegetais e Animais</option>
                        <option id="8f" value="Derivados dos Demais Vegetais" class="ndfilter c8 final">Derivados dos Demais Vegetais</option>
                        
                        <option id="9a" value="41" class="ndfilter c9">Carne Bovina</option>
                        <option id="9b" value="Carne Suína" class="ndfilter c9 final">Carne Suína</option>
                        <option id="9c" value="Carne de Aves" class="ndfilter c9 final">Carne de Aves</option>
                        <option id="9d" value="Pescado Industrializado" class="ndfilter c9 final">Pescado Industrializado</option>
                        <option id="9e" value="Carnes de Outros Animais" class="ndfilter c9 final">Carnes de Outros Animais</option>
                        <option id="9f" value="42" class="ndfilter c9">Leite Pasteurizado</option>
                        <option id="9g" value="43" class="ndfilter c9">Laticínios</option>
                        
                        <option id="10a" value="Concentrados de Frutas"  class="ndfilter c10 final">Concentrados de Frutas</option>
                        <option id="10b" value="Concentrados à base de Verduras" class="ndfilter c10 final">Concentrados à base de Verduras</option>
                        <option id="10c" value="Concentrados à base de Outros Vegetais" class="ndfilter c10 final">Concentrados à base de Outros Vegetais</option>
                        <option id="10d" value="Demais Ingredientes para Sucos e Bebidas" class="ndfilter c10 final">Demais Ingredientes para Sucos e Bebidas</option>
                        
                        <option id="11a" value="44" class="ndfilter c11">Artefatos de Couro</option>
                        <option id="11b" value="45" class="ndfilter c11">Insumos para Calçados</option>
                        
                        <option id="12a" value="Celulose" class="ndfilter c12 final">Celulose</option>
                        <option id="12b" value="Papel" class="ndfilter c12 final">Papel</option>
                        <option id="12c" value="Demais Derivados da Celulose e Papel" class="ndfilter c12 final">Demais Derivados da Celulose e Papel</option>
                        
                        <option id="13a" value="Fios" class="ndfilter c13 final">Fios</option>
                        <option id="13b" value="Fibras Têxteis Beneficadas" class="ndfilter c13 final">Fibras Têxteis Beneficiadas</option>
                        <option id="13c" value="Produtos para Vestuário" class="ndfilter c13 final">Produtos para Vestuário</option>
                        <option id="13d" value="Demais Produtos Têxteis" class="ndfilter c13 final">Demais Produtos Têxteis</option>
                        
                        <option id="14a" value="Etanol" class="ndfilter c14 final">Etanol</option>
                        <option id="14b" value="Biosdiesel" class="ndfilter c14 final">Biodiesel</option>
                        <option id="14c" value="Bagaços" class="ndfilter c14 final">Bagaços</option>
                        <option id="14e" value="Demais Produtos de Bioenergia" class="ndfilter c14 final">Demais Produtos de Bioenergia</option>
                        
                        <option id="15a" value="Fumo Seco Enrolado ou Picado" class="ndfilter c15 final">Fumo Seco  Enrolado ou Picado</option>
                        <option id="15b" value="Fumo Curtido" class="ndfilter c15 final">Fumo Curtido </option>
                        <option id="15c" value="Diversos Artigos do Fumo" class="ndfilter c15 final">Diversos Artigos do Fumo</option>
                        
                        <option id="16a" value="Madeiras sob Encomenda" class="ndfilter c16 final">Madeiras sob Encomenda</option>
                        <option id="16b" value="Móveis, Acessóriso, Componentes e Ferragens" class="ndfilter c16 final">Móveis, Acessórios, Componentes e Ferragens</option>
                        <option id="16c" value="Carvão Vegetal" class="ndfilter c16 final">Carvão Vegetal</option>
                        <option id="16d" value="Demais Produtos da Madeira" class="ndfilter c16 final">Demais Produtos da Madeira</option>
                        
                        <option id="17a" value="Penas e Plumas" class="ndfilter c17 final">Penas e Plumas</option>
                        <option id="17b" value="Chifres e Cascos" class="ndfilter c17 final">Chifres e Cascos</option>
                        <option id="17c" value="Borracha" class="ndfilter c17 final">Borracha</option>
                        <option id="17d" value="Demais Produtos" class="ndfilter c17 final">Demais Produtos</option>
                        
                        <option id="18a" value="Rodoviário" class="ndfilter c18">Rodoviário</option>
                        <option id="18b" value="Aéreo" class="ndfilter c18">Aéreo</option>
                        <option id="18c" value="Outros Modais" class="ndfilter c18 final">Outros Modais</option>
                        
                        <option id="19a" value="de Grãos em Silos" class="ndfilter c19 final">de Grãos em Silos</option>
                        <option id="19b" value="Outros Armazenamentos" class="ndfilter c19 final">Outros Armazenamentos</option>
                        
                        <option id="20a" value="Crédito" class="ndfilter c20 final">Crédito</option>
                        <option id="20b" value="Empréstimos" class="ndfilter c20 final">Empréstimos</option>
                        <option id="20c" value="Arrendamento Mercantil(Leasing)" class="ndfilter c20 final">Arrendamento Mercantil(Leasing)</option>
                        <option id="20d" value="46" class="ndfilter c20">Seguros</option>
                        <option id="20e" value="Demais Produtos de Intermediação Financeira" class="ndfilter c20 final">Demais Produtos de Intermediação Financeira</option>
                        
                        <option id="21a" value="Empresariais" class="ndfilter c21 final">Empresariais</option>
                        <option id="21b" value="Individuais" class="ndfilter c21 final">Individuais</option>
                        
                        <option id="22a" value="Aluguéis" class="ndfilter c22 final">Aluguéis</option>
                        <option id="22b" value="Parcerias" class="ndfilter c22 final">Parcerias</option>
                        <option id="22c" value="Arremdamentos" class="ndfilter c22 final">Arrendamentos</option>
                        
                        <option id="23a" value="47" class="ndfilter c23">Testes/ Análises Técnicas</option>
                        <option id="23a" value="Projetos de Irrigação" class="ndfilter c23 final">Projetos de Irrigação</option>
                        <option id="23a" value="Pesquisa e Desenvolvimento" class="ndfilter c23 final">Pesquisa e Desenvolvimento</option>
                        
                        <option id="24a" value="Serviços de Plantio" class="ndfilter c24 final">Serviços de Plantio</option>
                        <option id="24b" value="Serviços de Colheita" class="ndfilter c24 final">Serviços de Colheita</option>
                        <option id="24c" value="Serviços de Aplicação de Defensivos" class="ndfilter c24 final">Serviços de Aplicação de Defensivos</option>
                        
                        <option id="25a" value="Demais Serviços" class="ndfilter c25 final">Demais Serviços</option>


                    </select>
                    <select multiple size="26" id="filter3" name="filtro3" class="categoryfilter" style="height:220px; final">
                        
                    <option id="0a0" value="Arroz em Casca" class="rdfilter cc0 final">Arroz em Casca</option>
                    <option id="0a1" value="Trigo em Casca" class="rdfilter cc0 final">Trigo em Casca</option>
                    <option id="0a2" value="Cevada" class="rdfilter cc0 final">Cevada</option>
                    <option id="0a3" value="Sorgo" class="rdfilter cc0 final">Sorgo</option>
                    <option id="0a4" value="Milheto" class="rdfilter cc0 final">Milheto</option>
                    <option id="0a5" value="Demais Cereais" class="rdfilter cc0 final">Demais Cereais</option>

                    <option id="0b0" value="Café Arábica em Grão" class="rdfilter cc1 final">Café Arábica em Grão</option>
                    <option id="0b1" value="Café Robusta em Grão" class="rdfilter cc1 final">Café Robusta em Grão</option>
                        
                    <option id="0g0" value="Algodão em Caroço" class="rdfilter cc6 final">Algodão em Caroço</option>
                    <option id="0g1" value="Algodão em Pluma" class="rdfilter cc6 final">Algodão em Pluma</option>
                        
                    <option id="0h0" value="Abacaxi" class="rdfilter cc7 final">Abacaxi</option>
                    <option id="0h1" value="Banana" class="rdfilter cc7 final">Banana</option>
                    <option id="0h2" value="Coco-Da-Baía" class="rdfilter cc7 final">Coco-Da-Baía</option>
                    <option id="0h3" value="Goiaba" class="rdfilter cc7 final">Goiaba</option>
                    <option id="0h4" value="Limão" class="rdfilter cc7 final">Limão</option>
                    <option id="0h5" value="Maçã" class="rdfilter cc7 final">Maçã</option>
                    <option id="0h6" value="Mamão" class="rdfilter cc7 final">Mamão</option>
                    <option id="0h7" value="Manga" class="rdfilter cc7 final">Manga</option>
                    <option id="0h8" value="Maracujá" class="rdfilter cc7 final">Maracujá</option>
                    <option id="0h9" value="Melancia" class="rdfilter cc7 final">Melancia</option>
                    <option id="0h10" value="Melão" class="rdfilter cc7 final">Melão</option>
                    <option id="0h11" value="Morango" class="rdfilter cc7 final">Morango</option>
                    <option id="0h12" value="Pêssego" class="rdfilter cc7 final">Pêssego</option>
                    <option id="0h13" value="Tangerina, Bergamota ou Mexirica" class="rdfilter cc7 final">Tangerina, Bergamota Ou Mexirica</option>
                    <option id="0h14" value="Uva(Mesa)" class="rdfilter cc7 final">Uva(Mesa)</option>
                    <option id="0h15" value="Uva(Vinho Ou Suco)" class="rdfilter cc7 final">Uva(Vinho Ou Suco)</option>

                    <option id="0i0" value="Abobrinha" class="rdfilter cc8 final">Abobrinha</option>
                    <option id="0i1" value="Beringela" class="rdfilter cc8 final">Beringela</option>
                    <option id="0i2" value="Beterraba" class="rdfilter cc8 final">Beterraba</option>
                    <option id="0i3" value="Cebola" class="rdfilter cc8 final">Cebola</option>
                    <option id="0i4" value="Cenoura" class="rdfilter cc8 final">Cenoura</option>
                    <option id="0i5" value="Chuchu" class="rdfilter cc8 final">Chuchu</option>
                    <option id="0i6" value="Feijão De Cor Em Grão" class="rdfilter cc8 final">Feijão De Cor Em Grão</option>
                    <option id="0i7" value="Feijão Preto Em Grão" class="rdfilter cc8 final">Feijão Preto Em Grão</option>
                    <option id="0i8" value="Feijão-Fradinho, Caupi, De Corda Ou Macáçar" class="rdfilter cc8 final">Feijão-Fradinho, Caupi, De Corda Ou Macáçar</option>
                    <option id="0i9" value="Jiló" class="rdfilter cc8 final">Jiló</option>
                    <option id="0i10" value="Maxixe" class="rdfilter cc8 final">Maxixe</option>
                    <option id="0i11" value="Milho Verde(Espiga)" class="rdfilter cc8 final">Milho Verde(Espiga)</option>
                    <option id="0i12" value="Pepina" class="rdfilter cc8 final">Pepino</option>
                    <option id="0i13" value="Pimentão" class="rdfilter cc8 final">Pimentão</option>
                    <option id="0i14" value="Quiabo" class="rdfilter cc8 final">Quiabo</option>
                    <option id="0i15" value="Tomate Rasteiro (Industrial)" class="rdfilter cc8 final">Tomate Rasteiro (Industrial)</option>
                    <option id="0i16" value="Tomate(Estaqueado)" class="rdfilter cc8 final">Tomate(Estaqueado)</option>
                    <option id="0i17" value="Vagem(Feijão Vagem)" class="rdfilter cc8 final">Vagem(Feijão Vagem)</option>

                    <option id="0j0" value="Agrião" class="rdfilter cc9 final">Agrião</option>
                    <option id="0j1" value="Alface" class="rdfilter cc9 final">Alface</option>
                    <option id="0j2" value="Brócolis" class="rdfilter cc9 final">Brócolis</option>
                    <option id="0j3" value="Cebolinha" class="rdfilter cc9 final">Cebolinha</option>
                    <option id="0j4" value="Coentro" class="rdfilter cc9 final">Coentro</option>
                    <option id="0j5" value="Couve" class="rdfilter cc9 final">Couve</option>
                    <option id="0j6" value="Couve-Flor" class="rdfilter cc9 final">Couve-Flor</option>
                    <option id="0j7" value="Espinafre" class="rdfilter cc9 final">Espinafre</option>
                    <option id="0j8" value="Repolho" class="rdfilter cc9 final">Repolho</option>
                    <option id="0j9" value="Salsa" class="rdfilter cc9 final">Salsa</option>
                    
                    <option id="0k0" value="Batata Doce" class="rdfilter cc10 final">Batata Doce</option>
                    <option id="0k1" value="Batata Inglesa" class="rdfilter cc10 final">Batata Inglesa</option>
                    <option id="0k2" value="Batata-Baroa(Mandioquinha" class="rdfilter cc10 final">Batata-Baroa(Mandioquinha)</option>
                    <option id="0k3" value="Inhame" class="rdfilter cc10 final">Inhame</option>
                    <option id="0k4" value="Mandioca(Aipim Ou Macaxeira)" class="rdfilter cc10 final">Mandioca(Aipim Ou Macaxeira)</option>
                    <option id="0k5" value="Nabo" class="rdfilter cc10 final">Nabo</option>
                    <option id="0k6" value="Rabanete" class="rdfilter cc10 final">Rabanete</option>

                    <option id="0l0" value="Amendoim Em Casca" class="rdfilter cc11 final">Amendoim Em Casca</option>
                    <option id="0l1" value="Girassol(Semente)" class="rdfilter cc11 final">Girassol(Semente)</option>
                    <option id="0l2" value="Cacau(Amêndoa)" class="rdfilter cc11 final">Cacau(Amêndoa)</option>
                        
                    <option id="1a0" value="Nelore" class="rdfilter cc12 final">Nelore</option>
                    <option id="1a1" value="Jersey" class="rdfilter cc12 final">Jersey</option>
                    <option id="1a2" value="Gir" class="rdfilter cc12 final">Gir</option>
                    <option id="1a3" value="Canchim" class="rdfilter cc12 final">Canchim</option>
                    <option id="1a4" value="Senepol" class="rdfilter cc12 final">Senepol</option>
                    <option id="1a5" value="Angus" class="rdfilter cc12 final">Angus</option>
                    <option id="1a6" value="Caracu" class="rdfilter cc12 final">Caracu</option>
                    <option id="1a7" value="Charolês" class="rdfilter cc12 final">Charolês</option>
                    <option id="1a8" value="Guzerá" class="rdfilter cc12 final">Guzerá</option>
                    <option id="1a9" value="Outras Raças Bovinas" class="rdfilter cc12 final">Outras Raças Bovinas</option>

                    <option id="1b0" value="Leite De Vaca" class="rdfilter cc13 final">Leite De Vaca</option>
                    <option id="1b1" value="Leite De Búfala" class="rdfilter cc13 final">Leite De Búfala</option>
                    <option id="1b2" value="Leite De Cabra" class="rdfilter cc13 final">Leite De Cabra</option>
                    <option id="1b3" value="Leite De Outros Animais" class="rdfilter cc13 final">Leite De Outros Animais</option>

                    <option id="1c0" value="Canastrinho" class="rdfilter cc14 final">Canastrinho</option>
                    <option id="1c1" value="Canastra" class="rdfilter cc14 final">Canastra</option>
                    <option id="1c2" value="Canastrão" class="rdfilter cc14 final">Canastrão</option>
                    <option id="1c3" value="Piau" class="rdfilter cc14 final">Piau</option>
                    <option id="1c4" value="Nilo Canastra" class="rdfilter cc14 final">Nilo Canastra</option>
                    <option id="1c5" value="Outras Raças Suinas" class="rdfilter cc14 final">Outras Raças Suínas</option>

                    <option id="1d0" value="Frangos" class="rdfilter cc15 final">Frangos</option>
                    <option id="1d1" value="Outras Aves" class="rdfilter cc15 final">Outras Aves</option>
                        
                    <option id="1e0" value="Ovos De Galinha" class="rdfilter cc151 final">Ovos De Galinha</option>
                    <option id="1e1" value="Ovos De Outros Animais" class="rdfilter cc151 final">Ovos De Outros Animais</option>

                    <option id="1f0" value="Asinios" class="rdfilter cc16 final">Asininos</option>
                    <option id="1f1" value="Bubalinos" class="rdfilter cc16 final">Bubalinos</option>
                    <option id="1f2" value="Cães" class="rdfilter cc16 final">Cães</option>
                    <option id="1f3" value="Caprinos" class="rdfilter cc16 final">Caprinos</option>
                    <option id="1f4" value="Coelhos" class="rdfilter cc16 final">Coelhos</option>
                    <option id="1f5" value="Cavalos" class="rdfilter cc16 final">Cavalos</option>
                    <option id="1f6" value="Muares" class="rdfilter cc16 final">Muares</option>
                    <option id="1f7" value="Ovinos" class="rdfilter cc16 final">Ovinos</option>
                    <option id="1f8" value="Outros" class="rdfilter cc16 final">Outros</option>

                    <option id="1g0" value="Produtos De Apicultura" class="rdfilter cc17 final">Produtos De Apicultura</option>
                    <option id="1g1" value="Casulos Do Bicho-Da-Seda" class="rdfilter cc17 final">Casulos Do Bicho-Da-Seda</option>
                    <option id="1g2" value="Produtos De Ranicultura" class="rdfilter cc17 final">Produtos De Ranicultura</option>
                    <option id="1g3" value="Demais Produtos De Origem Animal" class="rdfilter cc17 final">Demais Produtos De Origem Animal</option>

                    <option id="2a0" value="Eucalipto" class="rdfilter cc18 final">Eucalipto</option>
                    <option id="2a1" value="Acácia-Negra" class="rdfilter cc18 final">Acácia-Negra</option>
                    <option id="2a2" value="Mogno" class="rdfilter cc18 final">Mogno</option>
                    <option id="2a3" value="Pinheiro Americano" class="rdfilter cc18 final">Pinheiro Americano</option>
                    <option id="2a4" value="Pinheiro Brasileiro (Araucária)" class="rdfilter cc18 final">Pinheiro Brasileiro (Araucária)</option>
                    <option id="2a5" value="Cascas" class="rdfilter cc18 final">Cascas</option>
                    <option id="2a6" value="Outros Produtos Da Silvicultura" class="rdfilter cc18 final">Outros Produtos Da Silvicultura</option>

                    <option id="2b0" value="Açaí(Fruto)" class="rdfilter cc19 final">Açaí(Fruto)</option>
                    <option id="2b1" value="Babaçu(Amêndoa)" class="rdfilter cc19 final">Babaçu(Amêndoa)</option>
                    <option id="2b2" value="Borracha (Látex Coagulado)" class="rdfilter cc19 final">Borracha (Látex Coagulado)</option>
                    <option id="2b3" value="Carnaúba (Cera)" class="rdfilter cc19 final">Carnaúba (Cera)</option>
                    <option id="2b4" value="Castanha-Do-Pará" class="rdfilter cc19 final">Castanha-Do-Pará</option>
                    <option id="2b5" value="Cupuaçu" class="rdfilter cc19 final">Cupuaçu</option>
                    <option id="2b6" value="Palmito" class="rdfilter cc19 final">Palmito</option>
                    <option id="2b7" value="Pinhão" class="rdfilter cc19 final">Pinhão</option>
                    <option id="2b8" value="Carnaúba (Pó De Palha)" class="rdfilter cc19 final">Carnaúba (Pó De Palha)</option>
                    <option id="2b9" value="Demais Produtos da Extração Vegetal" class="rdfilter cc19 final">Demais Produtos da Extração Vegetal</option>

                    <option id="3a0" value="Salmão" class="rdfilter cc20 final">Salmão</option>
                    <option id="3a1" value="Sardinha" class="rdfilter cc20 final">Sardinha</option>
                    <option id="3a2" value="Cação" class="rdfilter cc20 final">Cação</option>
                    <option id="3a3" value="Corvina" class="rdfilter cc20 final">Corvina</option>
                    <option id="3a4" value="Saint Peter" class="rdfilter cc20 final">Saint Peter</option>
                    <option id="3a5" value="Tainha" class="rdfilter cc20 final">Tainha</option>
                    <option id="3a6" value="Atum" class="rdfilter cc20 final">Atum</option>
                    <option id="3a7" value="Pescada Branca" class="rdfilter cc20 final">Pescada Branca</option>
                    <option id="3a8" value="Pintado" class="rdfilter cc20 final">Pintado</option>
                    <option id="3a9" value="Anchova" class="rdfilter cc20 final">Anchova</option>
                    <option id="3a10" value="Linguado" class="rdfilter cc20 final">Linguado</option>
                    <option id="3a11" value="Tilápia" class="rdfilter cc20 final">Tilápia</option>
                    <option id="3a12" value="Outros Peixes" class="rdfilter cc20 final">Outros Peixes</option>

                    <option id="3b0" value="Lula" class="rdfilter cc21 final">Lula</option>
                    <option id="3b1" value="Polvo" class="rdfilter cc21 final">Polvo</option>
                    <option id="3b2" value="Demais Moluscos" class="rdfilter cc21 final">Demais Moluscos</option>

                    <option id="3c0" value="Mexilhão" class="rdfilter cc22 final">Mexilhão</option>
                    <option id="3c1" value="Ostra" class="rdfilter cc22 final">Ostra</option>
                    <option id="3c2" value="Demais Crustáceos" class="rdfilter cc22 final">Demais Crustáceos</option>

                    <option id="3d0" value="Camarão Cinza" class="rdfilter cc23 final">Camarão Cinza</option>
                    <option id="3d1" value="Camarão Rosa" class="rdfilter cc23 final">Camarão Rosa</option>
                    <option id="3d2" value="Outros" class="rdfilter cc23 final">Outros</option>

                    <option id="5a0" value="Macronutrientes" class="rdfilter cc24 final">Macronutrientes </option>
                    <option id="5a1" value="Micronutrientes" class="rdfilter cc24 final">Micronutrientes</option>
                    <option id="5a2" value="Corretivos" class="rdfilter cc24 final">Corretivos</option>
                    <option id="5a3" value="Adubos Orgânicos" class="rdfilter cc24 final">Adubos Orgânicos</option>
                    <option id="5a4" value="Demais Adubos Ou Fertilizantes" class="rdfilter cc24 final">Demais Adubos Ou Fertilizantes</option>

                    <option id="5b0" value="Herbicidas" class="rdfilter cc25 final">Herbicidas</option>
                    <option id="5b1" value="Fungicidas" class="rdfilter cc25 final">Fungicidas</option>
                    <option id="5b2" value="Inseticidas" class="rdfilter cc25 final">Inseticidas</option>
                    <option id="5b3" value="Nematócitos" class="rdfilter cc25 final">Nematócitos</option>

                    <option id="5c0" value="Parasitóides" class="rdfilter cc26 final">Parasitóides</option>
                    <option id="5c1" value="Predadores" class="rdfilter cc26 final">Predadores</option>
                    <option id="5c2" value="Patógenos" class="rdfilter cc26 final">Patógenos</option>
                        
                    <option id="6a0" value="Tratores" class="rdfilter cc27 final">Tratores</option>
                    <option id="6a1" value="Colheitadeiras" class="rdfilter cc27 final">Colheitadeiras</option>
                    <option id="6a2" value="Pulverizadores" class="rdfilter cc27 final">Pulverizadores</option>
                    <option id="6a3" value="Máquinas Multi-Função" class="rdfilter cc27 final">Máquinas Multi-Função</option>
                    <option id="6a4" value="Outros" class="rdfilter cc27 final">Outros</option>

                    <option id="6b0" value="Caminhonetes" class="rdfilter cc28 final">Caminhonetes</option>
                    <option id="6b1" value="Caminhões" class="rdfilter cc28 final">Caminhões</option>
                    <option id="6b2" value="Carretas E Trailers" class="rdfilter cc28 final">Carretas E Trailers</option>
                    <option id="6b3" value="Treminhões" class="rdfilter cc28 final">Treminhões</option>
                    <option id="6b4" value="Demais Veículos" class="rdfilter cc28 final">Demais Veículos</option>

                    <option id="6c0" value="Arados" class="rdfilter cc29 final">Arados</option>
                    <option id="6c1" value="Colheita" class="rdfilter cc29 final">Colheita</option>
                    <option id="6c2" value="Cultivadores" class="rdfilter cc29 final">Cultivadores</option>
                    <option id="6c3" value="Grades" class="rdfilter cc29 final">Grades </option>
                    <option id="6c4" value="Plainas" class="rdfilter cc29 final">Plainas</option>
                    <option id="6c5" value="Roçadeiras" class="rdfilter cc29 final">Roçadeiras</option>
                    <option id="6c6" value="Semeadoras" class="rdfilter cc29 final">Semeadoras</option>
                    <option id="6c7" value="Diversos" class="rdfilter cc29 final">Diversos</option>

                    <option id="6d0" value="Peças Para Máquinas Agrícolas" class="rdfilter cc30 final">Peças Para Máquinas Agrícolas</option>
                    <option id="6d1" value="Peças Para Máquias De Transporte" class="rdfilter cc30 final">Peças Para Máquias De Transporte</option>
                    <option id="6d2" value="Peças Para Silos" class="rdfilter cc30 final">Peças Para Silos</option>
                    <option id="6d3" value="Demais Peças" class="rdfilter cc30 final">Demais Peças</option>

                    <option id="6e0" value="Baias, Bretes, Palanques E Cercas" class="rdfilter cc31 final">Baias, Bretes, Palanques E Cercas</option>
                    <option id="6e1" value="Barracões E Construções Rurais" class="rdfilter cc31 final">Barracões E Construções Rurais</option>
                    <option id="6e3" value="Demais Instalações Rurais" class="rdfilter cc31 final">Demais Instalações Rurais</option>

                    <option id="6f0" value="Sistemas De Irrigação" class="rdfilter cc32 final">Sistemas De Irrigação</option>
                    <option id="6f1" value="Instrumentos Para Agricultura De Precisão" class="rdfilter cc32 final">Instrumentos Para Agricultura De Precisão</option>
                    <option id="6f2" value="Equipamentos Meteorológicos" class="rdfilter cc32 final">Equipamentos Meteorológicos</option>

                    <option id="6g0" value="Ferramentas Manuais " class="rdfilter cc33 final">Ferramentas Manuais</option>
                    <option id="6g1" value="Bombas Costais" class="rdfilter cc33 final">Bombas Costais</option>
                    <option id="6g2" value="Equipamentos De Proteção Individual (Epis)" class="rdfilter cc33 final">Equipamentos De Proteção Individual (Epis)</option>

                    <option id="7a0" value="Rações Para Bovinos" class="rdfilter cc34 final">Rações Para Bovinos</option>
                    <option id="7a1" value="Sais Minerais" class="rdfilter cc34 final">Sais Minerais</option>
                    <option id="7a2" value="Silagens E Forragens" class="rdfilter cc34 final">Silagens E Forragens</option>
                    <option id="7a3" value="Rações Para Demais Animais" class="rdfilter cc34 final">Rações Para Demais Animais</option>
                    <option id="7a4" value="Suplementos Alimentare" class="rdfilter cc34 final">Suplementos Alimentares</option>
                    <option id="7a5" value="Demais Produtos Alimentares Para Animais" class="rdfilter cc34 final">Demais Produtos Alimentares Para Animais</option>

                    <option id="7b0" value="Medicamentos Animais" class="rdfilter cc35 final">Medicamentos Animais</option>
                    <option id="7b1" value="Outros Produtos Farmacêuticos" class="rdfilter cc35 final">Outros Produtos Farmacêuticos</option>
                        
                    <option id="8a0" value="Açúcar Branco Refinado" class="rdfilter cc36 final">Açúcar Branco Refinado</option>
                    <option id="8a1" value="Açúcar Branco Cristal" class="rdfilter cc36 final">Açúcar Branco Cristal</option>
                    <option id="8a2" value="Açúcar Mascavo" class="rdfilter cc36 final">Açúcar Mascavo</option>
                    <option id="8a3" value="Demais Açúcares" class="rdfilter cc36 final">Demais Açúcares</option>
                    <option id="8a4" value="Doces E Conservas Açucaradas" class="rdfilter cc36 final">Doces E Conservas Açucaradas</option>
                    <option id="8a5" value="Demais Derivados Do Açúcar" class="rdfilter cc36 final">Demais Derivados Do Açúcar</option>

                    <option id="8b0" value="Arroz Em Grão" class="rdfilter cc37 final">Arroz Em Grão</option>
                    <option id="8b1" value="Demais Produtos Derivados Do Arroz" class="rdfilter cc37 final">Demais Produtos Derivados Do Arroz</option>
                        
                    <option id="8c0" value="Café Em Grão Torrado" class="rdfilter cc38 final">Café Em Grão Torrado</option>
                    <option id="8c1" value="Café Em Grão Moído" class="rdfilter cc38 final">Café Em Grão Moído</option>
                    <option id="8c2" value="Demais Beneficiamentos Cafeeiros" class="rdfilter cc38 final">Demais Beneficiamentos Cafeeiros</option>
                        
                    <option id="8d0" value="Produtos Derivados Do Trigo" class="rdfilter cc39 final">Produtos Derivados Do Trigo</option>
                    <option id="8d1" value="Produtos Derivados Da Mandioca" class="rdfilter cc39 final">Produtos Derivados Da Mandioca</option>
                    <option id="8d2" value="Produtos Derivados Do Milho" class="rdfilter cc39 final">Produtos Derivados Do Milho</option>
                        
                    <option id="8e0" value="Óleos e Gorduras De Origem Animal" class="rdfilter cc40 final">Óleos e Gorduras De Origem Animal</option>
                    <option id="8e1" value="Óleos e Gorduras Origem Vegetal" class="rdfilter cc40 final">Óleos e Gorduras Origem Vegetal</option>
                        
                    <option id="9a0" value="Cortes Tradicionais" class="rdfilter cc41 final">Cortes Tradicionais</option>
                    <option id="9a1" value="Cortes Premium" class="rdfilter cc41 final">Cortes Premium</option>
                        
                    <option id="9f0" value="De Vaca" class="rdfilter cc42 final">De Vaca</option>
                    <option id="9f1" value="De Outros Animais" class="rdfilter cc42 final">De Outros Animais</option>
                    <option id="9f2" value="Leites Especiais (Sem Lactose, Etc)" class="rdfilter cc42 final">Leites Especiais (Sem Lactose, Etc)</option>
                        
                    <option id="9g0" value="Queijo" class="rdfilter cc43 final">Queijo</option>
                    <option id="9g1" value="Requeijão" class="rdfilter cc43 final">Requeijão</option>
                    <option id="9g2" value="Manteiga" class="rdfilter cc43 final">Manteiga</option>
                    <option id="9g3" value="Iogurtes" class="rdfilter cc43 final">Iogurtes</option>
                    <option id="9g4" value="Creme De Leite E Leite Condensado" class="rdfilter cc43 final">Creme De Leite E Leite Condensado</option>
                    <option id="9g5" value="Leite Em Pó" class="rdfilter cc43 final">Leite Em Pó</option>
                    <option id="9g6" value="Demais Produtos Do Laticínio" class="rdfilter cc43 final">Demais Produtos Do Laticínio</option>
                        
                    <option id="11a0" value="Para Vestuário" class="rdfilter cc44 final">Para Vestuário</option>
                    <option id="11a1" value="Artigos De Selaria" class="rdfilter cc44 final">Artigos De Selaria</option>
                    <option id="11a2" value="Selas E Arreios" class="rdfilter cc44 final">Selas E Arreios</option>
                    <option id="11a3" value="Para Demais Funções" class="rdfilter cc44 final">Para Demais Funções</option>

                    <option id="11b0" value="Couro para Calçados" class="rdfilter cc45 final">Couro para Calçados</option>
                    <option id="11b1" value="Solas E Saltos" class="rdfilter cc45 final">Solas E Saltos</option>
                    <option id="11b2" value="Gáspeas" class="rdfilter cc45 final">Gáspeas</option>
                    <option id="11b3" value="Biqueiras" class="rdfilter cc45 final">Biqueiras</option>
                    <option id="11b4" value="Demais Partes Dos Calçados" class="rdfilter cc45 final">Demais Partes Dos Calçados</option>
                    <option id="11b5" value="Calçados Acabados" class="rdfilter cc45 final">Calçados Acabados</option>

                    <option id="20d0" value="Seguro De Safra" class="rdfilter cc46 final">Seguro De Safra</option>
                    <option id="20d1" value="Seguro De Carga" class="rdfilter cc46 final">Seguro De Carga</option>
                    <option id="20d2" value="Seguro De Propriedade" class="rdfilter cc46 final">Seguro De Propriedade</option>
                    <option id="20d3" value="Resseguros" class="rdfilter cc46 final">Resseguros</option>
                    <option id="20d4" value="Demais Seguros" class="rdfilter cc46 final">Demais Seguros</option>

                    <option id="23a0" value="Amostragem De Solo" class="rdfilter cc47 final">Amostragem De Solo</option>
                    <option id="23a1" value="Testes" class="rdfilter cc47 final">Testes</option>
                    <option id="23a2" value="Análises E Laudous Técnicos" class="rdfilter cc47 final">Análises E Laudos Técnicos</option>


                </select>
      </form>
          <br>
          <button id="ca5" class="btn btn-radio">Continuar</button>
                </div>
    </div>
    <div id="product-details-tab" class="tab-pane fade">
    <h2>Por Gentileza, adicione detalhes à descrição do seu Anúncio.</h2>    
      <button id="ca-2" class="btn btn-radio">Voltar</button> 
        <div id="cont1" class="container">
          
          <form id="pform" method="post" action="<?=base_url()?>index.php/anuncios/fazerCadastroAnuncioDados"  enctype="multipart/form-data">  
          <div class="product-details"><!--product-details-->
               
                <div class="col-sm-5" >
                    
							<div class="view-product">
								<img id="productimage" src="<?=base_url()?>assets/images/placeholders/arado1.jpg">
								<h3><span class="glyphicon glyphicon-fullscreen"></span> Ampliar</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
                                        <a href=""><img src="<?=base_url()?>assets/images/placeholders/arado1.jpg" alt="" width="85px;"></a>
										  <a href=""><img src="<?=base_url()?>assets/images/product-details/similar1.jpg" alt="" width="85px;"></a>
										  <a href=""><img src="<?=base_url()?>assets/images/product-details/similar2.jpg" alt="" width="85px;"></a>
										  <a href=""><img src="<?=base_url()?>assets/images/product-details/similar3.jpg" alt="" width="85px;"></a>
										</div>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>
           
						</div>
              
                <div class="col-sm-7">
                    
				<div id="product-information"class="product-information"><!--/product-information-->
                                    
                                         <label class="control-label">Carregue as novas imagens imagens para trazer mais detalhe ao seu anuncio:</label>
            <input id="input-1" name='image1' type="file" class="file">
            <input id="input-1" name='image2' type="file" class="file">
            <input id="input-1" name='image3' type="file" class="file">
            <input id="input-1" name='image4' type="file" class="file">
            <input id="input-1" name='image5' type="file" class="file">
                                    
                                    
                                    <span id="productid"></span>
                                        <div class="form-group">
                                          <textarea id="title" class="form-control" name="title" type="text" placeholder="Título do Produto" maxlength="30" rows="1"></textarea></div>  
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
                                            <input class="form-control money" id="productprice" name="pprice" type="text"> 
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
                                        <label class="btn btn-default"><input class="btn-input" name="negociavel" value='1' type="checkbox"> Negociável</label>
                                            </div>
                                        <div class="visib" id="pconsult">
                                                <p id="pcons">Sob Consulta.</p>
                                                <!--<a class="btn btn-default cart"><i class="fa fa-comment-o" aria-hidden="true"></i> Consultar</a>-->
                                            </div> 
                                            
                                            
									   <span id="separator">|</span>
                                        
                                        <div class="form-group">
                                           
                                        <input id="minqt" class="form-control" name="minqt" type="number" onkeypress="return event.charCode >= 48" min="0">
                                        </div>
                                        <input class="unitbox0" type="text" placeholder="Unidade(s)" disabled><label class="btn btn-default" for="minorder"><input id="minorder" name='pedidominimo' value='1' class="btn-input" type="checkbox">(Pedido Mínimo)</label>
                                        <br>
                                        <p><b>Disponibilidade:</b></p>
                                        <div class="form-group">
                                            <input id="available" name="available" class="form-control" type="number" placeholder="0" onkeypress="return event.charCode >= 48" min="1">
                                        </div>
                                                <input class="unitbox0" type="text" placeholder="Unidade(s)" disabled>
                                        <br>
                                        <p><b>Condição:</b></p>
                                            <span id="btn-group2" data-toggle="buttons">
                                                <label class="btn btn-radio active">
                                                <input type="radio" name="options" value='Novo' id="novo" autocomplete="off" checked> Novo
                                              </label>
                                              <label class="btn btn-radio">
                                                <input type="radio" name="options" value='Usado' id="usado" autocomplete="off"> Usado
                                              </label>
                                            </span>
                                            </div>
                                        <hr>
                                        
                                        <div id="freight" class="form-control" style="border: 0px;">
                                            <p><b>Frete</b> - O produto poderá ser entregue através de: </p><br>      
                                            <ul class="fcond">
                                                <li>
                                                    <label for="fcompany" class="btn btn-default">
                                                        <input id="fcompany" class="btn-input" value='1'  name="transportadora" type="checkbox"> Transportadora
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="fcorreios" class="btn btn-default">
                                                        <input id="fcorreios" class="btn-input" value='1' name="correio" type="checkbox"> Correios
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="fneg" class="btn btn-default">
                                                        <input id="fneg" class="btn-input" name="negociantesOn" value='1' type="checkbox"> Negociantes
                                                    </label>
                                                </li>
                                            </ul>
                                            
                                            <div id="fmodal1">
                                                <p><b>Transportadora - Termos do Frete:</b></p>
                                                <br>
                                                <span id="btn-group4" data-toggle="buttons">
                                                    <label class="btn btn-radio active">
                                                        <input type="radio" name="toptions" value='exw' id="exw" autocomplete="off" checked> EXW
                                                    </label>
                                                    <label class="btn btn-radio">
                                                        <input type="radio" name="toptions" value='ddp' id="ddp" autocomplete="off"> DDP
                                                    </label>
                                                </span>
                                                                              
                                                                      
                                                <div id="exwalert" class="alert alert-warning "><i class="fa fa-info-circle" aria-hidden="true"></i> Ao optar pelo termo <b>EXW</b>, o <b>Cliente</b> deverá arcar com os <em>Custos e Riscos</em> do transporte das mercadorias pela transportadora. Para saber mais, acesse os <a> Termos de Frete Agrobuy</a>.</div>
                                                
                                                <div id="ddpalert" class="alert alert-warning"><i class="fa fa-info-circle" aria-hidden="true"></i> Ao optar pelo termo <b>DDP</b>, o <b>Fornecedor</b> se propõe a arcar com os <em>Custos e Riscos</em> do transporte das mercadorias pela transportadora. Para saber mais, acesse os <a> Termos de Frete Agrobuy</a>.</div>
                                            </div>
                                            <div id="ftype">
                                                <p><b>Transportadora - Tipo de Frete:</b></p>
                                                <br>
                                                <span id="btn-group4" data-toggle="buttons">
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
                                                        <label for="sedex" class="btn btn-default">
                                                            <input id="sedex" class="btn-input" value='1' name="sedex" type="checkbox"> Sedex
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>                                       
                                            <div id="fmodal3">
                                                <p><b>Negociantes - Termos de Frete:</b></p>
                                                <br>
                                                <ul class="fcond">
                                                    <li>
                                                        <label for="ffornecedor" class="btn btn-default">
                                                            <input id="ffornecedor" class="btn-input" name="negociado" value='1' type="checkbox"> O Fornecedor entrega o Produto
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label for="fcliente" class="btn btn-default">
                                                            <input id="fcliente" class="btn-input" name="negociado1" value='1' type="checkbox"> O Cliente retira o Produto
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                            
                                    <hr>
                    <div id="pay">                
                        <p><b>Pagamento:</b></p>
                        <br>
                        <label id="compg"><a><i class="fa fa-get-pocket"></i> <input id="cg" name="garantida" value="1" type="checkbox" checked>Compra Garantida</a></label>
                                    <div id="payment">
                                        
                                        <ul class="fcond">
                                        <li><label for="boleto" class="checkbox-inline"><input id="boleto" name="boleto" value="1" type="checkbox" checked  onclick="return false;">Boleto Bancário</label></li>
                                        <li><label for="visamaster" class="checkbox-inline"><input id="visamaster" name="visamaster" value="1" class="payment" type="checkbox">Visa / Mastercard</label></li>
                                        <li><label for="amex" class="checkbox-inline"><input id="amex" name="amex" value="1" type="checkbox" class="payment"> Amex</label></li>
                                        <li><label for="paypal" class="checkbox-inline"><input id="paypal" name="paypal" value="1" type="checkbox" class="payment"> PayPal</label></li>
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
                                    <td class="pdata"> <input name="peso" type="text"></td>
                                </tr>
                                <tr>
                                        <td class="feature">Tamanho</td>
                                        <td class="pdata"> <input name="tamanho" type="text"></td>
                                </tr>
                                <tr>
                                    <td class="feature">Tipo de Cultivo / Criação</td>
                                    <td class="pdata"><input name='cultivocriacao' type="text"></td>                                    
                                    </tr></table>
                                <table>
                                    <tr><td class="feature"> Nome Científico</td>
                                    <td class="pdata"><input name='cientifico' type="text"></td></tr>
                                    <tr>
                                    <td class="feature">Variedade</td>
                                    <td class="pdata"><input name='variedade' type="text"></td>                                    
                                    </tr>
                                    <tr>
                                      <td class="feature"> Certificação </td>
                                    <td class="pdata"> <input name='certificacao' type="text"></td>
                                    </tr>
                                    </table>
                                <table>
                                        <tr>
                                    <td class="feature">Tipo</td>
                                    <td class="pdata"><input name='tipo2' type="text"></td>
                                    </tr>
                               <tr>
                                    <td class="feature">Marca</td>
                                    <td class="pdata"> <input name='marca' type="text"> </td>
                                    </tr>
                                <tr>
                                    <td class="feature"> Modelo </td>
                                    <td class="pdata"><input name='modelo' type="text"></td>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="pddesc"> Empacotamento e Envio</h4>
                                <table>
                                    <tr>
                                    <td class="feature"> Empacotamento: </td>
                                    <td class="pdata pack"> <input name='empacotamento' type="text"> </td>
                                    </tr>
                               <tr>
                                    <td class="feature"> Detalhe do Envio:</td>
                                    <td class="pdata pack"> <input name='detalheenvio' type="text" placeholder=" Ex.: Enviado 5 dias após o Pagamento"> </td>
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
                </form>
            <button id="ca7" class="btn btn-radio" onclick="pegaValorDiv()">Continuar</button>
        </div>
    </div>
    <div id="publish-tab" class="tab-pane fade">
        <h2>Seu anúncio será exibido como está abaixo.Por gentileza, revise-o:</h2>
        
      <div> </div>
        <h3> Se tudo estiver ok, publique-o! Boas Vendas!</h3>
        <form id='final' method="post" action="<?=base_url()?>index.php/anuncios/finalizarCadastroAnuncios">
      <p> <input id='politica' value='1' type="checkbox"> Eu declaro que li e concordo com os <a>termos de uso e de responsabilidades</a> do Agrobuy.  </p>
        </form>
        <div id="textoerro"> </div>
        <button id='ca6' class="btn btn-radio"> Publicar!</button>
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