<?php
class Usuario
{
	private $Usuario;
	private $Pass;
	private $Correo;
	
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
