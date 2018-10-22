<?php
class Restaurante_Nivel_Economico
{
	private $Id;
  private $Id_Restaurante;
  private $Id_Nivel;
	private $Usuario_Creacion
	private $PC_Creacion
	private $Fecha_Creacion
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
