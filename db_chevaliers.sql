-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 19 fév. 2020 à 11:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_chevaliers`
--

-- --------------------------------------------------------

--
-- Structure de la table `chevalier`
--

DROP TABLE IF EXISTS `chevalier`;
CREATE TABLE IF NOT EXISTS `chevalier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constellation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chevalier`
--

INSERT INTO `chevalier` (`id`, `nom`, `photo`, `constellation`, `origine`, `technique`, `presentation`) VALUES
(1, 'Seiya', 'https://photos.abweb.com/websites_data/mangas/upload/programmes/les-chevaliers-du-zodiaque/personnages/seiya.png', 'Pégase', 'Japon', 'Les Météores de Pégase', 'Le Chevalier Pegase est le héros de la série. Son courage et son dévouement envers Athéna est sans limite. Pendant toute la série il rêve un jour de revoir sa soeur dont il a été séparé étant petit. Orphelin très jeune, Seiya est envoyé à la fondation Glard où il suit un entraînement très difficile. Il rejoint ensuite un autre centre et part à Athènes où il conquiert l’armure de bronze de Pégase. Un esprit combatif très développé et un courage à toute épreuve caractérisent ce valeureux chevalier'),
(2, 'Hyoga', 'https://photos.abweb.com/websites_data/mangas/upload/programmes/les-chevaliers-du-zodiaque/personnages/hyoga.png', 'Cygne', 'Russie', 'La poussière de diamant', 'Seul chevalier de bronze n’étant qu\'à moitié japonais, Hyoga a connu une enfance tragique marqué par la disparition accidentelle de sa mère. Le nom de ce Chevalier de Bronze, d’origine russe, est synonyme de « glacier ». C’est Camus, le chevalier d’or du Verseau, qui lui dispense son entraînement dans les glaces de Sibérie. C’est à cette époque qu’il apprend à mettre en fuite ses adversaires en faisant tomber sur eux la neige de cristal et la poussière de diamant.');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200219084141', '2020-02-19 08:42:02'),
('20200219091856', '2020-02-19 09:19:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
