-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 03 avr. 2022 à 13:53
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `renduphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `espece` varchar(255) NOT NULL,
  `date_entree` date NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `regime_alimentaire` varchar(255) NOT NULL,
  `traitement` varchar(255) NOT NULL,
  `enclo` varchar(255) NOT NULL,
  `environnement` varchar(255) NOT NULL,
  `date_deces` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `enclo`
--

DROP TABLE IF EXISTS `enclo`;
CREATE TABLE IF NOT EXISTS `enclo` (
  `id` int(11) NOT NULL,
  `taille` int(255) NOT NULL,
  `nombre` decimal(65,0) NOT NULL,
  `type` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `nombre_animaux` decimal(65,0) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `soigneur`
--

DROP TABLE IF EXISTS `soigneur`;
CREATE TABLE IF NOT EXISTS `soigneur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_entree` date NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `nb_max_enclo` int(200) NOT NULL,
  `superieur` varchar(255) NOT NULL,
  `date_sortie` date NOT NULL,
  `info_supp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `zoo`
--

DROP TABLE IF EXISTS `zoo`;
CREATE TABLE IF NOT EXISTS `zoo` (
  `id` int(11) NOT NULL,
  `enclo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
