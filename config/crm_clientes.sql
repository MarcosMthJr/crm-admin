-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22-Jun-2022 às 16:18
-- Versão do servidor: 10.3.35-MariaDB-log
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crm_clientes`
--
CREATE DATABASE IF NOT EXISTS `crm_clientes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crm_clientes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistemas`
--

CREATE TABLE `sistemas` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(150) NOT NULL,
  `nome_fantasia` varchar(80) NOT NULL,
  `url` varchar(255) NOT NULL,
  `banco` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `force_https` tinyint(4) NOT NULL,
  `force_redirect` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
