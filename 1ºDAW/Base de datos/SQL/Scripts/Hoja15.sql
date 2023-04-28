drop database personal;
create database personal;
use personal;
create table dvds(
	autor varchar(24),
    titulo varchar(24),
    year smallint
);
create table cuentas(
	fecha date,
    concepto varchar(32),
    importe float,
    tipo_mov enum('D','H')
);

insert into dvds values ('Juan' , 'Hola' , 2004);
insert into dvds values ('Pepe' , 'Buenas tardes' , 2005);
insert into dvds values ('María' , 'Buenos días' , 2006);
insert into dvds values ('Jose' , 'Hasta luego' , 2007);
insert into dvds values ('Juana' , 'Adios' , 2008);

insert into cuentas values('2001-01-01','concepto',12,'D');
insert into cuentas values('2001-02-01','concepto1',12,'H');
insert into cuentas values('2001-03-01','concepto2',12,'D');
insert into cuentas values('2001-04-01','concepto3',12,'H');
insert into cuentas values('2001-05-01','concepto4',12,'D');

create user tesorero identified by 'tesorero'; 
grant all privileges on personal.* to tesorero;
create user habitante identified by 'habitante';
grant all privileges on personal.cuentas to habitante;

create user invitado identified by 'invitado';
grant insert on personal.dvds to invitado;

revoke all on personal.* from tesorero;


