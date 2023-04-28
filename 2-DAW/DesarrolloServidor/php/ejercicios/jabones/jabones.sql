CREATE DATABASE jabones;
USE jabones;

CREATE TABLE clientes (
  email VARCHAR(100) NOT NULL PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  direccion VARCHAR(200) NOT NULL,
  CP INT NOT NULL,
  Tlfno INT NOT NULL,
  password_cliente VARCHAR(6) NOT NULL
);

CREATE TABLE productos (
  productoID INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  descripcion TEXT NOT NULL,
  peso FLOAT NOT NULL,
  precio FLOAT NOT NULL,
  imagen VARCHAR(200) NOT NULL
);

CREATE TABLE cesta (
  cestaID INT AUTO_INCREMENT PRIMARY KEY,
  email_cesta VARCHAR(100) NOT NULL,
  fechaCreacion DATETIME NOT NULL

);
ALTER TABLE cesta
ADD FOREIGN KEY (email_cesta)
REFERENCES clientes (email);

CREATE TABLE itemCesta (
  itemCestaID INT AUTO_INCREMENT PRIMARY KEY,
  cestaID INT NOT NULL,
  productoID INT NOT NULL,
  cantidad INT NOT NULL,
  FOREIGN KEY (cestaID) REFERENCES cesta(cestaID),
  FOREIGN KEY (productoID) REFERENCES productos(productoID)
);

CREATE TABLE pedidos (
  pedidoID INT AUTO_INCREMENT PRIMARY KEY,
  email_pedido VARCHAR(100) NOT NULL,
  fechaPedido DATETIME NOT NULL,
  fechaEntrega DATETIME NOT NULL,
  totalPedido FLOAT NOT NULL,
  entregado BOOLEAN NOT NULL
);
ALTER TABLE pedidos
ADD FOREIGN KEY (email_pedido)
REFERENCES clientes (email);

CREATE TABLE itemPedido (
  itemPedidoID INT AUTO_INCREMENT PRIMARY KEY,
  pedidoID INT NOT NULL,
  productoID INT NOT NULL,
  unidades INT NOT NULL,
  FOREIGN KEY (pedidoID) REFERENCES pedidos(pedidoID),
  FOREIGN KEY (productoID) REFERENCES productos(productoID)
);
CREATE TABLE administrador (
  usuario VARCHAR(100) PRIMARY KEY,
  password VARCHAR(9) NOT NULL
);