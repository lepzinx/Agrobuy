<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orcamentos extends CI_Controller {

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
            $this->load->model('orcamento_model');
                $this->load->model('usuarios_model');
            
                $this->load->library('pagination');
            
            $config = array(
            "base_url" => base_url()."index.php/orcamentos/p",
            "per_page" => 3,
            "num_links" => 6,
            "uri_segment" => 3,
            "total_rows" => $this->orcamento_model->pegarQtdOrcamentos(),   
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => TRUE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próxima",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
              $this->pagination->initialize($config);
        
        $dados["pagination"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) :0;
        
        $dados["orcamentos"] = $this->orcamento_model->pegarOrcamentos($config['per_page'],$offset);
        
		$this->load->view('orcamentos/inicio', $dados);
	}   
        
        public function novoOrcamento(){
             $this->load->model('usuarios_model');
            if($this->usuarios_model->checarSessao()){
                $dados['logado'] = true;
		$this->load->view('orcamentos/novo_orcamento', $dados);
           }else {
               $dados['logado'] = false;
               $this->load->view('orcamentos/novo_orcamento', $dados);
           }
            
        }
        public function visualizarOrcamento($indice = null){
                   $this->load->model('orcamento_model');
        $this->load->model('usuarios_model');
        if ($indice == null) {
            redirect(base_url());
        } else if($this->orcamento_model->contarOrcamentoId($indice) == 1){
            $dados['orcamento'] = $this->orcamento_model->pegarOrcamentoId($indice);
            
            $this->load->view('orcamentos/visualizar_orcamento', $dados);
        }else{
             $dados['heading'] = "O produto não existe";
             $dados['message'] = "Impossível visualizar este produto pois ele não se encontra na nossa base de dados.";
             $this->load->view('errors/html/error_general', $dados);
        }
            
        }

        public function fazerCadastroOrcamento(){
            $this->load->model('orcamento_model');
            if($this->orcamento_model->cadastrarOrcamento()){
               redirect(base_url()."index.php/usuarios");  
            }
        }
   
       public function editarorcamento($indice = null)
	  {
            $this->load->model('usuarios_model');
            $this->load->model('orcamento_model');
                 if ($this->usuarios_model->checarSessao()) {
            if ($indice == null) {
                redirect(base_url());
            } else if ($this->orcamento_model->contarOrcamentoId($indice) == 1) {
                $dados['logado'] = true;
                $dados['orcamento'] = $this->orcamento_model->pegarOrcamentoId($indice);

                $this->load->view('orcamentos/editar_orcamento', $dados);
            } else {
                $dados['heading'] = "O produto não existe";
                $dados['message'] = "Impossível editar este produto pois ele não se encontra na nossa base de dados.";
                $this->load->view('errors/html/error_general', $dados);
            }
        } else {
            redirect(base_url() . "index.php/usuarios");
        }
    }
    
    public function alterarorcamento($id){
        $this->load->model('orcamento_model');
        $this->load->model('usuarios_model');
         if ($this->usuarios_model->checarSessao()) {
            if($this->orcamento_model->editarorcamento($id)){
               redirect(base_url()."index.php/orcamentos/visualizarorcamento/".$id);  
            }
         }else{
             redirect(base_url() . "index.php/usuarios");
         }
        
    }
    
    public function pesquisa(){
        
        $this->load->model('orcamento_model');
            $this->load->model('usuarios_model');
        
                $this->load->library('pagination');
            
            $config = array(
            "base_url" => base_url()."index.php/orcamentos/pesquisa/p",
            "per_page" => 9,
            "num_links" => 6,
            "uri_segment" => 4,
            "total_rows" => $this->orcamento_model->pegarQtdPesquisa(),   
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => TRUE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próxima",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
              $this->pagination->initialize($config);
        
        $dados["pagination"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
        
        $dados["orcamentos"] = $this->orcamento_model->pegarOrcamentosPesquisa($config['per_page'],$offset);
        
		$this->load->view('orcamentos/inicio', $dados);
        
    }
    
        
        
}
