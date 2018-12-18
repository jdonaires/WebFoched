<?php

include_once "../BOL/Ubicacion.php";
include_once "../DAO/UbicacionDAO.php";

if(isset( $_POST['GET_UBICACION_NEGOCIOS'] ))
{

    $tempUbicacion= json_decode($_POST['GET_UBICACION_NEGOCIOS']);

    $ubicacion = new Ubicacion();
    $ubicacionDAO = new UbicacionDAO();

    $ubicacion->__SET('Distrito',$tempUbicacion->razon_social);

    $result = $ubicacionDAO->GET_UBICACION_NEGOCIOS($ubicacion);
    
    echo(json_encode($result));                
}
?>