SELECT * FROM actores a, personajes b WHERE a.act_id = b.per_act_id

INSERT INTO actores (act_nombres, act_apellidos) VALUES
    ("Tom", "Hanks"),
    ("Emma", "Watson"),
    ("Denzel", "Washington"),
    ("Natalie", "Portman"),
    ("Brad", "Pitt"),
    ("Angelina", "Jolie"),
    ("Johnny", "Depp"),
    ("Scarlett", "Johansson"),
    ("Will", "Smith"),
    ("Charlize", "Theron")

SELECT * FROM actores a INNER JOIN personajes b ON a.act_id = b.per_act_id

SELECT * FROM peliculas a INNER JOIN personajes b ON a.peli_id = b.per_peli_id

SELECT 
    a.peli_nombre,
    a.peli_estreno,
    b.per_nombre
FROM peliculas a INNER JOIN personajes b ON a.peli_id = b.per_peli_id

SELECT * FROM peliculas a LEFT JOIN personajes b ON a.peli_id = b.per_peli_id

SELECT * FROM personajes a RIGHT JOIN actores b ON a.per_act_id = b.act_id

-- 3 TABLAS A MAS
SELECT * FROM peliculas a 
    INNER JOIN personajes b ON a.peli_id = b.per_peli_id
    RIGHT JOIN actores c ON c.act_id = b.per_act_id
    