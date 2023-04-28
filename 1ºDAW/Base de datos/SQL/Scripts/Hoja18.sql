/*Hoja 18 Intento 2*/
use reparto_bares;
-- 1 --
insert into cervezas values(05 , 'Barril' , 70.000 , 100);
/*Forma con subconsultas*/
insert into reparto select codem ,codb , codc , current_date() , 10 from reparto
	where codem in(select codem from empleados where nombre like '%Valentin Siempre%')
		and codb in(select codb from bares where localidad like '%Villa Botijo%');

-- 2 --
 
insert into bares values (05 , 'diego' , '44444444-Z' , 'Ontigola');
/*Forma con subconsultas*/
insert into reparto select codem , 05, codc , current_date() , 200 from reparto 
	where codem in(select codem from empleados where nombre like '&Vicente Merario%')
		and codc in(select codc from cervezas where envase like '%Botella%');
-- 3 --
update cervezas set capacidad = 70 where envase like '%Barril%' and capacidad like 60;
-- 4 --
delete from bares where codb not in (select codb from reparto 
	where fecha > date_sub(current_date(), interval 1 year)) ;
-- 5 --
delete from cervezas where stock*0.1 < (select avg(cantidad) from reparto);
-- 6 --
create table bares2 select*from bares;
update bares set nombre = (select nombre from bares2 where codb like '004'), 
	cif = (select cif from bares2 where codb like '004') ,
    localidad = (select localidad from bares2 where codb like '004') where codb like '003';
    
-- 7 --
update reparto set cantidad = cantidad - 1 
	where codb in(select codb from bares where cif like '11111111X') and
    codc in (select codc from cervezas where envase like 'lata') 
    and fecha between current_date() and subdate(current_date(), interval 15 day);
-- 8 --
create table bares2 select*from bares;
insert into reparto select 1 , codb , codc , current_date() , 10 
	where codb in (select codb from bares where cif like '55555555H') and 
	cantidad > 100;
-- 9 --
delete from repartos where
	codem in(select codem from empleados where nombre like '%Prudencio Caminero%')
    and codb in(select codb from bares where nombre like '%Stop%');
    
-- 10 --
create table reparto2 select*from reparto;
insert into reparto select 1 , codb , codc , current_date() , 20 
	where codb in(select codb from bares where nombre like '%Club Social%')
    and codc in(select codc from reparto2 where cantidad = 
		(select sum(distinct cantidad) from reparto2 order by cantidad DESC limit 1 ))