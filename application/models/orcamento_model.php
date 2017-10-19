<?php

class Orcamento_model extends CI_Model{
    
    function __construct(){
        
        parent::__construct();
    }
        public function pegarQtdOrcamentos(){
        return $this->db->count_all('orcamentos');
    }
    public function pegarOrcamentos($limit, $offset){
        $this->db->select('*');
         $this->db->limit($limit,$offset);
        $this->db->order_by("orcamento_id","desc");
        return $this->db->get('orcamentos')->result();
        
    }
    
    public function cadastrarOrcamento(){
        $this->load->model('usuarios_model');
        $categoria1 = $this->input->post('filtro1');
        $categoria2 = $this->input->post('filtro2');
        
             if($categoria1 == '0'){
            $dados['orcamento_categoria'] = 'Produção Vegetal';
        }else if($categoria1 == '1'){
            $dados['orcamento_categoria'] = 'Produção Animal';
        }else if($categoria1 == '2'){
            $dados['orcamento_categoria'] = 'Produção Florestal';
        }else if($categoria1 == '3'){
            $dados['orcamento_categoria'] = 'Pesca e Aquicultura';
        }else if($categoria1 == '4'){
            $dados['orcamento_categoria'] = 'Sementes e Mudas';
        }else if($categoria1 == '5'){
            $dados['orcamento_categoria'] = 'Defensivos e Fertilizantes, Químicos e Biológicos';
        }else if($categoria1 == '6'){
            $dados['orcamento_categoria'] = 'Máquinas, Equipamentos e Ferramentas';
        }else if($categoria1 == '7'){
            $dados['orcamento_categoria'] = 'Rações, Suplementos e Farmacêuticos';
        }else if($categoria1 == '8'){
           $dados['orcamento_categoria'] = 'Alimentos Beneficiados ou Transformados';
        }else if($categoria1 == '9'){
            $dados['anuncio_categoria1'] = 'Carnes e Laticínios';
        }else if($categoria1 == '10'){
          $dados['orcamento_categoria'] = 'Polpas, Sucos, Extratos e Bebidas';
        }else if($categoria1 == '11'){
           $dados['orcamento_categoria'] = 'Artefatos de Couro e Fabricação de Calçados';
        }else if($categoria1 == '12'){
            $dados['orcamento_categoria'] = 'Celulose, Papel e Produtos de Papel';
        }else if($categoria1 == '13'){
            $dados['orcamento_categoria'] = 'Fibras, Têxteis e Vestuário';
        }else if($categoria1 == '14'){
            $dados['orcamento_categoria'] = 'Combustíveis e Bioenergia';
        }else if($categoria1 == '15'){
            $dados['orcamento_categoria'] = 'Produtos do Fumo';
        }else if($categoria1 == '16'){
            $dados['orcamento_categoria'] = 'Produtos da Madeira';
        }else if($categoria1 == '17'){
           $dados['orcamento_categoria'] = 'Outros Produtos';
        }else if($categoria1 == '18'){
           $dados['orcamento_categoria'] = 'Transportes';
        }else if($categoria1 == '19'){
            $dados['orcamento_categoria'] = 'Armazenamento';
        }else if($categoria1 == '20'){
            $dados['orcamento_categoria'] = 'Intermediação Financeira e Seguros';
        }else if($categoria1 == '21'){
           $dados['orcamento_categoria'] = 'Consultorias e Recomendações';
        }else if($categoria1 == '22'){
           $dados['orcamento_categoria'] = 'Propriedades';
        }else if($categoria1 == '23'){
            $dados['orcamento_categoria'] = 'Engenharia, Testes/Análises Técnicas e P &amp; D';
        }else if($categoria1 == '24'){
          $dados['orcamento_categoria'] = 'Serviços Operacionais';
        }else if($categoria1 == '25'){
            $dados['orcamento_categoria'] = 'Outros Serviços';
        }
        
          if($categoria2 == '0'){
            $dados['orcamento_categoria2'] = 'Arroz, Trigo e Outros Cereais';
        }else if($categoria2 == '1'){
            $dados['orcamento_categoria2'] = 'Café em Grão';
        }else if($categoria2 == '2'){
            $dados['orcamento_categoria2'] = 'Laranja';
        }else if($categoria2 == '3'){
            $dados['orcamento_categoria2'] = 'Cana-de-açúcar';
        }else if($categoria2 == '4'){
            $dados['orcamento_categoria2'] = 'Milho em Grão';
        }else if($categoria2 == '5'){
            $dados['orcamento_categoria2'] = 'Soja  em Grão';
        }else if($categoria2 == '6'){
            $dados['orcamento_categoria2'] = 'Algodão';
        }else if($categoria2 == '7'){
            $dados['orcamento_categoria2'] = 'Frutas';
        }else if($categoria2 == '8'){
            $dados['orcamento_categoria2'] = 'Legumes';
        }else if($categoria2 == '9'){
            $dados['orcamento_categoria2'] = 'Verduras';
        }else if($categoria2 == '10'){
            $dados['orcamento_categoria2'] = 'Tubérculos';
        }else if($categoria2 == '11'){
            $dados['orcamento_categoria2'] = 'Oleaginosas e Sementes';
        } else if($categoria2 == '111'){
            $dados['orcamento_categoria2'] = 'Demais Produtos Agrícolas';
        }else if($categoria2 == '12'){
            $dados['orcamento_categoria2'] = 'Bovinos';
        }else if($categoria2 == '13'){
            $dados['orcamento_categoria2'] = 'Leite Cru';
        }else if($categoria2 == '14'){
            $dados['orcamento_categoria2'] = 'Suínos';
        }else if($categoria2 == '15'){
            $dados['orcamento_categoria2'] = 'Aves';
        }else if($categoria2 == '151'){
            $dados['orcamento_categoria2'] = 'Ovos';
        }else if($categoria2 == '16'){
            $dados['orcamento_categoria2'] = 'Outros Animais Vivos';
        }else if($categoria2 == '17'){
            $dados['orcamento_categoria2'] = 'Outros Produtos de Origem Animal';
        }else if($categoria2 == '18'){
            $dados['orcamento_categoria2'] = 'Silvicultura';
        }else if($categoria2 == '19'){
            $dados['orcamento_categoria2'] = 'Extração Vegetal';
        }else if($categoria2 == '20'){
            $dados['orcamento_categoria2'] = 'Peixes';
        }else if($categoria2 == '21'){
            $dados['orcamento_categoria2'] = 'Moluscos';
        }else if($categoria2 == '22'){
            $dados['orcamento_categoria2'] = 'Crustáceos';
        }else if($categoria2 == '23'){
            $dados['orcamento_categoria2'] = 'Demais Produtos da Pesca e Aquicultura';
        }else if($categoria2 == '24'){
            $dados['orcamento_categoria2'] = 'Adubos e Fertilizantes';
        }else if($categoria2 == '25'){
            $dados['orcamento_categoria2'] = 'Defensivos Agrícolas';
        }else if($categoria2 == '26'){
            $dados['orcamento_categoria2'] = 'Controles Biológicos';
        }else if($categoria2 == '27'){
            $dados['orcamento_categoria2'] = 'Máquinas Agrícolas';
        }else if($categoria2 == '28'){
            $$dados['orcamento_categoria2'] = 'Máquinas e Veículos de Transporte';
        }else if($categoria2 == '29'){
            $dados['orcamento_categoria2'] = 'Implementos Agrícolas';
        }else if($categoria2 == '30'){
            $dados['orcamento_categoria2'] = 'Peças';
        }else if($categoria2 == '31'){
            $dados['orcamento_categoria2'] = 'Instalações Rurais';
        }else if($categoria2 == '32'){
           $dados['orcamento_categoria2'] = 'Irrigação, Metereologia e Agricultura de Precisão';
        }else if($categoria2 == '33'){
            $dados['orcamento_categoria2'] = 'Equipamentos, Ferramentas e EPIs';
        }else if($categoria2 == '34'){
            $dados['orcamento_categoria2'] = 'Rações e Outros Produtos Alimentares';
        }else if($categoria2 == '35'){
            $dados['orcamento_categoria2'] = 'Farmacêuticos para Animais';
        }else if($categoria2 == '36'){
            $dados['orcamento_categoria2'] = 'Açúcares e Doces';
        }else if($categoria2 == '37'){
            $dados['orcamento_categoria2'] = 'Arroz Beneficiado e Derivados';
        }else if($categoria2 == '38'){
            $dados['orcamento_categoria2'] = 'Café Beneficiado e Derivados';
        }else if($categoria2 == '39'){
            $dados['orcamento_categoria2'] = 'Trigo, Mandioca ou Milho Beneficiados e Derivados';
        }else if($categoria2 == '40'){
            $dados['orcamento_categoria2'] = 'Óleos e Gorduras Vegetais e Animais';
        }else if($categoria2 == '41'){
            $dados['orcamento_categoria2'] = 'Carne Bovina';
        }else if($categoria2 == '42'){
            $dados['orcamento_categoria2'] = 'Leite Pasteurizado';
        }else if($categoria2 == '43'){
            $dados['orcamento_categoria2'] = 'Laticínios';
        }else if($categoria2 == '44'){
            $dados['orcamento_categoria2'] = 'Artefatos de Couro';
        }else if($categoria2 == '45'){
            $dados['orcamento_categoria2'] = 'Insumos para Calçados';
        }else if($categoria2 == '46'){
            $dados['orcamento_categoria2'] = 'Seguros';
        }else if($categoria2 == '47'){
            $dados['orcamento_categoria2'] = 'Testes/ Análises Técnicas';
        }else{
            $dados['orcamento_categoria2'] = $this->input->post('filtro2');
        }
        
        $dados['orcamento_categoria3'] = $this->input->post('filtro3');
         $dados['orcamento_titulo'] = $this->input->post('titulo');
        $dados['orcamento_qtd'] = $this->input->post('qtd');
        $dados['orcamento_unidade'] = $this->input->post('unitbox');
        $dados['orcamento_detalhes'] =   $this->input->post('txtDescricao');      
        $dados['orcamento_preco'] =   $this->input->post('preco');
        $credito = $this->input->post('credito'); 
        if((int)$credito == 1){
             $dados['orcamento_creditoon'] = 1;
        }else{
            $dados['orcamento_creditoon'] = 0;
        }
          $exw = $this->input->post('exw'); 
        if((int)$exw == 1){
             $dados['orcamento_exwon'] = 1;
        }else{
            $dados['orcamento_exwon'] = 0;
        }
          $ddp = $this->input->post('ddp'); 
        if((int)$ddp == 1){
             $dados['orcamento_ddpon'] = 1;
        }else{
            $dados['orcamento_ddpon'] = 0;
        }
          $leva = $this->input->post('leva'); 
        if((int)$leva == 1){
             $dados['orcamento_levaon'] = 1;
        }else{
            $dados['orcamento_levaon'] = 0;
        }
          $busca = $this->input->post('busca'); 
        if((int)$busca == 1){
             $dados['orcamento_buscaon'] = 1;
        }else{
            $dados['orcamento_buscaon'] = 0;
        }
        
        if($this->usuarios_model->checarSessao() == true){
            $dados['orcamento_logado'] = 1;
            $dados['usuario_id'] = $this->session->userdata['usuario_id'];
        }else{
            $paraEmail['email_dados'] = $this->input->post('email');
            $paraEmail['email_numero']= $this->input->post('numero');
            $this->db->insert('emails', $paraEmail);
            $dados['orcamento_logado'] = 0;
            $dados['email_id'] = $this->db->insert_id();
        }
        
     $name = "img1".md5(time());
     $curriculo    = $_FILES['image1'];
     $configuracao = array(
         'upload_path'   => 'assets/uploads/orcamentos/',
         'allowed_types' => 'jpg|png',
         'file_name'     => $name.'.jpg',
       'max_size'      => '2048'
     );      
     $this->load->library('upload');
     $this->upload->initialize($configuracao);
     if ($this->upload->do_upload('image1')){
     $dados['orcamento_imagem1'] = $configuracao['upload_path'].$configuracao['file_name'];
 }
    
       
        
        $name = "img2" .md5(time());
        $curriculo = $_FILES['image2'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image2')) {
            $dados['orcamento_imagem2'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
       

          $name = "img3" .md5(time());
        $curriculo = $_FILES['image3'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        
       
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image3')) {
           $dados['orcamento_imagem3'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
       
        
          $name = "img4".md5(time());
        $curriculo = $_FILES['image4'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image4')) {
            $dados['orcamento_imagem4'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
       
        
         $name = "img5".md5(time());
        $curriculo = $_FILES['image5'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image5')) {
           $dados['orcamento_imagem5'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
        
        
        
        
        if($this->db->insert("orcamentos", $dados)){
              return true;
          }else{
              return false;
          }  
    }
        public function pegarOrcamentoId($id){
            $this->db->where('orcamento_id',$id);
            return $this->db->get('orcamentos')->result();
        }
        public function contarOrcamentoId($id){
              $this->db->where('orcamento_id',$id);
              return $this->db->get('orcamentos')->num_rows();
        }
    
      public function pegarQtdOrcamentosUsu() {
        $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
        return $this->db->get('orcamentos')->num_rows();
    }

    public function pegarOrcamentosUsuId($id, $limit, $offset){
        $this->db->select('*');
        $this->db->where('usuario_id',$id);
         $this->db->limit($limit,$offset);
        $this->db->order_by("orcamento_id","desc");
        
        return $this->db->get('orcamentos')->result();
        
    }
    public function editarOrcamento($id){
        
          $this->load->model('usuarios_model');
        $categoria1 = $this->input->post('filtro1');
        $categoria2 = $this->input->post('filtro2');
        
             if($categoria1 == '0'){
            $dados['orcamento_categoria'] = 'Produção Vegetal';
        }else if($categoria1 == '1'){
            $dados['orcamento_categoria'] = 'Produção Animal';
        }else if($categoria1 == '2'){
            $dados['orcamento_categoria'] = 'Produção Florestal';
        }else if($categoria1 == '3'){
            $dados['orcamento_categoria'] = 'Pesca e Aquicultura';
        }else if($categoria1 == '4'){
            $dados['orcamento_categoria'] = 'Sementes e Mudas';
        }else if($categoria1 == '5'){
            $dados['orcamento_categoria'] = 'Defensivos e Fertilizantes, Químicos e Biológicos';
        }else if($categoria1 == '6'){
            $dados['orcamento_categoria'] = 'Máquinas, Equipamentos e Ferramentas';
        }else if($categoria1 == '7'){
            $dados['orcamento_categoria'] = 'Rações, Suplementos e Farmacêuticos';
        }else if($categoria1 == '8'){
           $dados['orcamento_categoria'] = 'Alimentos Beneficiados ou Transformados';
        }else if($categoria1 == '9'){
            $dados['anuncio_categoria1'] = 'Carnes e Laticínios';
        }else if($categoria1 == '10'){
          $dados['orcamento_categoria'] = 'Polpas, Sucos, Extratos e Bebidas';
        }else if($categoria1 == '11'){
           $dados['orcamento_categoria'] = 'Artefatos de Couro e Fabricação de Calçados';
        }else if($categoria1 == '12'){
            $dados['orcamento_categoria'] = 'Celulose, Papel e Produtos de Papel';
        }else if($categoria1 == '13'){
            $dados['orcamento_categoria'] = 'Fibras, Têxteis e Vestuário';
        }else if($categoria1 == '14'){
            $dados['orcamento_categoria'] = 'Combustíveis e Bioenergia';
        }else if($categoria1 == '15'){
            $dados['orcamento_categoria'] = 'Produtos do Fumo';
        }else if($categoria1 == '16'){
            $dados['orcamento_categoria'] = 'Produtos da Madeira';
        }else if($categoria1 == '17'){
           $dados['orcamento_categoria'] = 'Outros Produtos';
        }else if($categoria1 == '18'){
           $dados['orcamento_categoria'] = 'Transportes';
        }else if($categoria1 == '19'){
            $dados['orcamento_categoria'] = 'Armazenamento';
        }else if($categoria1 == '20'){
            $dados['orcamento_categoria'] = 'Intermediação Financeira e Seguros';
        }else if($categoria1 == '21'){
           $dados['orcamento_categoria'] = 'Consultorias e Recomendações';
        }else if($categoria1 == '22'){
           $dados['orcamento_categoria'] = 'Propriedades';
        }else if($categoria1 == '23'){
            $dados['orcamento_categoria'] = 'Engenharia, Testes/Análises Técnicas e P &amp; D';
        }else if($categoria1 == '24'){
          $dados['orcamento_categoria'] = 'Serviços Operacionais';
        }else if($categoria1 == '25'){
            $dados['orcamento_categoria'] = 'Outros Serviços';
        }
        
          if($categoria2 == '0'){
            $dados['orcamento_categoria2'] = 'Arroz, Trigo e Outros Cereais';
        }else if($categoria2 == '1'){
            $dados['orcamento_categoria2'] = 'Café em Grão';
        }else if($categoria2 == '2'){
            $dados['orcamento_categoria2'] = 'Laranja';
        }else if($categoria2 == '3'){
            $dados['orcamento_categoria2'] = 'Cana-de-açúcar';
        }else if($categoria2 == '4'){
            $dados['orcamento_categoria2'] = 'Milho em Grão';
        }else if($categoria2 == '5'){
            $dados['orcamento_categoria2'] = 'Soja  em Grão';
        }else if($categoria2 == '6'){
            $dados['orcamento_categoria2'] = 'Algodão';
        }else if($categoria2 == '7'){
            $dados['orcamento_categoria2'] = 'Frutas';
        }else if($categoria2 == '8'){
            $dados['orcamento_categoria2'] = 'Legumes';
        }else if($categoria2 == '9'){
            $dados['orcamento_categoria2'] = 'Verduras';
        }else if($categoria2 == '10'){
            $dados['orcamento_categoria2'] = 'Tubérculos';
        }else if($categoria2 == '11'){
            $dados['orcamento_categoria2'] = 'Oleaginosas e Sementes';
        } else if($categoria2 == '111'){
            $dados['orcamento_categoria2'] = 'Demais Produtos Agrícolas';
        }else if($categoria2 == '12'){
            $dados['orcamento_categoria2'] = 'Bovinos';
        }else if($categoria2 == '13'){
            $dados['orcamento_categoria2'] = 'Leite Cru';
        }else if($categoria2 == '14'){
            $dados['orcamento_categoria2'] = 'Suínos';
        }else if($categoria2 == '15'){
            $dados['orcamento_categoria2'] = 'Aves';
        }else if($categoria2 == '151'){
            $dados['orcamento_categoria2'] = 'Ovos';
        }else if($categoria2 == '16'){
            $dados['orcamento_categoria2'] = 'Outros Animais Vivos';
        }else if($categoria2 == '17'){
            $dados['orcamento_categoria2'] = 'Outros Produtos de Origem Animal';
        }else if($categoria2 == '18'){
            $dados['orcamento_categoria2'] = 'Silvicultura';
        }else if($categoria2 == '19'){
            $dados['orcamento_categoria2'] = 'Extração Vegetal';
        }else if($categoria2 == '20'){
            $dados['orcamento_categoria2'] = 'Peixes';
        }else if($categoria2 == '21'){
            $dados['orcamento_categoria2'] = 'Moluscos';
        }else if($categoria2 == '22'){
            $dados['orcamento_categoria2'] = 'Crustáceos';
        }else if($categoria2 == '23'){
            $dados['orcamento_categoria2'] = 'Demais Produtos da Pesca e Aquicultura';
        }else if($categoria2 == '24'){
            $dados['orcamento_categoria2'] = 'Adubos e Fertilizantes';
        }else if($categoria2 == '25'){
            $dados['orcamento_categoria2'] = 'Defensivos Agrícolas';
        }else if($categoria2 == '26'){
            $dados['orcamento_categoria2'] = 'Controles Biológicos';
        }else if($categoria2 == '27'){
            $dados['orcamento_categoria2'] = 'Máquinas Agrícolas';
        }else if($categoria2 == '28'){
            $$dados['orcamento_categoria2'] = 'Máquinas e Veículos de Transporte';
        }else if($categoria2 == '29'){
            $dados['orcamento_categoria2'] = 'Implementos Agrícolas';
        }else if($categoria2 == '30'){
            $dados['orcamento_categoria2'] = 'Peças';
        }else if($categoria2 == '31'){
            $dados['orcamento_categoria2'] = 'Instalações Rurais';
        }else if($categoria2 == '32'){
           $dados['orcamento_categoria2'] = 'Irrigação, Metereologia e Agricultura de Precisão';
        }else if($categoria2 == '33'){
            $dados['orcamento_categoria2'] = 'Equipamentos, Ferramentas e EPIs';
        }else if($categoria2 == '34'){
            $dados['orcamento_categoria2'] = 'Rações e Outros Produtos Alimentares';
        }else if($categoria2 == '35'){
            $dados['orcamento_categoria2'] = 'Farmacêuticos para Animais';
        }else if($categoria2 == '36'){
            $dados['orcamento_categoria2'] = 'Açúcares e Doces';
        }else if($categoria2 == '37'){
            $dados['orcamento_categoria2'] = 'Arroz Beneficiado e Derivados';
        }else if($categoria2 == '38'){
            $dados['orcamento_categoria2'] = 'Café Beneficiado e Derivados';
        }else if($categoria2 == '39'){
            $dados['orcamento_categoria2'] = 'Trigo, Mandioca ou Milho Beneficiados e Derivados';
        }else if($categoria2 == '40'){
            $dados['orcamento_categoria2'] = 'Óleos e Gorduras Vegetais e Animais';
        }else if($categoria2 == '41'){
            $dados['orcamento_categoria2'] = 'Carne Bovina';
        }else if($categoria2 == '42'){
            $dados['orcamento_categoria2'] = 'Leite Pasteurizado';
        }else if($categoria2 == '43'){
            $dados['orcamento_categoria2'] = 'Laticínios';
        }else if($categoria2 == '44'){
            $dados['orcamento_categoria2'] = 'Artefatos de Couro';
        }else if($categoria2 == '45'){
            $dados['orcamento_categoria2'] = 'Insumos para Calçados';
        }else if($categoria2 == '46'){
            $dados['orcamento_categoria2'] = 'Seguros';
        }else if($categoria2 == '47'){
            $dados['orcamento_categoria2'] = 'Testes/ Análises Técnicas';
        }else{
            $dados['orcamento_categoria2'] = $this->input->post('filtro2');
        }
        
        $dados['orcamento_categoria3'] = $this->input->post('filtro3');
         $dados['orcamento_titulo'] = $this->input->post('titulo');
        $dados['orcamento_qtd'] = $this->input->post('qtd');
        $dados['orcamento_unidade'] = $this->input->post('unitbox');
        $dados['orcamento_detalhes'] =   $this->input->post('txtDescricao');      
        $dados['orcamento_preco'] =   $this->input->post('preco');
        $credito = $this->input->post('credito'); 
        if((int)$credito == 1){
             $dados['orcamento_creditoon'] = 1;
        }else{
            $dados['orcamento_creditoon'] = 0;
        }
          $exw = $this->input->post('exw'); 
        if((int)$exw == 1){
             $dados['orcamento_exwon'] = 1;
        }else{
            $dados['orcamento_exwon'] = 0;
        }
          $ddp = $this->input->post('ddp'); 
        if((int)$ddp == 1){
             $dados['orcamento_ddpon'] = 1;
        }else{
            $dados['orcamento_ddpon'] = 0;
        }
          $leva = $this->input->post('leva'); 
        if((int)$leva == 1){
             $dados['orcamento_levaon'] = 1;
        }else{
            $dados['orcamento_levaon'] = 0;
        }
          $busca = $this->input->post('busca'); 
        if((int)$busca == 1){
             $dados['orcamento_buscaon'] = 1;
        }else{
            $dados['orcamento_buscaon'] = 0;
        }
        
        if($this->usuarios_model->checarSessao() == true){
            $dados['orcamento_logado'] = 1;
            $dados['usuario_id'] = $this->session->userdata['usuario_id'];
        }else{
            $paraEmail['email_dados'] = $this->input->post('email');
            $paraEmail['email_numero']= $this->input->post('numero');
            $this->db->insert('emails', $paraEmail);
            $dados['orcamento_logado'] = 0;
            $dados['email_id'] = $this->db->insert_id();
        }
        
     $name = "img1".md5(time());
     $curriculo    = $_FILES['image1'];
        if(isset($curriculo)){
     $configuracao = array(
         'upload_path'   => 'assets/uploads/orcamentos/',
         'allowed_types' => 'jpg|png',
         'file_name'     => $name.'.jpg',
       'max_size'      => '2048'
     );      
     $this->load->library('upload');
     $this->upload->initialize($configuracao);
     if ($this->upload->do_upload('image1')){
     $dados['orcamento_imagem1'] = $configuracao['upload_path'].$configuracao['file_name'];
 }
        }
       
        
        $name = "img2" .md5(time());
        $curriculo = $_FILES['image2'];
        if(isset($curriculo)){
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image2')) {
            $dados['orcamento_imagem2'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
        }
       

          $name = "img3" .md5(time());
        $curriculo = $_FILES['image3'];
        if(isset($curriculo)){
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        
       
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image3')) {
           $dados['orcamento_imagem3'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
        }
       
        
          $name = "img4".md5(time());
        $curriculo = $_FILES['image4'];
        if(isset($curriculo)){
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image4')) {
            $dados['orcamento_imagem4'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
        }
        
         $name = "img5".md5(time());
        $curriculo = $_FILES['image5'];
        if(isset($curriculo)){
        $configuracao = array(
            'upload_path' => 'assets/uploads/orcamentos/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image5')) {
           $dados['orcamento_imagem5'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }
        }
        
        
        
        $this->db->where('orcamento_id', $id);
        if($this->db->update("orcamentos", $dados)){
              return true;
          }else{
              return false;
          }  
        
    }
    
       public function pegarOrcamentosPesquisa($limit, $offset){
        $pesquisa = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('orcamento_titulo',$pesquisa);
        $this->db->limit($limit,$offset);
        $this->db->order_by("orcamento_id","desc");
        return $this->db->get('orcamentos')->result();
        
    }
  public function pegarQtdPesquisa(){
       $pesquisa = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('orcamento_titulo',$pesquisa);
        $resultado = $this->db->get('orcamentos');
        $resultado2 = $resultado->num_rows();
       
        return $resultado2;
    }
    
    
    
}