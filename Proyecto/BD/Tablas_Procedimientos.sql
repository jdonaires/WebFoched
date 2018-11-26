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
,	Rol VARCHAR(20) DEFAULT 'Normal' /* Normal = Usuarios De La Web || Admin = Usuarios Con Permisos */
, 	Fecha_Creacion  DATETIME NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Usuario)
,	CONSTRAINT uni_correo UNIQUE (Correo)
,	CONSTRAINT uni_usuario UNIQUE (Usuario)
,	CONSTRAINT ck_estado_usuario CHECK (Estado IN ('0','1'))
);

CREATE TABLE Restaurante
(
	Id_Restaurante INT AUTO_INCREMENT NOT NULL
,	Razon_Social VARCHAR(50) NOT NULL
,	RUC_DNI VARCHAR(11) NOT NULL
,	Logo_Imagen MEDIUMBLOB NULL
,	Direccion_Red_Social VARCHAR(200) NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Restaurante)
);

CREATE TABLE Contacto
(
	Id_Contacto INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Rol VARCHAR(25) /* Cargo Dentro Del Negocio */
,	Nombres	VARCHAR(100) NOT NULL
,	Apellidos VARCHAR(100) NOT NULL
,	Numero_1 VARCHAR(11) NOT NULL
,	Numero_2 VARCHAR(11) NULL
,	Numero_3 VARCHAR(11) NULL
,	Direccion_Red_Social_Contacto VARCHAR(200) NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Contacto)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);

CREATE TABLE Ubicacion
(
	Id_Ubicacion INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Nombre VARCHAR(200) NOT NULL
,	Direccion VARCHAR(500) NOT NULL
,	Referencia VARCHAR(500) NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Ubicacion)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
);

CREATE TABLE Categoria
(
	Id_Categoria INT AUTO_INCREMENT NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Categoria)
);

CREATE TABLE Restaurante_Categoria
(
	Id INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Id_Categoria INT NOT NULL
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
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id_Nivel)
);

CREATE TABLE Restaurante_Nivel_Economico
(
	Id INT AUTO_INCREMENT NOT NULL
,	Id_Restaurante INT NOT NULL
,	Id_Nivel INT NOT NULL
, 	Estado 		CHAR(1) DEFAULT 1 NOT NULL
,	CONSTRAINT PRIMARY KEY(Id)
,	CONSTRAINT FOREIGN KEY(Id_Restaurante) REFERENCES Restaurante(Id_Restaurante)
,	CONSTRAINT FOREIGN KEY(Id_Nivel) REFERENCES Nivel_Economico(Id_Nivel)
);
/*VOY A PONER UNA FORMA DE REGISTRAR LOS PLATOS Y BEBIDAS DE CADA PUNTO DE VENTA: DENTRO DE UN MOMENTO PASO EL PROCEDIMIENTO*/
/*****************************************************
Autor: Pachas Villa Jeanmartin
Descripción: Tablas PRODUCTOS
Fecha Actualizacion: 23/11/2018
******************************************************/
CREATE TABLE Producto
(
	Id_Producto INT AUTO_INCREMENT PRIMARY KEY NOT NULL
,	Nombre VARCHAR(30) NOT NULL
,	Descripcion VARCHAR(100) NULL
, 	Estado 	CHAR(1) DEFAULT 1 NOT NULL
);
/*****************************************************
Autor: Guillen de la Cruz Antony
Descripción: Tablas DETALLE_PRODUCTOS
Fecha Actualizacion: 23/11/2018
******************************************************/
CREATE TABLE DETALLE_PRODUCTOS
(
Id_Detalle	INT AUTO_INCREMENT PRIMARY KEY,
Producto_Id	INT,
Restaurante_Id	INT,
Precio		DECIMAL(5,2),
CONSTRAINT FOREIGN KEY(Producto_Id) REFERENCES Producto(Id_Producto),
CONSTRAINT FOREIGN KEY(Restaurante_Id) REFERENCES Restaurante(Id_Restaurante)
);







/**************************************************************************************************************************/
/**************************************************************************************************************************/
/**************************PROCEDIMIENTOS ALMACENADOS**********************************/
/**************************************************************************************************************************/
/**************************************************************************************************************************/


USE BD_WebFoched;
/*****************************************************
Autor: Ever Néstarez Martinez
Descripción: Resgistrar Usuarios
Fecha Actualizacion: 25/11/2018
Ejecutar: CALL sp_registrar_usuario ('Admin123','75813761','xxever28xx@gmail.com','Admin');
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_usuario(
	_Usuario 	VARCHAR(20)
,	_Pass 		VARCHAR(20)
,	_Correo 	VARCHAR(20)
,	_Rol 		VARCHAR(50)
)
	BEGIN
	IF _Rol = 'Admin' THEN 
		INSERT INTO Usuario (Usuario,Pass,Correo,Rol,Fecha_Creacion) 
		VALUES (_Usuario,SHA1(_Pass),_Correo,_Rol,NOW());
	ELSE
		INSERT INTO Usuario (Usuario,Pass,Correo,Fecha_Creacion) 
		VALUES (_Usuario,SHA1(_Pass),_Correo,NOW());
	END IF;
	END$$
DELIMITER ;

CALL sp_registrar_usuario ('Admin123','75813761','xxever28xx@gmail.com','Admin');
CALL sp_registrar_usuario ('Normal123','75813761','ever28@gmail.com','');
SELECT * FROM Usuario;


/*****************************************************
Autor: Ever Néstarez Martinez
Descripción: Buscar Usuario ID
Fecha Actualizacion: 25/11/2018
Ejecutar: CALL sp_buscar_usuario('Admin123');
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_buscar_usuario(
	_Usuario 	VARCHAR(20)
    )
	BEGIN
		SELECT * FROM Usuario WHERE Usuario.Usuario = _Usuario AND Usuario.Estado = '1';
	END$$
DELIMITER ;



/*****************************************************
Autor: Ever Néstarez Martinez
Descripción: Resgistrar Usuarios
Fecha Actualizacion: 19/11/2018
Ejecutar: CALL sp_registrar_restaurante_r_c_u ('Pollos S.A','99999999999','facebook.pollos.sa','1','Werner','Heisenberg','123456789','234567890','345678901','facebook.W.Heisenberg','Here','Av. Plaza Sesamo','No Existe :v');
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_restaurante_r_c_u
(
	_Razon_Social VARCHAR(50)
,	_RUC_DNI VARCHAR(11)
,	_Direccion_Red_Social VARCHAR(200)
,	_Rol VARCHAR(25)
,	_Nombres	VARCHAR(100)
,	_Apellidos VARCHAR(100)
,	_Numero_1 VARCHAR(11)
,	_Numero_2 VARCHAR(11)
,	_Numero_3 VARCHAR(11)
,	_Direccion_Red_Social_Contacto VARCHAR(200)
,	_Nombre VARCHAR(200)
,	_Direccion VARCHAR(500)
,	_Referencia VARCHAR(500)
)
BEGIN
	/* Tabla Restaurante */
	INSERT INTO Restaurante
	(	Razon_Social
	,	RUC_DNI
	,	Direccion_Red_Social
	)
	VALUES
	(	_Razon_Social
	,	_RUC_DNI
	,	_Direccion_Red_Social
	);

	/* Tabla Contacto */
	SET @id_restaurante = (SELECT MAX(Id_Restaurante) FROM Restaurante);
	/* SET @id_restaurante = (SELECT LAST_INSERT_ID()); */
	INSERT INTO Contacto
	(	Id_Restaurante
	,	Rol
	,	Nombres
	,	Apellidos
	,	Numero_1
	,	Numero_2
	,	Numero_3
	,	Direccion_Red_Social_Contacto
	)
	VALUES
	(	@id_restaurante
	,	_Rol
	,	_Nombres
	,	_Apellidos
	,	_Numero_1
	,	_Numero_2
	,	_Numero_3
	,	_Direccion_Red_Social_Contacto
	);

	/* Tabla Ubicacion */
	INSERT INTO Ubicacion
	(	Id_Restaurante
	,	Nombre
	,	Direccion
	,	Referencia
	)
	VALUES
	(	@id_restaurante
	,	_Nombre
	,	_Direccion
	,	_Referencia
	);

END$$
DELIMITER ;



/*****************************************************
--
Autor: Pachas Villa Jesus Jeanmartin
Descripción: Resgistrar Restaurante
Fecha Actualizacion: 22/10/2018
Ejecutar: CALL sp_registrar_restaurante('_Razon_Social','_RUC_DNI','_Logo_Imagen','_Direccion_Red_Social')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_restaurante
(
	_Razon_Social 	VARCHAR(50)
,	_RUC_DNI	VARCHAR(11)
,	_Logo_Imagen	MEDIUMBLOB
,	_Direccion_Red_Social	VARCHAR(200)
)
BEGIN
	INSERT INTO Restaurante
	(	Razon_Social
	,	RUC_DNI
	,	Logo_Imagen
        ,	Direccion_Red_Social
        )
        VALUES
        (	_Razon_Social
        ,	_RUC_DNI
        ,	_Logo_Imagen
        ,	_Direccion_Red_Social
        );
END$$
DELIMITER ;



/*****************************************************
Autor: Pachas Villa  Jesus Jeanmartin
Descripción: Resgistrar Contacto
Fecha Actualizacion: 22/10/2018
Ejecutar: CALL sp_registrar_contacto('_Id_Restaurante','_Rol','_Nombres','_Apellidos','_Numero_1','_Numero_2','_Numero_3','_Direccion_Red_Social')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_contacto
(
  	_Id_Restaurante INT
  ,	_Rol TINYINT
  ,	_Nombres	VARCHAR(100)
  ,	_Apellidos VARCHAR(100)
  ,	_Numero_1 VARCHAR(11)
  ,	_Numero_2 VARCHAR(11)
  ,	_Numero_3 VARCHAR(11)
  ,	_Direccion_Red_Social VARCHAR(200)
)
BEGIN
	INSERT INTO Contacto
	(	Id_Restaurante
	,	Rol
	,	Nombres
	,	Apellidos
	,	Numero_1
	,	Numero_2
	,	Numero_3
	,	Direccion_Red_Social
	)
         VALUES
	(	_Id_Restaurante
        ,	_Rol
        ,	_Nombres
	,	_Apellidos
	,	_Numero_1
	,	_Numero_2
	,	_Numero_3
	,	_Direccion_Red_Social
	);
END$$
DELIMITER ;



/*****************************************************
Autor: Guillen de la Cruz Antony Grover
Descripción: Resgistrar Ubicacion
Fecha Actualizacion: 22/10/2018
Ejecutar: CALL sp_registrar_ubicacion('_Id_Restaurante','_Nombres','_Direccion','_Referencia')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_ubicacion
(
  	_Id_Restaurante INT
,	_Nombre	VARCHAR(200)
,	_Direccion 	VARCHAR(500)
,	_Referencia 	VARCHAR(500)
)
BEGIN
	INSERT INTO Ubicacion
	(	Id_Restaurante
	,	Nombre
	,	Direccion
	,	Referencia
	)
        VALUES
        (	_Id_Restaurante
        ,	_Nombre
        ,	_Direccion
	,	_Referencia
	);
END$$
DELIMITER ;



/*****************************************************
Autor: Guillen de la Cruz Antony Grover
Descripción: Resgistrar Ubicacion
Fecha Actualizacion: 22/10/2018
Ejecutar: CALL sp_registrar_categoria('_Nombre','_Descripcion')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_categoria
(
	_Nombre	VARCHAR(30)
,	_Descripcion VARCHAR(100)
)
BEGIN
	INSERT INTO Ubicacion
	(
		Nombre
	,	Descripcion
	)
	VALUES
	(	_Nombre
	,	_Descripcion
	);
END$$
DELIMITER ;




/*****************************************************
Autor: Guillen de la Cruz Antony Grover
Descripción: Resgistrar Ubicacion
Fecha Actualizacion: 22/10/2018
Ejecutar: CALL sp_restaurante_categoria('_Id_Restaurante','_Id_Categoria')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_restaurante_categoria
(
	_Id_Restaurante INT
,	_Id_Categoria INT
)
BEGIN
	INSERT INTO Restaurante_Categoria
	(	Id_Restaurante
	,	Id_Categoria
	)
	VALUES
	(	_Id_Restaurante
	,	_Id_Categoria
	);
END$$
DELIMITER ;
