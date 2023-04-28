use practicas;
create table notas(
	idAlumno tinyint primary key,
    curso tinyint ,
    nota1 dec(2,2),
    nota2 dec(2,2),
    nota3 dec(2,2),
    final dec(2,2)
);
delimiter |
create procedure calculaNota(in idAlumno tinyint)
begin
set @id = idAlumno;
	update notas set final = (((select nota1 from notas where idAlumno like @id)+
		(select nota2 from notas where idAlumno like @id)+
        (select nota3 from notas where idAlumno like @id))/3)
			where idAlumno like @id;
end |
delimiter ;
create table empleados(
	idEmpleado tinyint auto_increment primary key,
    nombre varchar(50)
);
create table registros(
	idRegistro tinyint auto_increment primary key,
    fecha date,
    hora datetime,
    idEmpleado tinyint,
    
    constraint fk_ee foreign key (idEmpleado) references empleados(idEmpleado)
);
delimiter |
create procedure darAlta(inout idEmpleado1 tinyint)
begin
end |
delimiter ;
