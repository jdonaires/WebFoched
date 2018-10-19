/*
DROP DATABASE BD_WebFoched;
*/
CREATE DATABASE BD_WebFoched;

USE BD_WebFoched;

CREATE TABLE Usuario
(
	Id_Usuario CHAR(10) NOT NULL
,	Usuario VARCHAR(20) NOT NULL
,	Pass VARCHAR(20) NOT NULL
,	Correo VARCHAR(50) NOT NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Usuario)
);


CREATE TABLE Restaurante
(
	Id_Restaurante CHAR(10) NOT NULL
,	Razon_Social VARCHAR(50) NOT NULL
,	RUC_DNI VARCHAR(10) NOT NULL
,	Logo_Imagen MEDIUMBLOB NULL
,	Direccion_Red_Social VARCHAR(200) NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Restaurante)
);

CREATE TABLE Contacto
(
	Id_Contacto CHAR(10) NOT NULL
,	Id_Restaurante CHAR(10) NOT NULL
,	Rol TINYINT /*1 - Dueño || 2 - Adminstrador || 3 - Gerente || ... */
,	Nombres	VARCHAR(100) NOT NULL
,	Apellidos VARCHAR(100) NOT NULL
,	Numero_1 VARCHAR(11) NOT NULL
,	Numero_2 VARCHAR(11) NULL
,	Numero_3 VARCHAR(11) NULL
,	Direccion_Red_Social VARCHAR(200) NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Contacto)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);

CREATE TABLE Ubicacion
(
	Id_Ubicacion CHAR(10) NOT NULL
,	Id_Restaurante CHAR(10) NOT NULL
,	Nombre VARCHAR(200) NOT NULL
,	Latitud INT NULL
,	Longitud INT NULL
,	Referencia VARCHAR(500) NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Ubicacion)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);

CREATE TABLE Categoria
(
	Id_Categoria CHAR(10) NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Categoria)
);

CREATE TABLE Restaurante_Categoria
(
	Id CHAR(10) NOT NULL
,	Id_Restaurante CHAR(10) NOT NULL
,	Id_Categoria CHAR(10) NOT NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
,	CONSTRAINT FOREIGN KEY(Id_Categoria) REFERENCES Categoria(Id_Categoria)
);

CREATE TABLE Nivel_Economico
(
	Id_Nivel CHAR(10) NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Nivel)
);

CREATE TABLE Restaurante_Nivel_Economico
(
	Id CHAR(10) NOT NULL
,	Id_Restaurante CHAR(10) NOT NULL
,	Id_Nivel CHAR(10) NOT NULL
,	Estado BIT NOT NULL
,	CONSTRAINT PRIMARY KEY(Id)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
,	CONSTRAINT FOREIGN KEY(Id_Nivel) REFERENCES Nivel_Economico(Id_Nivel)
);

CREATE TABLE Plato
(
	Id_Plato CHAR(10) NOT NULL
,	Id_Restaurante CHAR(10) NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
,	Precio DECIMAL(3,2) NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Plato)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);

CREATE TABLE Bebida
(
	Id_Bebida CHAR(10) NOT NULL
,	Id_Restaurante CHAR(10) NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
,	Precio DECIMAL(3,2) NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Bebida)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);
