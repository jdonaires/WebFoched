<?php
class Ubicacion
{
	private $Id_Ubicacion;
  	private $Id_Restaurante;
	private $Distrito;
	private $Direccion;
	private $Referencia;
	private $Estado;
	private $lat;
	private $lng;

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
