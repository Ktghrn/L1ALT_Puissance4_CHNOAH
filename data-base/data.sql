--tableau message--
CREATE TABLE IF NOT EXISTS message (
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    id_du_jeu varchar(10) NOT NULL,
    id_du_joueur varchar(10) NOT NULL,
    msg text NOT NULL,
    date_heure datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--tableau jeu--
CREATE TABLE IF NOT EXISTS jeu (
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_jeu varchar(40) NOT NULL,
    PRIMARY KEY (id)
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









# Tab de données Utilisateur


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