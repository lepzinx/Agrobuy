<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Disputas short summary.
 *
 * Disputas description.
 *
 * @version 1.0
 * @author Leonardo Torres
 */

class Dashboard extends CI_Controller {


	public function index()
	{
         $this->load->model('usuarios_model');
         $this->load->model('negociacao_model');
     if($this->usuarios_model->checarSessao()){
         $dados['qtd1'] = $this->negociacao_model->qtdNegociacoesCompra1();
         $dados['qtd2'] = $this->negociacao_model->qtdNegociacoesCompra2();
         $dados['qtd3'] = $this->negociacao_model->qtdNegociacoesCompra3();
         $dados['qtd4'] = $this->negociacao_model->qtdNegociacoesCompra4();
         $dados['qtd5'] = $this->negociacao_model->qtdNegociacoesCompra5();


         $this->load->library('pagination');

         $config = array(
         "base_url" => base_url()."index.php/dashboard/c1",
         "per_page" => 3,
         "num_links" => 6,
         "uri_segment" => 4,
         "total_rows" => $this->negociacao_model->qtdNegociacoesCompra1(),
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

         $dados["paginacao_compra1"] = $this->pagination->create_links();
         $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
         $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
         $dados['compra1'] = $this->negociacao_model->listarNegociacoesCompra1($config['per_page'],$offset);

         // Compra 2
         $this->load->library('pagination');

         $config = array(
         "base_url" => base_url()."index.php/dashboard/c2",
         "per_page" => 3,
         "num_links" => 6,
         "uri_segment" => 4,
         "total_rows" => $this->negociacao_model->qtdNegociacoesCompra2(),
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

         $dados["paginacao_compra2"] = $this->pagination->create_links();
         $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
         $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
         $dados['compra2'] = $this->negociacao_model->listarNegociacoesCompra2($config['per_page'],$offset);

         //Compra 3
         $this->load->library('pagination');

         $config = array(
         "base_url" => base_url()."index.php/dashboard/c3",
         "per_page" => 3,
         "num_links" => 6,
         "uri_segment" => 4,
         "total_rows" => $this->negociacao_model->qtdNegociacoesCompra3(),
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

         $dados["paginacao_compra3"] = $this->pagination->create_links();
         $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
         $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
         $dados['compra3'] = $this->negociacao_model->listarNegociacoesCompra3($config['per_page'],$offset);

         //Compra 4
         $this->load->library('pagination');

         $config = array(
         "base_url" => base_url()."index.php/dashboard/c4",
         "per_page" => 3,
         "num_links" => 6,
         "uri_segment" => 4,
         "total_rows" => $this->negociacao_model->qtdNegociacoesCompra4(),
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

         $dados["paginacao_compra4"] = $this->pagination->create_links();
         $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
         $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
         $dados['compra4'] = $this->negociacao_model->listarNegociacoesCompra4($config['per_page'],$offset);

         //Compra 5
         $this->load->library('pagination');

         $config = array(
         "base_url" => base_url()."index.php/dashboard/c5",
         "per_page" => 3,
         "num_links" => 6,
         "uri_segment" => 4,
         "total_rows" => $this->negociacao_model->qtdNegociacoesCompra5(),
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

         $dados["paginacao_compra5"] = $this->pagination->create_links();
         $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
         $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
         $dados['compra5'] = $this->negociacao_model->listarNegociacoesCompra5($config['per_page'],$offset);



		      $this->load->view('dashboard/dashboard_comp', $dados);
           }else{
               redirect(base_url()."index.php/usuarios");
           }


	}

        public function venda()
	{
            $this->load->model('usuarios_model');
            $this->load->model('anuncios_model');
            $this->load->model('negociacao_model');


               if($this->usuarios_model->checarSessao()){
                                $this->load->library('pagination');

            $config = array(
            "base_url" => base_url()."index.php/dashboard/venda/p",
            "per_page" => 3,
            "num_links" => 6,
            "uri_segment" => 4,
            "total_rows" => $this->anuncios_model->pegarQtdAnunciosUsu(),
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

        $dados["paginacao_venda1"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;


        $dados['qtd1'] = $this->negociacao_model->qtdNegociacoesVenda1();
        $dados['qtd2'] = $this->negociacao_model->qtdNegociacoesVenda2();
        $dados['qtd3'] = $this->negociacao_model->qtdNegociacoesVenda3();
        $dados['qtd4'] = $this->negociacao_model->qtdNegociacoesVenda4();
        $dados['qtd5'] = $this->negociacao_model->qtdNegociacoesVenda5();


        $this->load->library('pagination');

        $config = array(
        "base_url" => base_url()."index.php/dashboard/venda/v1",
        "per_page" => 3,
        "num_links" => 6,
        "uri_segment" => 4,
        "total_rows" => $this->negociacao_model->qtdNegociacoesVenda1(),
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

        $dados["paginacao_compra1"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
        $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
        $dados['compra1'] = $this->negociacao_model->listarNegociacoesVenda1($config['per_page'],$offset);

        // Compra 2
        $this->load->library('pagination');

        $config = array(
        "base_url" => base_url()."index.php/dashboard/venda/v2",
        "per_page" => 3,
        "num_links" => 6,
        "uri_segment" => 4,
        "total_rows" => $this->negociacao_model->qtdNegociacoesVenda2(),
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

        $dados["paginacao_compra2"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
        $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
        $dados['compra2'] = $this->negociacao_model->listarNegociacoesVenda2($config['per_page'],$offset);

        //Compra 3
        $this->load->library('pagination');

        $config = array(
        "base_url" => base_url()."index.php/dashboard/venda/v3",
        "per_page" => 3,
        "num_links" => 6,
        "uri_segment" => 4,
        "total_rows" => $this->negociacao_model->qtdNegociacoesVenda3(),
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

        $dados["paginacao_compra3"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
        $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
        $dados['compra3'] = $this->negociacao_model->listarNegociacoesVenda3($config['per_page'],$offset);

        //Compra 4
        $this->load->library('pagination');

        $config = array(
        "base_url" => base_url()."index.php/dashboard/venda/v4",
        "per_page" => 3,
        "num_links" => 6,
        "uri_segment" => 4,
        "total_rows" => $this->negociacao_model->qtdNegociacoesVenda4(),
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

        $dados["paginacao_compra4"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
        $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
        $dados['compra4'] = $this->negociacao_model->listarNegociacoesVenda4($config['per_page'],$offset);

        //Compra 5
        $this->load->library('pagination');

        $config = array(
        "base_url" => base_url()."index.php/dashboard/venda/v5",
        "per_page" => 3,
        "num_links" => 6,
        "uri_segment" => 4,
        "total_rows" => $this->negociacao_model->qtdNegociacoesVenda5(),
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

        $dados["paginacao_compra5"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
        $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
        $dados['compra5'] = $this->negociacao_model->listarNegociacoesVenda5($config['per_page'],$offset);


        $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
        $dados['anuncio'] = $this->anuncios_model->pegarAnunciosUsuId($this->session->userdata['usuario_id'], $config['per_page'],$offset);
		$this->load->view('dashboard/dashboard_vend', $dados);
           }else{
               redirect(base_url()."index.php/usuarios");
           }
	}

        public function meusanuncios(){

                  $this->load->model('usuarios_model');
                   $this->load->model('anuncios_model');
                 if($this->usuarios_model->checarSessao()){
                                       $this->load->library('pagination');

            $config = array(
            "base_url" => base_url()."index.php/dashboard/meusanuncios/p",
            "per_page" => 3,
            "num_links" => 6,
            "uri_segment" => 4,
            "total_rows" => $this->anuncios_model->pegarQtdAnunciosUsu(),
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

        $dados["paginacao_venda1"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;


                     $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
                     $dados['anuncio'] = $this->anuncios_model->pegarAnunciosUsuId($this->session->userdata['usuario_id'], $config['per_page'],$offset);




		$this->load->view('anuncios/meus_anuncios', $dados);
           }else{
               redirect(base_url()."index.php/usuarios");
           }
        }


            public function meusorcamentos(){

                  $this->load->model('usuarios_model');
                   $this->load->model('orcamento_model');
                 if($this->usuarios_model->checarSessao()){
                                       $this->load->library('pagination');

            $config = array(
            "base_url" => base_url()."index.php/dashboard/meusorcamentos/p",
            "per_page" => 3,
            "num_links" => 6,
            "uri_segment" => 4,
            "total_rows" => $this->orcamento_model->pegarQtdOrcamentosUsu(),
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

        $dados["paginacao_venda1"] = $this->pagination->create_links();
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;


                     $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
                     $dados['anuncio'] = $this->orcamento_model->pegarOrcamentosUsuId($this->session->userdata['usuario_id'], $config['per_page'],$offset);




		$this->load->view('orcamentos/meus_orcamentos', $dados);
           }else{
               redirect(base_url()."index.php/usuarios");
           }
        }


       public function transportes(){
            $this->load->model('usuarios_model');
                 if($this->usuarios_model->checarSessao()){
		$this->load->view('dashboard/dashboard_freight');
           }else{
               redirect(base_url()."index.php/usuarios");
           }
       }


        public function perfil(){
            $this->load->model('usuarios_model');
                 if($this->usuarios_model->checarSessao()){
		$this->load->view('dashboard/perfil');
           }else{
               redirect(base_url()."index.php/usuarios");
           }
        }
        public function editarPerfil(){
            	$this->load->model('usuarios_model');
                 if($this->usuarios_model->checarSessao()){
                     $dados['usuario'] = $this->usuarios_model->pegarUsuarioPorId($this->session->userdata['usuario_id']);
		$this->load->view('dashboard/editar_perfil', $dados);
           }else{
               redirect(base_url()."index.php/usuarios");
           }
        }

        public function atualizarDadosInfo(){
              $this->load->model('usuarios_model');
             if($this->usuarios_model->checarSessao()){
                if($this->usuarios_model->atualizarDadosInfo()){
                    redirect(base_url()."index.php/dashboard");
                }
           }else{
               redirect(base_url()."index.php/usuarios");
           }
        }
          public function atualizarDadosBus(){
              $this->load->model('usuarios_model');
             if($this->usuarios_model->checarSessao()){
                if($this->usuarios_model->atualizarDadosBus()){
                    redirect(base_url()."index.php/dashboard");
                }
           }else{
               redirect(base_url()."index.php/usuarios");
           }
        }
        public function atualizarDadosEndereco(){
              $this->load->model('usuarios_model');
             if($this->usuarios_model->checarSessao()){
                if($this->usuarios_model->atualizarDadosEndereco()){
                    redirect(base_url()."index.php/dashboard");
                }
           }else{
               redirect(base_url()."index.php/usuarios");
           }
        }

        public function novadisputa($indice = null){
            $this->load->model('usuarios_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    $dados['indice'] = $indice;
                    $this->load->view('disputas/nova_dispusta', $dados);
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }
        }
        public function criardisputaCompra($indice = null){
            $this->load->model('usuarios_model');
            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->novadisputaCompra($indice)){
                        redirect(base_url()."index.php/dashboard");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }

        }
        public function criardisputaPagamento($indice = null){
            $this->load->model('usuarios_model');
            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->novadisputaPagamento($indice)){
                        redirect(base_url()."index.php/dashboard");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }

        }
        public function criardisputaArrependimento($indice = null){
            $this->load->model('usuarios_model');
            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->novadisputaArrependimento($indice)){
                        redirect(base_url()."index.php/dashboard");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }

        }
        public function disputas(){
            $this->load->model('usuarios_model');
            $this->load->model('anuncios_model');
            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){


                $this->load->library('pagination');

                $config = array(
                "base_url" => base_url()."index.php/dashboard/disputas/p",
                "per_page" => 9,
                "num_links" => 6,
                "uri_segment" => 4,
                "total_rows" => $this->negociacao_model->qtdNegociacoes($this->session->userdata['usuario_id']),
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

                $dados['negociacao_compra'] = $this->negociacao_model->listarNegociacoesCompra($this->session->userdata['usuario_id'], $config['per_page'],$offset);
              $dados['qtd_negociacoes'] = $this->negociacao_model->qtdNegociacoes($this->session->userdata['usuario_id']);
                    $this->load->view('disputas/listar_disputas', $dados);

            }else{
                redirect(base_url()."index.php/usuarios");
            }
        }
        public function finalizarDisputa($indice = null){

            $this->load->model('usuarios_model');

            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->finalizardisputa($indice)){
                        redirect(base_url()."index.php/dashboard/disputas");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }


        }
        public function atualizarNotificacoes(){
            $this->load->model('anuncios_model');
            $notificaMensagem = $this->anuncios_model->carregarNotificacaoMensagem();
            $notificaDisputas = $this->anuncios_model->carregarNotificacaoDisputa();
            $notificaAcoes = $this->anuncios_model->carregarNotificacaoAcoes();
            $notificaAvaliacoes = $this->anuncios_model->carregarNotificacaoAvaliacao();
            $exibeMensagem = "";
            $exibeDisputas = "";
            $exibeAcoes = "";
            $exibeAvaliacoes = "";
            $linkMensagem = "";
            $linkDisputa = "";

            if($notificaMensagem == 0){
                $linkMensagem = base_url()."index.php/usuarios/mensagens";
                $exibeMensagem =  '<li><a href="'.$linkMensagem.'" ><i class="fa fa-comment" aria-hidden="true"></i>Você não tem novas mensagens</a></li>';
            }else{
                $linkMensagem = base_url()."index.php/usuarios/mensagens/".$this->anuncios_model->carregarLinksMensagem();
                $exibeMensagem =  '<li><a href="'.$linkMensagem.'" class="notificated" ><i class="fa fa-comment" aria-hidden="true"><span class="buttonbadge alert">'.$notificaMensagem.'</span></i>Mensagens não lidas</a></li>';
            }

            if($notificaDisputas == 0){
                $exibeDisputas = '<li><a href="" ><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Você não tem novas disputas</a></li>';
            }else{
                $linkDisputa = base_url()."index.php/usuarios/mensagens/".$this->anuncios_model->carregarLinksDisputa();
                $exibeDisputas = '<li><a href="'.$linkDisputa.'" class="notificated"><i class="fa fa-exclamation-triangle" aria-hidden="true"><span class="buttonbadge alert">'.$notificaDisputas.'</span></i>Disputas Pendentes</a></li>';
            }

            if($notificaAcoes == 0){
                $exibeAcoes = '<li><a href="" ><i class="fa fa-list" aria-hidden="true"></i>Você não tem novas ações</a></li>';
            }else{
                $exibeAcoes = '<li><a href="" class="notificated"><i class="fa fa-list" aria-hidden="true"><span class="buttonbadge alert">'.$notificaAcoes.'</span></i>Ações Pendentes</a></li>';
            }

            if($notificaAvaliacoes == 0){
                $exibeAvaliacoes = '<li><a href="" ><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Você não tem novas avaliações</a></li>';
            }else{
                $exibeAvaliacoes = '<li><a href="" class="notificated"><i class="fa fa-thumbs-o-up" aria-hidden="true"><span class="buttonbadge alert">'.$notificaAvaliacoes.'</span></i>Avaliações Pendentes</a></li>';
            }

            echo '  <ul class="notifications">'.$exibeMensagem.$exibeDisputas.
                   ' </ul>
                    <ul class="notifications">'.
                        $exibeAcoes.$exibeAvaliacoes.'
                    </ul>';
        }
        public function aceitarProposta($indice){
            $this->load->model('usuarios_model');

            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->aceitarProposta($indice)){
                        redirect(base_url()."index.php/dashboard/venda");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }
        }
        public function fecharNegocio($indice){
            $this->load->model('usuarios_model');

            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->fecharNegocio($indice)){
                        redirect(base_url()."index.php/dashboard");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }
        }
         public function recusarProposta($indice){
            $this->load->model('usuarios_model');

            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->recusarProposta($indice)){
                        redirect(base_url()."index.php/dashboard");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }
        }
            public function excluirProposta($indice){
            $this->load->model('usuarios_model');

            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->excluirProposta($indice)){
                        redirect(base_url()."index.php/dashboard");
                    }
                }else{
                    redirect(base_url()."index.php/dashboard");
                }
            }else{
                redirect(base_url()."index.php/usuarios");
            }
        }

}
