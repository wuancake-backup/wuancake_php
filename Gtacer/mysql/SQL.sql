-- 创建数据库：
	CREATE{DATABASE | SCHEMA}      [IF NOT EXISTS]        db_name   [DEFAULT] CHARACTER SET[=] charset_name;   
				  如果数据库存在，忽略错误    数据库名      创建数据库的编码方式


-- 查看当前服务器下的数据表列表：
	SHOW{DATABASES | SCHEMAS} [LIKE 'pattern' | WHERE expr];


-- 查看数据库创建语句：
	SHOW CREATE DATABASE db_name;


-- 查看指定部分的数据库（模糊查询）：
	SHOW DATABASES LIKE 'pattern';	-- pattern是匹配模式
	%：表示多个字符
	_：表示单个字符


-- 修改数据库：
	ALTER {DATABASE | SCHEMA} [db_name] [DEFAULT] CHARACTER SET [=] charset_name;


-- 删除数据库：
	DROP {DATABASE | SCHEMA} [IF EXISTS] db_name;


-- 打开数据库：1
	USE db_name;


-- 查看当前数据库：
	SELECT DATABASE();


-- 创建数据表：
	CREATE TABLE[IF NOT EXISTS] table_name(
		column_name data_type,		--列名称 数据类型
		……
	)ENGINE=MYISAM;		--数据表引擎INNODB引擎支持高级事务处理，而使用全文索引必须使用MYISAM


--删除数据表：
	DROP TABLE table_name1,table_name2,……;	--可以同时删除多张数据表;




--修改数据表名：
	RENAME TABLE 旧表名 TO 新表名;


--修改数据表选项：
	ALTER TABLE table_name charset=GBK;	--修改字符集


-- 查看数据表：
	SHOW TABLES[FROM db_name][LIKE 'pattern' | WHERE expr];
		/*   SHOW TABLES;		        -- 查看当前数据库的数据表
		 *   SHOW TABLES FROM mysql;  */	-- 查看所有数据库中的数据表;


-- 查看数据表结构：
	SHOW COLUMNS FROM tbl_name;


--查看数据表创建语句：
	SHOW CREATE TABLE tbl_name;


-- 插入记录：
	INSERT[INTO]tbl_name[(col_name,……)]VALUES(val,……);


-- 记录查找：
	SELECT expr,…… FROM tbl_name;


--新增字段：
	ALTER TABLE table_name add[column]字段名 数据类型 [列属性][位置];	
									--位置：FIRST：放在第一个字段
									--	AFTER：AFTER 字段名；	--默认放在最后一个字段之后


--修改字段：
	ALTER TABLE table_name MODIFY 字段名 数据类型 [属性][位置];


--重命名字段：
	ALTER TABLE 表名 CHANGE 旧字段 新字段名 数据类型[属性][位置];


--删除字段：
	ALTER TABLE table_name DROP 字段名;


--查看指定字段，指定条件的数据：
	SELECT id,number,…… FROM table_name WHERE id=1;		--查看满足ID为1的学生信息


-- 修改数据表中数据记录:
	UPDATE db_name SET age=18 where username="jone";	-- 将数据表tb1中，jone的年龄修改为18


--删除数据
	DELETE FROM table_name WHERE sex='man';			--删除性别为男的数据


-- 自动编号（必须与主键组合使用,默认情况下，起始值为1，每次的增量为1）：
	AUTO_INCREMENT;


-- 主键（每一张数据表只能有一个主键）：
	PRIMARY KEY	-- 创建列表时写在数据类型之后


-- 唯一约束：
	UNIQUE KEY	-- 创建列表时写在数据类型之后


-- 默认值：
	DEFAULT 值	-- 


-- 禁止为空：
	NOT NULL	-- 


--排序
	ORDER BY DESC(升序)/ASC(降序)


--枚举类型
	--创建枚举表
		CREATE TABLE my_enum(
		gender enum('男','女','保密')	--定义：enum(可能出现的元素列表)
		);

	--加入数据	插入的数据必须是规定的类型中的一个(也可以插入数值)
		INSERT INTO my_enum VALUES('男'),('保密');


--集合字符串
	--定义	set(元素列表)
	CREATE TABLE my_set(
	hobby set('篮球','足球','乒乓球','羽毛球','台球','网球')
	)charset utf8;

	--插入数据  可以使用列表中的元素(多个)，使用,分隔
	INSERT INTO my_set VALUES('足球,台球,网球');