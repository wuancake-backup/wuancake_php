CREATE DATABASE IF NOT EXISTS fyhqqfyh;
USE 'fyhqqfyh';
#创建admin表
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`username`)
) 
ENGINE=MyISAM DEFAULT CHARSET=latin1;
LOCK TABLES `admin` WRITE;
INSERT INTO `admin` VALUES ('fyhqqfyh','5'),('3','4'),('6','2');
UNLOCK TABLES;
