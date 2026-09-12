-- conexion por terminal
mysql -u root -p

-- QUERIES
-- mysql no es key sensitive

show databases

SHOW DATABASES

-- crear base de datos

CREATE DATABASE prueba

USE prueba

SHOW TABLES

CREATE TABLE personas (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    dni CHAR(8) NOT NULL UNIQUE,
    fechaNac DATETIME NOT NULL
)

SHOW TABLES

DESC personas

DROP TABLE personas ---- 💥💥💥💥 NO HACER NUNCA EN PRODUCCION

ALTER TABLE personas MODIFY fechaNac DATE -- 💥💥 NO LO HAGAS SI TIENES DATOS NI EN PRODUCCION

INSERT INTO personas (nombres, apellidos, dni) VALUES ("Juan", "Perez", "12345678")

SELECT * FROM personas

INSERT INTO personas (nombres, apellidos, dni, fechaNac) VALUES ("Juan", "Perez", "12345678", "1990-01-01")

INSERT INTO personas (nombres, apellidos, dni, fechaNac) VALUES ("Maria", "Gomez", "87654321", "1995-05-15")

INSERT INTO personas (nombres, apellidos, dni, fechaNac) VALUES ("Carlos", "Lopez", "11223344", "1988-12-20")

--- ID -> JBC-EAB21531351-24241

-- 💥💥 NO LO HAGAS SI TIENES DATOS NI EN PRODUCCION, ES MAS NUNCA LO HAGAN

DELETE FROM personas

TRUNCATE TABLE personas