数据新增
	基本语法：
		INSERT INTO 表名[(字段列表)] VALUES(值列表)
		
	主键冲突：更新操作
		INSERT INTO 表名[(字段名)] VALUES(值列表) ON DUPLICATE KEY UPDATE 字段 = 新值;

	主键冲突：替换
		REPLACE INSERT INTO 表名[(字段名:包含主键)] VALUES(值列表);



蠕虫复制      --从已有的数据中去获取数据，然后将数据又进行新增操作：数据成倍的增加.
	
	表创建高级操作：从已有表创建新表(复制表结构)
	CREATE TABLE 表名 LIKE 数据库.表名;	

	蠕虫复制：现查出数据，然后将查出的数据新增一遍
	INSERT INTO 表名[(字段列表)] SELECT 字段列表/（*） FROM 数据表名;


更新数据
	基本语法：
		UPDATE 表名 SET 字段 = 值[WHERE条件];

	高级新增语法
		UPDATE 表名 SET 字段 = 值[WHERE条件][LIMT更新数量];


删除数据
	DELETE FROM 表名[WHERE][LIMIT数量];


	清空表（重置自增长）：
	TRUNCATE 表名;	--先删除该表，后新增该表


查询数据
	基本语法：
		SELECT 字段列表/（*） FROM 表名[WHERE 条件];

	完整语法：
		SELECT[SELECT选项]字段列表[字段别名]/（*） FROM 数据源 [WHERE条件子句][GROUP BY 字句]
		[HAVING子句][ORDER BY子句][LIMIT 子句];

			SELECT选项：对查出来的结果的处理方式
				ALL：默认的，保留所有的结果
				DISTINCT：去重，查出来的结果，将重复的去除（所有字段都相同）
			
			字段别名：字段名 [AS] 别名
				例：SELECT name as 名字 FROM test;
	
数据源
	单表数据源
		SELECT * FROM test;
	多表数据源
		SELECT * FROM test,test2,test3...;	--笛卡尔积（交叉连接）（没卵用，应该尽量避免）
	子查询
		SELECT * FROM(SELECT语句)AS 别名;