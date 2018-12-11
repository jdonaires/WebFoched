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
		$statement = $this->pdo->prepare("CALL sp_registrar_usuario(?,?,?,?)");
    	$statement->bindValue(1,$usuario->__GET('Id_Usuario')		,PDO::PARAM_STR);
		$statement->bindValue(2,$usuario->__GET('Pass')			,PDO::PARAM_STR);
		$statement->bindValue(3,$usuario->__GET('Correo')		,PDO::PARAM_STR);
		$statement->bindValue(4,$usuario->__GET('Rol')			,PDO::PARAM_STR);
		$statement -> execute();

		return '1';

		} catch (Exception $e)
		{
			echo'	<script>;
						alertify.error("Error En el Registro.");
					</script>';
			return null;
		}
	}

	public function Buscar(Usuario $Id_Usuario)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL sp_buscar_usuario(?)");
    	$statement->bindValue(1,$Id_Usuario->__GET('Id_Usuario')		,PDO::PARAM_STR);
		$statement -> execute();
		if ($statement != false){
			return $statement->fetch(PDO::FETCH_ASSOC);
		} else {
			return null;
		}

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>
