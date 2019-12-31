-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/12/2019 às 05:23
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste-fullstack`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `modulos`
--

CREATE TABLE `modulos` (
  `N_Mod` int(11) NOT NULL,
  `Tit_Mod` text NOT NULL,
  `Ref_Mod` text NOT NULL,
  `Comm_mod` text NOT NULL,
  `Stat_mod` varchar(11) NOT NULL,
  `Back_Cor` varchar(100) NOT NULL,
  `Sign_Mod` varchar(300) NOT NULL,
  `Tit_Cor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `modulos`
--

INSERT INTO `modulos` (`N_Mod`, `Tit_Mod`, `Ref_Mod`, `Comm_mod`, `Stat_mod`, `Back_Cor`, `Sign_Mod`, `Tit_Cor`) VALUES
(1, 'PERFORMANCE', 'Checkin & Checkout', '+ R$ X por colaborador por mês', 'Contratar', '#0D0133', 'far fa-check-square', '#5A29FD'),
(2, 'ENGAJAMENTO', 'Badges & Cards de Reconhecimento', 'Gratuito', 'Ativar', '#433D5A', 'fas fa-certificate', '#5C099C'),
(3, 'ENGAJAMENTO', 'Planos de ação', 'Gratuito', 'Ativar', '#4C4551', 'fas fa-clipboard-list', '#5C099C'),
(4, 'ENGAJAMENTO', 'Recomendações de Conteúdo sob medida', '+ R$ X por colaborador por mês', 'Contratar', '#8E6127', 'far fa-bookmark', '#5C099C'),
(5, 'CULTURA', 'Fitting Cultural', '+ R$ X por colaborador por mês', 'Contratar', '#DA5E00', 'fab fa-jenkins', '#63842B'),
(6, 'RELAÇÕES', 'Assessments e Recomendações', 'Gratuito', 'Ativar', '#7C7B7A', 'fas fa-hands-helping', '#DA5E00'),
(7, 'PERFORMANCE', 'Quick Deck', '+ R$ X por colaborador por mês', 'Contratar', '#00A2FF', 'far fa-file', '#5A29FD'),
(8, 'PERFORMANCE', 'Evidências & Feedback', '+ R$ X por colaborador por mês', 'Contratar', '#050962', 'fas fa-shoe-prints', '#5A29FD');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`N_Mod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
