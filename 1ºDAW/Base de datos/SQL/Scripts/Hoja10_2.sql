-- Hoja 10_2 --
use constructora;
-- 1 --
select nombre from maquinas 
	order by nombre asc;
-- 2 --
select codm, nombre from maquinas 
	where nombre not like '%a%';
-- 3 --
select count(*) as Nproyectos from proyectos 
	where localidad like 'rivas' or 'loeches';
-- 4 --
select localidad, count(*) as Nproyectos from proyectos 
	group by localidad having Nproyectos = 2;
-- 5 --
select codm , preciohora from maquinas 
	where preciohora between 11000 and 18000;
-- 6 -- 
select avg(tiempo)as media, codm as maquina, codp  as proyecto from trabajos 
	group by codm, codp;
-- 7 --
select codp , cliente , telefono from proyectos 
	where telefono is not null;
-- 8 --
select count(distinct codp) as conductores, codp as proyecto from trabajos 
	group by codp;
-- 9 --
select codc, categoria from conductores 
	where localidad like 'arganda' group by categoria;
-- 10 --
select max(tiempo) as TiempoMaximo , codp as proyecto from trabajos 
	group by proyecto having count(codp) > 1;
-- 11 --
alter table proyectos add fechafin datetime;
alter table proyectos add primary key (codp);
alter table proyectos add primary key (fechafin);
-- 12 --
alter table trabajos drop foreign key fk_tc;
-- 13 --
drop table conductores , maquinas , proyectos , trabajos;