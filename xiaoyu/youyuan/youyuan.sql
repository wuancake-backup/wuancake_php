-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2015 at 07:44 PM
-- Server version: 5.6.27
-- PHP Version: 5.5.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youyuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `youyuan_admin`
--

CREATE TABLE `youyuan_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `youyuan_admin`
--

INSERT INTO `youyuan_admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `youyuan_usr`
--

CREATE TABLE `youyuan_usr` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL DEFAULT '',
  `sex` char(6) DEFAULT NULL,
  `ID_number` char(18) NOT NULL,
  `mobile_number` char(11) NOT NULL,
  `qq` char(10) NOT NULL,
  `address` varchar(128) NOT NULL,
  `department` varchar(128) NOT NULL,
  `height` int(3) NOT NULL,
  `yearly_income` int(10) NOT NULL,
  `birthday` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `youyuan_usr`
--

INSERT INTO `youyuan_usr` (`id`, `name`, `sex`, `ID_number`, `mobile_number`, `qq`, `address`, `department`, `height`, `yearly_income`, `birthday`, `status`) VALUES
(27, '王麻子', 'male', '855858474747345768', '1821751985', '2752903644', '海南省', '海南中学', 150, 15, '2015-10-18', 0),
(37, 'sifan', 'male', '622727188719345876', '13085992678', '1782902633', '曹安公路4800号', '同济大学嘉定校区', 145, 50000, '2015-10-22', 0),
(39, 'qiang', 'female', '84484848484848484x', '18888888888', '33333333', '火星', 'PHP', 180, 1000000, '2015-10-11', 0),
(59, '大笨蛋', 'male', '64475888849993937x', '18217751985', '7758258', '遥远的地方', '海边', 175, 0, '2015-10-25', 0),
(58, '志安', 'male', '988575777584930305', '18317757869', '3191870', '火星', '水星', 175, 1000000, '2015-10-14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `youyuan_admin`
--
ALTER TABLE `youyuan_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youyuan_usr`
--
ALTER TABLE `youyuan_usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `youyuan_admin`
--
ALTER TABLE `youyuan_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `youyuan_usr`
--
ALTER TABLE `youyuan_usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
