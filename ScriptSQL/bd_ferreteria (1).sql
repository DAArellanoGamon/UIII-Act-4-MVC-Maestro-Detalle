-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2023 a las 21:03:24
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `precio_p` int(10) NOT NULL,
  `tamano` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nit`, `nombre`, `marca`, `color`, `categoria`, `precio`, `precio_p`, `tamano`) VALUES
(898909, '1010', 'martillo', 'ambec', 'cromado', 'herramienta', 100, 50, '10lb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `origen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `transporte` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `calidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nit`, `nombre`, `origen`, `transporte`, `telefono`, `ubicacion`, `nombre_empresa`, `calidad`, `categoria`) VALUES
('1010', 'david', 'chihuahua', 'terrestre', '656687744', 'calle melon', 'anbec', 'media', 'herramienta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `Producto_FKIndex1` (`nit`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nit`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898910;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `proveedor` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
