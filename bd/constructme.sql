-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2022 às 15:30
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `constructme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `id` int(10) NOT NULL,
  `nome_loja` varchar(30) NOT NULL,
  `nome_logo` varchar(15) NOT NULL,
  `sobre` varchar(400) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `whats` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `nome_loja`, `nome_logo`, `sobre`, `endereco`, `email`, `whats`, `telefone`, `facebook`, `twitter`, `instagram`, `youtube`) VALUES
(1, 'Constructme', 'Constructme', 'blablablalbalbal', 'Av.. Brasil, Nr.:305', 'thiagorochadefarias@gmail.com', '51996686696', '51996686696', 'https://www.facebook.com/thiago.rochadefarias', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solucoes`
--

CREATE TABLE `solucoes` (
  `id` int(10) NOT NULL,
  `nome_solucao` varchar(20) NOT NULL,
  `filtro` varchar(15) NOT NULL,
  `descricao_solucao` varchar(120) DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL,
  `produto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `solucoes`
--

INSERT INTO `solucoes` (`id`, `nome_solucao`, `filtro`, `descricao_solucao`, `valor`, `produto`) VALUES
(1, 'Dell 9090', 'Informa', 'Computador Dell com um processador i7 4700 e 8GB de memoria. ', '3000.00', 1),
(3, 'Dell 9020', 'intel', 'fdgomhj´sromt´jomas´rfmtj´sfdmnojf´nmf', '5000.20', 1),
(4, 'Dell 9020', '123', 'asfafsasfadadsadadafafsaasfasfafsa', '4000.20', 0),
(5, 'Dell 9020', 'sasd', 'asfafsasfadadsadadafafsaasfasfafsa', '4000.20', 0),
(6, 'Dell 9020', 'Informatica', 'asfafsasfadadsadadafafsaasfasfafsa', '4000.20', 0),
(9, 'Dell 90', 'Informa', 'testa', '4000.20', 1),
(11, 'Dell 9020', 'Informatica', 'asfafsasfadadsadadafafsaasfasfafsa', '4000.20', 1),
(12, 'Dell 9020', 'Informatica', 'asfafsasfadadsadadafafsaasfasfafsa', '4000.20', 1),
(13, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(14, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(15, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(16, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(17, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(18, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(19, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(20, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(21, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(22, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(23, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(24, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(25, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(26, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(27, 'teste2', 'Informa', 'teste', '5000.00', 1),
(28, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(29, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(30, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(31, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(32, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(33, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(34, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(35, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(36, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(37, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(38, 'Teste', 'Informatica', 'sdfsfsdfs\r\nsdf\r\nsdfsf', '4000.20', 1),
(42, 'TESTANDO', 'Informatica', 'TESTANDO', '4000.01', 1),
(43, 'TESTANDO1', 'Informatica', 'TESTANDO1', '4000.02', 1),
(44, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(45, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(46, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(47, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(48, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(49, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(50, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(51, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(52, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(53, 'TESTANDO2', 'Informatica', 'TESTANDO2', '4000.03', 1),
(56, 'TESTANDO2', 'Informatica', 'TESTANDO2', '3000.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin'),
(2, 'cliente', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `solucoes`
--
ALTER TABLE `solucoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `solucoes`
--
ALTER TABLE `solucoes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
