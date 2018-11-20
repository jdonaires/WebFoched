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
    	$statement->bindValue(1,$usuario->__GET('Usuario')	,PDO::PARAM_STR);
		$statement->bindValue(2,$usuario->__GET('Pass')		,PDO::PARAM_STR);
		$statement->bindValue(3,$usuario->__GET('Correo')	,PDO::PARAM_STR);
		$statement -> execute();
		sleep(1);
		echo'<script type="text/javascript">
    	alert("Registro Completado.");
    	window.location.href="frmIngresar.php";
    	</script>';

		} catch (Exception $e)
		{
			echo'<script type="text/javascript">
    		alert("Error Al Registrar Sus Datos.");
    		window.location.href="frmRegistrarse.php";
    		</script>';
			die($e->getMessage());
			
		}
	}
}

?>
