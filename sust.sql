-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sust`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int(11) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `question`
--

INSERT INTO `question` (`id_question`, `question`) VALUES
(1, 'Aumento de faturamento e/ou mercado?'),
(2, 'Redução de custos e ganhos de produtividade?'),
(3, 'Fortalecimento da reputação da marca?'),
(4, 'Promoção dos valores da companhia?'),
(5, 'Gestão de conformidade e risco'),
(6, 'Melhoria das condições de acesso a capital'),
(7, 'Convergência com tendências tecnológicas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subquestion`
--

CREATE TABLE IF NOT EXISTS `subquestion` (
  `id_subquestion` int(11) NOT NULL,
  `subquestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `subquestion`
--

INSERT INTO `subquestion` (`id_subquestion`, `subquestion`) VALUES
(1, 'Fortalecimento do engajamento com stakeholders'),
(1, 'Fortalecimento do engajamento com stakeholders'),
(2, 'Amplo escopo de impacto positivo (efeito guarda-chuva)'),
(3, 'Desenvolvimento socioeconômico local/regional'),
(4, 'Desenvolvimento e capacitação de recursos humanos'),
(5, 'Melhoria da eco-eficiência em processos e/ou produtos e serviços'),
(6, 'Resposta a necessidades e desafios críticos locais e regionais'),
(7, 'Aderência a objetivos e metas de desenvolvimento sustentável(ODM)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
