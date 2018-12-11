<?php

class Sesion
{
    private $username = null;

    function __CONSTRUCT()
    {
        session_start();
        if(isset($_SESSION["Id_Usuario"])) $this->username=$_SESSION["Id_Usuario"];
    }

    public function get_Usuario()
    {
        return $this->username;
    }
    public function add_Usuario($user/* ,$pass,$recordar*/)
    {
        $_SESSION["Id_Usuario"]=$user;
        $this->username = $user;

        /*
        if ($recordar) {
            setcookie("Usuario",$user,time()+(60 *60));
            setcookie("Pass",$pass,time()+(60 *60));
        }
        */
    }
    public function cerrar_sesion()
    {
        $this->username=null;
        $_SESSION=[];
        session_destroy();
    }
}

?>
