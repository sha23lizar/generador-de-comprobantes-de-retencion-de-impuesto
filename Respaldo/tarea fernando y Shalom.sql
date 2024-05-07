-- Crea base de datos
CREATE DATABASE pruebadb;

-- Crear tablas de la base de datos
CREATE TABLE pruebadb.alumnos (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    cedula VARCHAR(50) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)  
);

CREATE TABLE pruebadb.profesores (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    cedula VARCHAR(50) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE pruebadb.sedes (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    lugar VARCHAR(50) NOT NULL,
    capacidad INT NOT NULL,
    director VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);

-- Insertar datos a la tabla alumnos

INSERT INTO pruebadb.alumnos (nombre, apellido, cedula, telefono) VALUES ("Juan", "Pérez", "V-12345678", "+58 424-1234567");

INSERT INTO pruebadb.alumnos (nombre, apellido, cedula, telefono) VALUES ("Pedro", "González", "V-23456789", "+58 424-2345678");

INSERT INTO pruebadb.alumnos (nombre, apellido, cedula, telefono) VALUES ("María", "Rodríguez", "V-34567890", "+58 424-3456789");

INSERT INTO pruebadb.alumnos (nombre, apellido, cedula, telefono) VALUES ("Carlos", "Pérez", "V-45678901", "+58 424-4567890");

INSERT INTO pruebadb.alumnos (nombre, apellido, cedula, telefono) VALUES ("Ana", "García", "V-56789012", "+58 424-5678901");

-- Insertar datos a la tabla sedes

INSERT INTO pruebadb.sedes (nombre, lugar, capacidad, director) VALUES ("sede bolivar", "bolivar", "12345678", "Pérez");

INSERT INTO pruebadb.sedes (nombre, lugar, capacidad, director) VALUES ("sede andres Eloy", "andres", "23456789", "González");

INSERT INTO pruebadb.sedes (nombre, lugar, capacidad, director) VALUES ("sede Paseo", "Paseo", "34567890", "Rodríguez");

INSERT INTO pruebadb.sedes (nombre, lugar, capacidad, director) VALUES ("sede angostura", "angostura", "45678901", "Pérez");

INSERT INTO pruebadb.sedes (nombre, lugar, capacidad, director) VALUES ("sede Proceres", "Proceres", "56789012", "García");

-- Insertar datos a la tabla profesores

INSERT INTO pruebadb.profesores (nombre, apellido, cedula, telefono) VALUES ("Juan", "Pérez", "V-12345678", "+58 424-1234567");

INSERT INTO pruebadb.profesores (nombre, apellido, cedula, telefono) VALUES ("Pedro", "González", "V-23456789", "+58 424-2345678");

INSERT INTO pruebadb.profesores (nombre, apellido, cedula, telefono) VALUES ("María", "Rodríguez", "V-34567890", "+58 424-3456789");

INSERT INTO pruebadb.profesores (nombre, apellido, cedula, telefono) VALUES ("Carlos", "Pérez", "V-45678901", "+58 424-4567890");

INSERT INTO pruebadb.profesores (nombre, apellido, cedula, telefono) VALUES ("Ana", "García", "V-56789012", "+58 424-5678901");

-- Actualizar dos registros de la tabla alumnos

UPDATE pruebadb.alumnos SET nombre = "Tomas", apellido = "Lizardi" WHERE id=1;
UPDATE pruebadb.alumnos SET nombre = "Juana", telefono= "04149916554" WHERE nombre="María";

-- Eliminar un registro de la tabla profesores

DELETE FROM pruebadb.profesores WHERE "id" = 1;

-- Seleccionar un registro para buscarlo en la tabla sedes

SELECT * FROM pruebadb.sedes WHERE nombre LIKE "%sede%P%" AND id>= 4;