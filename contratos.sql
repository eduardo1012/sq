-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 21:15:30
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
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `area` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `noContrato` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cesta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `licSap` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `conSap` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pedSap` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cuentaCargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `claseCoste` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `solicitadoDls` int(50) NOT NULL,
  `solicitadoMxn` int(50) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_proveedor` int(15) NOT NULL,
  `recepcion` date NOT NULL,
  `visita` date NOT NULL,
  `solicitudCot` date NOT NULL,
  `fechaContrato` date NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `notas` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contratadoDls` int(50) NOT NULL,
  `ContratadoMxn` int(50) NOT NULL,
  `ahorroNegDls` int(50) NOT NULL,
  `ahorroNegMxn` int(50) NOT NULL,
  `ahorroNegPorc` int(50) NOT NULL,
  `cotizacionDls` int(50) NOT NULL,
  `cotizacionMxn` int(50) NOT NULL,
  `ahorroLicDls` int(50) NOT NULL,
  `ahorroLicMxn` int(50) NOT NULL,
  `ahorroLicPorc` int(50) NOT NULL,
  `precioGmDls` int(50) NOT NULL,
  `precioGmMxn` int(50) NOT NULL,
  `precioGmPorc` int(50) NOT NULL,
  `finiquitoDls` int(50) NOT NULL,
  `finiquitoMxn` int(50) NOT NULL,
  `finiquitoPorc` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` int(5) NOT NULL,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  `currencyCode` char(3) DEFAULT NULL,
  `capital` varchar(30) DEFAULT NULL,
  `continentName` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minutas`
--

CREATE TABLE `minutas` (
  `id` int(5) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_proveedor` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `mutuo` int(25) NOT NULL,
  `refrendo` int(25) NOT NULL,
  `desempeño` int(25) NOT NULL,
  `abono` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_proveedor`, `fecha`, `mutuo`, `refrendo`, `desempeño`, `abono`) VALUES
(555, '2019-11-26', 500, 500, 4000, 500),
(555, '2019-11-26', 500, 500, 4000, 500);

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `minutas`
--
ALTER TABLE `minutas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT de la tabla `minutas`
--
ALTER TABLE `minutas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
