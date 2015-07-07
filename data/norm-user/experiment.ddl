CREATE TABLE user (
	id BIGINT NOT NULL AUTO_INCREMENT,
	login VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(160) NOT NULL,
	nicename VARCHAR(350) NOT NULL,
	status VARCHAR(255) NOT NULL,
	type VARCHAR(255) NOT NULL,
	created DATETIME NOT NULL,
	modified DATETIME NOT NULL,
	PRIMARY KEY pk_id (id),
	UNIQUE KEY uk_login (login),
	KEY key_email (email),
	KEY key_status (status),
	KEY key_type (type)
) DEFAULT CHARACTER SET = UTF8;