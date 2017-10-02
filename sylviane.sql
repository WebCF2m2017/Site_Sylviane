-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 oct. 2017 à 00:52
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sylviane`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `login`, `password`, `mail`) VALUES
(1, 'admin', 'admin123', 'houssain_khalifa@hotmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `texte` text,
  `url` varchar(255) NOT NULL,
  `ladate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_idadmin` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`,`admin_idadmin`),
  KEY `fk_article_admin1_idx` (`admin_idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `texte`, `url`, `ladate`, `admin_idadmin`) VALUES
(2, 'Qu’est ce le stress ?', 'Le stress est comme un élastique sur lequel on tire.  Aussi longtemps qu’on le relâche suffisamment, il reprend sa forme initiale et tout va bien.  Par contre, si la tension devient trop fréquente voire permanente il finit par se briser …\r\nLes ateliers de gestion du stress permettent de découvrir des techniques qui permettent de relâcher cet élastique.  C’est un moment privilégié, hors du temps.  \r\n Principalement axés sur la sophrologie ces ateliers vous feront découvrir le pouvoir de votre respiration pour apaiser les tensions.  En vivant les évènements avec une conscience développée vous deviendrez tout à fait capable de profiter pleinement de ce qui se présente à vous.', 'http://www.a-la-rencontre-de-soi.ch//media/mod_zentools/cache/images/22485054_Small-2de12ba5192a0f0963344b9fd9d7a3ed.jpg', '2017-06-14 09:08:41', 1),
(4, 'La respiration', 'Elle régule le rythme cardiaque et la tension. Bien respirer permet déjà d’évacuer le stress. « La respiration ventrale permet une meilleure digestion, une meilleure assimilation des vitamines et un meilleur amincissement parce qu’elle fait brûler des calories. »\nelle régule le rythme cardiaque et la tension. Bien respirer permet déjà d’évacuer le stress. « La respiration ventrale permet une meilleure digestion, une meilleure assimilation des vitamines et un meilleur amincissement parce qu’elle fait brûler des calories. »', 'http://www.accoressens.fr/assets/img/box2.jpg', '2017-06-19 11:39:02', 1),
(16, 'ghjghjghjgj', 'sgf gfdg dfg dfg dfg ddfg dfg', 'https://pbs.twimg.com/profile_images/1409126978/GH_black_logo_on_white_background_copy_400x400.jpg', '2017-10-01 11:40:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `id_audio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url_audio` varchar(45) DEFAULT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `admin_idadmin` int(11) NOT NULL,
  PRIMARY KEY (`id_audio`,`admin_idadmin`),
  KEY `fk_audio_admin1_idx` (`admin_idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

DROP TABLE IF EXISTS `calendrier`;
CREATE TABLE IF NOT EXISTS `calendrier` (
  `id_calendrier` int(11) NOT NULL AUTO_INCREMENT,
  `jour_evenement` varchar(2) NOT NULL,
  `mois_evenement` varchar(2) NOT NULL,
  `annee_evenement` varchar(4) NOT NULL,
  `id_evenement` int(11) NOT NULL,
  PRIMARY KEY (`id_calendrier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `img_url` varchar(250) DEFAULT NULL,
  `titre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `droit_groupe`
--

DROP TABLE IF EXISTS `droit_groupe`;
CREATE TABLE IF NOT EXISTS `droit_groupe` (
  `id_droit` int(11) NOT NULL,
  `droit` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `droit_groupe`
--

INSERT INTO `droit_groupe` (`id_droit`, `droit`) VALUES
(1, 'groupe1'),
(2, 'groupe2'),
(3, 'groupe3');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id_evenement` int(11) NOT NULL,
  `titre_evenement` varchar(255) NOT NULL,
  `contenu_evenement` text NOT NULL,
  PRIMARY KEY (`id_evenement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `type`, `url`, `title`, `description`) VALUES
(24, '14.png', 549464, 'image/png', 'http://localhost/code_php/site_silvyane_version_finale/admin/server/php/files/14.png', '', ''),
(25, '15.png', 1998138, 'image/png', 'http://localhost/code_php/site_silvyane_version_finale/admin/server/php/files/15.png', '', ''),
(26, '16.png', 1413315, 'image/png', 'http://localhost/code_php/site_silvyane_version_finale/admin/server/php/files/16.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `texte` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoign` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `texte` varchar(300) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `ladate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_temoign`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoign`, `texte`, `login`, `ladate`) VALUES
(6, 'Bonjour , giglilililililililii', 'E.T', '2017-07-04 12:50:26'),
(7, 'Bonsoir, ouloulouloulou', 'H.B', '2017-07-04 12:50:26'),
(8, 'Coucou, hohohohohihihihihohohohoho', 'YA', '2017-07-04 12:50:26'),
(18, 'hj hj hj hj hj jh jh', 'hj', '2017-10-01 11:40:49');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `ladate` date DEFAULT NULL,
  `droit_groupe_id_droit` int(11) NOT NULL,
  PRIMARY KEY (`id`,`droit_groupe_id_droit`),
  KEY `fk_utilisateur_droit_groupe1_idx` (`droit_groupe_id_droit`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `mail`, `ladate`, `droit_groupe_id_droit`) VALUES
(1, 'Dexterou', 'lulu_toto@gmail.com', NULL, 1),
(2, 'francky', 'francky_toto@gmail.com', NULL, 1),
(3, 'johny', 'johny_toto@gmail.com', NULL, 1),
(4, 'Joao', 'joao_toto@gmail.com', NULL, 2),
(5, 'momo', 'momo_toto@gmail.com', NULL, 2),
(6, 'tristan', 'tristan_toto@gmail.com', NULL, 2),
(7, 'Mounir', 'mounir_toto@gmail.com', NULL, 3),
(8, 'hiliyeh', 'hiliyeh_toto@gmail.com', NULL, 3),
(9, 'igor', 'igor_toto@gmail.com', NULL, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `fk_audio_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_droit_groupe1` FOREIGN KEY (`droit_groupe_id_droit`) REFERENCES `droit_groupe` (`id_droit`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
