-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Ago-2022 às 17:18
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Imagem` varchar(255) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`, `Descricao`, `Imagem`, `Ativo`) VALUES
(1, 'Carros', '', '', 1),
(2, 'Flores', '', '', 1),
(3, 'Gatos', '', '', 1),
(4, 'Dogs', '', '', 1),
(6, 'Jacaré', '', '', 1),
(7, 'Capivara', '', '', 1),
(8, 'Rato', '', '', 1),
(9, 'Leão', '', '', 1),
(10, 'Macaco', '', '', 1),
(13, '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `CategoriaID` int(11) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `Imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES
(1, '#5634', 'By Bored Ape Yacht Club', '5634.jpg', 1520040000, 2, 1),
(2, '#9607', 'By Bored Ape Yacht Club', '9607.jpg', 1246000000, 1, 1),
(3, '#7638', 'By Bored Ape Yacht Club', '7638.jpg', 1320040000, 4, 1),
(4, '#648', 'By Bored Ape Yacht Club', '648.jpg', 1023000000, 4, 1),
(5, '#793', 'By Bored Ape Yacht Club', '793.jpg', 1170000000, 3, 1),
(6, '#1109', 'By Bored Ape Yacht Club', '1109.jpg', 1090010000, 1, 1),
(7, '#1115', 'By Bored Ape Yacht Club', '1115.jpg', 1030040000, 1, 1),
(8, '#1216', 'By Bored Ape Yacht Club', '1216.jpg', 915000000, 3, 1),
(9, '#1302', 'By Bored Ape Yacht Club', '1302.jpg', 878000000, 3, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
