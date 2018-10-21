<?php
class Usuario
{
	private $Id_usuario;
	private $Usuario;
	private $Pass;
	private $Correo;
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
