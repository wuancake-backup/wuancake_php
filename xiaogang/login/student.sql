
create table student(
	s_id int primary key auto_increment,
	s_name varchar(10) not null unique,
	s_pass varchar(16) not null
);
insert into student values(null,"zhangsan","111111");
insert into student values(null,"lisi","123456");