use practicas;
select * from emple;
select * from depart;
select * from emple where DEPT_NO=20 order by APELLIDO ASC;
create table ALUM0405(
	dni varchar(10) primary key,
    nombre varchar(15) NOT NULL,
    apellidos varchar(20) NOT NULL,
    fecha_nac date,
    direccion varchar(20) NOT NULL,
    polacion varchar(20),
    provincia varchar(20),
    curso integer(1) NOT NULL,
    nivel varchar(3) NOT NULL,
    clase char(2),
    faltas1 integer(2) DEFAULT 0,
    faltas2 integer(2) DEFAULT 0,
    faltas3 integer(2) DEFAULT 0
);