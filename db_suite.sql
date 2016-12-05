-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2016 a las 17:51:24
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_suite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_recibo`
--

CREATE TABLE `tc_recibo` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `cantN` int(11) NOT NULL,
  `cantS` int(11) NOT NULL,
  `concepto` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `director` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `codigo_p` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ts_login`
--

CREATE TABLE `ts_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nivel` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ts_persona`
--

CREATE TABLE `ts_persona` (
  `id` int(11) NOT NULL,
  `p_nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `s_nombre` varchar(100) NOT NULL,
  `p_apellido` varchar(100) NOT NULL,
  `s_apellido` varchar(100) NOT NULL,
  `cedula` int(9) NOT NULL,
  `direccion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_reg` date NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `id_zona` int(7) NOT NULL,
  `codigo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ts_solicitud`
--

CREATE TABLE `ts_solicitud` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `nombre_persona` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido_persona` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cedula_persona` int(11) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `fecha` datetime NOT NULL,
  `remitida` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `motivo_nota` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Informe_recipe` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `copia_cedula` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'se debe describir que es lo que se esta solicitando, pore ejemplo: silla de ruedas, jeringas',
  `presupuesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ts_tipo_solicitud`
--

CREATE TABLE `ts_tipo_solicitud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ts_tipo_solicitud`
--

INSERT INTO `ts_tipo_solicitud` (`id`, `nombre`) VALUES
(1, 'Medicinas'),
(2, 'Materiales quirurjicos'),
(3, 'Ayuda tecnica'),
(4, 'Ayuda economica para operaciones'),
(5, 'Ayuda economica para examenes medicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ts_zonas`
--

CREATE TABLE `ts_zonas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ts_zonas`
--

INSERT INTO `ts_zonas` (`id`, `nombre`) VALUES
(1, 'primera zona'),
(2, 'segunda zona'),
(3, 'cuarta zona'),
(4, 'trercera zona');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tc_recibo`
--
ALTER TABLE `tc_recibo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `ts_login`
--
ALTER TABLE `ts_login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ts_persona`
--
ALTER TABLE `ts_persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `ts_solicitud`
--
ALTER TABLE `ts_solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ts_tipo_solicitud`
--
ALTER TABLE `ts_tipo_solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ts_zonas`
--
ALTER TABLE `ts_zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tc_recibo`
--
ALTER TABLE `tc_recibo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ts_login`
--
ALTER TABLE `ts_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ts_persona`
--
ALTER TABLE `ts_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `ts_solicitud`
--
ALTER TABLE `ts_solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ts_tipo_solicitud`
--
ALTER TABLE `ts_tipo_solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ts_zonas`
--
ALTER TABLE `ts_zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
