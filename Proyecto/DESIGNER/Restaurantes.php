<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web">
    <meta name="author" content="Ingenieria De Sistemas X">

    <title>Restaurantes</title>
    <link href="CSS/StyleRestaurantes.css?ver=1.3" rel="stylesheet">

</head>
  <body>
  <div class="container">
        <div class="masthead">
             <?php include_once ('navegacion.php'); ?>
        </div>
    </div>
    <h1>Registro Del Negocio</h1>

    <center>
        <div class="content-form col-md-7">
            <div id="Registro" class="tabcontent">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <div class="">
                        <tr>
                            <h3>Datos Generales</h1>
                        </tr>
                        <tr>
                            <input placeholder="* Razon Social"  maxlength=50 name="Razon_Social" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="* RUC o DNI" onkeypress="return validarSoloNumeros(event)" maxlength=11 name="RUC_DNI" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="Dirección De Red Social Del Negocio" onkeypress="" maxlength=11 name="Direccion_Red_Social" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <h3>Datos Del Contacto</h1>
                        </tr>
                        <tr>
                            <input placeholder="* Cargo" maxlength=20 onkeypress="return validarSoloLetras(event)" name="Rol" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="* Nombres" maxlength=20 onkeypress="return validarSoloLetras(event)" name="Nombres" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="* Apellidos" maxlength=20 onkeypress="return validarSoloLetras(event)" name="Apellidos" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="* Número de celular" onkeypress="return validarSoloNumeros(event)"  maxlength=20 name="Numero_1" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="Número de celular 2" onkeypress="return validarSoloNumeros(event)" maxlength=20 name="Numero_2" value="" type="text" required>
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="Número de celular 3" onkeypress="return validarSoloNumeros(event)" maxlength=20 name="Numero_3" value="" type="text"required>
                        </tr>
                            <div class="espacio"> </div>
                        <tr>
                            <input placeholder="Dirección De Red Social Del Contacto"  maxlength=11 name="Direccion_Red_Social_Contacto" value="" type="text" required="">
                        </tr>
                            <div class="espacio"> </div>
                    </div>

                    <div class="">
                        <tr>
                            <h3>Datos De Ubicacion</h1>
                        </tr>
                        <tr>
                            <input placeholder="* Nombre" maxlength=20 name="Nombre" value="" type="text" required>
                        </tr>
                        <div class="espacio"> </div>
                        <tr>
                            <input placeholder="* Dirección" maxlength=20 name="Direccion" value="" type="text" required>
                        </tr>
                        <div class="espacio"> </div>
                        <tr>
                            <input placeholder="Referencia" maxlength=500 name="Referencia" value="" type="text" required>
                        </tr>
                        <div class="espacio"> </div>
                        <td colspan="2">
                            <button style="margin-top:10px;" type="submit" name="Registrar_Negocio" class="buttonForm">Guardar Datos</button>
                        </td>
                    </div>
                </form>
            </div>
        </div>
    </center>
  </body>
  <script src="js/funciones.js"></script>
</html>
