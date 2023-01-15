CREATE DATABASE IF NOT EXISTS 'car-sales-and-repairs';
USE 'car-sales-and-repairs';

CREATE TABLE 'employees' (
    'eid' int(10) NOT NULL AUTO_INCREMENT,
	'esalary' int,
	'ename' varchar(200),
	PRIMARY KEY(eid)
)

INSERT INTO 'employees' VALUES(42, 42000, 'Tuğberk'), (101, 1000, 'Messi')