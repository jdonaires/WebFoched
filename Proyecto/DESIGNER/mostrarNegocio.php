
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

          <!-- Banner -->
          <section id="banner">
        <h2>Pizzeria Don Giuseppi</h2>

        <p><?php ?>ubicada en</p>
      </section>
</body>
</html>