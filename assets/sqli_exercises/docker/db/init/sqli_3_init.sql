
CREATE DATABASE exercise_3_db;

CREATE TABLE exercise_3_db.users (
	id INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(128) NOT NULL 
);

INSERT INTO exercise_3_db.users 
	(username, password)
VALUES
	('admin', 'what_cheese_does_not_belong_to_you?_nacho_cheese'),
	('alice', 'alicepassword'),
	('bob', 'bobpassword');

CREATE TABLE exercise_3_db.products (
  id INT(6) NOT NULL,
  name VARCHAR(64) NOT NULL,
  price DECIMAL(4,2) NOT NULL,
  available INT(6) NOT NULL,
  PRIMARY KEY(id)
);

INSERT INTO exercise_3_db.products 
  (id, name, price, available)
VALUES
  (1, 'Cornish Camembert', 4.72, 0),
  (2, 'Godminster Brie', 5.94, 2),
  (3, 'Miss Muffet', 6.72, 5),
  (4, 'Cornish Crumbly', 6.72, 2),
  (5, 'Somerset Camembert', 4.25, 10),
  (6, 'Rachel', 9.88, 4),
  (7, 'Quicke\'s Oak Smoked Cheddar', 6.28, 1),
  (8, 'Extra Mature Wyfe of Bath', 7.46, 0),
  (9, 'Francis', 7.98, 5),
  (10, 'Quicke\'s Ewes\' Milk Clothbound Cheese', 9.28, 10),
  (11, 'Cornish Smuggler', 6.88, 3),
  (12, 'Merry Wyfe', 6.48, 4),
  (13, 'Bath Soft Cheese', 10.90, 1),
  (14, 'Stinking Bishop', 32.90, 0),
  (15, 'Ford Farm Cave Aged Cheddar', 3.92, 8);

GRANT SELECT ON exercise_3_db.* to 'user3' identified by 'password';
