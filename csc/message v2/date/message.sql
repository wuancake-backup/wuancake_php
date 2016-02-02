--
-- 表的结构 `post_base`
--

CREATE TABLE IF NOT EXISTS `post_base` (
  `ID` int(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '帖子ID',
  `userID` int(5) unsigned NOT NULL COMMENT '发帖人ID',
  `title` varchar(30) CHARACTER SET gbk NOT NULL COMMENT '标题',
  PRIMARY KEY (`ID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='主帖' AUTO_INCREMENT=13 ;



-- --------------------------------------------------------

--
-- 表的结构 `post_detail`
--

CREATE TABLE IF NOT EXISTS `post_detail` (
  `ID` int(5) unsigned NOT NULL COMMENT '帖子ID',
  `postID` int(5) unsigned NOT NULL COMMENT '回帖人ID',
  `replyID` int(5) unsigned DEFAULT NULL COMMENT '回复的ID',
  `text` varchar(140) COLLATE utf8_bin NOT NULL COMMENT '内容',
  `floor` int(4) NOT NULL COMMENT '楼层',
  `createTime` varchar(16) COLLATE utf8_bin NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`ID`,`floor`),
  KEY `postID` (`postID`,`replyID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='回复帖';



-- --------------------------------------------------------

--
-- 表的结构 `user_base`
--

CREATE TABLE IF NOT EXISTS `user_base` (
  `ID` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(20) COLLATE utf8_bin NOT NULL UNIQUE COMMENT '用户名',
  `password` varchar(35) COLLATE utf8_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`ID`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户表基本' AUTO_INCREMENT=13 ;