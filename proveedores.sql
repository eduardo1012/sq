-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 21:16:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contratos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(15) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `noExterior` int(10) NOT NULL,
  `noInterior` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `colonia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(7) NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `responsable` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `movil` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `mail1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `RFC` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono2` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `eliminado` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `calle`, `noExterior`, `noInterior`, `colonia`, `cp`, `pais`, `estado`, `municio`, `responsable`, `movil`, `mail1`, `RFC`, `telefono1`, `telefono2`, `logo`, `eliminado`) VALUES
(555, 'Pedro Picapiedra', 'calle verdadera', 300, 'sn     ', 'colonia inexistente    ', 78000, 'calle falsa 444', 'San Luis Potosi', 'SAN LUIS POTOSI', 'Manilito vende paletas', '999', '', 'Arochi Solutions', '8171893', 'Viernes', './img/', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
