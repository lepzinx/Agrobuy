<?php

class Usuarios_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    public function checarSessao(){
        if($this->session->userdata('logado')==false){
            return false;
        } else {
            return true;
        }
    }

        public function entrar($login, $senha){
			$senhaPesquisa = md5($senha);

	    $this->db->where('usuario_email', $login);
        $this->db->where('usuario_senha', $senhaPesquisa);

        $usuario = $this->db->get('usuarios', 1);

        if ($usuario->num_rows() > 0){
            $dados['usuario_id'] = $usuario->row()->usuario_id;
            $dados['usuario_nome'] = $usuario->row()->usuario_nome;
            $dados['usuario_email'] = $usuario->row()->usuario_email;
            $dados['usuario_tel'] = $usuario->row()->usuario_tel;
            $dados['usuario_cel'] = $usuario->row()->usuario_cel;
            $dados['usuario_senha'] = $usuario->row()->usuario_senha;
            $dados['usuario_tipopessoa'] = $usuario->row()->usuario_tipopessoa;
            $dados['usuario_doc'] = $usuario->row()->usuario_doc;
            $dados['usuario_tipoendereco'] = $usuario->row()->usuario_tipoendereco;
            $dados['usuario_estado'] = $usuario->row()->usuario_estado;
            $dados['usuario_cep'] = $usuario->row()->usuario_cep;
            $dados['usuario_municipio'] = $usuario->row()->usuario_municipio;
            $dados['usuario_ruaouacesso'] = $usuario->row()->usuario_ruaouacesso;
            $dados['usuario_numerooukm'] = $usuario->row()->usuario_numerooukm;
            $dados['usuario_complemento'] = $usuario->row()->usuario_complemento;
            $dados['usuario_tiponegocio1'] = $usuario->row()->usuario_tiponegocio1;
            $dados['usuario_tiponegocio2'] = $usuario->row()->usuario_tiponegocio2;
            $dados['usuario_tiponegocio3'] = $usuario->row()->usuario_tiponegocio3;
            $dados['usuario_tiponegocio4'] = $usuario->row()->usuario_tiponegocio4;
            $dados['usuario_tiponegocio5'] = $usuario->row()->usuario_tiponegocio5;
            $dados['usuario_tiponegocio6'] = $usuario->row()->usuario_tiponegocio6;
            $dados['usuario_tiponegocio7'] = $usuario->row()->usuario_tiponegocio7;
            $dados['usuario_interessevenda1'] = $usuario->row()->usuario_interessevenda1;
            $dados['usuario_interessevenda2'] = $usuario->row()->usuario_interessevenda2;
            $dados['usuario_interessevenda3'] = $usuario->row()->usuario_interessevenda3;
            $dados['usuario_interessevcategoria1'] = $usuario->row()->usuario_interessevcategoria1;
            $dados['usuario_interessevcategoria2'] = $usuario->row()->usuario_interessevcategoria2;
            $dados['usuario_interessevcategoria3'] = $usuario->row()->usuario_interessevcategoria3;
            $dados['usuario_interessecompra1'] = $usuario->row()->usuario_interessecompra1;
            $dados['usuario_interessecompra2'] = $usuario->row()->usuario_interessecompra2;
            $dados['usuario_interessecompra3'] = $usuario->row()->usuario_interessecompra3;
            $dados['usuario_interessecompracategoria1'] = $usuario->row()->usuario_interessecompracategoria1;
            $dados['usuario_interessecompracategoria2'] = $usuario->row()->usuario_interessecompracategoria2;
            $dados['usuario_interessecompracategoria3'] = $usuario->row()->usuario_interessecompracategoria3;
            $dados['usuario_confirma'] = $usuario->row()->usuario_confirma;


            $dados['logado'] = true;

            $this->session->set_userdata($dados);
            return true;
    }else{
      return false;
    }
    }


    public function cadastrarAccInfo() {
        $dados['usuario_nome'] = $this->input->post('nome');
        $dados['usuario_email'] = $this->input->post('email');
        $confirmaEmail = $this->input->post('cemail');
        $dados['usuario_tel'] = $this->input->post('tel');
        $dados['usuario_cel'] = $this->input->post('cel');
        $dados['usuario_senha'] = md5($this->input->post('pass'));
        $dados['usuario_token'] = md5(time());
        $dados['usuario_imagemperfil'] = "assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg";
        $confirmaSenha = $this->input->post('cpass');

         $this->db->insert("usuarios", $dados);
         if($this->db->affected_rows() > 0){
              $id['IDCADASTRO'] = $this->db->insert_id();
            $this->session->set_userdata($id);



             $this->load->library('email');

              //Inicia o processo de configuração para o envio do email
    $config['smtp_host'] = "seu_host";
$config['smtp_user'] = "seu_email";
$config['smtp_pass'] = "sua_senha";
$config['smtp_port'] = "587";
$config['protocol'] = "smtp";
             $config['newline']  = "\r\n";
$config['crlf']     = "\r\n";
$config['charset']  = 'UTF-8';

        /*
         * Se o usuário escolheu o envio com template, define o 'mailtype' para html,
         * caso contrário usa text
         */

            $config['mailtype'] = 'html';

        // Inicializa a library Email, passando os parâmetros de configuração
        $this->email->initialize($config);

        // Define remetente e destinatário
        $this->email->from('remetente@email.com', 'Remetente'); // Remetente
        $this->email->to($dados['usuario_email'],$dados['usuario_nome']); // Destinatário

        // Define o assunto do email
        $this->email->subject('Enviando emails com a library nativa do CodeIgniter');

        /*
         * Se o usuário escolheu o envio com template, passa o conteúdo do template para a mensagem
         * caso contrário passa somente o conteúdo do campo 'mensagem'
         */

            $this->email->message(' Confirme seu cadastro utilizando este link : '.base_url().'index.php/usuarios/confirmarcadastro'. $dados['usuario_token']);

        /*
         * Se o envio foi feito com sucesso, define a mensagem de sucesso
         * caso contrário define a mensagem de erro, e carrega a view home
         */
                   $this->email->send();

            return true;
		}else{
			return false;
		}
    }
     public function cadastrarBusInfo($id) {
                $radioPessoa = $this->input->post('tpessoa');
            if($radioPessoa == 'fisi'){
                 $dados['usuario_tipopessoa'] = 0; // PESSOA FISICA
                  $dados['usuario_doc'] = $this->input->post('cpf');
            }else if($radioPessoa == 'juri'){
                $dados['usuario_tipopessoa'] = 1; //PESSOA JURIDICA
                 $dados['usuario_doc'] = $this->input->post('cnpj');
            }
            $radioEndereco = $this->input->post('tend');
              if($radioEndereco == 'urbano'){
                 $dados['usuario_tipoendereco'] = 0; // URBANO
                 $dados['usuario_estado'] = $this->input->post('estado');
                 $dados['usuario_cep'] =  $this->input->post('cep');
                 $dados['usuario_municipio'] = $this->input->post('municipio');
                 $dados['usuario_ruaouacesso'] = $this->input->post('rua');
                 $dados['usuario_numerooukm'] = $this->input->post('numero');
                 $dados['usuario_complemento'] = $this->input->post('complemento');
            }else if($radioEndereco == 'rural'){
                 $dados['usuario_tipoendereco'] = 1; // RURAL
                 $dados['usuario_estado'] = $this->input->post('estado');
                 $dados['usuario_municipio'] = $this->input->post('municipio');
                 $dados['usuario_cep'] = 000000;
                 $dados['usuario_ruaouacesso'] = $this->input->post('estrada');
                 $dados['usuario_numerooukm'] = $this->input->post('km');
                 $dados['usuario_complemento'] = $this->input->post('complemento');
            }
         $this->db->where("usuario_id", $id);

         if($this->db->update("usuarios", $dados)){

			return true;
		}else{
			return false;
		}
    }
     public function cadastrarFinal($id) {
        $produtorRural = $this->input->post('ProdutorRural');
               $trader = $this->input->post('Trader');
               $agroindustria = $this->input->post('Agroindustria');
               $distribuidor = $this->input->post('Distribuidor');
               $cooperativa = $this->input->post('Coperativa');
               $prestador = $this->input->post('Prestador');
               $startup = $this->input->post('Startup');
               if((int)$produtorRural == 1){
                   $dados['usuario_tiponegocio1'] = 1;
               }else{
                   $dados['usuario_tiponegocio1'] = 0;
               }
               if((int)$trader == 1){
                   $dados['usuario_tiponegocio2'] = 1;
               }else{
                   $dados['usuario_tiponegocio2'] = 0;
               }
               if((int)$agroindustria == 1){
                   $dados['usuario_tiponegocio3'] = 1;
               }else{
                   $dados['usuario_tiponegocio3'] = 0;
               }
                    if((int)$distribuidor==1){
                   $dados['usuario_tiponegocio4'] = 1;
               }else{
                   $dados['usuario_tiponegocio4'] = 0;
               }
                     if((int)$cooperativa == 1){
                   $dados['usuario_tiponegocio5'] = 1;
               }else{
                   $dados['usuario_tiponegocio5'] = 0;
               }
               if((int)$prestador == 1){
                   $dados['usuario_tiponegocio6'] = 1;
               }else{
                   $dados['usuario_tiponegocio6'] = 0;
               }
                if((int)$startup == 1){
                   $dados['usuario_tiponegocio7'] = 1;
               }else{
                   $dados['usuario_tiponegocio7'] = 0;
               }
            $dados['usuario_interessecompra1'] =$this->input->post("cat1");
            $dados['usuario_interessecompra2'] = $this->input->post("cat2");
            $dados['usuario_interessecompra3'] = $this->input->post("cat3");
            $dados['usuario_interessecompracategoria1'] = $this->input->post("catPro1");
            $dados['usuario_interessecompracategoria2'] = $this->input->post("catPro5");
            $dados['usuario_interessecompracategoria3'] = $this->input->post("catPro6");
            $dados['usuario_interessevenda1'] = $this->input->post("cat4");
            $dados['usuario_interessevenda2'] = $this->input->post("cat5");
            $dados['usuario_interessevenda3'] = $this->input->post("cat6");
            $dados['usuario_interessevcategoria1'] = $this->input->post("catPro4");
            $dados['usuario_interessevcategoria2'] = $this->input->post("catPro5");
            $dados['usuario_interessevcategoria3'] = $this->input->post("catPro6");



         $this->db->where("usuario_id", $id);

         if($this->db->update("usuarios", $dados)){
                     $this->session->unset_userdata('IDCADASTRO');






			return true;
		}else{
			return false;
		}
    }

    public function pegarUsuarioPorId($id){
        $this->db->where('usuario_id', $id);
        return $this->db->get('usuarios')->result();
    }
    public function nomeEmpresa($id){
        $this->db->where('usuario_id', $id);
        return $this->db->get('usuarios')->row()->usuario_nome;
    }
    public function enderecoEmpresa($id){
        $this->db->where('usuario_id', $id);
        return $this->db->get('usuarios')->row()->usuario_municipio;
    }
       public function estadoEmpresa($id){
        $this->db->where('usuario_id', $id);
        return  $this->db->get('usuarios')->row()->usuario_estado;
    }




    // MENSAGENS


    public function verificaConversa($id, $id2){

        $this->db->where("usuario1_id='$id' AND usuario2_id='$id2'");
        $this->db->or_where("usuario1_id='$id2' AND usuario2_id='$id'");
        $conta = $this->db->get('conversas')->num_rows();

        if($conta == 0){
            return true;
        }else{
            return false;
        }

    }

    public function enviarMensagem($para, $texto){
         $de = $this->session->userdata['usuario_id'];
           $dados['mensagem_de'] = $de;
           $dados['mensagem_para'] = $para;
           $dados['mensagem_texto'] = $texto;


           $this->db->insert('mensagens', $dados);
            if($this->db->affected_rows() > 0){
                if($this->verificaConversa($de, $para)){
                    $data['usuario1_id'] = $de;
                    $data['usuario2_id'] = $para;
                    $this->db->insert('conversas', $data);
                }
                        return true;
		}else{
			return false;
		}
    }
    public function enviarArquivo($para){

         $de = $this->session->userdata['usuario_id'];
           $dados['mensagem_de'] = $de;
           $dados['mensagem_para'] = $para;

    $this->load->library('upload');
            if (!is_dir('assets/uploads/conversas/'.$de.$para)) {
               mkdir('assets/uploads/conversas/'.$de.$para, 0777, TRUE);
               $caminho = 'assets/uploads/conversas/'.$de.$para;
            }
               $name =md5(time());
       $curriculo    = $_FILES['imagem'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/conversas/'.$de.$para.'/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
              $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('imagem')) {
            $dados['mensagem_arquivo']  = $configuracao['upload_path'] . $configuracao['file_name'];
            return $this->db->insert('mensagens', $dados);
        }else{
            $this->upload->display_errors();
        }

    }




    public function verMensagens($indice){
         $idUsuario = $this->session->userdata['usuario_id'];

        $this->db->select('*');
        $this->db->where("mensagem_de='$idUsuario' AND mensagem_para='$indice'");
        $this->db->or_where("mensagem_de='$indice' AND mensagem_para='$idUsuario'");

        $pegarId2 =  $this->db->get('mensagens');
        if($pegarId2->num_rows() > 0 ){
            return $pegarId2->result();
        }
        return false;
    }




    public function listarConversas(){

            $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
            $this->db->or_where('usuario2_id', $this->session->userdata['usuario_id']);
            return $this->db->get('conversas')->result();

    }



    public function atualizarDadosInfo(){


        $dados['usuario_nome'] = $this->input->post('nome');
        $dados['usuario_email'] = $this->input->post('email');
        $dados['usuario_tel'] = $this->input->post('tel');
        $dados['usuario_cel'] = $this->input->post('cel');



        $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
        if ($this->input->post('pass') == $this->db->get('usuarios')->row()->usuario_senha) {
            $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
            return $this->db->update("usuarios", $dados);
        } else {
            return false;
        }
    }

      public function atualizarDadosBus(){

$produtorRural = $this->input->post('ProdutorRural');
               $trader = $this->input->post('Trader');
               $agroindustria = $this->input->post('Agroindustria');
               $distribuidor = $this->input->post('Distribuidor');
               $cooperativa = $this->input->post('Coperativa');
               $prestador = $this->input->post('Prestador');
               $startup = $this->input->post('Startup');
               if((int)$produtorRural == 1){
                   $dados['usuario_tiponegocio1'] = 1;
               }else{
                   $dados['usuario_tiponegocio1'] = 0;
               }
               if((int)$trader == 1){
                   $dados['usuario_tiponegocio2'] = 1;
               }else{
                   $dados['usuario_tiponegocio2'] = 0;
               }
               if((int)$agroindustria == 1){
                   $dados['usuario_tiponegocio3'] = 1;
               }else{
                   $dados['usuario_tiponegocio3'] = 0;
               }
                    if((int)$distribuidor==1){
                   $dados['usuario_tiponegocio4'] = 1;
               }else{
                   $dados['usuario_tiponegocio4'] = 0;
               }
                     if((int)$cooperativa == 1){
                   $dados['usuario_tiponegocio5'] = 1;
               }else{
                   $dados['usuario_tiponegocio5'] = 0;
               }
               if((int)$prestador == 1){
                   $dados['usuario_tiponegocio6'] = 1;
               }else{
                   $dados['usuario_tiponegocio6'] = 0;
               }
                if((int)$startup == 1){
                   $dados['usuario_tiponegocio7'] = 1;
               }else{
                   $dados['usuario_tiponegocio7'] = 0;
               }

            $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
            return $this->db->update("usuarios", $dados);
    }
    public function atualizarDadosEndereco(){


            $radioEndereco = $this->input->post('tend');
              if($radioEndereco == 'urbano'){
                 $dados['usuario_tipoendereco'] = 0; // URBANO
                 $dados['usuario_estado'] = $this->input->post('estado');
                 $dados['usuario_cep'] =  $this->input->post('cep');
                 $dados['usuario_municipio'] = $this->input->post('municipio');
                 $dados['usuario_ruaouacesso'] = $this->input->post('rua');
                 $dados['usuario_numerooukm'] = $this->input->post('numero');
                 $dados['usuario_complemento'] = $this->input->post('complemento');
            }else if($radioEndereco == 'rural'){
                 $dados['usuario_tipoendereco'] = 1; // RURAL
                 $dados['usuario_estado'] = $this->input->post('estado');
                 $dados['usuario_municipio'] = $this->input->post('municipio');
                 $dados['usuario_cep'] = 000000;
                 $dados['usuario_ruaouacesso'] = $this->input->post('estrada');
                 $dados['usuario_numerooukm'] = $this->input->post('km');
                 $dados['usuario_complemento'] = $this->input->post('complemento');
            }
          $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
            return $this->db->update("usuarios", $dados);
    }
    public function fotoPerfil($id){
        $this->db->where('usuario_id', $id);
        return $this->db->get('usuarios')->row()->usuario_imagemperfil;
    }
    public function pegarPrimeiraConversa(){
            $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
            $this->db->or_where('usuario2_id', $this->session->userdata['usuario_id']);
             if($this->session->userdata['usuario_id'] == $this->db->get('conversas')->row()->usuario1_id){
                return $this->db->get('conversas')->row()->usuario2_id;
             }else{
                  return $this->db->get('conversas')->row()->usuario1_id;
             }
    }
    public function confirmarEmail($token){
        $this->db->where('usuario_token', $token);
        $dados['usuario_confirma'] = 1;
        return $this->db->update('usuairos', $dados);
    }


}
