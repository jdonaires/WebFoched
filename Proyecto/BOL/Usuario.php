<?php
class Usuario
{
	private $Id_Usuario;
	private $Nombre;
	private $Pass;
	private $Correo;
	private $Rol;
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
