USE BD_WebFoched;

/*****************************************************
Autor: Ever Néstarez Martinez
Descripción: Resgistrar Usuarios
Fecha Actualizacion: 20/10/2018
Ejecutar: CALL sp_registrar_usuario('usuario','pass','correo@mail.com')
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_usuario(
	_usuario 	VARCHAR(20),
	_pass 		VARCHAR(20),
	_correo 	VARCHAR(25),
	_usuario  VARCHAR(30),
	_PC				VARCHAR(30),
)
BEGIN
/*Esta es la respuesta de porque el campo default para no agregar EL CAMPO ESTADO en el SP*/
	INSERT INTO Usuario (usuario,pass,correo,Usuario_Creacion,PC_Creacion,Fecha_Creacion) VALUES(_usuario,_pass,_correo,_usuario,_PC,NOW());
END$$
DELIMITER ;
