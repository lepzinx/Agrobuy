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
                 if($this->usuarios_model->checarSessao()){
		$this->load->view('dashboard/dashboard_comp');
           }else{
               redirect(base_url()."index.php/usuarios");
           }


	}

        public function venda()
	{
            $this->load->model('usuarios_model');
            $this->load->model('anuncios_model');


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
        public function criardisputa($indice = null){
            $this->load->model('usuarios_model');
            $this->load->model('negociacao_model');
            if($this->usuarios_model->checarSessao()){
                if($indice  != null){
                    if($this->negociacao_model->novadisputa($indice)){
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
             echo '  <ul class="notifications">
                        <li><a href="" ><i class="fa fa-comment" aria-hidden="true"><span class="buttonbadge alert">4</span></i>Mensagens não lidas</a></li>

                        <li><a href="" class="notificated"><i class="fa fa-list" aria-hidden="true"><span class="buttonbadge alert">10</span></i>Ações Pendentes</a></li>
                    </ul>
                    <ul class="notifications">
                        <li><a href=""><i class="fa fa-exclamation-triangle" aria-hidden="true"><span class="buttonbadge">0</span></i>Disputas Pendentes </a></li>

                        <li><a href=""><i class="fa fa-thumbs-o-up" aria-hidden="true"><span class="buttonbadge">0</span></i>Avaliações Pendentes </a></li>
                    </ul>';




        }


}
