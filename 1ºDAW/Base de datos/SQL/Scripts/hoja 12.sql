use constructora;
#1
select nombre from conductores where categoria = 15;
#2
select proyectos.descrip from proyectos inner join trabajos on trabajos.CodP=proyectos.CodP where trabajos.fecha between '2012-09-11' AND '2012-09-15';
select descrip from proyectos where codP in( select codP from trabajos where fecha between '2012-09-11' AND '2012-09-15');
#3
select conductores.nombre from conductores inner join trabajos on trabajos.CodC=conductores.CodC inner join maquinas on maquinas.CodM=trabajos.CodM where maquinas.nombre like '%hormigonera%' order by conductores.nombre DESC; 
select nombre from conductores where CodC in (select CodC from trabajos where CodM in (select CodM from maquinas where nombre like '%hormigonera%')order by conductores.nombre DESC);
#4
select conductores.nombre, proyectos.descrip from conductores inner join trabajos on trabajos.codC=conductores.codC 
inner join proyectos on proyectos.codp=trabajos.codp inner join maquinas on maquinas.codm=trabajos.codm 
where maquinas.nombre like '%hormigonera%' AND proyectos.localidad like '%arganda%';

select nombre from conductores where codc in (select codC from trabajos where codP in (select codP from proyectos where localidad like '%arganda%') 
AND codm in(select codm from maquinas where nombre like '%hormigonera%'));
#5
select conductores.nombre, proyectos.descrip from conductores inner join trabajos on trabajos.codC=conductores.codC 
inner join proyectos on proyectos.codp=trabajos.codp inner join maquinas on maquinas.codm=trabajos.codm 
where trabajos.fecha between '2012-09-12' AND '2012-09-17' AND maquinas.nombre like '%hormigonera%' AND proyectos.localidad like '%arganda%';
#6
select distinct conductores.nombre from conductores inner join trabajos on conductores.codC=trabajos.codC inner join proyectos on trabajos.codP=proyectos.codP where proyectos.cliente like '%José Pérez%';
select distinct nombre from conductores where codC in (select codC from trabajos where codP in (select codP from proyectos where proyectos.cliente like '%José Pérez%'));
#7
select distinct conductores.nombre, conductores.localidad from conductores where codC not in (select codC from trabajos where codP in (select codP from proyectos where proyectos.cliente like '%José Pérez%'));
#8
select distinct proyectos.* from proyectos where localidad like '%Rivas%' or cliente like '%José%';
#9
select distinct conductores.* from conductores inner join trabajos on conductores.codC=trabajos.codC where trabajos.tiempo is null;
select distinct conductores.* from conductores where codC in (select codC from trabajos where tiempo is null);
#10
select conductores.nombre from conductores inner join trabajos on conductores.codC=trabajos.codC inner join proyectos on trabajos.codP=proyectos.codP where conductores.nombre like '%Pérez%' AND proyectos.localidad <> conductores.localidad;
select nombre from conductores where conductores.nombre like '%Pérez%'AND codC not in (select codC from trabajos where codP in (select codP from proyectos where localidad not like conductores.localidad))AND codc in (select codc from trabajos);#consulta corelacionada.
#11
select distinct conductores.nombre, proyectos.localidad from conductores inner join trabajos on trabajos.codC=conductores.codC 
inner join proyectos on proyectos.codp=trabajos.codp inner join maquinas on maquinas.codm=trabajos.codm where maquinas.preciohora between 10000 AND 15000;
#12
select conductores.nombre, conductores.localidad, proyectos.localidad from conductores inner join trabajos on trabajos.codC=conductores.codC 
inner join proyectos on proyectos.codp=trabajos.codp inner join maquinas 
on maquinas.codm=trabajos.codm where proyectos.localidad like '%rivas%' AND proyectos.codp not in 
(select codp from trabajos t1, maquinas m1 where (select m1.nombre = '%excavadora%' or '%hormigonera%') AND m1.codm = t1.codm);


select conductores.nombre, conductores.localidad, proyectos.localidad from conductores, trabajos, proyectos, maquinas where proyectos.localidad like '%rivas%' 
AND proyectos.codp not in (select codp from trabajos t1, maquinas m1 where (select m1.nombre = '%excavadora%' or '%hormigonera%'));
#13
select distinct proyectos.*, conductores.nombre, conductores.localidad from conductores inner join trabajos on conductores.codc=trabajos.codc
inner join proyectos on trabajos.codP=proyectos.codP where trabajos.fecha = '2012-09-15'
UNION 
select distinct proyectos.*, '', '' from proyectos where codP not in (select codp from trabajos where fecha = '2012-09-15') ;
#14
select distinct conductores.nombre, proyectos.cliente, proyectos.localidad from conductores inner join trabajos on trabajos.codc=conductores.codc 
inner join proyectos on trabajos.codp=proyectos.codp where trabajos.codm in (select codm from maquinas where preciohora in (select MAX(preciohora) from maquinas));
#15

select distinct proyectos.* from proyectos where proyectos.codp not in (select codp from trabajos where codm in 
(select codm from maquinas where preciohora <> (select min(preciohora) from maquinas ))) and proyectos.codp in (select codp from trabajos);

#16
select distinct proyectos.* from trabajos inner join proyectos on proyectos.codp=trabajos.codp where codm in 
(select codm from maquinas where preciohora in (select min(preciohora) from maquinas)) AND codc in 
(select codc from conductores where categoria in (select max(categoria) - 2 FROM conductores));

select distinct codp from trabajos where codm in (select codm from maquinas where preciohora in(select min(preciohora) from maquinas))
AND codc in(select codc from conductores where categoria in (select MAX(categoria) -2 from conductores));
#17
select cliente, SUM(tiempo) from proyectos left join trabajos on proyectos.codp=trabajos.codp group by cliente;
#18
select cliente, descrip, SUM(Tiempo*preciohora) AS Tptalptas, SUM(tiempo*preciohora)/166.366 AS Totaleuros from proyectos 
left join trabajos on proyectos.codp=trabajos.codp left join maquinas on trabajos.codM = maquinas.codM group by cliente, descrip order by 3,1;
#19
select cliente, descrip, SUM(Tiempo*preciohora) AS Tptalptas, SUM(tiempo*preciohora)/166.366 AS Totaleuros from proyectos 
left join trabajos on proyectos.codp=trabajos.codp left join maquinas on trabajos.codM = maquinas.codM 
group by  cliente, descrip having SUM(Tiempo*preciohora) =(select SUM(tiempo*preciohora) from trabajos 
inner join maquinas on trabajos.codm = maquinas.codm group by codp order by 1 desc limit 1);

#20
select trabajos.codc, nombre, count(distinct trabajos.codp) from conductores inner join trabajos on conductores.codc = trabajos.codc inner join proyectos on trabajos.codp = trabajos.codp
where proyectos.localidad like '%Arganda%' group by trabajos.codc, nombre having count(distinct trabajos.codp) = (select count(*) from proyectos where localidad like '%Arganda%');
#21
select codp, MAX(tiempo) from trabajos group by codp having count(distinct codc) > 1;
#22
select proyectos.codp, cliente, descrip, count(*) as numeroTrabajos from proyectos inner join trabajos on trabajos.codp=proyectos.codp 
group by proyectos.codp, cliente, descrip having count(*) >=ALL (select count(*) from trabajos group by codp);
#23
select localidad fromconductores where codc in (select codc from trabajos group by codc having count(distinct codp) > 2);