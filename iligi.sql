-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 02 juin 2021 à 09:18
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
-- Structure de la table `common`
--

DROP TABLE IF EXISTS `common`;
CREATE TABLE IF NOT EXISTS `common` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lease_commom` varchar(255) NOT NULL,
  `rent_payment_common` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `files_landlord`
--

DROP TABLE IF EXISTS `files_landlord`;
CREATE TABLE IF NOT EXISTS `files_landlord` (
  `id_files_landlords` int(11) NOT NULL AUTO_INCREMENT,
  `file_dir_landlord` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `id_uploading_landlord` int(11) NOT NULL,
  PRIMARY KEY (`id_files_landlords`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `files_landlord`
--

INSERT INTO `files_landlord` (`id_files_landlords`, `file_dir_landlord`, `created_at`, `id_uploading_landlord`) VALUES
(1, 'Assets/files/landlord/mael_loussouarn_pxe_presentation.pdf', '2021-05-31 13:18:28', 3),
(2, 'Assets/files/landlord/mael_loussouarn_pxe_presentation.pdf', '2021-05-31 13:38:48', 3),
(3, 'Assets/files/landlord/mdpglpi.txt', '2021-05-31 15:14:37', 3),
(4, 'Assets/files/landlord/mdpglpi.txt', '2021-05-31 15:46:42', 3),
(5, 'Assets/files/landlord/Livrable_VINCENT_ALEXIS_MAEL.pdf', '2021-05-31 15:55:09', 3);

-- --------------------------------------------------------

--
-- Structure de la table `files_tenant`
--

DROP TABLE IF EXISTS `files_tenant`;
CREATE TABLE IF NOT EXISTS `files_tenant` (
  `id_files_tenant` int(11) NOT NULL AUTO_INCREMENT,
  `file_dir` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `id_uploading_tenant` varchar(255) NOT NULL,
  PRIMARY KEY (`id_files_tenant`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `files_tenant`
--

INSERT INTO `files_tenant` (`id_files_tenant`, `file_dir`, `created_at`, `id_uploading_tenant`) VALUES
(1, 'Assets/files/tenant/CV Maël LOUSSOUARN.pdf', '2021-05-31 16:17:39', '9'),
(2, 'Assets/files/tenant/presse.pdf', '2021-06-01 16:39:42', '9'),
(3, 'Assets/files/tenant/RH.odt', '2021-06-01 16:40:10', '9');

-- --------------------------------------------------------

--
-- Structure de la table `landlord`
--

DROP TABLE IF EXISTS `landlord`;
CREATE TABLE IF NOT EXISTS `landlord` (
  `id_landlord` int(11) NOT NULL AUTO_INCREMENT,
  `surname_landlord` varchar(255) DEFAULT NULL,
  `name_landlord` varchar(255) DEFAULT NULL,
  `corporate_name_landlord` varchar(255) DEFAULT NULL,
  `tel_landlord` varchar(255) NOT NULL,
  `adress_landlord` varchar(255) DEFAULT NULL,
  `tenant_name` varchar(255) DEFAULT NULL,
  `email_landlord` varchar(255) NOT NULL,
  `password_landlord` varchar(255) NOT NULL,
  `property_title_landlord` varchar(255) DEFAULT NULL,
  `last_fund_call_landlord` varchar(255) DEFAULT NULL,
  `room_charging_landlord` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_landlord`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `landlord`
--

INSERT INTO `landlord` (`id_landlord`, `surname_landlord`, `name_landlord`, `corporate_name_landlord`, `tel_landlord`, `adress_landlord`, `tenant_name`, `email_landlord`, `password_landlord`, `property_title_landlord`, `last_fund_call_landlord`, `room_charging_landlord`, `created_at`, `updated_at`) VALUES
(1, 'prof', 'defrancias', NULL, '2938392610', NULL, NULL, 'groswouf@waf.fr', '$2y$10$6FCumcxdcRYNVVq2KcQv.e8Y6oTGP6mBL7mALQbO8.RugQKhLNIBK', NULL, NULL, NULL, '2021-05-27 12:45:27', NULL),
(2, 'owiw', 'monsieur', NULL, '2938392610', NULL, NULL, 'oufmonsieur@truc.com', '$2y$10$Wta5GbewWA3Pk6Sj0L.zP.rISsDFZFVr7cVtxMebKTPQFfjn.LwSO', NULL, NULL, NULL, '2021-05-27 12:48:53', NULL),
(3, '', '', 'Hembibouk', '2938392610', NULL, NULL, 'hembibiouk@gmail.fr', '$2y$10$cEavQSOXgWKchhAAwkUFy.Bh2wEcYKsDeZ2A8Ff6XTAwmmuhih2yC', NULL, NULL, NULL, '2021-05-28 11:24:50', '2021-05-31 17:55:18');

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
  `nb_roommates_tenant` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `identity_piece_tenant` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tenant`
--

INSERT INTO `tenant` (`id`, `surname_tenant`, `name_tenant`, `email_tenant`, `password_tenant`, `tel_tenant`, `nb_roommates_tenant`, `created_at`, `updated_at`, `identity_piece_tenant`) VALUES
(5, 'ledu', 'jaques', 'eude@bisou.com', '$2y$10$rIs3CyqH9vjcvljThO8cROe4DxjU2uy43ysNo6uVQPeMqLu6DNH.a', '0606040302', '0', '2021-05-26 17:10:55', NULL, ''),
(6, 'mael', 'loussouarn', 'mael.loussouarn@gmail.com', '$2y$10$dNCGiIvIsZHD9iqkcdtIWOzSqnt1MD1v2OOdTFUU0ztJVMtpoegsC', '0606405248', '0', '2021-05-26 17:21:23', NULL, ''),
(7, 'lapoule', 'oeuf', 'lapoule@gmail.com', '$2y$10$GR6n5A1ykBGRlfUuD4eTdu/YLk.eIjaCG4jGcFCh/3goCCZ2MnSTm', '0606040302', '0', '2021-05-27 11:01:35', NULL, NULL),
(8, 'jarriveaminscrire', 'estceque', 'jespere@yahoo.com', '$2y$10$dd4NPpMs8sOSGYAkbdl0MOdb0nMkptoGhZ5atfMPhpTmUHA8d3OFW', '0679839889', '0', '2021-05-27 11:05:29', NULL, NULL),
(9, 'jenaipasdecerveau', 'maké', 'rhaled@oscour.fr', '$2y$10$jLSbFXgUNpU2q28Kl9CQh.mK4XNw6p4zRXOvjmpVZbRnk6EfTd736', '0679839889', '0', '2021-05-27 11:08:33', NULL, NULL),
(10, 'fsdqfqsdf', 'sdqsdfqsf', 'fdsqfqsdf@hl.c', '$2y$10$SSH8dbH85EXnB..XY58qOeJthme51CzpmjMhI3jUmy634JMlFMGvK', '3223545543', '0', '2021-05-27 12:53:36', NULL, NULL),
(11, 'FFFFFFSQ', 'SQSQD', 'rezr@gfds', '$2y$10$U3Fm1/PYGGK4nmCIV.virezEhVoKgXWDv9A2dD4k6c3HgysG.QCru', '0679839889', '0', '2021-05-27 12:57:37', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
