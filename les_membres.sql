-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 nov. 2022 à 19:11
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clubs`
--
CREATE DATABASE clubs;
USE clubs;
-- --------------------------------------------------------

--
-- Structure de la table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `table_admin`
--

INSERT INTO `table_admin` (`id`, `email`, `password`) VALUES
(1, 'aaa@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `table_apprenant`
--

CREATE TABLE `table_apprenant` (
  `id` int(11) NOT NULL,
  `Nom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Prenom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Age` int(3) NOT NULL,
  `Class` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Role` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `table_apprenant`
--

INSERT INTO `table_apprenant` (`id`, `Nom`, `Prenom`, `Age`, `Class`, `Role`) VALUES
(1, 'abdelaziz', 'elbarbouchi', 25, 'ada lovlace', 'membre'),
(2, 'ossama', 'elasri', 20, 'ada lovlace', 'membre'),
(3, 'mohcine', 'khribche', 20, 'ada lovelace', 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `table_clubs`
--

CREATE TABLE `table_clubs` (
  `id` int(11) NOT NULL,
  `Nom du club` varchar(15) CHARACTER SET utf8 NOT NULL,
  `date de création` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `table_clubs`
--

INSERT INTO `table_clubs` (`id`, `Nom du club`, `date de création`) VALUES
(1, 'Sport', '2022-11-17'),
(2, 'artist', '2022-11-29'),
(3, 'robotique', '2022-12-29'),
(4, 'social', '2023-01-17'),
(5, 'envirenement', '2023-06-17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_apprenant`
--
ALTER TABLE `table_apprenant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_clubs`
--
ALTER TABLE `table_clubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `table_apprenant`
--
ALTER TABLE `table_apprenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `table_clubs`
--
ALTER TABLE `table_clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
