<?php
require_once('../DAL/DBAccess.php');

class UbicacionDAO
{
    private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
    }

    public function GET_UBICACION_NEGOCIOS(Ubicacion $ubicacion)
    {
        try
        {
            $statement = $this->pdo->prepare("CALL SP_GET_UBICACION_NEGOCIOS(?)");
            $statement->bindValue(1,$ubicacion->__GET('Distrito'),PDO::PARAM_STR);
            $statement -> execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
        catch(Exception $ex)
        {
            die($ex->getMessage());
        }
    }

    public function GET_PUNTOS_VENTAS(){
      $statement = $this->pdo->prepare("CALL CALL_SP_BUSCAR_RESTAURANTE()");
      $statement -> execute();
      $option = '';

       foreach ($statement as $key){
         $id = $key['Id_Restaurante'];
         $name = $key['Razon_Social'];
         $option .= '<option value="'.$id.'">'.$name.'</option>';
       }
       
       return $option;
     }
}
?>