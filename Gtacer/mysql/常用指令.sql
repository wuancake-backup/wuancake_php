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


查看服务器识别哪些字符集：
	SHOW CHARACTER SET;

查看服务器默认的对外处理的字符集：
	SHOW VARIABLES LIKE 'CHARACTER_SET%';

改变服务器默认的接受字符集为GBK：
	SET CHARACTER_SET_CLIENT=GBK;		--当前客户端，当次链接有效

修改服务器给客户端的数据字符集为GBK
	SET CHARACTER_SET_RESULTS=GBK;		--当前客户端，当次链接有效

快捷设置字符集（修改client,connection,results的字符集）：
	SET NAMES GBK;

查看数据库所支持的校对集：
	SHOW COLLATION;

改变自动提交：
set autocommit=0;	--0为关闭，1为开启

开启事务
	START TRANSACTION;
设置保存点
	SAVEPOINT save_name;
回滚保存点
	ROLLBACK TO save_name;
提交事务
	COMMIT;


-- 查看表类型（存储引擎）
SHOW TABLE STATUS FROM db_name;

-- 修改数据表引擎  
ALTER TABLE table_name ENGINE=INNODB;		--INNODB引擎支持高级事务处理，而使用全文索引必须使用MYISAM