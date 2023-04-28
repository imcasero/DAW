use nba;
-- 1 -- es multitabla X necesito sacar la ciudad del equipo
select nombre , nombre_equipo from jugadores
	where procedencia like 'Spain' or procedencia like 'España';
-- 2 --
select nombre from equipos 
	where nombre like 'H%S';
-- 3 -- se puede hacer con multitabla pero tambien esta bien
select avg(puntos_por_partido) , jugador from estadisticas
	where jugador in (select codigo from jugadores 
					where nombre like '%Pau Gasol%') group by jugador;
-- 4 --
select nombre from equipos 
	where conferencia like '%west%';
-- 5 --
select nombre from jugadores 
	where peso/2.20 > 100  and altura > '6';
-- 6 -- 
select avg(puntos_por_partido), jugador from estadisticas
	where jugador in (select codigo from jugadores
							where nombre_equipo like '%cavaliers%') group by jugador;
-- 7 --
select nombre from jugadores 
	where nombre like '__v%';
-- 8 --
select count(*) , nombre_equipo from jugadores 
	where nombre_equipo in (select nombre from equipos 
								where conferencia like '%west%')
									group by nombre_equipo;
-- 9 --
select count(*) from jugadores
	where procedencia like '%Argentina%';
-- 10 --
select max(Puntos_por_partido) from estadisticas
	where jugador in (select codigo from jugadores 
						where nombre like '%Lebron James%');
-- 11 --
select avg(asistencias_por_partido) from estadisticas
	where jugador in (select codigo from jugadores
							where nombre like '%Jose Calderon%') and temporada like '07/08';
-- 12 --
select Puntos_por_partido from estadisticas 
	where jugador in (select codigo from jugadores
							where nombre like '%Lebron James%') and temporada between '03/04' and '05/06';
-- 13 --
select count(*), nombre_equipo from jugadores 
	where  nombre_equipo in(select nombre from equipos 
							where conferencia like '%East%') group by nombre_equipo;
	-- multitabla --			
select count(*) , jugadores.nombre_equipo from jugadores inner join equipos
		on jugadores.nombre_equipo = equipos.nombre 
				where equipos.conferencia like '%East%' group by jugadores.nombre_equipo;
-- 14 -- 
select Tapones_por_partido , jugador from estadisticas 
	where jugador in (select codigo from jugadores 
						where nombre_equipo like '%blazers%') group by jugador;
-- 15 -- 
select avg(Rebotes_por_partido) from estadisticas 
	where jugador in (select nombre from jugadores
							where nombre_equipo in (select nombre from equipos
													where conferencia like '%East%'));
-- 16 --
select avg(rebotes_por_partido), jugador from estadisticas
	where jugador in(select codigo from jugadores 
						where nombre_equipo in (select nombre from equipos 
												where ciudad like '%Los Angeles%')) group by jugador;
-- 17 -- contar en nombre equipo para evitar null
select count(nombre_equipo), nombre_equipo from jugadores 
	where nombre_equipo in (select nombre from equipos 
								where Division like '%NorthWest%') group by nombre_equipo;
-- 18 --
select count(*) from jugadores 
	where procedencia like '%España%' or procedencia like '%Spain%' or procedencia like '%France%' or procedencia like '%Francia%';
-- 19 --
select count(*) as pivots, nombre_equipo from jugadores 
	where posicion like 'C' group by nombre_equipo;
-- 20 --
select max(altura) from jugadores 
	where posicion like 'C';
-- 21 --
select nombre , (peso * 0.42) as kg , peso as libras from jugadores 
	where posicion like 'C' and altura = (select max(altura) from jugadores);
-- 22 --
select count(*) from jugadores 
	where nombre like 'Y%' ;
-- 23 --
select jugador from estadisticas 
	where puntos_por_partido=0;
-- 24 --
select count(*) , nombre_equipo.jugadores , division.equipos from jugadores inner join equipos
	on jugadores.nombre_equipo = equipos.nombre group by division.equipos;
-- 25 --
select avg(peso * 0.42) as peso_Kg , avg(peso) from jugadores 
	where nombre_equipo like '%Raptors%';
-- 26 --
select concat(nombre , '(' , nombre_equipo , ')') as nombreyequipo from jugadores;
-- 27 --
select min(puntoslocal + puntosvisitante) from partidos;
-- 28 --
select nombre from jugadores
	order by nombre asc limit 10;
-- 29 --
select max(puntos_por_partido) from estadisticas 
	where jugador in (select codigo from jugadores 
						where nombre like '%Kobe%Bryant%');
-- 30 --
select count(*), nombre_equipo from jugadores 
	where posicion like 'G' 
		and nombre_equipo in (select nombre from equipos
									where conferencia like '%East%') group by nombre_equipo;

				-- multitabla --

select count(*) ,jugadores.nombre_equipo from jugadores inner join equipos	
	on jugadores.nombre_equipo = equipos.nombre 
		where jugadores.posicion like 'G' 
			and equipos.conferencia like '%East%'
				group by jugadores.nombre_equipo;
-- 31 --
select count(*) , conferencia.equipos from jugadores inner join equipos 
	on jugadores.nombre_equipo = equipos.nombre group by conferencia;
-- 32 --
select division from equipos 
	where conferencia like '%West%' group by division;
-- 33 --
select max(rebotes_por_partido), jugador from estadisticas 
	where jugador in (select codigo from jugadores 
						where nombre_equipo like '%Suns%');
-- 34 --
select max(puntos_por_partido), temporada, jugador from estadisticas 
	group by temporada; -- calculo resumido mas dato individual NO
    
    
select jugador from estadisticas 
	where puntos_por_partido in(select max(puntos_por_partido) from estadisticas);
-- 35 --
select length(nombre) - 1 as numeroletras,nombre from jugadores 
	where nombre_equipo like '%Grizzlies%';
-- 36 --
select max(length(nombre)), ciudad , nombre from equipos;