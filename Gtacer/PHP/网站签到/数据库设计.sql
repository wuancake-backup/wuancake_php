-- �û��ʺ������
CREATE TABLE users(
id int primary key auto_increment,
username varchar(16) unique key not null,
password varchar(32) not null
)CHAR SET UTF8 ENGINE INNODB;

-- �û�����ǩ��ʱ���
CREATE TABLE sign_in_table(
id int primary key auto_increment,
user varchar(16) UNIQUE KEY NOT NULL,
last_sign_time DATE NOT NULL DEFAULT '1111-11-11'
)char set utf8 engine innodb;

-- �û�ǩ����Ϣ��
CREATE TABLE sign_info(
id int primary key auto_increment,
user varchar(16) UNIQUE KEY NOT NULL,
continuous_days int(6) NOT NULL DEFAULT 0,
sign_days MEDIUMTEXT DEFAULT NULL
)char set utf8 engine innodb;

-- ������

-- �û�ע��󣬷ֱ����������ݱ�����û���Ϣ
DELIMITER EOC
CREATE TRIGGER new_user AFTER INSERT ON users FOR EACH ROW
BEGIN
    SET @username := NEW.username;
    INSERT INTO sign_in_table VALUE(default,@username,default);
    INSERT INTO sign_info VALUE(default,@username,default,default,default);
END
EOC
DELIMITER ;

-- �����ϴ�ǩ��ʱ����жϲ���������ǩ������
DELIMITER EOC
CREATE TRIGGER con AFTER UPDATE ON sign_in_table FOR EACH ROW
BEGIN
UPDATE sign_info SET not_sigin_days  = 0 WHERE id = NEW.id;
IF DATEDIFF(NEW.last_sign_time,OLD.last_sign_time)=1 THEN
UPDATE sign_info SET continuous_days = continuous_days+1 WHERE id = NEW.id;
ELSE
UPDATE sign_info SET continuous_days = 1 WHERE id = NEW.id;
END IF;
END
EOC
DELIMITER ;