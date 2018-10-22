<?php
class Restaurante_Categoria
{
	private $Id;
  private $Id_Restaurante;
  private $Id_Categoria;
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
