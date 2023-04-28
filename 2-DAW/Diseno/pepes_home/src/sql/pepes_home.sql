-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2023 a las 12:49:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pepes_home`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alergenos`
--

CREATE TABLE `alergenos` (
  `CodAlergeno` int(11) NOT NULL,
  `Descripcion_al` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alergenos`
--

INSERT INTO `alergenos` (`CodAlergeno`, `Descripcion_al`) VALUES
(1, 'altramuz'),
(2, 'apio'),
(3, 'cacahuetes'),
(4, 'crustaceos'),
(5, 'frutos secos'),
(6, 'gluten'),
(7, 'huevos'),
(8, 'lacteos'),
(9, 'moluscos'),
(10, 'mostaza'),
(11, 'pescado'),
(12, 'sesamo'),
(13, 'soja'),
(14, 'sulfitos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Contraseña` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `DNI` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Rol` enum('admin','user') COLLATE utf8_spanish2_ci NOT NULL,
  `Puntos` varchar(5) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Nombre`, `Apellidos`, `Contraseña`, `Fecha_nacimiento`, `Email`, `Telefono`, `Direccion`, `DNI`, `Rol`, `Puntos`) VALUES
('Diego', 'Casero Martin', '111111', '2001-06-06', 'diegocasero@gail.com', '606735326', 'C/Jeronima Llorente 18', '50571052D', 'user', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `CodMenu` int(11) NOT NULL,
  `PrecioMenu` decimal(4,2) NOT NULL,
  `TipoMenu` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`CodMenu`, `PrecioMenu`, `TipoMenu`) VALUES
(1, '24.99', 'Clasico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `CodPlato` int(11) NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `PrecioPlato` decimal(4,2) NOT NULL,
  `TipoProducto` enum('primero','segundo','postre','bebida') COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`CodPlato`, `Nombre`, `Descripcion`, `PrecioPlato`, `TipoProducto`) VALUES
(1, 'Shio Ramen', 'Es una de las primeras variedades de ramen de las que se tiene constancia y una de las formas más antiguas de elaborar el ramen o darle sabor. Destaca por su sabor clasico. Se elabora con un caldo a base de pollo y cerdo, con una cantidad de algas qu', '12.99', 'segundo'),
(2, 'Miso Ramen', 'Es un ramen hecho con caldo de pollo y cerdo por lo general al que se le añade miso o pasta de miso. Suele ser algo más espeso debido a la pasta de miso. Es originario de Hokkaido, es considero uno de los caldos de ramen más jóvenes, fue desarrollado', '10.99', 'segundo'),
(3, 'Shoyu Ramen', 'Tenemos un caldo hecho con pollo y cerdo (junto con caldo dashi) para añadir salsa de soja al mismo. Un caldo no tan espeso y de color oscuro debido a la salsa de soja. Generalmente se le acompaña de carne (chashu) y si visitas Tokyo, es uno de los m', '14.99', 'segundo'),
(4, 'Tonkotsu Ramen', 'Un ramen elaborado con caldo hecho con huesos de cerdo, es uno de los ramen más sabrosos y famosos. Para ser considerado un caldo Tonkotsu auténtico debe hervir desde 8 hasta 20 horas a fuego lento, es una de las especialidaes de nuestro cheff Bae Pe', '12.99', 'segundo'),
(5, 'Gyeongdan', 'El Gyeongdan está hecho de arroz relleno de frijol rojo y envuelto en como semillas de sésamo o frijoles. Es perfecto para ocasiones como los cumpleaños.', '7.99', 'postre'),
(6, 'Songpyeon', 'Cuando llega el otoño, especialmente cuando en Corea celebramos Chuseok, es muy habitual encontrarnos con Songpyeon. Como es habitual en los postres, este está también hecho con arroz relleno de soja, sésamo o frijoles rojos, entre muchas otras varie', '7.99', 'postre'),
(7, 'Dasik', '¿Te apetece una taza de té? Entonces este postre es perfecto para ti. Con su aspecto tan elegante, el Dasik nos hace entender que era un postre generalmente reservado para las clases altas. Es por este motivo que solemos encontrarnos con este postre ', '10.99', 'postre'),
(8, 'Yaksik', 'Con este postre entramos en el mundo del arroz glutinoso, con algunas características que no son tan comunes en otros postres. Suele mezclarse con nueces y jujubes y se le da una forma rectangular que se suele servir en un bol.Un sabor dulce más simi', '8.99', 'postre'),
(9, 'Kimbap', 'Se trata de un banchan(entrante) que por aspecto nos recordará al sushi ya que se tratan de rollos de arroz envueltos en algas. Los podemos encontrar rellenos de vegetales varios o de carne.', '12.99', 'segundo'),
(10, 'Bibimbap', 'La traducción literal es \"arroz mezclado\" y es uno de los platos más populares. Se trata de un cuenco con arroz en la base y sobre él se añade carne o pescado que se termina con un huevo frito o una yema de huevo en la última capa.', '10.99', 'primero'),
(11, 'Manduguk', 'Es posible que alguna vez hayamos visto ya esta especie de empanadilla hechas al vapor. Pueden ir rellenas con verduras o carnes, principalmente ternera. Un sabor unico', '12.99', 'primero'),
(12, 'Galbi', 'El galbi son costillas tanto de cerdo como de vaca que se preparan asadas con soja y salsa agridulce que le da una textura y jugosidad unica.Os animamos a probar esta especialidad del cheff con sus 12 horas de preparación.', '10.99', 'primero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos_alergenos`
--

CREATE TABLE `platos_alergenos` (
  `CodPlato_a` int(11) NOT NULL,
  `CodAlergeno_a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `platos_alergenos`
--

INSERT INTO `platos_alergenos` (`CodPlato_a`, `CodAlergeno_a`) VALUES
(2, 6),
(10, 7),
(10, 11),
(11, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos_menu`
--

CREATE TABLE `platos_menu` (
  `CodPlato_r` int(11) NOT NULL,
  `CodMenu_r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `platos_menu`
--

INSERT INTO `platos_menu` (`CodPlato_r`, `CodMenu_r`) VALUES
(2, 1),
(7, 1),
(12, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alergenos`
--
ALTER TABLE `alergenos`
  ADD PRIMARY KEY (`CodAlergeno`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Email`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`CodMenu`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`CodPlato`);

--
-- Indices de la tabla `platos_alergenos`
--
ALTER TABLE `platos_alergenos`
  ADD PRIMARY KEY (`CodPlato_a`,`CodAlergeno_a`),
  ADD KEY `CodAlergeno_a` (`CodAlergeno_a`);

--
-- Indices de la tabla `platos_menu`
--
ALTER TABLE `platos_menu`
  ADD PRIMARY KEY (`CodPlato_r`,`CodMenu_r`),
  ADD KEY `CodMenu_r` (`CodMenu_r`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `CodMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `CodPlato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1314;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `platos_alergenos`
--
ALTER TABLE `platos_alergenos`
  ADD CONSTRAINT `platos_alergenos_ibfk_1` FOREIGN KEY (`CodAlergeno_a`) REFERENCES `alergenos` (`CodAlergeno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `platos_alergenos_ibfk_2` FOREIGN KEY (`CodPlato_a`) REFERENCES `platos` (`CodPlato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `platos_menu`
--
ALTER TABLE `platos_menu`
  ADD CONSTRAINT `platos_menu_ibfk_1` FOREIGN KEY (`CodMenu_r`) REFERENCES `menus` (`CodMenu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `platos_menu_ibfk_2` FOREIGN KEY (`CodPlato_r`) REFERENCES `platos` (`CodPlato`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
