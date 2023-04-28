use coches;
-- 1 --
select * from concesionario;
-- 2 --
select * from clientes 
	where ciudad like '%Madrid%';
-- 3 --
select nombre from coches 
	order by nombre asc;
-- 4 --
select cifc from concesionario
	where cifc in (select cifc from distribucion
						where cantidad > 18);
-- 5 --
select cifc from distribucion 
	where cantidad > 10 or cantidad < 5;
-- 6 --

-- 7 --
select codcoche from marco 
	where cifc in (select cifc from concesionario 
						where ciudad like '%Barcelona%');
-- 8 --
