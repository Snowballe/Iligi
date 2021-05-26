-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 mai 2021 à 14:11
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iligi`
--

-- --------------------------------------------------------

--
-- Structure de la table `landlord`
--

DROP TABLE IF EXISTS `landlord`;
CREATE TABLE IF NOT EXISTS `landlord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname_landlord` varchar(255) NOT NULL,
  `name_landlord` varchar(255) NOT NULL,
  `corporate_name_landlord` varchar(255) NOT NULL,
  `tel_landlord` varchar(255) NOT NULL,
  `adress_landlord` varchar(255) NOT NULL,
  `tenant_name` varchar(255) NOT NULL,
  `email_landlord` varchar(255) NOT NULL,
  `password_landlord` varchar(255) NOT NULL,
  `property_title_landlord` varchar(255) NOT NULL,
  `RIB_landlord` varchar(255) NOT NULL,
  `last_fund_call_landlord` varchar(255) NOT NULL,
  `room_charging_landlord` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tenant`
--

DROP TABLE IF EXISTS `tenant`;
CREATE TABLE IF NOT EXISTS `tenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname_tenant` varchar(255) NOT NULL,
  `name_tenant` varchar(255) NOT NULL,
  `email_tenant` varchar(255) NOT NULL,
  `password_tenant` varchar(255) NOT NULL,
  `tel_tenant` varchar(255) NOT NULL,
  `professional_situation_tenant` varchar(255) NOT NULL,
  `nb_roommates_tenant` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tenant`
--

INSERT INTO `tenant` (`id`, `surname_tenant`, `name_tenant`, `email_tenant`, `password_tenant`, `tel_tenant`, `professional_situation_tenant`, `nb_roommates_tenant`, `created_at`, `updated_at`) VALUES
(1, 'mamiel', 'au_sel', '', '', '', '', '', '', NULL),
(2, 'mamiel', 'au_sel', '', '', '', '', '', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
