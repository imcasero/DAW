#1
use practicas;
#2 
select dept_no, avg(salario) from emple 
	group by dept_no having AVG(salario) >= (select avg(salario) from emple) ;
#3
select count(*) from emple 
	where dept_no = (select dept_no from depart 
					where dnombre like 'ventas')
	and oficio like 'vendedor';
#4 
select sum(salario) as SumaSalario, oficio from emple 
	where dept_no = (select dept_no from depart 
					where dnombre like 'ventas') 
	group by oficio;
#5 ?? correlazionada , no entra
select Apellido from emple 
	having avg(salario) = all(select salario from emple);
#6 no hace falta subconsulta
select count(*) as numeroEmpleados, dept_no from emple 
	where oficio like 'empleado' group by dept_no;
#7 para maximos
select count(*) as numeroEmpleados, dept_no from emple 
	where oficio like 'empleado' group by dept_no having count(*) = (select count(*) from emple 
																		where oficio like 'empleado' group by dept_no order by count(*) DESC limit 1);
#8 no se ni por donde empezar
select dnombre, dept_no from depart 
	where dept_no in 
		(select dept_no from emple where oficio like 'empleado' group by dept_no 
			having count(*) = (select count(*) from emple 
				where oficio like 'empleado' group by dept_no order by count(*) desc limit 1));
#9 no idea too
select dept_no from depart 
	where dept_no like 
		(select dept_no from emple 
		group by dept_no, oficio having count(*)>2);
#10 no tengo ni idea
select dept_no from emple
	where (select Dnombre from depart where (select count(*) from emple) > 4)>4 ;
#11
select dept_no , dnombre , count(*) from emple;
#12
use practicas;
#13
select sum(ejemplares) as SumaEjemplares from libreria 
	group by estante;
#14
select sum(ejemplares) as mayorestante from libreria
	group by estante order by sum(emeplares)asc limit 1;
#15 no idea
select nombre from alum
	where (select nombre from antiguos) or (select nombre from nuevos);
#16 no se hacer este tipo

#17 que?

#18
select estante from libreria
	order by estante asc;
#19
select count(tema) from libreria 
	group by estante;
#20 no idea
