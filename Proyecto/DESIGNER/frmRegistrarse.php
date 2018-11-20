<?php
require_once('../BOL/Usuario.php');
require_once('../DAO/UsuarioDAO.php');

$user = new Usuario();
$userDAO = new UsuarioDAO();

	
if(isset($_POST['RegistrarUsuario']))
{
	$var_usuario 	= $_POST["usuario"];
	$var_pass 		= $_POST["pass"];
	$var_correo 	= $_POST["correo"];

	$user->__SET('Usuario', $var_usuario);
    $user->__SET('Pass', 	$var_pass);
    $user->__SET('Correo', 	$var_correo);
	$userDAO->Registrar($user);

	// header('Location: index.php'); 
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web">
        <meta name="author" content="Ingenieria De Sistemas X">
        <title>Login</title>

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link href="assets/css/StyleLogin.css" rel="stylesheet">

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
							<input type="text" placeholder="Usuario" maxlength=20 name="usuario" required ="" />
							</tr>
						<span><i class="fa fa-envelope-o"></i></span>
						</div>
						<div class="input">
							<tr>
							<input type="password" placeholder="Password" maxlength=20 name="pass" required =""/>
							</tr>
						<span><i class="fa fa-lock"></i></span>
						</div>
						<div class="input">
							<tr>
							<input type="email" placeholder="Email" maxlength=25 name="correo" required="" />
							</tr>
							
						<span><i class="fa fa-envelope-o"></i></span>
						</div>
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
