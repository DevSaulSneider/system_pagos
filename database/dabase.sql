-- Active: 1699896591317@@127.0.0.1@3306@system_pagos
CREATE DATABASE system_pagosv2;
USE system_pagosv2;
CREATE TABLE perfiles(
    id_perfil INT NOT NULL AUTO_INCREMENT,
    rol VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_perfil)
);
CREATE TABLE periodos(
    id_periodo INT NOT NULL AUTO_INCREMENT,
    meses VARCHAR(30) NOT NULL,
    PRIMARY KEY (id_periodo)
);
CREATE TABLE servicios(
    id_servicio INT NOT NULL AUTO_INCREMENT,
    servicio VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_servicio)
);
CREATE TABLE usuarios(
    id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_perfil INT NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR(50),
    correo VARCHAR(50) NOT NULL,
    direccion VARCHAR(100),
    password_user VARCHAR(100) NOT NULL,
    token_usuario VARCHAR(100),
    fecha_creacion DATETIME,
    fecha_actualizacion DATETIME,
    FOREIGN KEY (id_perfil) REFERENCES perfiles(id_perfil)
);
CREATE TABLE clientes(
    id_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_periodo INT NOT NULL,
    id_perfil INT NOT NULL,
    id_servicio INT NOT NULL,
    empresa VARCHAR(100),
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(50),
    monto_a_pagar VARCHAR(100),
    telefono VARCHAR(20),
    fecha_pago VARCHAR(20),
    fecha_creacion DATETIME,
    fecha_actualizacion DATETIME,
    estado BOOLEAN NOT NULL,
    FOREIGN KEY (id_periodo) REFERENCES periodos(id_periodo),
    FOREIGN KEY (id_perfil) REFERENCES perfiles(id_perfil),
    FOREIGN KEY (id_servicio) REFERENCES servicios(id_servicio)
);
CREATE TABLE pagos(
    id_pago INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    monto FLOAT NOT NULL,
    fecha_pagada VARCHAR(20),
    fecha_proximo_pago VARCHAR(20),
    estado VARCHAR(20),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);
CREATE TABLE miempresa (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    idioma VARCHAR(100),
    logo VARCHAR(100),
    favicon VARCHAR(100),
    footer VARCHAR(100),
    ruc VARCHAR(100),
    direccion VARCHAR(100),
    correo_principal VARCHAR(100),
    correo_ventas VARCHAR(100),
    telefono VARCHAR(100),
    movil VARCHAR(100),
    web VARCHAR(100),
    fecha_actualizacion DATETIME,
    user_actualizacion VARCHAR(100)
);
DROP TABLE miempresa;
-- Vista para los clientes

CREATE VIEW vista_clientes AS
SELECT
    cl.id_cliente,
    pe.id_periodo,
    cl.estado,
    CONCAT(pe.meses, ' meses') as 'meses',
    p.rol,
    se.servicio,
    cl.empresa,
    cl.nombre,
    cl.correo,
    cl.telefono,
    cl.fecha_pago,
    cl.monto_a_pagar,
    cl.fecha_creacion,
    cl.fecha_actualizacion
FROM clientes cl
INNER JOIN perfiles p
ON cl.id_perfil = p.id_perfil
INNER JOIN periodos pe
ON cl.id_periodo = pe.id_periodo
INNER JOIN servicios se
ON cl.id_servicio = se.id_servicio