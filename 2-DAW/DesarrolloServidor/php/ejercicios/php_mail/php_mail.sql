CREATE DATABASE php_mail;
USE php_mail;
CREATE TABLE clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  apellidos VARCHAR(100) NOT NULL,
  direccion VARCHAR(200) NOT NULL,
  cp INT NOT NULL,
  email VARCHAR(100) NOT NULL,
  fecha_nacimiento DATE NOT NULL
);
INSERT INTO clientes (nombre, apellidos, direccion, cp, email, fecha_nacimiento)
VALUES ('Diego', 'Basura', 'Calle Falsa 123', 28000, 'diego_basura@outlook.es', '1990-01-01');