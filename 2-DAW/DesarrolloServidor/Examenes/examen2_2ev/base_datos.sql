drop database if exists PGAULA;
CREATE DATABASE PGAULA DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci; 
USE PGAULA;

CREATE TABLE actividades (
  idact smallint  NOT NULL auto_increment,
  descripcion varchar(200),
  nhoras tinyint NOT NULL default 0,
  importancia tinyint unsigned default NULL,
  fechaini date default '2022-09-09',
  fechafin date default '2022-09-10',
  PRIMARY KEY  (idact)
) engine=InnoDB AUTO_INCREMENT=6 ;


INSERT INTO actividades VALUES (1, 'Representación de números complejos', 2, 1, '2022-09-09', '2022-09-10');
INSERT INTO actividades VALUES (2, 'Cálculo de figuras polinómicas con números', 2, 2, '2022-09-09', '2022-09-10');
INSERT INTO actividades VALUES (3, 'Ordenar números naturales en la recta real. Observar que puede haber números no naturales reflejados en la recta...', 2, 4, '2022-09-09', '2022-09-10');
INSERT INTO actividades VALUES (4, 'Sumar números naturales', 2, 4, '2022-09-09', '2022-09-10');
INSERT INTO actividades VALUES (5, 'Multiplicar números naturales', 2, 4, '2022-09-09', '2022-09-10');


-- Estructura de tabla para la tabla `profesores`
-- 

CREATE TABLE profesores (
  idpro smallint NOT NULL auto_increment,
  nombre varchar(25) NOT NULL,
  apll1 varchar(35) NOT NULL default '',
  apll2 varchar(35) NOT NULL default '',
  sexo enum('H','M') NOT NULL,
  pass varchar(10) NOT NULL default '',
  ies varchar(50) NOT NULL default ' ',
  PRIMARY KEY  (idpro)
) AUTO_INCREMENT=121 ;

-- 
-- Volcar la base de datos para la tabla `profesores`
-- 

INSERT INTO profesores VALUES (00000001, 'Mª Eugenia', 'Postigo', 'Canto', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000002, 'Guillermo', 'Cárdenas', 'Lagos', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000003, 'Francisco Javier', 'Cuevas', 'Alconchel', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000004, 'Víctor', 'Benítez', 'Serna', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000005, 'Sonia', 'Díaz', 'Serna', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000006, 'Francisco', 'Troncoso', 'Cordero', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000007, 'Luis', 'Martínez', 'Mena', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000008, 'Asier', 'García', 'Cornejo', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000009, 'Milagros', 'Suaga', 'Salado', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000010, 'José Fernando', 'De La Cerda', 'Osado', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000011, 'Inmaculada', 'Alemán', 'Guillén', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000012, 'Silvia', 'Díaz', 'Escobar', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000013, 'Verónica', 'Montes De Oca', 'Ardila', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000014, 'Egoitz', 'Carrasco', 'Ruiz', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000015, 'Andrea', 'Lobato', 'Holgado', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000016, 'José Antonio', 'Pujazón', 'Benicio', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000017, 'Milagros', 'Herrera', 'Hernández', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000018, 'Mª Eugenia', 'Pérez', 'Postigo', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000019, 'Marcos', 'Calderón', 'Pérez', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000020, 'José Antonio', 'Romano', 'Martínez', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000021, 'Sara', 'Gálvez', 'Arriaza', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000022, 'Andoni', 'Romero', 'Gago', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000023, 'Aida', 'Ruiz', 'Carvajal', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000024, 'Arantxa', 'Lara', 'Rendón', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000025, 'Mª Cortes', 'Galvín', 'Santos', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000026, 'Francisco Javier', 'Magro', 'Ortega', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000027, 'Arancha', 'Moya', 'Santos', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000028, 'Sonia', 'Ramírez', 'Ponce', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000029, 'José Antonio', 'Hurtado', 'Velazquez', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000030, 'Yamile Milena', 'Salado', 'Pina', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000031, 'Omayra', 'Lucena', 'Rendón', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000032, 'Joaquin', 'Molina', 'Gómez', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000033, 'Cristina', 'Muñoz', 'Cea', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000034, 'Ionela', 'Ramírez', 'Kadimi', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000035, 'Silvia', 'Loreto', 'Vega', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000036, 'Salvador', 'Becerra', 'Ramírez', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000037, 'Esther', 'Veneroso', 'Peña', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000038, 'Enrique', 'Delgado', 'Zuasti', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000039, 'Jennifer', 'Molina', 'Dueñas', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000040, 'Rocio', 'Borrás', 'Salado', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000041, 'Miguel Ángel', 'Ferral', 'Guerrero', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000042, 'Javier', 'Gálvez', 'Carpio', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000043, 'Lorena', 'Rendón', 'Saborido', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000044, 'Irina', 'Pujazón', 'Ordóñez', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000045, 'Miguel', 'Reina', 'Gago', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000046, 'Jenifer', 'Ardila', 'Blanco', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000047, 'Virginia', 'Becerra', 'Morato', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000048, 'Francisco', 'Agudo', 'Castellano', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000049, 'Álvaro', 'Gandolfo', 'Lagos', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000050, 'Ignacio', 'Fernández', 'Ponce', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000051, 'Vanesa', 'Guzmán', 'Moya', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000052, 'José Fernando', 'Ríos', 'Hierro', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000053, 'Ester', 'Andrades', 'Salado', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000054, 'Augusto', 'Carvajal', 'Bernabé', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000055, 'Gema Mª', 'Serna', 'Sánchez', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000056, 'Francisco', 'Cintado', 'Guerrero', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000057, 'Carlos', 'Rayo', 'Herrera', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000058, 'Víctor', 'Muñoz', 'Carpio', 'H', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000059, 'Covadonga', 'Herrera', 'Ferral', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000060, 'Isabel', 'Cornejo', 'Borrás', 'M', 'aaaaaa', 'IES Domenico Scarlatti');
INSERT INTO profesores VALUES (00000061, 'María José', 'Montes De Oca', 'De La Cerda', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000062, 'Álvaro', 'Pérez', 'Zapata', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000063, 'María José', 'Bernabé', 'Alba', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000064, 'Miguel', 'Rubio', 'Leyton', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000065, 'Manuel', 'Martínez', 'Díaz', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000066, 'Francisco Javier', 'García', 'Kadimi', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000067, 'José Fernando', 'Romero', 'Salas', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000068, 'Carmen María', 'Arellano', 'Morales', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000069, 'Rebeca', 'Mesa', 'Linares', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000070, 'Milagros', 'Molina', 'Pimentel', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000071, 'Nuria Esther', 'Núñez', 'Zapata', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000072, 'Antonio', 'Rosillo', 'Jiménez', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000073, 'Sergio', 'Postigo', 'Zuasti', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000074, 'Enrique', 'Hurtado', 'Ordóñez', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000075, 'Mª Dolores', 'Medina', 'Enríquez', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000076, 'Ismael', 'Cordero', 'Arellano', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000077, 'Sara', 'Zambrano', 'Muñoz', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000078, 'Miguel', 'Serna', 'Frías', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000079, 'Adrián', 'Mesa', 'Romano', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000080, 'Gabriel', 'Cea', 'Ferral', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000081, 'Luis', 'Dueñas', 'Magro', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000082, 'Marcos', 'Valero', 'Piñero', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000083, 'Carlos', 'Pina', 'Martínez', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000084, 'Mª Ángeles', 'Rebolo', 'Ferral', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000085, 'Patricia', 'Palomino', 'Ordóñez', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000086, 'Marcos', 'Lucena', 'Rosillo', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000087, 'Aitor', 'Vega', 'Marín', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000088, 'Nerea', 'Vila', 'Ardila', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000089, 'Augusto', 'Casado', 'Alemán', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000090, 'Juan Francisco', 'Ramírez', 'Ordóñez', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000091, 'Esther', 'Cornejo', 'Quevedo', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000092, 'Javier', 'Pimentel', 'Jiménez', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000093, 'Antonio', 'Rendón', 'Manday', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000094, 'Omayra', 'Martín', 'Cea', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000095, 'Lorena', 'Morales', 'Caro', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000096, 'Javier', 'Bellido', 'Montes De Oca', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000097, 'Aitor', 'Lagos', 'Flores', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000098, 'Aitor', 'Agudo', 'Jiménez', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000099, 'Alicia', 'Bueno', 'Rendón', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000100, 'Cristian', 'Andrades', 'León', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000101, 'Cristina', 'Dominguez', 'Ferral', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000102, 'Mª Isabel', 'Zuasti', 'Infante', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000103, 'Javier', 'Peña', 'Moya', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000104, 'Inmaculada', 'Martín', 'Blanco', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000105, 'Emilia', 'Cárdenas', 'López', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000106, 'Isabel', 'Márquez', 'Caro', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000107, 'Juan', 'Garrido', 'Pimentel', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000108, 'Julio', 'Peralta', 'Guerra', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000109, 'Rosa Mª', 'Cabrera', 'Zambrano', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000110, 'Carmen María', 'Pujazón', 'Martos', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000111, 'Sebastián', 'Canto', 'Algeciras', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000112, 'Carlos', 'Herráiz', 'Herráiz', 'H', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000113, 'Rebeca', 'Castellano', 'Mesa', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000114, 'Aida', 'López', 'Piñero', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000115, 'Ana Isabel', 'Alpresa', 'Linares', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000116, 'Mª Cortes', 'Ramírez', 'Carvajal', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000117, 'Cristian', 'Galvín', 'Jiménez', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000118, 'Nuria Esther', 'Suaga', 'Martos', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000119, 'Ainoa', 'Agudo', 'Cuevas', 'M', 'aaaaaa', 'IES ALPAJÉS');
INSERT INTO profesores VALUES (00000120, 'Carlos', 'Osorio', 'Naranjo', 'H', 'aaaaaa', 'IES ALPAJÉS');

-- Estructura de tabla para la tabla ud
-- 

CREATE TABLE ud (
  idud smallint NOT NULL auto_increment,
  titulo varchar(200) NOT NULL default 'Sin título',
  clase varchar(30) NOT NULL,
  idpro smallint NOT NULL,
  area varchar(30) NOT NULL,
  nhoras tinyint NOT NULL default 0,
  fechaini date default '2022-09-09',
  fechafin date default '2022-09-10',
  PRIMARY KEY  (idud),
  CONSTRAINT fk_up1 FOREIGN KEY (idpro) REFERENCES profesores (idpro) ON DELETE CASCADE ON UPDATE CASCADE
) AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `ud`
-- 

INSERT INTO ud VALUES (1, 'Números Naturales', 'ESO1', 1, 'Matemáticas', 10, '2022-09-09', '2022-09-10');
INSERT INTO ud VALUES (2, 'Números fraccionarios', 'ESO1', 1, 'Matemáticas', 14, '2022-10-11', '2022-11-11');
INSERT INTO ud VALUES (3, 'Números complejos', 'ESO1', 1, 'Matemáticas', 24, '2022-11-12', '2022-12-20');

-- 

-- 
-- Estructura de tabla para la tabla distribución
-- 
CREATE TABLE distribucion (
	idact smallint  NOT NULL,
	idud smallint NOT NULL,
	anno year default NULL,
	PRIMARY KEY (idact,idud),
	CONSTRAINT fk_du1 FOREIGN KEY (idud) REFERENCES ud(idud) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT fk_da1 FOREIGN KEY (idact) REFERENCES actividades(idact) ON DELETE CASCADE ON UPDATE CASCADE
)AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `distribucion`
-- 

INSERT INTO distribucion VALUES (1, 1, 2022);
INSERT INTO distribucion VALUES (2, 1, 2022);
INSERT INTO distribucion VALUES (3, 1, 2022);
INSERT INTO distribucion VALUES (4, 1, 2022);
INSERT INTO distribucion VALUES (5, 1, 2022);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `temporizacion`
-- 

CREATE TABLE temporizacion (
  idtmp smallint NOT NULL auto_increment,
  clase varchar(30) NOT NULL,
  area varchar(30) NOT NULL,
  diasemana varchar(5) NOT NULL default '11111',
  anno year(4) default NULL,
  horario varchar(400),
  PRIMARY KEY  (idtmp)
) AUTO_INCREMENT=13;

-- 
-- Volcar la base de datos para la tabla `temporizacion`
-- 

INSERT INTO temporizacion VALUES (00008, 'ESO1', 'Matemáticas', '10111', 2020, '10111101111011110111101111011110111101111011110001101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111');
INSERT INTO temporizacion VALUES (00009, 'ESO2', 'Lengua','10111', 2020, '10111101111011110111101111011110111101111011110001101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111');
INSERT INTO temporizacion VALUES (00010, 'ESO3', 'Inglés', '10111', 2020, '10111101111011110111101111011110111101111011110001101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111');
INSERT INTO temporizacion VALUES (00011, 'ESO4', 'Inglés','10111', 2020, '10111101111011110111101111011110111101111011110001101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111');
INSERT INTO temporizacion VALUES (00012, 'DAW1','BD', '10111', 2020, '10111101111011110111101111011110111101111011110001101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111101111011110111');