-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 11 juin 2024 à 17:27
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `GACTI`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTIVITE`
--

CREATE TABLE `ACTIVITE` (
  `CODEANIM` char(8) NOT NULL,
  `DATEACT` date NOT NULL,
  `CODEETATACT` char(2) NOT NULL,
  `HRRDVACT` time DEFAULT NULL,
  `PRIXACT` decimal(7,2) DEFAULT NULL,
  `HRDEBUTACT` time DEFAULT NULL,
  `HRFINACT` time DEFAULT NULL,
  `DATEANNULEACT` date DEFAULT NULL,
  `NOMRESP` char(40) DEFAULT NULL,
  `PRENOMRESP` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ACTIVITE`
--

INSERT INTO `ACTIVITE` (`CODEANIM`, `DATEACT`, `CODEETATACT`, `HRRDVACT`, `PRIXACT`, `HRDEBUTACT`, `HRFINACT`, `DATEANNULEACT`, `NOMRESP`, `PRENOMRESP`) VALUES
('1', '2024-03-26', '1', '11:11:00', '1.00', '11:22:00', '12:11:00', '2024-06-11', 'kouider', 'acheraf');

-- --------------------------------------------------------

--
-- Structure de la table `ANIMATION`
--

CREATE TABLE `ANIMATION` (
  `CODEANIM` char(8) NOT NULL,
  `CODETYPEANIM` char(5) NOT NULL,
  `NOMANIM` char(40) DEFAULT NULL,
  `DATECREATIONANIM` date DEFAULT NULL,
  `DATEVALIDITEANIM` date DEFAULT NULL,
  `DUREEANIM` double(5,0) DEFAULT NULL,
  `LIMITEAGE` int(2) DEFAULT NULL,
  `TARIFANIM` decimal(7,2) DEFAULT NULL,
  `NBREPLACEANIM` int(2) DEFAULT NULL,
  `DESCRIPTANIM` char(250) DEFAULT NULL,
  `COMMENTANIM` char(250) DEFAULT NULL,
  `DIFFICULTEANIM` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ANIMATION`
--

INSERT INTO `ANIMATION` (`CODEANIM`, `CODETYPEANIM`, `NOMANIM`, `DATECREATIONANIM`, `DATEVALIDITEANIM`, `DUREEANIM`, `LIMITEAGE`, `TARIFANIM`, `NBREPLACEANIM`, `DESCRIPTANIM`, `COMMENTANIM`, `DIFFICULTEANIM`) VALUES
('1', '1', 'foot', '2024-03-25', '2024-03-28', 8, 7, '7.00', 12, 'jhcjcjc', 'chfjfj', 'Très facile'),
('12', '1', 'velobato', '2024-06-10', '2024-06-18', 5, 13, '7.00', 6, 'hdgyev', 'eeeeeeee', 'Difficile'),
('2', '2', 'visite du musée', '2024-06-11', '2024-06-12', 2, 18, '14.00', 12, 'bienvenue visite du musée', 'bien', 'Très facile');

-- --------------------------------------------------------

--
-- Structure de la table `COMPTE`
--

CREATE TABLE `COMPTE` (
  `USER` char(8) NOT NULL,
  `MDP` char(10) DEFAULT NULL,
  `NOMCOMPTE` char(40) DEFAULT NULL,
  `PRENOMCOMPTE` char(30) DEFAULT NULL,
  `DATEINSCRIP` date DEFAULT NULL,
  `DATEFERME` date DEFAULT NULL,
  `TYPEPROFIL` char(20) DEFAULT NULL,
  `DATEDEBSEJOUR` date DEFAULT NULL,
  `DATEFINSEJOUR` date DEFAULT NULL,
  `DATENAISCOMPTE` date DEFAULT NULL,
  `ADRMAILCOMPTE` char(70) DEFAULT NULL,
  `NOTELCOMPTE` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `COMPTE`
--

INSERT INTO `COMPTE` (`USER`, `MDP`, `NOMCOMPTE`, `PRENOMCOMPTE`, `DATEINSCRIP`, `DATEFERME`, `TYPEPROFIL`, `DATEDEBSEJOUR`, `DATEFINSEJOUR`, `DATENAISCOMPTE`, `ADRMAILCOMPTE`, `NOTELCOMPTE`) VALUES
('Acheraf', 'achk', 'Kouider', 'Acheraf', '2024-03-19', '2024-03-26', 'va', '2024-03-19', '2026-03-18', '2024-03-13', 'acherafkouider94@gmail.com', '0625575591'),
('you', 'youyou', 'you', 'cherki', '2024-03-19', '2024-04-17', 'en', NULL, NULL, '2024-03-12', 'youyou@gmail.com', '0764667462');

-- --------------------------------------------------------

--
-- Structure de la table `ETAT_ACT`
--

CREATE TABLE `ETAT_ACT` (
  `CODEETATACT` char(2) NOT NULL,
  `NOMETATACT` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ETAT_ACT`
--

INSERT INTO `ETAT_ACT` (`CODEETATACT`, `NOMETATACT`) VALUES
('1', 'ouvert'),
('2', 'fermer'),
('3', 'incertaine');

-- --------------------------------------------------------

--
-- Structure de la table `INSCRIPTION`
--

CREATE TABLE `INSCRIPTION` (
  `NOINSCRIP` bigint(6) NOT NULL,
  `USER` char(8) NOT NULL,
  `CODEANIM` char(8) NOT NULL,
  `DATEACT` date NOT NULL,
  `DATEINSCRIP` date DEFAULT NULL,
  `DATEANNULE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `INSCRIPTION`
--

INSERT INTO `INSCRIPTION` (`NOINSCRIP`, `USER`, `CODEANIM`, `DATEACT`, `DATEINSCRIP`, `DATEANNULE`) VALUES
(1, 'you', '1', '2024-03-26', '2024-03-26', '2024-06-11'),
(2, 'you', '1', '2024-03-26', '2024-03-26', '2024-06-11'),
(3, 'you', '1', '2024-03-26', '2024-03-26', NULL),
(4, 'Acheraf', '1', '2024-03-26', '2024-03-26', '2024-06-10'),
(8, 'you', '1', '2024-03-26', '2024-03-28', NULL),
(9, 'Acheraf', '1', '2024-03-26', '2024-04-09', '2024-06-10'),
(10, 'Acheraf', '1', '2024-03-26', '2024-06-10', '2024-06-10'),
(11, 'Acheraf', '1', '2024-03-26', '2024-06-10', NULL),
(12, 'Acheraf', '1', '2024-03-26', '2024-06-10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `TYPE_ANIM`
--

CREATE TABLE `TYPE_ANIM` (
  `CODETYPEANIM` char(5) NOT NULL,
  `NOMTYPEANIM` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `TYPE_ANIM`
--

INSERT INTO `TYPE_ANIM` (`CODETYPEANIM`, `NOMTYPEANIM`) VALUES
('1', 'SP'),
('2', 'AR'),
('3', 'CT'),
('4', 'CN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ACTIVITE`
--
ALTER TABLE `ACTIVITE`
  ADD PRIMARY KEY (`CODEANIM`,`DATEACT`),
  ADD KEY `I_FK_ACTIVITE_ANIMATION` (`CODEANIM`),
  ADD KEY `I_FK_ACTIVITE_ETAT_ACT` (`CODEETATACT`);

--
-- Index pour la table `ANIMATION`
--
ALTER TABLE `ANIMATION`
  ADD PRIMARY KEY (`CODEANIM`),
  ADD KEY `I_FK_ANIMATION_TYPE_ANIM` (`CODETYPEANIM`);

--
-- Index pour la table `COMPTE`
--
ALTER TABLE `COMPTE`
  ADD PRIMARY KEY (`USER`);

--
-- Index pour la table `ETAT_ACT`
--
ALTER TABLE `ETAT_ACT`
  ADD PRIMARY KEY (`CODEETATACT`);

--
-- Index pour la table `INSCRIPTION`
--
ALTER TABLE `INSCRIPTION`
  ADD PRIMARY KEY (`NOINSCRIP`),
  ADD KEY `I_FK_INSCRIPTION_COMPTE` (`USER`),
  ADD KEY `I_FK_INSCRIPTION_ACTIVITE` (`CODEANIM`,`DATEACT`);

--
-- Index pour la table `TYPE_ANIM`
--
ALTER TABLE `TYPE_ANIM`
  ADD PRIMARY KEY (`CODETYPEANIM`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `INSCRIPTION`
--
ALTER TABLE `INSCRIPTION`
  MODIFY `NOINSCRIP` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ACTIVITE`
--
ALTER TABLE `ACTIVITE`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`CODEANIM`) REFERENCES `ANIMATION` (`CODEANIM`),
  ADD CONSTRAINT `activite_ibfk_2` FOREIGN KEY (`CODEETATACT`) REFERENCES `ETAT_ACT` (`CODEETATACT`);

--
-- Contraintes pour la table `ANIMATION`
--
ALTER TABLE `ANIMATION`
  ADD CONSTRAINT `animation_ibfk_1` FOREIGN KEY (`CODETYPEANIM`) REFERENCES `TYPE_ANIM` (`CODETYPEANIM`);

--
-- Contraintes pour la table `INSCRIPTION`
--
ALTER TABLE `INSCRIPTION`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`USER`) REFERENCES `COMPTE` (`USER`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`CODEANIM`,`DATEACT`) REFERENCES `ACTIVITE` (`CODEANIM`, `DATEACT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
