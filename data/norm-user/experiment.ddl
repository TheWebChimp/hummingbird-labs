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

CREATE TABLE user_meta (
	id BIGINT NOT NULL AUTO_INCREMENT,
	user_id  BIGINT(20) NOT NULL,
	name VARCHAR(200) NOT NULL,
	value TEXT NOT NULL,
	PRIMARY KEY pk_id (id),
	UNIQUE KEY uk_user_name (user_id ,name),
	KEY idx_user_name (user_id ,name),
	KEY idx_name (name)
) DEFAULT CHARACTER SET = UTF8;