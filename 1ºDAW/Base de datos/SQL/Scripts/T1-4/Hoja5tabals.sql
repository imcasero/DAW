DROP DATABASE practicas;
CREATE DATABASE practicas;
USE practicas;
CREATE TABLE ejemplo(
	nif VARCHAR(10) NOT NULL,
    nombre VARCHAR(12) NOT NULL,
    edad TINYINT DEFAULT"18"
);
CREATE TABLE ejemplo1(
	dni VARCHAR(10),
    nombre VARCHAR(12),
    fecha DATE DEFAULT"01/01/01"
);
CREATE TABLE ejemplo2(
	dni VARCHAR(10),
    nombre VARCHAR(12) DEFAULT "No definido",
    usuario VARCHAR(10)
);
CREATE TABLE ejemplo3(
	dni VARCHAR(10) PRIMARY KEY NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    edad TINYINT CHECK (edad >5 AND edad <20) ,
    curso ENUM ('1' , '2' ,  '3')
);

ALTER TABLE ejemplo3 MODIFY edad TINYINT CHECK (edad >5 AND edad <20) NOT NULL;

CREATE TABLE fabricantes(
	cod_fabricantes TINYINt,
    nombre VARCHAR(15) UNIQUE,
    pais VARCHAR(15),
    PRIMARY KEY (cod_fabricantes)
);
CREATE TABLE articulos(
	articulo VARCHAR(20),
    cod_fabricantes TINYINT,
    peso NUMERIC(3 , 2),
    categoria ENUM('Primera' , 'Segunda', 'Tercera'),
    precio_venta NUMERIC(6 , 2) DEFAULT "100",
    precio_costo NUMERIC(6 , 2) DEFAULT "100",
    Existencias MEDIUMINT,
    PRIMARY KEY (articulo , cod_fabricantes , peso , categoria),
    FOREIGN KEY (cod_fabricantes) REFERENCES fabricantes(cod_fabricantes)
);
