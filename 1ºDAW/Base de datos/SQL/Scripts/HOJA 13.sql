use practicas;
-- 1 --
insert into alum select * from nuevos;
set autocommit=on;

select * from alum;
select * from nuevos;
-- 2 --
delete from alum
where(nombre , edad , localidad) in (select nombre , edad , localidad from antiguos);
-- 3 -- Insertar un empleado de apellido ‘SAAVEDRA’ con número 2000. La fecha de alta será la actual, el SALARIO será el mismo salario del empleado ’SALA’ más el 20 por
-- ciento y el resto de datos serán los mismos que los datos de ‘SALA’.

insert into emple
select 2000 , 'SAAVEDRA' , OFICIO , DIR , current_date() ,SALARIO , COMISION ,DEPT_NO
from emple where apellido like '%Sala%';
select current_date();

-- 4 -- Modificar el número de departamento de ‘SAAVEDRA’. El nueio departamento será el departamento donde hay más empleados cuyo oficio sea ‘EMPLEADO’.

select dept_no from emple
	where oficio like 'Empleado' group by dept_no having count(*) = (select count(*) from emple
																			where oficio like 'Empleado'  group by dept_no order by count(*) desc limit 1);
                                                                            
																
Create table emple2 select * from emple;
update emple 
set dept_no = (select dept_no from emple2
					where oficio like 'Empleado' group by dept_no having count(*) = (select count(*) from emple2
																			where oficio like 'Empleado'  group by dept_no order by count(*) desc limit 1))
where apellido like '%SAAVEDRA%';

-- 5 --
delete from depart 
	where dept_no not in(select distinct dept_no from emple);

-- 6 --
delete from centros
	where  cod_centro not in(select distinct cod_centro from personal);

-- 7 --
-- 8 --Añadir un nueio profesor con DNI 8790055 y de nombre ‘Clara Salas’ en el centro o en los centros cuyo número de administratios sea 1 en la especialidad de
-- ‘IDIOMA’
insert into profesores 
select cod_centro, '8790055' ,'Salas Clara' , 'IDIOMA' 
from personal
where funcion like 'administrativo'
group by cod_centro
having count(*)=1;



SELECT COD_CENTRO, COUNT(*) FROM PERSONAL
WHERE FUNCION LIKE 'administrativo'
group by cod_centro
having count(*)=1;