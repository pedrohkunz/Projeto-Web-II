-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2022 às 19:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `cod` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL,
  `itens` text DEFAULT NULL,
  `quant` int(11) DEFAULT NULL,
  `pag` varchar(20) DEFAULT NULL,
  `local` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cod`, `data_hora`, `itens`, `quant`, `pag`, `local`) VALUES
(2, '2022-04-11 09:12:01', 'Pão ,Margarina , Queijo, Salame, Ricota', 2, 'Pix', 'Alvorada'),
(3, '2022-05-11 19:12:01', 'Pão ,Goiabada , Queijo', 3, 'Boleto', 'Viamão'),
(4, '2022-06-11 18:12:21', 'Pão ,Ximia , Tomate', 4, 'Cartão', 'Canoas'),
(5, '2022-07-11 16:12:50', 'Pão ,Ketchup , Queijo', 3, 'Grana', 'Alvorada'),
(9, '2022-05-17 16:40:38', 'Pão com gergelim, Hamburger, Alface, Queijo, Molho especial, Cebola, Picles, ', 9, 'Cartão', 'Alvorada'),
(10, '2022-05-19 14:26:02', 'Hamburger, Queijo, Molho especial, ', 3, 'Cartão', 'Canoas'),
(11, '2022-05-19 16:03:30', 'Pão com gergelim, Alface, ', 1, 'Dinheiro', 'Cachoeirinha'),
(12, '2022-05-22 00:47:19', 'Pão com gergelim, Alface,', 4, 'Cartão', 'Porto Alegre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `email`, `senha`) VALUES
(11, 'Pedro', 'pedrokunz094@gmail.com', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
