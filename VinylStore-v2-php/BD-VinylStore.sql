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
(1, 'Holy Fire', 'Foals', 20, 'http://upload.wikimedia.org/wikipedia/en/3/32/Holy_Fire_II.jpg', 3),
(2, 'Total Life Forever', 'Foals', 20, 'http://andrewmcmillen.com/wp-content/uploads/2010/05/foals_album_cover.jpg', 4),
(3, 'Antidotes', 'Foals', 20, 'http://2.bp.blogspot.com/-bTU5SQCa5RY/Tym-qt1W9NI/AAAAAAAAANo/nWcGHN0c9NY/s1600/Indie+album+covers.jpg', 5),
(4, 'My Number', 'Foals', 10, 'http://payload117.cargocollective.com/1/0/5464/4640626/FOALS-MYNUMBER-LEIFPODHAJSKY-34_800.jpg', 2),
(5, 'Tales', 'Foals', 15, 'http://nme.assets.ipccdn.co.uk/images/gallery/FoalsTapes600Gb.jpg', 3);

