事务处理
	
	1，开启事务	-- 告诉系统以下所有操作(写)不要直接写入到数据表，先存放到事务日志
		START TRANSACTION

	2，进行事务操作
		SQL 语句

	3，关闭事务	-- 选择性的将日志文件中操作的结果保存到数据表(同步)
			--或者说直接清空事务日志

		a).提交事务	COMMIT

		b).回滚事务	ROLLBACK

	回滚点
		设置回滚点：SAVEPOINT 回滚点名字;

		回到回滚点：ROLLBACK TO 回滚点名字;

	

关闭事务自动提交

	SET AUTOCOMMIT = OFF/0;	
	-- 如果关闭事务自动提交，那么进行SQL操作后需要进行 COMMIT 提交或者 ROLLBACK 回滚

