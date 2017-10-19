<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
           $this->load->model("usuarios_model");
          
           if(!$this->usuarios_model->checarSessao()){
		$this->load->view('usuario/login');
           }else{
               redirect(base_url());  
           }
	}
        
        public function cadastro()
	{
           $this->load->model("usuarios_model");
           if(!$this->usuarios_model->checarSessao()){
		$this->load->view('usuario/registrar');
           }
	}
        public function sair(){
         $this->session->sess_destroy();
                 redirect(base_url()."index.php/usuarios");  
            
        }
        
        
        public function fazerCadastroInfo(){
            $this->load->model("usuarios_model");
            
               $result = $this->usuarios_model->cadastrarAccInfo();;
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);

        }
        	
            public function fazerCadastroBus(){
            $this->load->model("usuarios_model");
            
               $result = $this->usuarios_model->cadastrarBusInfo($this->session->userdata['IDCADASTRO']);;
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);

        }
               public function cadastroFinal(){
            $this->load->model("usuarios_model");
            
               if($this->usuarios_model->cadastrarFinal($this->session->userdata['IDCADASTRO']) == true){
                   redirect("index.php/usuarios"); 
               }
        }
        
        public function fazerLogin(){
           $this->load->model("usuarios_model");
           $email = $this->input->post("email");
           $senha = $this->input->post("senha");
           
           if(!$this->usuarios_model->checarSessao()){
                if($this->usuarios_model->entrar($email, $senha)){
                    redirect(base_url());
                }else{
                    redirect(base_url()."index.php/usuarios");  
                }
           }
        }
        public function mensagens($indice = null){
            $this->load->model("usuarios_model");
          $dados['lista_usuarios'] = $this->usuarios_model->listarConversas();
          $dados['conversa'] = $this->usuarios_model->verMensagens($indice);
            $dados['indice'] = $indice;
            $primeiraConversa = $this->usuarios_model->pegarPrimeiraConversa();
            if($indice == null){
              redirect(base_url()."index.php/usuarios/mensagens/".$primeiraConversa);    
            }
          
          
           if(!$this->usuarios_model->checarSessao()){
		$this->load->view('usuarios/login');
           }else{
               $this->load->view('includes/messages', $dados);
           }
        }
        
        public function atualizarMensagens($indice = null){
            $this->load->model('usuarios_model');
            $conversa = $this->usuarios_model->verMensagens($indice);
                     if($conversa == null) { 
                     echo '<div class="col-md-10 col-xs-10">
                        Não existem mensagens entre você e este usuario!
                     </div>';
                     }else{
                     foreach($conversa as $con){ 
                         if($con->mensagem_texto == ''){
                             $exibe = '<img lass="img-responsive" height="250" width="250" src="'.base_url().$con->mensagem_arquivo.'"></img>';
                         }else{
                             $exibe = $con->mensagem_texto;
                         }
                echo '<div class="panel-body msg_container_base">';
                     if($con->mensagem_de == $this->session->userdata['usuario_id']){
              echo '<div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            
                            <div class="messages msg_sent" data-toggle="tooltip" title="12:37">
                                <p>'.$exibe.'</p>
                                
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="'.base_url().$this->usuarios_model->fotoPerfil($this->session->userdata['usuario_id']).'" class=" img-responsive ">
                        </div>
                    </div>';
                     }else{ 
                    echo '<div class="row msg_container base_receive" data-toggle="tooltip" title="12:38">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img class="img-responsive" src="'.base_url().$this->usuarios_model->fotoPerfil($indice).'" width="50px" style="border-radius: 100px;">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>'.$exibe.'</p>
                                
                            </div>
                        </div>
                   
                    </div>';
                     } 
                    
                    
                    
               echo '</div>';
                     } 
                     } 
          }
        
        public function mandarmensagem($indice = null){
            
                 $this->load->model("usuarios_model");
                 $texto = $this->input->post('texto');
           if(!$this->usuarios_model->checarSessao()){
		$this->load->view('usuario/login');
           }else{
                     
               $result =  $this->usuarios_model->enviarMensagem($indice, $texto);  
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
           }
            
            
        }
       public function mandarArquivo($indice = null){
            
                 $this->load->model("usuarios_model");

           if(!$this->usuarios_model->checarSessao()){
		       $this->load->view('usuario/login');
           }else{
                 $this->usuarios_model->enviarArquivo($indice);
                  redirect(base_url()."index.php/usuarios/mensagens/".$indice); 
           }
 
        }
    
    public function confirmarCadastro($indice = null){
        if(!$indice == null){
            if($this->usuarios_model->confirmarEmail){
                $dados['resultado'] = "Email confirmado com sucesso!";
            }else{
                 $dados['resultado'] = "Algo deu errado, entre em contato com o administrador!";
            }
            $this->load->view('usuarios/confirma_email', $dados);
        }else{
            redirect(base_url()."index.php/usuarios/"); 
        }
        
    }

        
}
