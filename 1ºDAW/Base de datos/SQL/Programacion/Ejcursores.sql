delimiter |
drop procedure  practicas.testCursor;
CREATE PROCEDURE practicas.testCursor (OUT longitud_media DOUBLE)
BEGIN
	DECLARE t VARCHAR(100);
	DECLARE terminado TINYINT DEFAULT 0;
	DECLARE n INT DEFAULT 0;
	DECLARE cnt INT;
	DECLARE miCursor CURSOR FOR
			SELECT tema FROM practicas.libreria;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET terminado=1;
		SELECT COUNT(*) FROM practicas.libreria INTO cnt;
		OPEN miCursor;
			miBucle: LOOP
			FETCH miCursor INTO t; 
				IF terminado=1 THEN LEAVE miBucle; END IF;
					SET n = n + CHAR_LENGTH(t);
			END LOOP miBucle;
	SET longitud_media = n/cnt;
END |
delimiter ;

call practicas.testCursor(@media);
select @media;