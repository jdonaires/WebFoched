<?php
require_once('../BOL/Usuario.php');
require_once('../DAO/UsuarioDAO.php');

$user = new Usuario();
$userDAO = new UsuarioDAO();
	
if(isset($_POST['RegistrarUsuario']))
{
	$user->__SET('Usuario', $_POST['usuario']);
    $user->__SET('Pass', $_POST['pass']);
    $user->__SET('Correo', $_POST['correo']);
	$userDAO->Registrar($user);
	header('Location: frmLogin.php');
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

        <link href="CSS/Style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div class="masthead">
                <?php include_once ('navegacion.php'); ?>
            </div>

            <center>
            <div class="tab col-md-5">
                <button class="tablinks" onclick="openCity(event, 'login')">Iniciar sesión</button>
                <button class="tablinks" onclick="openCity(event, 'registrarse')">Registrarse</button>
            </div>
            <!-- Tab content -->
        <div class="content-form col-md-5">
					<div id="login" class="tabcontent">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
									<tr>
											<input placeholder="Usuario" maxlength=20 name="usuario" value="" type="text" required="">
									</tr>
									<div class="espacio"> </div>
									<tr>
											<input placeholder="Contraseña" maxlength=20 name="pass" value="" type="password" required="">
									</tr>
									<div class="espacio"> </div>
									<td colspan="2">
											<button type="submit" name="LoginUsuario" class="buttonForm">Iniciar sesión</button>
									</td>
							</form>
					</div>
					<div id="registrarse" class="tabcontent">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
									<tr>
											<input placeholder="Usuario" maxlength=20 name="usuario" value="" type="text" required="">
									</tr>
									<div class="espacio"> </div>
									<tr>
											<input placeholder="Contraseña" maxlength=20 name="pass" value="" type="password" required="">
									</tr>
									<div class="espacio"> </div>
									<tr>
											<input placeholder="Correo" maxlength=25 name="correo" value="" type="email" required="">
									</tr>
									<div class="espacio"> </div>
									<td colspan="2">
											<button type="submit" name="RegistrarUsuario" class="buttonForm">Registrarse</button>
									</td>
							</form>
					</div>
        </div>
        </center>
        </div>
    </body>
		<script src="js/funciones.js"></script>
</html>
