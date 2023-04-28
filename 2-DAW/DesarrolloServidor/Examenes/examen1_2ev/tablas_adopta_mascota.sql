drop database if exists ADOPTA_MASCOTA;
CREATE DATABASE ADOPTA_MASCOTA DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci; 
USE ADOPTA_MASCOTA;


CREATE TABLE usuarios(
   email VARCHAR(40) PRIMARY KEY,
   pwd VARCHAR(50) NOT NULL,
   nombre VARCHAR(50) NOT NULL,
   direccion VARCHAR(100) NOT NULL,
   localidad VARCHAR(50)
) engine=innodb;

insert into usuarios values ('dani@domenico.es','dani','MARTINEZ DANIEL','valeras 22','aranjuez');
insert into usuarios values ('albert@domenico.es','alber','GÓMEZ ALBERTO','capitán, 24','aranjuez');
insert into usuarios values ('carol@domenico.es','carol','SÁNCHEZ CAROLINA','valeras 98','aranjuez');
insert into usuarios values ('maria@domenico.es','maria','GIJÓN MARÍA','la paloma 10','ciempozuelos');
insert into usuarios values ('sole@domenico.es','sole','ESTEBAN SOLEDAD','garcía lorca 14','chinchón');
insert into usuarios values ('peter@domenico.es','peter','AGUADO PEDRO','capitán 125','chinchón');
insert into usuarios values ('manu@domenico.es','manu','ÁLVAREZ MANUEL','atocha 230','ciempozuelos');
insert into usuarios values ('toni@domenico.es','toni','CÓRDOBA MARIO','serrano 120','aranjuez');

CREATE TABLE animales(
   nombre VARCHAR(40) PRIMARY KEY,
   edad tinyint,
   sexo enum('M','H'),
   especie varchar(30),
   raza varchar(30),
   peso decimal(4,2),
   estado enum('En adopción','Urgente','Adoptado'),
   vacunado boolean,
   desparasitado boolean,
   esterilizado boolean,
   microchip boolean,
   foto varchar(50)
) engine=innodb;

insert into animales values ('Nemo',null,'M','Pez','Guppy',null,'Adoptado',null,null,null,null,null);
insert into animales values ('Naia',1,'H','Perro','Caniche',0.5,'Adoptado',true,false,true,true,null);
insert into animales values ('Toby',1,'M','Perro','Bulldog inglés',2,'Adoptado',true,false,true,true,null);
insert into animales values ('Snoopy',1,'M','Perro','Caniche',2.5,'En Adopción',true,false,true,true,null);
insert into animales values ('Mishi',2,'H','Gato','Siamés',1.5,'En Adopción',true,false,true,true,null);
insert into animales values ('Beethoven',1,'M','Perro','Bulldog inglés',2,'En Adopción',true,false,true,true,null);
insert into animales values ('Luna',0.5,'H','Gato','Siamés',0.5,'En Adopción',true,false,true,true,null);
insert into animales values ('Pluto',1,'M','Perro','Bulldog inglés',2,'En Adopción',true,false,true,true,null);
insert into animales values ('Niebla',1,'H','Perro','Bulldog inglés',2,'En Adopción',true,false,true,true,null);
insert into animales values ('Rufo',1,'M','Perro','Bulldog inglés',2,'En Adopción',true,false,true,true,null);


CREATE TABLE adopciones(
   usuario VARCHAR(40),
   mascota VARCHAR(40),
   fecha DATE,
   constraint fk_au FOREIGN KEY (usuario) REFERENCES usuarios(email),
   CONSTRAINT fk_aa FOREIGN KEY (mascota) REFERENCES animales(nombre)
) engine=innodb;
	
    insert into adopciones values ('dani@domenico.es','Nemo','2023/01/14');
    insert into adopciones values ('dani@domenico.es', 'Naia','2023/01/24');
    insert into adopciones values ('peter@domenico.es', 'Toby','2022/02/14');

CREATE TABLE rasgos(
   id tinyint auto_increment primary key,
   descripcion VARCHAR(40)
)engine=innodb
auto_increment=1;
   
insert into rasgos values (null,'Bueno con gatos'); 			# 1
insert into rasgos values (null,'Cauteloso con extraños');		# 2
insert into rasgos values (null,'Bueno en casa');				# 3
insert into rasgos values (null,'A veces ladro');				# 4
insert into rasgos values (null,'A veces maullo');				# 5
insert into rasgos values (null,'Escapista');					# 6
insert into rasgos values (null,'Juguetón');					# 7
insert into rasgos values (null,'Dormilón');					# 8
insert into rasgos values (null,'Sedentario');					# 9
insert into rasgos values (null,'Agresivo con extranos');		# 10
insert into rasgos values (null,'Bueno con perros');			# 11
insert into rasgos values (null,'Bueno con niños');				# 12

	
CREATE TABLE personalidad_mascota(
   nombre VARCHAR(40),
   rasgo tinyint,
   PRIMARY KEY (nombre,rasgo),
   CONSTRAINT fk_pma FOREIGN KEY (nombre) REFERENCES animales(nombre),
   CONSTRAINT fk_pmr FOREIGN KEY (rasgo) REFERENCES rasgos(id)
)engine=innodb
auto_increment=1;	

insert into personalidad_mascota values ('Snoopy',3); 
insert into personalidad_mascota values ('Snoopy',7); 
insert into personalidad_mascota values ('Snoopy',11); 
insert into personalidad_mascota values ('Beethoven',6); 
insert into personalidad_mascota values ('Beethoven',7); 
insert into personalidad_mascota values ('Beethoven',11); 
insert into personalidad_mascota values ('Pluto',3); 
insert into personalidad_mascota values ('Pluto',7); 
insert into personalidad_mascota values ('Pluto',12); 
insert into personalidad_mascota values ('Rufo',10); 
insert into personalidad_mascota values ('Rufo',11); 

#drop table preferencias;
CREATE TABLE preferencias(
   email VARCHAR(40),
   rasgo tinyint,
   orden tinyint,
   primary key (email,rasgo),
   CONSTRAINT fk_pu FOREIGN KEY (email) REFERENCES usuarios(email),
   CONSTRAINT fk_pr FOREIGN KEY (rasgo) REFERENCES rasgos(id)
)engine=innodb;

insert into preferencias values ('dani@domenico.es',11,1); 		# Dani quiere adoptar un perro  con preferencias 11 3 7 12
insert into preferencias values ('dani@domenico.es',3,2);
insert into preferencias values ('dani@domenico.es',7,3);
insert into preferencias values ('dani@domenico.es',12,4);
insert into preferencias values ('carol@domenico.es',1,1);  	# Carol quiere adoptar un gato
insert into preferencias values ('carol@domenico.es',12,2);
insert into preferencias values ('peter@domenico.es',11,1); 	# Peter quiere adoptar un perro
insert into preferencias values ('peter@domenico.es',8,2);
insert into preferencias values ('maria@domenico.es',10,1);		# María quiere adoptar un perro
insert into preferencias values ('maria@domenico.es',12,2);


