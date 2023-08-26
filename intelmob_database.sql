-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2023 at 11:09 AM
-- Server version: 10.0.27-MariaDB
-- PHP Version: 5.6.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_imob`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `idconfig` int(11) NOT NULL,
  `chave` varchar(100) NOT NULL,
  `valor` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`idconfig`, `chave`, `valor`) VALUES
(1, 'SITEADDRESS', 'https://[INSERIR ENDEREÇO COMPLETO]'),
(2, 'SHORTSITEADDRESS', 'https://[INSERIR ENDEREÇO COMPLETO]'),
(3, 'SITEHOST', '[INSERIR HOST DO EMAIL]'),
(4, 'SITEEMAIL', '[INSERIR EMAIL]'),
(5, 'SITEPASS', '[INSERIR SENHA DO EMAIL]'),
(8, 'SITE_NAME', 'IntelMob'),
(9, 'DIALOG_PERSONA', 'IntelMob');

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE IF NOT EXISTS `locales` (
  `localeID` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `englishName` varchar(255) DEFAULT NULL,
  `portugueseName` varchar(255) DEFAULT NULL,
  `spanishName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`localeID`, `code`, `englishName`, `portugueseName`, `spanishName`) VALUES
(1, 'pt_BR', 'Portuguese', 'Português', 'Portugués'),
(2, 'en_US', 'English', 'Inglês', 'Inglés'),
(3, 'es_ES', 'Spanish', 'Espanhol', 'Español');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `logID` int(11) NOT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(45) DEFAULT NULL,
  `logTypeID` int(11) DEFAULT NULL,
  `agentID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `passwordLastUpdate` datetime DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `activationToken` varchar(255) DEFAULT NULL,
  `activationExpiry` datetime DEFAULT NULL,
  `activatedAt` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT 'Yes',
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `timezone` varchar(125) DEFAULT 'America/Sao_Paulo',
  `localeID` int(11) DEFAULT '2',
  `allowmarketing` int(11) NOT NULL DEFAULT '1',
  `registry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isManager` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `password`, `passwordLastUpdate`, `email`, `phone`, `activationToken`, `activationExpiry`, `activatedAt`, `active`, `resetToken`, `resetComplete`, `name`, `photo`, `institution`, `country`, `timezone`, `localeID`, `allowmarketing`, `registry_date`, `isManager`) VALUES
(1, '$2y$10$fbEU2cfnLlRsjaUgziNvR.fTWEhfC.pH1k.gpAD.Qu.oXTJjrSMD.', '2023-06-02 16:52:05', 'gabrielnunesoliveira@gmail.com', NULL, 'Ka2k4YUm3thnyzxC', '2023-06-03 16:52:05', NULL, 'No', NULL, 'No', 'Gabriel Oliveira', NULL, NULL, NULL, 'America/Sao_Paulo', 1, 1, '2023-06-02 16:52:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`idconfig`);

--
-- Indexes for table `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`localeID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `FK_logs_logTypeID` (`logTypeID`),
  ADD KEY `FK_logs_agentID` (`agentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `idconfig` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `locales`
--
ALTER TABLE `locales`
  MODIFY `localeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
