-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Set-2017 às 02:50
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_etceetecetera`
--
CREATE DATABASE IF NOT EXISTS `db_etceetecetera` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `db_etceetecetera`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestrante`
--

CREATE TABLE `palestrante` (
  `idPalestrante` int(11) NOT NULL,
  `nomePalestrante` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emailPalestrante` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `temaPalestra` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `miniCurriculoPalestrante` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `urlFotoPalestrante` varchar(200) COLLATE utf8_bin NOT NULL,
  `inicio` time NOT NULL,
  `termino` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `palestrante`
--

INSERT INTO `palestrante` (`idPalestrante`, `nomePalestrante`, `emailPalestrante`, `temaPalestra`, `miniCurriculoPalestrante`, `urlFotoPalestrante`, `inicio`, `termino`) VALUES
(1, 'Giovani Ferreira Silvério', '', 'Segurança da Informação', 'Giovani é co-fundador da Nekodrado Security e formado em Ciência da Computação pelo UniCEUB. Tem paixão pela área de segurança da informação e busca repassar esse conhecimento a qualquer pessoa interessada.', 'giovani.jpg', '10:00:00', '11:00:00'),
(2, 'Camila Resende Oliveira', 'camila@nekodrado.com.br', 'Privacidade de dados na Internet', 'Camila é co-fundadora da Nekodrado Security, formada em ciência da computação pela Universidade Católica de Brasília.', 'camila.jpg', '09:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE `participante` (
  `idParticipante` int(11) NOT NULL,
  `nomeParticipante` varchar(200) COLLATE utf8_bin NOT NULL,
  `emailParticipante` varchar(200) COLLATE utf8_bin NOT NULL,
  `senhaParticipante` varchar(100) COLLATE utf8_bin NOT NULL,
  `dataCadastroParticipante` date NOT NULL,
  `statusParticipante` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`idParticipante`, `nomeParticipante`, `emailParticipante`, `senhaParticipante`, `dataCadastroParticipante`, `statusParticipante`) VALUES
(2, 'Antonio Giovani SilvÃ©rio da Silva', 'antonio.vani@gmail.com', '', '2017-09-15', 1),
(4, 'Ana Alice da Silva', 'ana@etcdf.com.br', '123', '2017-09-15', 1),
(5, 'Beltrano da Silva', 'beltrano@etc.com.br', '123', '2017-09-15', 1),
(6, 'Ciclano da Silva', 'ciclano@etcdf.com.br', '123', '2017-09-15', 1),
(7, 'CetÃ´nio da Silva', 'cetonio@etcdf.com.br', '123', '2017-09-15', 1),
(8, '', 'giovani@pipt.org.br', '123', '2017-09-20', 1),
(9, '', 'giovani@pipt.org.br', '123', '2017-09-20', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguidorlinha`
--

CREATE TABLE `seguidorlinha` (
  `idSeguidorLinha` int(11) NOT NULL,
  `nomeEquipe` varchar(200) COLLATE utf8_bin NOT NULL,
  `nomeLider` varchar(200) COLLATE utf8_bin NOT NULL,
  `emailLider` varchar(200) COLLATE utf8_bin NOT NULL,
  `quantidadeParticipantes` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `seguidorlinha`
--

INSERT INTO `seguidorlinha` (`idSeguidorLinha`, `nomeEquipe`, `nomeLider`, `emailLider`, `quantidadeParticipantes`, `status`) VALUES
(1, 'Linha Dura', 'João da Silva', 'giovani@etc.com.br', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `palestrante`
--
ALTER TABLE `palestrante`
  ADD PRIMARY KEY (`idPalestrante`);

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`idParticipante`);

--
-- Indexes for table `seguidorlinha`
--
ALTER TABLE `seguidorlinha`
  ADD PRIMARY KEY (`idSeguidorLinha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `palestrante`
--
ALTER TABLE `palestrante`
  MODIFY `idPalestrante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `participante`
--
ALTER TABLE `participante`
  MODIFY `idParticipante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `seguidorlinha`
--
ALTER TABLE `seguidorlinha`
  MODIFY `idSeguidorLinha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
