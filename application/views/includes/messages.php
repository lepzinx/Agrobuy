<!DOCTYPE html>
<html>
    <head>
    <?php $this->load->view("includes/_head.php"); ?>
    <link href="<?=base_url()?>assets/css/messages.css" rel="stylesheet">
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
								<li><a href=""><img src="<?=base_url()?><?=$this->usuarios_model->fotoPerfil($this->session->userdata['usuario_id'])?>" width="25px" style="border-radius: 100px;">Meu Painel de Negócios</a></li>
                                <li><a href="checkout.html"><i class="fa fa-comment" aria-hidden="true"></i> Mensagens</a></li>
								<li><a href=""><i class="fa fa-question-circle"></i> Ajuda</a></li>
							</ul>
						</div>
					</div>
				</div>
            </div></div>
	
	</header><!--/header-->

        <!-- Content -->
        <div class="container-fluid">
          <div class="row">
               <div class="col-xs-3 divider" id="contactlist"> <!-- SIDEBAR DOS CONTATOS-->
                 <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Procurar Usuário..." data-toggle="tooltip" title="Digite o nome do usuário">
                    <span class="input-group-addon">
                        <button type="submit" data-toggle="tooltip" title="Clique para procurar">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
                 <div class="list-group">
                    <?php foreach($lista_usuarios as $lista){
                        
                        if($lista->usuario1_id != $this->session->userdata['usuario_id']){
                            $idUsuario = $lista->usuario1_id;
                        }else{
                            $idUsuario = $lista->usuario2_id;
                        }
                    
?>
                      <a href="<?=base_url()?>index.php/usuarios/mensagens/<?=$idUsuario?>" class="list-group-item"><img src="<?=base_url()?><?=$this->usuarios_model->fotoPerfil($idUsuario)?>" width="50px" style="border-radius: 100px;"><?=$this->usuarios_model->nomeEmpresa($idUsuario)?></a>
                    <?php } ?>          
                    
                      </div>
                       
               </div><!-- /SIDEBAR DOS CONTATOS-->
               <div class="col-xs-6 divider" id="messageboard">
        	<div class="panel panel-default" id='mensagens'>
              
    		</div>
            <div class="panel-footer">
                <form  id='enviar' method='post' action='<?= base_url()?>index.php/usuarios/mandarmensagem/<?=$indice?>' >
                    <div class="input-group">
                        <input id="texto" name='texto' type="text" class="form-control input-sm chat_input" placeholder="Escreva sua mensagem aqui..." />
                        <span class="input-group-btn">
                        <button type='button' class="btn btn-primary btn-sm" id="enviarMensagem" data-toggle="tooltip" title="Clique ou aperte Enter para Enviar a Mensagem">Enviar</button>
                        </span>
                    </div>
                </form>
                </div>
               </div>
               <div class="col-xs-3 divider userspecs">
               <ul class="list-group">
                  <li class="list-group-item"><img src="<?=base_url().$this->usuarios_model->fotoPerfil($indice)?>" width="50px" style="border-radius: 100px;"> <?=$this->usuarios_model->nomeEmpresa($indice)?></li>
                 
                  <!--<li class="list-group-item"><div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Procurar nesta Conversa..." data-toggle="tooltip" title="Digite palavras, frases">
                    <span class="input-group-addon">
                        <button type="submit" class="searchbutton" data-toggle="tooltip" title="Clique para procurar">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div></li>-->
                  <li class="list-group-item"> <small>Imagens Compartilhadas</small></li>
                   <?php 
                   if($conversa == null){
                       echo '<li class="list-group-item"> <small>Não compartilharam imagens ainda!</small></li>';
                   }else{
                       foreach($conversa as $con){
                           if($con->mensagem_texto == ''){
                               echo '<img style="margin: 5px" class="img-responsive" height="150" width="150" src="'.base_url().$con->mensagem_arquivo.'"></img>';
                           }
                       }
                   
                    }?>
                </ul>
                   <form style='margin: 5px' enctype='multipart/form-data' class='form-vertical' method='post' action='<?=base_url()?>index.php/usuarios/mandararquivo/<?=$indice?>'>
                   <input  name='imagem' type="file"/>
                    <input  type='submit' class='btn btn-primary' value='enviar'>
                       </form>
                 </div>
          </div>
            
        </div>
        
        <!-- //Content -->
                <form id='url' action='<?=base_url()?>index.php/usuarios/atualizarmensagens/<?=$indice?>'></form>

        
        <?php $this->load->view("includes/_load-scripts"); ?>
        <script src='<?=base_url()?>assets/js/chat.js'></script>

    </body>
</html>
