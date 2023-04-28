use coches;
select * from coches where nombre='seat';
select (2+3)*7 from dual;
select ( 2+1 )>( 6*2 );
use nba;
Select nombre from jugadores where nombre_equipo='Lakers';
Select nombre from jugadores where nombre_equipo='Lakers' and procedencia='Spain';
Select nombre from jugadores where nombre_equipo='Lakers' and procedencia in ('Spain','Slovenia');
Select nombre , nombre_equipo from jugadores limit 4;
