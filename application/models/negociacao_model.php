<?php

/**
 * negociacao_model short summary.
 *
 * negociacao_model description.
 *
 * @version 1.0
 * @author Leonardo Torres
 */
class Negociacao_model extends CI_Model{

    function __construct(){

        parent::__construct();
        $this->load->model("anuncios_model");
        $this->load->model("usuarios_model");
    }
    // Disputas

       public function novaDisputaCompra($negociacao_id){
           $this->load->model('usuarios_model');
           $dados['negociacao_id'] = $negociacao_id;
           $dados['disputa_qual'] = $this->input->post('disputa_qual');
           $dados['disputa_oque'] = $this->input->post('disputa_oque');
           $dados['disputa_detalhe1'] = $this->input->post('disputa_detalhe1');
           $dados['disputa_detalhe2'] = $this->input->post('disputa_detalhe2');
           $dados['disputa_detalhe3'] = $this->input->post('disputa_detalhe3');
           $dados['disputa_detalhe4'] = $this->input->post('disputa_detalhe4');
           $dados['disputa_mensagem'] = $this->input->post('disputa_mensagem');
           $this->db->insert('disputas', $dados);

           $mensagem = "Uma nova <strong>disputa</strong> foi iniciada, identificação : ". $this->db->insert_id() ."<br><br>".
               "responda em no máximo três dias, caso contrário a Agrobuy irá interceder.<br><br><br>".

               "<strong> Qual foi o problema ? </strong><br>" . $dados['disputa_qual'] . "<br><br><br>".
               "<strong> O que o usuario deseja?</strong><br>" . $dados['disputa_oque'] . "<br><br><br>".
               "<strong> Mais detalhes :  </strong><br>" . $dados['disputa_detalhes1'] . "<br>". $dados['disputa_detalhes2']."<br>". $dados['disputa_detalhes3']."<br><br><br>".
               "<strong> Mensagem do usuario : </strong><br>" . $dados['disputa_mensagem'] . "<br>";
           $this->db->where('negociacao_id', $negociacao_id);
           $para = $this->db->get('negociacoes')->row()->usuario2_id;
           $this->anuncios_model->novanotificacao(2, $para);
          return $this->usuarios_model->enviarMensagem($para, $mensagem);

       }

       public function novaDisputaPagamento($negociacao_id){
           $this->load->model('usuarios_model');
           $dados['negociacao_id'] = $negociacao_id;
           $dados['disputa_qual'] = $this->input->post('disputa_qual');
           $dados['disputa_oque'] = $this->input->post('disputa_oque');
           $dados['disputa_detalhe1'] = $this->input->post('disputa_detalhe1');
           $dados['disputa_detalhe2'] = $this->input->post('disputa_detalhe2');
           $dados['disputa_detalhe3'] = $this->input->post('disputa_detalhe3');
           $dados['disputa_detalhe4'] = $this->input->post('disputa_detalhe4');
           $dados['disputa_mensagem'] = $this->input->post('disputa_mensagem');
           $this->db->insert('disputas', $dados);

           $mensagem = "Uma nova <strong>disputa</strong> foi iniciada, identificação : ". $this->db->insert_id() ."<br><br>".
               "responda em no máximo três dias, caso contrário a Agrobuy irá interceder.<br><br><br>".
               "<strong> Qual foi o problema ? </strong><br>" . $dados['disputa_qual'] . "<br><br><br>";
           $this->db->where('negociacao_id', $negociacao_id);
           $para = $this->db->get('negociacoes')->row()->usuario2_id;
           $this->anuncios_model->novanotificacao(2, $para);
           return $this->usuarios_model->enviarMensagem($para, $mensagem);

       }

       public function novaDisputaArrependimento($negociacao_id){
           $this->load->model('usuarios_model');
           $dados['negociacao_id'] = $negociacao_id;
           $dados['disputa_qual'] = $this->input->post('disputa_qual');
           $dados['disputa_oque'] = $this->input->post('disputa_oque');
           $dados['disputa_detalhe1'] = $this->input->post('disputa_detalhe1');
           $dados['disputa_detalhe2'] = $this->input->post('disputa_detalhe2');
           $dados['disputa_detalhe3'] = $this->input->post('disputa_detalhe3');
           $dados['disputa_detalhe4'] = $this->input->post('disputa_detalhe4');
           $dados['disputa_mensagem'] = $this->input->post('disputa_mensagem');
           $this->db->insert('disputas', $dados);

           $mensagem = "Uma nova <strong>disputa</strong> foi iniciada, identificação : ". $this->db->insert_id() ."<br><br>".
               "responda em no máximo três dias, caso contrário a Agrobuy irá interceder.<br><br><br>".
               "<strong> O cliente se arrependeu da compra </strong><br>" . $dados['disputa_qual'] . "<br><br><br>";
           $this->db->where('negociacao_id', $negociacao_id);
           $para = $this->db->get('negociacoes')->row()->usuario2_id;
           $this->anuncios_model->novanotificacao(2, $para);
           return $this->usuarios_model->enviarMensagem($para, $mensagem);

       }


       public function listarNegociacoesCompra($usuario1_id, $limit, $offset){
           $this->db->where("usuario1_id", $usuario1_id);

           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoes($usuario1_id){
           $this->db->where("usuario1_id", $usuario1_id);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesFinalizadas($usuario1_id){
           $this->db->where("usuario1_id", $usuario1_id);
           $this->db->where("negociacao_status", 5);
           return $this->db->get('negociacoes')->result();
       }
       public function verificaDisputa($negociacao_id){
           $this->db->where('negociacao_id', $negociacao_id);
           $this->db->where('disputa_finalizada', 0);
           if($this->db->get('disputas')->num_rows() > 0){
               return true;
           }else{
               return false;
           }

       }
       public function finalizarDisputa($negociacao_id){
           $dados['disputa_finalizada'] = 1;
           $this->db->where("negociacao_id", $negociacao_id);
           $this->anuncios_model->novanotificacao(2, $para);
           return $this->db->update('disputas', $dados);
       }

       public function uploadDisputa(){

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
       public function iniciarNegociacao($anuncio_id){
           $dados['negociacao_status'] = 0;
           $dados['anuncio_id'] = $anuncio_id;
           $dados['usuario1_id'] = $this->session->userdata['usuario_id'];
           $dados['usuario2_id'] = $this->usuarios_model->pegarIdPorAnuncio($anuncio_id);
           $dados['negociacao_qtd'] = $this->input->post('quantidade');
           $dados['negociacao_precounitario'] = $this->input->post('preco');
           $dados['negociacao_preco'] = $dados['negociacao_precounitario'] * $dados['negociacao_qtd'];
           $dados['negociacao_entrega'] =   $this->input->post('fornecedor_entrega');

           $this->db->insert('negociacoes', $dados);

           $mensagem = 'Uma nova negociação foi iniciada! Observe os dados corretamente e faça a escolha de um prestador de serviços para'
               .' dar mais opções de frete para seu cliente!<br>'.
               'Anuncio : <a href="'.base_url().'index.php/anuncios/visualizarproduto/'.$anuncio_id.'">'.$this->anuncios_model->pegarTituloPorId($anuncio_id).'</a><br>'.
               'Preco unitario : R$'.$dados['negociacao_precounitario'].'<br>'.
               'Quantidade : '.$dados['negociacao_qtd'].'<br>'.
               'Caso você entregue : '.$dados['negociacao_entrega'].'<br>';
           $this->anuncios_model->novanotificacao(3, $dados['usuario2_id']);
           return $this->usuarios_model->enviarMensagem($dados['usuario2_id'], $mensagem);
       }
       public function listarNegociacoesCompra1($limit, $offset){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesCompra1(){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesCompra2($limit, $offset){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 1);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesCompra2(){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 1);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesCompra3($limit, $offset){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 2);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesCompra3(){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 2);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesCompra4($limit, $offset){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 3);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesCompra4(){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 3);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesCompra5($limit, $offset){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 4);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesCompra5(){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 4);
           return $this->db->get('negociacoes')->num_rows();
       }

       public function listarNegociacoesVenda1($limit, $offset){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesVenda1(){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesVenda2($limit, $offset){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 1);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesVenda2(){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 1);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesVEnda3($limit, $offset){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 2);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesVenda3(){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 2);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesVenda4($limit, $offset){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 3);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesVenda4(){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 3);
           return $this->db->get('negociacoes')->num_rows();
       }
       public function listarNegociacoesVenda5($limit, $offset){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 4);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesVenda5(){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 4);
           return $this->db->get('negociacoes')->num_rows();
       }

       public function verificaStatus($negociacao_id){
           $this->db->where('negociacao_id', $negociacao_id);
           $resultado = $this->db->get('negociacoes');
           if($resultado->row()->negociacao_aceitafornecedor == 1){
               return "Aguardando cliente fechar negocio";
           }else if($resultado->row()->negociacao_aceitafornecedor == 0){
               return "Aguardando fornecedor aceitar proposta";
           }
       }
       public function aceitarProposta($negociacao_id){
           $this->db->where('negociacao_id',$negociacao_id);
           $resultado = $this->db->get('negociacoes');
           $dados['negociacao_aceitafornecedor'] = 1;
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_id',$negociacao_id);
           $this->db->update('negociacoes', $dados);

           $mensagem = 'A negociação foi aceita por parte do fornecedor! Ela está aguardando o Cliente fechar negocio agora!<br>'.
               'Anuncio : <a href="'.base_url().'index.php/anuncios/visualizarproduto/'.$resultado->row()->anuncio_id.'">'.$this->anuncios_model->pegarTituloPorId($resultado->row()->anuncio_id).'</a><br>'.
               'Preco unitario : R$'.$resultado->row()->negociacao_precounitario.'<br>'.
               'Quantidade : '.$resultado->row()->negociacao_qtd.'<br>'.
           $this->anuncios_model->novanotificacao(3, $resultado->row()->usuario1_id);
           return $this->usuarios_model->enviarMensagem($resultado->row()->usuario1_id, $mensagem);
       }
       public function fecharNegocio($negociacao_id){
           $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_id',$negociacao_id);
           $resultado = $this->db->get('negociacoes');
           $dados['negociacao_aceitacliente'] = 1;
           $dados['negociacao_status'] = 1;
            $this->db->where('usuario1_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_id',$negociacao_id);
           $this->db->update('negociacoes', $dados);

           $mensagem = 'A negociação foi fechada! Estamos indo para a fase de pagamento!<br>'.
               'Anuncio : <a href="'.base_url().'index.php/anuncios/visualizarproduto/'.$resultado->row()->anuncio_id.'">'.$this->anuncios_model->pegarTituloPorId($resultado->row()->anuncio_id).'</a><br>'.
               'Preco unitario : R$'.$resultado->row()->negociacao_precounitario.'<br>'.
               'Quantidade : '.$resultado->row()->negociacao_qtd.'<br>'.
           $this->anuncios_model->novanotificacao(3, $resultado->row()->usuario2_id);
           return $this->usuarios_model->enviarMensagem($resultado->row()->usuario2_id, $mensagem);
       }
       public function recusarProposta($negociacao_id){
           $this->db->where('negociacao_id',$negociacao_id);
           $resultado = $this->db->get('negociacoes');
           $dados['negociacao_cancelada'] = 1;
           $this->db->where('negociacao_id',$negociacao_id);
           $this->db->update('negociacoes', $dados);

           $mensagem = 'Sua proposta não foi aceita!! Estamos cancelando as negociacções<br>'.
               'Anuncio : <a href="'.base_url().'index.php/anuncios/visualizarproduto/'.$resultado->row()->anuncio_id.'">'.$this->anuncios_model->pegarTituloPorId($resultado->row()->anuncio_id).'</a><br>'.
               'Preco unitario : R$'.$resultado->row()->negociacao_precounitario.'<br>'.
               'Quantidade : '.$resultado->row()->negociacao_qtd.'<br>'.
           $this->anuncios_model->novanotificacao(3, $resultado->row()->usuario2_id);
           return $this->usuarios_model->enviarMensagem($resultado->row()->usuario2_id, $mensagem);
       }
       public function excluirProposta($negociacao_id){
           $this->db->where('negociacao_id',$negociacao_id);
           return $this->db->delete('negociacoes');
       }
       public function pegarNegociacaoId($id){
           $this->db->where('negociacao_id', $id);
           return $this->db->get('negociacoes')->result();   
       }
       
       public function editarNegociacao($negociacao_id){
           $dados['negociacao_status'] = 0;
           $dados['negociacao_aceitafornecedor'] = 0;
           $dados['negociacao_aceitacliente'] = 0;
           $dados['negociacao_qtd'] = $this->input->post('quantidade');
           $dados['negociacao_precounitario'] = $this->input->post('preco');
           $dados['negociacao_preco'] = $dados['negociacao_precounitario'] * $dados['negociacao_qtd'];
           $dados['negociacao_entrega'] =   $this->input->post('fornecedor_entrega');
           $this->db->where('negociacao_id', $negociacao_id);
           $this->db->update('negociacoes', $dados);
           
           $this->db->where('negociacao_id', $negociacao_id);
           $mensagem = 'A proposta da negociação foi alterada Observe os dados corretamente e faça a escolha de um prestador de serviços para' 
               .' dar mais opções de frete para seu cliente!<br>'.
               'Anuncio : <a href="'.base_url().'index.php/anuncios/visualizarproduto/'.$this->db->get("negociacoes")->row()->anuncio_id.'">'.$this->anuncios_model->pegarTituloPorId($this->db->get("negociacoes")->row()->anuncio_id).'</a><br>'.
               'Preco unitario : R$'.$dados['negociacao_precounitario'].'<br>'.
               'Quantidade : '.$dados['negociacao_qtd'].'<br>'.
               'Caso você entregue : '.$dados['negociacao_entrega'].'<br>';
           $this->anuncios_model->novanotificacao(3, $this->db->get("negociacoes")->row()->usuario2_id);
           return $this->usuarios_model->enviarMensagem($this->db->get("negociacoes")->row()->usuario2_id, $mensagem);
       }

             public function listarNegociacoes1($limit, $offset){
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->where('cotacao_id', 0);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
              public function qtdNegociacoes1(){
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->where('cotacao_id', 0);
           return $this->db->get('negociacoes')->num_rows();
       }
            public function listarNegociacoesUsu1($limit, $offset){
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
            $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('cotacao_id', 0);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
              public function qtdNegociacoesUsu1(){
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('cotacao_id', 0);
           return $this->db->get('negociacoes')->num_rows();
       }
         public function listarCotacoesUsu($usuario, $limit, $offset){
            $this->db->where('usuario_id', $usuario);
           $this->db->limit($limit,$offset);
           $this->db->order_by("cotacao_id","desc");
           return $this->db->get('cotacoes')->result();
       }
              public function qtdCotacoesUsu($usuario){
           $this->db->where('usuario_id', $usuario);
           return $this->db->get('cotacoes')->num_rows();
       }
       
       public function listarCotacoesNego($negociacao_id){
           $this->db->where('negociacao_id', $negociacao_id);
            $this->db->where('cotacao_finalizada', 0);
           return $this->db->get('cotacoes')->result();
           
       }
       
       public function pegarDistanciaEstimada($origem, $destino){
           $link = "http://maps.googleapis.com/maps/api/distancematrix/xml?origins=".$origem."&destinations=".$destino."&mode=driving&language=pt-BR&sensor=false";
            $curl = curl_init($link);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $transaction= curl_exec($curl);
        curl_close($curl);
           $xml = simplexml_load_string($transaction); //carrega o arquivo XML e retornando um Array
     
    
            return $xml->row->element->distance->text;
        
    }
    
    
    public function criarCotacao($negociacao_id){
        
        
        $dados['negociacao_id'] = $negociacao_id;
        
        $this->db->where('negociacao_id', $negociacao_id);
        $dados['cotacao_origem'] = $this->usuarios_model->cidadeEstado($this->db->get("negociacoes")->row()->usuario2_id);
        $dados['cotacao_destino'] = $this->usuarios_model->cidadeEstado($this->db->get("negociacoes")->row()->usuario1_id);
        $dados['cotacao_preco'] = $this->input->post('preco');
        $dados['cotacao_embarque'] = $this->input->post('prazo');
        $dados['cotacao_responsavel'] = $this->input->post('responsavel');
        $dados['usuario_id'] = $this->session->userdata['usuario_id'];
        $dados['cotacao_categoria'] = $this->anuncios_model->pegarTransportadoraTipo( $this->db->get("negociacoes")->row()->anuncio_id);
        $dados['cotacao_distancia'] = $this->negociacao_model->pegarDistanciaEstimada($this->usuarios_model->cidadeCotacao($this->db->get("negociacoes")->row()->usuario2_id),$this->usuarios_model->cidadeCotacao($this->db->get("negociacoes")->row()->usuario2_id));
        $this->db->insert('cotacoes', $dados);
        if($cotacao_responsavel == 0){
            $responsavel = "Transportadora";
        }else{
            $responsavel = "Contratante";
        }

        $mensagem = 'Você recebeu uma nova cotação para a negociação nº : '.$negociacao_id.'<br>'.
                'Prazo para embarque : '.$dados['cotacao_embarque'].' dias úteis'.'<br>'.
                'Responsável pela carga : '.$responsavel.'<br>'.
                'Preço : R$'.$dados['cotacao_preco'].'<br>'.
                'Visualize suas cotações ao clicar <a href="'.base_url().'index.php/dashboard/transportes">aqui</a>'.'<br>';
        
        $this->anuncios_model->novanotificacao(5, $this->db->get("negociacoes")->row()->usuario2_id);
        $this->anuncios_model->novanotificacao(3, $this->db->get("negociacoes")->row()->usuario2_id);
        return $this->usuarios_model->enviarMensagem($this->db->get("negociacoes")->row()->usuario2_id, $mensagem);
    }
    public function aceitarCotacao($cotacao_id){
        $this->db->where('cotacao_id', $cotacao_id);
        $negociacao = $this->db->get('cotacoes')->row()->negociacao_id;
        
        $this->db->where('negociacao_id', $negociacao);
        $dados['cotacao_id'] = $cotacao_id;
        $this->db->update('negociacoes', $dados);
        
       $this->db->where('cotacao_id', $cotacao_id);
       $data['cotacao_finalizada'] = 1;
       $this->db->update('cotacoes', $data);
       
       $this->db->where('cotacao_id', $cotacao_id);
       if($this->db->get('cotacoes')->row()->cotacao_responsavel == 0){
            $responsavel = "Transportadora";
        }else{
            $responsavel = "Contratante";
        }
        $mensagem = 'A sua cotação foi aceita, na seguinte negociação : '.$this->db->get('cotacoes')->row()->negociacao_id.'<br>'.
                'Prazo para embarque : '.$this->db->get('cotacoes')->row()->cotacao_embarque.' dias úteis'.'<br>'.
                'Responsável pela carga : '.$responsavel.'<br>'.
                'Preço : R$'.$this->db->get('cotacoes')->row()->cotacao_preco.'<br>'.
                'Origem : '.$this->db->get('cotacoes')->row()->cotacao_origem.'<br>'.
                'Destino : '.$this->db->get('cotacoes')->row()->cotacao_destino.'<br>'.
                'Comecem a planejar o horario de embarque!';
        
        $this->db->where('negociacao_id', $negociacao);
        $this->anuncios_model->novanotificacao(6, $this->db->get('cotacoes')->row()->usuario_id);
        $this->anuncios_model->novanotificacao(3, $this->db->get('cotacoes')->row()->usuario_id);
        return $this->usuarios_model->enviarMensagem($this->db->get('cotacoes')->row()->usuario_id, $mensagem);
    }
    
     public function recusarCotacao($cotacao_id){
        $this->db->where('cotacao_id', $cotacao_id);
        $negociacao = $this->db->get('cotacoes')->row()->negociacao_id;
       
       $data['cotacao_finalizada'] = 1;
       $this->db->where('cotacao_id', $cotacao_id);
       $this->db->update('cotacoes', $data);
       
       $this->db->where('cotacao_id', $cotacao_id);
       if($this->db->get('cotacoes')->row()->cotacao_responsavel == 0){
            $responsavel = "Transportadora";
        }else{
            $responsavel = "Contratante";
        }
        $mensagem = 'A sua cotação foi recusada, na seguinte negociação : '.$this->db->get('cotacoes')->row()->negociacao_id.'<br>'.
                'Você pode tentar novamente, ou procurar novas negociações para os transportes!';
        
        $this->db->where('negociacao_id', $negociacao);
        $this->anuncios_model->novanotificacao(6, $this->db->get('cotacoes')->row()->usuario_id);
        $this->anuncios_model->novanotificacao(3, $this->db->get('cotacoes')->row()->usuario_id);
        return $this->usuarios_model->enviarMensagem($this->db->get('cotacoes')->row()->usuario_id, $mensagem);
    }
      public function listarNegociacoesCotas1($limit, $offset){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->where('cotacao_id', 0);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           return $this->db->get('negociacoes')->result();
       }
       public function qtdNegociacoesCotas1(){
           $this->db->where('usuario2_id', $this->session->userdata['usuario_id']);
           $this->db->where('negociacao_status', 0);
           $this->db->where('cotacao_id', 0);
           $this->db->where('negociacao_cancelada', 0);
           return $this->db->get('negociacoes')->num_rows();
       }
    public function pegarCotacoesRecebidas($negociacao_id){
        $this->db->where('negociacao_id', $negociacao_id);
         $this->db->order_by("cotacao_id","desc");
         $this->db->where('cotacao_finalizada', 0);
       return $this->db->get('cotacoes')->result();
        
    }
    public function pegarNegociacoesPesquisa($limit, $offset, $normal, $viva, $controlada, $temp, $cidade){
        $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->where('cotacao_id', 0);
           $this->db->limit($limit,$offset);
           $this->db->order_by("negociacao_id","desc");
           
           
           
           
           
           return $this->db->get('negociacoes')->result();
    }
         
              public function qtddNegociacoesPesquisa(){
           $this->db->where('negociacao_status', 0);
           $this->db->where('negociacao_cancelada', 0);
           $this->db->where('cotacao_id', 0);
           return $this->db->get('negociacoes')->num_rows();
       }
}
