-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2021 às 19:13
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int(11) NOT NULL,
  `curso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bolsa` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `idade`, `curso`, `bolsa`, `created_at`, `updated_at`) VALUES
(1, 'Jefferson', 24, 'Desenho Industrial', 324.00, '2021-03-30 03:00:00', '2021-04-02 00:32:45'),
(7, 'Ariovaldo', 34, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 21:37:29'),
(8, 'Rodrigo', 17, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:33:28'),
(9, 'Roger', 14, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:33:28'),
(10, 'Cleberson', 54, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:33:28'),
(11, 'Nostradamos', 1224, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:33:28'),
(12, 'Rodrigo', 17, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:34:12'),
(13, 'Roger', 14, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:34:13'),
(14, 'Cleberson', 54, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:34:13'),
(15, 'Nostradamos', 1224, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:34:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2021_03_18_192423_create_aluno_models_table', 1),
(6, '2021_03_25_200848_create_professor_models_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vl_hora_aula` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `materia`, `vl_hora_aula`, `created_at`, `updated_at`) VALUES
(1, 'Lucas Fontes', 'Física Quântica', 324.00, '2021-04-01 03:00:00', '2021-04-08 23:15:48');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
