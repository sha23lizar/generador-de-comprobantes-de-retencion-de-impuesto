-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2024 a las 01:31:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `feb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompanantes`
--

CREATE TABLE `acompanantes` (
  `ida` int(11) NOT NULL,
  `acompanante` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cedula` int(11) NOT NULL,
  `edad` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexo` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estado` varchar(255) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `parroquia` varchar(60) NOT NULL,
  `habitacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idp` int(11) NOT NULL,
  `fechai` datetime NOT NULL DEFAULT current_timestamp(),
  `fechae` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `acompanantes`
--

INSERT INTO `acompanantes` (`ida`, `acompanante`, `cedula`, `edad`, `sexo`, `estado`, `municipio`, `parroquia`, `habitacion`, `idp`, `fechai`, `fechae`) VALUES
(1, 'Wilbel Rivera', 26883154, '23', 'M', 'Bolivar', 'Heres', 'Vista hermosa', 'Nro 15', 1, '2020-11-13 13:11:58', '2023-03-20 16:19:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camas`
--

CREATE TABLE `camas` (
  `idc` int(11) NOT NULL,
  `nrocama` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idh` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `camas`
--

INSERT INTO `camas` (`idc`, `nrocama`, `idh`, `status`) VALUES
(1, '001', 1, 1),
(2, '002', 1, 1),
(3, '003', 1, 1),
(4, '004', 2, 1),
(5, '005', 2, 1),
(6, '006', 2, 1),
(7, '007', 3, 1),
(8, '008', 3, 1),
(9, '009', 3, 1),
(10, '010', 4, 1),
(11, '011', 4, 1),
(12, '012', 4, 1),
(13, '013', 5, 1),
(14, '014', 5, 1),
(15, '015', 5, 1),
(16, '016', 6, 1),
(17, '017', 6, 1),
(18, '018', 6, 1),
(19, '019', 7, 1),
(20, '020', 7, 1),
(21, '021', 7, 1),
(22, '022', 8, 1),
(23, '023', 8, 1),
(24, '024', 8, 1),
(25, '025', 9, 1),
(26, '026', 9, 1),
(27, '027', 9, 1),
(28, '028', 10, 1),
(29, '029', 10, 1),
(30, '030', 10, 1),
(31, '031', 11, 1),
(32, '032', 11, 1),
(33, '033', 11, 1),
(34, '034', 12, 1),
(35, '035', 12, 1),
(36, '036', 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante`
--

CREATE TABLE `comprobante` (
  `id` int(11) NOT NULL,
  `nroComprobante` varchar(50) NOT NULL,
  `proveedor` varchar(100) NOT NULL,
  `rifProveedor` varchar(20) DEFAULT NULL,
  `direccionProveedor` varchar(255) DEFAULT NULL,
  `fEmision` date NOT NULL,
  `fEntrega` date NOT NULL,
  `fFactura` date NOT NULL,
  `nroControl` varchar(20) NOT NULL,
  `totalFacturado` decimal(10,2) NOT NULL,
  `baseImponible` decimal(10,2) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comprobante`
--

INSERT INTO `comprobante` (`id`, `nroComprobante`, `proveedor`, `rifProveedor`, `direccionProveedor`, `fEmision`, `fEntrega`, `fFactura`, `nroControl`, `totalFacturado`, `baseImponible`, `fechaRegistro`) VALUES
(1, '1111111111', 'Anzoategui', 'j-22222222222222', 'calle bolivar casa nro 15', '2024-04-12', '2024-04-12', '2024-04-12', 'z111111111111', 11111.00, 11111111.00, '2024-04-11 12:36:05'),
(2, '1', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 13:57:23'),
(3, '18383813133333', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 13:58:47'),
(4, '1111111313331', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 14:06:39'),
(5, '1313131313313', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 14:23:04'),
(6, '2222222222222', 'Merida', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.10, 190.10, '2024-04-11 15:00:12'),
(7, '4545454545445', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.10, 99999999.99, '2024-04-11 15:16:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `idh` int(11) NOT NULL,
  `nrohabitacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`idh`, `nrohabitacion`, `estatus`) VALUES
(1, '01', 0),
(2, '02', 0),
(3, '03', 0),
(4, '04', 0),
(5, '05', 0),
(6, '06', 0),
(7, '07', 0),
(8, '08', 0),
(9, '09', 0),
(10, '10', 0),
(11, '11', 0),
(12, '12', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idp` int(11) NOT NULL,
  `paciente` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cedula` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(9) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estado` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `patologia` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idh` int(11) NOT NULL,
  `fechai` datetime NOT NULL DEFAULT current_timestamp(),
  `fechae` datetime DEFAULT NULL,
  `statush` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idp`, `paciente`, `cedula`, `edad`, `sexo`, `estado`, `municipio`, `parroquia`, `patologia`, `idh`, `fechai`, `fechae`, `statush`) VALUES
(1, 'Wilbel Rivera', 26883154, 23, 'M', 'Bolivar', 'Angostura del Orinoco', 'Marhuanta', 'Gripe', 1, '2020-11-13 13:11:58', '2023-03-20 16:19:47', 1),
(2, 'Luis Rivera', 26883155, 25, 'M', 'Bolivar', 'Angostura del Orinoco', 'Sabanita', 'Fiebre', 2, '2020-12-09 14:16:48', '2023-03-20 16:19:47', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombreProveedor` varchar(50) NOT NULL,
  `rifProveedor` varchar(100) NOT NULL,
  `direccionProveedor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombreProveedor`, `rifProveedor`, `direccionProveedor`) VALUES
(5, 'fernando', 'j-22222222', 'calle bolivar abasto nro 23'),
(6, 'ALVARO', 'j-1111111', 'calle PAEZ'),
(7, 'raul.ca', '4535646576575', ''),
(17, 'ALVARO', 'j-1111111', 'calle PAEZ'),
(18, 'ALVARO', 'j-1111111', 'calle PAEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldos`
--

CREATE TABLE `respaldos` (
  `idr` int(11) NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `respaldos`
--

INSERT INTO `respaldos` (`idr`, `nombre`, `fecha`) VALUES
(60, 'respaldo26062023-140335.sql', '2023-06-26 10:03:35'),
(61, 'respaldo26062023-140400.sql', '2023-06-26 10:04:00'),
(62, 'respaldo11042024-151605.sql', '2024-04-11 09:16:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idu` int(11) NOT NULL,
  `cedula` varchar(8) DEFAULT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `pregunta` varchar(50) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idu`, `cedula`, `contra`, `pregunta`, `respuesta`, `rol`, `usuario`, `foto`) VALUES
(1, '26883154', '123456', 'Nombre de mi Mascota', 'Coffee', 1, 'SuperUsuario', '766bb9841a799a75fc0813417aeb2812.png'),
(2, '11171674', '6473', 'Mi color favorito', 'Verde', 2, 'Administrador', ''),
(3, '25932740', '123456', 'Hotel?', 'Trivago', 3, 'Asistente', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acompanantes`
--
ALTER TABLE `acompanantes`
  ADD PRIMARY KEY (`ida`),
  ADD KEY `idp` (`idp`);

--
-- Indices de la tabla `camas`
--
ALTER TABLE `camas`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `idh` (`idh`) USING BTREE;

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`idh`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `id_habitacion` (`idh`),
  ADD KEY `idh` (`idh`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respaldos`
--
ALTER TABLE `respaldos`
  ADD PRIMARY KEY (`idr`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acompanantes`
--
ALTER TABLE `acompanantes`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `camas`
--
ALTER TABLE `camas`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `idh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `respaldos`
--
ALTER TABLE `respaldos`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acompanantes`
--
ALTER TABLE `acompanantes`
  ADD CONSTRAINT `acompanantes_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `pacientes` (`idp`);

--
-- Filtros para la tabla `camas`
--
ALTER TABLE `camas`
  ADD CONSTRAINT `camas_ibfk_1` FOREIGN KEY (`idh`) REFERENCES `habitaciones` (`idh`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`idh`) REFERENCES `habitaciones` (`idh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
