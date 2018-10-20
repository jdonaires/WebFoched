USE BD_WebFoched;

/*
Descripción: Resgistrar Usuarios
Fecha Actualizacion: 20/10/2018 
*/
DELIMITER $$
CREATE PROCEDURE sp_registrar_usuario(
	_usuario 	VARCHAR(20),
	_pass 		VARCHAR(20),
	_correo 	VARCHAR(25)
)
BEGIN
	INSERT INTO usuarios (usuario,pass,correo) VALUES(_usuario,_pass,_correo);
END$$
DELIMITER ;