-- Respaldo de la base de datos feb

-- Respaldo de la tabla acompanantes
CREATE TABLE `acompanantes` (
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
  `fechai` datetime NOT NULL DEFAULT current_timestamp(),
  `fechae` datetime NOT NULL,
  PRIMARY KEY (`ida`),
  KEY `idp` (`idp`),
  CONSTRAINT `acompanantes_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `pacientes` (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO acompanantes VALUES ('1','Wilbel Rivera','26883154','23','M','Bolivar','Heres','Vista hermosa','Nro 15','1','2020-11-13 13:11:58','2023-03-20 16:19:47');

-- Respaldo de la tabla camas
CREATE TABLE `camas` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `nrocama` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idh` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idc`),
  KEY `idh` (`idh`) USING BTREE,
  CONSTRAINT `camas_ibfk_1` FOREIGN KEY (`idh`) REFERENCES `habitaciones` (`idh`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO camas VALUES ('1','001','1','1');
INSERT INTO camas VALUES ('2','002','1','1');
INSERT INTO camas VALUES ('3','003','1','1');
INSERT INTO camas VALUES ('4','004','2','1');
INSERT INTO camas VALUES ('5','005','2','1');
INSERT INTO camas VALUES ('6','006','2','1');
INSERT INTO camas VALUES ('7','007','3','1');
INSERT INTO camas VALUES ('8','008','3','1');
INSERT INTO camas VALUES ('9','009','3','1');
INSERT INTO camas VALUES ('10','010','4','1');
INSERT INTO camas VALUES ('11','011','4','1');
INSERT INTO camas VALUES ('12','012','4','1');
INSERT INTO camas VALUES ('13','013','5','1');
INSERT INTO camas VALUES ('14','014','5','1');
INSERT INTO camas VALUES ('15','015','5','1');
INSERT INTO camas VALUES ('16','016','6','1');
INSERT INTO camas VALUES ('17','017','6','1');
INSERT INTO camas VALUES ('18','018','6','1');
INSERT INTO camas VALUES ('19','019','7','1');
INSERT INTO camas VALUES ('20','020','7','1');
INSERT INTO camas VALUES ('21','021','7','1');
INSERT INTO camas VALUES ('22','022','8','1');
INSERT INTO camas VALUES ('23','023','8','1');
INSERT INTO camas VALUES ('24','024','8','1');
INSERT INTO camas VALUES ('25','025','9','1');
INSERT INTO camas VALUES ('26','026','9','1');
INSERT INTO camas VALUES ('27','027','9','1');
INSERT INTO camas VALUES ('28','028','10','1');
INSERT INTO camas VALUES ('29','029','10','1');
INSERT INTO camas VALUES ('30','030','10','1');
INSERT INTO camas VALUES ('31','031','11','1');
INSERT INTO camas VALUES ('32','032','11','1');
INSERT INTO camas VALUES ('33','033','11','1');
INSERT INTO camas VALUES ('34','034','12','1');
INSERT INTO camas VALUES ('35','035','12','1');
INSERT INTO camas VALUES ('36','036','12','1');

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
  `impuestoIva` int(11) DEFAULT NULL,
  `ivaRetenido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO comprobante VALUES ('24','20240500000002','Empresa XYZ','R987654321','Avenida Secundaria 456','2024-05-25','2024-05-22','2024-05-26','ghfhfhfghfghfghfgh','23423.00','23423.00','2024-05-05 16:38:31','3748','2811');
INSERT INTO comprobante VALUES ('25','20240500000003','Empresa GHI','R135792468','Calle Comercial 123','2024-05-16','2024-05-16','2024-05-12','ewrwerwer','99999999.99','345345.00','2024-05-05 16:53:11','55255','41441');
INSERT INTO comprobante VALUES ('29','2340400000007','234','234','234','2000-02-07','2000-02-07','2000-02-07','234234','234234.11','234.00','2024-05-05 18:10:17','37','28');
INSERT INTO comprobante VALUES ('34','2024050000008','Daniel','j-1111111','calle PAEZ','2024-05-09','2024-05-14','2024-05-03','asdsdasdasdasd','123123.00','123123.00','2024-05-05 21:53:17','19700','14775');
INSERT INTO comprobante VALUES ('35','2024050000009','Empresa JKL','R246801357','Edo. Bolivar, Ciudad Caroni, Paseo','2024-05-12','2024-05-12','2024-05-12','k23RT5678','100.00','100.00','2024-05-06 08:00:32','16','12');
INSERT INTO comprobante VALUES ('36','2024050000010','Empresa JKL','R246801357','Edo. Bolivar, Ciudad Caroni, Paseo','2024-05-06','2024-05-06','2024-05-06','k23RT5678','100.00','100.00','2024-05-06 09:25:43','16','12');

-- Respaldo de la tabla habitaciones
CREATE TABLE `habitaciones` (
  `idh` int(11) NOT NULL AUTO_INCREMENT,
  `nrohabitacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO habitaciones VALUES ('1','01','0');
INSERT INTO habitaciones VALUES ('2','02','0');
INSERT INTO habitaciones VALUES ('3','03','0');
INSERT INTO habitaciones VALUES ('4','04','0');
INSERT INTO habitaciones VALUES ('5','05','0');
INSERT INTO habitaciones VALUES ('6','06','0');
INSERT INTO habitaciones VALUES ('7','07','0');
INSERT INTO habitaciones VALUES ('8','08','0');
INSERT INTO habitaciones VALUES ('9','09','0');
INSERT INTO habitaciones VALUES ('10','10','0');
INSERT INTO habitaciones VALUES ('11','11','0');
INSERT INTO habitaciones VALUES ('12','12','0');

-- Respaldo de la tabla pacientes
CREATE TABLE `pacientes` (
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
  `fechai` datetime NOT NULL DEFAULT current_timestamp(),
  `fechae` datetime DEFAULT NULL,
  `statush` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idp`),
  KEY `id_habitacion` (`idh`),
  KEY `idh` (`idh`),
  CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`idh`) REFERENCES `habitaciones` (`idh`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO pacientes VALUES ('1','Wilbel Rivera','26883154','23','M','Bolivar','Angostura del Orinoco','Marhuanta','Gripe','1','2020-11-13 13:11:58','2023-03-20 16:19:47','1');
INSERT INTO pacientes VALUES ('2','Luis Rivera','26883155','25','M','Bolivar','Angostura del Orinoco','Sabanita','Fiebre','2','2020-12-09 14:16:48','2023-03-20 16:19:47','0');

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
INSERT INTO proveedor VALUES ('20','1','j-r408906677','123123','1');
INSERT INTO proveedor VALUES ('24','1wqwqw','R246801358','123123','1');

-- Respaldo de la tabla respaldos
CREATE TABLE `respaldos` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(255) NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO respaldos VALUES ('103','-- Respaldo de la base de datos feb\n\n-- Respaldo de la tabla acompanantes\nCREATE TABLE `acompanantes` (\n  `ida` int(11) NOT NULL AUTO_INCREMENT,\n  `acompanante` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,\n  `cedula` int(11) NOT NULL,\n  `edad','respaldos_2024-05-07_20-58-21.sql','2024-05-07 20:58:21');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO usuarios VALUES ('1','26883154','123456','Nombre de mi Mascota','Coffee','1','SuperUsuario','');
INSERT INTO usuarios VALUES ('2','11171674','6473','Mi color favorito','Verde','2','Administrador','');
INSERT INTO usuarios VALUES ('3','25932740','123456','Hotel?','Trivago','3','Asistente','');

