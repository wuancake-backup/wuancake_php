-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 04 月 05 日 12:19
-- 服务器版本: 5.5.38
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `admin` text,
  `password` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`admin`, `password`) VALUES
('111', '1111'),
('11', '1'),
('???', '1111'),
('?', '?'),
('1', '2'),
('???', '1111'),
('???', '1111'),
('???', '1111'),
('2', '2'),
('222', '22'),
('33', '33'),
('4', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
