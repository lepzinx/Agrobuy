<?php

/**
 * negociacao_model short summary.
 *
 * negociacao_model description.
 *
 * @version 1.0
 * @author Lepzinx
 */
class Negociacao_model extends CI_Model{
    // Disputas

       public function novaDisputa($negociacao_id){
           $this->load->model('usuarios_model');
           $dados['negociacao_id'] = $negociacao_id;
           $dados['disputa_qual'] = $this->input->post('disputa_qual');
           $dados['disputa_desejo1'] = $this->input->post('disputa_desejo1');
           $dados['disputa_desejo2'] = $this->input->post('disputa_desejo2');
           $dados['disputa_oque'] = $this->input->post('disputa_oque');
           $dados['disputa_detalhe1'] = $this->input->post('disputa_detalhe1');
           $dados['disputa_detalhe2'] = $this->input->post('disputa_detalhe2');
           $dados['disputa_detalhe3'] = $this->input->post('disputa_detalhe3');
           $dados['disputa_mensagem'] = $this->input->post('disputa_mensagem');
           $this->db->insert('disputas', $dados);

           $mensagem = "Uma nova <strong>disputa</strong> foi iniciada, identificação : ". $this->db->insert_id() ."<br><br>".
               "responda em no máximo três dias, caso contrário a Agrobuy irá interceder.<br><br><br>".
               "<strong> Qual foi o problema ? </strong><br>" . $dados['disputa_qual'] . "<br><br><br>".
               "<strong> Desejo(s) do usuário :  </strong><br>" . $dados['disputa_desejo1'] . "<br>". $dados['disputa_desejo2']."<br><br><br>".
               "<strong> O que, exatamente, aconteceu?</strong><br>" . $dados['disputa_oque'] . "<br><br><br>".
               "<strong> Mais detalhes :  </strong><br>" . $dados['disputa_detalhes1'] . "<br>". $dados['disputa_detalhes2']."<br>". $dados['disputa_detalhes3']."<br><br><br>".
               "<strong> Mensagem do usuario : </strong><br>" . $dados['disputa_mensagem'] . "<br>";
           $this->db->where('negociacao_id', $negociacao_id);
           $para = $this->db->get('negociacoes')->row()->usuario2_id;
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
           return $this->db->update('disputas', $dados);
       }
}
