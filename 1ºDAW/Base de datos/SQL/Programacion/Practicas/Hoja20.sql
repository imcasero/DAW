use practicas;
create table profesores(
	nombre varchar(250) primary key,
    especialidad varchar(250)
);
create table tutores(
	nombre varchar(250) primary key,
    constraint fk_tp foreign key (nombre) references profesores(nombre)
);
insert into tutores values('Juan Carlos');/*1452*/
create table error_log(
	e varchar(255),
    fecha datetime
);
delimiter |
create procedure insertaTutores(in nombreTutores varchar(10))
begin
declare exit handler for 1452 select 'El tutor no es profesor';
insert into tutores value(nombreTutores);
end |
delimiter ;