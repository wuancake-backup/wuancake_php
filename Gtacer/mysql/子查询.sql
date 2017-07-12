子查询	--查询是在某个查询结果之上进行的(一条SELECT语句内部包含了另外一条SELECT语句)

	按位置分类:子查询(SELECT语句)在外部查询(SELECT语句)中出现的位置

		FROM 子查询：子查询跟在 FROM 之后
		WHERE 子查询：子查询出现 WHERE 条件中
		EXISTS 子查询：子查询出现在 EXISTS 里面


	按结果分类：根据子查询得到的数据进行分类(理论上任何一个查询得到的结果都可以理解为二维表)

		标量子查询：子查询得到的结果是一行一列
		列子查询：子查询得到的结果是一行多列
		行子查询：子查询得到的结果是多列一行(多行多列)

		--上面的几个出现的位置都是在 WHERE 之后

		表子查询：自查询得到的结果是多行多列的二维表(当作二维表来用)	--出现的位置实在FROM之后


	标量子查询
		需求，知道班级名字为 xx班 ，想获取该班的所有学生（学生表和班级信息表为两张表）

		SELECT * FROM student WHERE class_id = (SELECT id FROM class WHERE c_name = 'xx班');

	列子查询
		需求，查询所有在读班级的学生(班级表中存在的班级)

		SELECT * FROM stedent WHERE  class_id IN(SELECT id FROM class);

	
	行子查询
		需求：要求查询整个学生中，年龄最大且身高最高的学生

		SELECT * FROM student WHERE (age,height) = (SELECT MAX(age),MAX(height) FROM student);

	表子查询
		需求：找出每个班最高的一个学生

		SELECT * FROM (SELECT * FROM student ORDER BY height DESC) AS student GROUP BY class_id;


	
	EXISTS 子查询	--是否存在，EXISTS 子查询就是用来判断某些条件是否满足(跨表)
			--EXISTS 是接在 WHERE 之后，返回结果只有 0 和 1
			
		需求：查询所有的学生，前提是班级存在

		SELECT * FROM student WHERE EXISTS(SELECT * from class);