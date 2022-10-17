-- Story 6, Les scores utlisateurs --
-- 1. Afficher les scores des joueurs --
SELECT id, user_id, level, score -- Cette ligne permet de sélectionner les colonnes id, user_id, level et score --
FROM score4 -- Cette ligne permet de sélectionner la table score4 --
ORDER BY id, user_id, level, score; -- Cette ligne permet d'afficher les scores des joueurs par ordre croissant --

-- Story 7 --
-- Créer une requête qui permet de filtrer les scores par id, par user_id, par level et par score, ces filtres peuvent être combinés ou non --

SELECT * FROM score4
WHERE user_id = 1
AND level = 'intermédiaire'
AND score = 100;

-- Story 7 -- 
-- Créer une requête qui permet d'enregistrer le score du joueur néanmoins  si le joueur a déjà un score d'enregistré pour un même jeu et une même difficulté, la ligne est mis à jour. Il ne doit pas y avoir de doublon dans la table. --

INSERT INTO `score3` (`user_id`, `level`, `score`) 
VALUES (1, 'normal', 100) 
ON DUPLICATE KEY UPDATE `score` = 100, `level` = 'normal';

-- Story 3 --

UPDATE user
SET password = 'password'
WHERE user_id = 1;

-- Story 3 -- 

UPDATE user
SET email = 'nvemail@test.com'
WHERE user_id = 1
AND password = 'test';

-- Story 4 -- 

SELECT * FROM user WHERE email = 'test' AND password = 'test';


/*--Story-5 Query game--*/
INSERT INTO `jeu` (`nom_jeu`)VALUES('memory');

/*--Story-9 Query msg--*/
INSERT INTO `msg`(`id_du_jeu`, `id_du_joueur`, `msg`, `date_heure`) VALUES('1', '1', 'bonjour', NOW());

/*--Story-10 Query msg---*/
SELECT `msg`, `pseudo`, `msg_time`, `estExpediteur` FROM `msg` 
JOIN user ON 'msg.idExpediteur' = user.id 
WHERE `msg_time` between now() - interval 1 day and now()
