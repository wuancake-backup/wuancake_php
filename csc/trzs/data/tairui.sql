-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 09 月 05 日 18:33
-- 服务器版本: 5.5.38
-- PHP 版本: 5.4.33

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tairui`
--

-- --------------------------------------------------------

--
-- 表的结构 `cpzs`
--

CREATE TABLE IF NOT EXISTS `cpzs` (
  `id` int(11) NOT NULL COMMENT '产品id',
  `image` varchar(255) NOT NULL DEFAULT 'images/pic3.jpg' COMMENT '产品图片',
  `briIntro` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '产品名字',
  `time` int(11) NOT NULL COMMENT '产品发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `xwzx`
--

CREATE TABLE IF NOT EXISTS `xwzx` (
  `id` int(11) NOT NULL COMMENT '新闻ID',
  `image` varchar(255) NOT NULL DEFAULT 'images/pic3.jpg' COMMENT '新闻图片',
  `eye` int(11) NOT NULL COMMENT '浏览量',
  `title` varchar(15) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `time` int(11) NOT NULL COMMENT '新闻发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `zxly`
--

CREATE TABLE IF NOT EXISTS `zxly` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saytext` text NOT NULL,
  `title` varchar(255) NOT NULL COMMENT '姓名',
  `mycall` int(11) NOT NULL COMMENT '联系电话',
  `address` varchar(255) NOT NULL COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
