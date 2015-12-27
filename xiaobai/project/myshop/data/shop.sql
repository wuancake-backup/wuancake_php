CREATE DATABASE IF NOTE EXISTS SHOP;
USE 'shop';
--管理员表
DROP TABLE IF EXISTS 'admin';
CREATE TABLE 'admin'(
'id' tinyint unsigned aoto_increment key,
'username' varchar(20) not null unique,
'password' char(32) not null,
'email' varchar(50) not null
);


--分类表
DROP TABLE IF EXISTS 'cate';
CREATE TABLE

