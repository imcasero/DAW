-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 12:21:15
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
-- Base de datos: `prueba_ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombres_edades`
--

CREATE TABLE `nombres_edades` (
  `Nombre` varchar(25) NOT NULL,
  `Apellido_1` varchar(25) NOT NULL,
  `Apellido_2` varchar(25) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nombres_edades`
--

INSERT INTO `nombres_edades` (`Nombre`, `Apellido_1`, `Apellido_2`, `Edad`) VALUES
('Diego', 'Casero', 'Martin', 21),
('Juan', 'Sanchez', 'Rubio', 56),
('Abedul', 'Martin', 'Alcaraz', 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
