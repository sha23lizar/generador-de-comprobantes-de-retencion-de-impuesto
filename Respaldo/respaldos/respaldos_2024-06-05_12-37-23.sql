-- Respaldo de la base de datos feb

-- Respaldo de la tabla comprobante
CREATE TABLE `comprobante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nroComprobante` varchar(50) NOT NULL,
  `proveedor` varchar(250) NOT NULL,
  `rifProveedor` varchar(250) NOT NULL,
  `direccionProveedor` varchar(255) NOT NULL,
  `fEmision` varchar(20) NOT NULL,
  `fEntrega` varchar(20) NOT NULL,
  `fFactura` varchar(20) NOT NULL,
  `nroControl` varchar(20) NOT NULL,
  `totalFacturado` decimal(10,2) NOT NULL,
  `baseImponible` decimal(10,2) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `impuestoIva` decimal(11,2) DEFAULT NULL,
  `ivaRetenido` decimal(11,2) DEFAULT NULL,
  `nroFactura` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Respaldo de la tabla comprobante_isr
CREATE TABLE `comprobante_isr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nroComprobante` varchar(50) NOT NULL,
  `proveedor_isr` varchar(250) NOT NULL,
  `rifProveedor` varchar(255) NOT NULL,
  `direccionProveedor` varchar(255) NOT NULL,
  `fEmision` varchar(20) NOT NULL,
  `fEntrega` varchar(20) NOT NULL,
  `fFactura` varchar(20) NOT NULL,
  `nroControl` varchar(20) NOT NULL,
  `totalFacturado` decimal(20,2) NOT NULL,
  `baseImponible` decimal(20,2) NOT NULL,
  `fechaRegistro` date NOT NULL DEFAULT current_timestamp(),
  `impuestoIva` decimal(20,2) NOT NULL,
  `ivaRetenido` decimal(20,2) NOT NULL,
  `nroFactura` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Respaldo de la tabla proveedor
CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProveedor` varchar(50) NOT NULL,
  `rifProveedor` varchar(100) NOT NULL,
  `direccionProveedor` varchar(255) DEFAULT NULL,
  `seudonimo` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Respaldo de la tabla proveedor_isr
CREATE TABLE `proveedor_isr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProveedor` varchar(50) NOT NULL,
  `rifProveedor` varchar(100) NOT NULL,
  `direccionProveedor` varchar(255) DEFAULT NULL,
  `seudonimo` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Respaldo de la tabla respaldos
CREATE TABLE `respaldos` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(255) NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO respaldos VALUES ('116','-- Respaldo de la base de datos feb\n\n-- Respaldo de la tabla comprobante\nCREATE TABLE `comprobante` (\n  `id` int(11) NOT NULL AUTO_INCREMENT,\n  `nroComprobante` varchar(50) NOT NULL,\n  `proveedor` varchar(250) NOT NULL,\n  `rifProveedor` varchar(250) NOT N','respaldos_2024-06-05_10-05-01.sql','2024-06-05 10:05:01');
INSERT INTO respaldos VALUES ('117','-- Respaldo de la base de datos feb\n\n-- Respaldo de la tabla comprobante\nCREATE TABLE `comprobante` (\n  `id` int(11) NOT NULL AUTO_INCREMENT,\n  `nroComprobante` varchar(50) NOT NULL,\n  `proveedor` varchar(250) NOT NULL,\n  `rifProveedor` varchar(250) NOT N','respaldos_2024-06-05_10-13-46.sql','2024-06-05 10:13:46');

-- Respaldo de la tabla usuarios
CREATE TABLE `usuarios` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(8) DEFAULT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `pregunta` varchar(50) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO usuarios VALUES ('1','12345678','123456','Nombre de mi Mascota','Coffee','1','SuperUsuario','');

