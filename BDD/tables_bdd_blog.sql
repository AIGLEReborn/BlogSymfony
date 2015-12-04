-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Décembre 2015 à 15:16
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
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `commentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datePublication` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9474526C4B89032C` (`post_id`),
  KEY `IDX_9474526CA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `commentaire`, `datePublication`) VALUES
(30, 1, 5, 'rljhskjbcvkjsdbcjk', '0000-00-00 00:00:00'),
(31, 1, 5, 'feneskjcbsjkcbk', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `url`, `contenu`, `datePublication`) VALUES
(5, 'IFJei', 'JSP', 'cncdeqlcnqksj', '2015-12-04 14:10:00'),
(6, 'fefqfeqfcq', 'JSP', 'feqcqecc', '2015-12-04 14:20:00'),
(7, 'devceqceqc', '', 'vesvcsdcdscscs', '0000-00-00 00:00:00'),
(8, 'cdscscscsc', '', 'cdsvcscscs', '0000-00-00 00:00:00'),
(9, 'vwdwccdcdcw', 'vdsvs<cscvs', 'dsvsccsdcsd', '0000-00-00 00:00:00'),
(10, 'dvsvdwcwcw', '', 'vdsvdwcwvcdwcw', '0000-00-00 00:00:00'),
(11, 'dwvcdcvdc', '', 'dvwxcvbnvcx', '0000-00-00 00:00:00'),
(12, ';,nbvcx', '', ';,nbvcxw<', '0000-00-00 00:00:00'),
(13, 'v dxvxwv wv w', '', 'sfsdvwcscs<w', '0000-00-00 00:00:00'),
(14, 'wvswsvwvswvw', '', 'vsvwvwvwvw', '0000-00-00 00:00:00'),
(15, 'vswvwvcsvwv', '', 'vswvswvswvwvwvs', '0000-00-00 00:00:00'),
(16, 'vswvswvwsvswsw', '', 'vswvswvswcwdbcxwdfgnfbvcqx', '0000-00-00 00:00:00'),
(17, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(18, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(19, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(20, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(21, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(22, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(23, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(24, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(25, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00'),
(26, 'je suis un article', '', 'je suis un article', '2015-12-04 14:10:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'Drown', 'drown', 'olivier.frappereau@gmail.com', 'olivier.frappereau@gmail.com', 1, 'hu8h34ajeg0k88o4cws48s0g8w8o84o', '$2y$13$hu8h34ajeg0k88o4cws48e0.ncpARdecgNSMIMqpUcbzKpMtf.VoK', '2015-12-02 18:54:46', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(2, 'machin', 'machin', 'truck.olivier@gmail.com', 'truck.olivier@gmail.com', 1, 'kdce90m7mcgkgw0go8w44wg8wkcgooo', '$2y$13$kdce90m7mcgkgw0go8w44uJ.4Rk8x9EQ.rAi8MTN9lh//M2bILGsy', '2015-12-02 18:54:11', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
