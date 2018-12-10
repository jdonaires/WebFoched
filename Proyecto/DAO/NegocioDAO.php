<?php
require_once('../DAL/DBAccess.php');

class NegocioDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar_Negocio(Negocio $negocio , Contacto $contacto, Ubicacion $ubicacion )
	{
		try
		{
		$statement = $this->pdo->prepare("CALL sp_registrar_restaurante_r_c_u(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    	$statement->bindValue(1,$negocio->__GET('Razon_Social')			,PDO::PARAM_STR);
		$statement->bindValue(2,$negocio->__GET('RUC_DNI')				,PDO::PARAM_INT);
		$statement->bindValue(3,$negocio->__GET('Direccion_Red_Social')	,PDO::PARAM_STR);

		$statement->bindValue(4,$contacto->__GET('Rol')			,PDO::PARAM_STR);
		$statement->bindValue(5,$contacto->__GET('Nombres')		,PDO::PARAM_STR);
		$statement->bindValue(6,$contacto->__GET('Apellidos')	,PDO::PARAM_STR);
		$statement->bindValue(7,$contacto->__GET('Numero_1')	,PDO::PARAM_INT);
		$statement->bindValue(8,$contacto->__GET('Numero_2')	,PDO::PARAM_INT);
		$statement->bindValue(9,$contacto->__GET('Numero_3')	,PDO::PARAM_INT);
		$statement->bindValue(10,$contacto->__GET('Direccion_Red_Social_Contacto')	,PDO::PARAM_STR);

		$statement->bindValue(11,$ubicacion->__GET('Nombre')		,PDO::PARAM_STR);
		$statement->bindValue(12,$ubicacion->__GET('Direccion')		,PDO::PARAM_STR);
		$statement->bindValue(13,$ubicacion->__GET('Referencia')	,PDO::PARAM_STR);

		$statement -> execute();

		return '1';

		} catch (Exception $e)
		{
			return '0';
			die($e->getMessage());
		}
	}
}
?>
