CREATE DATABASE Mentic;
USE Mentic;

CREATE TABLE users (
    
    id_user VARCHAR(10) NOT NULL UNIQUE PRIMARY KEY,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(45) NOT NULL,
    email VARCHAR(60) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL,
	admin VARCHAR(1) NOT NULL,
    from_date DATE NOT NULL,
	to_date DATE 
    
);