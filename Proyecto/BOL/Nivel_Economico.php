<?php
class Nivel_Economico
{
	private $Id_Nivel;
	private $Nombre;
  private $Descripcion;
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
