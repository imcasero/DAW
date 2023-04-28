use practicas;
-- -------------------------------------------------------------------------------------------------------
create table categorias(
	idCategoria int primary key,
    nombre varchar(50),
    descripcion varchar(100)
);
delimiter |

create procedure nuevaCategoria(in idcat int, in nombrecat varchar(50), in descripcat varchar(100))
begin
	declare id int default 0;
    declare nombreaux varchar(50) default null;
	select idCategoria from categorias where idcategoria = idcat into id;
    select nombre from categorias where nombre = nombrecat into nombreaux; 
    if id = 0 AND nombreaux is null then
		insert into categorias values(idcat , nombrecat , descripcat);
	else
		select concat('La pelicula con id ', idcat , ' ya existe o  el nombre ' ,nombrecat, ' ya existe.');
	end if;
    
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
delimiter |
create procedure BusquedaCat(in nombrecat varchar(50))
begin
declare nombreaux1 varchar(50) default null;
select nombre from categorias where nombre = nombrecat into nombreaux1;
if nombreaux1 is null then
	select concat('no encontrado');
else
	select * from categorias where nombre = nombreaux1;
end if;
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
delimiter |
create procedure ActualizacionNomDescrp(in nombre varchar(50), in descrp varchar(100))
begin
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
use sakila;
delimiter |
create procedure visPeliculas (in minCoste dec(5,2))
begin
	select * from film where replacement_cost > minCoste;
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
call visPeliculas(20);
-- -------------------------------------------------------------------------------------------------------
delimiter |
create procedure visParametroPeliculas (in minCoste dec(5,2) ,in maxCoste dec(5,2))
begin
	select * from film where replacement_cost between minCoste and maxCoste;
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
call visParametroPeliculas(20 , 21.99);
-- -------------------------------------------------------------------------------------------------------
use world;
delimiter |
create procedure lengCont (in continenteb Enum('Asia', 'Africa', 'America' ,'Europa' , 'Oceania'), in lengua varchar(30))
begin
	select name from country where Continent like continenteb and Code not in (select code from countrylanguage where Language like lengua);
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
call LengCont('Asia' , 'Español');

delimiter |
create function calcEsfera(radio float) returns float
deterministic
begin
	return (4/3 * 3.14 * radio);
end |
delimiter ;
-- -------------------------------------------------------------------------------------------------------
select calcEsfera(5);
-- -------------------------------------------------------------------------------------------------------
delimiter |
create procedure contPorCat (in categoria1 int, out numpel int)
begin
	select count(film_id) from film_category 
		where category_id like 
				(select category_id from category where name like categoria1) 
	into numpel; 
end |
delimiter ;
-- -----------------------------------------------------------------------------------------------------
delimiter |
create function contAños (fecha1 date ,fecha2 date)returns tinyint
deterministic
begin 
	declare años tinyint;
    select datediff(year ,fecha1 ,fecha2) into años;
	return años;
end |
delimiter ;
-- ------------------------------------------------------------------------------------------------------
