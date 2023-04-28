create database pruebas;
use pruebas;
create table error_log(
	error varchar(100)
);
create table Profesores(
	nombre varchar(10) primary key,
    epecialidad varchar(50)
);
create table Tutores(
	Nombre varchar(10) primary key,
    constraint fk_pp foreign key (Nombre) references Profesores(Nombre)
);
insert into tutores values('Juan');

delimiter |
drop procedure insertTutores;
create procedure insertTutores (in nombreT varchar(50))
begin
	declare exit handler for 1452 
		begin
			select 'El tutor no existe';
            insert into error_log select concat('El tutor ',nombreT, ' no existe en profesorres');
		end ;
    insert into tutores value(NombreT);
end |
delimiter ;
call insertTutores('Maria');