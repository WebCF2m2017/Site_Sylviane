-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Juin 2017 à 13:03
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
  `texte` varchar(1000) DEFAULT NULL,
  `ladate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_idadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `texte`, `ladate`, `admin_idadmin`) VALUES
(2, 'Qu’est le stress ?', 'Le stress est comme un élastique sur lequel on tire.  Aussi longtemps qu’on le relâche suffisamment, il reprend sa forme initiale et tout va bien.  Par contre, si la tension devient trop fréquente voire permanente il finit par se briser …\r\nLes ateliers de gestion du stress permettent de découvrir des techniques qui permettent de relâcher cet élastique.  C’est un moment privilégié, hors du temps.  \r\n Principalement axés sur la sophrologie ces ateliers vous feront découvrir le pouvoir de votre respiration pour apaiser les tensions.  En vivant les évènements avec une conscience développée vous deviendrez tout à fait capable de profiter pleinement de ce qui se présente à vous.', '2017-06-14 09:08:41', 1);

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
  `texte` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `ladate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoign` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
