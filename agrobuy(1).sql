-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2017 às 20:43
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrobuy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `anuncio_id` int(11) NOT NULL,
  `anuncio_categoria1` varchar(80) NOT NULL,
  `anuncio_categoria2` varchar(80) NOT NULL,
  `anuncio_categoria3` varchar(80) NOT NULL,
  `anuncio_titulo` varchar(30) NOT NULL,
  `anuncio_imagem1` varchar(200) NOT NULL,
  `anuncio_imagem2` varchar(200) NOT NULL,
  `anuncio_imagem3` varchar(200) NOT NULL,
  `anuncio_imagem4` varchar(200) NOT NULL,
  `anuncio_imagem5` varchar(200) NOT NULL,
  `anuncio_tipopreco` int(11) NOT NULL,
  `anuncio_preco` varchar(20) NOT NULL,
  `anuncio_unidade` varchar(30) NOT NULL,
  `anuncio_negociavel` int(11) NOT NULL,
  `anuncio_pedidominimo` int(11) NOT NULL,
  `anuncio_qtdminimo` int(11) NOT NULL,
  `anuncio_disponibilidade` int(11) NOT NULL,
  `anuncio_condicao` varchar(15) NOT NULL,
  `anuncio_transportadoraon` int(11) NOT NULL,
  `anuncio_transportadoratermos` int(11) NOT NULL,
  `anuncio_transportadoratipo` int(11) NOT NULL,
  `anuncio_correioon` int(11) NOT NULL,
  `anuncio_sedexon` int(11) NOT NULL,
  `anuncio_negociantes` int(11) NOT NULL,
  `anuncio_negociantesbusca` int(11) NOT NULL,
  `anuncio_negociantesleva` int(11) NOT NULL,
  `anuncio_compragarantida` int(11) NOT NULL,
  `anuncio_boletoon` int(11) NOT NULL,
  `anuncio_visamasteron` int(11) NOT NULL,
  `anuncio_amexon` int(11) NOT NULL,
  `anuncio_paypalon` int(11) NOT NULL,
  `anuncio_peso` int(11) NOT NULL,
  `anuncio_tamanho` varchar(50) NOT NULL,
  `anuncio_cultivocriacao` varchar(50) NOT NULL,
  `anuncio_nomecientifico` varchar(50) NOT NULL,
  `anuncio_variedade` varchar(50) NOT NULL,
  `anuncio_tipoequip` varchar(50) NOT NULL,
  `anuncio_marca` varchar(50) NOT NULL,
  `anuncio_modelo` varchar(50) NOT NULL,
  `anuncio_certificacao` varchar(50) NOT NULL,
  `anuncio_empacotamento` varchar(50) NOT NULL,
  `anuncio_detalheenvio` varchar(50) NOT NULL,
  `anuncio_descricao` varchar(500) NOT NULL,
  `anuncio_criado` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`anuncio_id`, `anuncio_categoria1`, `anuncio_categoria2`, `anuncio_categoria3`, `anuncio_titulo`, `anuncio_imagem1`, `anuncio_imagem2`, `anuncio_imagem3`, `anuncio_imagem4`, `anuncio_imagem5`, `anuncio_tipopreco`, `anuncio_preco`, `anuncio_unidade`, `anuncio_negociavel`, `anuncio_pedidominimo`, `anuncio_qtdminimo`, `anuncio_disponibilidade`, `anuncio_condicao`, `anuncio_transportadoraon`, `anuncio_transportadoratermos`, `anuncio_transportadoratipo`, `anuncio_correioon`, `anuncio_sedexon`, `anuncio_negociantes`, `anuncio_negociantesbusca`, `anuncio_negociantesleva`, `anuncio_compragarantida`, `anuncio_boletoon`, `anuncio_visamasteron`, `anuncio_amexon`, `anuncio_paypalon`, `anuncio_peso`, `anuncio_tamanho`, `anuncio_cultivocriacao`, `anuncio_nomecientifico`, `anuncio_variedade`, `anuncio_tipoequip`, `anuncio_marca`, `anuncio_modelo`, `anuncio_certificacao`, `anuncio_empacotamento`, `anuncio_detalheenvio`, `anuncio_descricao`, `anuncio_criado`, `usuario_id`) VALUES
(1, 'Produção Florestal', 'Extração Vegetal', 'Borracha (Látex Coagulado)', 'Teste', 'assets/uploads/orcamentos/img10.jpg', '', '', '', '', 0, '', '', 0, 0, 10, 0, '', 0, 1, 2, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, '0', '', '', '', '', '', '', '', '', '', '', 1, 29),
(2, 'Máquinas, Equipamentos e Ferramentas', 'Máquinas Agrícolas', 'Colheitadeiras', 'teste', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '', '', '', '', '', '', '', '', '', 1, 4),
(3, 'Polpas, Sucos, Extratos e Bebidas', 'Concentrados à base de Outros Vegetais', 'Castanha-Do-Pará', '', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '', 'Unidade(s)', 0, 0, 0, 0, 'Usado', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '0', 0, 29),
(4, 'Máquinas, Equipamentos e Ferramentas', 'Máquinas e Veículos de Transporte', 'Carretas E Trailers', 'teste', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '', '', 0, 0, 1, 0, 'Usado', 0, 1, 2, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, '0', '', '', '', '', '', '', '', '', '', '', 1, 29),
(5, 'Defensivos e Fertilizantes, Químicos e Biológicos', 'Defensivos Agrícolas', 'Inseticidas', 'teste', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, '0', '', '', '', '', '', '', '', '', '', '', 0, 29),
(6, 'Rações, Suplementos e Farmacêuticos', 'Farmacêuticos para Animais', 'Outros Produtos Farmacêuticos', 'teste', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '', '', 0, 0, 0, 0, '', 0, 1, 2, 0, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, '0', '', '', '', '', '', '', '', '', '', '', 1, 29),
(7, 'Defensivos e Fertilizantes, Químicos e Biológicos', 'Controles Biológicos', 'Predadores', 'teste', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '', 'Unidade(s)', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, '0', '', '', '', '', '', '', '', '', '', '', 1, 29),
(8, 'Produção Florestal', 'Extração Vegetal', 'Cupuaçu', 'Titulo de teste', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '82.00', 'Unidade(s)', 1, 1, 5, 50, 'Novo', 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 20, '20', '', 'Cientifico Nome', '125', 'Teste Tipo', 'in288', 'ln200', '', 'teste', 'Enviado 5 dias após pagamento', '<strong>jjjjjjjjjjjjjjjj</strong>', 1, 29),
(9, 'Celulose, Papel e Produtos de Papel', 'Demais Derivados da Celulose e Papel', '', 'Titulo', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', '', '', '', '', 0, '', 'Unidade(s)', 0, 0, 0, 0, 'Novo', 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '<p><br></p>', 1, 29),
(10, 'Produção Animal', 'Ovos', 'Ovos De Galinha', '', '', '', '', '', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversas`
--

CREATE TABLE `conversas` (
  `conversa_id` int(11) NOT NULL,
  `usuario1_id` int(11) NOT NULL,
  `usuario2_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conversas`
--

INSERT INTO `conversas` (`conversa_id`, `usuario1_id`, `usuario2_id`) VALUES
(1, 29, 30),
(2, 4, 29),
(3, 16, 29),
(4, 29, 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emails`
--

CREATE TABLE `emails` (
  `email_id` int(11) NOT NULL,
  `email_dados` varchar(70) NOT NULL,
  `email_numero` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `mensagem_id` int(11) NOT NULL,
  `mensagem_de` int(11) NOT NULL,
  `mensagem_para` int(11) NOT NULL,
  `mensagem_texto` varchar(550) NOT NULL,
  `mensagem_arquivo` varchar(200) NOT NULL,
  `mensagens_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`mensagem_id`, `mensagem_de`, `mensagem_para`, `mensagem_texto`, `mensagem_arquivo`, `mensagens_data`) VALUES
(1, 30, 29, 'Esse é um texto legal', '', '2017-10-02 18:41:55'),
(2, 29, 4, 'kkkkkkkkkkkk', '', '2017-10-04 14:20:07'),
(3, 29, 30, 'jkkk', '', '2017-10-02 18:42:46'),
(4, 30, 29, 'kk', '', '2017-10-03 17:31:25'),
(5, 29, 30, 'Testando mensagens', '', '2017-10-02 19:23:07'),
(6, 29, 30, 'teste', '', '2017-10-02 19:23:25'),
(7, 29, 30, 'hahahahahhaha', '', '2017-10-02 19:23:44'),
(8, 29, 30, 'kkk', '', '2017-10-02 19:25:05'),
(9, 29, 30, 'aa', '', '2017-10-02 19:27:36'),
(10, 29, 30, 'sdads', '', '2017-10-02 19:27:59'),
(11, 29, 30, 'kk', '', '2017-10-02 19:28:31'),
(12, 29, 30, 'kk', '', '2017-10-02 19:29:29'),
(13, 29, 30, 'kk', '', '2017-10-02 19:29:41'),
(14, 29, 30, '555555', '', '2017-10-02 19:30:54'),
(15, 29, 30, 'kkk', '', '2017-10-03 17:37:31'),
(16, 29, 30, 'kkkk', '', '2017-10-03 17:38:34'),
(17, 29, 30, 'kkkkk', '', '2017-10-03 17:39:38'),
(18, 29, 30, 'kkkkkkkkkkk', '', '2017-10-03 17:40:49'),
(19, 29, 30, 'jjjj', '', '2017-10-03 17:41:29'),
(20, 29, 30, 'haha', '', '2017-10-03 17:41:47'),
(21, 29, 30, 'kkkkkk', '', '2017-10-03 17:42:32'),
(22, 29, 30, 'funcionou?', '', '2017-10-03 17:42:58'),
(23, 30, 29, 'salve salve', '', '2017-10-04 14:55:56'),
(24, 30, 29, 'kkkkkk', '', '2017-10-04 14:56:28'),
(25, 29, 30, 'kk', '', '2017-10-04 14:57:07'),
(26, 30, 29, 'hahahaha', '', '2017-10-04 14:57:19'),
(27, 29, 30, 'kkkkkkkkk', '', '2017-10-04 14:57:47'),
(28, 30, 29, 'funcionou?', '', '2017-10-05 18:51:10'),
(29, 4, 29, 'hey!!', '', '2017-10-05 18:51:54'),
(30, 29, 30, 'kkk', '', '2017-10-05 19:05:45'),
(31, 29, 30, 'hehe', '', '2017-10-05 19:06:49'),
(32, 29, 30, 'hehe', '', '2017-10-05 19:07:45'),
(33, 29, 30, 'hey', '', '2017-10-05 19:13:54'),
(34, 29, 30, 'eai', '', '2017-10-05 19:16:13'),
(35, 29, 30, 'eai', '', '2017-10-05 19:16:32'),
(36, 29, 30, 'kk', '', '2017-10-05 19:17:46'),
(37, 29, 30, 'hehe', '', '2017-10-05 19:18:21'),
(38, 29, 30, 'll', '', '2017-10-05 19:18:42'),
(39, 29, 4, 'eai', '', '2017-10-05 19:21:04'),
(40, 29, 30, 'agora vai', '', '2017-10-05 19:21:48'),
(41, 29, 30, 'agr vai?', '', '2017-10-05 19:22:28'),
(42, 29, 30, 'ata, ta funcionando?', '', '2017-10-05 19:24:57'),
(43, 29, 30, 'haha', '', '2017-10-05 20:24:44'),
(44, 29, 30, 'kkk', '', '2017-10-05 20:25:09'),
(45, 29, 30, 'jj', '', '2017-10-05 20:25:13'),
(94, 29, 30, '', 'assets/uploads/conversas/2930/0d35fdcf84bf312a12ee5238740933fc.jpg', '2017-10-06 15:20:03'),
(95, 29, 29, 'Olá, tenho algumas duvidas!', '', '2017-10-06 17:59:58'),
(96, 29, 29, 'Olá, tenho algumas duvidas!', '', '2017-10-06 18:00:01'),
(97, 29, 4, 'Olá!', '', '2017-10-06 18:00:16'),
(98, 29, 4, 'Olá!', '', '2017-10-06 18:00:17'),
(99, 29, 4, 'Olá!', '', '2017-10-06 18:00:18'),
(100, 29, 4, 'Olá!', '', '2017-10-06 18:00:19'),
(101, 29, 4, 'Oi', '', '2017-10-06 18:29:58'),
(102, 29, 30, 'ok', '', '2017-10-06 18:35:22'),
(103, 29, 30, '', 'assets/uploads/conversas/2930/91731c7b38837fb64f554c9b65e3f4c7.jpg', '2017-10-06 18:35:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE `orcamentos` (
  `orcamento_id` int(11) NOT NULL,
  `orcamento_titulo` varchar(30) NOT NULL,
  `orcamento_categoria` varchar(60) NOT NULL,
  `orcamento_categoria2` varchar(60) NOT NULL,
  `orcamento_categoria3` varchar(60) DEFAULT NULL,
  `orcamento_qtd` int(11) NOT NULL,
  `orcamento_unidade` varchar(30) NOT NULL,
  `orcamento_detalhes` varchar(500) NOT NULL,
  `orcamento_imagem1` varchar(200) NOT NULL,
  `orcamento_imagem2` varchar(200) NOT NULL,
  `orcamento_imagem3` varchar(200) NOT NULL,
  `orcamento_imagem4` varchar(200) NOT NULL,
  `orcamento_imagem5` varchar(200) NOT NULL,
  `orcamento_preco` int(11) DEFAULT NULL,
  `orcamento_creditoon` int(11) NOT NULL,
  `orcamento_exwon` int(11) NOT NULL,
  `orcamento_ddpon` int(11) NOT NULL,
  `orcamento_correioon` int(11) NOT NULL,
  `orcamento_levaon` int(11) NOT NULL,
  `orcamento_buscaon` int(11) NOT NULL,
  `orcamento_logado` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `email_id` int(11) NOT NULL,
  `orcamento_datainicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orcamentos`
--

INSERT INTO `orcamentos` (`orcamento_id`, `orcamento_titulo`, `orcamento_categoria`, `orcamento_categoria2`, `orcamento_categoria3`, `orcamento_qtd`, `orcamento_unidade`, `orcamento_detalhes`, `orcamento_imagem1`, `orcamento_imagem2`, `orcamento_imagem3`, `orcamento_imagem4`, `orcamento_imagem5`, `orcamento_preco`, `orcamento_creditoon`, `orcamento_exwon`, `orcamento_ddpon`, `orcamento_correioon`, `orcamento_levaon`, `orcamento_buscaon`, `orcamento_logado`, `usuario_id`, `email_id`, `orcamento_datainicio`) VALUES
(1, '', 'Produção Animal', 'Aves', 'Frangos', 250, 'Conjunto(s)', 'Prezado fornecedor, estou procurando por produtos com as determinadas especificações:', '', '', '', '', '', 600, 1, 1, 1, 0, 1, 1, 1, 29, 0, '2017-10-02 13:31:04'),
(2, 'Teste', 'Produção Vegetal', 'Soja  em Grão', NULL, 2000, 'Animal(is)', 'Prezado fornecedor, estou procurando por produtos com as determinadas especificações:', '', '', '', '', '', 200, 1, 1, 1, 0, 0, 0, 1, 29, 0, '2017-10-02 13:31:04'),
(3, 'Editei', 'Produção Animal', '', NULL, 0, 'Unidade(s)', 'Prezado fornecedor, estou procurando por produtos com as determinadas especificações:', 'assets/uploads/orcamentos/img16c54744ddc7faccfc9fc13c2918d5ae8.jpg', '', '', '', '', 100, 1, 1, 1, 0, 1, 1, 1, 29, 0, '2017-10-06 04:30:26'),
(4, 'dsadsa', 'Produção Vegetal', 'Laranja', NULL, 22, 'Análises/ Amostras', 'Prezado fornecedor, estou procurando por produtos com as determinadas especificações:', '', '', '', '', '', 0, 0, 1, 1, 0, 0, 0, 1, 29, 0, '2017-10-02 13:31:04'),
(5, 'dsdas', 'Produção Animal', 'Outros Animais Vivos', 'Caprinos', 200, 'Grão(s)', 'Prezado fornecedor, estou procurando por produtos com as determinadas especificações:', 'assets/uploads/orcamentos/img10.jpg', 'assets/uploads/orcamentos/img20.jpg', 'assets/uploads/orcamentos/img30.jpg', '', 'assets/uploads/orcamentos/img50.jpg', 0, 0, 1, 1, 0, 0, 0, 1, 29, 0, '2017-10-02 14:00:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(35) NOT NULL,
  `usuario_email` varchar(35) NOT NULL,
  `usuario_tel` varchar(15) NOT NULL,
  `usuario_cel` varchar(15) NOT NULL,
  `usuario_senha` varchar(30) NOT NULL,
  `usuario_imagemperfil` varchar(250) NOT NULL,
  `usuario_tipopessoa` int(11) NOT NULL,
  `usuario_doc` varchar(25) NOT NULL,
  `usuario_tipoendereco` int(11) NOT NULL,
  `usuario_estado` varchar(20) NOT NULL,
  `usuario_cep` varchar(20) NOT NULL,
  `usuario_municipio` varchar(25) NOT NULL,
  `usuario_ruaouacesso` varchar(15) NOT NULL,
  `usuario_numerooukm` varchar(15) NOT NULL,
  `usuario_complemento` varchar(30) NOT NULL,
  `usuario_tiponegocio1` int(11) NOT NULL,
  `usuario_tiponegocio2` int(11) NOT NULL,
  `usuario_tiponegocio3` int(11) NOT NULL,
  `usuario_tiponegocio4` int(11) NOT NULL,
  `usuario_tiponegocio5` int(11) NOT NULL,
  `usuario_tiponegocio6` int(11) NOT NULL,
  `usuario_tiponegocio7` int(11) NOT NULL,
  `usuario_interessevenda1` varchar(40) NOT NULL,
  `usuario_interessevenda2` varchar(40) NOT NULL,
  `usuario_interessevenda3` varchar(40) NOT NULL,
  `usuario_interessevcategoria1` varchar(40) NOT NULL,
  `usuario_interessevcategoria2` varchar(40) NOT NULL,
  `usuario_interessevcategoria3` varchar(40) NOT NULL,
  `usuario_interessecompra1` varchar(40) NOT NULL,
  `usuario_interessecompra2` varchar(40) NOT NULL,
  `usuario_interessecompra3` varchar(40) NOT NULL,
  `usuario_interessecompracategoria1` varchar(40) NOT NULL,
  `usuario_interessecompracategoria2` varchar(40) NOT NULL,
  `usuario_interessecompracategoria3` varchar(40) NOT NULL,
  `usuario_token` varchar(80) NOT NULL,
  `usuario_confirma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_tel`, `usuario_cel`, `usuario_senha`, `usuario_imagemperfil`, `usuario_tipopessoa`, `usuario_doc`, `usuario_tipoendereco`, `usuario_estado`, `usuario_cep`, `usuario_municipio`, `usuario_ruaouacesso`, `usuario_numerooukm`, `usuario_complemento`, `usuario_tiponegocio1`, `usuario_tiponegocio2`, `usuario_tiponegocio3`, `usuario_tiponegocio4`, `usuario_tiponegocio5`, `usuario_tiponegocio6`, `usuario_tiponegocio7`, `usuario_interessevenda1`, `usuario_interessevenda2`, `usuario_interessevenda3`, `usuario_interessevcategoria1`, `usuario_interessevcategoria2`, `usuario_interessevcategoria3`, `usuario_interessecompra1`, `usuario_interessecompra2`, `usuario_interessecompra3`, `usuario_interessecompracategoria1`, `usuario_interessecompracategoria2`, `usuario_interessecompracategoria3`, `usuario_token`, `usuario_confirma`) VALUES
(4, 'teste1', '22529', '(12) 2545-4564', '(12) 1 2154-654', '123', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', 0, '', 0, 'SP', '', 'São Paulo', '', '', '', 1, 0, 0, 0, 0, 0, 0, 'Implementos Agrícolas', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(16, 'Leonardo Torres', '123m@email.com', '(12) 2545-4564', '(12) 1 2154-654', '123456', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', 1, '', 0, 'MA', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '0b740600b7f6cfb2cc28d004b7441339', 0),
(29, 'Leonardo Torres', 'leotorresx1@gmail.com', '(12) 1256-4144', '(21) 2 1545-646', '123456', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', 1, '000.000060', 0, 'SP', '0', 'São José', 'Prof. Tancredo', '117', '', 1, 1, 1, 1, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '2dbd9efa8f5139810b57cc05435f6028', 0),
(30, 'Leonardo Torres', '123456', '(12) 2545-4564', '(12) 1 2154-654', '123456', 'assets/images/perfil/Original-Facebook-Geek-Profile-Avatar-1.jpg', 0, '0000000', 1, 'MA', '0', '', 'BR', '150', '200', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2e05c1261151f5de639e059f3409b47e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`anuncio_id`);

--
-- Indexes for table `conversas`
--
ALTER TABLE `conversas`
  ADD PRIMARY KEY (`conversa_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`mensagem_id`);

--
-- Indexes for table `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`orcamento_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `anuncio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `conversas`
--
ALTER TABLE `conversas`
  MODIFY `conversa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `mensagem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `orcamento_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
