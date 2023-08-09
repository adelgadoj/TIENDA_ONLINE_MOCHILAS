DROP database mochilas;
CREATE DATABASE mochilas;
use mochilas;

CREATE TABLE persona(
	id_persona INTEGER PRIMARY KEY,
    nombres VARCHAR(100),
	p_apel VARCHAR(50),
	s_apel VARCHAR(50),
    email VARCHAR(50),
    genero VARCHAR(1),
    DNI INTEGER,
    ciudad VARCHAR(100)
);
CREATE TABLE persona_telefono(
	id_persona INTEGER,
    telefono INTEGER,
    PRIMARY KEY(id_persona,telefono)
);
CREATE TABLE cliente(
	id_persona INTEGER PRIMARY KEY,
    f_nac DATE,
    usuario VARCHAR(100),
    clave VARCHAR(100)
);

CREATE TABLE mochila(
	id_mochila INTEGER PRIMARY KEY,
    nombre_modelo VARCHAR(50),
    marca VARCHAR(50),
    stock INTEGER,
	precio INTEGER,
    f_ingreso DATE,
    nombre_img VARCHAR(200),
    ruta_img VARCHAR(200)
);

CREATE TABLE ventas(
	id_venta INTEGER PRIMARY KEY,
    id_persona INTEGER,
    id_mochila INTEGER,
    cantidad INTEGER,
    monto_venta INTEGER,
    fecha TIME,
    ciudad VARCHAR(100)
);
CREATE TABLE ciudades(
	id_ciudad INTEGER PRIMARY KEY,
    ciudad VARCHAR(100)
);

CREATE TABLE carrito(
	id_producto INTEGER AUTO_INCREMENT PRIMARY KEY,
	id_mochila INTEGER,
    marca VARCHAR(50),
	nombre_modelo VARCHAR(50),
    precio INTEGER,
    nombre_img VARCHAR(200),
    ruta_img VARCHAR(200)
    
);

