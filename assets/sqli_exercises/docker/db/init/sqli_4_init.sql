
CREATE DATABASE exercise_4_db;

CREATE TABLE exercise_4_db.users (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(128) NOT NULL,
  firstname VARCHAR(64) NOT NULL,
  surname VARCHAR(64) NOT NULL,
  balance DECIMAL(13,2) DEFAULT 0.00
);

INSERT INTO exercise_4_db.users 
  (username, password, firstname, surname, balance)
VALUES
  ('alice', '123456', 'Alice', 'Smith', 4000.00),
  ('bob', 'it_is_not_enough_for_code_to_work', 'Robert', 'Martin', 10000000.00),
  ('charlie', 'password', 'Charlie', 'Jones', 10.00),
  ('dan', '12345678', 'Dan', 'Taylor', 1000.00),
  ('eve', 'qwerty', 'Eve', 'Williams', 500.00),
  ('frank', 'football', 'Frank', 'Brown', 1.50),
  ('grace', 'letmein', 'Grace', 'Davies', 10000.00);

GRANT SELECT ON exercise_4_db.* to 'user4' identified by 'password';
GRANT UPDATE ON exercise_4_db.* to 'user4' identified by 'password';
GRANT INSERT ON exercise_4_db.* to 'user4' identified by 'password';

