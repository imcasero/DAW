use practicas;
drop table profesores;
#1
create table profesores (
idProfesor varchar(3) primary key,
nombre varchar (20),
mail varchar (20))
engine innodb;

create table faltasProfesores (
idProfesor varchar (3), 
fecha date, 
hora time,
primary key(idProfesor, fecha, hora)
)
engine Innodb;
drop table mensajes;

create table mensajes (
idMensaje int auto_increment primary key,
nombre varchar(20), 
mailDestino varchar(20),
texto varchar (50),
enviado boolean default false
)
engine innodb;

INSERT INTO profesores values ('A01', 'Paco', 'paco@mysql.com');
INSERT INTO profesores values ('A02', 'Juan', 'juan@mysql.com');
INSERT INTO profesores values ('A03', 'Pepe', 'pepe@mysql.com');

delimiter |
CREATE TRIGGER enviarMensaje AFTER INSERT ON faltasprofesores
FOR EACH ROW BEGIN
	DECLARE nombreProfe varchar(20);
	DECLARE correo varchar(20);
	declare nuevomensaje varchar(100);
    
	SELECT nombre, mail FROM profesores WHERE idprofesor LIKE NEW.idProfesor 
    into nombreProfe, correo;
    set nuevomensaje = concat ('El profesor ' , nombreprofe ,' ha faltado el dia ', new.fecha , ' a las ' ,new.hora);
    insert into mensajes values (null, nombreProfe, correo, 'falta profesor', true);

END|
delimiter ;

INSERT INTO faltasProfesores values ('A01' , current_date(), current_time());

#2
 use practicas;
 create table auditaremple(-- tabla de monitorizacion
	mensaje varchar(200)
 );
 delimiter |
 create trigger auditaInser after insert on emple
 for each row
 begin
	insert into auditaremple select concat(new.emp_no , ' ' , new.apellido, ' ' , current_date() , ' ' , current_time() , ' ' , 'insercion');
 end |
 delimiter ;
 insert into emple(emp_no ,apellido, oficio , dir , fecha_alt , salario , comision , dept_no) values('2025' ,'perez', 'analista' , 7839 , current_date() , 200000 , 2000 , 30);
 
 
