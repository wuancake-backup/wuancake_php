登录mysql：
	   mysql.exe -hlocalhost -P3306 -uroot -p --prompt
	             服务器名称  端口号 用户名 密码 提示符


MySql提示符参数：
		\p	完整的日期
		\d	当前数据库
		\h	服务器名称
		\u	当前用户


断开链接（退出mysql）:
			exit
			quit
			\q


显示当前服务器版本：	SELECT VERSION();
显示当前日期时间：	SELECT NOW();
显示当前用户：		SELECT USER();


关键字与函数名称全部大写
数据库名称、表名称、字段名称全部小写
SQL语句必须以分号结尾