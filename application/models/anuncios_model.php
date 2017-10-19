<?php

class Anuncios_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    public function cadastroAnuncioCate() {
        $categoria1 = $this->input->post('filtro1');
        $categoria2 = $this->input->post('filtro2');



        if($categoria1 == '0'){
            $dados['anuncio_categoria1'] = 'Produção Vegetal';
        }else if($categoria1 == '1'){
            $dados['anuncio_categoria1'] = 'Produção Animal';
        }else if($categoria1 == '2'){
            $dados['anuncio_categoria1'] = 'Produção Florestal';
        }else if($categoria1 == '3'){
            $dados['anuncio_categoria1'] = 'Pesca e Aquicultura';
        }else if($categoria1 == '4'){
            $dados['anuncio_categoria1'] = 'Sementes e Mudas';
        }else if($categoria1 == '5'){
            $dados['anuncio_categoria1'] = 'Defensivos e Fertilizantes, Químicos e Biológicos';
        }else if($categoria1 == '6'){
            $dados['anuncio_categoria1'] = 'Máquinas, Equipamentos e Ferramentas';
        }else if($categoria1 == '7'){
            $dados['anuncio_categoria1'] = 'Rações, Suplementos e Farmacêuticos';
        }else if($categoria1 == '8'){
            $dados['anuncio_categoria1'] = 'Alimentos Beneficiados ou Transformados';
        }else if($categoria1 == '9'){
            $dados['anuncio_categoria1'] = 'Carnes e Laticínios';
        }else if($categoria1 == '10'){
            $dados['anuncio_categoria1'] = 'Polpas, Sucos, Extratos e Bebidas';
        }else if($categoria1 == '11'){
            $dados['anuncio_categoria1'] = 'Artefatos de Couro e Fabricação de Calçados';
        }else if($categoria1 == '12'){
            $dados['anuncio_categoria1'] = 'Celulose, Papel e Produtos de Papel';
        }else if($categoria1 == '13'){
            $dados['anuncio_categoria1'] = 'Fibras, Têxteis e Vestuário';
        }else if($categoria1 == '14'){
            $dados['anuncio_categoria1'] = 'Combustíveis e Bioenergia';
        }else if($categoria1 == '15'){
            $dados['anuncio_categoria1'] = 'Produtos do Fumo';
        }else if($categoria1 == '16'){
            $dados['anuncio_categoria1'] = 'Produtos da Madeira';
        }else if($categoria1 == '17'){
            $dados['anuncio_categoria1'] = 'Outros Produtos';
        }else if($categoria1 == '18'){
            $dados['anuncio_categoria1'] = 'Transportes';
        }else if($categoria1 == '19'){
            $dados['anuncio_categoria1'] = 'Armazenamento';
        }else if($categoria1 == '20'){
            $dados['anuncio_categoria1'] = 'Intermediação Financeira e Seguros';
        }else if($categoria1 == '21'){
            $dados['anuncio_categoria1'] = 'Consultorias e Recomendações';
        }else if($categoria1 == '22'){
            $dados['anuncio_categoria1'] = 'Propriedades';
        }else if($categoria1 == '23'){
            $dados['anuncio_categoria1'] = 'Engenharia, Testes/Análises Técnicas e P &amp; D';
        }else if($categoria1 == '24'){
            $dados['anuncio_categoria1'] = 'Serviços Operacionais';
        }else if($categoria1 == '25'){
            $dados['anuncio_categoria1'] = 'Outros Serviços';
        }




               if($categoria2 == '0'){
            $dados['anuncio_categoria2'] = 'Arroz, Trigo e Outros Cereais';
        }else if($categoria2 == '1'){
            $dados['anuncio_categoria2'] = 'Café em Grão';
        }else if($categoria2 == '2'){
            $dados['anuncio_categoria2'] = 'Laranja';
        }else if($categoria2 == '3'){
            $dados['anuncio_categoria2'] = 'Cana-de-açúcar';
        }else if($categoria2 == '4'){
            $dados['anuncio_categoria2'] = 'Milho em Grão';
        }else if($categoria2 == '5'){
            $dados['anuncio_categoria2'] = 'Soja  em Grão';
        }else if($categoria2 == '6'){
            $dados['anuncio_categoria2'] = 'Algodão';
        }else if($categoria2 == '7'){
            $dados['anuncio_categoria2'] = 'Frutas';
        }else if($categoria2 == '8'){
            $dados['anuncio_categoria2'] = 'Legumes';
        }else if($categoria2 == '9'){
            $dados['anuncio_categoria2'] = 'Verduras';
        }else if($categoria2 == '10'){
            $dados['anuncio_categoria2'] = 'Tubérculos';
        }else if($categoria2 == '11'){
            $dados['anuncio_categoria2'] = 'Oleaginosas e Sementes';
        } else if($categoria2 == '111'){
            $dados['anuncio_categoria2'] = 'Demais Produtos Agrícolas';
        }else if($categoria2 == '12'){
            $dados['anuncio_categoria2'] = 'Bovinos';
        }else if($categoria2 == '13'){
            $dados['anuncio_categoria2'] = 'Leite Cru';
        }else if($categoria2 == '14'){
            $dados['anuncio_categoria2'] = 'Suínos';
        }else if($categoria2 == '15'){
            $dados['anuncio_categoria2'] = 'Aves';
        }else if($categoria2 == '151'){
            $dados['anuncio_categoria2'] = 'Ovos';
        }else if($categoria2 == '16'){
            $dados['anuncio_categoria2'] = 'Outros Animais Vivos';
        }else if($categoria2 == '17'){
            $dados['anuncio_categoria2'] = 'Outros Produtos de Origem Animal';
        }else if($categoria2 == '18'){
            $dados['anuncio_categoria2'] = 'Silvicultura';
        }else if($categoria2 == '19'){
            $dados['anuncio_categoria2'] = 'Extração Vegetal';
        }else if($categoria2 == '20'){
            $dados['anuncio_categoria2'] = 'Peixes';
        }else if($categoria2 == '21'){
            $dados['anuncio_categoria2'] = 'Moluscos';
        }else if($categoria2 == '22'){
            $dados['anuncio_categoria2'] = 'Crustáceos';
        }else if($categoria2 == '23'){
            $dados['anuncio_categoria2'] = 'Demais Produtos da Pesca e Aquicultura';
        }else if($categoria2 == '24'){
            $dados['anuncio_categoria2'] = 'Adubos e Fertilizantes';
        }else if($categoria2 == '25'){
            $dados['anuncio_categoria2'] = 'Defensivos Agrícolas';
        }else if($categoria2 == '26'){
            $dados['anuncio_categoria2'] = 'Controles Biológicos';
        }else if($categoria2 == '27'){
            $dados['anuncio_categoria2'] = 'Máquinas Agrícolas';
        }else if($categoria2 == '28'){
            $dados['anuncio_categoria2'] = 'Máquinas e Veículos de Transporte';
        }else if($categoria2 == '29'){
            $dados['anuncio_categoria2'] = 'Implementos Agrícolas';
        }else if($categoria2 == '30'){
            $dados['anuncio_categoria2'] = 'Peças';
        }else if($categoria2 == '31'){
            $dados['anuncio_categoria2'] = 'Instalações Rurais';
        }else if($categoria2 == '32'){
            $dados['anuncio_categoria2'] = 'Irrigação, Metereologia e Agricultura de Precisão';
        }else if($categoria2 == '33'){
            $dados['anuncio_categoria2'] = 'Equipamentos, Ferramentas e EPIs';
        }else if($categoria2 == '34'){
            $dados['anuncio_categoria2'] = 'Rações e Outros Produtos Alimentares';
        }else if($categoria2 == '35'){
            $dados['anuncio_categoria2'] = 'Farmacêuticos para Animais';
        }else if($categoria2 == '36'){
            $dados['anuncio_categoria2'] = 'Açúcares e Doces';
        }else if($categoria2 == '37'){
            $dados['anuncio_categoria2'] = 'Arroz Beneficiado e Derivados';
        }else if($categoria2 == '38'){
            $dados['anuncio_categoria2'] = 'Café Beneficiado e Derivados';
        }else if($categoria2 == '39'){
            $dados['anuncio_categoria2'] = 'Trigo, Mandioca ou Milho Beneficiados e Derivados';
        }else if($categoria2 == '40'){
            $dados['anuncio_categoria2'] = 'Óleos e Gorduras Vegetais e Animais';
        }else if($categoria2 == '41'){
            $dados['anuncio_categoria2'] = 'Carne Bovina';
        }else if($categoria2 == '42'){
            $dados['anuncio_categoria2'] = 'Leite Pasteurizado';
        }else if($categoria2 == '43'){
            $dados['anuncio_categoria2'] = 'Laticínios';
        }else if($categoria2 == '44'){
            $dados['anuncio_categoria2'] = 'Artefatos de Couro';
        }else if($categoria2 == '45'){
            $dados['anuncio_categoria2'] = 'Insumos para Calçados';
        }else if($categoria2 == '46'){
            $dados['anuncio_categoria2'] = 'Seguros';
        }else if($categoria2 == '47'){
            $dados['anuncio_categoria2'] = 'Testes/ Análises Técnicas';
        }else{
            $dados['anuncio_categoria2'] = $this->input->post('filtro2');
        }

        $dados['anuncio_categoria3'] = $this->input->post('filtro3');
        $dados['usuario_id'] = $this->session->userdata['usuario_id'];

        if (empty($this->session->userdata['cadastroProduto'])) {
            $this->db->insert("anuncios", $dados);
            if ($this->db->affected_rows() > 0) {
                $id['cadastroProduto'] = $this->db->insert_id();
                $this->session->set_userdata($id);
                return true;
            } else {
                return false;
            }
        } else {
            $this->db->where('anuncio_id', $this->session->userdata['cadastroProduto']);
            if ($this->db->update('anuncios', $dados)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function cadastroAnuncioDados(){
        $dados['anuncio_titulo'] = $this->input->post('title');
        $tipo_preco = $this->input->post('pvis');
        if($tipo_preco == 'visivel'){
            $dados['anuncio_tipopreco'] = 0; // Preço é visivel
        }else  if($tipo_preco == 'consulta'){
            $dados['anuncio_tipopreco'] = 1; // Sob Consulta
        }
        $dados['anuncio_preco'] = $this->input->post('pprice');
        $dados['anuncio_unidade'] = $this->input->post('unitbox');
        $negociavel = $this->input->post('negociavel');
        if((int)$negociavel == 1){
            $dados['anuncio_negociavel'] = 1;
        }else{
            $dados['anuncio_negociavel'] = 0;
        }
        $pedidoMinimo = $this->input->post('pedidominimo');
         if((int)$pedidoMinimo == 1){
            $dados['anuncio_pedidominimo'] = 1;
            $dados['anuncio_qtdminimo'] = $this->input->post('minqt');
        }else{
            $dados['anuncio_pedidominimo'] = 0;
            $dados['anuncio_qtdminimo'] = 0;
        }
         $dados['anuncio_disponibilidade'] = $this->input->post('available');
         $dados['anuncio_condicao'] = $this->input->post('options');
         $entregaOn = $this->input->post('transportadora');
         if((int)$entregaOn == 1){
             $dados['anuncio_transportadoraon'] = 1;
               $tipo = $this->input->post('toptions');
               if($tipo == 'exw'){
                   $dados['anuncio_transportadoratermos'] = 1; //EXW
               }else if($tipo == 'ddp'){
                   $dados['anuncio_transportadoratermos'] = 0; //DDPs
               }

               $tipo = $this->input->post('optionstipo');
                 if($tipo == 'Padrao'){
                   $dados['anuncio_transportadoratipo'] = 0; //Padrão
               }else if($tipo == 'Viva'){
                   $dados['anuncio_transportadoratipo'] = 1; //Viva
               }else if($tipo == 'Controlada'){
                   $dados['anuncio_transportadoratipo'] = 2; //Controlada
               }else if($tipo == 'TempControladas'){
                   $dados['anuncio_transportadoratipo'] = 3; //Temperatura Controlada
               }


         }else{
             $dados['anuncio_transportadoraon'] = 0;
         }
         $correio = $this->input->post('correio');

        if((int)$correio == 1){
             $dados['anuncio_correioon'] = 1;
               $sedex = $this->input->post('sedex');
               if((int)$sedex == 1){
                   $dados['anuncio_sedexon'] = 1; //SEDEX LIGADO
               }else{
                   $dados['anuncio_sedexon'] = 0; //SOMENTE PAC
               }
         }else{
             $dados['anuncio_correioon'] = 0;
         }
         $negociantes = $this->input->post('negociantesOn');

         if((int)$negociantes == 1){
              $dados['anuncio_negociantes'] = 1;
                 $negocio1 = $this->input->post('negociado');
                 $negocio2 = $this->input->post('negociado1');
               if((int)$negocio1 == 1){
                   $dados['anuncio_negociantesleva'] = 1; //Leva
               }else{
                 $dados['anuncio_negociantesleva'] = 0; //Leva
               }
               if((int)$negocio2 == 1){
                   $dados['anuncio_negociantesbusca'] = 1; //Cliente busca
               }else{
                 $dados['anuncio_negociantesbusca'] = 0; //Cliente busca
               }

         }else{
             $dados['anuncio_negociantes'] = 0;
         }



         $compraGarantida = $this->input->post('garantida');
         if((int)$compraGarantida == 1){
             $dados['anuncio_compragarantida'] = 1;
             $paypal = $this->input->post('paypal');
             $amex = $this->input->post('amex');
             $visamaster = $this->input->post('visamaster');
             $boleto = $this->input->post('boleto');
             if((int)$boleto == 1){
                  $dados['anuncio_boletoon'] = 1;
             }else{
                 $dados['anuncio_boletoon'] = 0;
             }
               if((int)$paypal == 1){
                  $dados['anuncio_paypalon'] = 1;
             }else{
                 $dados['anuncio_paypalon'] = 0;
             }
               if((int)$amex == 1){
                  $dados['anuncio_amexon'] = 1;
             }else{
                 $dados['anuncio_amexon'] = 0;
             }
               if((int)$visamaster == 1){
                  $dados['anuncio_visamasteron'] = 1;
             }else{
                 $dados['anuncio_visamasteron'] = 0;
             }
         }else{
             $dados['anuncio_compragarantida'] = 0;
         }

         $dados['anuncio_peso'] = $this->input->post('peso');
         $dados['anuncio_tamanho'] = $this->input->post('tamanho');
         $dados['anuncio_cultivocriacao'] = $this->input->post('cultivocriacao');
         $dados['anuncio_nomecientifico'] = $this->input->post('cientifico');
         $dados['anuncio_variedade'] = $this->input->post('variedade');
         $dados['anuncio_tipoequip'] = $this->input->post('tipo2');
         $dados['anuncio_marca'] = $this->input->post('marca');
         $dados['anuncio_modelo'] = $this->input->post('modelo');
         $dados['anuncio_certificacao'] = $this->input->post('certificacao');
         $dados['anuncio_empacotamento'] = $this->input->post('empacotamento');
         $dados['anuncio_detalheenvio'] = $this->input->post('detalheenvio');
        $entradaDescricao = $this->input->post('teste2');
         $posicaoInicial = strpos($entradaDescricao, 'ue">') + 4;
         $posicaoFinal = strlen($entradaDescricao) - strpos($entradaDescricao, '</div><div class="ql-clipboard" tabindex="-1"');
         $dados['anuncio_descricao'] = substr($entradaDescricao, $posicaoInicial, -$posicaoFinal);
         $dados['anuncio_criado'] = 1;


          /*   $this->load->library('upload');
     $name = "img1".md5($this->session->userdata['cadastroProduto']);
     $curriculo    = $_FILES['image1'];
        if(isset($curriculo)){     $configuracao = array(
         'upload_path'   => 'assets/uploads/anuncios/',
         'allowed_types' => 'jpg|png',
         'file_name'     => $name.'.jpg',
       'max_size'      => '2048'
     );

     $this->upload->initialize($configuracao);
     if ($this->upload->do_upload('image1')){
     $dados['anuncio_imagem1'] = $configuracao['upload_path'].$configuracao['file_name'];
 }

    }

        $name = "img2" .md5($this->session->userdata['cadastroProduto']);
        $curriculo = $_FILES['image2'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/anuncios/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );

        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image2')) {
            $dados['anuncio_imagem2'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }


          $name = "img3" .md5($this->session->userdata['cadastroProduto']);
        $curriculo = $_FILES['image3'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/anuncios/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );


        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image3')) {
           $dados['anuncio_imagem3'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }


          $name = "img4".md5($this->session->userdata['cadastroProduto']);
        $curriculo = $_FILES['image4'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/anuncios/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image4')) {
            $dados['anuncio_imagem4'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }


         $name = "img5".md5($this->session->userdata['cadastroProduto']);
        $curriculo = $_FILES['image5'];
        $configuracao = array(
            'upload_path' => 'assets/uploads/anuncios/',
            'allowed_types' => 'jpg|png',
            'file_name' => $name . '.jpg',
            'max_size' => '2048'
        );
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('image5')) {
           $dados['anuncio_imagem5'] = $configuracao['upload_path'] . $configuracao['file_name'];
        }*/






         $this->db->where('anuncio_id', $this->session->userdata['cadastroProduto']);
            if ($this->db->update('anuncios', $dados)) {
                return true;
            } else {
                return false;
            }

    }
    public function finalizarCadastro(){


            if ($this->session->unset_userdata('cadastroProduto')) {
                return true;
            } else {
                return false;
            }
        }
        public function pegarAnuncioId($id){
            $this->db->where('anuncio_id',$id);
            $this->db->where('anuncio_criado',1);
            return $this->db->get('anuncios')->result();
        }
          public function pegarUsuarioAnuncio($id){
            $this->db->where('anuncio_id',$id);
            $this->db->where('anuncio_criado',1);
            return $this->db->get('anuncios')->row()->usuario_id;
        }


        public function contarAnuncioId($id){
              $this->db->where('anuncio_id',$id);
              return $this->db->get('anuncios')->num_rows();
        }

        public function pegarAnuncios($limit){
             $this->db->where('anuncio_criado',1);
             $this->db->order_by("anuncio_id", "desc");
            return $this->db->get('anuncios', $limit)->result();
        }
        public function pegarAnunciosCategoria($categoria, $limit){
             $this->db->where('anuncio_criado',1);
             $this->db->where('anuncio_categoria1',$categoria);
             $this->db->order_by("anuncio_id", "desc");
            return $this->db->get('anuncios', $limit)->result();
        }

  public function pegarQtdAnunciosUsu() {
        $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
        return $this->db->get('anuncios')->num_rows();
    }

    public function pegarAnunciosUsuId($id, $limit, $offset){
        $this->db->select('*');
        $this->db->where('usuario_id',$id);
            $this->db->where('anuncio_criado',1);
         $this->db->limit($limit,$offset);
        $this->db->order_by("anuncio_id","desc");

        return $this->db->get('anuncios')->result();

    }



    public function editarAnuncio($id) {
         $dados['anuncio_titulo'] = $this->input->post('title');
        $tipo_preco = $this->input->post('pvis');
        if($tipo_preco == 'visivel'){
            $dados['anuncio_tipopreco'] = 0; // Preço é visivel
        }else  if($tipo_preco == 'consulta'){
            $dados['anuncio_tipopreco'] = 1; // Sob Consulta
        }
        $dados['anuncio_preco'] = $this->input->post('pprice');
        $dados['anuncio_unidade'] = $this->input->post('unitbox');
        $negociavel = $this->input->post('negociavel');
        if((int)$negociavel == 1){
            $dados['anuncio_negociavel'] = 1;
        }else{
            $dados['anuncio_negociavel'] = 0;
        }
        $pedidoMinimo = $this->input->post('pedidominimo');
         if((int)$pedidoMinimo == 1){
            $dados['anuncio_pedidominimo'] = 1;
            $dados['anuncio_qtdminimo'] = $this->input->post('minqt');
        }else{
            $dados['anuncio_pedidominimo'] = 0;
            $dados['anuncio_qtdminimo'] = 0;
        }
         $dados['anuncio_disponibilidade'] = $this->input->post('available');
         $dados['anuncio_condicao'] = $this->input->post('options');
         $entregaOn = $this->input->post('transportadora');
         if((int)$entregaOn == 1){
             $dados['anuncio_transportadoraon'] = 1;
               $tipo = $this->input->post('toptions');
               if($tipo == 'exw'){
                   $dados['anuncio_transportadoratermos'] = 1; //EXW
               }else if($tipo == 'ddp'){
                   $dados['anuncio_transportadoratermos'] = 0; //DDPs
               }

               $tipo = $this->input->post('optionstipo');
                 if($tipo == 'Padrao'){
                   $dados['anuncio_transportadoratipo'] = 0; //Padrão
               }else if($tipo == 'Viva'){
                   $dados['anuncio_transportadoratipo'] = 1; //Viva
               }else if($tipo == 'Controlada'){
                   $dados['anuncio_transportadoratipo'] = 2; //Controlada
               }else if($tipo == 'TempControladas'){
                   $dados['anuncio_transportadoratipo'] = 3; //Temperatura Controlada
               }


         }else{
             $dados['anuncio_transportadoraon'] = 0;
         }
         $correio = $this->input->post('correio');

        if((int)$correio == 1){
             $dados['anuncio_correioon'] = 1;
               $sedex = $this->input->post('sedex');
               if((int)$sedex == 1){
                   $dados['anuncio_sedexon'] = 1; //SEDEX LIGADO
               }else{
                   $dados['anuncio_sedexon'] = 0; //SOMENTE PAC
               }
         }else{
             $dados['anuncio_correioon'] = 0;
         }
         $negociantes = $this->input->post('negociantesOn');

         if((int)$negociantes == 1){
              $dados['anuncio_negociantes'] = 1;
                 $negocio1 = $this->input->post('negociado');
                 $negocio2 = $this->input->post('negociado1');
               if((int)$negocio1 == 1){
                   $dados['anuncio_negociantesleva'] = 1; //Leva
               }else{
                 $dados['anuncio_negociantesleva'] = 0; //Leva
               }
               if((int)$negocio2 == 1){
                   $dados['anuncio_negociantesbusca'] = 1; //Cliente busca
               }else{
                 $dados['anuncio_negociantesbusca'] = 0; //Cliente busca
               }

         }else{
             $dados['anuncio_negociantes'] = 0;
         }



         $compraGarantida = $this->input->post('garantida');
         if((int)$compraGarantida == 1){
             $dados['anuncio_compragarantida'] = 1;
             $paypal = $this->input->post('paypal');
             $amex = $this->input->post('amex');
             $visamaster = $this->input->post('visamaster');
             $boleto = $this->input->post('boleto');
             if((int)$boleto == 1){
                  $dados['anuncio_boletoon'] = 1;
             }else{
                 $dados['anuncio_boletoon'] = 0;
             }
               if((int)$paypal == 1){
                  $dados['anuncio_paypalon'] = 1;
             }else{
                 $dados['anuncio_paypalon'] = 0;
             }
               if((int)$amex == 1){
                  $dados['anuncio_amexon'] = 1;
             }else{
                 $dados['anuncio_amexon'] = 0;
             }
               if((int)$visamaster == 1){
                  $dados['anuncio_visamasteron'] = 1;
             }else{
                 $dados['anuncio_visamasteron'] = 0;
             }
         }else{
             $dados['anuncio_compragarantida'] = 0;
         }

         $dados['anuncio_peso'] = $this->input->post('peso');
         $dados['anuncio_tamanho'] = $this->input->post('tamanho');
         $dados['anuncio_cultivocriacao'] = $this->input->post('cultivocriacao');
         $dados['anuncio_nomecientifico'] = $this->input->post('cientifico');
         $dados['anuncio_variedade'] = $this->input->post('variedade');
         $dados['anuncio_tipoequip'] = $this->input->post('tipo2');
         $dados['anuncio_marca'] = $this->input->post('marca');
         $dados['anuncio_modelo'] = $this->input->post('modelo');
         $dados['anuncio_certificacao'] = $this->input->post('certificacao');
         $dados['anuncio_empacotamento'] = $this->input->post('empacotamento');
         $dados['anuncio_detalheenvio'] = $this->input->post('detalheenvio');

         $entradaDescricao = $this->input->post('teste2');
         $posicaoInicial = strpos($entradaDescricao, 'ue">') + 4;
         $posicaoFinal = strlen($entradaDescricao) - strpos($entradaDescricao, '</div><div class="ql-clipboard" tabindex="-1"');
         $dados['anuncio_descricao'] = substr($entradaDescricao, $posicaoInicial, -$posicaoFinal);

         $this->db->where('anuncio_id', $id);
            if ($this->db->update('anuncios', $dados)) {
                return true;
            } else {
                return false;
            }

    }

    public function deletarAnuncio($id){
        $this->db->where('anuncio_id', $id);
        return $this->db->delete('anuncios');
    }


      public function pegarAnunciosPesquisa($limit, $offset){
        $pesquisa = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('anuncio_titulo',$pesquisa);
        $this->db->limit($limit,$offset);
        $this->db->order_by("anuncio_id","desc");
        return $this->db->get('anuncios')->result();

    }
  public function pegarQtdPesquisa(){
       $pesquisa = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('anuncio_titulo',$pesquisa);
        $resultado = $this->db->get('anuncios');
        $resultado2 = $resultado->num_rows();

        return $resultado2;
    }

    public function pesquisaAvancada($limit, $offset){

        $this->db->select('*');
        $preco = $this->input->post('preco');
        $this->db->like("anuncio_preco < '$preco'");

        $opcoes = $this->input->post('options');

        if($opcoes == 'Novo'){
            $this->db->like('anuncio_condicao', 'Novo');
        }else if($opcoes == 'Usado'){
            $this->db->like('anuncio_condicao', 'Usado');
        }

        $exw = $this->input->post('exw');

        if((int)$exw == 1){
             $this->db->like('anuncio_transportadoratermos', 1);
        }
        $ddp = $this->input->post('ddp');

        if((int)$ddp == 1){
             $this->db->like('anuncio_transportadoratermos', 0);
        }

        $correios = $this->input->post('correios');

        if((int)$correios== 1){
             $this->db->like('anuncio_correioon', 1);
        }
         $busca = $this->input->post('busca');

        if((int)$busca == 1){
             $this->db->like('anuncio_negociantesbusca', 1);
        }
         $entrega = $this->input->post('entrega');

        if((int)$entrega == 1){
             $this->db->like('anuncio_negociantesleva', 1);
        }
         $boleto = $this->input->post('boleto');

        if((int)$boleto == 1){
             $this->db->like('anuncio_boletoon', 1);
        }
          $visa = $this->input->post('visa');

        if((int)$visa == 1){
             $this->db->like('anuncio_visamasteron', 1);
        }

          $amex = $this->input->post('amex');

        if((int)$amex == 1){
             $this->db->like('anuncio_amexon', 1);
        }
          $paypal = $this->input->post('paypal');

        if((int)$paypal == 1){
             $this->db->like('anuncio_paypalon', 1);
        }
        $this->db->limit($limit,$offset);
        $this->db->order_by("anuncio_id","desc");
        return $this->db->get('anuncios')->result();

    }

     public function pegarQtdAvancada(){

        $this->db->select('*');

        $opcoes = $this->input->post('options');

        if($opcoes == 'Novo'){
            $this->db->like('anuncio_condicao', 'Novo');
        }else if($opcoes == 'Usado'){
            $this->db->like('anuncio_condicao', 'Usado');
        }

        $exw = $this->input->post('exw');

        if((int)$exw == 1){
             $this->db->like('anuncio_transportadoratermos', 1);
        }
        $ddp = $this->input->post('ddp');

        if((int)$ddp == 1){
             $this->db->like('anuncio_transportadoratermos', 0);
        }

        $correios = $this->input->post('correios');

        if((int)$correios== 1){
             $this->db->like('anuncio_correioon', 1);
        }
         $busca = $this->input->post('busca');

        if((int)$busca == 1){
             $this->db->like('anuncio_negociantesbusca', 1);
        }
         $entrega = $this->input->post('entrega');

        if((int)$entrega == 1){
             $this->db->like('anuncio_negociantesleva', 1);
        }
         $boleto = $this->input->post('boleto');

        if((int)$boleto == 1){
             $this->db->like('anuncio_boletoon', 1);
        }
          $visa = $this->input->post('visa');

        if((int)$visa == 1){
             $this->db->like('anuncio_visamasteron', 1);
        }

          $amex = $this->input->post('amex');

        if((int)$amex == 1){
             $this->db->like('anuncio_amexon', 1);
        }
          $paypal = $this->input->post('paypal');

        if((int)$paypal == 1){
             $this->db->like('anuncio_paypalon', 1);
        }



         $resultado = $this->db->get('anuncios');
        $resultado2 = $resultado->num_rows();

        return $resultado2;
    }
    public function pegarProdutosCategoria1($limit, $offset, $categoria1){
        if($categoria1 == 1){
            $this->db->where('anuncio_categoria1', 'Produção Vegetal');
        }else if($categoria1 == 2){
            $this->db->where('anuncio_categoria1', 'Produção Animal');
        }else if($categoria1 == 3){
            $this->db->where('anuncio_categoria1', 'Produção Florestal');
        }else if($categoria1 == 4){
            $this->db->where('anuncio_categoria1', 'Pesca e Aquicultura');
        }else if($categoria1 == 5){
            $this->db->where('anuncio_categoria1', 'Sementes e Mudas');
        }else if($categoria1 == 6){
            $this->db->where('anuncio_categoria1', 'Defensivos e Fertilizantes, Químicos e Biológicos');
        }else if($categoria1 == 7){
            $this->db->where('anuncio_categoria1', 'Máquinas, Equipamentos e Ferramentas');
        }else if($categoria1 == 8){
            $this->db->where('anuncio_categoria1', 'Rações, Suplementos e Farmacêuticos');
        }else if($categoria1 == 9){
            $this->db->where('anuncio_categoria1', 'Alimentos Beneficiados ou Trnasformados');
        }else if($categoria1 == 10){
            $this->db->where('anuncio_categoria1', 'Carnes e Laticínios');
        }else if($categoria1 == 11){
            $this->db->where('anuncio_categoria1', 'Polpas, Sucos, Extratos e Bebidas');
        }else if($categoria1 == 12){
            $this->db->where('anuncio_categoria1', 'Artefatos de Couro e Fabricação de Calçados');
        }else if($categoria1 == 13){
            $this->db->where('anuncio_categoria1', 'Celulose, Papel e Produtos de Papel');
        }else if($categoria1 == 14){
            $this->db->where('anuncio_categoria1', 'Fibras, Têxteis e Vestuário');
        }else if($categoria1 == 15){
            $this->db->where('anuncio_categoria1', 'Combustíveis e Bioenergia');
        }else if($categoria1 == 16){
            $this->db->where('anuncio_categoria1', 'Produtos do Fumo');
        }else if($categoria1 == 17){
            $this->db->where('anuncio_categoria1', 'Produtos da Madeira');
        }else if($categoria1 == 18){
            $this->db->where('anuncio_categoria1', 'Outros produtos');
        }else if($categoria1 == 19){
            $this->db->where('anuncio_categoria1', 'Transportes');
        }else if($categoria1 == 20){
            $this->db->where('anuncio_categoria1', 'Armazenamento');
        }else if($categoria1 == 21){
            $this->db->where('anuncio_categoria1', 'Intermediação financeira e seguros');
        }else if($categoria1 == 22){
            $this->db->where('anuncio_categoria1', 'Consultorias e Recomendações');
        }else if($categoria1 == 23){
            $this->db->where('anuncio_categoria1', 'Engenharia, Testes/Analises Técnicas e P & D');
        }else if($categoria1 == 24){
            $this->db->where('anuncio_categoria1', 'Serviços Operacionais');
        }else if($categoria1 == 25){
            $this->db->where('anuncio_categoria1', 'Outros Serviços');
        }

          $this->db->limit($limit,$offset);
        $this->db->order_by("anuncio_id","desc");
        return $this->db->get('anuncios')->result();

    }
     public function pegarQtdProdutosCategoria1($categoria1){
      if($categoria1 == 1){
            $this->db->where('anuncio_categoria1', 'Produção Vegetal');
        }else if($categoria1 == 2){
            $this->db->where('anuncio_categoria1', 'Produção Animal');
        }else if($categoria1 == 3){
            $this->db->where('anuncio_categoria1', 'Produção Florestal');
        }else if($categoria1 == 4){
            $this->db->where('anuncio_categoria1', 'Pesca e Aquicultura');
        }else if($categoria1 == 5){
            $this->db->where('anuncio_categoria1', 'Sementes e Mudas');
        }else if($categoria1 == 6){
            $this->db->where('anuncio_categoria1', 'Defensivos e Fertilizantes, Químicos e Biológicos');
        }else if($categoria1 == 7){
            $this->db->where('anuncio_categoria1', 'Máquinas, Equipamentos e Ferramentas');
        }else if($categoria1 == 8){
            $this->db->where('anuncio_categoria1', 'Rações, Suplementos e Farmacêuticos');
        }else if($categoria1 == 9){
            $this->db->where('anuncio_categoria1', 'Alimentos Beneficiados ou Trnasformados');
        }else if($categoria1 == 10){
            $this->db->where('anuncio_categoria1', 'Carnes e Laticínios');
        }else if($categoria1 == 11){
            $this->db->where('anuncio_categoria1', 'Polpas, Sucos, Extratos e Bebidas');
        }else if($categoria1 == 12){
            $this->db->where('anuncio_categoria1', 'Artefatos de Couro e Fabricação de Calçados');
        }else if($categoria1 == 13){
            $this->db->where('anuncio_categoria1', 'Celulose, Papel e Produtos de Papel');
        }else if($categoria1 == 14){
            $this->db->where('anuncio_categoria1', 'Fibras, Têxteis e Vestuário');
        }else if($categoria1 == 15){
            $this->db->where('anuncio_categoria1', 'Combustíveis e Bioenergia');
        }else if($categoria1 == 16){
            $this->db->where('anuncio_categoria1', 'Produtos do Fumo');
        }else if($categoria1 == 17){
            $this->db->where('anuncio_categoria1', 'Produtos da Madeira');
        }else if($categoria1 == 18){
            $this->db->where('anuncio_categoria1', 'Outros produtos');
        }else if($categoria1 == 19){
            $this->db->where('anuncio_categoria1', 'Transportes');
        }else if($categoria1 == 20){
            $this->db->where('anuncio_categoria1', 'Armazenamento');
        }else if($categoria1 == 21){
            $this->db->where('anuncio_categoria1', 'Intermediação financeira e seguros');
        }else if($categoria1 == 22){
            $this->db->where('anuncio_categoria1', 'Consultorias e Recomendações');
        }else if($categoria1 == 23){
            $this->db->where('anuncio_categoria1', 'Engenharia, Testes/Analises Técnicas e P & D');
        }else if($categoria1 == 24){
            $this->db->where('anuncio_categoria1', 'Serviços Operacionais');
        }else if($categoria1 == 25){
            $this->db->where('anuncio_categoria1', 'Outros Serviços');
        }
        return $this->db->get('anuncios')->num_rows();
    }


     public function novaNotificacao($tipo, $usuario_id){
         $dados['notificacao_remetente'] = $this->session->userdata['usuario_id'];
         $dados['notificacao_tipo'] = $tipo;
         $dados['usuario_id'] = $usuario_id;
         return $this->db->insert('notificacoes', $dados);
     }
     public function carregarNotificacaoMensagem(){
         $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
         $this->db->where('notificacao_tipo', 1);
          $this->db->where('notificacao_visto', 0);
         return $this->db->get('notificacoes')->num_rows();
     }
     public function carregarNotificacaoDisputa(){
         $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
         $this->db->where('notificacao_tipo', 2);
         $this->db->where('notificacao_visto', 0);
         return $this->db->get('notificacoes')->num_rows();
     }
     public function carregarNotificacaoAcoes(){
         $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
         $this->db->where('notificacao_tipo', 3);
         $this->db->where('notificacao_visto', 0);
         return $this->db->get('notificacoes')->num_rows();
     }
     public function carregarNotificacaoAvaliacao(){
         $this->db->where('usuario_id', $this->session->userdata['usuario_id']);
         $this->db->where('notificacao_tipo', 4);
         $this->db->where('notificacao_visto', 0);
         return $this->db->get('notificacoes')->num_rows();
     }


}
