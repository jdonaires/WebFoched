<?php

include_once "../BOL/Negocio.php";
include_once "../DAO/NegocioDAO.php";

if(isset( $_POST['GET_INFORMACION_NEGOCIOS'] ))
{

    $tempNegocio= json_decode($_POST['GET_UBICACION_NEGOCIOS']);

    $negocio = new Negocio();
    $negocioDAO = new NegocioDAO();

    $negocio->__SET('Razon_Social',$tempNegocio->razon_social);

    $result = $negocioDAO->GET_UBICACION_NEGOCIOS($negocio);
    
    echo(json_encode($result));                
}
?>