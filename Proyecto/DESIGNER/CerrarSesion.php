
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cerrar Sesión</title>

    <link rel="stylesheet" href="assets/css/style.css" />

	<script src="alertify/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/bootstrap.css">
</head>
<body>
	
</body>
</html>

<?php
include_once ('../DAO/Sesion.php');
$objSes = new Sesion();
if ($objSes->get_Usuario() != null) {
	$objSes->cerrar_sesion();

	echo'	<script>;
				alertify.success("Cerrando Sesión...");
			</script>';
	header ("Refresh:1; url=index.php");
   }
else
	echo'	<script>
				alertify.error("Debe Iniciar Sesion Primero.");
			</script>';

?>