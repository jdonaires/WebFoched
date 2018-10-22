<?php
class Contacto
{
	private $Id_Contacto;
  private $Id_Restaurante;
  private $Rol /*1 - Dueño || 2 - Adminstrador || 3 - Gerente || ... */
	private $Nombres;
  private $Apellidos;
	private $Numero_1;
	private $Numero_2;
  private $Numero_3;
  private $Direccion_Red_Social;
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
