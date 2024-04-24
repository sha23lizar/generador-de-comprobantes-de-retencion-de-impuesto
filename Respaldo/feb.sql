-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-06-2023 a las 14:14:42
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

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

DROP TABLE IF EXISTS `acompanantes`;
CREATE TABLE IF NOT EXISTS `acompanantes` (
  `ida` int(11) NOT NULL AUTO_INCREMENT,
  `acompanante` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cedula` int(11) NOT NULL,
  `edad` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexo` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estado` varchar(255) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `parroquia` varchar(60) NOT NULL,
  `habitacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idp` int(11) NOT NULL,
  `fechai` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechae` datetime NOT NULL,
  PRIMARY KEY (`ida`),
  KEY `idp` (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acompanantes`
--

INSERT INTO `acompanantes` (`ida`, `acompanante`, `cedula`, `edad`, `sexo`, `estado`, `municipio`, `parroquia`, `habitacion`, `idp`, `fechai`, `fechae`) VALUES
(1, 'Wilbel Rivera', 26883154, '23', 'M', 'Bolivar', 'Heres', 'Vista hermosa', 'Nro 15', 1, '2020-11-13 13:11:58', '2023-03-20 16:19:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camas`
--

DROP TABLE IF EXISTS `camas`;
CREATE TABLE IF NOT EXISTS `camas` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `nrocama` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idh` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idc`),
  KEY `idh` (`idh`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

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
-- Estructura de tabla para la tabla `habitaciones`
--

DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE IF NOT EXISTS `habitaciones` (
  `idh` int(11) NOT NULL AUTO_INCREMENT,
  `nrohabitacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `paciente` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cedula` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(9) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estado` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `patologia` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idh` int(11) NOT NULL,
  `fechai` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechae` datetime DEFAULT NULL,
  `statush` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idp`),
  KEY `id_habitacion` (`idh`),
  KEY `idh` (`idh`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idp`, `paciente`, `cedula`, `edad`, `sexo`, `estado`, `municipio`, `parroquia`, `patologia`, `idh`, `fechai`, `fechae`, `statush`) VALUES
(1, 'Wilbel Rivera', 26883154, 23, 'M', 'Bolivar', 'Angostura del Orinoco', 'Marhuanta', 'Gripe', 1, '2020-11-13 13:11:58', '2023-03-20 16:19:47', 1),
(2, 'Luis Rivera', 26883155, 25, 'M', 'Bolivar', 'Angostura del Orinoco', 'Sabanita', 'Fiebre', 2, '2020-12-09 14:16:48', '2023-03-20 16:19:47', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldos`
--

DROP TABLE IF EXISTS `respaldos`;
CREATE TABLE IF NOT EXISTS `respaldos` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respaldos`
--

INSERT INTO `respaldos` (`idr`, `nombre`, `fecha`) VALUES
(60, 'respaldo26062023-140335.sql', '2023-06-26 10:03:35'),
(61, 'respaldo26062023-140400.sql', '2023-06-26 10:04:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(8) DEFAULT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `pregunta` varchar(50) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idu`, `cedula`, `contra`, `pregunta`, `respuesta`, `rol`, `usuario`, `foto`) VALUES
(1, '26883154', '123456', 'Nombre de mi Mascota', 'Coffee', 1, 'SuperUsuario', ''),
(2, '11171674', '6473', 'Mi color favorito', 'Verde', 2, 'Administrador', ''),
(3, '25932740', '123456', 'Hotel?', 'Trivago', 3, 'Asistente', '');

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
