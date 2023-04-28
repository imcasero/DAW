use practicas;
#1
select count(*) from emple 
	where apellido like 'A%';
#2
select AVG(Salario) as mediasalario, max(salario) as maximosalario, min(salario) as minimosalario, count(comision) as numerocomision from emple 
	where dept_no = 30;
#3
select count(emp_no),dept_no from emple 
	where oficio like 'Empleado' group by dept_no;
#4 por pasos
	#1 cuantos empleados hay en cada oficio y en cada departamento
	Select count(*),dept_no,oficio from emple 
		group by dept_no,oficio having count(*) >2 order by dept_no;
#5
select count(distinct dept_no) as departamentos from depart;
#6
select count(distinct dept_no) as departamentos from emple;
#7
select count(*) from emple 
	where oficio like 'analista' and dept_no = 10;
#8
select oficio, max(salario) as SalarioMax ,min(salario) as SalarioMin from emple
	where oficio not like 'Analista' group by oficio;
#9 sobre que tabla ??? having para consultas resumidas dentro
select cod, count(*) from notas 
	group by cod having count(*) > 1;
#10
select DNI from notas
	where nota >= 5;
#11
select count(*) from notas
	where nota >= 5 group by COD;
#12
select count(*) from notas 
	where nota between 5 and 7;
#13
select avg(nota) from notas
	group by COD;
#14 subconsulta?
select count(*),cod from notas 
	group by cod having count(*) = 1;
