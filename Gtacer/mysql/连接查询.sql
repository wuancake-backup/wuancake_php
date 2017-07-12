
连接查询
	内连接，外连接，自然连接，交叉连接
	左表 JOIN 右表	--左表：JOIN关键字左边的表，右表：JOIN关键字右边的表

交叉连接
	基本语法：左表 CROSS JOIN 右表; === FROM 左表,右表;

内连接
	从左表中取出每一条记录，去右表中与所有的记录进行匹配：
	匹配必须是某个条件在左表中与右表中相同最终才会保留结果，否则不保留。

	基本语法：左表 [INNER] JOIN 右表 ON 左表.字段 = 右表.字段;
	--ON表示连接条件：条件字段就是代表相同的业务含义;

	在查询数据的时候，不同表有同名字段，这个时候需要加上表名才能区分，而表名太长，通常可以使用别名
		SELECT S.*,c.name AS c_name,c.room FROM 
		my_student AS s INNER JOIN my_class AS c
		ON s.c_id = c.id;

外连接
	以某张表为主，取出里面的所有记录，然后每条与另外一张表进行连接：
	不管能不能匹配上条件，最终都会保留；不能匹配，其他表的字段都置空NULL

	外连接分为两种：
		LEFT JOIN:左外连接，以左表为主表;
		RIGHT JOIN:右外连接，以右表为主表;

	基本语法：
		左表 LEFT/RIGHT JOIN 右表 ON 左表.字段 = 右表.字段;
		--左表为主表
		SELECT s.*,c.name as c_name,c.room FROM
		my_student AS s LEFT JOIN my_class AS c
		ON s.c_id = c.id;
	
		--右表为主表
		SELECT s.*,c.name as c_name,c.room FROM
		my_student AS s RIGHT JOIN my_class AS c
		ON s.c_id = c.id;
		
		--虽然左连接和右连接有主表差异，但是显示的结果：左表的数据在在左边，右边的数据在右边


自然连接：
	自动匹配连接条件：系统以字段名字作为匹配模式
	（同名字段就作为条件，多个同名字段都作为条件）

	自然连接可以分为自然内连接和自然外连接

	自然内连接
		左表 NATURAL JOIN 右表;

	自然外连接
		左表 NATURAL LEFT/RIGHT JOIN 右表;


	效果等同于：--使用同名字段作为条件，并且合并同名字段
	左表 LEFT/RIGHT/INNER JOIN 右表 USING(字段名);