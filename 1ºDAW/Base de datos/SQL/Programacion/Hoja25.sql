use practicas;
select sum(salario) , dept_no from emple group by dept_no having dept_no = new.dept_no;
delimiter |
create trigger insertar10000 after insert on emple 
for each row begin
declare totalsalario int; 
select sum(salario) from emple group by dept_no having dept_no = new.dept_no into totalsalario;
	if totalsalario > 10000 then
		signal sqlstate '45000' 
        set message_text = 'El empleado introducido causaria superar el sueldo total de 1000 en el departamento' ;
    end if ;
end |
delimiter ;
delimiter |
create trigger insertar10000antes before insert on emple
for each row begin
declare totalsalario int;
select sum(salario) + new.salario from emple group by dept_no having dept_no = new.dept_no into totalsalario;
	if totalsalario > 10000 then
		signal sqlstate '45000' 
        set message_text = 'El empleado introducido causaria superar el sueldo total de 1000 en el departamento' ;
    end if ;
end |
delimiter ;
select sum(salario) from emple where dept_no=20;
insert into emple values (999 , 'Lopez' , 'Secreatrio' , 15 , current_date())
delimiter |
	create trigger modificaSalario before update on emple
    for each row begin
		declare salariototal int;
        select sum(salario) from emple where dept_no = new.dept_no into salariototal;
        set salariototal = salariototal - old.salario + new.salario;
        if salariototal > 2000000 then
			signal sqlstate '45000' set message_text = 'Se supera el limite';
        end if ;
    end |
delimiter ;
drop trigger insertar10000antes;
drop trigger insertar10000;
 insert into emple values(9980 , 'Lopez' , 'Analista', 7698 , current_date() , 10000 , 20000 , 30);
 delimiter |
	create trigger comproDept before insert on emple
    for each row begin
    declare dept_jefe int;
		select dept_no from emple where emp_no = new.dir into dept_jefe;
        if dept_jefe <> new.dept_no then
			signal sqlstate '45000' set message_text = 'No pertenecen al mismo departamente';
		end if ;
    end |
 delimiter ;
 drop procedure mostrar;
 delimiter |
 create procedure mostrar ()
 begin
	declare num int;
    declare fec date;
    declare com int;
    declare ap varchar(10);
	declare terminado tinyint default 0;
	declare micursor cursor for select emp_no , apellido ,fecha_alt , comision from emple;
    declare continue handler for not found set terminado = 1;
    open micursor;
		mibucle :loop
        fetch micursor into num , ap , fec , com;
        if(terminado = 1) then leave mibucle;
        end if;
        select concat('El numero de empleado es: ', num , ' y el apellido es: ', ap , 'la fecha de alta es: ' ,fec , 'la comision es de : ',com) as informacion;
        end loop mibucle;
    close micursor;
 end |
 delimiter ;
 call mostrar();
 drop procedure mostrardpt;
 delimiter |
 create procedure mostrardpt()
 begin
	declare dep varchar(14);
    declare num int;
    declare terminado tinyint default 0;
    declare micursor cursor for select depart.dnombre , count(emp_no) from emple inner join depart on emple.dept_no=depart.dept_no group by dnombre;
    declare continue handler for not found set terminado = 1;
    open micursor;
		mibucle :loop
			fetch micursor into dep , num;
            if (terminado=1) then leave mibucle;
            end if;
            select concat('El departamento ' , dep , ' tiene ', num , ' trabajadores.') as info;
        end loop mibucle;
    close micursor;
 end |
 delimiter ;
 call mostrardpt();
delimiter |
create procedure visualizacadena(in cadena varchar(30))
begin
declare apell varchar(30);
declare num smallint;
declare terminado tinyint default 0;
end |
delimiter ;
update emple set dept_no = 20 where emp_no = 7839;
delete from emple where emp_no = 7566;
insert into emple values(7566 , 'Jimenez' , 'director' , 7839 , current_date() , 20000 , null , 20);
use practicas;
drop trigger compDir;
delimiter |
create trigger compDir before delete on emple
for each row
begin
	declare terminado int default 0;
    declare d int;
    if (old.oficio like 'Director') then
        if (select count(*) from emple where dept_no = old.dept_no and oficio like 'Director' = 1) then
			select dept_no from emple where emp_no = old.dir into d;
            if (d <> old.dept_no) then
					signal sqlstate '45000' set message_text = 'no se puede realizar el delete';
            end if;
		end if;
    end if;
end |
delimiter ;