use almacen;
delimiter |
create function acortar(s varchar(255) , n int)
returns varchar(255)
deterministic
begin
		if isnull(s) then
			return ' ';
		elseif n<15 then
			return left(s, n);
		else 
			if char_length(s) <= n then
				return s;
			else 
				return concat(left(s, n-10) , ' ... ' , right(s, 5));
			end if;
		end if;
	end |
    delimiter  ;
    
    create database LaConsentida;
    create table CtasBanc(
		cuenta int primary key,
        tipo varchar(10),
        saldo int
    );
    insert into CtasBanc values(1 , 'Chequera' , 1000);
    insert into CtasBanc values(2 , 'Inversion' , 0);
    
    delimiter |
    create procedure retiroinversion(in vcantidad smallint, in vcuenta1 tinyint, in vcuenta2 tinyint)
    begin
		update cuentasbanc set saldo=saldo-vcantidad where cuenta=vcuenta1;
		update cuentasbanc set saldo=saldo+vcantidad where cuenta=vcuenta2;
    end |
    delimiter ;
    
    call retiroinversion(500,1,2);
	call retiroinversion(500,1,2);
    call retiroinversion(1000,1,2);
    call retiroinversion(5000,2,1);
    delimiter |
    create function saldoCuenta(vcuenta int) returns decimal(10,2)
    deterministic
    begin
		declare saldor decimal(10,2);
        select saldo from cuentasbanc where cuenta = vcuenta into saldor;
        return saldor;
    end |
    delimiter ;
    
    select saldoCuenta(1);
    select salgoCuenta(2);