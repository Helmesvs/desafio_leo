-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Ago-2021 às 07:46
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio_leo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `image`, `slug`) VALUES
(3, 'Lorem Ipsum is simply', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', '2021.08.03-07.44.27.png', 'lorem-ipsum-is-simply'),
(4, 'Lorem Ipsum is simply', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', '2021.08.03-07.44.20.png', 'lorem-ipsum-is-simply-2'),
(5, 'Lorem Ipsum is simply', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', '2021.08.03-07.44.13.png', 'lorem-ipsum-is-simply-3'),
(7, 'Lorem Ipsum is simply', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', '2021.08.03-07.44.07.png', 'lorem-ipsum-is-simply-4'),
(8, 'Lorem Ipsum is simply', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', '2021.08.03-07.44.01.png', 'lorem-ipsum-is-simply-5'),
(9, 'Lorem Ipsum is simply', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', '2021.08.03-07.43.54.png', 'lorem-ipsum-is-simply-6'),
(10, 'Lorem Ipsum is simply', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', '2021.08.03-07.44.41.png', 'lorem-ipsum-is-simply-7');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
