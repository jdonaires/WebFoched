USE BD_WebFoched;

/*****************************************************
Autor: Ever Néstarez Martinez
Descripción: Resgistrar Usuarios
Fecha Actualizacion: 23/10/2018
Ejecutar: CALL sp_registrar_usuario('Ever','pass','correo@mail.com','user1','PC-5A24C');
******************************************************/
DELIMITER $$
CREATE PROCEDURE sp_registrar_usuario(
	_usuario 	VARCHAR(20),
	_pass 		VARCHAR(20),
	_correo 	VARCHAR(25),
	_usuario_db  	VARCHAR(30),
	_PC		VARCHAR(30)
)
BEGIN
	SET @fecha = (SELECT NOW());
	/*Esta es la respuesta de porque el campo default para no agregar EL CAMPO ESTADO en el SP*/
	INSERT INTO Usuario (usuario,pass,correo,Usuario_Creacion,PC_Creacion,Fecha_Creacion) VALUES(_usuario,_pass,_correo,_usuario_db,_PC,@fecha);
END$$
DELIMITER ;

