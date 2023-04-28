use practicas;
use practicas;
drop table profesores2;
#1
create table profesores2 (
idProfesor varchar(3) primary key,
nombre varchar (20),
mail varchar (20)
)engine innodb;
create table faltasProfesores (
idProfesor varchar (3), 
fecha date, 
hora time,
primary key(idProfesor, fecha, hora)
)engine Innodb;
drop table mensajes;
create table mensajes (
idMensaje int auto_increment primary key,
nombre varchar(20), 
mailDestino varchar(20),
texto varchar (50),
enviado boolean default false
)engine innodb;
INSERT INTO profesores2 values ('A01', 'Paco', 'paco@mysql.com');
INSERT INTO profesores2 values ('A02', 'Juan', 'juan@mysql.com');
INSERT INTO profesores2 values ('A03', 'Pepe', 'pepe@mysql.com');
delimiter |
create trigger mens after insert on faltasProfesores
for each row begin
declare n varchar(20);
declare m varchar(20);
select mail from profesores2 where idprofesor like new.idprofesor into m;
select nombre from profesores2 where idprofesor like new.idprofesor into n;
	insert into mensajes values(null , n , m , 'falta de asistencia' , true); 
end |
delimiter ;
insert into faltasProfesores values('A01' , current_date()  , current_time());

create table auditaremple(
	audit varchar(200)
);
-- inserccion
insert into emple(emp_no ,apellido, oficio , dir , fecha_alt , salario , comision , dept_no) 
values('2025' ,'perez', 'analista' , 7839 , current_date() , 200000 , 2000 , 30);
drop trigger inseremple;
delimiter |
create trigger inseremple after insert on emple
for each row begin
	declare tex varchar(200);
	select concat
(current_date() , ' ' , current_time(), 
	' ' , new.emp_no , ' ' ,new.apellido , ' ') into tex;
	insert into auditaremple values(tex);
end |
delimiter ;
-- update
delimiter |
create trigger updaemple after update on emple
for each row begin
	/*un if por cada campo , un if exist y concatenar una cadena que ya existe
    asi iriamos introduciendo los datos que hemos cambiado si es que se han cambiado*/
    declare m varchar(200);
    set m = concat(old.empt_no , ' ' , current_date(), ' ', current_time(), ' ', 'MODIFICACION');
    if new.emp_no is not null then
		set cadena = (cadena , ' ' , new.emp_no);
    end if;
    if new.apellido is not null then
		set cadena = (cadena , ' ' , new.apellido);
    end if;
    if new.oficio is not null then
		set cadena = (cadena , ' ' , new.oficio);
    end if;
    if new.dir is not null then
		set cadena = (cadena , ' ' , new.dir);
    end if;
    if new.fecha_alt is not null then
		set cadena = (cadena , ' ' , new.fecha_alt);
    end if;
    if new.salario is not null then
		set cadena = (cadena , ' ' , new.salario);
    end if;
    if new.comision is not null then
		set cadena = (cadena , ' ' , new.comision);
    end if;
    if new.dept_no is not null then
		set cadena = (cadena , ' ' , new.dept_no);
    end if;
end |
delimiter ;
-- borrado
delimiter |
create trigger deletemple after delete on emple
for each row begin
	
end
delimiter ;