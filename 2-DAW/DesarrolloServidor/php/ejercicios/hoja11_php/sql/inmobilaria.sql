CREATE DATABASE inmobiliaria;
USE inmobiliaria;

CREATE TABLE noticias (
    ID INT(5) NOT NULL AUTO_INCREMENT,
    TITULO VARCHAR(100) NOT NULL DEFAULT '',
    TEXTO TEXT NOT NULL,
    CATEGORIA ENUM('promociones', 'ofertas', 'costas') NOT NULL DEFAULT 'promociones',
    FECHA DATE NOT NULL DEFAULT '0000-00-00',
    IMAGEN VARCHAR(100) DEFAULT NULL,
    PRIMARY KEY (ID)
);
INSERT INTO noticias (ID, TITULO, TEXTO, FECHA, CATEGORIA, IMAGEN) 
VALUES (1, 'Nueva promoción en Nervión', '145 viviendas de lujo en urbanización ajardinada situadas en un entorno privilegiado', '2007-02-04', 'promociones', NULL);

INSERT INTO noticias (ID, TITULO, TEXTO, FECHA, CATEGORIA, IMAGEN) 
VALUES (2, 'Ultimas viviendas junto al rio', 'Apartamentos de 1 y 2 dormitorios, con fantásticas vistas. Excelentes condiciones de financiación.', '2007-02-05', 'ofertas', NULL);

INSERT INTO noticias (ID, TITULO, TEXTO, FECHA, CATEGORIA, IMAGEN) 
VALUES (3, 'Apartamentos en el Puerto de Sta María', 'En la playa de Valdelagrana, en primera línea de playa. Pisos reformados y completamente amueblados.', '2007-02-06', 'costas', 'apartamento 8.jpg');

INSERT INTO noticias (ID, TITULO, TEXTO, FECHA, CATEGORIA, IMAGEN) 
VALUES (4, 'Casa reformada en el barrio de la Judería', 'Dos plantas y ático, 5 habitaciones, patio interior, amplio garaje. Situada en una calle tranquila y a un paso del centro histórico.', '2004-02-07', 'promociones', NULL);

INSERT INTO noticias (ID, TITULO, TEXTO, FECHA, CATEGORIA, IMAGEN) 
VALUES (5, 'Promoción en Costa Ballena', 'Con vistas al campo de golf, magníficas calidades, entorno ajardinado con piscina y servicio de vigilancia.', '2007-02-09', 'costas', 'apartamento 9.jpg');