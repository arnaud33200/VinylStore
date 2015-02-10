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

-- ----------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `vinyle` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Artiste` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Pochette` text NOT NULL,
  `Note` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `vinyle` (`Id`, `Titre`, `Artiste`, `Prix`, `Pochette`, `Note`) VALUES
(1, 'Holy Fire', 'Foals', 20, 'vinylCover/v6.jpg', 3),
(2, 'Total Life Forever', 'Foals', 20, 'vinylCover/v15.jpg', 4),
(3, 'Antidotes', 'Foals', 20, 'vinylCover/v8.jpg', 5),
(4, 'My Number', 'Foals', 10, 'vinylCover/v13.jpg', 2),
(5, 'Tapes', 'Foals', 15, 'vinylCover/v14.jpg', 3),
(6, 'Symbolic', 'Death', 13, 'vinylCover/v3.jpg', 5),
(7, 'Show no mercy', 'Slayer', 15.9, 'vinylCover/v11.jpg', 4),
(8, 'Fleet Foxes', 'Fleet Foxes', 11.4, 'vinylCover/v12.jpg', 5),
(9, 'A Higher Place', 'Born of Osiris', 17.8, 'vinylCover/v7.jpg', 5),
(10, 'Surfing the Void', 'Klaxon', 8.4, 'vinylCover/v9.jpg', 2);