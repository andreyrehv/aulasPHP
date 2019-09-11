-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Ago-2019 às 16:02
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etec270819`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `nome` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `price` decimal(7,2) DEFAULT NULL,
  `chave` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`nome`, `autor`, `ano`, `price`, `chave`) VALUES
('Everyday Italian', 'Giada De Laurentiis', 2005, '30.00', '7909de24a9f6d96d6fc8dddb6af928e725c98c8b'),
('Harry Potter', 'J K. Rowling', 2005, '29.99', '08a346fc5fda375ab78493e655b3c22e3f6b2276'),
('XQuery Kick Start', 'James McGovern', 2003, '49.99', 'a1f5fc98614faf58d889768a0a76d19a7dd8db67'),
('Learning XML', 'Erik T. Ray', 2003, '39.95', '3e95e94b87aed0c5eacd37b5637859b45a9642e5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
