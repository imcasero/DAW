-- 1r -- 
use coches;
-- 2r -- 
select cifc from distribucion 
	where cantidad between 10 and 18;
-- 3r --
select codcoche, nombre from coches
	where nombre not like '%a%';
-- 4r -- 
select count(distinct nombre) as marcas from marcas 
	where ciudad like 'madrid';
-- 5r --
select sum(cantidad)/count(distinct cifc) as media, cifc from distribucion;
-- 6r --
select dni from ventas
	where color like 'blanco' order by dni asc limit 1;
-- 7r distinct --
select distinct cifc from distribucion
	where cantidad is not null;
-- 8r --
select dni from ventas
	where cifc in (select cifc from concesionario where ciudad like 'madrid') group by dni;
-- 9r --
select color from ventas
	where cifc in (select cifc from concesionario where nombre like 'ACAR');
-- 10mal elegida la tabal -- ??
select distinct codcoche from ventas
	where  cifc in (select cifc from concesionario where ciudad like 'madrid'); 
