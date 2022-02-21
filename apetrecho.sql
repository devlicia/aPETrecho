-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2020 às 23:24
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apetrecho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `comentario` varchar(240) NOT NULL,
  `data` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `id` int(11) NOT NULL,
  `motivo` int(1) NOT NULL,
  `aceite` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id` int(11) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `tamanho` varchar(20) NOT NULL,
  `idade` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `raca` varchar(20) NOT NULL,
  `info` varchar(220) NOT NULL,
  `local` varchar(20) NOT NULL,
  `imagem` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `especie`, `tamanho`, `idade`, `sexo`, `raca`, `info`, `local`, `imagem`) VALUES
(1, 'Gato', 'Médio', 'Um ano', 'Macho', 'SRD', 'Dorme muito e é dócil', 'Icó - CE', 'tamanho-de-gato-1200x805.jpg'),
(2, 'Cachorro', 'Pequeno', 'Quatro meses', 'Macho', 'Labrador', 'Brincalhão e carinhoso', 'Cedro - CE', 'cachorro.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

CREATE TABLE `promocao` (
  `id` int(11) NOT NULL,
  `produto` varchar(220) NOT NULL,
  `valor` varchar(220) NOT NULL,
  `oferta` varchar(220) NOT NULL,
  `imagem` varchar(220) NOT NULL,
  `local` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `promocao`
--

INSERT INTO `promocao` (`id`, `produto`, `valor`, `oferta`, `imagem`, `local`) VALUES
(1, 'Ração Pedigree', '120', '95', 'Ração_Seca_Pedigree_para_Cães_Adultos_Raças_Pequenas_310484_1_15kg.jpg', 'Icó - CE'),
(2, 'Ração Whiskas', '100,00', '95,00', 'Ração_Whiskas_Carne_para_Gatos_Adultos_-_1_Kg_31017729-2.jpg', 'Cedro - CE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `imagem` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `imagem`, `nome`, `cpf`, `endereco`, `cidade`, `estado`, `telefone`, `email`, `usuario`, `senha`, `nivel`) VALUES
(2, '', 'Alicia', '06222019307', 'Rua São José', 'Cedro', 'Ceará', '88981386997', 'af_bezerra@yahoo.com.br', 'alicia1', '12eMC4Wi9/C9o', '3'),
(25, '', 'Lara', '06279207480', '', '', '', '', 'larafvitoriano@gmail.com', 'lara', '12IbR.gJ8wcpc', '3'),
(26, '', 'Sara', '070.969.103', '', '', '', '', 'sarethipetrova@gmail.com', 'sara', '12IbR.gJ8wcpc', '3'),
(37, '../avatar/default.png', 'Parceiro Pet', '06279207485', 'Av Ilídio Sampaio', 'Icó', 'Ceará', '88999896455', 'parceiropet@gmail.com', 'parceiro', '12IbR.gJ8wcpc', '0'),
(38, '../avatar/default.png', 'Casa Veterinária', '12345678911', 'Av Josefa Nogueira Monteiro', 'Icó', 'Ceará', '8835611383', 'casa@gmail.com', 'petshop', '12IbR.gJ8wcpc', '2'),
(39, '../avatar/default.png', 'Abrigo', '06279207489', 'Nogueira Acioly', 'Icó', 'Ceará', '88999896458', 'abrigo@gmail.com', 'abrigo', '12IbR.gJ8wcpc', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
