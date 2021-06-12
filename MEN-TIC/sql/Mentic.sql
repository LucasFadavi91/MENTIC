CREATE DATABASE mentic;
USE mentic;

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

CREATE TABLE modulos (
    
    id_modulo VARCHAR(10) NOT NULL PRIMARY KEY,
    name_modulo VARCHAR(100) NOT NULL
      
);

CREATE TABLE levels (
    
    id_level VARCHAR(10) NOT NULL,
    name_level VARCHAR(100) NOT NULL,
	id_modulo VARCHAR(10) NOT NULL,
    estado VARCHAR(1) NULL
	PRIMARY KEY (id_level)
      
);

CREATE TABLE sublevels (
    
    id_sublevel VARCHAR(10) NOT NULL,
    name_sublevel VARCHAR(100) NOT NULL,
	id_level VARCHAR(10) NOT NULL,
	PRIMARY KEY (id_sublevel)
       
);

CREATE TABLE user_modulo (
    
	id_user VARCHAR(10) NOT NULL,
    id_modulo VARCHAR(10) NOT NULL,
    points_modulo VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_user,id_modulo)
    
);

CREATE TABLE user_level (
    
	id_user VARCHAR(10) NOT NULL,
    id_level VARCHAR(10) NOT NULL,
    points_level VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_user,id_level)
    
);

CREATE TABLE user_sublevel (
    
	id_user VARCHAR(10) NOT NULL,
    id_sublevel VARCHAR(10) NOT NULL,
    points_sublevel VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_user,id_sublevel)
    
);

ALTER TABLE levels
 ADD CONSTRAINT FK4 FOREIGN KEY (id_modulo) REFERENCES modulos (id_modulo);

ALTER TABLE user_modulo
 ADD CONSTRAINT FK FOREIGN KEY (id_user) REFERENCES users (id_user),
 ADD CONSTRAINT FK1 FOREIGN KEY (id_modulo) REFERENCES modulos (id_modulo);
 
ALTER TABLE user_level
 ADD CONSTRAINT FK2 FOREIGN KEY (id_user) REFERENCES users (id_user),
 ADD CONSTRAINT FK3 FOREIGN KEY (id_level) REFERENCES levels (id_level);

 ALTER TABLE user_sublevel
 ADD CONSTRAINT FK5 FOREIGN KEY (id_user) REFERENCES users (id_user),
 ADD CONSTRAINT FK6 FOREIGN KEY (id_sublevel) REFERENCES sublevels (id_sublevel);

