-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 08 Septembre 2017 à 12:02
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `login`, `password`, `mail`) VALUES
(1, 'admin', 'admin123', 'houssain_khalifa@hotmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `texte` text,
  `url` varchar(255) NOT NULL,
  `ladate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_idadmin` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `texte`, `url`, `ladate`, `admin_idadmin`) VALUES
(2, 'Qu’est ce le stress ?', 'Le stress est comme un élastique sur lequel on tire.  Aussi longtemps qu’on le relâche suffisamment, il reprend sa forme initiale et tout va bien.  Par contre, si la tension devient trop fréquente voire permanente il finit par se briser …\r\nLes ateliers de gestion du stress permettent de découvrir des techniques qui permettent de relâcher cet élastique.  C’est un moment privilégié, hors du temps.  \r\n Principalement axés sur la sophrologie ces ateliers vous feront découvrir le pouvoir de votre respiration pour apaiser les tensions.  En vivant les évènements avec une conscience développée vous deviendrez tout à fait capable de profiter pleinement de ce qui se présente à vous.', 'http://www.a-la-rencontre-de-soi.ch//media/mod_zentools/cache/images/22485054_Small-2de12ba5192a0f0963344b9fd9d7a3ed.jpg', '2017-06-14 09:08:41', 1),
(3, 'Le principe', 'La sophrologie (du grec sôs, "harmonie", et "phren "esprit") est une méthode d\'investigation et d\'harmonisation par des états modifiés de conscience. La sophrologie utilise des exercices de relaxation statiques et de relaxation dynamiques qui visent à créer un vécu corporel qui permet de développer positivement les capacités du pratiquant. Pour optimiser ce vécu, le sophrologue amène le pratiquant à modifier son niveau de vigilance entre veille et sommeil. En effet, à ce niveau de vigilance (que vous traversez tous les soirs quand vous vous endormez) nous somatisons pleinement ce que nous visualisons (quand il s’agit d’exercice de visualisation) et ce que nous ressentons (quand il s’agit d’exercices d’écoute du corps).', 'http://cactusbleu.fr/wp-content/uploads/2017/02/sophrologue-lille-59-400x250.jpg', '2017-06-19 11:39:02', 1),
(4, 'La respiration', 'Elle régule le rythme cardiaque et la tension. Bien respirer permet déjà d’évacuer le stress. « La respiration ventrale permet une meilleure digestion, une meilleure assimilation des vitamines et un meilleur amincissement parce qu’elle fait brûler des calories. »\nelle régule le rythme cardiaque et la tension. Bien respirer permet déjà d’évacuer le stress. « La respiration ventrale permet une meilleure digestion, une meilleure assimilation des vitamines et un meilleur amincissement parce qu’elle fait brûler des calories. »', 'http://www.accoressens.fr/assets/img/box2.jpg', '2017-06-19 11:39:02', 1);

-- --------------------------------------------------------

--
-- Structure de la table `audio`
--

CREATE TABLE `audio` (
  `id_audio` int(10) UNSIGNED NOT NULL,
  `url_audio` varchar(45) DEFAULT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `admin_idadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `id_calendrier` int(10) UNSIGNED NOT NULL,
  `jour_evenement` varchar(2) DEFAULT NULL,
  `mois_evenement` varchar(2) DEFAULT NULL,
  `annee_evenement` varchar(4) DEFAULT NULL,
  `evenement_id_evenement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_url` varchar(250) DEFAULT NULL,
  `titre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `droit_groupe`
--

CREATE TABLE `droit_groupe` (
  `id_droit` int(11) NOT NULL,
  `droit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `droit_groupe`
--

INSERT INTO `droit_groupe` (`id_droit`, `droit`) VALUES
(1, 'groupe1'),
(2, 'groupe2'),
(3, 'groupe3');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_evenement` int(11) NOT NULL,
  `tittre_evenement` varchar(45) DEFAULT NULL,
  `contenu_evenement` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `type`, `url`, `title`, `description`) VALUES
(21, '14.png', 549464, 'image/png', 'http://localhost/base_php/site client/admin/server/php/files/14.png', '', ''),
(22, '15.png', 1998138, 'image/png', 'http://localhost/base_php/site client/admin/server/php/files/15.png', '', ''),
(23, '16.png', 1413315, 'image/png', 'http://localhost/base_php/site client/admin/server/php/files/16.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `texte` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id_temoign` int(10) UNSIGNED NOT NULL,
  `texte` varchar(300) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `ladate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoign`, `texte`, `login`, `ladate`) VALUES
(6, 'Bonjour , giglilililililililii', 'E.T', '2017-07-04 12:50:26'),
(7, 'Bonsoir, ouloulouloulou', 'H.B', '2017-07-04 12:50:26'),
(8, 'Coucou, hohohohohihihihihohohohoho', 'YA', '2017-07-04 12:50:26'),
(9, 'dfgdfgdfgdfg', 'ffg', '2017-07-04 12:58:51'),
(10, 'dfgdfgdfgdfg', 'dgdfg', '2017-07-04 12:58:51'),
(11, 'dfgdfgdfgdfgdgdfgdf', 'fg', '2017-07-04 12:58:51'),
(12, 'dfgdfgdfgdgdgdfg', 'fg', '2017-07-04 12:58:51'),
(13, 'dfgdfgdfgdfgdgdfgdfgdfg', 'fg', '2017-07-04 12:58:51'),
(14, 'dfgdgdfgdfgdfgdfgdfgdfgdf', 'fg', '2017-07-04 12:58:51'),
(15, 'dfgdfgdfdfdfgdfgdffgg', 'fg', '2017-07-04 12:58:51'),
(16, 'dfgdfgdgdgdgdfgdfgdfgdfgdfg', 'fg', '2017-07-04 12:58:51');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `ladate` date DEFAULT NULL,
  `droit_groupe_id_droit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
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
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`,`admin_idadmin`),
  ADD KEY `fk_article_admin1_idx` (`admin_idadmin`);

--
-- Index pour la table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id_audio`,`admin_idadmin`),
  ADD KEY `fk_audio_admin1_idx` (`admin_idadmin`);

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id_calendrier`,`evenement_id_evenement`),
  ADD KEY `fk_calendrier_evenement_idx` (`evenement_id_evenement`);

--
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `droit_groupe`
--
ALTER TABLE `droit_groupe`
  ADD PRIMARY KEY (`id_droit`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evenement`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id_temoign`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`,`droit_groupe_id_droit`),
  ADD KEY `fk_utilisateur_droit_groupe1_idx` (`droit_groupe_id_droit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `audio`
--
ALTER TABLE `audio`
  MODIFY `id_audio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `id_calendrier` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoign` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
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
-- Contraintes pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD CONSTRAINT `fk_calendrier_evenement` FOREIGN KEY (`evenement_id_evenement`) REFERENCES `evenement` (`id_evenement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_droit_groupe1` FOREIGN KEY (`droit_groupe_id_droit`) REFERENCES `droit_groupe` (`id_droit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
