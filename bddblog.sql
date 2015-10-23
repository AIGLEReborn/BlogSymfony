-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Octobre 2015 à 14:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bddblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datePublication` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `url`, `contenu`, `datePublication`) VALUES
(1, 'test 1', 'test-1', 'contenu du test 1', '2015-10-22 00:00:00'),
(2, 'test2', 'test-2', 'contenu du test 2', '2015-10-22 00:00:00'),
(3, 'test 4', 'JSP', 'contenu 4', '2010-01-01 06:00:00');
--
-- Base de données :  `mediabat`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `U_Nom` varchar(50) DEFAULT NULL,
  `U_Prenom` varchar(50) DEFAULT NULL,
  `U_Age` int(11) DEFAULT NULL,
  `U_Adresse` text,
  `U_CP` text,
  `U_Ville` text,
  `U_Mail` text,
  PRIMARY KEY (`U_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `U_User` varchar(50) DEFAULT NULL,
  `U_Pass` varchar(200) DEFAULT NULL,
  `U_Admin` int(11) DEFAULT '0',
  `U_Nom` text,
  `U_Prenom` int(11) DEFAULT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Base de données :  `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
