-- 1 --
Create user paco identified by 'paco';
-- 2 --
create user juan identified by 'juan';
grant usage on jardineria to juan;
-- 3 --
grant select on jardineria.clientes to paco;
-- 4 --
grant select, insert, update on jardineria to juan with grant option;
-- 5 --

-- 6 --
revoke select on jardineria from paco;
flush privileges;
-- 7 --
revoke all privileges on jardineria from juan;
-- 8 --
grant select(codigooficina , ciudad) on jardineria.oficinas to juan;
-- 9 --

-- 10 --
