
CREATE DATABASE exercise_db;

CREATE TABLE exercise_db.users (
	id INT(6) AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL 
);

INSERT INTO exercise_db.users 
	(username, password)
VALUES
	('marshall', 'correcthorsebatterystaple');


GRANT SELECT ON exercise_db.* to 'admin' identified by 'password';
