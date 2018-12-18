<?php require ('InicioSesion.php'); ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web">
        <meta name="author" content="Ingenieria De Sistemas X">
        <title>Ingresar</title>

		<link rel="stylesheet" href="assets/css/main.css"/>
		<link href="assets/css/StyleLogin.css" rel="stylesheet">

		
		<script src="alertify/alertify.js"></script>
    	<link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    	<link rel="stylesheet" type="text/css" href="alertify/css/themes/bootstrap.css">

    </head>
    <body class="is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<?php require ('nav.php'); ?>
				</header>

				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
					<div class="login">
						<legend class="legend">Ingresar</legend>
						
						<div class="input">
							<input type="text" placeholder="DNI" maxlength=8 name="Id_Usuario" required ="" />
						<span><i class="fa fa-user"></i></span>
						</div>
						
						<div class="input">
							<input type="password" placeholder="Contraseña" maxlength=20 name="Pass" required =""/>
						<span><i class="fa fa-lock"></i></span>
						</div>

						<div hidden="" class="ckb">
							 <input type="checkbox" id="switch" name="recordar" <?php /* if (isset($_COOKIE["Usuario"])) */ ?> /> <label class="lbl" for="switch">Recordar Contraseña</label>
						</div>

						<button type="submit" name="LoginUsuario" class="submit"><i class="fa fa-long-arrow-right"></i></button>
					
						<div class="feedback">
						Ingresando...
						</div>
					</div>
				
				</form>
		</div>
    </body>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	  
	<script src="assets/js/funciones.js"></script>
	<script src="assets/js/Login.js"></script>
</html>

<?php
require_once('../BOL/Usuario.php');
require_once('../DAO/UsuarioDAO.php');

$user = new Usuario();
$userDAO = new UsuarioDAO();
	
if(isset($_POST['LoginUsuario']))
{
	$DatosObtenidos;
    $user->__SET('Nombre', $_POST["Id_Usuario"]);
	$DatosObtenidos = $userDAO->Buscar($user);

	if ($DatosObtenidos["Pass"] == sha1($_POST["Pass"])) {
		/*
		if (isset($_POST["recordar"])) {
			$objSe->add_Usuario($DatosObtenidos["Usuario"],$DatosObtenidos["Pass"],true);
		}
		else{
			$objSe->add_Usuario($DatosObtenidos["Pass"],$DatosObtenidos["Pass"],false);
		}
		*/

		$objSe->add_Usuario($DatosObtenidos["Nombre"]);
		
		echo'	<script>;
					alertify.success("Ingresando...");
				 </script>';
		header ("Refresh:1; url=index.php");
	}
	else
		echo '	<script>
		 			alertify.error("Usuario o Contraseña Incorrecta.");
		 		</script>';
}
?>