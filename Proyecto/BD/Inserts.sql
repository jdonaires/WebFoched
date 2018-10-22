/*POR FAVOR IDENTIFICAR BIEN LOS INSERT*/
USE BD_WebFoched;

/*****************************************************
Autor: Pachas Villa Jesus Jeanmartin
Descripción: Resgistrar Restaurante
Fecha Actualizacion: 22/10/2018
Ejecutar: CALL sp_registrar_restaurante('','','','','','')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_restaurante(
	_Razon_Social 	VARCHAR(50),
	_RUC_DNI 		VARCHAR(11),
	_Logo_Imagen 	MEDIUMBLOB,
 _Direccion_Red_Social VARCHAR(200),
 _usuario     VARCHAR(30),
 _PC				  VARCHAR(30),
)
BEGIN
	INSERT INTO Restaurante (Razon_Social,RUC_DNI,Logo_Imagen
                          ,Direccion_Red_Social,Usuario_Creacion,PC_Creacion
                          ,Fecha_Creacion)
                          VALUES(_Razon_Social,_RUC_DNI,_Logo_Imagen
                            ,_Direccion_Red_Social,_usuario,_PC
                          ,NOW());
END$$
DELIMITER ;


/*****************************************************
Autor: Pachas Villa  Jesus Jeanmartin
Descripción: Resgistrar Contacto
Fecha Actualizacion: 22/10/2018
Ejecutar: CALL sp_registrar_contacto('','','','','','','','','','')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_contacto(
  	_Id_Restaurante INT
  ,	_Rol TINYINT
  ,	_Nombres	VARCHAR(100)
  ,	_Apellidos VARCHAR(100)
  ,	_Numero_1 VARCHAR(11)
  ,	_Numero_2 VARCHAR(11)
  ,	_Numero_3 VARCHAR(11)
  ,	_Direccion_Red_Social VARCHAR(200)
  , _usuario     VARCHAR(30)
  , _PC				  VARCHAR(30)
)
BEGIN
	INSERT INTO Contacto (Id_Restaurante,Rol,Nombres
                          ,Apellidos,Numero_1,Numero_2
                          ,Numero_3,Direccion_Red_Social,Usuario_Creacion
                        ,PC_Creacion,Fecha_Creacion)
                          VALUES(_Id_Restaurante,_Rol,_Nombres
                                ,_Apellidos,_Numero_1,_Numero_2
                                ,_Numero_3,_Direccion_Red_Social,_usuario
                                                ,_PC,NOW());
END$$
DELIMITER ;
