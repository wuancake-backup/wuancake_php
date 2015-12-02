-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-12-02 12:58:59
-- 服务器版本： 5.6.26
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `Id` int(11) NOT NULL,
  `name1` varchar(16) NOT NULL,
  `pw` varchar(16) NOT NULL,
  `dt` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
-- 读取数据时发生错误: (#2014 - Commands out of sync; you can't run this command now)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
