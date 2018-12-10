/*
SQLyog Ultimate v8.61 
MySQL - 5.5.25a : Database - bd_webfoched
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bd_webfoched` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bd_webfoched`;

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `categoria` */

insert  into `categoria`(`Id_Categoria`,`Nombre`,`Descripcion`,`Estado`) values (1,'Pollería','Pollería','1'),(2,'Fusión','Fusión','1'),(3,'Parrillada','Parrillada','1'),(4,'Cafetería','Cafetería','1'),(5,'Casera','Casera','1'),(6,'Cebichería','Cebichería','1'),(7,'Chifa','Chifa','1'),(8,'Típicas','Típicas','1'),(9,'Variada','Variada','1'),(10,'Pizzería','Pizzería','1');

/*Table structure for table `contacto` */

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `Id_Contacto` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Restaurante` int(11) NOT NULL,
  `Rol` varchar(25) DEFAULT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Numero_1` varchar(11) NOT NULL,
  `Numero_2` varchar(11) DEFAULT NULL,
  `Numero_3` varchar(11) DEFAULT NULL,
  `Direccion_Red_Social_Contacto` varchar(200) DEFAULT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id_Contacto`),
  KEY `Id_Restaurante` (`Id_Restaurante`),
  CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`Id_Restaurante`) REFERENCES `restaurante` (`Id_Restaurante`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `contacto` */

insert  into `contacto`(`Id_Contacto`,`Id_Restaurante`,`Rol`,`Nombres`,`Apellidos`,`Numero_1`,`Numero_2`,`Numero_3`,`Direccion_Red_Social_Contacto`,`Estado`) values (1,1,'Administrador','Juan','Jaramillo Jimenez','956123456',NULL,NULL,NULL,'1'),(2,2,'Gerente','Fabian','Flores Franco','956456312',NULL,NULL,NULL,'1'),(3,3,'Gerente','María','Montero Matías','956987456',NULL,NULL,NULL,'1'),(4,4,'Administrador','Luis','Landero Lucana','956321654',NULL,NULL,NULL,'1'),(5,5,'Administrador','Nancy','Nuñez Navarro','956654987',NULL,NULL,NULL,'1');

/*Table structure for table `detalle_productos` */

DROP TABLE IF EXISTS `detalle_productos`;

CREATE TABLE `detalle_productos` (
  `Id_Detalle` int(11) NOT NULL AUTO_INCREMENT,
  `Producto_Id` int(11) DEFAULT NULL,
  `Restaurante_Id` int(11) DEFAULT NULL,
  `Precio` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`Id_Detalle`),
  KEY `Producto_Id` (`Producto_Id`),
  KEY `Restaurante_Id` (`Restaurante_Id`),
  CONSTRAINT `detalle_productos_ibfk_1` FOREIGN KEY (`Producto_Id`) REFERENCES `producto` (`Id_Producto`),
  CONSTRAINT `detalle_productos_ibfk_2` FOREIGN KEY (`Restaurante_Id`) REFERENCES `restaurante` (`Id_Restaurante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detalle_productos` */

/*Table structure for table `nivel_economico` */

DROP TABLE IF EXISTS `nivel_economico`;

CREATE TABLE `nivel_economico` (
  `Id_Nivel` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id_Nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nivel_economico` */

/*Table structure for table `producto` */

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `Id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `producto` */

/*Table structure for table `restaurante` */

DROP TABLE IF EXISTS `restaurante`;

CREATE TABLE `restaurante` (
  `Id_Restaurante` int(11) NOT NULL AUTO_INCREMENT,
  `Razon_Social` varchar(50) NOT NULL,
  `RUC_DNI` varchar(11) NOT NULL,
  `Logo_Imagen` mediumblob,
  `Direccion_Red_Social` varchar(200) DEFAULT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id_Restaurante`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `restaurante` */

insert  into `restaurante`(`Id_Restaurante`,`Razon_Social`,`RUC_DNI`,`Logo_Imagen`,`Direccion_Red_Social`,`Estado`) values (1,'Chifa Polleria Taypa','12345678',NULL,NULL,'1'),(2,'Markys Chincha','12345688',NULL,NULL,'1'),(3,'Pizzeria Don Giuseppi','12345677',NULL,NULL,'1'),(4,'Restaurante Princess','12345667',NULL,NULL,'1'),(5,'Cheng Ming','12345567',NULL,NULL,'1');

/*Table structure for table `restaurante_categoria` */

DROP TABLE IF EXISTS `restaurante_categoria`;

CREATE TABLE `restaurante_categoria` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Restaurante` int(11) NOT NULL,
  `Id_Categoria` int(11) NOT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`),
  KEY `Id_Restaurante` (`Id_Restaurante`),
  KEY `Id_Categoria` (`Id_Categoria`),
  CONSTRAINT `restaurante_categoria_ibfk_1` FOREIGN KEY (`Id_Restaurante`) REFERENCES `restaurante` (`Id_Restaurante`),
  CONSTRAINT `restaurante_categoria_ibfk_2` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `restaurante_categoria` */

insert  into `restaurante_categoria`(`Id`,`Id_Restaurante`,`Id_Categoria`,`Estado`) values (1,1,7,'1'),(2,2,1,'1'),(3,3,10,'1'),(4,4,9,'1'),(5,5,1,'1');

/*Table structure for table `restaurante_nivel_economico` */

DROP TABLE IF EXISTS `restaurante_nivel_economico`;

CREATE TABLE `restaurante_nivel_economico` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Restaurante` int(11) NOT NULL,
  `Id_Nivel` int(11) NOT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`),
  KEY `Id_Restaurante` (`Id_Restaurante`),
  KEY `Id_Nivel` (`Id_Nivel`),
  CONSTRAINT `restaurante_nivel_economico_ibfk_1` FOREIGN KEY (`Id_Restaurante`) REFERENCES `restaurante` (`Id_Restaurante`),
  CONSTRAINT `restaurante_nivel_economico_ibfk_2` FOREIGN KEY (`Id_Nivel`) REFERENCES `nivel_economico` (`Id_Nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `restaurante_nivel_economico` */

/*Table structure for table `ubicacion` */

DROP TABLE IF EXISTS `ubicacion`;

CREATE TABLE `ubicacion` (
  `Id_Ubicacion` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Restaurante` int(11) NOT NULL,
  `Direccion` varchar(500) NOT NULL,
  `Referencia` varchar(500) DEFAULT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  `lat` double DEFAULT '0',
  `lng` double DEFAULT '0',
  `Distrito` varchar(100) DEFAULT 'Chincha Alta',
  PRIMARY KEY (`Id_Ubicacion`),
  KEY `Id_Restaurante` (`Id_Restaurante`),
  CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`Id_Restaurante`) REFERENCES `restaurante` (`Id_Restaurante`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `ubicacion` */

insert  into `ubicacion`(`Id_Ubicacion`,`Id_Restaurante`,`Direccion`,`Referencia`,`Estado`,`lat`,`lng`,`Distrito`) values (1,1,'Plaza de Armas, Chincha Alta 11702','Cerca a la plaza de armas de Chincha Alta','1',-13.4171762,-76.132807,'Chincha Alta'),(2,2,'Plaza de Armas 480, 11702','Cerca a la plaza de armas de Chincha Alta','1',-13.4172349,-76.132406,'Chincha Alta'),(3,3,'Plaza de Armas 179, 11702','Cerca a la plaza de armas de Chincha Alta','1',-13.4180652,-76.132887,'Chincha Alta'),(4,4,'Calle Lima 109, 11702','Cerca a la plaza de armas de Chincha Alta','1',-13.4180447,-76.1331594,'Chincha Alta'),(5,5,'Av Oscar R. Benavides, 11702','Cerca a la plaza de armas de Chincha Alta','1',-13.4177553,-76.1334591,'Chincha Alta');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Rol` varchar(20) DEFAULT 'Normal',
  `Fecha_Creacion` datetime NOT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id_Usuario`),
  UNIQUE KEY `uni_correo` (`Correo`),
  UNIQUE KEY `uni_usuario` (`Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`Id_Usuario`,`Usuario`,`Pass`,`Correo`,`Rol`,`Fecha_Creacion`,`Estado`) values (1,'Admin123','44c89c09937ad584b22e2576df27f1d499214d39','xxever28xx@gmail.com','Admin','2018-12-03 22:30:18','1'),(2,'Normal123','44c89c09937ad584b22e2576df27f1d499214d39','ever28@gmail.com','Normal','2018-12-03 22:30:18','1'),(5,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','admin@gmail.com','Admin','2018-12-03 22:37:28','1');

/* Procedure structure for procedure `sp_buscar_usuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_buscar_usuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_buscar_usuario`(
	_Usuario 	VARCHAR(20)
    )
BEGIN
		SELECT * FROM Usuario WHERE Usuario.Usuario = _Usuario AND Usuario.Estado = '1';
	END */$$
DELIMITER ;

/* Procedure structure for procedure `SP_GET_UBICACION_NEGOCIOS` */

/*!50003 DROP PROCEDURE IF EXISTS  `SP_GET_UBICACION_NEGOCIOS` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_GET_UBICACION_NEGOCIOS`(
	_Distrito VARCHAR(100)
    )
BEGIN
	IF (trim(_Distrito)) = ''
	then
	
		SELECT	rest.razon_social AS 'nombre'
		,	ubi.lat
		,	ubi.lng
		FROM	ubicacion AS ubi
		INNER JOIN restaurante AS rest ON rest.id_restaurante = ubi.id_restaurante
		WHERE	rest.estado = '1';	
	else	
		SELECT	rest.razon_social AS 'nombre'
		,	ubi.lat
		,	ubi.lng
		FROM	ubicacion AS ubi
		INNER JOIN restaurante AS rest ON rest.id_restaurante = ubi.id_restaurante
		WHERE 	ubi.Distrito = _Distrito
		AND	rest.estado = '1';	
	END IF;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_registrar_categoria` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_registrar_categoria` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_categoria`(
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
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_registrar_contacto` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_registrar_contacto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_contacto`(
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
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_registrar_restaurante` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_registrar_restaurante` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_restaurante`(
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
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_registrar_restaurante_r_c_u` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_registrar_restaurante_r_c_u` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_restaurante_r_c_u`(
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
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_registrar_ubicacion` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_registrar_ubicacion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_ubicacion`(
  	_Id_Restaurante INT
,	_Distrito	VARCHAR(100)
,	_Direccion 	VARCHAR(500)
,	_Referencia 	VARCHAR(500)
,	_lat		double
,	_lng		double
)
BEGIN
	INSERT INTO Ubicacion
	(	Id_Restaurante
	,	Distrito
	,	Direccion
	,	Referencia
	,	lat
	,	lng
	)
        VALUES
        (	_Id_Restaurante
        ,	_Distrito
        ,	_Direccion
	,	_Referencia
	,	_lat
	,	_lng
	);
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_registrar_usuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_registrar_usuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_usuario`(
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
	END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_restaurante_categoria` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_restaurante_categoria` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_restaurante_categoria`(
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
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
