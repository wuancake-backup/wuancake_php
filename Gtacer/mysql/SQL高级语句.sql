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
	WHERE子句
		返回结果0或者1，0代表FALSE,1代表TRUE
		判断条件：
			比较运算符 >,<,<=,>=,!=,<>,=,like,between and,in/not in
			逻辑运算符 &&(and)  ||(or)   !(not)

		SELECT * FROM test WHERE id IN(1,2,3)	--找出ID为1，2，3的学生

		SELECT * FROM test WHERE id BETWEEN 1 AND 3;	--找出ID在1-3之间的学生（between是闭区间，且左边的值必须小于右边的值）


	GROUP BY(分组)
		基本语法:GROUP BY 字段名;

		 COUNT():统计分组后的记录数：每一组有多少记录
		 MAX():统计每组中最大的值
		 MIN():统计最小值
		 AVG():统计平均值
		 SUM():统计和

		SELECT test,COUNT(*),MAX(height),... FROM table_name GROUP BY test;

	多字段分组
		--先按照班级分组，再按照男女分组
		SELECT class,sex,COUNT(*) FROM table_name GROUP BY class,sex;

		group_concat(字段名)	--将字段中的数据当作字符串连接起来

		回溯统计:WITH ROLLUP


	HAVING 子句	--与WHERE子句一样，进行判断的
		HAVING 可以使用别名，而 WHERE 不行
		HAVING 可以对分组内容进行筛选，而 WHERE 不行

	ORDER BY 子句	--排序
		ORDER BY 字段名 ASC/DESC	升序/降序
		
	LIMIT 子句
		LIMIT子句是一种限制结果的语句

		限制长度（数据量）：LIMIT 数据量;

		限制起始位置，限制数量：LIMIT 起始位置，长度;
