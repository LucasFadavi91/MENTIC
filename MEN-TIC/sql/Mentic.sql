CREATE DATABASE Mentic;
USE Mentic;

CREATE TABLE users (
    
    id_user VARCHAR(10) NOT NULL PRIMARY KEY,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(45) NOT NULL,
    email VARCHAR(60) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
	admin VARCHAR(1) NOT NULL,
    from_date DATE NOT NULL,
	to_date DATE 
    
);

CREATE TABLE categories (
    
    id_category VARCHAR(10) NOT NULL PRIMARY KEY,
    name_category VARCHAR(20) NOT NULL
    
    
);

CREATE TABLE levels (
    
    id_level VARCHAR(10) NOT NULL,
    name_level VARCHAR(20) NOT NULL,
	id_category VARCHAR(10) NOT NULL,
	PRIMARY KEY (id_level)
    
    
);

CREATE TABLE user_category (
    
	id_user VARCHAR(10) NOT NULL,
    id_category VARCHAR(10) NOT NULL,
    points_category VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_user,id_category)
    
);

CREATE TABLE user_level (
    
	id_user VARCHAR(10) NOT NULL,
    id_level VARCHAR(10) NOT NULL,
    points_level VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_user,id_level)
    
);

ALTER TABLE levels
 ADD CONSTRAINT FK4 FOREIGN KEY (id_category) REFERENCES categories (id_category);

ALTER TABLE user_category
 ADD CONSTRAINT FK FOREIGN KEY (id_user) REFERENCES users (id_user),
 ADD CONSTRAINT FK1 FOREIGN KEY (id_category) REFERENCES categories (id_category);
 
ALTER TABLE user_level
 ADD CONSTRAINT FK2 FOREIGN KEY (id_user) REFERENCES users (id_user),
 ADD CONSTRAINT FK3 FOREIGN KEY (id_level) REFERENCES levels (id_level);

/*
	En la imagen la tabla prueba_alumno es user_level, prueba es level.
	En la tabla user_level (tabla con relacion N:M), nos gustaria que apareciese el id_category pero no sabemos exactamente
	como ponerlo.

*/






