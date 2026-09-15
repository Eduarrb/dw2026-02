CREATE DATABASE netflix

USE netflix

CREATE TABLE peliculas (
    peli_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    peli_nombre VARCHAR(50) NOT NULL,
    peli_genero VARCHAR(50) NOT NULL,
    peli_estreno DATE NOT NULL,
    peli_restricciones VARCHAR(10) NOT NULL
)

INSERT INTO peliculas (peli_nombre, peli_genero, peli_estreno, peli_restricciones) VALUES
    ("El Padrino", "Drama", "1972-03-24", "R"),
    ("Titanic", "Romance", "1997-12-19", "PG-13"),
    ("Jurassic Park", "Aventura", "1993-06-11", "PG-13"),
    ("Avengers: Endgame", "Acción", "2019-04-26", "PG-13"),
    ("Inception", "Ciencia Ficción", "2010-07-16", "PG-13"),
    ("The Dark Knight", "Acción", "2008-07-18", "PG-13"),
    ("Forrest Gump", "Drama", "1994-07-06", "PG-13"),
    ("The Matrix", "Ciencia Ficción", "1999-03-31", "R"),
    ("Gladiator", "Acción", "2000-05-05", "R"),
    ("Avatar", "Ciencia Ficción", "2009-12-18", "PG-13"),
    ("The Lion King", "Animación", "1994-06-15", "G")

INSERT INTO peliculas (peli_nombre, peli_genero, peli_estreno, peli_restricciones) VALUES
    ("Spiderman: No Way Home", "accion", "2021-12-17", "PG-13")

SELECT * FROM peliculas

SELECT * FROM peliculas WHERE peli_id = 7

SELECT * FROM peliculas WHERE peli_nombre = "Titanic"

SELECT * FROM peliculas WHERE peli_restricciones = "R"

SELECT * FROM peliculas WHERE peli_genero = "Acción"

SELECT * FROM peliculas WHERE peli_estreno between "2000-01-01" and "2010-12-31"

SELECT * FROM peliculas ORDER BY peli_id DESC

SELECT * FROM peliculas ORDER BY peli_nombre DESC

SELECT * FROM peliculas ORDER BY peli_nombre

CREATE TABLE actores (
    act_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    act_nombres VARCHAR(50) NOT NULL,
    act_apellidos VARCHAR(50) NOT NULL
)

INSERT INTO actores (act_nombres, act_apellidos) VALUES
    ("Al", "Pacino"),
    ("Marlon", "Brandon"),
    ("Leonardo", "DiCaprio"),
    ("Kate", "Winslet"),
    ("Chris", "Evans"),
    ("Robert", "Downey Jr."),
    ("Christian", "Bale"),
    ("Morgan", "Freeman"),
    ("Carrie-Anne", "Moss"),
    ("keanu", "Reeves")


/* CREATE TABLE peliculas_actores (
    peli_id INT UNSIGNED NOT NULL,
    act_id INT UNSIGNED NOT NULL
) */

CREATE TABLE personajes (
    per_peli_id INT UNSIGNED NOT NULL,
    per_act_id INT UNSIGNED NOT NULL,
    per_nombre VARCHAR(50) NOT NULL
)

INSERT INTO personajes (per_peli_id, per_act_id, per_nombre) VALUES
    (1, 1, "Michael Corleone"),
    (1, 2, "Vito Corleone"),
    (2, 3, "Jack Dawson"),
    (2, 4, "Rose DeWitt Bukater"),
    (4, 5, "Steve Rogers / Captain America"),
    (4, 6, "Tony Stark / Iron Man"),
    (6, 7, "Bruce Wayne / Batman"),
    (6, 8, "Lucius Fox"),
    (8, 9, "Trinity"),
    (8, 10, "Neo")
    
SELECT * FROM peliculas, personajes WHERE peli_id = per_peli_id

SELECT * FROM actores, personajes WHERE act_id = per_act_id

SELECT * FROM actores, personajes WHERE actores.act_id = personajes.per_act_id

SELECT * FROM actores act, personajes per WHERE act.act_id = per.per_act_id

SELECT * FROM actores a, personajes p WHERE a.act_id = p.per_act_id

