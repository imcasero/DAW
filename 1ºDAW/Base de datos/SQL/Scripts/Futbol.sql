drop database futbol;
create database if not exists futbol character set utf8mb4 collate utf8mb4_cs_0900_ai_ci;
use futbol;

create table jugadores(
	dorsal tinyint,
    pais varchar(20),
    nombre varchar(50),
    tipo enum('portero','jugador'),
    primary key(dorsal,pais)
);
create table equipos(
	pais varchar(20)primary key,
    sede varchar(50)
);
create table partidos(
	codigo tinyint primary key,
    equipolocal varchar(50),
    equipovisitante varchar(50),
    estadio varchar(35),
    goleslocal tinyint,
    golesvisitante tinyint,
    constraint EquipoVisitante_FK foreign key (equipovisitante) references equipos(pais)
    on delete cascade on update set null,
    constraint EquipoLocal_FK foreign key (equipolocal) references equipos(pais)
    on delete cascade on update set null
);
create table entradas_acta(
	incidencia varchar(50),
    hora time,
    codigopartido tinyint,
    primary key (hora,codigopartido),
    constraint CodigoPartido_FK foreign key (codigopartido) references partidos(codigo)
    on delete cascade on update set null
);
create table estadisticas(
	tipo varchar(20),
    minuto tinyint,
    situacion varchar(30),
    dorsal tinyint,
    pais varchar(30),
    codigopartido smallint,
    constraint PaisDorsal_FK foreign key (pais,dorsal) references jugadores(pais,dorsal)
    on delete cascade on update set null,
    constraint CodigoPartido_FK foreign key (codigopartido) references partidos(codigopartidos)
    on delete cascade on update set null
);
create table arbitros(
	codigo tinyint auto_increment primary key,
    nombre varchar(20),
    pais varchar(20)
);
create table arbitrajes(
	codigoarbitro tinyint,
    codigopartido tinyint,
    rol varchar(25),
    constraint CodigoArbitro_FK foreign key(codigoarbitro) references arbitros(codigo)
    on delete cascade on update set null,
    constraint CodigoPartido_FK foreign key(codigopartido) references partidos (codigo)
    on delete cascade on update set null
);