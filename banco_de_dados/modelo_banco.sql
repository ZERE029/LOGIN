-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Ago-2023 às 10:45
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `modelo_banco`
--
CREATE DATABASE IF NOT EXISTS `modelo_banco` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `modelo_banco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_login`
--

DROP TABLE IF EXISTS `tabela_login`;
CREATE TABLE IF NOT EXISTS `tabela_login` (
  `id_login` int NOT NULL AUTO_INCREMENT,
  `email` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tabela_login`
--

INSERT INTO `tabela_login` (`id_login`, `email`, `senha`) VALUES
(37, 'matheusvital029@gmail.com', 'eqwrferfw13r'),
(30, 'vital', 'r3g2r4g'),
(29, 'CRISTIANO ', 'RONALDO'),
(21, 'vital', '12345678'),
(24, 'fdgbfad', 'fgbeqh'),
(25, 'vital', '5555555555555'),
(26, 'vital', '5555555555555'),
(27, 'CRISTIANO ', 'RONALDO'),
(32, 'vital', '425t425'),
(36, '', ''),
(34, 'ZERE@029', '123456'),
(35, 'ZERE@029', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
