
<?php require ('InicioSesion.php'); ?>

<?php
    // Verificar Si Existe Una Sesión.
    try {
      if ($objSe->get_Usuario() == null) {
            echo'	<script>;
                    alertify.error("Debe Iniciar Session Primero.");
                  </script>';
            header('Location: frmIngresar.php');
    }
    } catch (Exception $e){
      die($e->getMessage());
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
        <title>Registro Del Negocio</title>
        <link rel="stylesheet" href="assets/css/main.css"/>
        <link href="assets/css/StyleRegistroNegocio.css" rel="stylesheet" />

        <script src="alertify/alertify.js"></script>
        <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="alertify/css/themes/bootstrap.css">

  </head>
  <body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
          <?php include_once ('Nav.php'); ?>
        </header>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="formulario">
          <p class="titulo_formulario">Registro Del Negocio</p>

          <!-- Campos de información -->
          
          <h3>Datos Generales</h1>

          <input placeholder="* Razon Social" class="input_textual"  maxlength=50 name="Razon_Social" value="" type="text" required="">
          <input placeholder="* RUC o DNI" class="input_textual" onkeypress="return validarSoloNumeros(event)" maxlength=11 name="RUC_DNI" value="" type="text" required="">
          <input placeholder="Dirección De Red Social Del Negocio" class="input_textual" maxlength=50 name="Direccion_Red_Social" value="" type="text" required="">

          <h3>Datos Del Contacto</h1>

          <input placeholder="* Cargo" class="input_textual" maxlength=20 onkeypress="return validarSoloLetras(event)" name="Rol" value="" type="text" required="">
          <input placeholder="* Nombres" class="input_textual" maxlength=20 onkeypress="return validarSoloLetras(event)" name="Nombres" value="" type="text" required="">
          <input placeholder="* Apellidos" class="input_textual" maxlength=20 onkeypress="return validarSoloLetras(event)" name="Apellidos" value="" type="text" required="">
          <input placeholder="* Número de celular" class="input_textual" onkeypress="return validarSoloNumeros(event)"  maxlength=20 name="Numero_1" value="" type="text" required="">
          <input placeholder="Número de celular 2" class="input_textual" onkeypress="return validarSoloNumeros(event)" maxlength=20 name="Numero_2" value="" type="text" required>
          <input placeholder="Número de celular 3" class="input_textual" onkeypress="return validarSoloNumeros(event)" maxlength=20 name="Numero_3" value="" type="text"required>
          <input placeholder="Dirección De Red Social Del Contacto" class="input_textual" maxlength=11 name="Direccion_Red_Social_Contacto" value="" type="text" required="">
          <input placeholder="* Nombre" class="input_textual" maxlength=20 name="Nombre" value="" type="text" required>

          <h3>Datos De Ubicacion</h1>
          <input placeholder="* Nombre" class="input_textual" maxlength=20 name="Nombre" value="" type="text" required>
          <input placeholder="* Dirección" class="input_textual" maxlength=20 name="Direccion" value="" type="text" required>
          <input placeholder="Referencia" class="input_textual" maxlength=500 name="Referencia" value="" type="text" required>

          <h3>Logo Del Negocio</h1>
          <div class="upload-image preview-img-upload">
            <div class="preview-img-holder">
              <span class="remove-image fa fa-times"></span>
              <div class="img-holder">
                <img
                  class="preview-img"
                  src=""
                  alt="foto de perfil"
                  title="foto de perfil"
                  draggable="false"
                />
              </div>
            </div>
            <label class="input-holder"
              ><span class="icon fa fa-camera-retro"></span>
              <input class="hide" type="file" accept="image/*" />
            </label>
          </div>

          <td colspan="2">
          <button type="submit" class="input_boton" name="Registrar_Negocio">
            <i class="fa fa-save"></i> 
            Registrar
          </button>
          </td>                      
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
      <script src="assets/js/Logo.js"></script>
</html>

<?php
require_once('../BOL/Negocio.php');
require_once('../BOL/Contacto.php');
require_once('../BOL/Ubicacion.php');

require_once('../DAO/NegocioDAO.php');

$negocio = new Negocio();
$contacto = new Contacto();
$ubicacion = new Ubicacion();

$negocio_dao = new NegocioDAO();

if(isset($_POST['Registrar_Negocio']))
{
	  $negocio->__SET('Razon_Social',         $_POST["Razon_Social"]);
    $negocio->__SET('RUC_DNI', 	            $_POST["RUC_DNI"]);
    $negocio->__SET('Direccion_Red_Social', $_POST["Direccion_Red_Social"]);

    $contacto->__SET('Rol',       $_POST["Rol"]);
    $contacto->__SET('Nombres',   $_POST["Nombres"]);
    $contacto->__SET('Apellidos', $_POST["Apellidos"]);
    $contacto->__SET('Numero_1',  $_POST["Numero_1"]);
    $contacto->__SET('Numero_2', 	$_POST["Numero_2"]);
    $contacto->__SET('Numero_3',  $_POST["Numero_3"]);
    $contacto->__SET('Direccion_Red_Social_Contacto',   $_POST["Direccion_Red_Social_Contacto"]);

    $ubicacion->__SET('Nombre',           $_POST["Nombre"]);
    $ubicacion->__SET('Direccion',        $_POST["Direccion"]);
    $ubicacion->__SET('Referencia',       $_POST["Referencia"]);

    
    $validar = $negocio_dao->Registrar_Negocio($negocio,$contacto,$ubicacion);
    if ($validar = '1') {
      echo'	<script>;
            alertify.success("Registro Completado.");
          </script>';
      header ("Refresh:2; url=frmIngresar.php");
    } else {
      echo'	<script>;
            alertify.error("Error Rellene Los Campos Correctamente.");
          </script>';
    }
}
?>