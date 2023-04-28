#----------------------------------------------------#
#---------------------Hoja 16------------------------#
#----------------------------------------------------#
use almacen;
#1 Dar de alta un nuevo artculo de ‘Primera’ categoría para los fabricantes de ‘FRANCIA’ y
#abastecer con cinco unidades de ese artculo a todas las tendas y en la fecha de hoy.
insert into articulos select 'calzoncillos' , COD_FABRICANTE , 2 , 'primera' , 100 , 90 , 100 from fabricantes
	where pais like '%FRANCIA%';
insert into pedidos select NIF , 'calzoncillos' , 30 , 2 , 'primera' , current_date() , 5
	from tiendas ;
update articulos set existencias = existencias - 5 * (select count(nif) from tiendas);
#Dar de alta una tenda en la proiincia de ‘MADRID’ y abastecerla con 20 unidades de cada
#uno de los artculos existentes.
