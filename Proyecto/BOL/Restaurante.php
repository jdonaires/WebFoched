<?php
class Restaurante
{
	private $Id_Restaurante;
	private $Razon_Social;
	private $RUC_DNI;
	private $Logo_Imagen;
  	private $Direccion_Red_Social;
	private $Usuario_Creacion;
	private $PC_Creacion;
	private $Fecha_Creacion;
	private $Estado;

	public function __GET($x)
	{
		return $this->$x;
	}
	public function __SET($x, $y)
	{
		return $this->$x = $y;
	}
}
?>
