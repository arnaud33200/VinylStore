CREATE TABLE IF NOT EXISTS `profile` (
  `idProfile` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zipCode` mediumint(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`idProfile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `profile` (`login`, `password`, `firstName`, `lastName`, `mail`, `adress`, `zipCode`, `city`) VALUES
('mimi62', '123456', 'Michel', 'Tabrestin', 'mimi62400@gmail.com', '6 avenu du jaune', 62100, 'Calais');

