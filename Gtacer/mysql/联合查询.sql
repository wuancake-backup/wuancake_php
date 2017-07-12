联合查询	--将多次查询(多条SELECT语句),在记录上进行拼接(字段不会增加)

	基本语法	--多条SELETCT语句构成：每一条SELECT语句获取的字段数必须严格一致(但是与字段类型无关)
		SELECT 语句1 UNION[UNION选项] SELECT 语句2 ...

			UNION选项：
				ALL:保留所有(保留所有)
				DISTINCT:去重(整个重复)(默认)

	ORDER BY
		在联合查询中,ORDER BY 不能直接使用，需要对查询语句使用括号才行
		且若要 ORDER BY 生效，必须搭配 LIMIT 关键字;

		(SELECT * FROM test WHERE sex = '男' ORDER BY age ASC LIMIT 9999999)
		UNION
		(SELECT * FROM test WHERE sex = '女' ORDER BY age DESC LIMIT 9999999);



