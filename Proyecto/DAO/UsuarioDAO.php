<?php
require_once('../DAL/DBAccess.php');

class UsuarioDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar(Usuario $usuario)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL sp_registrar_usuario(?,?,?)");
    $statement->bindParam(1,$usuario->__GET('Usuario'));
		$statement->bindParam(2,$usuario->__GET('Pass'));
		$statement->bindParam(3,$usuario->__GET('Correo'));
    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>
