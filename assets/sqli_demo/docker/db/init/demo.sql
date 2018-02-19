
CREATE DATABASE demo_db;

CREATE TABLE demo_db.users (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(128) NOT NULL,
  firstname VARCHAR(64) NOT NULL,
  surname VARCHAR(64) NOT NULL,
  balance DECIMAL(13,2) DEFAULT 0.00
);

INSERT INTO demo_db.users
  (username, password, firstname, surname, balance)
VALUES
  ('alice', '123456', 'Alice', 'Smith', 4000.00),
  ('bob', 'welcome', 'Bob', 'Martin', 10000000.00),
  ('charlie', 'password', 'Charlie', 'Jones', 10.00),
  ('dan', '12345678', 'Dan', 'Taylor', 1000.00),
  ('eve', 'qwerty', 'Eve', 'Williams', 500.00),
  ('frank', 'football', 'Frank', 'Brown', 1.50),
  ('grace', 'letmein', 'Grace', 'Davies', 10000.00);

CREATE TABLE demo_db.staff (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(128) NOT NULL 
);

INSERT INTO demo_db.staff 
  (username, password)
VALUES
  ('admin', 'oh_no'),
  ('analyst', 'analyst_password'),
  ('manager', 'manager_password');

GRANT SELECT ON demo_db.* to 'demo_user' identified by 'password';

