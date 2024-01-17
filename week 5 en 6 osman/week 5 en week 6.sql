CREATE DATABASE rugby;

USE rugby;

CREATE TABLE players (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  surname VARCHAR(255),
  age INT
);

SELECT * FROM players;

CREATE TABLE accounts (
  account_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255),
  email VARCHAR(255), 
  password VARCHAR(255)
);

SELECT * FROM accounts;