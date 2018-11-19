<?php
class Persona
{
	private $id;
	private $nombres;
	private $apellidos;
	private $correo;
	private $sexo;
	private $fecha_nacimiento;
	private $dni;
	private $Usuario_Creacion;
	private $PC_Creacion;
	private $Fecha_Creacion;

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
