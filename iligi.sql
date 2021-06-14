-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 14 juin 2021 à 08:18
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
  `id_landlord_concerned` varchar(255) NOT NULL,
  `id_tenant_concerned` varchar(255) NOT NULL,
  `file_dir_common` varchar(255) NOT NULL,
  `lease_commom` varchar(255) DEFAULT NULL,
  `rent_payment_common` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `common`
--

INSERT INTO `common` (`id`, `id_landlord_concerned`, `id_tenant_concerned`, `file_dir_common`, `lease_commom`, `rent_payment_common`, `created_at`, `updated_at`) VALUES
(1, '', '', '../Assets/files/common/CV Maël LOUSSOUARN.pdf', NULL, NULL, '2021-06-03 11:32:15', NULL),
(2, '', '', '../Assets/files/common/presse.pdf', NULL, NULL, '2021-06-03 11:39:46', NULL),
(3, '', '', '../Assets/files/common/Livrable_VINCENT_ALEXIS_MAEL.pdf', NULL, NULL, '2021-06-03 11:44:26', NULL),
(4, '', '', '../Assets/files/common/presse.odt', NULL, NULL, '2021-06-03 11:54:46', NULL),
(5, '4', '8', '../Assets/files/common/bail.pdf', NULL, NULL, '2021-06-11 09:37:41', NULL),
(6, '3', '10', '../Assets/files/common/bail(2).pdf', NULL, NULL, '2021-06-11 14:19:35', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `files_landlord`
--

INSERT INTO `files_landlord` (`id_files_landlords`, `file_dir_landlord`, `created_at`, `id_uploading_landlord`) VALUES
(1, 'Assets/files/landlord/mael_loussouarn_pxe_presentation.pdf', '2021-05-31 13:18:28', 3),
(2, 'Assets/files/landlord/mael_loussouarn_pxe_presentation.pdf', '2021-05-31 13:38:48', 3),
(3, 'Assets/files/landlord/mdpglpi.txt', '2021-05-31 15:14:37', 3),
(4, 'Assets/files/landlord/mdpglpi.txt', '2021-05-31 15:46:42', 3),
(5, 'Assets/files/landlord/Livrable_VINCENT_ALEXIS_MAEL.pdf', '2021-05-31 15:55:09', 3),
(6, 'Assets/files/landlord/CV Maël LOUSSOUARN.pdf', '2021-06-07 14:13:43', 3),
(7, 'Assets/files/landlord/540cb75550adf33f281f29132dddd14fded85bfc(1).pdf', '2021-06-11 15:07:00', 3),
(8, 'Assets/files/landlord/bail(9).pdf', '2021-06-11 15:07:34', 3),
(9, 'Assets/files/landlord/bail(7).pdf', '2021-06-11 15:07:53', 3),
(10, 'Assets/files/landlord/briefing.txt', '2021-06-11 15:08:26', 3),
(11, 'Assets/files/landlord/country code html.txt', '2021-06-11 15:08:44', 3),
(12, 'Assets/files/landlord/RH.odt', '2021-06-11 15:11:29', 3),
(13, 'Assets/files/landlord/carousel2.jpg', '2021-06-11 15:42:05', 3),
(14, 'Assets/files/landlord/bail(1).pdf', '2021-06-11 15:57:19', 4),
(28, 'Assets/files/landlord/certificate_example(3).pdf', '2021-06-14 10:09:30', 4),
(27, 'Assets/files/landlord/mael_loussouarn_pxe_presentation.pdf', '2021-06-14 10:04:40', 4),
(26, 'Assets/files/landlord/CV Maël LOUSSOUARN.pdf', '2021-06-11 17:16:56', 4),
(25, 'Assets/files/landlord/CV Maël LOUSSOUARN.pdf', '2021-06-11 17:10:30', 4),
(23, 'Assets/files/landlord/CV Maël LOUSSOUARN.pdf', '2021-06-11 17:08:51', 4),
(24, 'Assets/files/landlord/CV Maël LOUSSOUARN.pdf', '2021-06-11 17:09:37', 4),
(22, 'Assets/files/landlord/briefing.txt', '2021-06-11 16:25:02', 4),
(29, 'Assets/files/landlord/bail(5).pdf', '2021-06-14 10:17:53', 4);

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
  `nb_files_uploaded_landlord` int(11) DEFAULT '0',
  `property_title_landlord` varchar(255) DEFAULT NULL,
  `last_fund_call_landlord` varchar(255) DEFAULT NULL,
  `room_charging_landlord` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_landlord`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `landlord`
--

INSERT INTO `landlord` (`id_landlord`, `surname_landlord`, `name_landlord`, `corporate_name_landlord`, `tel_landlord`, `adress_landlord`, `tenant_name`, `email_landlord`, `password_landlord`, `nb_files_uploaded_landlord`, `property_title_landlord`, `last_fund_call_landlord`, `room_charging_landlord`, `created_at`, `updated_at`) VALUES
(1, 'prof', 'defrancias', NULL, '2938392610', NULL, NULL, 'groswouf@waf.fr', '$2y$10$6FCumcxdcRYNVVq2KcQv.e8Y6oTGP6mBL7mALQbO8.RugQKhLNIBK', NULL, NULL, NULL, NULL, '2021-05-27 12:45:27', NULL),
(2, 'owiw', 'monsieur', NULL, '2938392610', NULL, NULL, 'oufmonsieur@truc.com', '$2y$10$Wta5GbewWA3Pk6Sj0L.zP.rISsDFZFVr7cVtxMebKTPQFfjn.LwSO', NULL, NULL, NULL, NULL, '2021-05-27 12:48:53', NULL),
(3, 'hem', 'bibouk', 'Hembibouk', '2938392610', NULL, NULL, 'hembibiouk@gmail.fr', '$2y$10$cEavQSOXgWKchhAAwkUFy.Bh2wEcYKsDeZ2A8Ff6XTAwmmuhih2yC', NULL, NULL, NULL, NULL, '2021-05-28 11:24:50', '2021-05-31 17:55:18'),
(4, 'Chad', 'Guy', 'Amercia Enterprises', '2938392610', NULL, NULL, 'chad.guy@aenter.com', '$2y$10$xlBI2FIEiiDCUErYbHro3ez0WuQEwrlU63PnFBxBzQgqyiQKx12mS', NULL, NULL, NULL, NULL, '2021-06-08 16:21:12', NULL),
(5, 'Daniel', 'Balavoine', '', '0692829304', NULL, NULL, 'daniel.balav@gmail.com', '$2y$10$F2/HXutORYyb.zN5MvGgj.TH89UIWoeYQuiKylVUy.RiTjMZ7i.Ce', NULL, NULL, NULL, NULL, '2021-06-09 15:41:53', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
(11, 'FFFFFFSQ', 'SQSQD', 'rezr@gfds', '$2y$10$U3Fm1/PYGGK4nmCIV.virezEhVoKgXWDv9A2dD4k6c3HgysG.QCru', '0679839889', '0', '2021-05-27 12:57:37', NULL, NULL),
(12, 'mcmanaman', 'Jhon', 'jhonlecrack@ehoe.com', '$2y$10$ytT42nnDcsEE3jOwI1JIt.QTn9LxVowX2V7JIJ2NSnHQqjPj26rGG', '2928272820', '0', '2021-06-02 11:21:57', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
