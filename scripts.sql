CREATE DATABASE job_prep;

CREATE TABLE users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	email_id VARCHAR(255),
	phone_no VARCHAR(10)
);

ALTER TABLE users ADD passwords VARCHAR(255);
ALTER TABLE users ADD address VARCHAR(255);
ALTER TABLE users ADD cv VARCHAR(255);

CREATE TABLE company(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	email_id VARCHAR(255),
	phone_no VARCHAR(10)
);
ALTER TABLE company ADD passwords VARCHAR(255);
ALTER TABLE company ADD description VARCHAR(255);

ALTER TABLE company ADD link VARCHAR(255);
ALTER TABLE company ADD avg_work_hours VARCHAR(255);
ALTER TABLE company ADD avg_package VARCHAR(255);
ALTER TABLE company ADD image VARCHAR(255);
ALTER TABLE company ADD avg_interviews VARCHAR(255);

insert into company(name,email_id,phone_no,description,avg_package,avg_work_hours,image)
VALUES('Amazon','erick@amazon.in','9871560555','amazon company description','10-15','6-9','Amazon_logo.png');

insert into company(name,email_id,phone_no,description,avg_package,avg_work_hours,image)
VALUES('Oracle','dan@Oracle.in','9871744550','Oracle company description','11-15','7-9','download.png');

insert into company(name,email_id,phone_no,description,avg_package,avg_work_hours,image)
VALUES('ISRO','rohan@isro.gov.in','9871788550','ISRO org description','15-30','8-9','isro.png');

CREATE TABLE vacancies(
	v_id INT AUTO_INCREMENT PRIMARY KEY,
	vacancy VARCHAR(255),
	description VARCHAR(255),
	contact VARCHAR(255),
	id INT(100),
	timestamp_ DATETIME DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT comp_vid FOREIGN KEY (id) REFERENCES vacancies(v_id)
);

CREATE TABLE resources(
	r_id INT AUTO_INCREMENT PRIMARY KEY,
	resource_name VARCHAR(100),
	type VARCHAR(10),
	description VARCHAR(255),
	id INT(100),
	u_id INT(100),
	date_added DATETIME DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT res_added FOREIGN KEY (u_id) REFERENCES users(id),
	CONSTRAINT company_res FOREIGN KEY (id) REFERENCES company(id) 
);

CREATE TABLE prep(
	p_id INT AUTO_INCREMENT PRIMARY KEY,
	c_id INT(100),
	u_id INT(100),
	CONSTRAINT user_prep FOREIGN KEY (u_id) REFERENCES users(id),
	CONSTRAINT user_company_prep FOREIGN KEY (c_id) REFERENCES company(id)
);
ALTER TABLE prep ADD start_date DATETIME DEFAULT CURRENT_TIMESTAMP;

CREATE TABLE experience(
	id INT AUTO_INCREMENT PRIMARY KEY,
	c_id INT(100),
	u_id INT(100),
	experience TEXT,
	position VARCHAR(255),
	start_date DATE,
	end_time DATE,
	added_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT comp_exp FOREIGN KEY (c_id) REFERENCES company(id),
	CONSTRAINT user_exp FOREIGN KEY (u_id) REFERENCES users(id)
);