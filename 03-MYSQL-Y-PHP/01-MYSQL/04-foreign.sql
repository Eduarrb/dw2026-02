CREATE TABLE directores (
    dire_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dire_nombres VARCHAR(50) NOT NULL,
    dire_apellidos VARCHAR(50) NOT NULL
)

INSERT INTO directores (dire_nombres, dire_apellidos) VALUES
    ('Fransis', 'Ford Coppola'),
    ('James', 'Cameron'),
    ('Joe', 'Russo'),
    ('Christopher', 'Nolan'),
    ('Ridley', 'Scott')

ALTER TABLE peliculas ADD COLUMN peli_dire_id INT UNSIGNED AFTER peli_id

UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 2 WHERE peli_id = 2
UPDATE peliculas SET peli_dire_id = 2 WHERE peli_id = 10
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 4
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 5
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 6
UPDATE peliculas SET peli_dire_id = 5 WHERE peli_id = 9

-- PRIMARY AND FOREIGN KEYS
-- 1. Ayudan a establer "las relaciones entre tablas"
-- 2. Ayudan a mantener la integridad de los datos
-- 3. Ayudan a mejorar el rendimiento de las consultas

-- RESTRICCIONES DE INTEGRIDAD REFERENCIAL
-- 1. restrict: Evita la eliminación o actualización de registros en la tabla principal si hay registros relacionados en la tabla referecial.

-- 2. cascade: Permite la eliminación o actualización de registros en la tabla dependiente y automáticamente elimina o actualiza los registros relacionados en la tabla referencial.

-- 3. set null: Permite la eliminación o actualización de registros en la tabla dependiente y establece los valores de las columnas relacionadas en la tabla referencial a NULL.

-- 4. no action: No realiza ninguna acción en la tabla referencial, pero si hay registros relacionados, se producirá un error.

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores(dire_id)
    ON DELETE RESTRICT ON UPDATE RESTRICT

DELETE FROM directores WHERE dire_id = 1

DELETE FROM peliculas WHERE peli_id = 12

ALTER TABLE peliculas DROP CONSTRAINT fk_direId

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores(dire_id)
    ON DELETE CASCADE ON UPDATE CASCADE

DELETE FROM directores WHERE dire_id = 2

ALTER TABLE peliculas ADD COLUMN peli_img VARCHAR(100)

ALTER TABLE peliculas MODIFY peli_img TEXT