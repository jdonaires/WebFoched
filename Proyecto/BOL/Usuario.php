<?php
class Usuario
{
	private $Id_usuario;
	private $Usuario;
	private $Pass;
	private $Correo;
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
