use almacen;
-- 1 --

Insert into articulos
select 'yourt fresa' ,cod_fabricante , 4 , 'primera' , 120 , 100 ,190
from fabricantes
where pais like 'Francia';

insert into pedidos 
select nif , 'yogurt fresa' , cod_fabricante , 4 , 'primera' , current_date() , 5
from tiendas inner join fabricantes
where pais like 'francia';

update articulos set existencias = existencias-5*(select count(nif) from tiendas)
where articulo like 'yogurt fresa';

-- 2 --

insert into tiendas values('1010-c', 'la cesta','C/juan mazo 30' , 'Alcala' , 'Madrid' , '28809');

insert into pedidos
select '1010-c' , articulo , cod_fabricante ,peso,categoria,current_date(),20
from articulos;

update articulos set existencias = existencias-20;

-- 3 --

insert into ventas
select nif , articulo ,cod_fabricante , peso , categoria , current_date() , 10 
from articulos inner join tiendas where articulos.categoria like 'Primera' and tiendas.provincia like 'Toledo';

-- 4 --

update articulos set categoria = 'segunda' where categoria like 'primera' and cod_fabricante=(select cod_fabricante from fabricantes where pais like 'italia');

-- 5 --
delete from tiendas where nif not in (select distinct nif from ventas);
-- 6 --
insert into tiendas values('4200-D','Domenico Scarlatti','c/Lili alvarez','Aranjuez', 'Sevilla', '20077');
insert into tiendas values('3452-D','Diego Casero','C/Agen 16' , 'Sevilla' , 'Sevilla' , '30077' );

select *from articulos where cod_fabricante in (select cod_fabricante from fabricantes where nombre like 'GALLO');

insert into pedidos
select '4200-D' , ARTICULO, COD_FABRICANTE , PESO , CATEGORIA , current_date() , 30
from articulos where cod_fabricante in (select cod_fabricante from fabricantes where nombre like 'gallo');

#select ARTICULO, COD_FABRICANTE , PESO , CATEGORIA from articulos 
#	where cod_fabricante in (select cod_fabricante from fabricantes where nombre like  'gallo');

-- 7 --
create table tiendas2 select * from tiendas;
update tiendas set nombre =(select nombre from tiendas2 where nif like '2222-A'), 
direccion = (select direccion from tiendas2 where nif like '2222-A') ,
poblacion = (select poblacion from tiendas2 where nif like '2222-A') ,
provincia =(select provincia from tiendas2 where nif like '2222-A') ,
codpostal= (select codpostal from tiendas2 where nif like '2222-A') 
	where nif like '1111-A';
    
-- 8 --

delete from pedidos where nif not in(select nif from tiendas);

-- 9 --

delete from articulos where (cod_fabricante , articulo , categoria , peso) not in 
	(select cod_fabricante , articulo , categoria , peso from ventas) 
		and (cod_fabricante , articulo , categoria , peso) not in
			(select cod_fabricante , articulo , categoria , peso from pedidos);
            
insert into articulos values ('mayonesa' , 20 , 1 , 'primera', 100 , 95 , 100);

-- 10 --
create table pedidos2 select * from pedidos;
update pedidos set unidades_pedidAs = unidades_pedidAs-1 
where nif like '5555-B' and fecha_pedido in 
(select max(fecha_pedido) from pedidos2 where nif like '5555-B');

-- 11 --
insert into pedidos
	select '5555-B' ,articulo , cod_fabricante , peso , categoria , curdate() , 10 FROM ARTICULOS
		WHERE ARTICULO IN (SELECT ARTICULO FROM VENTAS
			GROUP BY UNIDADES_VENDIDAS
				HAVING SUM(UNIDADES_VENDIDAS)> 30);

-- 12 --

delete from pedidos where categoria like 'primera' and cod_fabricante in(
	select cod_fabricante from fabricantes where pais like 'Belgica');
    
-- 13 --
insert into tiendas
	select '1111-A' , articulo , cod_fabricante , peso , categoria ,curdate() , 20 from 
    
    
select articulo ,max(unidades_pedidas) from pedidos 
	group by articulo order by unidades_pedidas DESC limit 1;