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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO comprobante VALUES ('24','20240500000002','Empresa XYZ','R987654321','Avenida Secundaria 456','2024-05-25','2024-05-22','2024-05-26','ghfhfhfghfghfghfgh','23423.00','23423.00','2024-05-05 16:38:31','3748.00','2811.00','sahdhasdjasd');
INSERT INTO comprobante VALUES ('25','20240500000003','Empresa GHI','R135792468','Calle Comercial 123','2024-05-16','2024-05-16','2024-05-12','ewrwerwer','99999999.99','345345.00','2024-05-05 16:53:11','55255.00','41441.00','');
INSERT INTO comprobante VALUES ('29','2340400000007','234','234','234','2000-02-07','2000-02-07','2000-02-07','234234','234234.11','234.00','2024-05-05 18:10:17','37.00','28.00','');
INSERT INTO comprobante VALUES ('34','2024050000008','Daniel','j-1111111','calle PAEZ','2024-05-09','2024-05-14','2024-05-03','asdsdasdasdasd','123123.00','123123.00','2024-05-05 21:53:17','19700.00','14775.00','');
INSERT INTO comprobante VALUES ('35','2024050000009','Empresa JKL','R246801357','Edo. Bolivar, Ciudad Caroni, Paseo','2024-05-12','2024-05-12','2024-05-12','k23RT5678','100.00','100.00','2024-05-06 08:00:32','16.00','12.00','');
INSERT INTO comprobante VALUES ('36','2024050000010','Empresa JKL','R246801357','Edo. Bolivar, Ciudad Caroni, Paseo','2024-05-06','2024-05-06','2024-05-06','k23RT5678','100.00','100.00','2024-05-06 09:25:43','16.00','12.00','');
INSERT INTO comprobante VALUES ('37','2024050000011','cali','j-3212312','coquitos','2024-05-16','2024-05-25','2024-05-22','xkbk1j2b3k12','123213.00','1231.00','2024-05-08 08:35:46','197.00','148.00','0000121212323');

-- Respaldo de la tabla proveedor
CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProveedor` varchar(50) NOT NULL,
  `rifProveedor` varchar(100) NOT NULL,
  `direccionProveedor` varchar(255) DEFAULT NULL,
  `seudonimo` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO proveedor VALUES ('5','fernando','j-22222222','calle bolivar abasto nro 23','Luis');
INSERT INTO proveedor VALUES ('6','ALVARO','j-1111111','calle PAEZ','calle PAEZ');
INSERT INTO proveedor VALUES ('7','raul.ca','4535646576575','','juan');
INSERT INTO proveedor VALUES ('17','ALVARO','j-1111111','calle PAEZ','alvaro');
INSERT INTO proveedor VALUES ('20','manolo','j-r408906677','123123','asd');
INSERT INTO proveedor VALUES ('24','1wqwqw','R246801358','123123','1');

-- Respaldo de la tabla respaldos
CREATE TABLE `respaldos` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(255) NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO respaldos VALUES ('105','-- Respaldo de la base de datos feb\n\n-- Respaldo de la tabla comprobante\nCREATE TABLE `comprobante` (\n  `id` int(11) NOT NULL AUTO_INCREMENT,\n  `nroComprobante` varchar(50) NOT NULL,\n  `proveedor` varchar(250) NOT NULL,\n  `rifProveedor` varchar(250) NOT N','respaldos_2024-05-08_10-30-12.sql','2024-05-08 10:30:12');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO usuarios VALUES ('1','26883154','123456','Nombre de mi Mascota','Coffee','1','SuperUsuario','');
INSERT INTO usuarios VALUES ('2','11171674','123456','Mi color favorito','Verde','2','Administrador','');
INSERT INTO usuarios VALUES ('3','25932740','123456','Hotel?','Trivago','3','Asistente','');
INSERT INTO usuarios VALUES ('13','26138965','123456','quien?','yo','2','Daniel Gomez','user-default.jpg');
