create database LaConsentida;
use LaConsentida;
drop table CtasBanc;
create table CtasBanc(
	cuenta tinyint primary key,
    tipo varchar(10),
    saldo int
);
insert into CtasBanc values(1,'chequera',1000);
insert into CtasBanc values(2,'Inversion',0);
delimiter |
create procedure RetiroInversion (in retiro int) /*Recibe un int que es la cantidad a retirar*/
begin
	update CtasBanc set saldo = saldo - retiro where cuenta like '2';
    update CtasBanc set saldo = saldo + retiro where cuenta like '1';
end |
delimiter ;
delimiter |
create procedure DepositoInversion (in inversion int)
begin
	update CtasBanc set saldo = saldo - inversion where cuenta like '1';
    update CtasBanc set saldo = saldo + inversion where cuenta like '2';
end |
delimiter ;
call DepositoInversion(1000);/*Con call llamamos al procedimeinto*/
call RetiroInversion(5000);
delimiter |
create function SaldoCuenta(c tinyint)/*Recibe un parametro*/
returns int/*Devolvera un int*/
deterministic
begin
	declare resul int;/*Creamos la variable que va a retornar*/
    select saldo from CtasBanc where cuenta like c into resul;/*Insertamos los valores a la variable*/
    return resul;/*Retornamos la variable*/
end |
delimiter ;