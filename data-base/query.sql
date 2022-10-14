/*Story-5 Query game*/
INSERT INTO `jeu` (`nom_jeu`)VALUES('memory');

/*Story-9 Query msg*/
INSERT INTO `msg`(`id_du_jeu`, `id_du_joueur`, `msg`, `date_heure`) VALUES('1', '1', 'bonjour', NOW());

/*Story-10 Query msg*/
SELECT `msg`, `pseudo`, `msg_time`, `estExpediteur` FROM `msg` 
JOIN user ON 'msg.idExpediteur' = user.id 
WHERE `msg_time` between now() - interval 1 day and now()