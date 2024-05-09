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

INSERT INTO comprobante VALUES ('38','20240500000001','fernando','j-22222222','calle bolivar abasto nro 23','2024-05-17','2024-05-23','2024-05-03','control','12312.00','234.00','2024-05-08 11:12:37','37.44','28.08','factura');
INSERT INTO comprobante VALUES ('40','20240500000002','ALVARO','j-1111111','calle PAEZ','2024-05-08','2024-05-16','2024-05-08','z7szxcsfet','40.00','34.48','2024-05-08 13:16:52','5.52','4.14','0001334545');

-- Respaldo de la tabla proveedor
CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProveedor` varchar(50) NOT NULL,
  `rifProveedor` varchar(100) NOT NULL,
  `direccionProveedor` varchar(255) DEFAULT NULL,
  `seudonimo` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO proveedor VALUES ('6','ALVARO','j-1111111','calle PAEZ','calle PAEZ');
INSERT INTO proveedor VALUES ('7','raul.ca','4535646576575','','juan');
INSERT INTO proveedor VALUES ('17','ALVARO','j-1111111','calle PAEZ','alvaro');
INSERT INTO proveedor VALUES ('20','manolo','j-r408906677','123123','asd');

-- Respaldo de la tabla respaldos
CREATE TABLE `respaldos` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(255) NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


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

INSERT INTO usuarios VALUES ('1','26883154','123456','Nombre de mi Mascota','Coffee','1','SuperUsuario','');

