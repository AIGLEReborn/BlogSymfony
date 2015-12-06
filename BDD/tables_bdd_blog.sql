-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 06 Décembre 2015 à 15:22
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
  `commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datePublication` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9474526C4B89032C` (`post_id`),
  KEY `IDX_9474526CA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `commentaire`, `datePublication`) VALUES
(52, 6, 42, 'Super ! J''ai hâte. :-D', '2015-12-06 14:02:10'),
(53, 5, 45, 'Hé hé hé hé, j''ai bien aimé faire ça ;)', '2015-12-06 14:05:27'),
(54, 7, 45, 'Mais oui tu m''étonnes !', '2015-12-06 14:06:18'),
(55, 7, 44, 'Trop trop trop trop trop sexy la chiara quoi !', '2015-12-06 14:08:38'),
(56, 7, 46, 'Je pense que c''est totalement dans l''air du temps. QUe chacun défend son gagne pain.', '2015-12-06 14:11:20'),
(57, 5, 46, 'Ou tu as totallement raison. Mais bon je pense aussi que :Résumons-nous : ce qui nous est dit relève de l''imposture:\r\n\r\nLe Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.\r\n\r\nJe voulais juste troll.', '2015-12-06 14:14:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `url`, `contenu`, `datePublication`, `author_id`) VALUES
(42, 'Made in Groland : La fiction le 19 décembre.', 'JSP', 'Deux paumés grolandais de province, grillés dans toutes les entreprises de leur région, partent à la conquête du monde avec une invention qu’ils jugent révolutionnaire. Il n’y aura ni conquête, ni révolution. Mais ils vont mettre un beau bordel, à Groland comme à Paris...\r\n\r\nSynopsis d''un téléfilm de 90 minutes, Made in Groland : la fiction. Proposé aux abonnés de Canal+ - en crypté donc - en décembre 2015.\r\n\r\nLe samedi 19 selon Jules-Edouard Moustic, qui l''a annoncé hier lors de l''hebdomadaire Groland.\r\n\r\nEcrit et réalisé par Jules-Edouard Mustic et Benoît Delépine. Avec Géralrd Touillon, François Neycken, Mustic, Francis Kuntz, Christophe Salengro, Camille Bardery...', '2015-12-05 13:50:00', 5),
(43, 'Canal+ : Groland se moque de Vincent Bolloré « Le Colérique »', 'JSP', '« L''esprit Canal » fait de la résistance. Certaines émissions phares de Canal+ critiquent le nouveau boss, Vincent Bolloré, accusé de tuer la satire qui fait la réputation de la chaîne cryptée. Nouvelle illustration samedi 25 octobre, avec le retour de l''émission parodique « Groland ». Coiffé d''une bigoudène, clin d''œil aux origines bretonnes de Vincent Bolloré, le présentateur Jules-Edouard Moustic (Christian Borde, de son vrai nom) se propose de « tester les nerfs » de « Vincent Le Colérique » – le nom du président du conseil de surveillance n''étant jamais cité.\r\n\r\nMais au lieu d''une enquête sur les « dessous de ses activités africaines », c''est à Paris que l''on retrouve un envoyé spécial grolandais transpirant d''angoisse. Audacieux, Michael Kael (l''acteur Benoît Delépine), préfère se rendre dans les cuisines d''un chef breton pour une investigation... sur le kouign amann. Le reporter roule en Autolib'', les voitures électriques en libre service conçues par le groupe Bolloré. « Quel silence, quelle propreté », relève-t-il.', '2015-12-05 13:58:00', 5),
(44, '"Made in Groland" fera bien son retour sur Canal+... avec un invité chaque semaine !', 'JSP', 'Canal+ vient d''annoncer dans un communiqué que son émission "Made in Groland" reviendra bien à la rentrée...\r\n \r\nEn effet, l''émission fera son retour chaque samedi à 20h25 et en clair dans quelques semaines.\r\n \r\nL''occasion de retrouver Jules-Edouard Moustic et Chiara de Daddy qui réalisera des reportages aux côtés des correspondants Mickael Kael, Gustave de Kervern, Francis Kuntz et Franki Ki.\r\n \r\nPour finir, sachez qu''un invité sera présent en plateau chaque semaine.', '2015-12-06 14:01:00', 6),
(45, 'La parodie de l''affaire Nabilla par Groland !', 'JSP', 'Jules-Edouard Moustic et sa bande de Made in Groland ont encore frappé.\r\n\r\nC''est à l''affaire Nabilla qu''ils se sont attaqués.\r\n\r\nDans le sujet, on apprend qu''un réglement de comptes entre stars de la téléréalité grolandaise aurait eu lieu dans ce fameux hôtel pas cher, chambre 201 : "L''altercation aurait eu lieu entre Loanabilla, la vedette de l''émission Les Salopes de la téléréalité, et Tommy, de l''émission Tocard Story" annonce la voix off tout en rajoutant de nouveaux personnages tels que «Greg, de Connard en cuisine», «Guina des Connauds à Ibiza» et «Vagina, la Meilleure patissière en string» ou encore «Conrad de Putain Express».\r\n\r\nUne sombre histoire de coucheries aurait alors eu lieu dans un placard et un «sein aurait été mordu» dans la bagarre.', '2015-12-06 14:04:00', 5),
(46, 'James Blunt interdit à M6 de continuer à utiliser "You''re beautiful" pour le générique de "L''Amour est dans le Pré"', 'JSP', 'James Blunt interdit à M6 de continuer à utiliser "You''re beautiful" pour le générique de "L''Amour est dans le Pré".\r\nQue pensez-vous de la décision de James Blunt?', '2015-12-06 14:09:00', 6),
(47, 'Grande chasse au trésor !', 'JSP', 'FIFIGROT organise avec les bars participants du collectif Culture bar-bars une grande chasse au trésor !\r\n\r\nOuverture des inscriptions : Lundi 14 septembre, à partir de 17h – Dans le bar du GroVillage !', '2015-12-06 14:19:00', 5),
(48, 'Changement // La peau de Bax remplace la solitude du tueur', 'JSP', 'Le film La peau de Bax de Alex van Warmerdam avec Tom Dewispelaere, Alex van Warmerdam, Maria Kraakman (2015, Pays-Bas, 1h36, VOSTFR) remplace La solitude du tueur dans les films en compète', '2015-12-06 14:21:00', 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(5, 'Groland', 'groland', 'groland.blog@symfony.com', 'groland.blog@symfony.com', 1, '6904r47wsjk044w0oscggo84coo8k0g', '$2y$13$6904r47wsjk044w0oscggenbHUmyQ6N29yAqzZDUWztcMI43TWQy6', '2015-12-06 14:12:13', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL),
(6, 'AdminExemple', 'adminexemple', 'exempleadmin@symfony.com', 'exempleadmin@symfony.com', 1, 'sddtnj3d0pccow0g48k4kco8k044cwc', '$2y$13$sddtnj3d0pccow0g48k4kOS5OLYxEIOiUQQkHUbgauqdTOrDWmwIe', '2015-12-06 14:49:17', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(7, 'UserExemple', 'userexemple', 'userexemple@symfony.com', 'userexemple@symfony.com', 1, 'o0hr3dq9no08ok0wsk0o8408wkkg8gw', '$2y$13$o0hr3dq9no08ok0wsk0o8uf2sXNmk3v8wJpilT8WjGf/nqvTgUmca', '2015-12-06 14:10:52', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

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
