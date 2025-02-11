-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jan-2025 às 15:44
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `construcao_e_habitacao_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `ultimo_acesso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `email`, `login`, `senha`, `ultimo_acesso`) VALUES
(1, 'admin', 'teste@gmail.com', 'admin', 'codemaster', '14:40:49 - 22/01/2025'),
(2, 'tiago', 'balbalnal', 'teste', 'tiago123', '16:41:18 - 21/01/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `nome_pagina` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `data_de_edicao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `nome_pagina`, `titulo`, `imagem`, `editor`, `data_de_edicao`) VALUES
(1, 'destaques', 'Destaques', 'http://localhost/construcao_e_habitacao/uploads/BannerDestaques.png', 'admin', '10:44:53 - 12/12/2024'),
(2, 'destaque_especifico', 'Destaque Específico', 'http://localhost/construcao_e_habitacao/uploads/BannerDestaque1.png', 'admin', '11:46:07 - 20/01/2025'),
(3, 'quem_somos', 'Quem Somos', 'http://localhost/construcao_e_habitacao/uploads/BannerQuemSomos.png', 'admin', '11:46:09 - 20/01/2025'),
(4, 'empreendimentos', 'Empreendimentos', 'http://localhost/construcao_e_habitacao/uploads/BannerEmpreendimentos.png', 'admin', '11:46:12 - 20/01/2025'),
(5, 'contactos', 'Contactos', 'http://localhost/construcao_e_habitacao/uploads/BannerContactos.png', 'admin', '11:46:15 - 20/01/2025'),
(6, 'socios', 'Sócios', 'http://localhost/construcao_e_habitacao/uploads/BannerSocios.png', 'admin', '11:46:17 - 20/01/2025'),
(7, 'centro_de_ferias', 'Centro de Férias', 'http://localhost/construcao_e_habitacao/uploads/BannerFerias.png', 'admin', '11:46:20 - 20/01/2025'),
(8, 'noticias', 'Notícias', 'http://localhost/construcao_e_habitacao/uploads/BannerNoticias.png', 'admin', '11:46:23 - 20/01/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `data_de_edicao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem`, `editor`, `data_de_edicao`) VALUES
(1, 'http://localhost/construcao_e_habitacao/uploads/BannerHome.png', 'admin', '11:25:53 - 09/01/2025'),
(6, 'http://localhost/construcao_e_habitacao/uploads/BannerContactos.png', 'admin', '11:26:14 - 09/01/2025'),
(7, 'http://localhost/construcao_e_habitacao/uploads/BannerDestaques.png', 'admin', '11:26:36 - 09/01/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `fax` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `data_de_edicao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `fax`, `email`, `facebook`, `editor`, `data_de_edicao`) VALUES
(1, '222 088 761', 'Rua Passo Manuel, 59-1.º 4000-384 Porto', '222 088 761', 'cooptripeira@mail.telepac.pt', 'https://www.facebook.com/', 'admin', '12:24:30 - 20/01/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `esta_na_home` tinyint(1) NOT NULL DEFAULT 0,
  `titulo` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `data_de_edicao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `esta_na_home`, `titulo`, `texto`, `imagem`, `editor`, `data_de_edicao`) VALUES
(2, 1, 'Canidelo - Vila Nova de Gaia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n', 'http://localhost/construcao_e_habitacao/uploads/destaque1.png', 'admin', '15:23:05 - 21/01/2025'),
(3, 1, 'Barranha - Sº da Hora Matosinhos', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'http://localhost/construcao_e_habitacao/uploads/destaque2.png', 'admin', '11:47:45 - 20/01/2025'),
(4, 1, 'Contumil - Porto', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'http://localhost/construcao_e_habitacao/uploads/destaque3.png', 'admin', '11:47:53 - 20/01/2025'),
(7, 1, 'Vila do Conde', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'http://localhost/construcao_e_habitacao/uploads/destaque4.png', 'admin', '11:48:00 - 20/01/2025'),
(8, 1, 'Famalicão', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'http://localhost/construcao_e_habitacao/uploads/destaque5.png', 'admin', '11:48:07 - 20/01/2025'),
(9, 1, 'Madalena - Vila Nova de Gaia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'http://localhost/construcao_e_habitacao/uploads/destaque6.png', 'admin', '16:35:54 - 16/01/2025'),
(10, 0, 'Barranha - Sº da Hora Matosinhos 2', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'http://localhost/construcao_e_habitacao/uploads/destaque2.png', 'admin', '15:17:08 - 21/01/2025'),
(11, 0, 'Contumil - Porto 2', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'http://localhost/construcao_e_habitacao/uploads/destaque4.png', 'admin', '15:16:53 - 21/01/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimentos`
--

CREATE TABLE `empreendimentos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `editor` varchar(50) NOT NULL,
  `data_de_edicao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `empreendimentos`
--

INSERT INTO `empreendimentos` (`id`, `imagem`, `titulo`, `texto`, `editor`, `data_de_edicao`) VALUES
(2, 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'Barranha - Sº da Hora Matosinhos', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<div><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend1.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend2.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend3.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend4.png\" width=\"540\" height=\"360\"></div>', 'admin', '11:40:30 - 16/01/2025'),
(3, 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'Contumil - Porto', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<div><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend1.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend2.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend3.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend4.png\" width=\"540\" height=\"360\"></div>', 'admin', '10:38:01 - 20/01/2025'),
(4, 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'Vila do Conde', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<div><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend1.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend2.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend3.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend4.png\" width=\"540\" height=\"360\"></div>', 'admin', '11:48:51 - 20/01/2025'),
(5, 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'Famalicão', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<div><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend1.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend2.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend3.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend4.png\" width=\"540\" height=\"360\"></div>', 'admin', '11:48:57 - 20/01/2025'),
(6, 'http://localhost/construcao_e_habitacao/uploads/empreend1.png', 'Madalena - Vila Nova de Gaia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<div><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend1.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend2.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend3.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/empreend4.png\" width=\"540\" height=\"360\"></div>', 'admin', '11:49:02 - 20/01/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_simples`
--

CREATE TABLE `menu_simples` (
  `id` int(11) NOT NULL,
  `nome_pagina` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` longtext NOT NULL,
  `editor` varchar(50) NOT NULL,
  `data_de_edicao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `menu_simples`
--

INSERT INTO `menu_simples` (`id`, `nome_pagina`, `titulo`, `texto`, `editor`, `data_de_edicao`) VALUES
(1, 'quem_somos', 'Quem Somos', '<div style=\"text-align: left;\"><img style=\"float: left;\" src=\"http://localhost/construcao_e_habitacao/uploads/ImagemQuemSomos.png\" width=\"351\" height=\"524\"></div>\r\n<p style=\"text-align: left;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<p style=\"text-align: left;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>\r\n<p style=\"text-align: left;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>', 'admin', '16:46:53 - 20/01/2025'),
(2, 'socios', 'Sócios', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Ducimus ad voluptatum temporibus esse assumenda Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p>', 'admin', '12:11:14 - 20/01/2025'),
(3, 'centro_de_ferias', 'Centro de Férias', '<div><img style=\"float: left;\" src=\"http://localhost/construcao_e_habitacao/uploads/cf1.png\" alt=\"\" width=\"351\" height=\"528\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eaque sit dolorem voluptatum at temporibus accusamus quaerat.</p></div>\r\n<div style=\"text-align: center;\"><img src=\"http://localhost/construcao_e_habitacao/uploads/cf2.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/cf3.png\" width=\"540\" height=\"360\"> <img src=\"http://localhost/construcao_e_habitacao/uploads/cf4.png\" width=\"540\" height=\"360\"><img src=\"http://localhost/construcao_e_habitacao/uploads/cf5.png\" width=\"540\" height=\"360\"></div>', 'admin', '17:19:37 - 20/01/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `data_de_edicao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `imagem`, `editor`, `data_de_edicao`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia1.png', 'admin', '15:23:14 - 21/01/2025'),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia2.png', 'admin', '16:12:59 - 20/01/2025'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia3.png', 'admin', '15:52:29 - 12/12/2024'),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia4.png', 'admin', '15:18:25 - 10/01/2025'),
(5, 'Lorem ipsum dolor sit amet consectetur adipisicing.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia5.png', 'admin', '11:46:41 - 20/01/2025'),
(6, 'Lorem ipsum dolor sit amet consectetur adipisicing.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia6.png', 'admin', '11:46:48 - 20/01/2025'),
(7, 'Lorem ipsum dolor sit amet consectetur adipisicing', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia2.png', 'admin', '11:46:57 - 20/01/2025'),
(8, 'Lorem ipsum dolor sit amet consectetur adipisicing.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia4.png', 'admin', '11:47:06 - 20/01/2025'),
(9, 'Lorem ipsum dolor sit amet consectetur adipisicing.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia1.png', 'admin', '11:47:13 - 20/01/2025'),
(10, 'Lorem ipsum dolor sit amet consectetur adipisicing.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis aperiam, id illum ullam ducimus quae. Laudantium, pariatur voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, deleniti voluptate soluta, minus assumenda harum ipsam rem ratione ex quo corporis.</p>', 'http://localhost/construcao_e_habitacao/uploads/Noticia6.png', 'admin', '11:47:21 - 20/01/2025');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome_pagina` (`nome_pagina`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menu_simples`
--
ALTER TABLE `menu_simples`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `menu_simples`
--
ALTER TABLE `menu_simples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
