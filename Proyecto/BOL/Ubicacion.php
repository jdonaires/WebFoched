<?php
class Ubicacion
{
	private $Id_Ubicacion;
  	private $Id_Restaurante;
	private $Nombre;
	private $Direccion;
	private $Referencia;
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
