What?
=========
Web Application to monitor remote systems on demand.

Why?
=========
To learn PHP and other web related tech.

How?
========
[ ]clone the repo 

[ ]Setup MySQL DB Schema:
```sql
DROP TABLE IF EXISTS `domains`;

CREATE TABLE `domains` (
  `DomainID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `DomainName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DomainID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
```
[ ]browse to monitor.php
