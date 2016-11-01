create database test;
use test;
create table employee(
	emp_ID int primary key auto_increment,
	emp_username char(32) not null unique,
	emp_password varchar(64) not null
);
insert into employee values(null,"yidon","15120201");
insert into employee values(null,"liantong","15120202");