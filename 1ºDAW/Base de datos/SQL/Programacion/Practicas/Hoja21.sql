use practicas;
create table categorias(
	idCategoria int primary key,
    nombre varchar(50),
    descripcion varchar(100)
);
delimiter |
-- 2-----------------------------------------------------------------------
create procedure insertaCat ( i int , n varchar(50) , d varchar(100))
begin
	declare idcat int default 0; -- para descartar repeticiones
    declare nomcat varchar(50) default null;
    select idCatecoria from categorias where idCategoria = i into idcat; -- si sigue a 0 es que no esta repetido
    select nombre from categorias where nombre = n into nomcat;
     if idcat = 0 and nomcat is null then 
		insert into categorias values(i , n , d);
	else
		select concat('Los parametros introducidos ya existen');
	end if;
end |
delimiter ;
-- 3-----------------------------------------------------------------------
delimiter |
create procedure busqCat (nom varchar(50))
begin
	select nombre from categorias where nombre like nom;
end |
delimiter ;
-- 4-----------------------------------------------------------------------
delimiter |
create procedure delCat(i int)
begin
	declare idcat int default 0;
    select idcategoria from categorias where idcategoria = i into idcat;
    if idcat = 0 then
		select concat('El parametro no existe');
	else
		delete from categorias where idcategoria = i;
    end if;
end |
delimiter ;
-- 5-----------------------------------------------------------------------
delimiter |
create procedure alterCat (n1 varchar(50),n varchar(50) , d varchar(100))
begin
	declare nom varchar(50) default null;
    select nombre from categorias where nombre = n into nom;
    if nom is null then
		update categorias set nombre = n , descripcion = d where nombre = n1 ;
	else
		select concat('No existe esa categoria');
    end if;
end |
delimiter ;
-- 6-----------------------------------------------------------------------
use sakila;