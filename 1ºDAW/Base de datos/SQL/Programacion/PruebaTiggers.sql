use pruebas;
create table test1(a1 int);
create table test2(a2 int);
create table test3(a3 int not null auto_increment primary key);
create table test4(a4 int not null auto_increment primary key,
					b4 int default 0);
Delimiter |

create trigger testref before insert on test1
	for each row 
		begin
			insert into test2 set a2 = NEW.a1;
            delete from test3 where a3 = new.a1;
            update test4 set b4=b4+1 where a4 = new.a1;
		end |
delimiter ;

insert into test3(a3) values (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL);
INSERT INTO TEST4(B4) VALUES (0),(0),(0),(0),(0),(0),(0),(0),(0),(0);