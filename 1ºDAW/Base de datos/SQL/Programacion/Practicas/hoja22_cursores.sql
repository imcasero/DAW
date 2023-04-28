use practicas;
drop table if exists notas2;
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
create procedure notasfinal (in c tinyint)
begin
	declare id tinyint;
	declare n1,n2,n3 decimal(4,2);
    declare terminado tinyint default 0;
    declare micursor cursor for select idAlumno,nota1,nota3,nota3 from notas2 where curso like c;
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
create table empleados (
	idEmpleado int auto_increment primary key,
    nombre varchar(50)
);
create table registros(
	idregistro int auto_increment primary key,
    fecha date,
    hora datetime,
    idempleado int,
    constraint fk_id foreign key (idempleado) references empleados(idEmpleado)
);
insert into empleados values(null , 'Jorge Perez Garcia');
insert into empleados values(null , 'Roberto Carlos Hernandez Alamillo');
insert into empleados values(null , 'Francisco Argona Luis');
delimiter |
create procedure insertarReg (in id int)
begin
	insert into registros values(null , current_date() , current_time() , id);
end |
delimiter ;