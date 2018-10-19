<?php
class Usuario
{
	private $Id_Usuario;
	private $Usuario;
	private $Pass;
	private $correo;
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
