-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2024 a las 17:09:21
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
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `impuestoIva` varchar(50) DEFAULT NULL,
  `ivaRetenido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comprobante`
--

INSERT INTO `comprobante` (`id`, `nroComprobante`, `proveedor`, `rifProveedor`, `direccionProveedor`, `fEmision`, `fEntrega`, `fFactura`, `nroControl`, `totalFacturado`, `baseImponible`, `fechaRegistro`, `impuestoIva`, `ivaRetenido`) VALUES
(1, '1111111111', 'Anzoategui', 'j-22222222222222', 'calle bolivar casa nro 15', '2024-04-12', '2024-04-12', '2024-04-12', 'z111111111111', 11111.00, 11111111.00, '2024-04-11 12:36:05', NULL, NULL),
(2, '1', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 13:57:23', NULL, NULL),
(3, '18383813133333', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 13:58:47', NULL, NULL),
(4, '1111111313331', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 14:06:39', NULL, NULL),
(5, '1313131313313', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.00, 190.00, '2024-04-11 14:23:04', NULL, NULL),
(6, '2222222222222', 'Merida', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.10, 190.10, '2024-04-11 15:00:12', NULL, NULL),
(7, '4545454545445', 'Bolivar', '', '', '2024-04-25', '2024-04-25', '2024-04-25', 'Z1B8046526', 190.10, 99999999.99, '2024-04-11 15:16:52', NULL, NULL),
(8, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:10', '112', '112'),
(9, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:19', '112', '112'),
(10, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:36', '112', '112'),
(11, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:38', '112', '112'),
(12, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:38', '112', '112'),
(13, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:38', '112', '112'),
(14, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:38', '112', '112'),
(15, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:39', '112', '112'),
(16, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:39', '112', '112'),
(17, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:39', '112', '112'),
(18, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:39', '112', '112'),
(19, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:39', '112', '112'),
(20, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:39', '112', '112'),
(21, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:40', '112', '112'),
(22, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:42', '112', '112'),
(23, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:42', '112', '112'),
(24, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:42', '112', '112'),
(25, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:42', '112', '112'),
(26, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:43', '112', '112'),
(27, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:43', '112', '112'),
(28, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:44', '112', '112'),
(29, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:44', '112', '112'),
(30, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:45', '112', '112'),
(31, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:44:45', '112', '112'),
(32, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:20', '112', '112'),
(33, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:20', '112', '112'),
(34, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:20', '112', '112'),
(35, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:20', '112', '112'),
(36, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:21', '112', '112'),
(37, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:21', '112', '112'),
(38, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:21', '112', '112'),
(39, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:21', '112', '112'),
(40, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:21', '112', '112'),
(41, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:21', '112', '112'),
(42, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:22', '112', '112'),
(43, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:22', '112', '112'),
(44, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:22', '112', '112'),
(45, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:22', '112', '112'),
(46, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:23', '112', '112'),
(47, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:23', '112', '112'),
(48, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:23', '112', '112'),
(49, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:23', '112', '112'),
(50, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:23', '112', '112'),
(51, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:23', '112', '112'),
(52, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:24', '112', '112'),
(53, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:24', '112', '112'),
(54, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:24', '112', '112'),
(55, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:24', '112', '112'),
(56, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:25', '112', '112'),
(57, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:25', '112', '112'),
(58, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:25', '112', '112'),
(59, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:25', '112', '112'),
(60, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:25', '112', '112'),
(61, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:25', '112', '112'),
(62, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:26', '112', '112'),
(63, '112', '112', '112', '112', '0000-00-00', '0000-00-00', '0000-00-00', '112', 112.00, 112.00, '2024-04-30 14:45:26', '112', '112');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;