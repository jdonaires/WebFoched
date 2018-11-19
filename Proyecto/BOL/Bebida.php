<?php
class Bebida
{
	private $Id_Bebida;
  private $Id_Restaurante;
	private $Nombre;
  private $Descripcion;
  private $Precio;
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
