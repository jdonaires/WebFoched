/*
DROP DATABASE BD_WebFoched;
*/
CREATE DATABASE BD_WebFoched;

USE BD_WebFoched;
/*Como pueden observar se añadio la restricion DEFAULT al campo estado para que se genere en automatico y no ponerlo en los SP de registros*/
CREATE TABLE Usuario
(
	Id_Usuario INT AUTO_INCREMENT NOT NULL
,	Usuario VARCHAR(20) NOT NULL
,	Pass VARCHAR(200) NOT NULL
,	Correo VARCHAR(50) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Usuario)
,	CONSTRAINT uni_correo UNIQUE (Correo)
,	CONSTRAINT ck_estado_usuario CHECK (Estado IN ('0','1'))
);

/*Actualizacion del campo RUC_DNI : Porque el RUC lleg hasta 11 digitos*/
CREATE TABLE Restaurante
(
	Id_Restaurante INT AUTO_INCREMENT NOT NULL
,	Razon_Social VARCHAR(50) NOT NULL
,	RUC_DNI VARCHAR(11) NOT NULL
,	Logo_Imagen MEDIUMBLOB NULL
,	Direccion_Red_Social VARCHAR(200) NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Restaurante)
);

CREATE TABLE Contacto
(
	Id_Contacto INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Rol TINYINT /*1 - Dueño || 2 - Adminstrador || 3 - Gerente || ... */
,	Nombres	VARCHAR(100) NOT NULL
,	Apellidos VARCHAR(100) NOT NULL
,	Numero_1 VARCHAR(11) NOT NULL
,	Numero_2 VARCHAR(11) NULL
,	Numero_3 VARCHAR(11) NULL
,	Direccion_Red_Social VARCHAR(200) NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Contacto)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);

CREATE TABLE Ubicacion
(
	Id_Ubicacion INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Nombre VARCHAR(200) NOT NULL
,	Latitud DECIMAL(19,17) NULL
,	Longitud DECIMAL(20,17) NULL
,	Referencia VARCHAR(500) NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Ubicacion)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);
/* Se actualiza el tipo de variable de campo Nombre   INT a VARCHAR*/
CREATE TABLE Categoria
(
	Id_Categoria INT AUTO_INCREMENT NOT NULL
,	Nombre VARCHAR NOT NULL
,	Descripcion VARCHAR(100) NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Categoria)
);

CREATE TABLE Restaurante_Categoria
(
	Id INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Id_Categoria INT NOT NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
,	CONSTRAINT FOREIGN KEY(Id_Categoria) REFERENCES Categoria(Id_Categoria)
);

CREATE TABLE Nivel_Economico
(
	Id_Nivel INT AUTO_INCREMENT NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NOT NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Nivel)
);

CREATE TABLE Restaurante_Nivel_Economico
(
	Id INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Id_Nivel INT NOT NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
,	CONSTRAINT FOREIGN KEY(Id_Nivel) REFERENCES Nivel_Economico(Id_Nivel)
);

CREATE TABLE Plato
(
	Id_Plato INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
,	Precio DECIMAL(3,2) NOT NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 					CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Plato)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);

CREATE TABLE Bebida
(
	Id_Bebida INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
,	Precio DECIMAL(3,2) NOT NULL
, 	Usuario_Creacion VARCHAR(30) NOT NULL
, 	PC_Creacion     VARCHAR(30) NOT NULL
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 					CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Bebida)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);
/*Se crea la tabla historial para saber las modificaciones que se realicen en las tablas*/
CREATE TABLE Historial(
	Id_Historia INT AUTO_INCREMENT NOT NULL
,	Referencia_Id INT NOT NULL
,	Usuario_Actualizo VARCHAR(30) NOT NULL
,	Pc_Actualizo 			VARCHAR(30) NOT NULL
,	Fecha_Actualizacion DATETIME NOT NULL
);
