-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 sep. 2020 à 14:31
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP : 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stac`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timing` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `nonshoot` int(11) DEFAULT NULL,
  `ratio` decimal(5,0) DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `id_sessions` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `games_users_FK` (`id_users`),
  KEY `games_sessions_FK` (`id_sessions`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'orga'),
(2, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `numberoftargets` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `license` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `id_roles` int(11) NOT NULL DEFAULT 2,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_AK` (`license`),
  KEY `users_roles_FK` (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `license`, `password`, `id_roles`) VALUES
(49, 'bobo', 'bobo', '82619763', '$2y$10$TFIfhtN91UQaOgOCDB64r.qkJKb4atnXxfU/YLASsCxDbwmbB0Efm', 1),
(62, 'pipi', 'bab', '1478520', '$2y$10$WSx6vCjuHztEzxC/MsxNHedEWStyTiDgHX2UOQPt8dehU64ENtsf2', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_sessions_FK` FOREIGN KEY (`id_sessions`) REFERENCES `sessions` (`id`),
  ADD CONSTRAINT `games_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_FK` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
