/*HOJA 22 CON CURSORES*/
use practicas;
drop table notas2;
create table notas2(
	idAlumno tinyint primary key,
    curso tinyint ,
    nota1 dec(4,2) not null,
    nota2 dec(4,2) not null,
    nota3 dec(4,2) not null,
    final dec(4,2) 
);
insert into notas2 values(1 ,2,7 ,3 ,8 , null);
insert into notas2 values(2 ,2,2 ,3 ,10, null);
insert into notas2 values(3 ,1,2 ,8 ,4, null);
insert into notas2 values(4 ,1,2 ,3 ,2, null);

delimiter |
create procedure calculaNota(in idAlumno tinyint)
begin
set id = idAlumno;
	update notas set final = (((select nota1 from notas where idAlumno like id)+
		(select nota2 from notas where idAlumno like id)+
        (select nota3 from notas where idAlumno like id))/3)
			where idAlumno like id;
end |
delimiter ;

-- SOLUCION CLASE --------------------------------------------------------------------------------------

delimiter |
create procedure calcMedia (in cur tinyint)
begin
	declare id tinyint;
	declare n1,n2,n3 decimal(4,2);
    declare terminado tinyint default 0;
    declare micursor cursor for select idAlumno,nota1,nota3,nota3 from notas2 where curso like cur;
    declare continue handler for not found set  terminado=1;
    
    open micursor;
    mibucle: loop 
		fetch micursor into id,n1,n2,n3;
        if (terminado=1) then leave mibucle; 
        end if;
        update notas2 set final=((n1+n2+n3)/3) where idalumno = id;
        select concat('La nota media de ',id,' es :',final) as media from notas2 where idalumno like id;
    end loop mibucle;
    close micursor;
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
create table empleados(
	idEmpleado tinyint auto_increment primary key,
    nombre varchar(50)
);
create table registros(
	idRegistro tinyint auto_increment primary key,
    fecha date,
    hora time,
    idEmpleado tinyint,
    
    constraint fk_ee foreign key (idEmpleado) references empleados(idEmpleado)
);
insert into practicas.empleados values(null , 'Juan');
insert into practicas.empleados values(null , 'Juana');
insert into practicas.empleados values(null , 'Jose');
insert into practicas.empleados values(null , 'Pepe');
delimiter |
create procedure insRegistro (in id tinyint , out mensaje varchar(255))
begin
declare numregistro tinyint default 0;
	if exists (select * from empleados where idempleado = id) then
		select count(*) from registros where idempleado = id and fecha like current_date() into numregistros;
        if (numregistros%2 = 0) then
			set mensaje = 'Entrada';
            else
				set mensaje = 'Salida';
		end if
    else
		select concat('El empleado no existe') as error;
	end if
end
delimiter ;