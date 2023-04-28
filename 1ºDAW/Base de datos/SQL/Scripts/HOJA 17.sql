USE jardineria;

#Añadir a la ofcina de Londres otro empleado, Luis Valverde, con número de empleado 436
# con los mismos datos que el empleado Alberto Soria pero su jefe será el director de la
# ofcina de Madrid.
CREATE TABLE empleados2 SELECT * FROM empleados;

INSERT INTO empleados SELECT
436, "Luis","Valverde","",Extension,Email,CodigoOficina,CodigoJefe,Puesto
FROM empleados WHERE Nombre LIKE "%Alberto%" AND Apellido1 LIKE "%Soria%";

UPDATE empleados SET CodigoJefe=(SELECT CodigoJefe FROM empleados WHERE CodigoOficina IN
(SELECT CodigoOficina FROM oficinas WHERE Ciudad LIKE "%Madrid%"));

INSERT INTO empleados VALUES (436,"Luis", "Valverde", null,(SELECT extension FROM empleados2
WHERE nombre LIKE "%Alberto%" and Apellido1 LIKE "%Soria%"),
(SELECT Email FROM empleados2 WHERE Nombre LIKE "%Alberto%" and Apellido1 LIKE "%Soria%"),
(SELECT CodigoOficina FROM oficinas WHERE ciudad LIKE "%Londres%"),
(SELECT CodigoEmpleado FROM empleados2 WHERE Puesto LIKE "%Director%" and CodigoOficina IN
(SELECT CodigoOficina FROM oficinas WHERE ciudad LIKE "%Madrid%")),
(SELECT Puesto FROM empleados2 WHERE Nombre LIKE "%Alberto%" AND Apellido1 LIKE "%Soria%"));

# Pasa los pedidos de enero de 2006 a diciembre 2005
UPDATE pedidos SET FechaPedido="2005-12-01" WHERE FechaPedido LIKE "2006-01-%%";


#Da de alta a un empleado con codigo de empleado 65 llamado "Jose Díez Maldonado" con la misma
# extension, codigo jefe, mismo puesto y codigo de oficina  del empleado 13.El email será
# "jdmal@jardineria.es".
CREATE TABLE empleados2 SELECT * FROM empleados;
INSERT INTO empleados
VALUES ((SELECT max(CodigoEmpleado)+1 FROM empleados2),'Jose', 'Díez', 'Maldonado',
(SELECT Extension from empleados2 where Nombre like 'David' and Apellido1 like 'Palma'),
'jdmal@jardineria.es', (SELECT CodigoOficina from empleados2 
where Nombre like 'David' and Apellido1 like 'Palma'), (SELECT CodigoJefe from empleados2
where Nombre like 'David' and Apellido1 like 'Palma'), (SELECT Puesto from empleados2 
where Nombre like 'David' and Apellido1 like 'Palma')); 

# Actualiza el precio de los productos del fabricante Naranjas Valencianas.com con el precio
# medio utlizado en los pedidos donde aparecen dichos productos
UPDATE productos SET PrecioVenta = (SELECT AVG(PrecioUnidad) FROM detallepedidos
WHERE CodigoPedido IN (SELECT CodigoPedido FROM detallepedidos WHERE CodigoProducto IN
(SELECT CodigoProducto FROM productos WHERE Proveedor LIKE "%NaranjasValencianas.com%")))
WHERE Proveedor LIKE "%NaranjasValencianas.com%";

# Elimina los pedidos del cliente Beragua
DELETE FROM detallepedidos WHERE CodigoPedido IN (SELECT CodigoPedido FROM pedidos
WHERE CodigoCliente IN (SELECT CodigoCliente FROM clientes WHERE NombreCliente LIKE
"%Beragua%"));
DELETE FROM pedidos WHERE CodigoCliente IN (SELECT CodigoCliente FROM clientes
WHERE NombreCliente LIKE '%Beragua%');

# Eliminar las ofcinas que no tengan empleados
DELETE FROM oficinas WHERE CodigoOficina NOT IN (SELECT DISTINCT(CodigoOficina) FROM empleados);

# Eliminar los pedidos de productos frutales cuyo precio de venta (precio unidad) en el pedido no
# corresponda con el precio unitario del producto de la tabla de productos (precio venta). 
DELETE FROM pedidos WHERE CodigoPedido IN(SELECT CodigoPedido FROM detallepedidos
WHERE CodigoProducto IN( SELECT CodigoProducto FROM productos WHERE gama
LIKE "%frutales%" AND productos.precioventa<>detallepedidos.preciounidad));

