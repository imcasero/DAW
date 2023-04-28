#18
#select CodigoPedido, CodigoCliente , FechaEsperada , FechaEntrega from pedidos where DATEDIFF(DAY, FechaEsperada , FechaEntregada )=2; #ERROR
#select CodigoPedido, CodigoCliente , FechaEsperada , FechaEntrega ,DATEDIFF(DAY, FechaEsperada , FechaEntregada ) AS dias from pedidos where dias=2; 
#19
select sum(cantidad * preciounidad) as facturacion, sum(cantidad + preciounidad)*0.21 AS IVA from detallepedidos; #dos tablas difernetes? 

#20
select sum(cantidad * preciounidad) as facturacion, sum(cantidad + preciounidad)*0.21 AS IVA from detallepedidos where codigoproducto like 'FR%' group by CodigoProducto;