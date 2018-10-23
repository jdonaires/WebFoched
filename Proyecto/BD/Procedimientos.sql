USE BD_WebFoched;

/*****************************************************
Autor: Ever Néstarez Martinez
Descripción: Resgistrar Usuarios
Fecha Actualizacion: 23/10/2018
Ejecutar: CALL sp_registrar_usuario('usuario1','pass','correo@mail.com');
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_usuario(
	_usuario 	VARCHAR(20),
	_pass 		VARCHAR(20),
	_correo 	VARCHAR(25)
)
BEGIN
	SET @fecha = (SELECT NOW());
	/*Esta es la respuesta de porque el campo default para no agregar EL CAMPO ESTADO en el SP*/
	INSERT INTO Usuario (usuario,pass,correo,Fecha_Creacion) VALUES(_usuario,_pass,_correo,@fecha);
END$$
DELIMITER ;

