DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`iduser` int auto_increment,
`email` varchar(255) NOT NULL , 
`nom` varchar(255) NOT NULL,
`prenom` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
PRIMARY KEY (`iduser`)
);

DROP TABLE IF EXISTS `EspDed`;
CREATE TABLE `EspDed` (
`idEspDed` mediumint(8) unsigned NOT NULL auto_increment, 
`Quotas` int default '5',
PRIMARY KEY (`idEspDed`)
);

DROP TABLE IF EXISTS `fichier`;
CREATE TABLE `fichier` (
`idfichier` mediumint(8) unsigned NOT NULL auto_increment, 
`nom` varchar(255) NOT NULL,
`DateEnvoie` DATE NULL,
`idEspDed` mediumint(8) unsigned NOT NULL, 
PRIMARY KEY (`idfichier`),
FOREIGN KEY (`idEspDed`) REFERENCES `EspDed` (`idEspDed`) 
);

DROP TABLE IF EXISTS `accede`;
CREATE TABLE `accede` (
`permission` int NOT NULL, 
`idEspDed` mediumint(8) unsigned NOT NULL, 
`iduser` int,
FOREIGN KEY (`idEspDed`) REFERENCES `EspDed` (`idEspDed`),
FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`)
);

INSERT INTO `users` (`iduser`, `email`, `nom`, `prenom`, `password`) VALUES (1,'plop@plop.fr','Frederick','Siva','1234');
INSERT INTO `users` (`iduser`, `email`, `nom`, `prenom`, `password`) VALUES (2,'root','root','root','toor');
INSERT INTO `users` (`iduser`, `email`, `nom`, `prenom`, `password`) VALUES (3,'anon','anon','anon','anon');

INSERT INTO `EspDed` (`idEspDed`, `Quotas`) VALUES ('1','30');
INSERT INTO `EspDed` (`idEspDed`, `Quotas`) VALUES ('2','30');
INSERT INTO `EspDed` (`idEspDed`, `Quotas`) VALUES ('3','30');

INSERT INTO `accede` (`permission`, `idEspDed`,`iduser`) VALUES ('1','1','2');
INSERT INTO `accede` (`permission`, `idEspDed`,`iduser`) VALUES ('1','2','1');
INSERT INTO `accede` (`permission`, `idEspDed`,`iduser`) VALUES ('1','3','3');