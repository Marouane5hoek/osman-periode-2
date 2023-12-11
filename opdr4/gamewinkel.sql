CREATE DATABASE gamewinkel;

USE gamewinkel;

CREATE TABLE games (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gamenaam VARCHAR(255),
  genre VARCHAR(255),
  platform VARCHAR(255)
);

SELECT * FROM games;
