use COCHES;
#1
select * from concesionario;
#2
select * from clientes where ciudad like '%MADRID%';
#3
select nombre from marcas order by nombre;
#4
select concesionario.cifc from concesionario inner join distribucion
on concesionario.cifc=distribucion.cifc where distribucion.cantidad > 18;
#5
select concesionario.cifc from concesionario inner join distribucion
on concesionario.cifc=distribucion.cifc where distribucion.cantidad
not between 5 AND 10;
#6
select clientes.dni, marcas.cifm from clientes left outer join marcas
on clientes.ciudad!=marcas.ciudad;
#7
select coches.codcoche from coches inner join distribucion on
coches.codcoche=distribucion.codcoche inner join concesionario on
distribucion.cifc=concesionario.cifc where concesionario.ciudad
like 'BARCELONA';
#8
select coches.codcoche from coches inner join ventas on
coches.codcoche=ventas.codcoche inner join clientes on ventas.dni=clientes.dni
where clientes.ciudad like '%MADRID%';
#9
select ventas.codcoche from ventas inner join clientes on
ventas.dni=clientes.dni inner join concesionario on ventas.cifc=concesionario.cifc
where clientes.ciudad like '%MADRID%' AND concesionario.ciudad like '%MADRID%';
#10
select * from ventas inner join clientes on ventas.dni=clientes.dni
inner join concesionario on ventas.cifc=concesionario.cifc where
clientes.ciudad=concesionario.ciudad;
#11
select coches.nombre, coches.modelo from coches inner join marco on
coches.codcoche=marco.codcoche inner join marcas on marco.cifm=marcas.cifm
where marcas.ciudad like '%BILBAO%';
#12
select codcoche from coches where nombre like 'C%';
#13
select codcoche from coches where nombre not like '%A%';
#14
select AVG(cantidad) from distribucion;
#15
select MAX(dni) from clientes where ciudad like '%MADRID%';
#16
select concesionario.cifc from concesionario inner join distribucion
on concesionario.cifc=distribucion.cifc where distribucion.cantidad
is not null group by concesionario.cifc;
#17
select cifm, nombre from marcas where ciudad like '_I%';
#18


select ventas.dni from ventas inner join concesionario on
	ventas.cifc=concesionario.cifc where concesionario.ciudad like '%MADRID%';


#19


select ventas.color from ventas inner join concesionario on ventas.cifc=concesionario.cifc
	where concesionario.nombre like '%ACAR%';


#20


select coches.nombre, coches.modelo from coches inner join distribucion on
	coches.codcoche=distribucion.codcoche inner join concesionario on distribucion.cifc=concesionario.cifc
		where concesionario.ciudad like '%BARCELONA%';


#21


select clientes.nombre from clientes inner join ventas on clientes.dni=ventas.dni
	inner join concesionario on ventas.cifc=concesionario.cifc 
		where concesionario.nombre like '%DCAR%';


#22





#23


select nombre, apellido from clientes where dni > all (select dni from clientes
where ciudad like '%BARCELONA%');


#24


select nombre, apellido from clientes where dni > any (select dni from clientes
where ciudad like '%MADRID%') AND nombre like 'A%';


#25


select nombre, apellido from clientes 
	where nombre like 'A%' AND (dni > any
								(select dni from clientes where ciudad like '%MADRID%') OR dni < all
								(select dni from clientes where ciudad like '%VALENCIA%'));
                                
                                
#26


select AVG(distribucion.cantidad) AS media_coches from distribucion
	inner join concesionario on distribucion.cifc=concesionario.cifc
		group by distribucion.cifc; 


#27


select AVG(distribucion.cantidad) AS max_media from distribucion
		inner join concesionario on distribucion.cifc=concesionario.cifc
				where concesionario.ciudad not like '%MADRID%' group by distribucion.cifc
						order by AVG(distribucion.cantidad) desc limit 1; 


#28
select codcoche from ventas where exists (select cifc from concesionario
where ventas.cifc=concesionario.cifc and ciudad like '%MADRID%');
#29
select dni from clientes where exists (select dni from ventas
where clientes.dni=ventas.dni and cifc like '%1%');
#30
select nombre from clientes where exists (select dni from ventas
where clientes.dni=ventas.dni and color not like '%ROJO%' and
exists(select cifc from concesionario where ventas.cifc=concesionario.cifc
and ciudad not like '%MADRID%'));