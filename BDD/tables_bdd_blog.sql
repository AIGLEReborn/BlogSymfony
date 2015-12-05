-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 05 Décembre 2015 à 23:12
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `commentaire`, `datePublication`) VALUES
(51, 4, 41, 'qsfghgfdsq', '2015-12-05 22:10:00');

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
  `author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5A8A6C8DF675F31B` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `url`, `contenu`, `datePublication`, `author_id`) VALUES
(34, 'Premier article', 'JSP', 'vgbfddfgcgvc', '2015-12-04 19:53:00', 1),
(35, 'Second article', 'JSP', 'deghbgfdfgvc', '2015-12-04 19:57:00', 2),
(36, 'Troisième article google !', 'JSP', 'gfdxvcx', '2015-12-04 19:58:00', 3),
(38, 'vveeece', 'JSP', 'cecececeee', '2015-12-04 19:59:00', 1),
(39, 'efgfedf', 'JSP', 'vvdvsvvsvs', '2015-12-04 20:00:00', 2),
(40, 'Sixieme tarrace !', 'JSP', 'Donc normalment le premier est sur la première page', '2015-12-04 20:01:00', 3),
(41, 'oooooooooooooooooooooooooh Y', 'JSP', 'Motdakdeoj zjeiqjcqoiejcqe joicejcoiqjcoqi joicoqijcoijc hoisqchqochqoi cqoc qcqhcoqichqsiochqoi sqchoqchsqoichqoichqiochqoichqoichqoish', '2015-12-04 20:31:00', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'Drown', 'drown', 'olivier.frappereau@gmail.com', 'olivier.frappereau@gmail.com', 1, 'hu8h34ajeg0k88o4cws48s0g8w8o84o', '$2y$13$hu8h34ajeg0k88o4cws48e0.ncpARdecgNSMIMqpUcbzKpMtf.VoK', '2015-12-05 22:17:34', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(2, 'machin', 'machin', 'truck.olivier@gmail.com', 'truck.olivier@gmail.com', 1, 'kdce90m7mcgkgw0go8w44wg8wkcgooo', '$2y$13$kdce90m7mcgkgw0go8w44uJ.4Rk8x9EQ.rAi8MTN9lh//M2bILGsy', '2015-12-02 18:54:11', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(3, 'lambda', 'lambda', 'lambda@hotmail.com', 'lambda@hotmail.com', 1, 'qa13xm7pn2o84ck00k48gk8wsgko840', '$2y$13$qa13xm7pn2o84ck00k48geq4/Z9CHvH1YnYp3nSD4oGg/1oMU3yHC', '2015-12-04 17:23:36', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(4, 'azeazeaze', 'azeazeaze', 'azeazeaze@hotmail.fr', 'azeazeaze@hotmail.fr', 1, 'ge5v93a1q0gswgo40k0ss84k0s4gsc0', '$2y$13$ge5v93a1q0gswgo40k0ssu6w4/oy6/Ik933Tx/rLXTqFdiq2wxNcO', '2015-12-05 21:49:00', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_5A8A6C8DF675F31B` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
