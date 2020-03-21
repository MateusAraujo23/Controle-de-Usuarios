-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 21-Mar-2020 às 00:41
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(45, 'Anna Santos', 'anna.santos@hotmail.com', 'a70f9e38ff015afaa9ab0aacabee2e13'),
(41, 'Beatriz Monteiro', 'beatriz.monteiro@hotmail.com', '323242097368577e6f3aac03c6dcedb6'),
(42, 'Francisco Freitas', 'francisco.freitas@hotmail.com', '117735823fadae51db091c7d63e60eb0'),
(43, 'Bianca Farias', 'bianca.farias@hotmail.com', '83de6260ed1dbe549bd23d31c4b8af81'),
(44, 'Beatriz Araujo', 'beatriz.araujo@hotmail.com', '323242097368577e6f3aac03c6dcedb6'),
(13, 'Pedro Sampaio', 'pedro.sampaio@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(49, 'Fernanda Alves', 'fernanda.alves@hotmail.com', 'b98a5a57d055dbabf959dcd6f36509ef'),
(48, 'Eduardo Santos', 'eduardo.santos@hotmail.com', '6d6354ece40846bf7fca65dfabd5d9d4'),
(47, 'Denis Almeida', 'denis.almeida@hotmail.com', 'c3875d07f44c422f3b3bc019c23e16ae'),
(46, 'Caio Roberto', 'caio.roberto@hotmail.com', 'c97e2b57a6c44cb28aa98211dad2811f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
