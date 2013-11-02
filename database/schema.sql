DROP TABLE IF EXISTS `domains`;

CREATE TABLE `domains` (
  `DomainID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `DomainName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DomainID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
