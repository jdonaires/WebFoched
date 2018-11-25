<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/persona.php');

class PersonaDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar(Persona $persona)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL sp_registrar_usuario(?,?,?,?,?)");
    	$statement->bindValue(1,$negocio->__GET('Razon_Social')			,PDO::PARAM_STR);
		$statement->bindParam(2,$persona->__GET('apellidos'));
		$statement->bindParam(3,$persona->__GET('dni'));
		$statement->bindParam(2,$persona->__GET('apellidos'));
		$statement->bindParam(3,$persona->__GET('dni'));
    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar(Persona $persona)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call up_buscar_persona(?)");
			$statement->bindParam(1,$persona->__GET('dni'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Persona();

				$per->__SET('id', $r->idpersona);
				$per->__SET('nombres', $r->nombres);
				$per->__SET('apellidos', $r->apellidos);
				$per->__SET('dni', $r->dni);

				$result[] = $per;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>
