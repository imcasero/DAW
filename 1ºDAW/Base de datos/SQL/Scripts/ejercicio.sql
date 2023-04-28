#Registra un pedido realizado en el dia de hoy que se entregue en 15 días , para el cliente de fuenlabrada con el contacto llamado Jose

use jardineria;
insert into pedidos
	select 199 , current_date() , DATE_ADD(current_date(),INTERVAL 15 DAY ), NULL , 'pendiente' , 'segundo piso' , CodigoCliente 
		from clientes
			where nombrecontacto like 'Jose' and LineaDireccion2 like 'Fuenlabrada';
            
      
      select 199 , current_date() , DATE_ADD(current_date(),INTERVAL 15 DAY ), NULL , 'pendiente' , 'segundo piso' , CodigoCliente 
		from clientes
			where nombrecontacto like 'Jose' and LineaDireccion2 like 'Fuenlabrada';
            
        
#bruno : Registra un nuevo pedido realizado el dia 07-01-2019 que fue entregado el 21-04-2019
#con dos dias de retraso para el cliente 
#FLORES.SL
insert into pedidos
	select null , 2019-01.07 , 2019-04-21 ,DATE_ADD(2019-04-21,INTERVAL 2 DAY ) ,'retrasado' , 'Entregado con dos dias de retraso' , CodigoCliente  
		from clientes where nombrecliente like 'FLORES.SL';
        
select CodigoCliente from clientes where nombrecliente like 'FLORES.SL';

# jorge Crea una oficina en Málaga que contrate a todos los trabajadores de las demás sucursales.
# Después crea un pedido retrasado por dos días para el cliente Naturagua de los producto
# Mejorana y Peral y borra el de Peral 

#Sergio :Cambia la extensión del empleado 
#cuyo cliente tiene vive en Miami y el estado actual de su pedido no es entregado. 
    
update empleados set extension = 1111 
where codigoempleado in
	(select CodigoEmpleadoRepVentas from clientes where ciudad like 'Miami' and codigocliente in 
		(select codigocliente from pedidos where Estado not like 'entregado'));
        
        select CodigoEmpleadoRepVentas from clientes where ciudad like 'Miami' and codigocliente in 
		(select codigocliente from pedidos where Estado not like 'entregado');
        
#ALEJANDRO :Añade a la oficina de Madrid un empleado cuyo nombre sea "Javier García Pérez", con código de empleado 520, email jgp@gmail.com
# que tenga los mismos datos que el empleado "Mariano López" pero que su puesto sea "Subdirector Márketing" 
insert into empleados
select 520,'Javier','García','Pérez',empleados.Extension,'jgp@gmail.com','MAD-ES',oficinas.CodigoOficina,empleados.CodigoJefe,'Subdirector Márketing'
from empleados inner join oficinas 
where empleados.Nombre like 'Mariano' and empleados.Apellido1 like 'López' and oficinas.Ciudad like 'Barcelona';

#Da de alta a un empleado con codigo de empleado 65 llamado "Jose Díez Maldonado" con la misma extension, codigo jefe, mismo puesto y
#codigo de oficina  del empleado 13.El email será 
#jdmal@jardineria.es

Insert into empleados select 65, 'Jose', 'Díez', 'Maldonado', Extension, 'jdmal@jardineria.es', CodigoOficina, CodigoJefe, Puesto from empleados 
where Nombre like 'David' and Apellido1 like 'Palma'; 

CREATE TABLE empleados2 SELECT * FROM empleados;
INSERT INTO empleados
VALUES ((SELECT max(CodigoEmpleado)+1 FROM empleados2),'Jose', 'Díez', 'Maldonado',
(SELECT Extension from empleados2 where Nombre like 'David' and Apellido1 like 'Palma'),
'jdmal@jardineria.es', (SELECT CodigoOficina from empleados2 
where Nombre like 'David' and Apellido1 like 'Palma'), (SELECT CodigoJefe from empleados2
where Nombre like 'David' and Apellido1 like 'Palma'), (SELECT Puesto from empleados2 
where Nombre like 'David' and Apellido1 like 'Palma')); 

/*Enunciado 1:
El jefe de la empresa encargada de la gestión de los pedidos se da cuenta de que falta
por registrar los detalles de un pedido de 10 sierras de poda, te pide que insertes este pedido 
en la base de datos, diciendo unicamente que el código del pedido es el 5 y el numero de linea es el 3 
Adrián Lorente dice:Enunciado 2:
El director de la oficina de Barcelona te comunica que se ha contratado a un nuevo trabajador y te 
pide que le inscribas en la base de datos. Se llama Alfonso López López y se le ha asignado el 
código 32. Solicita que coloques al trabajador en la oficina de Barcelona y bajo su propio mandato, ocupando 
el cargo de Subdirector de Ventas, pidiéndote además que le asignes la misma extensión que aquel que ocupa dicho cargo
en la oficina de Talavera de la Reina. Por último te especifica que el correo del nuevo empleado llegue al mail personal 
suyo propio (del director de la oficina) hasta que el departamento de informática le asigne su propio correo de la empresa
al nuevo empleado. */

/* Desplazar a Tokyo a todos los empleados que tienen el mismo puesto que Felipe Rosas Marquez
y que trabajan en Barcelona. */ 

CREATE TABLE empleados2 SELECT * FROM empleados;
update empleados set CodigoOficina = 'TOK-JP' 
where puesto in(select puesto from empleados2 where nombre like 'Felipe' and apellido1 like 'Rosas' and apellido2 like 'Marquez' ) and codigooficina in(select codigooficina from empleados2 like 'BCN-ES') ;

select puesto from empleados where nombre like 'Felipe' and apellido1 like 'Rosas' and apellido2 like 'Marquez';

drop table oficinas;
drop table empleados;


