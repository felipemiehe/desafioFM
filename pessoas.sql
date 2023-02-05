-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Fev-2023 às 23:16
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_felipe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `data_nasc` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `cpf`, `rg`, `data_nasc`, `sexo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'marcos', '102.100.789-90', '5.458.100', '02/05/2000', 'masculino', '2023-02-05 13:58:12', '2023-02-06 00:47:30', NULL),
(6, 'fernando', '102.500.100-96', '1.468.900', '04/07/2007', 'masculino', '2023-02-05 15:34:29', '2023-02-05 15:34:29', NULL),
(9, 'mario', '102.500.100-90', '1.468.90', '04/07/2009', 'masculino', '2023-02-05 19:15:23', '2023-02-05 19:15:23', NULL),
(31, 'maria', '100.658.816.65', '64001', '21/05/1965', 'fem', '2023-02-05 23:12:32', '2023-02-06 01:03:34', NULL),
(32, 'jubao', '100.89.8-25', '64000', '15/25/1912', 'masculino', '2023-02-05 23:15:34', '2023-02-06 01:02:49', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pessoas_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `pessoas_rg_unique` (`rg`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
