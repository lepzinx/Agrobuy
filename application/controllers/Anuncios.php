<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncios extends CI_Controller {

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
            $this->load->model('anuncios_model');
            $this->load->model('usuarios_model');
            $dados['anuncios'] = $this->anuncios_model->pegarAnuncios(6);
            $dados['animal'] =  $this->anuncios_model->pegarAnunciosCategoria("Produção Animal", 4);
            $dados['vegetal'] =  $this->anuncios_model->pegarAnunciosCategoria("Produção Vegetal", 4);
            $dados['florestal'] =  $this->anuncios_model->pegarAnunciosCategoria("Produção Florestal", 4);
            $dados['pesca'] =  $this->anuncios_model->pegarAnunciosCategoria("Pesca e Aquicultura", 4);
            $dados['agropecuario'] =  $this->anuncios_model->pegarAnunciosCategoria("Sementes e Mudas", 4);
		   $this->load->view('index', $dados);
	}


    public function pesquisa(){
        $this->load->model('anuncios_model');
            $this->load->model('usuarios_model');

                $this->load->library('pagination');

            $config = array(
            "base_url" => base_url()."index.php/anuncios/pesquisa/p",
            "per_page" => 9,
            "num_links" => 6,
            "uri_segment" => 4,
            "total_rows" => $this->anuncios_model->pegarQtdPesquisa(),
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

        $dados["anuncios"] = $this->anuncios_model->pegarAnunciosPesquisa($config['per_page'],$offset);

		$this->load->view('anuncios/anuncios_pesquisa', $dados);
    }


        public function novoAnuncio()
	{
            $this->load->model('usuarios_model');
                 if($this->usuarios_model->checarSessao()){
		$this->load->view('anuncios/novo_anuncio');
           }else{
               redirect(base_url()."index.php/usuarios");
           }

	}




          public function fazerCadastroAnuncio(){

            $this->load->model("anuncios_model");

               $result = $this->anuncios_model->cadastroAnuncioCate();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);

        }
          public function fazerCadastroAnuncioDados(){

            $this->load->model("anuncios_model");

               $result = $this->anuncios_model->cadastroAnuncioDados();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);

        }
           public function finalizarCadastroAnuncios(){

            $this->load->model("anuncios_model");

               $result = true;
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){

			$msg['success'] = true;
                        $this->session->unset_userdata('cadastroProduto');
		}
                echo json_encode($msg);
        }

        public function visualizarproduto($indice = null){
            $this->load->model('anuncios_model');
        $this->load->model('usuarios_model');
        if ($indice == null) {
            redirect(base_url());
        } else if($this->anuncios_model->contarAnuncioId($indice) == 1){
            $dados['anuncio'] = $this->anuncios_model->pegarAnuncioId($indice);

            $this->load->view('anuncios/visualizar_produto', $dados);
        }else{
             $dados['heading'] = "O produto não existe";
             $dados['message'] = "Impossível visualizar este produto pois ele não se encontra na nossa base de dados.";
             $this->load->view('errors/html/error_general', $dados);
        }
    }

       public function editarAnuncio($indice = null)
	  {
            $this->load->model('usuarios_model');
            $this->load->model('anuncios_model');
                 if ($this->usuarios_model->checarSessao()) {
            if ($indice == null) {
                redirect(base_url());
            } else if ($this->anuncios_model->contarAnuncioId($indice) == 1) {
                $dados['anuncio'] = $this->anuncios_model->pegarAnuncioId($indice);
                $dados['usuario'] = $this->anuncios_model->pegarUsuarioAnuncio($indice);

                $this->load->view('anuncios/editar_anuncio', $dados);
            } else {
                $dados['heading'] = "O produto não existe";
                $dados['message'] = "Impossível editar este produto pois ele não se encontra na nossa base de dados.";
                $this->load->view('errors/html/error_general', $dados);
            }
        } else {
            redirect(base_url() . "index.php/usuarios");
        }
    }

    public function alterarAnuncio($id){
        $this->load->model('anuncios_model');
        $this->load->model('usuarios_model');
         if ($this->usuarios_model->checarSessao()) {
            if($this->anuncios_model->editarAnuncio($id)){
               redirect(base_url()."index.php/anuncios/visualizarproduto/".$id);
            }
         }else{
             redirect(base_url() . "index.php/usuarios");
         }

    }
        public function deletarAnuncio($id){
         $this->load->model('anuncios_model');
        $this->load->model('usuarios_model');
         if ($this->usuarios_model->checarSessao()) {
            if($this->anuncios_model->deletarAnuncio($id)){
               redirect(base_url()."index.php/dashboard/venda");
            }
         }else{
             redirect(base_url() . "index.php/usuarios");
         }

    }
    public function categoria1($indice = null){
          $this->load->model('anuncios_model');
            $this->load->model('usuarios_model');

                $this->load->library('pagination');
            if(!$indice == null){


            $config = array(
            "base_url" => base_url()."index.php/anuncios/pesquisa/p",
            "per_page" => 9,
            "num_links" => 6,
            "uri_segment" => 4,
            "total_rows" => $this->anuncios_model->pegarQtdProdutosCategoria1($indice),
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

        $dados["anuncios"] = $this->anuncios_model->pegarProdutosCategoria1($config['per_page'],$offset,$indice);

		$this->load->view('anuncios/anuncios_pesquisa', $dados);
    }else{
        redirect(base_url() . "index.php/anuncios");
    }

    }
    public function pesquisaAv(){
       $this->load->model('anuncios_model');
            $this->load->model('usuarios_model');

                $this->load->library('pagination');

            $config = array(
            "base_url" => base_url()."index.php/anuncios/pesquisa/p",
            "per_page" => 9,
            "num_links" => 6,
            "uri_segment" => 4,
            "total_rows" => $this->anuncios_model->pegarQtdAvancada(),
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

        $dados["anuncios"] = $this->anuncios_model->pesquisaAvancada($config['per_page'],$offset);

		$this->load->view('anuncios/anuncios_pesquisa', $dados);
    }

    public function iniciarNegociacao($indice){
         $this->load->model('negociacao_model');
        $this->load->model('usuarios_model');
         if ($this->usuarios_model->checarSessao()) {
            if($this->negociacao_model->iniciarNegociacao($indice)){
                redirect(base_url()."index.php/dashboard");
            }
         }else{
             redirect(base_url() . "index.php/usuarios");
         }
    }
 


}
