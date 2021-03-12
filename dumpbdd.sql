-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 mars 2021 à 23:26
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfony3_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `Nom` varchar(167) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(167) COLLATE utf8_unicode_ci NOT NULL,
  `Date_naissance` datetime NOT NULL,
  `Email` varchar(167) COLLATE utf8_unicode_ci NOT NULL,
  `Telephone` int(20) NOT NULL,
  `voyage_theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `documents_id` int(11) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `applicant`
--

INSERT INTO `applicant` (`id`, `Nom`, `Prenom`, `Date_naissance`, `Email`, `Telephone`, `voyage_theme`, `documents_id`, `Created_at`, `Updated_at`) VALUES
(3, 'Boutoudit 2', 'said', '2021-03-11 11:23:24', 'said@gmail.com', 1221122121, 'voyage 1', 1, NULL, NULL),
(4, 'Boutoudit 2', 'said', '2021-03-11 11:26:46', 'said@gmail.com', 1221122121, 'voyage 1', 2, NULL, NULL),
(9, 'bekkaoui', 'rachid', '2016-01-01 00:00:00', 'bekaoui@ewa.ma', 762379479, 'theme1', 9, '2021-03-12 15:05:38', NULL),
(10, 'btd', 'fatema', '2016-01-01 00:00:00', 'fatema@gmail.com', 2147483647, 'theme4', 10, '2021-03-12 15:30:58', NULL),
(11, 'med', 'idghd', '2021-01-01 00:00:00', 'idghdour@gmail.com', 2147483647, 'voyage découverte', 11, '2021-03-12 16:29:48', NULL),
(12, 'boutoudit', 'said', '2016-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'SASA', 13, '2021-03-12 18:50:06', NULL),
(13, 'fatema', 'btd', '1997-12-17 00:00:00', 'fatema@gmail.COM', 634444444, 'travail', 14, '2021-03-12 20:12:00', NULL),
(14, 'boutoudit', 'said', '1940-01-01 00:00:00', 'said.boutoudit@ewa.ma', 762379479, 'dede', 16, '2021-03-12 21:12:44', NULL),
(15, 'sa', 'saidss', '1995-01-01 00:00:00', 'said.boutoudit@ewa.ma', 762379479, 'sa', 18, '2021-03-12 21:18:22', NULL),
(16, 'boutoudit', 'said', '1996-01-01 00:00:00', 'said.boutoudit@ewa.ma', 76237947, 'fefefe', 19, '2021-03-12 21:30:45', NULL),
(17, 'sd', 'dada', '2002-01-01 00:00:00', 'said.boutoudit@ewa.ma', 762379479, 'dz', 20, '2021-03-12 21:32:33', NULL),
(18, 'boutoudit', 'said', '1995-01-01 00:00:00', 'said.boutoudit@ewa.ma', 762379479, 'testt', 21, '2021-03-12 21:54:48', NULL),
(19, 'boutoudit', 'said', '2006-01-01 00:00:00', 'said.boutoudit@ewa.ma', 762379479, 'sa', 22, '2021-03-12 22:10:23', NULL),
(20, 'boutoudit', 'said', '1972-01-01 00:00:00', 'said.boutoudit@ewa.ma', 762379479, 'vfvf', 24, '2021-03-12 22:16:09', NULL),
(21, 'boutoudit', 'said', '2008-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'cdcd', 25, '2021-03-12 22:17:51', NULL),
(22, 'boutoudit', 'said', '2008-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'cdcd', 26, '2021-03-12 22:18:20', NULL),
(23, 'boutoudit', 'said', '1986-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'dcs', 28, '2021-03-12 22:21:17', NULL),
(24, 'boutoudit', 'said', '1986-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'dcs', 29, '2021-03-12 22:21:35', NULL),
(25, 'boutoudit', 'said', '1956-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'de', 30, '2021-03-12 22:22:43', NULL),
(26, 'boutoudit', 'said', '1956-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'de', 31, '2021-03-12 22:23:03', NULL),
(27, 'boutoudit', 'said', '1985-01-01 00:00:00', 'said.boutoudit@ewa.ma', 2147483647, 'C', 32, '2021-03-12 22:25:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `budget_excel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motivations_docx` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `budget_excel`, `motivations_docx`, `instagram_url`) VALUES
(1, 'www.excel.com', 'www.motivation.com', 'www.instagram.com'),
(2, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(3, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(4, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(5, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(6, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(9, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(10, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(11, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(13, 'www.excel1.com', 'www.motivation.com', 'www.instagram.com'),
(14, 'www.excel2.com', 'www.doc2.com', 'www.ig.com'),
(16, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpE16E.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpE1AD.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpE1AE.tmp'),
(18, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php8AD.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php8BE.tmp', 'ccv'),
(19, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php5EBD.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php5EBE.tmp', 'rgrg'),
(20, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php3E8.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php3F8.tmp', 'ig'),
(21, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php62F6.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php6306.tmp', 'f'),
(22, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpA75F.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpA770.tmp', 'c'),
(24, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpF00D.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpF01D.tmp', 'v'),
(25, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php8016.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php8017.tmp', 'b'),
(26, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpEE91.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpEEA2.tmp', 'vv'),
(28, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpA27A.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpA27B.tmp', 'g'),
(29, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpEBCA.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpEBCB.tmp', 'g'),
(30, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpF52D.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\phpF53E.tmp', 'c'),
(31, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php4023.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php4024.tmp', 'c'),
(32, 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php47AD.tmp', 'C:\\Users\\SIDOS\\AppData\\Local\\Temp\\php47BD.tmp', 'C');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_CAAD10195F0F2752` (`documents_id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `FK_CAAD10195F0F2752` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
