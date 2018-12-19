
<?php require ('InicioSesion.php');
include_once "../DAO/NegocioDAO.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <script src="alertify/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/bootstrap.css">
</head>
<body class="landing is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <header id="header" class="alt">
      
        <?php require_once ('nav.php'); ?>

      </header>

      <body>
<?php

$infoNegocio = '';
    include_once "../BOL/Negocio.php";
    include_once "../DAO/NegocioDAO.php";
    if(isset( $_POST['GET_INFORMACION_NEGOCIOS'] ))
    {

        $tempNegocio= json_decode($_POST['GET_INFORMACION_NEGOCIOS']);

        $negocio = new Negocio();
        $negocioDAO = new NegocioDAO();

        $negocio->__SET('Razon_Social',$tempNegocio->razon_social);

        $infoNegocio = $negocioDAO->GET_INFORMACION_NEGOCIOS($negocio);    
        echo(json_encode($infoNegocio));
        
    }
    ?>
          <!-- Banner -->
          <section id='banner'>
          <h2><?php$infoNegocio['razon_social']?></h2>
      <!-- <script>console.log(<?php $infoNegocio['razon_social'] ?>);</script> -->
          <p></p>
      </section>    
          
</body>
</html>