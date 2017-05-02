变量
	系统变量：
		查看系统变量
			SHOW VARIABLES;

		查看变量值
			SELECT @@变量名;
		
		修改会话级别变量值
			SET 变量名 = 值;
		
		修改全局级别变量值
			SET GLOBAL 变量名 = 值;

	自定义变量：	-- 所有自定义的变量都是会话级别
		定义变量	--自定义变量必须使用一个@符号
			SET @变量名 = 值;
			-- 通常使用 := 表示赋值符号
		查看变量值
			SELECT @变量名 = 值;

	从数据表中获取数据，然后赋值给变量
		
		边赋值，边查看结果
			SELECT @变量名 := 字段名 FROM 数据源;	--变量的值等于最后一条数据的值

		只有赋值，不看结果	--要求很严格，数据记录最多只允许获取一条，因为Mysql不支持数组
			SELECT 字段列表 FROM 表名 INTO @变量名;


触发器	-- 事先为某张表绑定好一段代码，当表中的某些内容发生改变的时候，系统自动触发代码并执行
	事件类型	
		增 INSERT 
		删 DELETE 
		改 UPDATE
	触发时间	
		前 BEFORE
		后 AFTER

	-- 一张表中只能拥有一种触发时间的一种类型的触发器，最多一张表能有6个触发器

	创建触发器
		在Mysql高级结构中，没有大括号，都是用对应的字符符号代替

		触发器基本语法
			临时修改语句结束符
				DELIMITER 自定义符号	--后续代码中只有碰到自定义符号才算结束
			
			CREATE TRIGGER 触发器名字 触发时间 事件类型 ON 表名 FOR EACH ROW
			BEGIN		-- 代表左大括号，开始
					-- 触发器的内容，每行内容都必须使用语句结束符，分号
			END		-- 代表右大括号，结束
			自定义符号	--语句结束符

			将临时修正修改过来
				DELIMITER ;


		查看所有触发器或者模糊匹配
			SHOW TRIGGERS [LIKE 'PATTERN'];

		查看触发器创建语句
			SHOW CREATE TRIGGER 触发器名字;


	删除触发器	-- 触发器不能修改，只能先删除再新增
		DROP TRIGGER 触发器名字;

	
	触发器记录	-- 触发器记录：不管触发器是否触发了，只要当某种操作准备执行，
			-- 系统就会将当前要操作的记录的当前状态 和即将执行之后的新的状态
			-- 分别保留下来，供触发器使用

			-- 要操作的当前状态保存到 OLD 中
			-- 操作之后的可能形态保存给 NEW

			-- OLD代表旧记录 NEW没有新记录
			-- 删除的时候没有NEW，插入的时候没有OLD
			-- OLD和NEW都是代表记录本身：任何一条记录除了有数据，还有字段名字

		使用方式
			OLD.字段名/NEW.字段名;

			-- 创建触发器
			DELIMITER EOC
			CREATE TRIGGER new_indent BEFORE INSERT ON indent FOR EACH ROW
			BEGIN
				UPDATE inventory SET inventory = inventory - NEW.number WHERE id = NEW.indent_id;
			END
			EOC
			DELIMITER ;

	
代码执行结构

	顺序结构


	分支结构	--在Mysql中只有if分支
		基本语法
			IF 条件判断 THEN 
			    -- 要执行的代码
			ELSE
			    -- 不满足条件要执行的代码;
			END IF;

					-- 创建触发器
			DELIMITER EOC
			CREATE TRIGGER new_indent BEFORE INSERT ON indent FOR EACH ROW
			BEGIN
				-- 获取商品库存
				SELECT inventory FROM inventory WHERE id = NEW.indent_id INTO @inv;
				-- 比较库存
				IF NEW.number > inventory THEN
				-- 库存不够，触发器没有提供一个能够阻止事件发生的能力，所以只能强行出错
				INSERT INTO XXXX VALUES(XXXXXX);
				END IF;
					
				UPDATE inventory SET inventory = inventory - NEW.number WHERE id = NEW.indent_id;
			END
			EOC
			DELIMITER ;


	循环结构
		WHILE 循环
		
			循环名字:WHILE 条件判断 DO
				-- 满足条件要执行的代码
				-- 变更循环条件
				LEAVE/ITERATE 循环名字;
			END WHILE;

		ITERATE:迭代，类似continue,后面的代码不执行，循环重新来过
		LEAVE:离开，类似break，整个循环结束


函数	--任何函数都有返回值，因此函数的调用是通过SELECT调用

	系统函数
		SUBSTRING -- 字符串截取，mysql字符串的下标从1开始，截取单位为字符
			SUBSTRING(目标字符串，起始位置，终止位置)

		CHAR_LENGTH -- 字符长度
			CHAR_LENGTH(目标字符串);

		LENGTH -- 字节长度
			CHAR_LENGTH(目标字符串);

		INSTR	-- 判断字符串是否在某个具体的字符串中存在，存在返回位置，不存在返回0
			INSTR(目标字符串,要查询的字符串);

		LPAD	-- 左填充，将字符串按照某个指定的填充方式填充到指定长度(字符)
			LPAD(要填充的字符串,填充长度,填充内容);

		INSERT	-- 字符串替换
			INSERT(目标字符串,起始位置,替换长度,替换内容);

		STRCMP	-- 字符串比较,不区分大小写
			-- str1小于str2返回-1
			-- str1等于str2返回 0 
			-- str1大于str2返回 1

			STRCMP(字符串1,字符串2);

	自定义函数

		创建函数
			
			创建语法

			CREATE FUNCTION 函数名([形参1 字段类型,....]) RETURNS 数据类型
			BEGIN
				-- 函数体
				-- 返回值 RETURN (指定数据类型);
			END


		查看函数
			SHOW FUNCTION STATUS[LIKE 'pattern'];
			SHOW CREATE FUNCTIOPN 函数名;

		调用函数
			-- 使用SELECT查看返回值
			SELECT 函数名();

		修改&删除函数	-- 函数只能先删除后新增，不能修改
			DROP FUNCTION 函数名;

		在函数内部使用@符号定义的变量是全局变狼，可以在外部访问
		变量想要改变，一定要使用 SET;


	作用域
		全局变量：使用 SET 关键字定义，使用@符号标志

		局部变量： 使用 DECLARE 关键字声明，没有@符号，
			   所有局部变量的声明必须在函数体开始之前
			   定义局部变量可以有属性


存储过程	-- 是一种用来处理数据的方式，存储过程是一种没有返回值的函数
	创建过程
		CREATE PROCEDURE 过程名字([参数列表])
		BEGIN 
			-- 过程体
		END

	查看过程
		SHOW PROCEDURE STATUS[LIKE 'PATTERN'];	--查看所有过程
		SHOW CREATE PROCEDURE 过程名;
	
	调用过程
		CALL 过程名();

	修改&删除过程	-- 过程只能先删除后增加，不能修改
		DROP PROCEDURE 过程名;
	
	过程参数	-- 函数的参数需要数据类型指定，过程比函数更严格
		过程有自己的类型限定:
			IN:数据只是从外部传入给内部使用(值传递),可以是数值也可以是变量
			OUT:只允许过程内部使用(不用外部数据)，给外部使用的(引用传递，外部的数据会被先清空财会进入到内部),只能传变量
			INOUT:外部可以在内部使用，内部修改也可以给外部使用，典型的引用传递，只能传变量

		基本使用：
			CREATE PROCEDURE 过程名(类型限定 形参名字 数据类型)
			BEGIN
				--过程体
			END

	-- 在存储过程调用结束之后，系统会将局部变量的值重新返回给全局变量(OUT,INOUT类型)