-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 01 月 19 日 14:17
-- 服务器版本: 5.5.38
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wuan`
--

-- --------------------------------------------------------

--
-- 表的结构 `group_base`
--

CREATE TABLE IF NOT EXISTS `group_base` (
  `ID` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '组ID',
  `name` varchar(9) NOT NULL COMMENT '组名',
  `delete` int(1) NOT NULL DEFAULT '0' COMMENT '删除',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk COMMENT='组表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `group_base`
--

INSERT INTO `group_base` (`ID`, `name`, `delete`) VALUES
(1, '鬼扯', 0);

-- --------------------------------------------------------

--
-- 表的结构 `group_detail`
--

CREATE TABLE IF NOT EXISTS `group_detail` (
  `ID` int(4) unsigned NOT NULL COMMENT '组ID',
  `userID` int(5) unsigned NOT NULL COMMENT '成员ID',
  `authorization` varchar(9) CHARACTER SET utf8 NOT NULL COMMENT '身份'
) ENGINE=InnoDB DEFAULT CHARSET=gbk COMMENT='组成员表';

--
-- 转存表中的数据 `group_detail`
--

INSERT INTO `group_detail` (`ID`, `userID`, `authorization`) VALUES
(1, 1, 'adminG');

-- --------------------------------------------------------

--
-- 表的结构 `post_base`
--

CREATE TABLE IF NOT EXISTS `post_base` (
  `ID` int(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '帖子ID',
  `userID` int(5) unsigned NOT NULL COMMENT '发帖人ID',
  `groupID` int(4) unsigned NOT NULL COMMENT '组ID',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `digest` int(1) NOT NULL DEFAULT '0' COMMENT '精华',
  `sticky` int(1) NOT NULL DEFAULT '0' COMMENT '置顶',
  `delete` int(1) NOT NULL DEFAULT '0' COMMENT '删除',
  PRIMARY KEY (`ID`),
  KEY `userID` (`userID`,`groupID`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk COMMENT='主帖' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `post_base`
--

INSERT INTO `post_base` (`ID`, `userID`, `groupID`, `title`, `digest`, `sticky`, `delete`) VALUES
(1, 1, 1, '1卧槽！卧槽！卧槽！卧槽！卧槽！卧槽！', 0, 0, 0),
(2, 1, 1, '2卧槽！谁来告诉我我这是眼袋还是卧蚕！我才知道我笑起来那么吓', 0, 0, 0),
(3, 1, 1, '3卧槽！卧槽！卧槽！卧槽！卧槽！', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `post_detail`
--

CREATE TABLE IF NOT EXISTS `post_detail` (
  `ID` int(5) unsigned NOT NULL COMMENT '帖子ID',
  `postID` int(5) unsigned NOT NULL COMMENT '回帖人ID',
  `replyID` int(5) unsigned DEFAULT NULL COMMENT '回复的ID',
  `text` varchar(140) NOT NULL COMMENT '内容',
  `floor` int(4) NOT NULL COMMENT '楼层',
  `createTime` varchar(16) CHARACTER SET utf8 NOT NULL COMMENT '发布时间',
  `delete` int(1) NOT NULL DEFAULT '0' COMMENT '删除',
  PRIMARY KEY (`ID`,`floor`),
  KEY `postID` (`postID`,`replyID`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk COMMENT='回复帖';

--
-- 转存表中的数据 `post_detail`
--

INSERT INTO `post_detail` (`ID`, `postID`, `replyID`, `text`, `floor`, `createTime`, `delete`) VALUES
(1, 1, NULL, '1谁来告诉我我这是眼袋还是卧蚕！我才知道我笑起来那么吓人', 1, '2016-01-01 00:00', 0),
(1, 2, 1, '我追过清风，喝过烈酒，唱过悲歌，爱过你吗2。', 2, '2016-01-02 00:00', 0),
(1, 3, 1, '我追过清风，喝过烈酒，唱过悲歌，爱过你吗3。', 3, '2016-01-03 00:00', 0),
(2, 1, NULL, '2昨天拍了个照片也没太注意。。发给朋友看他们说你最近眼袋怎么那么重！ 然而露珠平时好像是没有眼袋的啊...', 1, '2016-01-02 00:00', 0),
(2, 2, 1, '我追过清风，喝过烈酒，唱过悲歌，爱过你吗22。', 2, '2016-01-22 00:00', 0),
(3, 1, NULL, '3昨天拍了个照片也没太注意。昨天拍了个照片也没太注意昨天拍了个照片也没太注意昨天拍了个照片也没太注意...', 1, '2016-01-03 00:00', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user_base`
--

CREATE TABLE IF NOT EXISTS `user_base` (
  `ID` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '用户名',
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '密码',
  `nickName` varchar(20) NOT NULL COMMENT '昵称',
  `Email` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`ID`),
  KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk COMMENT='用户表基本' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user_base`
--

INSERT INTO `user_base` (`ID`, `name`, `password`, `nickName`, `Email`) VALUES
(1, 'admin', '123456', '陶陶陶', 'test@qq.com'),
(2, 'tt2', '123456', '陶陶2', 'test@qq.com'),
(3, 'tt3', '123456', '陶陶3', 'test@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `ID` int(5) unsigned NOT NULL COMMENT '用户ID',
  `authorization` varchar(9) CHARACTER SET utf8 NOT NULL COMMENT '身份',
  `status` int(1) NOT NULL COMMENT '状态',
  `lastLogTime` datetime NOT NULL COMMENT '上次登录',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk COMMENT='用户详情';

--
-- 转存表中的数据 `user_detail`
--

INSERT INTO `user_detail` (`ID`, `authorization`, `status`, `lastLogTime`) VALUES
(1, 'admin', 1, '0000-00-00 00:00:00'),
(2, 'guest', 1, '0000-00-00 00:00:00'),
(3, 'guest', 1, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
