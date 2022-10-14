--Story-1 tab msg--
CREATE TABLE IF NOT EXISTS `msg` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_du_jeu` int(10) NOT NULL,
    `id_du_joueur` int(10) NOT NULL,
    `msg` text NOT NULL,
    `msg_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--Story-1 tab game--
CREATE TABLE IF NOT EXISTS `jeu` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `nom_jeu` varchar(40) NOT NULL,
    PRIMARY KEY (`id`)
)



# Tab de données score MySQL



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `score4` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `level` text NOT NULL,
  `score` int(10) NOT NULL,
  `date_time_game` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `score4`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `score4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `score4`
  ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);









# Tab de données user


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  `date_last_connexion` date NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `user` (`user_id`, `email`, `password`, `date_inscription`, `date_last_connexion`, `pseudo`, `id`) VALUES
(1, 'test', 'test', '2022-10-04', '2022-10-20', 'test', 0);

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2; 

ALTER TABLE `user`
  ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`); 
=======
-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 13 oct. 2022 à 13:28
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `puissance4`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_connexion` date NOT NULL,
  `last_connexion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_unique` (`login`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

