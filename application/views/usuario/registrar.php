<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Registrar | Agrobuy</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/registry.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
    
    
    <style>
        .categoryfilter{
    height:220px;
    width:auto; 
    overflow:auto;
    display:inline;
    overflow-y:scroll;
    background-color:#fff;
    border: 1px solid #a9a9a9;
    border-radius: 2px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;}
    
#filter2,#filter3{
display: none;    
}
#filter22,#filter33{
display: none;    
}
#filter24,#filter34{
display: none;    
}
#filter25,#filter35{
display: none;    
}
#filter26,#filter36{
display: none;    
}




#ca-1, #ca-2{
    background-color:#bada55;
    color:#fff;
    border-radius: 5px;
}

#ca5{
    background-color:#fe980f;
    color:#fff;
    border-radius: 5px;
    display: none;   
}

#ca6{
    background-color:#fe980f;
    color:#fff;
    border-radius: 5px;
}
        </style>
</head><!--/head-->

<header>
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="<?=base_url()?>assets/images/home/logo.png" alt="" /></a>
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
        
    <div class="container">
        <div class="page-header">
            <h2>Por gentileza, insira suas informações abaixo</h2>
            <p class="lead">São só 3 passos, leva muito pouco.</p>
        </div><!-- page-header -->
        
        <ul class="nav nav-tabs" role="tablist" id="myTabs">
            <li class="regtab active"><a id="nav1" href="#account" role="tab" data-toggle="tab">1.Informações da Conta</a></li>
            <li class="space">.</li>
            <li class="regtab"><a id="nav2" href="#busin" role="tab" data-toggle="tab">2.Informações de Negócios</a></li>
            <li class="space">.</li>
            <li class="regtab"><a id="nav3" href="#ativ" role="tab" data-toggle="tab">3.Informações de Atividades</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active col-md-8" id="account">
        <h3>Informações da Conta</h3>
          
        
 
                <form id="accinfo" name="accinfo" class="form-inline" action="<?=base_url() ?>index.php/usuarios/fazerCadastroInfo" method='post'>
                    <p> As informações com <em>*</em> são obrigatórias.</p>
                    <div id="infoacc" class="form-group">

        
                        
        <div class="trow">
            <p><em>* </em>Nome Completo</p>
        <input type="text" class="form-control" id="name" placeholder="" name="nome" value="" required>
        </div>
        
        <div class="trow">
        <p><em>* </em>E-mail</p>
        <input type="text" class="form-control" id="email" placeholder="" name="email" required>
        
        
        <p><em>* </em>Confirme o e-mail</p>
        <input type="text" class="form-control" id="cemail" name="cemail" placeholder="" required>
        </div>
        
        <div class="trow">
        <p>Telefone</p>        
        <input type="tel" class="form-control" id="tel" placeholder="" name="tel">
        
            
        <p>Celular/ Whatsapp</p>
        <input type="tel" class="form-control" id="cel" placeholder="" name="cel">
        </div>
        
        
        <div class="trow">
        <p><em>* </em>Senha</p>
        <input type="password" class="form-control" id="pass" placeholder="" name="pass" required>
        
        <p><em>* </em>Confirmar a Senha</p>
        <input type="password" class="form-control" id="cpass" placeholder="" name="cpasspass" required>
        </div>
                 
    </div> 
                   
</form>
                            <div id="avc1"><button class="btn btn-default"  id="btnAvanca1">Avançar<span class="glyphicon glyphicon-chevron-right"></span></button></div> 
  
            </div> 
            
           
                  
            <div role="tabpanel" class="tab-pane fade col-md-8" id="busin">
                
                <form id="businfo" method="post" action="<?=base_url()?>index.php/usuarios/fazerCadastroBus" class="form-inline form-group">
                <h3>Informações de Negócios</h3>
                     <p> As informações com <em>*</em> são obrigatórias.</p>
                <div class="trow">
                    <label for="tpessoa"><em>* </em>Tipo de Pessoa:</label>
                    <span id="tpessoa" data-toggle="buttons">
                        <label class="btn btn-radio active">
                            <input type="radio" name="tpessoa" value="juri" id="pf" checked> Pessoa Jurídica
                        </label>
                        <label class="btn btn-radio">
                            <input type="radio" name="tpessoa" value="fisi" id="pj"> Pessoa Física
                        </label>
                    </span>
                    </div>
                
                <div id="tcpf" class="trow">
                    <label for="cpf" style="display: table-cell"><em>* </em> CPF:</label>
                    <input type="text" class="form-control" id="cpf" placeholder="000.000.000-67" name="cpf" required>
                </div>
                    
                <div id="tcnpj" class="trow">
                    <label for="cnpj" style="display: table-cell"><em>* </em> CNPJ:</label>
                    <input type="text" class="form-control" id="cnpj" placeholder=" 00.000.000/0001-00" name="cnpj" style="display: table-cell" required>
                </div>    
                      
                <div class="trow">
                    <label><em>* </em>Endereço: </label>
                    <span id="tend" data-toggle="buttons">
                        <label class="btn btn-radio active">
                            <input type="radio" name="tend" value="urbano" checked> Urbano
                        </label>
                        <label class="btn btn-radio">
                            <input type="radio" name="tend" value="rural"> Rural
                        </label>
                    </span>
             </div>
    <!-- SE URBANA-->
                    <div id="purban">
                        <div class="trow">
                            <label><em>* </em>CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="" name="cep" required>    
                        </div>
                            
                        <div class="trow">
                            <label for="#estado"><em>* </em>Estado</label><br>
                            <select class="form-control" name="estado" id="uestado">
                                <option value="" disabled selected>Selecione seu Estado</option>
                                <option value="SP">São Paulo</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PR">Paraná</option>
                                <option value="GO">Goiás</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="MA">Maranhão</option>                   
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantis</option>
                            </select>
                        </div>
                             
                        <div class="trow">
                            <label><em>* </em>Município</label>
                            <input type="text" class="form-control" id="umunicipio" placeholder="" name="municipio" required>
                        </div>
                            
                        <div class="trow">
                            <label><em>* </em>Rua</label>
                            <input type="text" class="form-control" id="rua" placeholder="" name="rua" required>
                        </div>
                            
                        <div class="trow">
                            <label><em>* </em>Número</label>
                            <input type="number" class="form-control" id="numero" placeholder="" name="numero" required>
                        </div>
                        
                        <div class="trow">
                          <label>Complemento</label>
                          <input type="text" class="form-control" id="complemento" placeholder="" name="complemento">
                        </div>
                        
                    </div>
    <!-- SE  NA ÁREA RURAL-->
                    <div id="prural">
                          
                        <div class="trow">
                            <label for="#estado"><em>* </em>Estado</label><br>
                            <select class="form-control" name="estado" id="uestado">
                                <option value="" disabled selected>Selecione seu Estado</option>
                                <option value="SP">São Paulo</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PR">Paraná</option>
                                <option value="GO">Goiás</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="MA">Maranhão</option>                   
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantis</option>
                            </select>
                        </div>
                            
                        <div class="trow">
                            <label><em>* </em>Município</label>
                            <input type="text" class="form-control" id="rmunicipio" placeholder="" name="municipio" required>
                        </div>
                            
                        <div class="trow">
                            <label><em>* </em>Acesso na Rodovia</label>
                            <input type="text" class="form-control" id="estrada" placeholder="" name="estrada" required="">
                        </div>
                      
                        <div class="trow">
                            <label><em>* </em>Km/Nº</label>
                            <input type="number" class="form-control" id="km" placeholder="" name="km" required>
                        </div>
                            
                      <div class="trow">
                          <label>Complemento</label>
                          <input type="text" class="form-control" id="complemento" placeholder="" name="complemento" required>
                        </div>
                        </div>
                </form>
                 <button class="btn btn-default" id="avc2">Avançar<span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
                  
            <div role="tabpanel" class="tab-pane fade col-md-8" id="ativ">
                    <form class="form-inline form-group" method="post" action="<?=base_url()?>index.php/usuarios/cadastroFinal">
                    <h3>Informações de Atividades</h3>
                    <p> As informações com <em>*</em> são obrigatórias.</p>
                    
                    <h4>Tipo de Negócio:</h4>
                    <label class="tneg"><input type="checkbox" name="ProdutorRural" value="1"> Produtor Rural &#40; Pecuarista/ Prod. Florestal, etc&#41;</label>
                    <label class="tneg"><input type="checkbox" name="Trader" value="1"> Empresa Comercial &#40;Trader/ Escritório&#41; </label>
                    <label class="tneg"><input type="checkbox" name="Agroindustria" value="1"> Agroindústria</label>
                    <label class="tneg"><input type="checkbox" name="Distribuidor" value="1"> Distribuidor/Atacadista</label>
                    <label class="tneg"><input type="checkbox" name="Coperativa" value="1"> Associação/Cooperativa</label>
                    <label class="tneg"><input type="checkbox" name="Prestador" value="1"> Prestador de Serviços &#40;Transporte, Finanças, etc&#41;</label>
                    <label class="tneg"><input type="checkbox" name="Startup" value="1"> Start-up</label>

            <h4> Qual é seu principal interesse em usar o Agrobuy?<em>* </em></h4>
                        <label>Comprar <input id="cmp" type="checkbox"></label>
                        <label>Vender <input id="vnd" type="checkbox"></label>
                        <div id="intc">
                        <h5>Quais produtos você tem interesse em comprar, principalmente?</h5>
                            <p>Produto <input name="cat1" id="pegaCat" type=text> Categoria <input name="catPro1" id="pegaCatPro1" type="text"></p>
                            <p>Produto <input name="cat2" id="pegaCat2" type=text> Categoria <input name="catPro2" id="pegaCatPro2" type="text"></p>
                            <p>Produto <input name="cat3" id="pegaCat3" type=text> Categoria <input name="catPro3" id="pegaCatPro3" type="text"></p>
                        </div>
                        <div id="ints">
                        <h5>Quais produtos você tem interesse em vender, principalmente?</h5>
                            <p>Produto <input name="cat4" id="pegaCat4" type=text> Categoria <input name="catPro4" id="pegaCatPro4" type="text"></p>
                            <p>Produto <input name="cat5" id="pegaCat5" type=text> Categoria <input name="catPro5" id="pegaCatPro5" type="text"></p>
                            <p>Produto <input name="cat6" id="pegaCat6" type=text> Categoria <input name="catPro6" id="pegaCatPro6" type="text"></p>
                        </div>
                        <br>
                        <button class="btn btn-default" type="submit">Finalizar<span class="glyphicon glyphicon-ok"></span></button>
</form>
                        
                        </div>
                    
        </div><!-- container -->
    
        </div>
    
</section>
    <div id="compraModal1" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	 <select multiple size="26" id="filter1" class="categoryfilter" style="height:220px;">
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
                    <select multiple size="26" id="filter2" class="categoryfilter"  style="height:220px;">
                    
                        <option id="0a" value="0" class="ndfilter c0">Arroz, Trigo e Outros Cereais</option>
                        <option id="0b" value="1" class="ndfilter c0">Café em Grão</option>
                        <option id="0c" class="ndfilter c0 final">Laranja</option>
                        <option id="0d" class="ndfilter c0 final">Cana-de-açúcar</option>
                        <option id="0e" class="ndfilter c0 final">Milho em Grão</option>
                        <option id="0f" class="ndfilter c0 final">Soja  em Grão</option>
                        <option id="0g" value="6" class="ndfilter c0">Algodão</option>
                        <option id="0h" value="7" class="ndfilter c0">Frutas</option>
                        <option id="0i" value="8" class="ndfilter c0">Legumes</option>
                        <option id="0j" value="9" class="ndfilter c0">Verduras</option>
                        <option id="0k" value="10" class="ndfilter c0">Tubérculos</option>
                        <option id="0l" value="11" class="ndfilter c0">Oleaginosas e Sementes</option>
                        <option id="0m" class="ndfilter c0 final">Demais Produtos Agrícolas</option>

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

                        <option id="4a" class="ndfilter c4 final">Sementes</option>
                        <option id="4b" class="ndfilter c4 final">Mudas Frutíferas</option>
                        <option id="4c" class="ndfilter c4 final">Mudas Florestais</option>
                        <option id="4d" class="ndfilter c4 final">Demais Mudas</option>

                        <option id="5a" value="24" class="ndfilter c5">Adubos e Fertilizantes</option>
                        <option id="5b" value="25" class="ndfilter c5">Defensivos Agrícolas</option>
                        <option id="5c" value="26" class="ndfilter c5">Controles Biológicos</option>
                        <option id="5d" class="ndfilter c5 final">Demais Químicos Orgânicos</option>
                        <option id="5e" class="ndfilter c5 final">Demais Químicos Inorgânicos</option>

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
                        <option id="8f" class="ndfilter c8 final">Derivados dos Demais Vegetais</option>
                        
                        <option id="9a" value="41" class="ndfilter c9">Carne Bovina</option>
                        <option id="9b" class="ndfilter c9 final">Carne Suína</option>
                        <option id="9c" class="ndfilter c9 final">Carne de Aves</option>
                        <option id="9d" class="ndfilter c9 final">Pescado Industrializado</option>
                        <option id="9e" class="ndfilter c9 final">Carnes de Outros Animais</option>
                        <option id="9f" value="42" class="ndfilter c9">Leite Pasteurizado</option>
                        <option id="9g" value="43" class="ndfilter c9">Laticínios</option>
                        
                        <option id="10a" class="ndfilter c10 final">Concentrados de Frutas</option>
                        <option id="10b" class="ndfilter c10 final">Concentrados à base de Verduras</option>
                        <option id="10c" class="ndfilter c10 final">Concentrados à base de Outros Vegetais</option>
                        <option id="10d" class="ndfilter c10 final">Demais Ingredientes para Sucos e Bebidas</option>
                        
                        <option id="11a" value="44" class="ndfilter c11">Artefatos de Couro</option>
                        <option id="11b" value="45" class="ndfilter c11">Insumos para Calçados</option>
                        
                        <option id="12a" class="ndfilter c12 final">Celulose</option>
                        <option id="12b" class="ndfilter c12 final">Papel</option>
                        <option id="12c" class="ndfilter c12 final">Demais Derivados da Celulose e Papel</option>
                        
                        <option id="13a" class="ndfilter c13 final">Fios</option>
                        <option id="13b" class="ndfilter c13 final">Fibras Têxteis Beneficiadas</option>
                        <option id="13c" class="ndfilter c13 final">Produtos para Vestuário</option>
                        <option id="13d" class="ndfilter c13 final">Demais Produtos Têxteis</option>
                        
                        <option id="14a" class="ndfilter c14 final">Etanol</option>
                        <option id="14b" class="ndfilter c14 final">Biodiesel</option>
                        <option id="14c" class="ndfilter c14 final">Bagaços</option>
                        <option id="14e" class="ndfilter c14 final">Demais Produtos de Bioenergia</option>
                        
                        <option id="15a" class="ndfilter c15 final">Fumo Seco  Enrolado ou Picado</option>
                        <option id="15b" class="ndfilter c15 final">Fumo Curtido </option>
                        <option id="15c" class="ndfilter c15 final">Diversos Artigos do Fumo</option>
                        
                        <option id="16a" class="ndfilter c16 final">Madeiras sob Encomenda</option>
                        <option id="16b" class="ndfilter c16 final">Móveis, Acessórios, Componentes e Ferragens</option>
                        <option id="16c" class="ndfilter c16 final">Carvão Vegetal</option>
                        <option id="16d" class="ndfilter c16 final">Demais Produtos da Madeira</option>
                        
                        <option id="17a" class="ndfilter c17 final">Penas e Plumas</option>
                        <option id="17b" class="ndfilter c17 final">Chifres e Cascos</option>
                        <option id="17c" class="ndfilter c17 final">Borracha</option>
                        <option id="17d" class="ndfilter c17 final">Demais Produtos</option>
                        
                        <option id="18a" class="ndfilter c18">Rodoviário</option>
                        <option id="18b" class="ndfilter c18">Aéreo</option>
                        <option id="18c" class="ndfilter c18 final">Outros Modais</option>
                        
                        <option id="19a" class="ndfilter c19 final">de Grãos em Silos</option>
                        <option id="19b" class="ndfilter c19 final">Outros Armazenamentos</option>
                        
                        <option id="20a" class="ndfilter c20 final">Crédito</option>
                        <option id="20b" class="ndfilter c20 final">Empréstimos</option>
                        <option id="20c" class="ndfilter c20 final">Arrendamento Mercantil(Leasing)</option>
                        <option id="20d" value="46" class="ndfilter c20">Seguros</option>
                        <option id="20e" class="ndfilter c20 final">Demais Produtos de Intermediação Financeira</option>
                        
                        <option id="21a" class="ndfilter c21 final">Empresariais</option>
                        <option id="21b" class="ndfilter c21 final">Individuais</option>
                        
                        <option id="22a" class="ndfilter c22 final">Aluguéis</option>
                        <option id="22b" class="ndfilter c22 final">Parcerias</option>
                        <option id="22c" class="ndfilter c22 final">Arrendamentos</option>
                        
                        <option id="23a" value="47" class="ndfilter c23">Testes/ Análises Técnicas</option>
                        <option id="23a" class="ndfilter c23 final">Projetos de Irrigação</option>
                        <option id="23a" class="ndfilter c23 final">Pesquisa e Desenvolvimento</option>
                        
                        <option id="24a" class="ndfilter c24 final">Serviços de Plantio</option>
                        <option id="24b" class="ndfilter c24 final">Serviços de Colheita</option>
                        <option id="24c" class="ndfilter c24 final">Serviços de Aplicação de Defensivos</option>
                        
                        <option id="25a" class="ndfilter c25 final">Demais Serviços</option>


                    </select>
                    <select multiple size="26" id="filter3" class="categoryfilter" style="height:220px; final">
                        
                    <option id="0a0" class="rdfilter cc0 final">Arroz em Casca</option>
                    <option id="0a1" class="rdfilter cc0 final">Trigo em Casca</option>
                    <option id="0a2" class="rdfilter cc0 final">Cevada</option>
                    <option id="0a3" class="rdfilter cc0 final">Sorgo</option>
                    <option id="0a4" class="rdfilter cc0 final">Milheto</option>
                    <option id="0a5" class="rdfilter cc0 final">Demais Cereais</option>

                    <option id="0b0" class="rdfilter cc1 final">Café Arábica em Grão</option>
                    <option id="0b1" class="rdfilter cc1 final">Café Robusta em Grão</option>
                        
                    <option id="0g0" class="rdfilter cc6 final">Algodão em Caroço</option>
                    <option id="0g1" class="rdfilter cc6 final">Algodão em Pluma</option>
                        
                    <option id="0h0" class="rdfilter cc7 final">Abacaxi</option>
                    <option id="0h1" class="rdfilter cc7 final">Banana</option>
                    <option id="0h2" class="rdfilter cc7 final">Coco-Da-Baía</option>
                    <option id="0h3" class="rdfilter cc7 final">Goiaba</option>
                    <option id="0h4" class="rdfilter cc7 final">Limão</option>
                    <option id="0h5" class="rdfilter cc7 final">Maçã</option>
                    <option id="0h6" class="rdfilter cc7 final">Mamão</option>
                    <option id="0h7" class="rdfilter cc7 final">Manga</option>
                    <option id="0h8" class="rdfilter cc7 final">Maracujá</option>
                    <option id="0h9" class="rdfilter cc7 final">Melancia</option>
                    <option id="0h10" class="rdfilter cc7 final">Melão</option>
                    <option id="0h11" class="rdfilter cc7 final">Morango</option>
                    <option id="0h12" class="rdfilter cc7 final">Pêssego</option>
                    <option id="0h13" class="rdfilter cc7 final">Tangerina, Bergamota Ou Mexirica</option>
                    <option id="0h14" class="rdfilter cc7 final">Uva(Mesa)</option>
                    <option id="0h15" class="rdfilter cc7 final">Uva(Vinho Ou Suco)</option>

                    <option id="0i0" class="rdfilter cc8 final">Abobrinha</option>
                    <option id="0i1" class="rdfilter cc8 final">Beringela</option>
                    <option id="0i2" class="rdfilter cc8 final">Beterraba</option>
                    <option id="0i3" class="rdfilter cc8 final">Cebola</option>
                    <option id="0i4" class="rdfilter cc8 final">Cenoura</option>
                    <option id="0i5" class="rdfilter cc8 final">Chuchu</option>
                    <option id="0i6" class="rdfilter cc8 final">Feijão De Cor Em Grão</option>
                    <option id="0i7" class="rdfilter cc8 final">Feijão Preto Em Grão</option>
                    <option id="0i8" class="rdfilter cc8 final">Feijão-Fradinho, Caupi, De Corda Ou Macáçar</option>
                    <option id="0i9" class="rdfilter cc8 final">Jiló</option>
                    <option id="0i10" class="rdfilter cc8 final">Maxixe</option>
                    <option id="0i11" class="rdfilter cc8 final">Milho Verde(Espiga)</option>
                    <option id="0i12" class="rdfilter cc8 final">Pepino</option>
                    <option id="0i13" class="rdfilter cc8 final">Pimentão</option>
                    <option id="0i14" class="rdfilter cc8 final">Quiabo</option>
                    <option id="0i15" class="rdfilter cc8 final">Tomate Rasteiro (Industrial)</option>
                    <option id="0i16" class="rdfilter cc8 final">Tomate(Estaqueado)</option>
                    <option id="0i17" class="rdfilter cc8 final">Vagem(Feijão Vagem)</option>

                    <option id="0j0" class="rdfilter cc9 final">Agrião</option>
                    <option id="0j1" class="rdfilter cc9 final">Alface</option>
                    <option id="0j2" class="rdfilter cc9 final">Brócolis</option>
                    <option id="0j3" class="rdfilter cc9 final">Cebolinha</option>
                    <option id="0j4" class="rdfilter cc9 final">Coentro</option>
                    <option id="0j5" class="rdfilter cc9 final">Couve</option>
                    <option id="0j6" class="rdfilter cc9 final">Couve-Flor</option>
                    <option id="0j7" class="rdfilter cc9 final">Espinafre</option>
                    <option id="0j8" class="rdfilter cc9 final">Repolho</option>
                    <option id="0j9" class="rdfilter cc9 final">Salsa</option>
                    
                    <option id="0k0" class="rdfilter cc10 final">Batata Doce</option>
                    <option id="0k1" class="rdfilter cc10 final">Batata Inglesa</option>
                    <option id="0k2" class="rdfilter cc10 final">Batata-Baroa(Mandioquinha)</option>
                    <option id="0k3" class="rdfilter cc10 final">Inhame</option>
                    <option id="0k4" class="rdfilter cc10 final">Mandioca(Aipim Ou Macaxeira)</option>
                    <option id="0k5" class="rdfilter cc10 final">Nabo</option>
                    <option id="0k6" class="rdfilter cc10 final">Rabanete</option>

                    <option id="0l0" class="rdfilter cc11 final">Amendoim Em Casca</option>
                    <option id="0l1" class="rdfilter cc11 final">Girassol(Semente)</option>
                    <option id="0l2" class="rdfilter cc11 final">Cacau(Amêndoa)</option>
                        
                    <option id="1a0" class="rdfilter cc12 final">Nelore</option>
                    <option id="1a1" class="rdfilter cc12 final">Jersey</option>
                    <option id="1a2" class="rdfilter cc12 final">Gir</option>
                    <option id="1a3" class="rdfilter cc12 final">Canchim</option>
                    <option id="1a4" class="rdfilter cc12 final">Senepol</option>
                    <option id="1a5" class="rdfilter cc12 final">Angus</option>
                    <option id="1a6" class="rdfilter cc12 final">Caracu</option>
                    <option id="1a7" class="rdfilter cc12 final">Charolês</option>
                    <option id="1a8" class="rdfilter cc12 final">Guzerá</option>
                    <option id="1a9" class="rdfilter cc12 final">Outras Raças Bovinas</option>

                    <option id="1b0" class="rdfilter cc13 final">Leite De Vaca</option>
                    <option id="1b1" class="rdfilter cc13 final">Leite De Búfala</option>
                    <option id="1b2" class="rdfilter cc13 final">Leite De Cabra</option>
                    <option id="1b3" class="rdfilter cc13 final">Leite De Outros Animais</option>

                    <option id="1c0" class="rdfilter cc14 final">Canastrinho</option>
                    <option id="1c1" class="rdfilter cc14 final">Canastra</option>
                    <option id="1c2" class="rdfilter cc14 final">Canastrão</option>
                    <option id="1c3" class="rdfilter cc14 final">Piau</option>
                    <option id="1c4" class="rdfilter cc14 final">Nilo Canastra</option>
                    <option id="1c5" class="rdfilter cc14 final">Outras Raças Suínas</option>

                    <option id="1d0" class="rdfilter cc15 final">Frangos</option>
                    <option id="1d1" class="rdfilter cc15 final">Outras Aves</option>
                        
                    <option id="1e0" class="rdfilter cc151 final">Ovos De Galinha</option>
                    <option id="1e1" class="rdfilter cc151 final">Ovos De Outros Animais</option>

                    <option id="1f0" class="rdfilter cc16 final">Asininos</option>
                    <option id="1f1" class="rdfilter cc16 final">Bubalinos</option>
                    <option id="1f2" class="rdfilter cc16 final">Cães</option>
                    <option id="1f3" class="rdfilter cc16 final">Caprinos</option>
                    <option id="1f4" class="rdfilter cc16 final">Coelhos</option>
                    <option id="1f5" class="rdfilter cc16 final">Cavalos</option>
                    <option id="1f6" class="rdfilter cc16 final">Muares</option>
                    <option id="1f7" class="rdfilter cc16 final">Ovinos</option>
                    <option id="1f8" class="rdfilter cc16 final">Outros</option>

                    <option id="1g0" class="rdfilter cc17 final">Produtos De Apicultura</option>
                    <option id="1g1" class="rdfilter cc17 final">Casulos Do Bicho-Da-Seda</option>
                    <option id="1g2" class="rdfilter cc17 final">Produtos De Ranicultura</option>
                    <option id="1g3" class="rdfilter cc17 final">Demais Produtos De Origem Animal</option>

                    <option id="2a0" class="rdfilter cc18 final">Eucalipto</option>
                    <option id="2a1" class="rdfilter cc18 final">Acácia-Negra</option>
                    <option id="2a2" class="rdfilter cc18 final">Mogno</option>
                    <option id="2a3" class="rdfilter cc18 final">Pinheiro Americano</option>
                    <option id="2a4" class="rdfilter cc18 final">Pinheiro Brasileiro (Araucária)</option>
                    <option id="2a5" class="rdfilter cc18 final">Cascas</option>
                    <option id="2a6" class="rdfilter cc18 final">Outros Produtos Da Silvicultura</option>

                    <option id="2b0" class="rdfilter cc19 final">Açaí(Fruto)</option>
                    <option id="2b1" class="rdfilter cc19 final">Babaçu(Amêndoa)</option>
                    <option id="2b2" class="rdfilter cc19 final">Borracha (Látex Coagulado)</option>
                    <option id="2b3" class="rdfilter cc19 final">Carnaúba (Cera)</option>
                    <option id="2b4" class="rdfilter cc19 final">Castanha-Do-Pará</option>
                    <option id="2b5" class="rdfilter cc19 final">Cupuaçu</option>
                    <option id="2b6" class="rdfilter cc19 final">Palmito</option>
                    <option id="2b7" class="rdfilter cc19 final">Pinhão</option>
                    <option id="2b8" class="rdfilter cc19 final">Carnaúba (Pó De Palha)</option>
                    <option id="2b9" class="rdfilter cc19 final">Demais Produtos da Extração Vegetal</option>

                    <option id="3a0" class="rdfilter cc20 final">Salmão</option>
                    <option id="3a1" class="rdfilter cc20 final">Sardinha</option>
                    <option id="3a2" class="rdfilter cc20 final">Cação</option>
                    <option id="3a3" class="rdfilter cc20 final">Corvina</option>
                    <option id="3a4" class="rdfilter cc20 final">Saint Peter</option>
                    <option id="3a5" class="rdfilter cc20 final">Tainha</option>
                    <option id="3a6" class="rdfilter cc20 final">Atum</option>
                    <option id="3a7" class="rdfilter cc20 final">Pescada Branca</option>
                    <option id="3a8" class="rdfilter cc20 final">Pintado</option>
                    <option id="3a9" class="rdfilter cc20 final">Anchova</option>
                    <option id="3a10" class="rdfilter cc20 final">Linguado</option>
                    <option id="3a11" class="rdfilter cc20 final">Tilápia</option>
                    <option id="3a12" class="rdfilter cc20 final">Outros Peixes</option>

                    <option id="3b0" class="rdfilter cc21 final">Lula</option>
                    <option id="3b1" class="rdfilter cc21 final">Polvo</option>
                    <option id="3b2" class="rdfilter cc21 final">Demais Moluscos</option>

                    <option id="3c0" class="rdfilter cc22 final">Mexilhão</option>
                    <option id="3c1" class="rdfilter cc22 final">Ostra</option>
                    <option id="3c2" class="rdfilter cc22 final">Demais Crustáceos</option>

                    <option id="3d0" class="rdfilter cc23 final">Camarão Cinza</option>
                    <option id="3d1" class="rdfilter cc23 final">Camarão Rosa</option>
                    <option id="3d2" class="rdfilter cc23 final">Outros</option>

                    <option id="5a0" class="rdfilter cc24 final">Macronutrientes </option>
                    <option id="5a1" class="rdfilter cc24 final">Micronutrientes</option>
                    <option id="5a2" class="rdfilter cc24 final">Corretivos</option>
                    <option id="5a3" class="rdfilter cc24 final">Adubos Orgânicos</option>
                    <option id="5a4" class="rdfilter cc24 final">Demais Adubos Ou Fertilizantes</option>

                    <option id="5b0" class="rdfilter cc25 final">Herbicidas</option>
                    <option id="5b1" class="rdfilter cc25 final">Fungicidas</option>
                    <option id="5b2" class="rdfilter cc25 final">Inseticidas</option>
                    <option id="5b3" class="rdfilter cc25 final">Nematócitos</option>

                    <option id="5c0" class="rdfilter cc26 final">Parasitóides</option>
                    <option id="5c1" class="rdfilter cc26 final">Predadores</option>
                    <option id="5c2" class="rdfilter cc26 final">Patógenos</option>
                        
                    <option id="6a0" class="rdfilter cc27 final">Tratores</option>
                    <option id="6a1" class="rdfilter cc27 final">Colheitadeiras</option>
                    <option id="6a2" class="rdfilter cc27 final">Pulverizadores</option>
                    <option id="6a3" class="rdfilter cc27 final">Máquinas Multi-Função</option>
                    <option id="6a4" class="rdfilter cc27 final">Outros</option>

                    <option id="6b0" class="rdfilter cc28 final">Caminhonetes</option>
                    <option id="6b1" class="rdfilter cc28 final">Caminhões</option>
                    <option id="6b2" class="rdfilter cc28 final">Carretas E Trailers</option>
                    <option id="6b3" class="rdfilter cc28 final">Treminhões</option>
                    <option id="6b4" class="rdfilter cc28 final">Demais Veículos</option>

                    <option id="6c0" class="rdfilter cc29 final">Arados</option>
                    <option id="6c1" class="rdfilter cc29 final">Colheita</option>
                    <option id="6c2" class="rdfilter cc29 final">Cultivadores</option>
                    <option id="6c3" class="rdfilter cc29 final">Grades </option>
                    <option id="6c4" class="rdfilter cc29 final">Plainas</option>
                    <option id="6c5" class="rdfilter cc29 final">Roçadeiras</option>
                    <option id="6c6" class="rdfilter cc29 final">Semeadoras</option>
                    <option id="6c7" class="rdfilter cc29 final">Diversos</option>

                    <option id="6d0" class="rdfilter cc30 final">Peças Para Máquinas Agrícolas</option>
                    <option id="6d1" class="rdfilter cc30 final">Peças Para Máquias De Transporte</option>
                    <option id="6d2" class="rdfilter cc30 final">Peças Para Silos</option>
                    <option id="6d3" class="rdfilter cc30 final">Demais Peças</option>

                    <option id="6e0" class="rdfilter cc31 final">Baias, Bretes, Palanques E Cercas</option>
                    <option id="6e1" class="rdfilter cc31 final">Barracões E Construções Rurais</option>
                    <option id="6e3" class="rdfilter cc31 final">Demais Instalações Rurais</option>

                    <option id="6f0" class="rdfilter cc32 final">Sistemas De Irrigação</option>
                    <option id="6f1" class="rdfilter cc32 final">Instrumentos Para Agricultura De Precisão</option>
                    <option id="6f2" class="rdfilter cc32 final">Equipamentos Meteorológicos</option>

                    <option id="6g0" class="rdfilter cc33 final">Ferramentas Manuais</option>
                    <option id="6g1" class="rdfilter cc33 final">Bombas Costais</option>
                    <option id="6g2" class="rdfilter cc33 final">Equipamentos De Proteção Individual (Epis)</option>

                    <option id="7a0" class="rdfilter cc34 final">Rações Para Bovinos</option>
                    <option id="7a1" class="rdfilter cc34 final">Sais Minerais</option>
                    <option id="7a2" class="rdfilter cc34 final">Silagens E Forragens</option>
                    <option id="7a3" class="rdfilter cc34 final">Rações Para Demais Animais</option>
                    <option id="7a4" class="rdfilter cc34 final">Suplementos Alimentares</option>
                    <option id="7a5" class="rdfilter cc34 final">Demais Produtos Alimentares Para Animais</option>

                    <option id="7b0" class="rdfilter cc35 final">Medicamentos Animais</option>
                    <option id="7b1" class="rdfilter cc35 final">Outros Produtos Farmacêuticos</option>
                        
                    <option id="8a0" class="rdfilter cc36 final">Açúcar Branco Refinado</option>
                    <option id="8a1" class="rdfilter cc36 final">Açúcar Branco Cristal</option>
                    <option id="8a2" class="rdfilter cc36 final">Açúcar Mascavo</option>
                    <option id="8a3" class="rdfilter cc36 final">Demais Açúcares</option>
                    <option id="8a4" class="rdfilter cc36 final">Doces E Conservas Açucaradas</option>
                    <option id="8a5" class="rdfilter cc36 final">Demais Derivados Do Açúcar</option>

                    <option id="8b0" class="rdfilter cc37 final">Arroz Em Grão</option>
                    <option id="8b1" class="rdfilter cc37 final">Demais Produtos Derivados Do Arroz</option>
                        
                    <option id="8c0" class="rdfilter cc38 final">Café Em Grão Torrado</option>
                    <option id="8c1" class="rdfilter cc38 final">Café Em Grão Moído</option>
                    <option id="8c2" class="rdfilter cc38 final">Demais Beneficiamentos Cafeeiros</option>
                        
                    <option id="8d0" class="rdfilter cc39 final">Produtos Derivados Do Trigo</option>
                    <option id="8d1" class="rdfilter cc39 final">Produtos Derivados Da Mandioca</option>
                    <option id="8d2" class="rdfilter cc39 final">Produtos Derivados Do Milho</option>
                        
                    <option id="8e0" class="rdfilter cc40 final">Óleos e Gorduras De Origem Animal</option>
                    <option id="8e1" class="rdfilter cc40 final">Óleos e Gorduras Origem Vegetal</option>
                        
                    <option id="9a0" class="rdfilter cc41 final">Cortes Tradicionais</option>
                    <option id="9a1" class="rdfilter cc41 final">Cortes Premium</option>
                        
                    <option id="9f0" class="rdfilter cc42 final">De Vaca</option>
                    <option id="9f1" class="rdfilter cc42 final">De Outros Animais</option>
                    <option id="9f2" class="rdfilter cc42 final">Leites Especiais (Sem Lactose, Etc)</option>
                        
                    <option id="9g0" class="rdfilter cc43 final">Queijo</option>
                    <option id="9g1" class="rdfilter cc43 final">Requeijão</option>
                    <option id="9g2" class="rdfilter cc43 final">Manteiga</option>
                    <option id="9g3" class="rdfilter cc43 final">Iogurtes</option>
                    <option id="9g4" class="rdfilter cc43 final">Creme De Leite E Leite Condensado</option>
                    <option id="9g5" class="rdfilter cc43 final">Leite Em Pó</option>
                    <option id="9g6" class="rdfilter cc43 final">Demais Produtos Do Laticínio</option>
                        
                    <option id="11a0" class="rdfilter cc44 final">Para Vestuário</option>
                    <option id="11a1" class="rdfilter cc44 final">Artigos De Selaria</option>
                    <option id="11a2" class="rdfilter cc44 final">Selas E Arreios</option>
                    <option id="11a3" class="rdfilter cc44 final">Para Demais Funções</option>

                    <option id="11b0" class="rdfilter cc45 final">Couro para Calçados</option>
                    <option id="11b1" class="rdfilter cc45 final">Solas E Saltos</option>
                    <option id="11b2" class="rdfilter cc45 final">Gáspeas</option>
                    <option id="11b3" class="rdfilter cc45 final">Biqueiras</option>
                    <option id="11b4" class="rdfilter cc45 final">Demais Partes Dos Calçados</option>
                    <option id="11b5" class="rdfilter cc45 final">Calçados Acabados</option>

                    <option id="20d0" class="rdfilter cc46 final">Seguro De Safra</option>
                    <option id="20d1" class="rdfilter cc46 final">Seguro De Carga</option>
                    <option id="20d2" class="rdfilter cc46 final">Seguro De Propriedade</option>
                    <option id="20d3" class="rdfilter cc46 final">Resseguros</option>
                    <option id="20d4" class="rdfilter cc46 final">Demais Seguros</option>

                    <option id="23a0" class="rdfilter cc47 final">Amostragem De Solo</option>
                    <option id="23a1" class="rdfilter cc47 final">Testes</option>
                    <option id="23a2" class="rdfilter cc47 final">Análises E Laudos Técnicos</option>


                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnSave1" class="btn btn-primary" data-dismiss="modal">Finalizar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->  
    </div>
  
    <div id="compraModal2" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	 <select multiple size="26" id="filter12" class="categoryfilter" style="height:220px;">
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
                    <select multiple size="26" id="filter22" class="categoryfilter"  style="height:220px;">
                    
                        <option id="0a" value="0" class="ndfilter c0">Arroz, Trigo e Outros Cereais</option>
                        <option id="0b" value="1" class="ndfilter c0">Café em Grão</option>
                        <option id="0c" class="ndfilter c0 final">Laranja</option>
                        <option id="0d" class="ndfilter c0 final">Cana-de-açúcar</option>
                        <option id="0e" class="ndfilter c0 final">Milho em Grão</option>
                        <option id="0f" class="ndfilter c0 final">Soja  em Grão</option>
                        <option id="0g" value="6" class="ndfilter c0">Algodão</option>
                        <option id="0h" value="7" class="ndfilter c0">Frutas</option>
                        <option id="0i" value="8" class="ndfilter c0">Legumes</option>
                        <option id="0j" value="9" class="ndfilter c0">Verduras</option>
                        <option id="0k" value="10" class="ndfilter c0">Tubérculos</option>
                        <option id="0l" value="11" class="ndfilter c0">Oleaginosas e Sementes</option>
                        <option id="0m" class="ndfilter c0 final">Demais Produtos Agrícolas</option>

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

                        <option id="4a" class="ndfilter c4 final">Sementes</option>
                        <option id="4b" class="ndfilter c4 final">Mudas Frutíferas</option>
                        <option id="4c" class="ndfilter c4 final">Mudas Florestais</option>
                        <option id="4d" class="ndfilter c4 final">Demais Mudas</option>

                        <option id="5a" value="24" class="ndfilter c5">Adubos e Fertilizantes</option>
                        <option id="5b" value="25" class="ndfilter c5">Defensivos Agrícolas</option>
                        <option id="5c" value="26" class="ndfilter c5">Controles Biológicos</option>
                        <option id="5d" class="ndfilter c5 final">Demais Químicos Orgânicos</option>
                        <option id="5e" class="ndfilter c5 final">Demais Químicos Inorgânicos</option>

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
                        <option id="8f" class="ndfilter c8 final">Derivados dos Demais Vegetais</option>
                        
                        <option id="9a" value="41" class="ndfilter c9">Carne Bovina</option>
                        <option id="9b" class="ndfilter c9 final">Carne Suína</option>
                        <option id="9c" class="ndfilter c9 final">Carne de Aves</option>
                        <option id="9d" class="ndfilter c9 final">Pescado Industrializado</option>
                        <option id="9e" class="ndfilter c9 final">Carnes de Outros Animais</option>
                        <option id="9f" value="42" class="ndfilter c9">Leite Pasteurizado</option>
                        <option id="9g" value="43" class="ndfilter c9">Laticínios</option>
                        
                        <option id="10a" class="ndfilter c10 final">Concentrados de Frutas</option>
                        <option id="10b" class="ndfilter c10 final">Concentrados à base de Verduras</option>
                        <option id="10c" class="ndfilter c10 final">Concentrados à base de Outros Vegetais</option>
                        <option id="10d" class="ndfilter c10 final">Demais Ingredientes para Sucos e Bebidas</option>
                        
                        <option id="11a" value="44" class="ndfilter c11">Artefatos de Couro</option>
                        <option id="11b" value="45" class="ndfilter c11">Insumos para Calçados</option>
                        
                        <option id="12a" class="ndfilter c12 final">Celulose</option>
                        <option id="12b" class="ndfilter c12 final">Papel</option>
                        <option id="12c" class="ndfilter c12 final">Demais Derivados da Celulose e Papel</option>
                        
                        <option id="13a" class="ndfilter c13 final">Fios</option>
                        <option id="13b" class="ndfilter c13 final">Fibras Têxteis Beneficiadas</option>
                        <option id="13c" class="ndfilter c13 final">Produtos para Vestuário</option>
                        <option id="13d" class="ndfilter c13 final">Demais Produtos Têxteis</option>
                        
                        <option id="14a" class="ndfilter c14 final">Etanol</option>
                        <option id="14b" class="ndfilter c14 final">Biodiesel</option>
                        <option id="14c" class="ndfilter c14 final">Bagaços</option>
                        <option id="14e" class="ndfilter c14 final">Demais Produtos de Bioenergia</option>
                        
                        <option id="15a" class="ndfilter c15 final">Fumo Seco  Enrolado ou Picado</option>
                        <option id="15b" class="ndfilter c15 final">Fumo Curtido </option>
                        <option id="15c" class="ndfilter c15 final">Diversos Artigos do Fumo</option>
                        
                        <option id="16a" class="ndfilter c16 final">Madeiras sob Encomenda</option>
                        <option id="16b" class="ndfilter c16 final">Móveis, Acessórios, Componentes e Ferragens</option>
                        <option id="16c" class="ndfilter c16 final">Carvão Vegetal</option>
                        <option id="16d" class="ndfilter c16 final">Demais Produtos da Madeira</option>
                        
                        <option id="17a" class="ndfilter c17 final">Penas e Plumas</option>
                        <option id="17b" class="ndfilter c17 final">Chifres e Cascos</option>
                        <option id="17c" class="ndfilter c17 final">Borracha</option>
                        <option id="17d" class="ndfilter c17 final">Demais Produtos</option>
                        
                        <option id="18a" class="ndfilter c18">Rodoviário</option>
                        <option id="18b" class="ndfilter c18">Aéreo</option>
                        <option id="18c" class="ndfilter c18 final">Outros Modais</option>
                        
                        <option id="19a" class="ndfilter c19 final">de Grãos em Silos</option>
                        <option id="19b" class="ndfilter c19 final">Outros Armazenamentos</option>
                        
                        <option id="20a" class="ndfilter c20 final">Crédito</option>
                        <option id="20b" class="ndfilter c20 final">Empréstimos</option>
                        <option id="20c" class="ndfilter c20 final">Arrendamento Mercantil(Leasing)</option>
                        <option id="20d" value="46" class="ndfilter c20">Seguros</option>
                        <option id="20e" class="ndfilter c20 final">Demais Produtos de Intermediação Financeira</option>
                        
                        <option id="21a" class="ndfilter c21 final">Empresariais</option>
                        <option id="21b" class="ndfilter c21 final">Individuais</option>
                        
                        <option id="22a" class="ndfilter c22 final">Aluguéis</option>
                        <option id="22b" class="ndfilter c22 final">Parcerias</option>
                        <option id="22c" class="ndfilter c22 final">Arrendamentos</option>
                        
                        <option id="23a" value="47" class="ndfilter c23">Testes/ Análises Técnicas</option>
                        <option id="23a" class="ndfilter c23 final">Projetos de Irrigação</option>
                        <option id="23a" class="ndfilter c23 final">Pesquisa e Desenvolvimento</option>
                        
                        <option id="24a" class="ndfilter c24 final">Serviços de Plantio</option>
                        <option id="24b" class="ndfilter c24 final">Serviços de Colheita</option>
                        <option id="24c" class="ndfilter c24 final">Serviços de Aplicação de Defensivos</option>
                        
                        <option id="25a" class="ndfilter c25 final">Demais Serviços</option>


                    </select>
                    <select multiple size="26" id="filter32" class="categoryfilter" style="height:220px; final">
                        
                    <option id="0a0" class="rdfilter cc0 final">Arroz em Casca</option>
                    <option id="0a1" class="rdfilter cc0 final">Trigo em Casca</option>
                    <option id="0a2" class="rdfilter cc0 final">Cevada</option>
                    <option id="0a3" class="rdfilter cc0 final">Sorgo</option>
                    <option id="0a4" class="rdfilter cc0 final">Milheto</option>
                    <option id="0a5" class="rdfilter cc0 final">Demais Cereais</option>

                    <option id="0b0" class="rdfilter cc1 final">Café Arábica em Grão</option>
                    <option id="0b1" class="rdfilter cc1 final">Café Robusta em Grão</option>
                        
                    <option id="0g0" class="rdfilter cc6 final">Algodão em Caroço</option>
                    <option id="0g1" class="rdfilter cc6 final">Algodão em Pluma</option>
                        
                    <option id="0h0" class="rdfilter cc7 final">Abacaxi</option>
                    <option id="0h1" class="rdfilter cc7 final">Banana</option>
                    <option id="0h2" class="rdfilter cc7 final">Coco-Da-Baía</option>
                    <option id="0h3" class="rdfilter cc7 final">Goiaba</option>
                    <option id="0h4" class="rdfilter cc7 final">Limão</option>
                    <option id="0h5" class="rdfilter cc7 final">Maçã</option>
                    <option id="0h6" class="rdfilter cc7 final">Mamão</option>
                    <option id="0h7" class="rdfilter cc7 final">Manga</option>
                    <option id="0h8" class="rdfilter cc7 final">Maracujá</option>
                    <option id="0h9" class="rdfilter cc7 final">Melancia</option>
                    <option id="0h10" class="rdfilter cc7 final">Melão</option>
                    <option id="0h11" class="rdfilter cc7 final">Morango</option>
                    <option id="0h12" class="rdfilter cc7 final">Pêssego</option>
                    <option id="0h13" class="rdfilter cc7 final">Tangerina, Bergamota Ou Mexirica</option>
                    <option id="0h14" class="rdfilter cc7 final">Uva(Mesa)</option>
                    <option id="0h15" class="rdfilter cc7 final">Uva(Vinho Ou Suco)</option>

                    <option id="0i0" class="rdfilter cc8 final">Abobrinha</option>
                    <option id="0i1" class="rdfilter cc8 final">Beringela</option>
                    <option id="0i2" class="rdfilter cc8 final">Beterraba</option>
                    <option id="0i3" class="rdfilter cc8 final">Cebola</option>
                    <option id="0i4" class="rdfilter cc8 final">Cenoura</option>
                    <option id="0i5" class="rdfilter cc8 final">Chuchu</option>
                    <option id="0i6" class="rdfilter cc8 final">Feijão De Cor Em Grão</option>
                    <option id="0i7" class="rdfilter cc8 final">Feijão Preto Em Grão</option>
                    <option id="0i8" class="rdfilter cc8 final">Feijão-Fradinho, Caupi, De Corda Ou Macáçar</option>
                    <option id="0i9" class="rdfilter cc8 final">Jiló</option>
                    <option id="0i10" class="rdfilter cc8 final">Maxixe</option>
                    <option id="0i11" class="rdfilter cc8 final">Milho Verde(Espiga)</option>
                    <option id="0i12" class="rdfilter cc8 final">Pepino</option>
                    <option id="0i13" class="rdfilter cc8 final">Pimentão</option>
                    <option id="0i14" class="rdfilter cc8 final">Quiabo</option>
                    <option id="0i15" class="rdfilter cc8 final">Tomate Rasteiro (Industrial)</option>
                    <option id="0i16" class="rdfilter cc8 final">Tomate(Estaqueado)</option>
                    <option id="0i17" class="rdfilter cc8 final">Vagem(Feijão Vagem)</option>

                    <option id="0j0" class="rdfilter cc9 final">Agrião</option>
                    <option id="0j1" class="rdfilter cc9 final">Alface</option>
                    <option id="0j2" class="rdfilter cc9 final">Brócolis</option>
                    <option id="0j3" class="rdfilter cc9 final">Cebolinha</option>
                    <option id="0j4" class="rdfilter cc9 final">Coentro</option>
                    <option id="0j5" class="rdfilter cc9 final">Couve</option>
                    <option id="0j6" class="rdfilter cc9 final">Couve-Flor</option>
                    <option id="0j7" class="rdfilter cc9 final">Espinafre</option>
                    <option id="0j8" class="rdfilter cc9 final">Repolho</option>
                    <option id="0j9" class="rdfilter cc9 final">Salsa</option>
                    
                    <option id="0k0" class="rdfilter cc10 final">Batata Doce</option>
                    <option id="0k1" class="rdfilter cc10 final">Batata Inglesa</option>
                    <option id="0k2" class="rdfilter cc10 final">Batata-Baroa(Mandioquinha)</option>
                    <option id="0k3" class="rdfilter cc10 final">Inhame</option>
                    <option id="0k4" class="rdfilter cc10 final">Mandioca(Aipim Ou Macaxeira)</option>
                    <option id="0k5" class="rdfilter cc10 final">Nabo</option>
                    <option id="0k6" class="rdfilter cc10 final">Rabanete</option>

                    <option id="0l0" class="rdfilter cc11 final">Amendoim Em Casca</option>
                    <option id="0l1" class="rdfilter cc11 final">Girassol(Semente)</option>
                    <option id="0l2" class="rdfilter cc11 final">Cacau(Amêndoa)</option>
                        
                    <option id="1a0" class="rdfilter cc12 final">Nelore</option>
                    <option id="1a1" class="rdfilter cc12 final">Jersey</option>
                    <option id="1a2" class="rdfilter cc12 final">Gir</option>
                    <option id="1a3" class="rdfilter cc12 final">Canchim</option>
                    <option id="1a4" class="rdfilter cc12 final">Senepol</option>
                    <option id="1a5" class="rdfilter cc12 final">Angus</option>
                    <option id="1a6" class="rdfilter cc12 final">Caracu</option>
                    <option id="1a7" class="rdfilter cc12 final">Charolês</option>
                    <option id="1a8" class="rdfilter cc12 final">Guzerá</option>
                    <option id="1a9" class="rdfilter cc12 final">Outras Raças Bovinas</option>

                    <option id="1b0" class="rdfilter cc13 final">Leite De Vaca</option>
                    <option id="1b1" class="rdfilter cc13 final">Leite De Búfala</option>
                    <option id="1b2" class="rdfilter cc13 final">Leite De Cabra</option>
                    <option id="1b3" class="rdfilter cc13 final">Leite De Outros Animais</option>

                    <option id="1c0" class="rdfilter cc14 final">Canastrinho</option>
                    <option id="1c1" class="rdfilter cc14 final">Canastra</option>
                    <option id="1c2" class="rdfilter cc14 final">Canastrão</option>
                    <option id="1c3" class="rdfilter cc14 final">Piau</option>
                    <option id="1c4" class="rdfilter cc14 final">Nilo Canastra</option>
                    <option id="1c5" class="rdfilter cc14 final">Outras Raças Suínas</option>

                    <option id="1d0" class="rdfilter cc15 final">Frangos</option>
                    <option id="1d1" class="rdfilter cc15 final">Outras Aves</option>
                        
                    <option id="1e0" class="rdfilter cc151 final">Ovos De Galinha</option>
                    <option id="1e1" class="rdfilter cc151 final">Ovos De Outros Animais</option>

                    <option id="1f0" class="rdfilter cc16 final">Asininos</option>
                    <option id="1f1" class="rdfilter cc16 final">Bubalinos</option>
                    <option id="1f2" class="rdfilter cc16 final">Cães</option>
                    <option id="1f3" class="rdfilter cc16 final">Caprinos</option>
                    <option id="1f4" class="rdfilter cc16 final">Coelhos</option>
                    <option id="1f5" class="rdfilter cc16 final">Cavalos</option>
                    <option id="1f6" class="rdfilter cc16 final">Muares</option>
                    <option id="1f7" class="rdfilter cc16 final">Ovinos</option>
                    <option id="1f8" class="rdfilter cc16 final">Outros</option>

                    <option id="1g0" class="rdfilter cc17 final">Produtos De Apicultura</option>
                    <option id="1g1" class="rdfilter cc17 final">Casulos Do Bicho-Da-Seda</option>
                    <option id="1g2" class="rdfilter cc17 final">Produtos De Ranicultura</option>
                    <option id="1g3" class="rdfilter cc17 final">Demais Produtos De Origem Animal</option>

                    <option id="2a0" class="rdfilter cc18 final">Eucalipto</option>
                    <option id="2a1" class="rdfilter cc18 final">Acácia-Negra</option>
                    <option id="2a2" class="rdfilter cc18 final">Mogno</option>
                    <option id="2a3" class="rdfilter cc18 final">Pinheiro Americano</option>
                    <option id="2a4" class="rdfilter cc18 final">Pinheiro Brasileiro (Araucária)</option>
                    <option id="2a5" class="rdfilter cc18 final">Cascas</option>
                    <option id="2a6" class="rdfilter cc18 final">Outros Produtos Da Silvicultura</option>

                    <option id="2b0" class="rdfilter cc19 final">Açaí(Fruto)</option>
                    <option id="2b1" class="rdfilter cc19 final">Babaçu(Amêndoa)</option>
                    <option id="2b2" class="rdfilter cc19 final">Borracha (Látex Coagulado)</option>
                    <option id="2b3" class="rdfilter cc19 final">Carnaúba (Cera)</option>
                    <option id="2b4" class="rdfilter cc19 final">Castanha-Do-Pará</option>
                    <option id="2b5" class="rdfilter cc19 final">Cupuaçu</option>
                    <option id="2b6" class="rdfilter cc19 final">Palmito</option>
                    <option id="2b7" class="rdfilter cc19 final">Pinhão</option>
                    <option id="2b8" class="rdfilter cc19 final">Carnaúba (Pó De Palha)</option>
                    <option id="2b9" class="rdfilter cc19 final">Demais Produtos da Extração Vegetal</option>

                    <option id="3a0" class="rdfilter cc20 final">Salmão</option>
                    <option id="3a1" class="rdfilter cc20 final">Sardinha</option>
                    <option id="3a2" class="rdfilter cc20 final">Cação</option>
                    <option id="3a3" class="rdfilter cc20 final">Corvina</option>
                    <option id="3a4" class="rdfilter cc20 final">Saint Peter</option>
                    <option id="3a5" class="rdfilter cc20 final">Tainha</option>
                    <option id="3a6" class="rdfilter cc20 final">Atum</option>
                    <option id="3a7" class="rdfilter cc20 final">Pescada Branca</option>
                    <option id="3a8" class="rdfilter cc20 final">Pintado</option>
                    <option id="3a9" class="rdfilter cc20 final">Anchova</option>
                    <option id="3a10" class="rdfilter cc20 final">Linguado</option>
                    <option id="3a11" class="rdfilter cc20 final">Tilápia</option>
                    <option id="3a12" class="rdfilter cc20 final">Outros Peixes</option>

                    <option id="3b0" class="rdfilter cc21 final">Lula</option>
                    <option id="3b1" class="rdfilter cc21 final">Polvo</option>
                    <option id="3b2" class="rdfilter cc21 final">Demais Moluscos</option>

                    <option id="3c0" class="rdfilter cc22 final">Mexilhão</option>
                    <option id="3c1" class="rdfilter cc22 final">Ostra</option>
                    <option id="3c2" class="rdfilter cc22 final">Demais Crustáceos</option>

                    <option id="3d0" class="rdfilter cc23 final">Camarão Cinza</option>
                    <option id="3d1" class="rdfilter cc23 final">Camarão Rosa</option>
                    <option id="3d2" class="rdfilter cc23 final">Outros</option>

                    <option id="5a0" class="rdfilter cc24 final">Macronutrientes </option>
                    <option id="5a1" class="rdfilter cc24 final">Micronutrientes</option>
                    <option id="5a2" class="rdfilter cc24 final">Corretivos</option>
                    <option id="5a3" class="rdfilter cc24 final">Adubos Orgânicos</option>
                    <option id="5a4" class="rdfilter cc24 final">Demais Adubos Ou Fertilizantes</option>

                    <option id="5b0" class="rdfilter cc25 final">Herbicidas</option>
                    <option id="5b1" class="rdfilter cc25 final">Fungicidas</option>
                    <option id="5b2" class="rdfilter cc25 final">Inseticidas</option>
                    <option id="5b3" class="rdfilter cc25 final">Nematócitos</option>

                    <option id="5c0" class="rdfilter cc26 final">Parasitóides</option>
                    <option id="5c1" class="rdfilter cc26 final">Predadores</option>
                    <option id="5c2" class="rdfilter cc26 final">Patógenos</option>
                        
                    <option id="6a0" class="rdfilter cc27 final">Tratores</option>
                    <option id="6a1" class="rdfilter cc27 final">Colheitadeiras</option>
                    <option id="6a2" class="rdfilter cc27 final">Pulverizadores</option>
                    <option id="6a3" class="rdfilter cc27 final">Máquinas Multi-Função</option>
                    <option id="6a4" class="rdfilter cc27 final">Outros</option>

                    <option id="6b0" class="rdfilter cc28 final">Caminhonetes</option>
                    <option id="6b1" class="rdfilter cc28 final">Caminhões</option>
                    <option id="6b2" class="rdfilter cc28 final">Carretas E Trailers</option>
                    <option id="6b3" class="rdfilter cc28 final">Treminhões</option>
                    <option id="6b4" class="rdfilter cc28 final">Demais Veículos</option>

                    <option id="6c0" class="rdfilter cc29 final">Arados</option>
                    <option id="6c1" class="rdfilter cc29 final">Colheita</option>
                    <option id="6c2" class="rdfilter cc29 final">Cultivadores</option>
                    <option id="6c3" class="rdfilter cc29 final">Grades </option>
                    <option id="6c4" class="rdfilter cc29 final">Plainas</option>
                    <option id="6c5" class="rdfilter cc29 final">Roçadeiras</option>
                    <option id="6c6" class="rdfilter cc29 final">Semeadoras</option>
                    <option id="6c7" class="rdfilter cc29 final">Diversos</option>

                    <option id="6d0" class="rdfilter cc30 final">Peças Para Máquinas Agrícolas</option>
                    <option id="6d1" class="rdfilter cc30 final">Peças Para Máquias De Transporte</option>
                    <option id="6d2" class="rdfilter cc30 final">Peças Para Silos</option>
                    <option id="6d3" class="rdfilter cc30 final">Demais Peças</option>

                    <option id="6e0" class="rdfilter cc31 final">Baias, Bretes, Palanques E Cercas</option>
                    <option id="6e1" class="rdfilter cc31 final">Barracões E Construções Rurais</option>
                    <option id="6e3" class="rdfilter cc31 final">Demais Instalações Rurais</option>

                    <option id="6f0" class="rdfilter cc32 final">Sistemas De Irrigação</option>
                    <option id="6f1" class="rdfilter cc32 final">Instrumentos Para Agricultura De Precisão</option>
                    <option id="6f2" class="rdfilter cc32 final">Equipamentos Meteorológicos</option>

                    <option id="6g0" class="rdfilter cc33 final">Ferramentas Manuais</option>
                    <option id="6g1" class="rdfilter cc33 final">Bombas Costais</option>
                    <option id="6g2" class="rdfilter cc33 final">Equipamentos De Proteção Individual (Epis)</option>

                    <option id="7a0" class="rdfilter cc34 final">Rações Para Bovinos</option>
                    <option id="7a1" class="rdfilter cc34 final">Sais Minerais</option>
                    <option id="7a2" class="rdfilter cc34 final">Silagens E Forragens</option>
                    <option id="7a3" class="rdfilter cc34 final">Rações Para Demais Animais</option>
                    <option id="7a4" class="rdfilter cc34 final">Suplementos Alimentares</option>
                    <option id="7a5" class="rdfilter cc34 final">Demais Produtos Alimentares Para Animais</option>

                    <option id="7b0" class="rdfilter cc35 final">Medicamentos Animais</option>
                    <option id="7b1" class="rdfilter cc35 final">Outros Produtos Farmacêuticos</option>
                        
                    <option id="8a0" class="rdfilter cc36 final">Açúcar Branco Refinado</option>
                    <option id="8a1" class="rdfilter cc36 final">Açúcar Branco Cristal</option>
                    <option id="8a2" class="rdfilter cc36 final">Açúcar Mascavo</option>
                    <option id="8a3" class="rdfilter cc36 final">Demais Açúcares</option>
                    <option id="8a4" class="rdfilter cc36 final">Doces E Conservas Açucaradas</option>
                    <option id="8a5" class="rdfilter cc36 final">Demais Derivados Do Açúcar</option>

                    <option id="8b0" class="rdfilter cc37 final">Arroz Em Grão</option>
                    <option id="8b1" class="rdfilter cc37 final">Demais Produtos Derivados Do Arroz</option>
                        
                    <option id="8c0" class="rdfilter cc38 final">Café Em Grão Torrado</option>
                    <option id="8c1" class="rdfilter cc38 final">Café Em Grão Moído</option>
                    <option id="8c2" class="rdfilter cc38 final">Demais Beneficiamentos Cafeeiros</option>
                        
                    <option id="8d0" class="rdfilter cc39 final">Produtos Derivados Do Trigo</option>
                    <option id="8d1" class="rdfilter cc39 final">Produtos Derivados Da Mandioca</option>
                    <option id="8d2" class="rdfilter cc39 final">Produtos Derivados Do Milho</option>
                        
                    <option id="8e0" class="rdfilter cc40 final">Óleos e Gorduras De Origem Animal</option>
                    <option id="8e1" class="rdfilter cc40 final">Óleos e Gorduras Origem Vegetal</option>
                        
                    <option id="9a0" class="rdfilter cc41 final">Cortes Tradicionais</option>
                    <option id="9a1" class="rdfilter cc41 final">Cortes Premium</option>
                        
                    <option id="9f0" class="rdfilter cc42 final">De Vaca</option>
                    <option id="9f1" class="rdfilter cc42 final">De Outros Animais</option>
                    <option id="9f2" class="rdfilter cc42 final">Leites Especiais (Sem Lactose, Etc)</option>
                        
                    <option id="9g0" class="rdfilter cc43 final">Queijo</option>
                    <option id="9g1" class="rdfilter cc43 final">Requeijão</option>
                    <option id="9g2" class="rdfilter cc43 final">Manteiga</option>
                    <option id="9g3" class="rdfilter cc43 final">Iogurtes</option>
                    <option id="9g4" class="rdfilter cc43 final">Creme De Leite E Leite Condensado</option>
                    <option id="9g5" class="rdfilter cc43 final">Leite Em Pó</option>
                    <option id="9g6" class="rdfilter cc43 final">Demais Produtos Do Laticínio</option>
                        
                    <option id="11a0" class="rdfilter cc44 final">Para Vestuário</option>
                    <option id="11a1" class="rdfilter cc44 final">Artigos De Selaria</option>
                    <option id="11a2" class="rdfilter cc44 final">Selas E Arreios</option>
                    <option id="11a3" class="rdfilter cc44 final">Para Demais Funções</option>

                    <option id="11b0" class="rdfilter cc45 final">Couro para Calçados</option>
                    <option id="11b1" class="rdfilter cc45 final">Solas E Saltos</option>
                    <option id="11b2" class="rdfilter cc45 final">Gáspeas</option>
                    <option id="11b3" class="rdfilter cc45 final">Biqueiras</option>
                    <option id="11b4" class="rdfilter cc45 final">Demais Partes Dos Calçados</option>
                    <option id="11b5" class="rdfilter cc45 final">Calçados Acabados</option>

                    <option id="20d0" class="rdfilter cc46 final">Seguro De Safra</option>
                    <option id="20d1" class="rdfilter cc46 final">Seguro De Carga</option>
                    <option id="20d2" class="rdfilter cc46 final">Seguro De Propriedade</option>
                    <option id="20d3" class="rdfilter cc46 final">Resseguros</option>
                    <option id="20d4" class="rdfilter cc46 final">Demais Seguros</option>

                    <option id="23a0" class="rdfilter cc47 final">Amostragem De Solo</option>
                    <option id="23a1" class="rdfilter cc47 final">Testes</option>
                    <option id="23a2" class="rdfilter cc47 final">Análises E Laudos Técnicos</option>


                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnSave2" class="btn btn-primary" data-dismiss="modal">Finalizar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
    </div>
              <div id="compraModal3" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	 <select multiple size="26" id="filter13" class="categoryfilter" style="height:220px;">
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
                    <select multiple size="26" id="filter23" class="categoryfilter"  style="height:220px;">
                    
                        <option id="0a" value="0" class="ndfilter c0">Arroz, Trigo e Outros Cereais</option>
                        <option id="0b" value="1" class="ndfilter c0">Café em Grão</option>
                        <option id="0c" class="ndfilter c0 final">Laranja</option>
                        <option id="0d" class="ndfilter c0 final">Cana-de-açúcar</option>
                        <option id="0e" class="ndfilter c0 final">Milho em Grão</option>
                        <option id="0f" class="ndfilter c0 final">Soja  em Grão</option>
                        <option id="0g" value="6" class="ndfilter c0">Algodão</option>
                        <option id="0h" value="7" class="ndfilter c0">Frutas</option>
                        <option id="0i" value="8" class="ndfilter c0">Legumes</option>
                        <option id="0j" value="9" class="ndfilter c0">Verduras</option>
                        <option id="0k" value="10" class="ndfilter c0">Tubérculos</option>
                        <option id="0l" value="11" class="ndfilter c0">Oleaginosas e Sementes</option>
                        <option id="0m" class="ndfilter c0 final">Demais Produtos Agrícolas</option>

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

                        <option id="4a" class="ndfilter c4 final">Sementes</option>
                        <option id="4b" class="ndfilter c4 final">Mudas Frutíferas</option>
                        <option id="4c" class="ndfilter c4 final">Mudas Florestais</option>
                        <option id="4d" class="ndfilter c4 final">Demais Mudas</option>

                        <option id="5a" value="24" class="ndfilter c5">Adubos e Fertilizantes</option>
                        <option id="5b" value="25" class="ndfilter c5">Defensivos Agrícolas</option>
                        <option id="5c" value="26" class="ndfilter c5">Controles Biológicos</option>
                        <option id="5d" class="ndfilter c5 final">Demais Químicos Orgânicos</option>
                        <option id="5e" class="ndfilter c5 final">Demais Químicos Inorgânicos</option>

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
                        <option id="8f" class="ndfilter c8 final">Derivados dos Demais Vegetais</option>
                        
                        <option id="9a" value="41" class="ndfilter c9">Carne Bovina</option>
                        <option id="9b" class="ndfilter c9 final">Carne Suína</option>
                        <option id="9c" class="ndfilter c9 final">Carne de Aves</option>
                        <option id="9d" class="ndfilter c9 final">Pescado Industrializado</option>
                        <option id="9e" class="ndfilter c9 final">Carnes de Outros Animais</option>
                        <option id="9f" value="42" class="ndfilter c9">Leite Pasteurizado</option>
                        <option id="9g" value="43" class="ndfilter c9">Laticínios</option>
                        
                        <option id="10a" class="ndfilter c10 final">Concentrados de Frutas</option>
                        <option id="10b" class="ndfilter c10 final">Concentrados à base de Verduras</option>
                        <option id="10c" class="ndfilter c10 final">Concentrados à base de Outros Vegetais</option>
                        <option id="10d" class="ndfilter c10 final">Demais Ingredientes para Sucos e Bebidas</option>
                        
                        <option id="11a" value="44" class="ndfilter c11">Artefatos de Couro</option>
                        <option id="11b" value="45" class="ndfilter c11">Insumos para Calçados</option>
                        
                        <option id="12a" class="ndfilter c12 final">Celulose</option>
                        <option id="12b" class="ndfilter c12 final">Papel</option>
                        <option id="12c" class="ndfilter c12 final">Demais Derivados da Celulose e Papel</option>
                        
                        <option id="13a" class="ndfilter c13 final">Fios</option>
                        <option id="13b" class="ndfilter c13 final">Fibras Têxteis Beneficiadas</option>
                        <option id="13c" class="ndfilter c13 final">Produtos para Vestuário</option>
                        <option id="13d" class="ndfilter c13 final">Demais Produtos Têxteis</option>
                        
                        <option id="14a" class="ndfilter c14 final">Etanol</option>
                        <option id="14b" class="ndfilter c14 final">Biodiesel</option>
                        <option id="14c" class="ndfilter c14 final">Bagaços</option>
                        <option id="14e" class="ndfilter c14 final">Demais Produtos de Bioenergia</option>
                        
                        <option id="15a" class="ndfilter c15 final">Fumo Seco  Enrolado ou Picado</option>
                        <option id="15b" class="ndfilter c15 final">Fumo Curtido </option>
                        <option id="15c" class="ndfilter c15 final">Diversos Artigos do Fumo</option>
                        
                        <option id="16a" class="ndfilter c16 final">Madeiras sob Encomenda</option>
                        <option id="16b" class="ndfilter c16 final">Móveis, Acessórios, Componentes e Ferragens</option>
                        <option id="16c" class="ndfilter c16 final">Carvão Vegetal</option>
                        <option id="16d" class="ndfilter c16 final">Demais Produtos da Madeira</option>
                        
                        <option id="17a" class="ndfilter c17 final">Penas e Plumas</option>
                        <option id="17b" class="ndfilter c17 final">Chifres e Cascos</option>
                        <option id="17c" class="ndfilter c17 final">Borracha</option>
                        <option id="17d" class="ndfilter c17 final">Demais Produtos</option>
                        
                        <option id="18a" class="ndfilter c18">Rodoviário</option>
                        <option id="18b" class="ndfilter c18">Aéreo</option>
                        <option id="18c" class="ndfilter c18 final">Outros Modais</option>
                        
                        <option id="19a" class="ndfilter c19 final">de Grãos em Silos</option>
                        <option id="19b" class="ndfilter c19 final">Outros Armazenamentos</option>
                        
                        <option id="20a" class="ndfilter c20 final">Crédito</option>
                        <option id="20b" class="ndfilter c20 final">Empréstimos</option>
                        <option id="20c" class="ndfilter c20 final">Arrendamento Mercantil(Leasing)</option>
                        <option id="20d" value="46" class="ndfilter c20">Seguros</option>
                        <option id="20e" class="ndfilter c20 final">Demais Produtos de Intermediação Financeira</option>
                        
                        <option id="21a" class="ndfilter c21 final">Empresariais</option>
                        <option id="21b" class="ndfilter c21 final">Individuais</option>
                        
                        <option id="22a" class="ndfilter c22 final">Aluguéis</option>
                        <option id="22b" class="ndfilter c22 final">Parcerias</option>
                        <option id="22c" class="ndfilter c22 final">Arrendamentos</option>
                        
                        <option id="23a" value="47" class="ndfilter c23">Testes/ Análises Técnicas</option>
                        <option id="23a" class="ndfilter c23 final">Projetos de Irrigação</option>
                        <option id="23a" class="ndfilter c23 final">Pesquisa e Desenvolvimento</option>
                        
                        <option id="24a" class="ndfilter c24 final">Serviços de Plantio</option>
                        <option id="24b" class="ndfilter c24 final">Serviços de Colheita</option>
                        <option id="24c" class="ndfilter c24 final">Serviços de Aplicação de Defensivos</option>
                        
                        <option id="25a" class="ndfilter c25 final">Demais Serviços</option>


                    </select>
                    <select multiple size="26" id="filter33" class="categoryfilter" style="height:220px; final">
                        
                    <option id="0a0" class="rdfilter cc0 final">Arroz em Casca</option>
                    <option id="0a1" class="rdfilter cc0 final">Trigo em Casca</option>
                    <option id="0a2" class="rdfilter cc0 final">Cevada</option>
                    <option id="0a3" class="rdfilter cc0 final">Sorgo</option>
                    <option id="0a4" class="rdfilter cc0 final">Milheto</option>
                    <option id="0a5" class="rdfilter cc0 final">Demais Cereais</option>

                    <option id="0b0" class="rdfilter cc1 final">Café Arábica em Grão</option>
                    <option id="0b1" class="rdfilter cc1 final">Café Robusta em Grão</option>
                        
                    <option id="0g0" class="rdfilter cc6 final">Algodão em Caroço</option>
                    <option id="0g1" class="rdfilter cc6 final">Algodão em Pluma</option>
                        
                    <option id="0h0" class="rdfilter cc7 final">Abacaxi</option>
                    <option id="0h1" class="rdfilter cc7 final">Banana</option>
                    <option id="0h2" class="rdfilter cc7 final">Coco-Da-Baía</option>
                    <option id="0h3" class="rdfilter cc7 final">Goiaba</option>
                    <option id="0h4" class="rdfilter cc7 final">Limão</option>
                    <option id="0h5" class="rdfilter cc7 final">Maçã</option>
                    <option id="0h6" class="rdfilter cc7 final">Mamão</option>
                    <option id="0h7" class="rdfilter cc7 final">Manga</option>
                    <option id="0h8" class="rdfilter cc7 final">Maracujá</option>
                    <option id="0h9" class="rdfilter cc7 final">Melancia</option>
                    <option id="0h10" class="rdfilter cc7 final">Melão</option>
                    <option id="0h11" class="rdfilter cc7 final">Morango</option>
                    <option id="0h12" class="rdfilter cc7 final">Pêssego</option>
                    <option id="0h13" class="rdfilter cc7 final">Tangerina, Bergamota Ou Mexirica</option>
                    <option id="0h14" class="rdfilter cc7 final">Uva(Mesa)</option>
                    <option id="0h15" class="rdfilter cc7 final">Uva(Vinho Ou Suco)</option>

                    <option id="0i0" class="rdfilter cc8 final">Abobrinha</option>
                    <option id="0i1" class="rdfilter cc8 final">Beringela</option>
                    <option id="0i2" class="rdfilter cc8 final">Beterraba</option>
                    <option id="0i3" class="rdfilter cc8 final">Cebola</option>
                    <option id="0i4" class="rdfilter cc8 final">Cenoura</option>
                    <option id="0i5" class="rdfilter cc8 final">Chuchu</option>
                    <option id="0i6" class="rdfilter cc8 final">Feijão De Cor Em Grão</option>
                    <option id="0i7" class="rdfilter cc8 final">Feijão Preto Em Grão</option>
                    <option id="0i8" class="rdfilter cc8 final">Feijão-Fradinho, Caupi, De Corda Ou Macáçar</option>
                    <option id="0i9" class="rdfilter cc8 final">Jiló</option>
                    <option id="0i10" class="rdfilter cc8 final">Maxixe</option>
                    <option id="0i11" class="rdfilter cc8 final">Milho Verde(Espiga)</option>
                    <option id="0i12" class="rdfilter cc8 final">Pepino</option>
                    <option id="0i13" class="rdfilter cc8 final">Pimentão</option>
                    <option id="0i14" class="rdfilter cc8 final">Quiabo</option>
                    <option id="0i15" class="rdfilter cc8 final">Tomate Rasteiro (Industrial)</option>
                    <option id="0i16" class="rdfilter cc8 final">Tomate(Estaqueado)</option>
                    <option id="0i17" class="rdfilter cc8 final">Vagem(Feijão Vagem)</option>

                    <option id="0j0" class="rdfilter cc9 final">Agrião</option>
                    <option id="0j1" class="rdfilter cc9 final">Alface</option>
                    <option id="0j2" class="rdfilter cc9 final">Brócolis</option>
                    <option id="0j3" class="rdfilter cc9 final">Cebolinha</option>
                    <option id="0j4" class="rdfilter cc9 final">Coentro</option>
                    <option id="0j5" class="rdfilter cc9 final">Couve</option>
                    <option id="0j6" class="rdfilter cc9 final">Couve-Flor</option>
                    <option id="0j7" class="rdfilter cc9 final">Espinafre</option>
                    <option id="0j8" class="rdfilter cc9 final">Repolho</option>
                    <option id="0j9" class="rdfilter cc9 final">Salsa</option>
                    
                    <option id="0k0" class="rdfilter cc10 final">Batata Doce</option>
                    <option id="0k1" class="rdfilter cc10 final">Batata Inglesa</option>
                    <option id="0k2" class="rdfilter cc10 final">Batata-Baroa(Mandioquinha)</option>
                    <option id="0k3" class="rdfilter cc10 final">Inhame</option>
                    <option id="0k4" class="rdfilter cc10 final">Mandioca(Aipim Ou Macaxeira)</option>
                    <option id="0k5" class="rdfilter cc10 final">Nabo</option>
                    <option id="0k6" class="rdfilter cc10 final">Rabanete</option>

                    <option id="0l0" class="rdfilter cc11 final">Amendoim Em Casca</option>
                    <option id="0l1" class="rdfilter cc11 final">Girassol(Semente)</option>
                    <option id="0l2" class="rdfilter cc11 final">Cacau(Amêndoa)</option>
                        
                    <option id="1a0" class="rdfilter cc12 final">Nelore</option>
                    <option id="1a1" class="rdfilter cc12 final">Jersey</option>
                    <option id="1a2" class="rdfilter cc12 final">Gir</option>
                    <option id="1a3" class="rdfilter cc12 final">Canchim</option>
                    <option id="1a4" class="rdfilter cc12 final">Senepol</option>
                    <option id="1a5" class="rdfilter cc12 final">Angus</option>
                    <option id="1a6" class="rdfilter cc12 final">Caracu</option>
                    <option id="1a7" class="rdfilter cc12 final">Charolês</option>
                    <option id="1a8" class="rdfilter cc12 final">Guzerá</option>
                    <option id="1a9" class="rdfilter cc12 final">Outras Raças Bovinas</option>

                    <option id="1b0" class="rdfilter cc13 final">Leite De Vaca</option>
                    <option id="1b1" class="rdfilter cc13 final">Leite De Búfala</option>
                    <option id="1b2" class="rdfilter cc13 final">Leite De Cabra</option>
                    <option id="1b3" class="rdfilter cc13 final">Leite De Outros Animais</option>

                    <option id="1c0" class="rdfilter cc14 final">Canastrinho</option>
                    <option id="1c1" class="rdfilter cc14 final">Canastra</option>
                    <option id="1c2" class="rdfilter cc14 final">Canastrão</option>
                    <option id="1c3" class="rdfilter cc14 final">Piau</option>
                    <option id="1c4" class="rdfilter cc14 final">Nilo Canastra</option>
                    <option id="1c5" class="rdfilter cc14 final">Outras Raças Suínas</option>

                    <option id="1d0" class="rdfilter cc15 final">Frangos</option>
                    <option id="1d1" class="rdfilter cc15 final">Outras Aves</option>
                        
                    <option id="1e0" class="rdfilter cc151 final">Ovos De Galinha</option>
                    <option id="1e1" class="rdfilter cc151 final">Ovos De Outros Animais</option>

                    <option id="1f0" class="rdfilter cc16 final">Asininos</option>
                    <option id="1f1" class="rdfilter cc16 final">Bubalinos</option>
                    <option id="1f2" class="rdfilter cc16 final">Cães</option>
                    <option id="1f3" class="rdfilter cc16 final">Caprinos</option>
                    <option id="1f4" class="rdfilter cc16 final">Coelhos</option>
                    <option id="1f5" class="rdfilter cc16 final">Cavalos</option>
                    <option id="1f6" class="rdfilter cc16 final">Muares</option>
                    <option id="1f7" class="rdfilter cc16 final">Ovinos</option>
                    <option id="1f8" class="rdfilter cc16 final">Outros</option>

                    <option id="1g0" class="rdfilter cc17 final">Produtos De Apicultura</option>
                    <option id="1g1" class="rdfilter cc17 final">Casulos Do Bicho-Da-Seda</option>
                    <option id="1g2" class="rdfilter cc17 final">Produtos De Ranicultura</option>
                    <option id="1g3" class="rdfilter cc17 final">Demais Produtos De Origem Animal</option>

                    <option id="2a0" class="rdfilter cc18 final">Eucalipto</option>
                    <option id="2a1" class="rdfilter cc18 final">Acácia-Negra</option>
                    <option id="2a2" class="rdfilter cc18 final">Mogno</option>
                    <option id="2a3" class="rdfilter cc18 final">Pinheiro Americano</option>
                    <option id="2a4" class="rdfilter cc18 final">Pinheiro Brasileiro (Araucária)</option>
                    <option id="2a5" class="rdfilter cc18 final">Cascas</option>
                    <option id="2a6" class="rdfilter cc18 final">Outros Produtos Da Silvicultura</option>

                    <option id="2b0" class="rdfilter cc19 final">Açaí(Fruto)</option>
                    <option id="2b1" class="rdfilter cc19 final">Babaçu(Amêndoa)</option>
                    <option id="2b2" class="rdfilter cc19 final">Borracha (Látex Coagulado)</option>
                    <option id="2b3" class="rdfilter cc19 final">Carnaúba (Cera)</option>
                    <option id="2b4" class="rdfilter cc19 final">Castanha-Do-Pará</option>
                    <option id="2b5" class="rdfilter cc19 final">Cupuaçu</option>
                    <option id="2b6" class="rdfilter cc19 final">Palmito</option>
                    <option id="2b7" class="rdfilter cc19 final">Pinhão</option>
                    <option id="2b8" class="rdfilter cc19 final">Carnaúba (Pó De Palha)</option>
                    <option id="2b9" class="rdfilter cc19 final">Demais Produtos da Extração Vegetal</option>

                    <option id="3a0" class="rdfilter cc20 final">Salmão</option>
                    <option id="3a1" class="rdfilter cc20 final">Sardinha</option>
                    <option id="3a2" class="rdfilter cc20 final">Cação</option>
                    <option id="3a3" class="rdfilter cc20 final">Corvina</option>
                    <option id="3a4" class="rdfilter cc20 final">Saint Peter</option>
                    <option id="3a5" class="rdfilter cc20 final">Tainha</option>
                    <option id="3a6" class="rdfilter cc20 final">Atum</option>
                    <option id="3a7" class="rdfilter cc20 final">Pescada Branca</option>
                    <option id="3a8" class="rdfilter cc20 final">Pintado</option>
                    <option id="3a9" class="rdfilter cc20 final">Anchova</option>
                    <option id="3a10" class="rdfilter cc20 final">Linguado</option>
                    <option id="3a11" class="rdfilter cc20 final">Tilápia</option>
                    <option id="3a12" class="rdfilter cc20 final">Outros Peixes</option>

                    <option id="3b0" class="rdfilter cc21 final">Lula</option>
                    <option id="3b1" class="rdfilter cc21 final">Polvo</option>
                    <option id="3b2" class="rdfilter cc21 final">Demais Moluscos</option>

                    <option id="3c0" class="rdfilter cc22 final">Mexilhão</option>
                    <option id="3c1" class="rdfilter cc22 final">Ostra</option>
                    <option id="3c2" class="rdfilter cc22 final">Demais Crustáceos</option>

                    <option id="3d0" class="rdfilter cc23 final">Camarão Cinza</option>
                    <option id="3d1" class="rdfilter cc23 final">Camarão Rosa</option>
                    <option id="3d2" class="rdfilter cc23 final">Outros</option>

                    <option id="5a0" class="rdfilter cc24 final">Macronutrientes </option>
                    <option id="5a1" class="rdfilter cc24 final">Micronutrientes</option>
                    <option id="5a2" class="rdfilter cc24 final">Corretivos</option>
                    <option id="5a3" class="rdfilter cc24 final">Adubos Orgânicos</option>
                    <option id="5a4" class="rdfilter cc24 final">Demais Adubos Ou Fertilizantes</option>

                    <option id="5b0" class="rdfilter cc25 final">Herbicidas</option>
                    <option id="5b1" class="rdfilter cc25 final">Fungicidas</option>
                    <option id="5b2" class="rdfilter cc25 final">Inseticidas</option>
                    <option id="5b3" class="rdfilter cc25 final">Nematócitos</option>

                    <option id="5c0" class="rdfilter cc26 final">Parasitóides</option>
                    <option id="5c1" class="rdfilter cc26 final">Predadores</option>
                    <option id="5c2" class="rdfilter cc26 final">Patógenos</option>
                        
                    <option id="6a0" class="rdfilter cc27 final">Tratores</option>
                    <option id="6a1" class="rdfilter cc27 final">Colheitadeiras</option>
                    <option id="6a2" class="rdfilter cc27 final">Pulverizadores</option>
                    <option id="6a3" class="rdfilter cc27 final">Máquinas Multi-Função</option>
                    <option id="6a4" class="rdfilter cc27 final">Outros</option>

                    <option id="6b0" class="rdfilter cc28 final">Caminhonetes</option>
                    <option id="6b1" class="rdfilter cc28 final">Caminhões</option>
                    <option id="6b2" class="rdfilter cc28 final">Carretas E Trailers</option>
                    <option id="6b3" class="rdfilter cc28 final">Treminhões</option>
                    <option id="6b4" class="rdfilter cc28 final">Demais Veículos</option>

                    <option id="6c0" class="rdfilter cc29 final">Arados</option>
                    <option id="6c1" class="rdfilter cc29 final">Colheita</option>
                    <option id="6c2" class="rdfilter cc29 final">Cultivadores</option>
                    <option id="6c3" class="rdfilter cc29 final">Grades </option>
                    <option id="6c4" class="rdfilter cc29 final">Plainas</option>
                    <option id="6c5" class="rdfilter cc29 final">Roçadeiras</option>
                    <option id="6c6" class="rdfilter cc29 final">Semeadoras</option>
                    <option id="6c7" class="rdfilter cc29 final">Diversos</option>

                    <option id="6d0" class="rdfilter cc30 final">Peças Para Máquinas Agrícolas</option>
                    <option id="6d1" class="rdfilter cc30 final">Peças Para Máquias De Transporte</option>
                    <option id="6d2" class="rdfilter cc30 final">Peças Para Silos</option>
                    <option id="6d3" class="rdfilter cc30 final">Demais Peças</option>

                    <option id="6e0" class="rdfilter cc31 final">Baias, Bretes, Palanques E Cercas</option>
                    <option id="6e1" class="rdfilter cc31 final">Barracões E Construções Rurais</option>
                    <option id="6e3" class="rdfilter cc31 final">Demais Instalações Rurais</option>

                    <option id="6f0" class="rdfilter cc32 final">Sistemas De Irrigação</option>
                    <option id="6f1" class="rdfilter cc32 final">Instrumentos Para Agricultura De Precisão</option>
                    <option id="6f2" class="rdfilter cc32 final">Equipamentos Meteorológicos</option>

                    <option id="6g0" class="rdfilter cc33 final">Ferramentas Manuais</option>
                    <option id="6g1" class="rdfilter cc33 final">Bombas Costais</option>
                    <option id="6g2" class="rdfilter cc33 final">Equipamentos De Proteção Individual (Epis)</option>

                    <option id="7a0" class="rdfilter cc34 final">Rações Para Bovinos</option>
                    <option id="7a1" class="rdfilter cc34 final">Sais Minerais</option>
                    <option id="7a2" class="rdfilter cc34 final">Silagens E Forragens</option>
                    <option id="7a3" class="rdfilter cc34 final">Rações Para Demais Animais</option>
                    <option id="7a4" class="rdfilter cc34 final">Suplementos Alimentares</option>
                    <option id="7a5" class="rdfilter cc34 final">Demais Produtos Alimentares Para Animais</option>

                    <option id="7b0" class="rdfilter cc35 final">Medicamentos Animais</option>
                    <option id="7b1" class="rdfilter cc35 final">Outros Produtos Farmacêuticos</option>
                        
                    <option id="8a0" class="rdfilter cc36 final">Açúcar Branco Refinado</option>
                    <option id="8a1" class="rdfilter cc36 final">Açúcar Branco Cristal</option>
                    <option id="8a2" class="rdfilter cc36 final">Açúcar Mascavo</option>
                    <option id="8a3" class="rdfilter cc36 final">Demais Açúcares</option>
                    <option id="8a4" class="rdfilter cc36 final">Doces E Conservas Açucaradas</option>
                    <option id="8a5" class="rdfilter cc36 final">Demais Derivados Do Açúcar</option>

                    <option id="8b0" class="rdfilter cc37 final">Arroz Em Grão</option>
                    <option id="8b1" class="rdfilter cc37 final">Demais Produtos Derivados Do Arroz</option>
                        
                    <option id="8c0" class="rdfilter cc38 final">Café Em Grão Torrado</option>
                    <option id="8c1" class="rdfilter cc38 final">Café Em Grão Moído</option>
                    <option id="8c2" class="rdfilter cc38 final">Demais Beneficiamentos Cafeeiros</option>
                        
                    <option id="8d0" class="rdfilter cc39 final">Produtos Derivados Do Trigo</option>
                    <option id="8d1" class="rdfilter cc39 final">Produtos Derivados Da Mandioca</option>
                    <option id="8d2" class="rdfilter cc39 final">Produtos Derivados Do Milho</option>
                        
                    <option id="8e0" class="rdfilter cc40 final">Óleos e Gorduras De Origem Animal</option>
                    <option id="8e1" class="rdfilter cc40 final">Óleos e Gorduras Origem Vegetal</option>
                        
                    <option id="9a0" class="rdfilter cc41 final">Cortes Tradicionais</option>
                    <option id="9a1" class="rdfilter cc41 final">Cortes Premium</option>
                        
                    <option id="9f0" class="rdfilter cc42 final">De Vaca</option>
                    <option id="9f1" class="rdfilter cc42 final">De Outros Animais</option>
                    <option id="9f2" class="rdfilter cc42 final">Leites Especiais (Sem Lactose, Etc)</option>
                        
                    <option id="9g0" class="rdfilter cc43 final">Queijo</option>
                    <option id="9g1" class="rdfilter cc43 final">Requeijão</option>
                    <option id="9g2" class="rdfilter cc43 final">Manteiga</option>
                    <option id="9g3" class="rdfilter cc43 final">Iogurtes</option>
                    <option id="9g4" class="rdfilter cc43 final">Creme De Leite E Leite Condensado</option>
                    <option id="9g5" class="rdfilter cc43 final">Leite Em Pó</option>
                    <option id="9g6" class="rdfilter cc43 final">Demais Produtos Do Laticínio</option>
                        
                    <option id="11a0" class="rdfilter cc44 final">Para Vestuário</option>
                    <option id="11a1" class="rdfilter cc44 final">Artigos De Selaria</option>
                    <option id="11a2" class="rdfilter cc44 final">Selas E Arreios</option>
                    <option id="11a3" class="rdfilter cc44 final">Para Demais Funções</option>

                    <option id="11b0" class="rdfilter cc45 final">Couro para Calçados</option>
                    <option id="11b1" class="rdfilter cc45 final">Solas E Saltos</option>
                    <option id="11b2" class="rdfilter cc45 final">Gáspeas</option>
                    <option id="11b3" class="rdfilter cc45 final">Biqueiras</option>
                    <option id="11b4" class="rdfilter cc45 final">Demais Partes Dos Calçados</option>
                    <option id="11b5" class="rdfilter cc45 final">Calçados Acabados</option>

                    <option id="20d0" class="rdfilter cc46 final">Seguro De Safra</option>
                    <option id="20d1" class="rdfilter cc46 final">Seguro De Carga</option>
                    <option id="20d2" class="rdfilter cc46 final">Seguro De Propriedade</option>
                    <option id="20d3" class="rdfilter cc46 final">Resseguros</option>
                    <option id="20d4" class="rdfilter cc46 final">Demais Seguros</option>

                    <option id="23a0" class="rdfilter cc47 final">Amostragem De Solo</option>
                    <option id="23a1" class="rdfilter cc47 final">Testes</option>
                    <option id="23a2" class="rdfilter cc47 final">Análises E Laudos Técnicos</option>


                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnSave3" class="btn btn-primary" data-dismiss="modal">Finalizar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
              </div>
  
    <div id="vendaModal1" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	 <select multiple size="26" id="filter14" class="categoryfilter" style="height:220px;">
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
                    <select multiple size="26" id="filter24" class="categoryfilter"  style="height:220px;">
                    
                        <option id="0a" value="0" class="ndfilter c0">Arroz, Trigo e Outros Cereais</option>
                        <option id="0b" value="1" class="ndfilter c0">Café em Grão</option>
                        <option id="0c" class="ndfilter c0 final">Laranja</option>
                        <option id="0d" class="ndfilter c0 final">Cana-de-açúcar</option>
                        <option id="0e" class="ndfilter c0 final">Milho em Grão</option>
                        <option id="0f" class="ndfilter c0 final">Soja  em Grão</option>
                        <option id="0g" value="6" class="ndfilter c0">Algodão</option>
                        <option id="0h" value="7" class="ndfilter c0">Frutas</option>
                        <option id="0i" value="8" class="ndfilter c0">Legumes</option>
                        <option id="0j" value="9" class="ndfilter c0">Verduras</option>
                        <option id="0k" value="10" class="ndfilter c0">Tubérculos</option>
                        <option id="0l" value="11" class="ndfilter c0">Oleaginosas e Sementes</option>
                        <option id="0m" class="ndfilter c0 final">Demais Produtos Agrícolas</option>

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

                        <option id="4a" class="ndfilter c4 final">Sementes</option>
                        <option id="4b" class="ndfilter c4 final">Mudas Frutíferas</option>
                        <option id="4c" class="ndfilter c4 final">Mudas Florestais</option>
                        <option id="4d" class="ndfilter c4 final">Demais Mudas</option>

                        <option id="5a" value="24" class="ndfilter c5">Adubos e Fertilizantes</option>
                        <option id="5b" value="25" class="ndfilter c5">Defensivos Agrícolas</option>
                        <option id="5c" value="26" class="ndfilter c5">Controles Biológicos</option>
                        <option id="5d" class="ndfilter c5 final">Demais Químicos Orgânicos</option>
                        <option id="5e" class="ndfilter c5 final">Demais Químicos Inorgânicos</option>

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
                        <option id="8f" class="ndfilter c8 final">Derivados dos Demais Vegetais</option>
                        
                        <option id="9a" value="41" class="ndfilter c9">Carne Bovina</option>
                        <option id="9b" class="ndfilter c9 final">Carne Suína</option>
                        <option id="9c" class="ndfilter c9 final">Carne de Aves</option>
                        <option id="9d" class="ndfilter c9 final">Pescado Industrializado</option>
                        <option id="9e" class="ndfilter c9 final">Carnes de Outros Animais</option>
                        <option id="9f" value="42" class="ndfilter c9">Leite Pasteurizado</option>
                        <option id="9g" value="43" class="ndfilter c9">Laticínios</option>
                        
                        <option id="10a" class="ndfilter c10 final">Concentrados de Frutas</option>
                        <option id="10b" class="ndfilter c10 final">Concentrados à base de Verduras</option>
                        <option id="10c" class="ndfilter c10 final">Concentrados à base de Outros Vegetais</option>
                        <option id="10d" class="ndfilter c10 final">Demais Ingredientes para Sucos e Bebidas</option>
                        
                        <option id="11a" value="44" class="ndfilter c11">Artefatos de Couro</option>
                        <option id="11b" value="45" class="ndfilter c11">Insumos para Calçados</option>
                        
                        <option id="12a" class="ndfilter c12 final">Celulose</option>
                        <option id="12b" class="ndfilter c12 final">Papel</option>
                        <option id="12c" class="ndfilter c12 final">Demais Derivados da Celulose e Papel</option>
                        
                        <option id="13a" class="ndfilter c13 final">Fios</option>
                        <option id="13b" class="ndfilter c13 final">Fibras Têxteis Beneficiadas</option>
                        <option id="13c" class="ndfilter c13 final">Produtos para Vestuário</option>
                        <option id="13d" class="ndfilter c13 final">Demais Produtos Têxteis</option>
                        
                        <option id="14a" class="ndfilter c14 final">Etanol</option>
                        <option id="14b" class="ndfilter c14 final">Biodiesel</option>
                        <option id="14c" class="ndfilter c14 final">Bagaços</option>
                        <option id="14e" class="ndfilter c14 final">Demais Produtos de Bioenergia</option>
                        
                        <option id="15a" class="ndfilter c15 final">Fumo Seco  Enrolado ou Picado</option>
                        <option id="15b" class="ndfilter c15 final">Fumo Curtido </option>
                        <option id="15c" class="ndfilter c15 final">Diversos Artigos do Fumo</option>
                        
                        <option id="16a" class="ndfilter c16 final">Madeiras sob Encomenda</option>
                        <option id="16b" class="ndfilter c16 final">Móveis, Acessórios, Componentes e Ferragens</option>
                        <option id="16c" class="ndfilter c16 final">Carvão Vegetal</option>
                        <option id="16d" class="ndfilter c16 final">Demais Produtos da Madeira</option>
                        
                        <option id="17a" class="ndfilter c17 final">Penas e Plumas</option>
                        <option id="17b" class="ndfilter c17 final">Chifres e Cascos</option>
                        <option id="17c" class="ndfilter c17 final">Borracha</option>
                        <option id="17d" class="ndfilter c17 final">Demais Produtos</option>
                        
                        <option id="18a" class="ndfilter c18">Rodoviário</option>
                        <option id="18b" class="ndfilter c18">Aéreo</option>
                        <option id="18c" class="ndfilter c18 final">Outros Modais</option>
                        
                        <option id="19a" class="ndfilter c19 final">de Grãos em Silos</option>
                        <option id="19b" class="ndfilter c19 final">Outros Armazenamentos</option>
                        
                        <option id="20a" class="ndfilter c20 final">Crédito</option>
                        <option id="20b" class="ndfilter c20 final">Empréstimos</option>
                        <option id="20c" class="ndfilter c20 final">Arrendamento Mercantil(Leasing)</option>
                        <option id="20d" value="46" class="ndfilter c20">Seguros</option>
                        <option id="20e" class="ndfilter c20 final">Demais Produtos de Intermediação Financeira</option>
                        
                        <option id="21a" class="ndfilter c21 final">Empresariais</option>
                        <option id="21b" class="ndfilter c21 final">Individuais</option>
                        
                        <option id="22a" class="ndfilter c22 final">Aluguéis</option>
                        <option id="22b" class="ndfilter c22 final">Parcerias</option>
                        <option id="22c" class="ndfilter c22 final">Arrendamentos</option>
                        
                        <option id="23a" value="47" class="ndfilter c23">Testes/ Análises Técnicas</option>
                        <option id="23a" class="ndfilter c23 final">Projetos de Irrigação</option>
                        <option id="23a" class="ndfilter c23 final">Pesquisa e Desenvolvimento</option>
                        
                        <option id="24a" class="ndfilter c24 final">Serviços de Plantio</option>
                        <option id="24b" class="ndfilter c24 final">Serviços de Colheita</option>
                        <option id="24c" class="ndfilter c24 final">Serviços de Aplicação de Defensivos</option>
                        
                        <option id="25a" class="ndfilter c25 final">Demais Serviços</option>


                    </select>
                    <select multiple size="26" id="filter34" class="categoryfilter" style="height:220px; final">
                        
                    <option id="0a0" class="rdfilter cc0 final">Arroz em Casca</option>
                    <option id="0a1" class="rdfilter cc0 final">Trigo em Casca</option>
                    <option id="0a2" class="rdfilter cc0 final">Cevada</option>
                    <option id="0a3" class="rdfilter cc0 final">Sorgo</option>
                    <option id="0a4" class="rdfilter cc0 final">Milheto</option>
                    <option id="0a5" class="rdfilter cc0 final">Demais Cereais</option>

                    <option id="0b0" class="rdfilter cc1 final">Café Arábica em Grão</option>
                    <option id="0b1" class="rdfilter cc1 final">Café Robusta em Grão</option>
                        
                    <option id="0g0" class="rdfilter cc6 final">Algodão em Caroço</option>
                    <option id="0g1" class="rdfilter cc6 final">Algodão em Pluma</option>
                        
                    <option id="0h0" class="rdfilter cc7 final">Abacaxi</option>
                    <option id="0h1" class="rdfilter cc7 final">Banana</option>
                    <option id="0h2" class="rdfilter cc7 final">Coco-Da-Baía</option>
                    <option id="0h3" class="rdfilter cc7 final">Goiaba</option>
                    <option id="0h4" class="rdfilter cc7 final">Limão</option>
                    <option id="0h5" class="rdfilter cc7 final">Maçã</option>
                    <option id="0h6" class="rdfilter cc7 final">Mamão</option>
                    <option id="0h7" class="rdfilter cc7 final">Manga</option>
                    <option id="0h8" class="rdfilter cc7 final">Maracujá</option>
                    <option id="0h9" class="rdfilter cc7 final">Melancia</option>
                    <option id="0h10" class="rdfilter cc7 final">Melão</option>
                    <option id="0h11" class="rdfilter cc7 final">Morango</option>
                    <option id="0h12" class="rdfilter cc7 final">Pêssego</option>
                    <option id="0h13" class="rdfilter cc7 final">Tangerina, Bergamota Ou Mexirica</option>
                    <option id="0h14" class="rdfilter cc7 final">Uva(Mesa)</option>
                    <option id="0h15" class="rdfilter cc7 final">Uva(Vinho Ou Suco)</option>

                    <option id="0i0" class="rdfilter cc8 final">Abobrinha</option>
                    <option id="0i1" class="rdfilter cc8 final">Beringela</option>
                    <option id="0i2" class="rdfilter cc8 final">Beterraba</option>
                    <option id="0i3" class="rdfilter cc8 final">Cebola</option>
                    <option id="0i4" class="rdfilter cc8 final">Cenoura</option>
                    <option id="0i5" class="rdfilter cc8 final">Chuchu</option>
                    <option id="0i6" class="rdfilter cc8 final">Feijão De Cor Em Grão</option>
                    <option id="0i7" class="rdfilter cc8 final">Feijão Preto Em Grão</option>
                    <option id="0i8" class="rdfilter cc8 final">Feijão-Fradinho, Caupi, De Corda Ou Macáçar</option>
                    <option id="0i9" class="rdfilter cc8 final">Jiló</option>
                    <option id="0i10" class="rdfilter cc8 final">Maxixe</option>
                    <option id="0i11" class="rdfilter cc8 final">Milho Verde(Espiga)</option>
                    <option id="0i12" class="rdfilter cc8 final">Pepino</option>
                    <option id="0i13" class="rdfilter cc8 final">Pimentão</option>
                    <option id="0i14" class="rdfilter cc8 final">Quiabo</option>
                    <option id="0i15" class="rdfilter cc8 final">Tomate Rasteiro (Industrial)</option>
                    <option id="0i16" class="rdfilter cc8 final">Tomate(Estaqueado)</option>
                    <option id="0i17" class="rdfilter cc8 final">Vagem(Feijão Vagem)</option>

                    <option id="0j0" class="rdfilter cc9 final">Agrião</option>
                    <option id="0j1" class="rdfilter cc9 final">Alface</option>
                    <option id="0j2" class="rdfilter cc9 final">Brócolis</option>
                    <option id="0j3" class="rdfilter cc9 final">Cebolinha</option>
                    <option id="0j4" class="rdfilter cc9 final">Coentro</option>
                    <option id="0j5" class="rdfilter cc9 final">Couve</option>
                    <option id="0j6" class="rdfilter cc9 final">Couve-Flor</option>
                    <option id="0j7" class="rdfilter cc9 final">Espinafre</option>
                    <option id="0j8" class="rdfilter cc9 final">Repolho</option>
                    <option id="0j9" class="rdfilter cc9 final">Salsa</option>
                    
                    <option id="0k0" class="rdfilter cc10 final">Batata Doce</option>
                    <option id="0k1" class="rdfilter cc10 final">Batata Inglesa</option>
                    <option id="0k2" class="rdfilter cc10 final">Batata-Baroa(Mandioquinha)</option>
                    <option id="0k3" class="rdfilter cc10 final">Inhame</option>
                    <option id="0k4" class="rdfilter cc10 final">Mandioca(Aipim Ou Macaxeira)</option>
                    <option id="0k5" class="rdfilter cc10 final">Nabo</option>
                    <option id="0k6" class="rdfilter cc10 final">Rabanete</option>

                    <option id="0l0" class="rdfilter cc11 final">Amendoim Em Casca</option>
                    <option id="0l1" class="rdfilter cc11 final">Girassol(Semente)</option>
                    <option id="0l2" class="rdfilter cc11 final">Cacau(Amêndoa)</option>
                        
                    <option id="1a0" class="rdfilter cc12 final">Nelore</option>
                    <option id="1a1" class="rdfilter cc12 final">Jersey</option>
                    <option id="1a2" class="rdfilter cc12 final">Gir</option>
                    <option id="1a3" class="rdfilter cc12 final">Canchim</option>
                    <option id="1a4" class="rdfilter cc12 final">Senepol</option>
                    <option id="1a5" class="rdfilter cc12 final">Angus</option>
                    <option id="1a6" class="rdfilter cc12 final">Caracu</option>
                    <option id="1a7" class="rdfilter cc12 final">Charolês</option>
                    <option id="1a8" class="rdfilter cc12 final">Guzerá</option>
                    <option id="1a9" class="rdfilter cc12 final">Outras Raças Bovinas</option>

                    <option id="1b0" class="rdfilter cc13 final">Leite De Vaca</option>
                    <option id="1b1" class="rdfilter cc13 final">Leite De Búfala</option>
                    <option id="1b2" class="rdfilter cc13 final">Leite De Cabra</option>
                    <option id="1b3" class="rdfilter cc13 final">Leite De Outros Animais</option>

                    <option id="1c0" class="rdfilter cc14 final">Canastrinho</option>
                    <option id="1c1" class="rdfilter cc14 final">Canastra</option>
                    <option id="1c2" class="rdfilter cc14 final">Canastrão</option>
                    <option id="1c3" class="rdfilter cc14 final">Piau</option>
                    <option id="1c4" class="rdfilter cc14 final">Nilo Canastra</option>
                    <option id="1c5" class="rdfilter cc14 final">Outras Raças Suínas</option>

                    <option id="1d0" class="rdfilter cc15 final">Frangos</option>
                    <option id="1d1" class="rdfilter cc15 final">Outras Aves</option>
                        
                    <option id="1e0" class="rdfilter cc151 final">Ovos De Galinha</option>
                    <option id="1e1" class="rdfilter cc151 final">Ovos De Outros Animais</option>

                    <option id="1f0" class="rdfilter cc16 final">Asininos</option>
                    <option id="1f1" class="rdfilter cc16 final">Bubalinos</option>
                    <option id="1f2" class="rdfilter cc16 final">Cães</option>
                    <option id="1f3" class="rdfilter cc16 final">Caprinos</option>
                    <option id="1f4" class="rdfilter cc16 final">Coelhos</option>
                    <option id="1f5" class="rdfilter cc16 final">Cavalos</option>
                    <option id="1f6" class="rdfilter cc16 final">Muares</option>
                    <option id="1f7" class="rdfilter cc16 final">Ovinos</option>
                    <option id="1f8" class="rdfilter cc16 final">Outros</option>

                    <option id="1g0" class="rdfilter cc17 final">Produtos De Apicultura</option>
                    <option id="1g1" class="rdfilter cc17 final">Casulos Do Bicho-Da-Seda</option>
                    <option id="1g2" class="rdfilter cc17 final">Produtos De Ranicultura</option>
                    <option id="1g3" class="rdfilter cc17 final">Demais Produtos De Origem Animal</option>

                    <option id="2a0" class="rdfilter cc18 final">Eucalipto</option>
                    <option id="2a1" class="rdfilter cc18 final">Acácia-Negra</option>
                    <option id="2a2" class="rdfilter cc18 final">Mogno</option>
                    <option id="2a3" class="rdfilter cc18 final">Pinheiro Americano</option>
                    <option id="2a4" class="rdfilter cc18 final">Pinheiro Brasileiro (Araucária)</option>
                    <option id="2a5" class="rdfilter cc18 final">Cascas</option>
                    <option id="2a6" class="rdfilter cc18 final">Outros Produtos Da Silvicultura</option>

                    <option id="2b0" class="rdfilter cc19 final">Açaí(Fruto)</option>
                    <option id="2b1" class="rdfilter cc19 final">Babaçu(Amêndoa)</option>
                    <option id="2b2" class="rdfilter cc19 final">Borracha (Látex Coagulado)</option>
                    <option id="2b3" class="rdfilter cc19 final">Carnaúba (Cera)</option>
                    <option id="2b4" class="rdfilter cc19 final">Castanha-Do-Pará</option>
                    <option id="2b5" class="rdfilter cc19 final">Cupuaçu</option>
                    <option id="2b6" class="rdfilter cc19 final">Palmito</option>
                    <option id="2b7" class="rdfilter cc19 final">Pinhão</option>
                    <option id="2b8" class="rdfilter cc19 final">Carnaúba (Pó De Palha)</option>
                    <option id="2b9" class="rdfilter cc19 final">Demais Produtos da Extração Vegetal</option>

                    <option id="3a0" class="rdfilter cc20 final">Salmão</option>
                    <option id="3a1" class="rdfilter cc20 final">Sardinha</option>
                    <option id="3a2" class="rdfilter cc20 final">Cação</option>
                    <option id="3a3" class="rdfilter cc20 final">Corvina</option>
                    <option id="3a4" class="rdfilter cc20 final">Saint Peter</option>
                    <option id="3a5" class="rdfilter cc20 final">Tainha</option>
                    <option id="3a6" class="rdfilter cc20 final">Atum</option>
                    <option id="3a7" class="rdfilter cc20 final">Pescada Branca</option>
                    <option id="3a8" class="rdfilter cc20 final">Pintado</option>
                    <option id="3a9" class="rdfilter cc20 final">Anchova</option>
                    <option id="3a10" class="rdfilter cc20 final">Linguado</option>
                    <option id="3a11" class="rdfilter cc20 final">Tilápia</option>
                    <option id="3a12" class="rdfilter cc20 final">Outros Peixes</option>

                    <option id="3b0" class="rdfilter cc21 final">Lula</option>
                    <option id="3b1" class="rdfilter cc21 final">Polvo</option>
                    <option id="3b2" class="rdfilter cc21 final">Demais Moluscos</option>

                    <option id="3c0" class="rdfilter cc22 final">Mexilhão</option>
                    <option id="3c1" class="rdfilter cc22 final">Ostra</option>
                    <option id="3c2" class="rdfilter cc22 final">Demais Crustáceos</option>

                    <option id="3d0" class="rdfilter cc23 final">Camarão Cinza</option>
                    <option id="3d1" class="rdfilter cc23 final">Camarão Rosa</option>
                    <option id="3d2" class="rdfilter cc23 final">Outros</option>

                    <option id="5a0" class="rdfilter cc24 final">Macronutrientes </option>
                    <option id="5a1" class="rdfilter cc24 final">Micronutrientes</option>
                    <option id="5a2" class="rdfilter cc24 final">Corretivos</option>
                    <option id="5a3" class="rdfilter cc24 final">Adubos Orgânicos</option>
                    <option id="5a4" class="rdfilter cc24 final">Demais Adubos Ou Fertilizantes</option>

                    <option id="5b0" class="rdfilter cc25 final">Herbicidas</option>
                    <option id="5b1" class="rdfilter cc25 final">Fungicidas</option>
                    <option id="5b2" class="rdfilter cc25 final">Inseticidas</option>
                    <option id="5b3" class="rdfilter cc25 final">Nematócitos</option>

                    <option id="5c0" class="rdfilter cc26 final">Parasitóides</option>
                    <option id="5c1" class="rdfilter cc26 final">Predadores</option>
                    <option id="5c2" class="rdfilter cc26 final">Patógenos</option>
                        
                    <option id="6a0" class="rdfilter cc27 final">Tratores</option>
                    <option id="6a1" class="rdfilter cc27 final">Colheitadeiras</option>
                    <option id="6a2" class="rdfilter cc27 final">Pulverizadores</option>
                    <option id="6a3" class="rdfilter cc27 final">Máquinas Multi-Função</option>
                    <option id="6a4" class="rdfilter cc27 final">Outros</option>

                    <option id="6b0" class="rdfilter cc28 final">Caminhonetes</option>
                    <option id="6b1" class="rdfilter cc28 final">Caminhões</option>
                    <option id="6b2" class="rdfilter cc28 final">Carretas E Trailers</option>
                    <option id="6b3" class="rdfilter cc28 final">Treminhões</option>
                    <option id="6b4" class="rdfilter cc28 final">Demais Veículos</option>

                    <option id="6c0" class="rdfilter cc29 final">Arados</option>
                    <option id="6c1" class="rdfilter cc29 final">Colheita</option>
                    <option id="6c2" class="rdfilter cc29 final">Cultivadores</option>
                    <option id="6c3" class="rdfilter cc29 final">Grades </option>
                    <option id="6c4" class="rdfilter cc29 final">Plainas</option>
                    <option id="6c5" class="rdfilter cc29 final">Roçadeiras</option>
                    <option id="6c6" class="rdfilter cc29 final">Semeadoras</option>
                    <option id="6c7" class="rdfilter cc29 final">Diversos</option>

                    <option id="6d0" class="rdfilter cc30 final">Peças Para Máquinas Agrícolas</option>
                    <option id="6d1" class="rdfilter cc30 final">Peças Para Máquias De Transporte</option>
                    <option id="6d2" class="rdfilter cc30 final">Peças Para Silos</option>
                    <option id="6d3" class="rdfilter cc30 final">Demais Peças</option>

                    <option id="6e0" class="rdfilter cc31 final">Baias, Bretes, Palanques E Cercas</option>
                    <option id="6e1" class="rdfilter cc31 final">Barracões E Construções Rurais</option>
                    <option id="6e3" class="rdfilter cc31 final">Demais Instalações Rurais</option>

                    <option id="6f0" class="rdfilter cc32 final">Sistemas De Irrigação</option>
                    <option id="6f1" class="rdfilter cc32 final">Instrumentos Para Agricultura De Precisão</option>
                    <option id="6f2" class="rdfilter cc32 final">Equipamentos Meteorológicos</option>

                    <option id="6g0" class="rdfilter cc33 final">Ferramentas Manuais</option>
                    <option id="6g1" class="rdfilter cc33 final">Bombas Costais</option>
                    <option id="6g2" class="rdfilter cc33 final">Equipamentos De Proteção Individual (Epis)</option>

                    <option id="7a0" class="rdfilter cc34 final">Rações Para Bovinos</option>
                    <option id="7a1" class="rdfilter cc34 final">Sais Minerais</option>
                    <option id="7a2" class="rdfilter cc34 final">Silagens E Forragens</option>
                    <option id="7a3" class="rdfilter cc34 final">Rações Para Demais Animais</option>
                    <option id="7a4" class="rdfilter cc34 final">Suplementos Alimentares</option>
                    <option id="7a5" class="rdfilter cc34 final">Demais Produtos Alimentares Para Animais</option>

                    <option id="7b0" class="rdfilter cc35 final">Medicamentos Animais</option>
                    <option id="7b1" class="rdfilter cc35 final">Outros Produtos Farmacêuticos</option>
                        
                    <option id="8a0" class="rdfilter cc36 final">Açúcar Branco Refinado</option>
                    <option id="8a1" class="rdfilter cc36 final">Açúcar Branco Cristal</option>
                    <option id="8a2" class="rdfilter cc36 final">Açúcar Mascavo</option>
                    <option id="8a3" class="rdfilter cc36 final">Demais Açúcares</option>
                    <option id="8a4" class="rdfilter cc36 final">Doces E Conservas Açucaradas</option>
                    <option id="8a5" class="rdfilter cc36 final">Demais Derivados Do Açúcar</option>

                    <option id="8b0" class="rdfilter cc37 final">Arroz Em Grão</option>
                    <option id="8b1" class="rdfilter cc37 final">Demais Produtos Derivados Do Arroz</option>
                        
                    <option id="8c0" class="rdfilter cc38 final">Café Em Grão Torrado</option>
                    <option id="8c1" class="rdfilter cc38 final">Café Em Grão Moído</option>
                    <option id="8c2" class="rdfilter cc38 final">Demais Beneficiamentos Cafeeiros</option>
                        
                    <option id="8d0" class="rdfilter cc39 final">Produtos Derivados Do Trigo</option>
                    <option id="8d1" class="rdfilter cc39 final">Produtos Derivados Da Mandioca</option>
                    <option id="8d2" class="rdfilter cc39 final">Produtos Derivados Do Milho</option>
                        
                    <option id="8e0" class="rdfilter cc40 final">Óleos e Gorduras De Origem Animal</option>
                    <option id="8e1" class="rdfilter cc40 final">Óleos e Gorduras Origem Vegetal</option>
                        
                    <option id="9a0" class="rdfilter cc41 final">Cortes Tradicionais</option>
                    <option id="9a1" class="rdfilter cc41 final">Cortes Premium</option>
                        
                    <option id="9f0" class="rdfilter cc42 final">De Vaca</option>
                    <option id="9f1" class="rdfilter cc42 final">De Outros Animais</option>
                    <option id="9f2" class="rdfilter cc42 final">Leites Especiais (Sem Lactose, Etc)</option>
                        
                    <option id="9g0" class="rdfilter cc43 final">Queijo</option>
                    <option id="9g1" class="rdfilter cc43 final">Requeijão</option>
                    <option id="9g2" class="rdfilter cc43 final">Manteiga</option>
                    <option id="9g3" class="rdfilter cc43 final">Iogurtes</option>
                    <option id="9g4" class="rdfilter cc43 final">Creme De Leite E Leite Condensado</option>
                    <option id="9g5" class="rdfilter cc43 final">Leite Em Pó</option>
                    <option id="9g6" class="rdfilter cc43 final">Demais Produtos Do Laticínio</option>
                        
                    <option id="11a0" class="rdfilter cc44 final">Para Vestuário</option>
                    <option id="11a1" class="rdfilter cc44 final">Artigos De Selaria</option>
                    <option id="11a2" class="rdfilter cc44 final">Selas E Arreios</option>
                    <option id="11a3" class="rdfilter cc44 final">Para Demais Funções</option>

                    <option id="11b0" class="rdfilter cc45 final">Couro para Calçados</option>
                    <option id="11b1" class="rdfilter cc45 final">Solas E Saltos</option>
                    <option id="11b2" class="rdfilter cc45 final">Gáspeas</option>
                    <option id="11b3" class="rdfilter cc45 final">Biqueiras</option>
                    <option id="11b4" class="rdfilter cc45 final">Demais Partes Dos Calçados</option>
                    <option id="11b5" class="rdfilter cc45 final">Calçados Acabados</option>

                    <option id="20d0" class="rdfilter cc46 final">Seguro De Safra</option>
                    <option id="20d1" class="rdfilter cc46 final">Seguro De Carga</option>
                    <option id="20d2" class="rdfilter cc46 final">Seguro De Propriedade</option>
                    <option id="20d3" class="rdfilter cc46 final">Resseguros</option>
                    <option id="20d4" class="rdfilter cc46 final">Demais Seguros</option>

                    <option id="23a0" class="rdfilter cc47 final">Amostragem De Solo</option>
                    <option id="23a1" class="rdfilter cc47 final">Testes</option>
                    <option id="23a2" class="rdfilter cc47 final">Análises E Laudos Técnicos</option>


                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnSave4" class="btn btn-primary" data-dismiss="modal">Finalizar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
    </div>
  
    <div id="vendaModal2" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	 <select multiple size="26" id="filter15" class="categoryfilter" style="height:220px;">
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
                    <select multiple size="26" id="filter25" class="categoryfilter"  style="height:220px;">
                    
                        <option id="0a" value="0" class="ndfilter c0">Arroz, Trigo e Outros Cereais</option>
                        <option id="0b" value="1" class="ndfilter c0">Café em Grão</option>
                        <option id="0c" class="ndfilter c0 final">Laranja</option>
                        <option id="0d" class="ndfilter c0 final">Cana-de-açúcar</option>
                        <option id="0e" class="ndfilter c0 final">Milho em Grão</option>
                        <option id="0f" class="ndfilter c0 final">Soja  em Grão</option>
                        <option id="0g" value="6" class="ndfilter c0">Algodão</option>
                        <option id="0h" value="7" class="ndfilter c0">Frutas</option>
                        <option id="0i" value="8" class="ndfilter c0">Legumes</option>
                        <option id="0j" value="9" class="ndfilter c0">Verduras</option>
                        <option id="0k" value="10" class="ndfilter c0">Tubérculos</option>
                        <option id="0l" value="11" class="ndfilter c0">Oleaginosas e Sementes</option>
                        <option id="0m" class="ndfilter c0 final">Demais Produtos Agrícolas</option>

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

                        <option id="4a" class="ndfilter c4 final">Sementes</option>
                        <option id="4b" class="ndfilter c4 final">Mudas Frutíferas</option>
                        <option id="4c" class="ndfilter c4 final">Mudas Florestais</option>
                        <option id="4d" class="ndfilter c4 final">Demais Mudas</option>

                        <option id="5a" value="24" class="ndfilter c5">Adubos e Fertilizantes</option>
                        <option id="5b" value="25" class="ndfilter c5">Defensivos Agrícolas</option>
                        <option id="5c" value="26" class="ndfilter c5">Controles Biológicos</option>
                        <option id="5d" class="ndfilter c5 final">Demais Químicos Orgânicos</option>
                        <option id="5e" class="ndfilter c5 final">Demais Químicos Inorgânicos</option>

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
                        <option id="8f" class="ndfilter c8 final">Derivados dos Demais Vegetais</option>
                        
                        <option id="9a" value="41" class="ndfilter c9">Carne Bovina</option>
                        <option id="9b" class="ndfilter c9 final">Carne Suína</option>
                        <option id="9c" class="ndfilter c9 final">Carne de Aves</option>
                        <option id="9d" class="ndfilter c9 final">Pescado Industrializado</option>
                        <option id="9e" class="ndfilter c9 final">Carnes de Outros Animais</option>
                        <option id="9f" value="42" class="ndfilter c9">Leite Pasteurizado</option>
                        <option id="9g" value="43" class="ndfilter c9">Laticínios</option>
                        
                        <option id="10a" class="ndfilter c10 final">Concentrados de Frutas</option>
                        <option id="10b" class="ndfilter c10 final">Concentrados à base de Verduras</option>
                        <option id="10c" class="ndfilter c10 final">Concentrados à base de Outros Vegetais</option>
                        <option id="10d" class="ndfilter c10 final">Demais Ingredientes para Sucos e Bebidas</option>
                        
                        <option id="11a" value="44" class="ndfilter c11">Artefatos de Couro</option>
                        <option id="11b" value="45" class="ndfilter c11">Insumos para Calçados</option>
                        
                        <option id="12a" class="ndfilter c12 final">Celulose</option>
                        <option id="12b" class="ndfilter c12 final">Papel</option>
                        <option id="12c" class="ndfilter c12 final">Demais Derivados da Celulose e Papel</option>
                        
                        <option id="13a" class="ndfilter c13 final">Fios</option>
                        <option id="13b" class="ndfilter c13 final">Fibras Têxteis Beneficiadas</option>
                        <option id="13c" class="ndfilter c13 final">Produtos para Vestuário</option>
                        <option id="13d" class="ndfilter c13 final">Demais Produtos Têxteis</option>
                        
                        <option id="14a" class="ndfilter c14 final">Etanol</option>
                        <option id="14b" class="ndfilter c14 final">Biodiesel</option>
                        <option id="14c" class="ndfilter c14 final">Bagaços</option>
                        <option id="14e" class="ndfilter c14 final">Demais Produtos de Bioenergia</option>
                        
                        <option id="15a" class="ndfilter c15 final">Fumo Seco  Enrolado ou Picado</option>
                        <option id="15b" class="ndfilter c15 final">Fumo Curtido </option>
                        <option id="15c" class="ndfilter c15 final">Diversos Artigos do Fumo</option>
                        
                        <option id="16a" class="ndfilter c16 final">Madeiras sob Encomenda</option>
                        <option id="16b" class="ndfilter c16 final">Móveis, Acessórios, Componentes e Ferragens</option>
                        <option id="16c" class="ndfilter c16 final">Carvão Vegetal</option>
                        <option id="16d" class="ndfilter c16 final">Demais Produtos da Madeira</option>
                        
                        <option id="17a" class="ndfilter c17 final">Penas e Plumas</option>
                        <option id="17b" class="ndfilter c17 final">Chifres e Cascos</option>
                        <option id="17c" class="ndfilter c17 final">Borracha</option>
                        <option id="17d" class="ndfilter c17 final">Demais Produtos</option>
                        
                        <option id="18a" class="ndfilter c18">Rodoviário</option>
                        <option id="18b" class="ndfilter c18">Aéreo</option>
                        <option id="18c" class="ndfilter c18 final">Outros Modais</option>
                        
                        <option id="19a" class="ndfilter c19 final">de Grãos em Silos</option>
                        <option id="19b" class="ndfilter c19 final">Outros Armazenamentos</option>
                        
                        <option id="20a" class="ndfilter c20 final">Crédito</option>
                        <option id="20b" class="ndfilter c20 final">Empréstimos</option>
                        <option id="20c" class="ndfilter c20 final">Arrendamento Mercantil(Leasing)</option>
                        <option id="20d" value="46" class="ndfilter c20">Seguros</option>
                        <option id="20e" class="ndfilter c20 final">Demais Produtos de Intermediação Financeira</option>
                        
                        <option id="21a" class="ndfilter c21 final">Empresariais</option>
                        <option id="21b" class="ndfilter c21 final">Individuais</option>
                        
                        <option id="22a" class="ndfilter c22 final">Aluguéis</option>
                        <option id="22b" class="ndfilter c22 final">Parcerias</option>
                        <option id="22c" class="ndfilter c22 final">Arrendamentos</option>
                        
                        <option id="23a" value="47" class="ndfilter c23">Testes/ Análises Técnicas</option>
                        <option id="23a" class="ndfilter c23 final">Projetos de Irrigação</option>
                        <option id="23a" class="ndfilter c23 final">Pesquisa e Desenvolvimento</option>
                        
                        <option id="24a" class="ndfilter c24 final">Serviços de Plantio</option>
                        <option id="24b" class="ndfilter c24 final">Serviços de Colheita</option>
                        <option id="24c" class="ndfilter c24 final">Serviços de Aplicação de Defensivos</option>
                        
                        <option id="25a" class="ndfilter c25 final">Demais Serviços</option>


                    </select>
                    <select multiple size="26" id="filter35" class="categoryfilter" style="height:220px; final">
                        
                    <option id="0a0" class="rdfilter cc0 final">Arroz em Casca</option>
                    <option id="0a1" class="rdfilter cc0 final">Trigo em Casca</option>
                    <option id="0a2" class="rdfilter cc0 final">Cevada</option>
                    <option id="0a3" class="rdfilter cc0 final">Sorgo</option>
                    <option id="0a4" class="rdfilter cc0 final">Milheto</option>
                    <option id="0a5" class="rdfilter cc0 final">Demais Cereais</option>

                    <option id="0b0" class="rdfilter cc1 final">Café Arábica em Grão</option>
                    <option id="0b1" class="rdfilter cc1 final">Café Robusta em Grão</option>
                        
                    <option id="0g0" class="rdfilter cc6 final">Algodão em Caroço</option>
                    <option id="0g1" class="rdfilter cc6 final">Algodão em Pluma</option>
                        
                    <option id="0h0" class="rdfilter cc7 final">Abacaxi</option>
                    <option id="0h1" class="rdfilter cc7 final">Banana</option>
                    <option id="0h2" class="rdfilter cc7 final">Coco-Da-Baía</option>
                    <option id="0h3" class="rdfilter cc7 final">Goiaba</option>
                    <option id="0h4" class="rdfilter cc7 final">Limão</option>
                    <option id="0h5" class="rdfilter cc7 final">Maçã</option>
                    <option id="0h6" class="rdfilter cc7 final">Mamão</option>
                    <option id="0h7" class="rdfilter cc7 final">Manga</option>
                    <option id="0h8" class="rdfilter cc7 final">Maracujá</option>
                    <option id="0h9" class="rdfilter cc7 final">Melancia</option>
                    <option id="0h10" class="rdfilter cc7 final">Melão</option>
                    <option id="0h11" class="rdfilter cc7 final">Morango</option>
                    <option id="0h12" class="rdfilter cc7 final">Pêssego</option>
                    <option id="0h13" class="rdfilter cc7 final">Tangerina, Bergamota Ou Mexirica</option>
                    <option id="0h14" class="rdfilter cc7 final">Uva(Mesa)</option>
                    <option id="0h15" class="rdfilter cc7 final">Uva(Vinho Ou Suco)</option>

                    <option id="0i0" class="rdfilter cc8 final">Abobrinha</option>
                    <option id="0i1" class="rdfilter cc8 final">Beringela</option>
                    <option id="0i2" class="rdfilter cc8 final">Beterraba</option>
                    <option id="0i3" class="rdfilter cc8 final">Cebola</option>
                    <option id="0i4" class="rdfilter cc8 final">Cenoura</option>
                    <option id="0i5" class="rdfilter cc8 final">Chuchu</option>
                    <option id="0i6" class="rdfilter cc8 final">Feijão De Cor Em Grão</option>
                    <option id="0i7" class="rdfilter cc8 final">Feijão Preto Em Grão</option>
                    <option id="0i8" class="rdfilter cc8 final">Feijão-Fradinho, Caupi, De Corda Ou Macáçar</option>
                    <option id="0i9" class="rdfilter cc8 final">Jiló</option>
                    <option id="0i10" class="rdfilter cc8 final">Maxixe</option>
                    <option id="0i11" class="rdfilter cc8 final">Milho Verde(Espiga)</option>
                    <option id="0i12" class="rdfilter cc8 final">Pepino</option>
                    <option id="0i13" class="rdfilter cc8 final">Pimentão</option>
                    <option id="0i14" class="rdfilter cc8 final">Quiabo</option>
                    <option id="0i15" class="rdfilter cc8 final">Tomate Rasteiro (Industrial)</option>
                    <option id="0i16" class="rdfilter cc8 final">Tomate(Estaqueado)</option>
                    <option id="0i17" class="rdfilter cc8 final">Vagem(Feijão Vagem)</option>

                    <option id="0j0" class="rdfilter cc9 final">Agrião</option>
                    <option id="0j1" class="rdfilter cc9 final">Alface</option>
                    <option id="0j2" class="rdfilter cc9 final">Brócolis</option>
                    <option id="0j3" class="rdfilter cc9 final">Cebolinha</option>
                    <option id="0j4" class="rdfilter cc9 final">Coentro</option>
                    <option id="0j5" class="rdfilter cc9 final">Couve</option>
                    <option id="0j6" class="rdfilter cc9 final">Couve-Flor</option>
                    <option id="0j7" class="rdfilter cc9 final">Espinafre</option>
                    <option id="0j8" class="rdfilter cc9 final">Repolho</option>
                    <option id="0j9" class="rdfilter cc9 final">Salsa</option>
                    
                    <option id="0k0" class="rdfilter cc10 final">Batata Doce</option>
                    <option id="0k1" class="rdfilter cc10 final">Batata Inglesa</option>
                    <option id="0k2" class="rdfilter cc10 final">Batata-Baroa(Mandioquinha)</option>
                    <option id="0k3" class="rdfilter cc10 final">Inhame</option>
                    <option id="0k4" class="rdfilter cc10 final">Mandioca(Aipim Ou Macaxeira)</option>
                    <option id="0k5" class="rdfilter cc10 final">Nabo</option>
                    <option id="0k6" class="rdfilter cc10 final">Rabanete</option>

                    <option id="0l0" class="rdfilter cc11 final">Amendoim Em Casca</option>
                    <option id="0l1" class="rdfilter cc11 final">Girassol(Semente)</option>
                    <option id="0l2" class="rdfilter cc11 final">Cacau(Amêndoa)</option>
                        
                    <option id="1a0" class="rdfilter cc12 final">Nelore</option>
                    <option id="1a1" class="rdfilter cc12 final">Jersey</option>
                    <option id="1a2" class="rdfilter cc12 final">Gir</option>
                    <option id="1a3" class="rdfilter cc12 final">Canchim</option>
                    <option id="1a4" class="rdfilter cc12 final">Senepol</option>
                    <option id="1a5" class="rdfilter cc12 final">Angus</option>
                    <option id="1a6" class="rdfilter cc12 final">Caracu</option>
                    <option id="1a7" class="rdfilter cc12 final">Charolês</option>
                    <option id="1a8" class="rdfilter cc12 final">Guzerá</option>
                    <option id="1a9" class="rdfilter cc12 final">Outras Raças Bovinas</option>

                    <option id="1b0" class="rdfilter cc13 final">Leite De Vaca</option>
                    <option id="1b1" class="rdfilter cc13 final">Leite De Búfala</option>
                    <option id="1b2" class="rdfilter cc13 final">Leite De Cabra</option>
                    <option id="1b3" class="rdfilter cc13 final">Leite De Outros Animais</option>

                    <option id="1c0" class="rdfilter cc14 final">Canastrinho</option>
                    <option id="1c1" class="rdfilter cc14 final">Canastra</option>
                    <option id="1c2" class="rdfilter cc14 final">Canastrão</option>
                    <option id="1c3" class="rdfilter cc14 final">Piau</option>
                    <option id="1c4" class="rdfilter cc14 final">Nilo Canastra</option>
                    <option id="1c5" class="rdfilter cc14 final">Outras Raças Suínas</option>

                    <option id="1d0" class="rdfilter cc15 final">Frangos</option>
                    <option id="1d1" class="rdfilter cc15 final">Outras Aves</option>
                        
                    <option id="1e0" class="rdfilter cc151 final">Ovos De Galinha</option>
                    <option id="1e1" class="rdfilter cc151 final">Ovos De Outros Animais</option>

                    <option id="1f0" class="rdfilter cc16 final">Asininos</option>
                    <option id="1f1" class="rdfilter cc16 final">Bubalinos</option>
                    <option id="1f2" class="rdfilter cc16 final">Cães</option>
                    <option id="1f3" class="rdfilter cc16 final">Caprinos</option>
                    <option id="1f4" class="rdfilter cc16 final">Coelhos</option>
                    <option id="1f5" class="rdfilter cc16 final">Cavalos</option>
                    <option id="1f6" class="rdfilter cc16 final">Muares</option>
                    <option id="1f7" class="rdfilter cc16 final">Ovinos</option>
                    <option id="1f8" class="rdfilter cc16 final">Outros</option>

                    <option id="1g0" class="rdfilter cc17 final">Produtos De Apicultura</option>
                    <option id="1g1" class="rdfilter cc17 final">Casulos Do Bicho-Da-Seda</option>
                    <option id="1g2" class="rdfilter cc17 final">Produtos De Ranicultura</option>
                    <option id="1g3" class="rdfilter cc17 final">Demais Produtos De Origem Animal</option>

                    <option id="2a0" class="rdfilter cc18 final">Eucalipto</option>
                    <option id="2a1" class="rdfilter cc18 final">Acácia-Negra</option>
                    <option id="2a2" class="rdfilter cc18 final">Mogno</option>
                    <option id="2a3" class="rdfilter cc18 final">Pinheiro Americano</option>
                    <option id="2a4" class="rdfilter cc18 final">Pinheiro Brasileiro (Araucária)</option>
                    <option id="2a5" class="rdfilter cc18 final">Cascas</option>
                    <option id="2a6" class="rdfilter cc18 final">Outros Produtos Da Silvicultura</option>

                    <option id="2b0" class="rdfilter cc19 final">Açaí(Fruto)</option>
                    <option id="2b1" class="rdfilter cc19 final">Babaçu(Amêndoa)</option>
                    <option id="2b2" class="rdfilter cc19 final">Borracha (Látex Coagulado)</option>
                    <option id="2b3" class="rdfilter cc19 final">Carnaúba (Cera)</option>
                    <option id="2b4" class="rdfilter cc19 final">Castanha-Do-Pará</option>
                    <option id="2b5" class="rdfilter cc19 final">Cupuaçu</option>
                    <option id="2b6" class="rdfilter cc19 final">Palmito</option>
                    <option id="2b7" class="rdfilter cc19 final">Pinhão</option>
                    <option id="2b8" class="rdfilter cc19 final">Carnaúba (Pó De Palha)</option>
                    <option id="2b9" class="rdfilter cc19 final">Demais Produtos da Extração Vegetal</option>

                    <option id="3a0" class="rdfilter cc20 final">Salmão</option>
                    <option id="3a1" class="rdfilter cc20 final">Sardinha</option>
                    <option id="3a2" class="rdfilter cc20 final">Cação</option>
                    <option id="3a3" class="rdfilter cc20 final">Corvina</option>
                    <option id="3a4" class="rdfilter cc20 final">Saint Peter</option>
                    <option id="3a5" class="rdfilter cc20 final">Tainha</option>
                    <option id="3a6" class="rdfilter cc20 final">Atum</option>
                    <option id="3a7" class="rdfilter cc20 final">Pescada Branca</option>
                    <option id="3a8" class="rdfilter cc20 final">Pintado</option>
                    <option id="3a9" class="rdfilter cc20 final">Anchova</option>
                    <option id="3a10" class="rdfilter cc20 final">Linguado</option>
                    <option id="3a11" class="rdfilter cc20 final">Tilápia</option>
                    <option id="3a12" class="rdfilter cc20 final">Outros Peixes</option>

                    <option id="3b0" class="rdfilter cc21 final">Lula</option>
                    <option id="3b1" class="rdfilter cc21 final">Polvo</option>
                    <option id="3b2" class="rdfilter cc21 final">Demais Moluscos</option>

                    <option id="3c0" class="rdfilter cc22 final">Mexilhão</option>
                    <option id="3c1" class="rdfilter cc22 final">Ostra</option>
                    <option id="3c2" class="rdfilter cc22 final">Demais Crustáceos</option>

                    <option id="3d0" class="rdfilter cc23 final">Camarão Cinza</option>
                    <option id="3d1" class="rdfilter cc23 final">Camarão Rosa</option>
                    <option id="3d2" class="rdfilter cc23 final">Outros</option>

                    <option id="5a0" class="rdfilter cc24 final">Macronutrientes </option>
                    <option id="5a1" class="rdfilter cc24 final">Micronutrientes</option>
                    <option id="5a2" class="rdfilter cc24 final">Corretivos</option>
                    <option id="5a3" class="rdfilter cc24 final">Adubos Orgânicos</option>
                    <option id="5a4" class="rdfilter cc24 final">Demais Adubos Ou Fertilizantes</option>

                    <option id="5b0" class="rdfilter cc25 final">Herbicidas</option>
                    <option id="5b1" class="rdfilter cc25 final">Fungicidas</option>
                    <option id="5b2" class="rdfilter cc25 final">Inseticidas</option>
                    <option id="5b3" class="rdfilter cc25 final">Nematócitos</option>

                    <option id="5c0" class="rdfilter cc26 final">Parasitóides</option>
                    <option id="5c1" class="rdfilter cc26 final">Predadores</option>
                    <option id="5c2" class="rdfilter cc26 final">Patógenos</option>
                        
                    <option id="6a0" class="rdfilter cc27 final">Tratores</option>
                    <option id="6a1" class="rdfilter cc27 final">Colheitadeiras</option>
                    <option id="6a2" class="rdfilter cc27 final">Pulverizadores</option>
                    <option id="6a3" class="rdfilter cc27 final">Máquinas Multi-Função</option>
                    <option id="6a4" class="rdfilter cc27 final">Outros</option>

                    <option id="6b0" class="rdfilter cc28 final">Caminhonetes</option>
                    <option id="6b1" class="rdfilter cc28 final">Caminhões</option>
                    <option id="6b2" class="rdfilter cc28 final">Carretas E Trailers</option>
                    <option id="6b3" class="rdfilter cc28 final">Treminhões</option>
                    <option id="6b4" class="rdfilter cc28 final">Demais Veículos</option>

                    <option id="6c0" class="rdfilter cc29 final">Arados</option>
                    <option id="6c1" class="rdfilter cc29 final">Colheita</option>
                    <option id="6c2" class="rdfilter cc29 final">Cultivadores</option>
                    <option id="6c3" class="rdfilter cc29 final">Grades </option>
                    <option id="6c4" class="rdfilter cc29 final">Plainas</option>
                    <option id="6c5" class="rdfilter cc29 final">Roçadeiras</option>
                    <option id="6c6" class="rdfilter cc29 final">Semeadoras</option>
                    <option id="6c7" class="rdfilter cc29 final">Diversos</option>

                    <option id="6d0" class="rdfilter cc30 final">Peças Para Máquinas Agrícolas</option>
                    <option id="6d1" class="rdfilter cc30 final">Peças Para Máquias De Transporte</option>
                    <option id="6d2" class="rdfilter cc30 final">Peças Para Silos</option>
                    <option id="6d3" class="rdfilter cc30 final">Demais Peças</option>

                    <option id="6e0" class="rdfilter cc31 final">Baias, Bretes, Palanques E Cercas</option>
                    <option id="6e1" class="rdfilter cc31 final">Barracões E Construções Rurais</option>
                    <option id="6e3" class="rdfilter cc31 final">Demais Instalações Rurais</option>

                    <option id="6f0" class="rdfilter cc32 final">Sistemas De Irrigação</option>
                    <option id="6f1" class="rdfilter cc32 final">Instrumentos Para Agricultura De Precisão</option>
                    <option id="6f2" class="rdfilter cc32 final">Equipamentos Meteorológicos</option>

                    <option id="6g0" class="rdfilter cc33 final">Ferramentas Manuais</option>
                    <option id="6g1" class="rdfilter cc33 final">Bombas Costais</option>
                    <option id="6g2" class="rdfilter cc33 final">Equipamentos De Proteção Individual (Epis)</option>

                    <option id="7a0" class="rdfilter cc34 final">Rações Para Bovinos</option>
                    <option id="7a1" class="rdfilter cc34 final">Sais Minerais</option>
                    <option id="7a2" class="rdfilter cc34 final">Silagens E Forragens</option>
                    <option id="7a3" class="rdfilter cc34 final">Rações Para Demais Animais</option>
                    <option id="7a4" class="rdfilter cc34 final">Suplementos Alimentares</option>
                    <option id="7a5" class="rdfilter cc34 final">Demais Produtos Alimentares Para Animais</option>

                    <option id="7b0" class="rdfilter cc35 final">Medicamentos Animais</option>
                    <option id="7b1" class="rdfilter cc35 final">Outros Produtos Farmacêuticos</option>
                        
                    <option id="8a0" class="rdfilter cc36 final">Açúcar Branco Refinado</option>
                    <option id="8a1" class="rdfilter cc36 final">Açúcar Branco Cristal</option>
                    <option id="8a2" class="rdfilter cc36 final">Açúcar Mascavo</option>
                    <option id="8a3" class="rdfilter cc36 final">Demais Açúcares</option>
                    <option id="8a4" class="rdfilter cc36 final">Doces E Conservas Açucaradas</option>
                    <option id="8a5" class="rdfilter cc36 final">Demais Derivados Do Açúcar</option>

                    <option id="8b0" class="rdfilter cc37 final">Arroz Em Grão</option>
                    <option id="8b1" class="rdfilter cc37 final">Demais Produtos Derivados Do Arroz</option>
                        
                    <option id="8c0" class="rdfilter cc38 final">Café Em Grão Torrado</option>
                    <option id="8c1" class="rdfilter cc38 final">Café Em Grão Moído</option>
                    <option id="8c2" class="rdfilter cc38 final">Demais Beneficiamentos Cafeeiros</option>
                        
                    <option id="8d0" class="rdfilter cc39 final">Produtos Derivados Do Trigo</option>
                    <option id="8d1" class="rdfilter cc39 final">Produtos Derivados Da Mandioca</option>
                    <option id="8d2" class="rdfilter cc39 final">Produtos Derivados Do Milho</option>
                        
                    <option id="8e0" class="rdfilter cc40 final">Óleos e Gorduras De Origem Animal</option>
                    <option id="8e1" class="rdfilter cc40 final">Óleos e Gorduras Origem Vegetal</option>
                        
                    <option id="9a0" class="rdfilter cc41 final">Cortes Tradicionais</option>
                    <option id="9a1" class="rdfilter cc41 final">Cortes Premium</option>
                        
                    <option id="9f0" class="rdfilter cc42 final">De Vaca</option>
                    <option id="9f1" class="rdfilter cc42 final">De Outros Animais</option>
                    <option id="9f2" class="rdfilter cc42 final">Leites Especiais (Sem Lactose, Etc)</option>
                        
                    <option id="9g0" class="rdfilter cc43 final">Queijo</option>
                    <option id="9g1" class="rdfilter cc43 final">Requeijão</option>
                    <option id="9g2" class="rdfilter cc43 final">Manteiga</option>
                    <option id="9g3" class="rdfilter cc43 final">Iogurtes</option>
                    <option id="9g4" class="rdfilter cc43 final">Creme De Leite E Leite Condensado</option>
                    <option id="9g5" class="rdfilter cc43 final">Leite Em Pó</option>
                    <option id="9g6" class="rdfilter cc43 final">Demais Produtos Do Laticínio</option>
                        
                    <option id="11a0" class="rdfilter cc44 final">Para Vestuário</option>
                    <option id="11a1" class="rdfilter cc44 final">Artigos De Selaria</option>
                    <option id="11a2" class="rdfilter cc44 final">Selas E Arreios</option>
                    <option id="11a3" class="rdfilter cc44 final">Para Demais Funções</option>

                    <option id="11b0" class="rdfilter cc45 final">Couro para Calçados</option>
                    <option id="11b1" class="rdfilter cc45 final">Solas E Saltos</option>
                    <option id="11b2" class="rdfilter cc45 final">Gáspeas</option>
                    <option id="11b3" class="rdfilter cc45 final">Biqueiras</option>
                    <option id="11b4" class="rdfilter cc45 final">Demais Partes Dos Calçados</option>
                    <option id="11b5" class="rdfilter cc45 final">Calçados Acabados</option>

                    <option id="20d0" class="rdfilter cc46 final">Seguro De Safra</option>
                    <option id="20d1" class="rdfilter cc46 final">Seguro De Carga</option>
                    <option id="20d2" class="rdfilter cc46 final">Seguro De Propriedade</option>
                    <option id="20d3" class="rdfilter cc46 final">Resseguros</option>
                    <option id="20d4" class="rdfilter cc46 final">Demais Seguros</option>

                    <option id="23a0" class="rdfilter cc47 final">Amostragem De Solo</option>
                    <option id="23a1" class="rdfilter cc47 final">Testes</option>
                    <option id="23a2" class="rdfilter cc47 final">Análises E Laudos Técnicos</option>


                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnSave5" class="btn btn-primary" data-dismiss="modal">Finalizar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
    </div>
  
    <div id="vendaModal3" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	 <select multiple size="26" id="filter16" class="categoryfilter" style="height:220px;">
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
                    <select multiple size="26" id="filter26" class="categoryfilter"  style="height:220px;">
                    
                        <option id="0a" value="0" class="ndfilter c0">Arroz, Trigo e Outros Cereais</option>
                        <option id="0b" value="1" class="ndfilter c0">Café em Grão</option>
                        <option id="0c" class="ndfilter c0 final">Laranja</option>
                        <option id="0d" class="ndfilter c0 final">Cana-de-açúcar</option>
                        <option id="0e" class="ndfilter c0 final">Milho em Grão</option>
                        <option id="0f" class="ndfilter c0 final">Soja  em Grão</option>
                        <option id="0g" value="6" class="ndfilter c0">Algodão</option>
                        <option id="0h" value="7" class="ndfilter c0">Frutas</option>
                        <option id="0i" value="8" class="ndfilter c0">Legumes</option>
                        <option id="0j" value="9" class="ndfilter c0">Verduras</option>
                        <option id="0k" value="10" class="ndfilter c0">Tubérculos</option>
                        <option id="0l" value="11" class="ndfilter c0">Oleaginosas e Sementes</option>
                        <option id="0m" class="ndfilter c0 final">Demais Produtos Agrícolas</option>

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

                        <option id="4a" class="ndfilter c4 final">Sementes</option>
                        <option id="4b" class="ndfilter c4 final">Mudas Frutíferas</option>
                        <option id="4c" class="ndfilter c4 final">Mudas Florestais</option>
                        <option id="4d" class="ndfilter c4 final">Demais Mudas</option>

                        <option id="5a" value="24" class="ndfilter c5">Adubos e Fertilizantes</option>
                        <option id="5b" value="25" class="ndfilter c5">Defensivos Agrícolas</option>
                        <option id="5c" value="26" class="ndfilter c5">Controles Biológicos</option>
                        <option id="5d" class="ndfilter c5 final">Demais Químicos Orgânicos</option>
                        <option id="5e" class="ndfilter c5 final">Demais Químicos Inorgânicos</option>

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
                        <option id="8f" class="ndfilter c8 final">Derivados dos Demais Vegetais</option>
                        
                        <option id="9a" value="41" class="ndfilter c9">Carne Bovina</option>
                        <option id="9b" class="ndfilter c9 final">Carne Suína</option>
                        <option id="9c" class="ndfilter c9 final">Carne de Aves</option>
                        <option id="9d" class="ndfilter c9 final">Pescado Industrializado</option>
                        <option id="9e" class="ndfilter c9 final">Carnes de Outros Animais</option>
                        <option id="9f" value="42" class="ndfilter c9">Leite Pasteurizado</option>
                        <option id="9g" value="43" class="ndfilter c9">Laticínios</option>
                        
                        <option id="10a" class="ndfilter c10 final">Concentrados de Frutas</option>
                        <option id="10b" class="ndfilter c10 final">Concentrados à base de Verduras</option>
                        <option id="10c" class="ndfilter c10 final">Concentrados à base de Outros Vegetais</option>
                        <option id="10d" class="ndfilter c10 final">Demais Ingredientes para Sucos e Bebidas</option>
                        
                        <option id="11a" value="44" class="ndfilter c11">Artefatos de Couro</option>
                        <option id="11b" value="45" class="ndfilter c11">Insumos para Calçados</option>
                        
                        <option id="12a" class="ndfilter c12 final">Celulose</option>
                        <option id="12b" class="ndfilter c12 final">Papel</option>
                        <option id="12c" class="ndfilter c12 final">Demais Derivados da Celulose e Papel</option>
                        
                        <option id="13a" class="ndfilter c13 final">Fios</option>
                        <option id="13b" class="ndfilter c13 final">Fibras Têxteis Beneficiadas</option>
                        <option id="13c" class="ndfilter c13 final">Produtos para Vestuário</option>
                        <option id="13d" class="ndfilter c13 final">Demais Produtos Têxteis</option>
                        
                        <option id="14a" class="ndfilter c14 final">Etanol</option>
                        <option id="14b" class="ndfilter c14 final">Biodiesel</option>
                        <option id="14c" class="ndfilter c14 final">Bagaços</option>
                        <option id="14e" class="ndfilter c14 final">Demais Produtos de Bioenergia</option>
                        
                        <option id="15a" class="ndfilter c15 final">Fumo Seco  Enrolado ou Picado</option>
                        <option id="15b" class="ndfilter c15 final">Fumo Curtido </option>
                        <option id="15c" class="ndfilter c15 final">Diversos Artigos do Fumo</option>
                        
                        <option id="16a" class="ndfilter c16 final">Madeiras sob Encomenda</option>
                        <option id="16b" class="ndfilter c16 final">Móveis, Acessórios, Componentes e Ferragens</option>
                        <option id="16c" class="ndfilter c16 final">Carvão Vegetal</option>
                        <option id="16d" class="ndfilter c16 final">Demais Produtos da Madeira</option>
                        
                        <option id="17a" class="ndfilter c17 final">Penas e Plumas</option>
                        <option id="17b" class="ndfilter c17 final">Chifres e Cascos</option>
                        <option id="17c" class="ndfilter c17 final">Borracha</option>
                        <option id="17d" class="ndfilter c17 final">Demais Produtos</option>
                        
                        <option id="18a" class="ndfilter c18">Rodoviário</option>
                        <option id="18b" class="ndfilter c18">Aéreo</option>
                        <option id="18c" class="ndfilter c18 final">Outros Modais</option>
                        
                        <option id="19a" class="ndfilter c19 final">de Grãos em Silos</option>
                        <option id="19b" class="ndfilter c19 final">Outros Armazenamentos</option>
                        
                        <option id="20a" class="ndfilter c20 final">Crédito</option>
                        <option id="20b" class="ndfilter c20 final">Empréstimos</option>
                        <option id="20c" class="ndfilter c20 final">Arrendamento Mercantil(Leasing)</option>
                        <option id="20d" value="46" class="ndfilter c20">Seguros</option>
                        <option id="20e" class="ndfilter c20 final">Demais Produtos de Intermediação Financeira</option>
                        
                        <option id="21a" class="ndfilter c21 final">Empresariais</option>
                        <option id="21b" class="ndfilter c21 final">Individuais</option>
                        
                        <option id="22a" class="ndfilter c22 final">Aluguéis</option>
                        <option id="22b" class="ndfilter c22 final">Parcerias</option>
                        <option id="22c" class="ndfilter c22 final">Arrendamentos</option>
                        
                        <option id="23a" value="47" class="ndfilter c23">Testes/ Análises Técnicas</option>
                        <option id="23a" class="ndfilter c23 final">Projetos de Irrigação</option>
                        <option id="23a" class="ndfilter c23 final">Pesquisa e Desenvolvimento</option>
                        
                        <option id="24a" class="ndfilter c24 final">Serviços de Plantio</option>
                        <option id="24b" class="ndfilter c24 final">Serviços de Colheita</option>
                        <option id="24c" class="ndfilter c24 final">Serviços de Aplicação de Defensivos</option>
                        
                        <option id="25a" class="ndfilter c25 final">Demais Serviços</option>


                    </select>
                    <select multiple size="26" id="filter36" class="categoryfilter" style="height:220px; final">
                        
                    <option id="0a0" class="rdfilter cc0 final">Arroz em Casca</option>
                    <option id="0a1" class="rdfilter cc0 final">Trigo em Casca</option>
                    <option id="0a2" class="rdfilter cc0 final">Cevada</option>
                    <option id="0a3" class="rdfilter cc0 final">Sorgo</option>
                    <option id="0a4" class="rdfilter cc0 final">Milheto</option>
                    <option id="0a5" class="rdfilter cc0 final">Demais Cereais</option>

                    <option id="0b0" class="rdfilter cc1 final">Café Arábica em Grão</option>
                    <option id="0b1" class="rdfilter cc1 final">Café Robusta em Grão</option>
                        
                    <option id="0g0" class="rdfilter cc6 final">Algodão em Caroço</option>
                    <option id="0g1" class="rdfilter cc6 final">Algodão em Pluma</option>
                        
                    <option id="0h0" class="rdfilter cc7 final">Abacaxi</option>
                    <option id="0h1" class="rdfilter cc7 final">Banana</option>
                    <option id="0h2" class="rdfilter cc7 final">Coco-Da-Baía</option>
                    <option id="0h3" class="rdfilter cc7 final">Goiaba</option>
                    <option id="0h4" class="rdfilter cc7 final">Limão</option>
                    <option id="0h5" class="rdfilter cc7 final">Maçã</option>
                    <option id="0h6" class="rdfilter cc7 final">Mamão</option>
                    <option id="0h7" class="rdfilter cc7 final">Manga</option>
                    <option id="0h8" class="rdfilter cc7 final">Maracujá</option>
                    <option id="0h9" class="rdfilter cc7 final">Melancia</option>
                    <option id="0h10" class="rdfilter cc7 final">Melão</option>
                    <option id="0h11" class="rdfilter cc7 final">Morango</option>
                    <option id="0h12" class="rdfilter cc7 final">Pêssego</option>
                    <option id="0h13" class="rdfilter cc7 final">Tangerina, Bergamota Ou Mexirica</option>
                    <option id="0h14" class="rdfilter cc7 final">Uva(Mesa)</option>
                    <option id="0h15" class="rdfilter cc7 final">Uva(Vinho Ou Suco)</option>

                    <option id="0i0" class="rdfilter cc8 final">Abobrinha</option>
                    <option id="0i1" class="rdfilter cc8 final">Beringela</option>
                    <option id="0i2" class="rdfilter cc8 final">Beterraba</option>
                    <option id="0i3" class="rdfilter cc8 final">Cebola</option>
                    <option id="0i4" class="rdfilter cc8 final">Cenoura</option>
                    <option id="0i5" class="rdfilter cc8 final">Chuchu</option>
                    <option id="0i6" class="rdfilter cc8 final">Feijão De Cor Em Grão</option>
                    <option id="0i7" class="rdfilter cc8 final">Feijão Preto Em Grão</option>
                    <option id="0i8" class="rdfilter cc8 final">Feijão-Fradinho, Caupi, De Corda Ou Macáçar</option>
                    <option id="0i9" class="rdfilter cc8 final">Jiló</option>
                    <option id="0i10" class="rdfilter cc8 final">Maxixe</option>
                    <option id="0i11" class="rdfilter cc8 final">Milho Verde(Espiga)</option>
                    <option id="0i12" class="rdfilter cc8 final">Pepino</option>
                    <option id="0i13" class="rdfilter cc8 final">Pimentão</option>
                    <option id="0i14" class="rdfilter cc8 final">Quiabo</option>
                    <option id="0i15" class="rdfilter cc8 final">Tomate Rasteiro (Industrial)</option>
                    <option id="0i16" class="rdfilter cc8 final">Tomate(Estaqueado)</option>
                    <option id="0i17" class="rdfilter cc8 final">Vagem(Feijão Vagem)</option>

                    <option id="0j0" class="rdfilter cc9 final">Agrião</option>
                    <option id="0j1" class="rdfilter cc9 final">Alface</option>
                    <option id="0j2" class="rdfilter cc9 final">Brócolis</option>
                    <option id="0j3" class="rdfilter cc9 final">Cebolinha</option>
                    <option id="0j4" class="rdfilter cc9 final">Coentro</option>
                    <option id="0j5" class="rdfilter cc9 final">Couve</option>
                    <option id="0j6" class="rdfilter cc9 final">Couve-Flor</option>
                    <option id="0j7" class="rdfilter cc9 final">Espinafre</option>
                    <option id="0j8" class="rdfilter cc9 final">Repolho</option>
                    <option id="0j9" class="rdfilter cc9 final">Salsa</option>
                    
                    <option id="0k0" class="rdfilter cc10 final">Batata Doce</option>
                    <option id="0k1" class="rdfilter cc10 final">Batata Inglesa</option>
                    <option id="0k2" class="rdfilter cc10 final">Batata-Baroa(Mandioquinha)</option>
                    <option id="0k3" class="rdfilter cc10 final">Inhame</option>
                    <option id="0k4" class="rdfilter cc10 final">Mandioca(Aipim Ou Macaxeira)</option>
                    <option id="0k5" class="rdfilter cc10 final">Nabo</option>
                    <option id="0k6" class="rdfilter cc10 final">Rabanete</option>

                    <option id="0l0" class="rdfilter cc11 final">Amendoim Em Casca</option>
                    <option id="0l1" class="rdfilter cc11 final">Girassol(Semente)</option>
                    <option id="0l2" class="rdfilter cc11 final">Cacau(Amêndoa)</option>
                        
                    <option id="1a0" class="rdfilter cc12 final">Nelore</option>
                    <option id="1a1" class="rdfilter cc12 final">Jersey</option>
                    <option id="1a2" class="rdfilter cc12 final">Gir</option>
                    <option id="1a3" class="rdfilter cc12 final">Canchim</option>
                    <option id="1a4" class="rdfilter cc12 final">Senepol</option>
                    <option id="1a5" class="rdfilter cc12 final">Angus</option>
                    <option id="1a6" class="rdfilter cc12 final">Caracu</option>
                    <option id="1a7" class="rdfilter cc12 final">Charolês</option>
                    <option id="1a8" class="rdfilter cc12 final">Guzerá</option>
                    <option id="1a9" class="rdfilter cc12 final">Outras Raças Bovinas</option>

                    <option id="1b0" class="rdfilter cc13 final">Leite De Vaca</option>
                    <option id="1b1" class="rdfilter cc13 final">Leite De Búfala</option>
                    <option id="1b2" class="rdfilter cc13 final">Leite De Cabra</option>
                    <option id="1b3" class="rdfilter cc13 final">Leite De Outros Animais</option>

                    <option id="1c0" class="rdfilter cc14 final">Canastrinho</option>
                    <option id="1c1" class="rdfilter cc14 final">Canastra</option>
                    <option id="1c2" class="rdfilter cc14 final">Canastrão</option>
                    <option id="1c3" class="rdfilter cc14 final">Piau</option>
                    <option id="1c4" class="rdfilter cc14 final">Nilo Canastra</option>
                    <option id="1c5" class="rdfilter cc14 final">Outras Raças Suínas</option>

                    <option id="1d0" class="rdfilter cc15 final">Frangos</option>
                    <option id="1d1" class="rdfilter cc15 final">Outras Aves</option>
                        
                    <option id="1e0" class="rdfilter cc151 final">Ovos De Galinha</option>
                    <option id="1e1" class="rdfilter cc151 final">Ovos De Outros Animais</option>

                    <option id="1f0" class="rdfilter cc16 final">Asininos</option>
                    <option id="1f1" class="rdfilter cc16 final">Bubalinos</option>
                    <option id="1f2" class="rdfilter cc16 final">Cães</option>
                    <option id="1f3" class="rdfilter cc16 final">Caprinos</option>
                    <option id="1f4" class="rdfilter cc16 final">Coelhos</option>
                    <option id="1f5" class="rdfilter cc16 final">Cavalos</option>
                    <option id="1f6" class="rdfilter cc16 final">Muares</option>
                    <option id="1f7" class="rdfilter cc16 final">Ovinos</option>
                    <option id="1f8" class="rdfilter cc16 final">Outros</option>

                    <option id="1g0" class="rdfilter cc17 final">Produtos De Apicultura</option>
                    <option id="1g1" class="rdfilter cc17 final">Casulos Do Bicho-Da-Seda</option>
                    <option id="1g2" class="rdfilter cc17 final">Produtos De Ranicultura</option>
                    <option id="1g3" class="rdfilter cc17 final">Demais Produtos De Origem Animal</option>

                    <option id="2a0" class="rdfilter cc18 final">Eucalipto</option>
                    <option id="2a1" class="rdfilter cc18 final">Acácia-Negra</option>
                    <option id="2a2" class="rdfilter cc18 final">Mogno</option>
                    <option id="2a3" class="rdfilter cc18 final">Pinheiro Americano</option>
                    <option id="2a4" class="rdfilter cc18 final">Pinheiro Brasileiro (Araucária)</option>
                    <option id="2a5" class="rdfilter cc18 final">Cascas</option>
                    <option id="2a6" class="rdfilter cc18 final">Outros Produtos Da Silvicultura</option>

                    <option id="2b0" class="rdfilter cc19 final">Açaí(Fruto)</option>
                    <option id="2b1" class="rdfilter cc19 final">Babaçu(Amêndoa)</option>
                    <option id="2b2" class="rdfilter cc19 final">Borracha (Látex Coagulado)</option>
                    <option id="2b3" class="rdfilter cc19 final">Carnaúba (Cera)</option>
                    <option id="2b4" class="rdfilter cc19 final">Castanha-Do-Pará</option>
                    <option id="2b5" class="rdfilter cc19 final">Cupuaçu</option>
                    <option id="2b6" class="rdfilter cc19 final">Palmito</option>
                    <option id="2b7" class="rdfilter cc19 final">Pinhão</option>
                    <option id="2b8" class="rdfilter cc19 final">Carnaúba (Pó De Palha)</option>
                    <option id="2b9" class="rdfilter cc19 final">Demais Produtos da Extração Vegetal</option>

                    <option id="3a0" class="rdfilter cc20 final">Salmão</option>
                    <option id="3a1" class="rdfilter cc20 final">Sardinha</option>
                    <option id="3a2" class="rdfilter cc20 final">Cação</option>
                    <option id="3a3" class="rdfilter cc20 final">Corvina</option>
                    <option id="3a4" class="rdfilter cc20 final">Saint Peter</option>
                    <option id="3a5" class="rdfilter cc20 final">Tainha</option>
                    <option id="3a6" class="rdfilter cc20 final">Atum</option>
                    <option id="3a7" class="rdfilter cc20 final">Pescada Branca</option>
                    <option id="3a8" class="rdfilter cc20 final">Pintado</option>
                    <option id="3a9" class="rdfilter cc20 final">Anchova</option>
                    <option id="3a10" class="rdfilter cc20 final">Linguado</option>
                    <option id="3a11" class="rdfilter cc20 final">Tilápia</option>
                    <option id="3a12" class="rdfilter cc20 final">Outros Peixes</option>

                    <option id="3b0" class="rdfilter cc21 final">Lula</option>
                    <option id="3b1" class="rdfilter cc21 final">Polvo</option>
                    <option id="3b2" class="rdfilter cc21 final">Demais Moluscos</option>

                    <option id="3c0" class="rdfilter cc22 final">Mexilhão</option>
                    <option id="3c1" class="rdfilter cc22 final">Ostra</option>
                    <option id="3c2" class="rdfilter cc22 final">Demais Crustáceos</option>

                    <option id="3d0" class="rdfilter cc23 final">Camarão Cinza</option>
                    <option id="3d1" class="rdfilter cc23 final">Camarão Rosa</option>
                    <option id="3d2" class="rdfilter cc23 final">Outros</option>

                    <option id="5a0" class="rdfilter cc24 final">Macronutrientes </option>
                    <option id="5a1" class="rdfilter cc24 final">Micronutrientes</option>
                    <option id="5a2" class="rdfilter cc24 final">Corretivos</option>
                    <option id="5a3" class="rdfilter cc24 final">Adubos Orgânicos</option>
                    <option id="5a4" class="rdfilter cc24 final">Demais Adubos Ou Fertilizantes</option>

                    <option id="5b0" class="rdfilter cc25 final">Herbicidas</option>
                    <option id="5b1" class="rdfilter cc25 final">Fungicidas</option>
                    <option id="5b2" class="rdfilter cc25 final">Inseticidas</option>
                    <option id="5b3" class="rdfilter cc25 final">Nematócitos</option>

                    <option id="5c0" class="rdfilter cc26 final">Parasitóides</option>
                    <option id="5c1" class="rdfilter cc26 final">Predadores</option>
                    <option id="5c2" class="rdfilter cc26 final">Patógenos</option>
                        
                    <option id="6a0" class="rdfilter cc27 final">Tratores</option>
                    <option id="6a1" class="rdfilter cc27 final">Colheitadeiras</option>
                    <option id="6a2" class="rdfilter cc27 final">Pulverizadores</option>
                    <option id="6a3" class="rdfilter cc27 final">Máquinas Multi-Função</option>
                    <option id="6a4" class="rdfilter cc27 final">Outros</option>

                    <option id="6b0" class="rdfilter cc28 final">Caminhonetes</option>
                    <option id="6b1" class="rdfilter cc28 final">Caminhões</option>
                    <option id="6b2" class="rdfilter cc28 final">Carretas E Trailers</option>
                    <option id="6b3" class="rdfilter cc28 final">Treminhões</option>
                    <option id="6b4" class="rdfilter cc28 final">Demais Veículos</option>

                    <option id="6c0" class="rdfilter cc29 final">Arados</option>
                    <option id="6c1" class="rdfilter cc29 final">Colheita</option>
                    <option id="6c2" class="rdfilter cc29 final">Cultivadores</option>
                    <option id="6c3" class="rdfilter cc29 final">Grades </option>
                    <option id="6c4" class="rdfilter cc29 final">Plainas</option>
                    <option id="6c5" class="rdfilter cc29 final">Roçadeiras</option>
                    <option id="6c6" class="rdfilter cc29 final">Semeadoras</option>
                    <option id="6c7" class="rdfilter cc29 final">Diversos</option>

                    <option id="6d0" class="rdfilter cc30 final">Peças Para Máquinas Agrícolas</option>
                    <option id="6d1" class="rdfilter cc30 final">Peças Para Máquias De Transporte</option>
                    <option id="6d2" class="rdfilter cc30 final">Peças Para Silos</option>
                    <option id="6d3" class="rdfilter cc30 final">Demais Peças</option>

                    <option id="6e0" class="rdfilter cc31 final">Baias, Bretes, Palanques E Cercas</option>
                    <option id="6e1" class="rdfilter cc31 final">Barracões E Construções Rurais</option>
                    <option id="6e3" class="rdfilter cc31 final">Demais Instalações Rurais</option>

                    <option id="6f0" class="rdfilter cc32 final">Sistemas De Irrigação</option>
                    <option id="6f1" class="rdfilter cc32 final">Instrumentos Para Agricultura De Precisão</option>
                    <option id="6f2" class="rdfilter cc32 final">Equipamentos Meteorológicos</option>

                    <option id="6g0" class="rdfilter cc33 final">Ferramentas Manuais</option>
                    <option id="6g1" class="rdfilter cc33 final">Bombas Costais</option>
                    <option id="6g2" class="rdfilter cc33 final">Equipamentos De Proteção Individual (Epis)</option>

                    <option id="7a0" class="rdfilter cc34 final">Rações Para Bovinos</option>
                    <option id="7a1" class="rdfilter cc34 final">Sais Minerais</option>
                    <option id="7a2" class="rdfilter cc34 final">Silagens E Forragens</option>
                    <option id="7a3" class="rdfilter cc34 final">Rações Para Demais Animais</option>
                    <option id="7a4" class="rdfilter cc34 final">Suplementos Alimentares</option>
                    <option id="7a5" class="rdfilter cc34 final">Demais Produtos Alimentares Para Animais</option>

                    <option id="7b0" class="rdfilter cc35 final">Medicamentos Animais</option>
                    <option id="7b1" class="rdfilter cc35 final">Outros Produtos Farmacêuticos</option>
                        
                    <option id="8a0" class="rdfilter cc36 final">Açúcar Branco Refinado</option>
                    <option id="8a1" class="rdfilter cc36 final">Açúcar Branco Cristal</option>
                    <option id="8a2" class="rdfilter cc36 final">Açúcar Mascavo</option>
                    <option id="8a3" class="rdfilter cc36 final">Demais Açúcares</option>
                    <option id="8a4" class="rdfilter cc36 final">Doces E Conservas Açucaradas</option>
                    <option id="8a5" class="rdfilter cc36 final">Demais Derivados Do Açúcar</option>

                    <option id="8b0" class="rdfilter cc37 final">Arroz Em Grão</option>
                    <option id="8b1" class="rdfilter cc37 final">Demais Produtos Derivados Do Arroz</option>
                        
                    <option id="8c0" class="rdfilter cc38 final">Café Em Grão Torrado</option>
                    <option id="8c1" class="rdfilter cc38 final">Café Em Grão Moído</option>
                    <option id="8c2" class="rdfilter cc38 final">Demais Beneficiamentos Cafeeiros</option>
                        
                    <option id="8d0" class="rdfilter cc39 final">Produtos Derivados Do Trigo</option>
                    <option id="8d1" class="rdfilter cc39 final">Produtos Derivados Da Mandioca</option>
                    <option id="8d2" class="rdfilter cc39 final">Produtos Derivados Do Milho</option>
                        
                    <option id="8e0" class="rdfilter cc40 final">Óleos e Gorduras De Origem Animal</option>
                    <option id="8e1" class="rdfilter cc40 final">Óleos e Gorduras Origem Vegetal</option>
                        
                    <option id="9a0" class="rdfilter cc41 final">Cortes Tradicionais</option>
                    <option id="9a1" class="rdfilter cc41 final">Cortes Premium</option>
                        
                    <option id="9f0" class="rdfilter cc42 final">De Vaca</option>
                    <option id="9f1" class="rdfilter cc42 final">De Outros Animais</option>
                    <option id="9f2" class="rdfilter cc42 final">Leites Especiais (Sem Lactose, Etc)</option>
                        
                    <option id="9g0" class="rdfilter cc43 final">Queijo</option>
                    <option id="9g1" class="rdfilter cc43 final">Requeijão</option>
                    <option id="9g2" class="rdfilter cc43 final">Manteiga</option>
                    <option id="9g3" class="rdfilter cc43 final">Iogurtes</option>
                    <option id="9g4" class="rdfilter cc43 final">Creme De Leite E Leite Condensado</option>
                    <option id="9g5" class="rdfilter cc43 final">Leite Em Pó</option>
                    <option id="9g6" class="rdfilter cc43 final">Demais Produtos Do Laticínio</option>
                        
                    <option id="11a0" class="rdfilter cc44 final">Para Vestuário</option>
                    <option id="11a1" class="rdfilter cc44 final">Artigos De Selaria</option>
                    <option id="11a2" class="rdfilter cc44 final">Selas E Arreios</option>
                    <option id="11a3" class="rdfilter cc44 final">Para Demais Funções</option>

                    <option id="11b0" class="rdfilter cc45 final">Couro para Calçados</option>
                    <option id="11b1" class="rdfilter cc45 final">Solas E Saltos</option>
                    <option id="11b2" class="rdfilter cc45 final">Gáspeas</option>
                    <option id="11b3" class="rdfilter cc45 final">Biqueiras</option>
                    <option id="11b4" class="rdfilter cc45 final">Demais Partes Dos Calçados</option>
                    <option id="11b5" class="rdfilter cc45 final">Calçados Acabados</option>

                    <option id="20d0" class="rdfilter cc46 final">Seguro De Safra</option>
                    <option id="20d1" class="rdfilter cc46 final">Seguro De Carga</option>
                    <option id="20d2" class="rdfilter cc46 final">Seguro De Propriedade</option>
                    <option id="20d3" class="rdfilter cc46 final">Resseguros</option>
                    <option id="20d4" class="rdfilter cc46 final">Demais Seguros</option>

                    <option id="23a0" class="rdfilter cc47 final">Amostragem De Solo</option>
                    <option id="23a1" class="rdfilter cc47 final">Testes</option>
                    <option id="23a2" class="rdfilter cc47 final">Análises E Laudos Técnicos</option>


                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnSave6" class="btn btn-primary" data-dismiss="modal">Finalizar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
    </div>
            
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <script type="text/javascript">
        
        
        $('#pegaCat').click(function(){
			$('#compraModal1').modal('show');
			$('#compraModal1').find('.modal-title').text('Categorias');
		});
 $('#pegaCat2').click(function(){
			$('#compraModal2').modal('show');
			$('#compraModal2').find('.modal-title').text('Categorias');
		});
                 $('#pegaCat3').click(function(){
			$('#compraModal3').modal('show');
			$('#compraModal3').find('.modal-title').text('Categorias');
		});
                
                     $('#pegaCat4').click(function(){
			$('#vendaModal1').modal('show');
			$('#vendaModal1').find('.modal-title').text('Categorias');
		});
 $('#pegaCat5').click(function(){
			$('#vendaModal2').modal('show');
			$('#vendaModal2').find('.modal-title').text('Categorias');
		});
                 $('#pegaCat6').click(function(){
			$('#vendaModal3').modal('show');
			$('#vendaModal3').find('.modal-title').text('Categorias');
		});
           

 
    $(function() {
  $('#filter1').on('change', function() {
    var $target = $('.c' + $(this).val());
    if ($target.is(":hidden")) {
      $('.ndfilter').hide();
        $('#filter2').show();
      $target.show();
        $('#filter3').hide();
    }})});

$(function() {
  $('#filter2').on('change', function() {
    var $target = $('.cc' + $(this).val());
    if ($target.is(":hidden")) {
      $('.rdfilter').hide();
        $('#filter3').show();
      $target.show();} else {
          $('#filter3').hide();
      }
  });});
  
      $(function() {
  $('#filter12').on('change', function() {
    var $target = $('.c' + $(this).val());
    if ($target.is(":hidden")) {
      $('.ndfilter').hide();
        $('#filter22').show();
      $target.show();
        $('#filter32').hide();
    }})});

$(function() {
  $('#filter22').on('change', function() {
    var $target = $('.cc' + $(this).val());
    if ($target.is(":hidden")) {
      $('.rdfilter').hide();
        $('#filter32').show();
      $target.show();} else {
          $('#filter32').hide();
      }
  });});
  
      $(function() {
  $('#filter13').on('change', function() {
    var $target = $('.c' + $(this).val());
    if ($target.is(":hidden")) {
      $('.ndfilter').hide();
        $('#filter23').show();
      $target.show();
        $('#filter33').hide();
    }})});

$(function() {
  $('#filter23').on('change', function() {
    var $target = $('.cc' + $(this).val());
    if ($target.is(":hidden")) {
      $('.rdfilter').hide();
        $('#filter33').show();
      $target.show();} else {
          $('#filter33').hide();
      }
  });});
  
  $(function() {
  $('#filter14').on('change', function() {
    var $target = $('.c' + $(this).val());
    if ($target.is(":hidden")) {
      $('.ndfilter').hide();
        $('#filter24').show();
      $target.show();
        $('#filter34').hide();
    }})});

$(function() {
  $('#filter24').on('change', function() {
    var $target = $('.cc' + $(this).val());
    if ($target.is(":hidden")) {
      $('.rdfilter').hide();
        $('#filter34').show();
      $target.show();} else {
          $('#filter34').hide();
      }
  });});
  
    $(function() {
  $('#filter15').on('change', function() {
    var $target = $('.c' + $(this).val());
    if ($target.is(":hidden")) {
      $('.ndfilter').hide();
        $('#filter25').show();
      $target.show();
        $('#filter35').hide();
    }})});

$(function() {
  $('#filter25').on('change', function() {
    var $target = $('.cc' + $(this).val());
    if ($target.is(":hidden")) {
      $('.rdfilter').hide();
        $('#filter35').show();
      $target.show();} else {
          $('#filter35').hide();
      }
  });});
    $(function() {
  $('#filter16').on('change', function() {
    var $target = $('.c' + $(this).val());
    if ($target.is(":hidden")) {
      $('.ndfilter').hide();
        $('#filter26').show();
      $target.show();
        $('#filter36').hide();
    }})});

$(function() {
  $('#filter26').on('change', function() {
    var $target = $('.cc' + $(this).val());
    if ($target.is(":hidden")) {
      $('.rdfilter').hide();
        $('#filter36').show();
      $target.show();} else {
          $('#filter36').hide();
      }
  });});
  
  $('#btnSave1').click(function(){
			$('#pegaCat').val($('#filter1').find('option:selected').text());
			$('#pegaCatPro1').val($('#filter2').find('option:selected').text());
                       
		});
                
                  $('#btnSave2').click(function(){
			$('#pegaCat2').val($('#filter12').find('option:selected').text());
			$('#pegaCatPro2').val($('#filter22').find('option:selected').text());
                       
		});
                $('#btnSave3').click(function(){
			$('#pegaCat3').val($('#filter13').find('option:selected').text());
			$('#pegaCatPro3').val($('#filter23').find('option:selected').text());
                       
		});
                  $('#btnSave4').click(function(){
			$('#pegaCat4').val($('#filter14').find('option:selected').text());
			$('#pegaCatPro4').val($('#filter24').find('option:selected').text());
                       
		});
                     $('#btnSave5').click(function(){
			$('#pegaCat5').val($('#filter15').find('option:selected').text());
			$('#pegaCatPro5').val($('#filter25').find('option:selected').text());
                       
		});
                     $('#btnSave6').click(function(){
			$('#pegaCat6').val($('#filter16').find('option:selected').text());
			$('#pegaCatPro6').val($('#filter26').find('option:selected').text());
                       
		});


    
    </script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="<?=base_url()?>assets/js/registry.js"></script>
    <!--<script src="js/validation-reg.js"></script>-->
    <script src="<?=base_url()?>assets/js/messages_pt_BR.js"></script>
    
 
    
    
      

</body>
</html>