CREATE TABLE `t_user` ( 
  `id` int(11) NOT NULL auto_increment, 
  `username` varchar(30) NOT NULL, 
  `password` varchar(32) NOT NULL, 
  `email` varchar(50) NOT NULL, 
  `getpasstime` int(10) NOT NULL, 
  PRIMARY KEY  (`id`) 
) ENGINE=MyISAM  DEFAULT CHARSET=utf8; 