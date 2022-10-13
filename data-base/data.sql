--tab msg--
CREATE TABLE IF NOT EXISTS `msg` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_du_jeu` int(10) NOT NULL,
    `id_du_joueur` int(10) NOT NULL,
    `msg` text NOT NULL,
    `date_heure` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--tab game--
CREATE TABLE IF NOT EXISTS `jeu` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `nom_jeu` varchar(40) NOT NULL,
    PRIMARY KEY (`id`)
)

