use practicas;
select count(apellido) from emple where apellido like 'a%';
select AVG(salario), count(comision is not null), max(salario) , min(salario ) from emple where dept_no=30;
select count(emp_no) from emple group by dept_no ;
select dept_no from emple where (count(dept_no) > 2);
select count(distinct dept_no ) from emple;
select count(distinct dept_no is not null) from emple;
select count(emp_no) from emple where oficio='analista';
select max(salario) , min(salario) from emple where oficio not in ('analista') group by dept_no; 
select cod from asignaturas where count(alumnos) > 2;