use practicas;
select * from libreria where TEMA='labores';
select apellido  from emple where DEPT_NO IN (10,30)  order by APELLIDO ASC; 
select apellido  from emple where dept_no NOT IN (10,30) order by apellido asc; 
select apellido  from emple where  oficio IN ('vendedor','analista','empleado') order by apellido asc;
select apellido  from emple where  oficio NOT IN ('vendedor','analista','empleado') order by apellido asc;
select apellido , salario from emple where salario between 150000 and 200000 ; 
select apellido , salario from emple where salario not between 150000 and 200000;
select apellido , salario , dept_no from emple where salario > 200000 and (dept_no IN (10,20));
select dni , nombre , apellido , curso , nivel , clase from alum0405 order by nombre asc ,Apellido asc; #ALUM0405
select AVG(salario) from emple where dept_no=10;
select count(*) from emple;
select count(comision) from emple;
select count(*) from emple where comision is not null;
select max(salario) from emple;
select max(apellido) from emple;
select sum(salario) from emple;
select avg(salario) from emple;
select count(distinct oficio) from emple; #distinct diferentes (no cuneta repetidos) 
