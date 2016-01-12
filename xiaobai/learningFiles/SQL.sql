SQL 分为两个部分：数据操作语言 (DML) 和 数据定义语言 (DDL)。
 
SELECT - 从数据库表中获取数据
UPDATE - 更新数据库表中的数据
DELETE - 从数据库表中删除数据
INSERT INTO - 向数据库表中插入数据


CREATE DATABASE - 创建新数据库
ALTER DATABASE - 修改数据库
CREATE TABLE - 创建新表
ALTER TABLE - 变更（改变）数据库表
DROP TABLE - 删除表
CREATE INDEX - 创建索引（搜索键）
DROP INDEX - 删除索引


DISTINCT 用于返回唯一不同的值

SELECT 列名称 FROM 表名称 WHERE 列 运算符 值
SELECT * FROM Persons WHERE City='Beijing'


ORDER BY 语句用于根据指定的列对结果集进行排序。
ORDER BY City      语句默认按照升序对记录进行排序。
ORDER BY City DESC 语句按照降序对记录进行排序。

INSERT INTO 语句用于向表格中插入新的行。
INSERT INTO Persons (LastName, Address) VALUES ('Wilson', 'Champs-Elysees')

Update 语句用于修改表中的数据。
UPDATE 表名称 SET 列名称 = 新值 WHERE 列名称 = 某值

DELETE 语句用于删除表中的行。
DELETE FROM 表名称 WHERE 列名称 = 值


SOURCE 导入sql文件







修改MySQL提示符
\D 完整日期		\d 当前数据表   \h 服务器名称   \u当前用户
mysql --prompt
prompt

创建数据库
CREATE DATABASE IF NOT EXISTS db_name CHARACTER SET utf8;
修改数据库
ALTER DATABASE db_name CHARACTER SET 
删除数据库
DROP DATABASE

整型
TINYINT     255
SMALLINT   65535
MEDIUMINT   2^24-1
INT         2^32-1
BIGINT      2^64-1

浮点型
FLOAT[(M,D)]   M数字总位数  D小数点后面的位数  精确到7位小数位
DOUBLE

日期时间型
YEAR
TIME
DATE
DATETIME
TIMESTAMP

字符型
CHAR          255
VARCHAR       65535
TINYTEXT        2^8
TEXT            2^16
MEDIUMTEXT      2^24
LONGTEXT        2^32
ENUM('value1','value2')
SET ('value1','value2')


UNSIGNED 不为负数
AUTO_INCREMENT 自增  必须为主键
PRIMARY KEY 设置为主键

