-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 03 juin 2021 à 07:12
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projet` int(11) NOT NULL,
  `nom_projet` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `photo` blob NOT NULL,
  `bio` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `github` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `visible` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `nom_projet`, `photo`, `bio`, `lien`, `github`, `visible`) VALUES
(25, 'Projet Département', 0x73637265656e7265756e696f6e2e706e67, 'Site sur l\'île de la Réunion avec une actualité fictive en html et css', 'https://tonyg.promo-72.codeur.online/La%20R%C3%A9union/index.html', 'https://github.com/Hifi58/R-union', 'oui'),
(26, 'Projet Dashboard', 0x73637265656e646173682e706e67, 'Dashboard comptabilisant des ampoules avec ajout, suppression, modification en PHP et MySql', 'https://tonyg.promo-72.codeur.online/Dashboard/', 'https://github.com/Hifi58/Dashboard-ampoules', 'oui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
