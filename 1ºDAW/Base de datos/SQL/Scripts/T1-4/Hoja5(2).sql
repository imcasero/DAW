USE practicas;
ALTER TABLE ejemplo3 ADD sexo TINYINT NOT NULL;
ALTER TABLE ejemplo3 ADD importe NUMERIC(5 , 2);
ALTER TABLE ejemplo3 DROP sexo;
ALTER TABLE ejemplo3 DROP importe;
RENAME TABLE ejemplo3 TO alumno;
USE practias;
CREATE TABLE tiendas(
	nif VARCHAR(10),
    nombre VARCHAR(20),
    direccion VARCHAR(20),
    poblacion VARCHAR(20),
    provincia VARCHAR(20),
    codpostal NUMERIC(5)
);
ALTER TABLE tiendas ADD PRIMARY key (nif);
ALTER TABLE tiendas ADD provincias INT NOT NULL;
ALTER TABLE tienda MODIFY nombre VARCHAR(30) NOT NULL;
USE practicas;
CREATE TABLE pedidos(
	nif INTEGER,
    artiulo VARCHAR(20),
    cod_fabricante TINYINT,
    peso NUMERIC(3 , 2),
    categoria ENUM('primera', 'segunda' , 'tercera'),
    fecha_pedido DATETIME,
    unidades_pedidas SMALLINT DEFAULT "5",
    PRIMARY KEY(nif ,  articulo , cod_fabricante , peso , categoria , fecha_pedido),
    FOREIGN KEY(cod_fabricante) REFERENCES fabricantes(cod_fabricantes),
    FOREIGN KEY(articulo) REFERENCES articulos(articulo)
		ON DELETE CASCADE,
    FOREIGN KEY(cod_fabricante) REFERENCES articulos(cod_fabricantes)
		ON DELETE CASCADE,
    FOREIGN KEY(peso) REFERENCES articulos(peso)
		ON DELETE CASCADE,
    FOREIGN KEY(categoria) REFERENCES articulos(categoria)
		ON DELETE CASCADE,
    FOREIGN KEY(nif) REFERENCES tiendas(nif)
); 
CREATE TABLE ventas(
	nif INTEGER,
    artiulo VARCHAR(20),
    cod_fabricante TINYINT,
    peso NUMERIC(3 , 2),
    categoria ENUM('primera', 'segunda' , 'tercera'),
    fecha_venta DATETIME,
    unidades_venta NUMERIC (4),
    PRIMARY KEY(nif , articulo , cod_fabricante , peso , categora , fecha_pedido),
    FOREIGN KEY(cod_fabricante) REFERENCES fabricantes(cod_fabricantes),
     FOREIGN KEY(articulo) REFERENCES articulos(articulo)
		ON DELETE CASCADE,
    FOREIGN KEY(cod_fabricante) REFERENCES articulos(cod_fabricantes)
		ON DELETE CASCADE,
    FOREIGN KEY(peso) REFERENCES articulos(peso)
		ON DELETE CASCADE,
    FOREIGN KEY(categoria) REFERENCES articulos(categoria)
		ON DELETE CASCADE,
	FOREIGN KEY(nif) REFERENCES tiendas(nif)
);