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
	_correo 	VARCHAR(25)
)
BEGIN
	INSERT INTO Usuario (usuario,pass,correo,estado) VALUES(_usuario,_pass,_correo,1);
END$$
DELIMITER ;