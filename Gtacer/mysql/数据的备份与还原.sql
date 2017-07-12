数据表备份
	不需要通过SQL来备份，直接进入到数据库文件夹复制对应的表结构以及数据文件，
	以后还原的时候，直接将备份的内容放进去即可

	数据表备份有前提条件：根据不同的存储引擎有不同的区别		
				--MYISAM可以使用此方法备份，而INNODB不支持



	单表数据备份	--每次只能备份一张表，只能备份数据(表结构不能备份)
		
		SELECT */字段列表 INTO OUTFILE 文件所在路径 FROM 数据源;	--前提是外部文件不存在

		SELECT * INTO OUTLIFE 'D:/server/temp/test.txt' FROM test;

	高级备份	--自己指定字段和行的处理方式

		SELECT * INTO OUTLIFE '文件路径'  FIELDS 字段处理 LINES 行处理 FROM test;

			FILELDS:字段处理
				ENCLOSED BY:字段使用什么内容爆过，默认是  空字符串
				TERMINATED BY:字段以什么结束，默认是“\t”,tab键
				ESCAPED BY:特殊符号用什么方式处理，默认是“\\”，使用反斜杠转义

			LINES:行处理
				STARTING BY:每行以什么开始，默认是“ ”，空字符串
				TERMINATED BY:每行以什么结束，默认是“\r\n”，换行符


	数据还原	--讲一个在外部保存的数据重新恢复到表中(如果结构不存在，那么无法恢复)

		LOAD DATA INFILE 文件缩在路径 INTO TABLE 表名[(字段列表)] FIELDS 字段处理 LINES 行处理;
			--怎么备份的怎么还原


SQL备份		--备份的是SQL语句，系统会对表结构以及数据进行处理，
		--变成对应的SQL语句，然后进行备份，
		--还原的时候只需要执行SQL指令即可（主要就是针对表结构）

	使用软件：mysqldump.exe

		Mysqldump/mysqldump.exe -hPup 数据库名字[数据表1,数据表2....]>外部文件目录	--建议使用.sql

	SQL 还原数据： 

		使用mysql.exe客户端还原
			Mysql.exe/mysql -hPup 数据库名字<备份文件目录
			-- 例：mysqldump.exe -uroot -proot test test > D:/SQL/sql.sql

		使用SQL指令还原SQL备份
			SOURCE 文件目录

增量备份	--不是针对数据或者SQL指令进行备份：是针对MYSQL服务器的日志文件进行备份
		--增量备份：指定时间段开始进行备份，备份数据不会重复，而且所有的操作都会备份

