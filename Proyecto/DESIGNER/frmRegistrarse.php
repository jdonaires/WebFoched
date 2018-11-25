<?php require ('InicioSesion.php'); ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web">
        <meta name="author" content="Ingenieria De Sistemas X">
        <title>Registro</title>

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
					<?php include ('nav.php');?>
				</header>
				
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
					<div class="login">
						<legend class="legend">Registrarse</legend>
						<div class="input">
							<tr>
							<input type="text" placeholder="Usuario" maxlength=20 name="Usuario" required ="" />
							</tr>
						<span><i class="fa fa-user"></i></span>
						</div>
						<div class="input">
							<tr>
							<input type="password" placeholder="Contraseña" maxlength=20 name="Pass" required ="" />
							</tr>
						<span><i class="fa fa-lock"></i></span>
						</div>
						<div class="input">
							<tr>
							<input type="email" placeholder="Correo" maxlength=20 name="Correo" required ="" />
							</tr>
						<span><i class="fa fa-envelope"></i></span>
						</div>
						<?php
							require_once('../BOL/Usuario.php');
							require_once('../DAO/UsuarioDAO.php');

							$user = new Usuario();
							$userDAO = new UsuarioDAO();

							$userTemp = "";
							$userTemp = $objSe->get_Usuario();
							
								
							if ($userTemp != null) {
							$DatosObtenidos;
							$user->__SET('Usuario', 	$userTemp);
							$DatosObtenidos = $userDAO->Buscar($user);
							
							
							if ($DatosObtenidos["Rol"] == "Admin") {
								echo'	<div class="input">
										<tr>
										<select id="Rol" name="Rol"><span><i class="fa fa-briefcase"></i></span>
											<option value="" disabled selected>Seleccionar</option>
											<option value="Admin">Admin</option>
											<option value="Normal">Normal</option>
										</select> 
										</tr>
										</div> 
									';
							}
						}
      					?>	
						<td colspan="2">
							<button type="submit" name="RegistrarUsuario" class="submit"><i class="fa fa-long-arrow-right"></i></button>
						</td>
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

	
if(isset($_POST['RegistrarUsuario']))
{

	$user->__SET('Usuario', 	$_POST["Usuario"]);
    $user->__SET('Pass', 		$_POST["Pass"]);
	$user->__SET('Correo', 		$_POST["Correo"]);

	if( !empty($_POST['Rol'])){
		$user->__SET('Rol', $_POST['Rol']);
	}

	
	$validar = $userDAO->Registrar($user);
	if ($validar = '1') {
		echo'	<script>;
					alertify.success("Registro Completado.");
				</script>';
		
	} else {
		echo'	<script>;
					alertify.error("Error Rellene Los Campos Correctamente.");
				</script>';
	};
}
?>
