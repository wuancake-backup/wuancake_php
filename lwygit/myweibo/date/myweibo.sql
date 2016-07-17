-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2016-06-25 19:57:30
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweibo`
--

-- --------------------------------------------------------

--
-- 表的结构 `table_1`
--

CREATE TABLE `table_1` (
  `id` int(5) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `contents` text,
  `datetime1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `table_1`
--

INSERT INTO `table_1` (`id`, `title`, `contents`, `datetime1`, `hits`) VALUES
(1, '111', '色粉 12条条让诶饭后日方嘎儿偶发GIA色肉肉肉肉肉肉肉肉肉肉ROV和你金二胖萨尔v是大染缸；vio回事；当日耦合上的foivu急哦；二日u过v而后人guv欧斯u如何肉桂VS而害怕人格佩荣格VS那大佛v好呢只是东坡肉vi就会配送敌人举办', '2016-06-25 17:35:43', 7),
(4, '再加一条', '再加一条11223344556677889900112233445566778899001122334455667788990011223344556677889900112233445566778899001122334455667788990011223344556677889900\r\n11223344556677889900\r\n11223344556677889900\r\n11223344556677889900\r\n', '2016-06-25 17:34:19', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_1`
--
ALTER TABLE `table_1`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `table_1`
--
ALTER TABLE `table_1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
