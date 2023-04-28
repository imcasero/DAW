-- Crear la base de datos
CREATE DATABASE biblioteca;

-- Seleccionar la base de datos
USE gestiona_biblioteca;

-- Crear la tabla BIBLIOTECA
CREATE TABLE BIBLIOTECA (
  nombreB VARCHAR(50) PRIMARY KEY,
  ubicacion VARCHAR(50) NOT NULL
);

-- Crear la tabla LIBROS
CREATE TABLE LIBROS (
  idD INT PRIMARY KEY,
  nombreB VARCHAR(50),
  titulo VARCHAR(50) NOT NULL,
  anio INT NOT NULL,
  idU_prestamo INT,
  FOREIGN KEY (nombreB) REFERENCES BIBLIOTECA (nombreB)
);

-- Crear la tabla REVISTAS
CREATE TABLE REVISTAS (
  idD INT PRIMARY KEY,
  nombreB VARCHAR(50),
  titulo VARCHAR(50) NOT NULL,
  idU_prestamo INT,
  FOREIGN KEY (nombreB) REFERENCES BIBLIOTECA (nombreB)
);

-- Crear la tabla USUARIOS
CREATE TABLE USUARIOS (
  idU INT PRIMARY KEY,
  dni VARCHAR(20) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  direccion VARCHAR(100) NOT NULL,
  tipo ENUM('socio', 'invitado') NOT NULL
);

-- Crear la tabla inscritos
CREATE TABLE inscritos (
  nombreB VARCHAR(50),
  idU INT,
  PRIMARY KEY (nombreB, idU),
  FOREIGN KEY (nombreB) REFERENCES BIBLIOTECA (nombreB),
  FOREIGN KEY (idU) REFERENCES USUARIOS (idU)
);