-- SQL "Structure Query Language"
CREATE DATABASE system_db;

USE system_db;

-- creation du table Users = utilisateurs
CREATE TABLE Users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    password TEXT,
);