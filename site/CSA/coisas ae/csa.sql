-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Fev-2017 às 20:46
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_usuarios`
--

CREATE TABLE `tab_usuarios` (
  `matricula` int(5) NOT NULL,
  `nivel` varchar(15) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `turma` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_usuarios`
--

INSERT INTO `tab_usuarios` (`matricula`, `nivel`, `nome`, `turma`, `email`, `login`, `senha`) VALUES
(11000, 'Administrador', 'Rafael de Oliveira', '', 'rafaelo@gmail.com', 'rafa', '123'),
(15000, 'Professor', 'Cristiano Moraes', '', 'cristiano@gmail.com', 'cristiano', '123'),
(16666, 'Aluno', 'Wilian Silva', '3TIN', 'wilian.silva209@gmail.com', 'wil', '123'),
(18000, 'Aluno', 'Ana Letícia', '3TIN', 'ana.lee@gmail.com', 'aninha', '123'),
(18001, 'Professor', 'Marcos Costa', '', 'marcos@gmail.com', 'marcos', '123'),
(18002, 'Aluno', 'Eduardo Zacarias', '3TIN', 'zeca@gmail.com', 'zeca', '123'),
(18200, 'Administrador', 'Wilian Nascimento da Silva', '', 'wilian.silva209@gmail.com', 'wil', '123'),
(18666, 'Professor', 'Wilhelm Klaus', '', 'wilhelm@gmail.com', 'wilhelm', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  ADD PRIMARY KEY (`matricula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
