<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web">
    <meta name="author" content="Ingenieria De Sistemas X">

    <title>Restaurantes</title>
    <link href="CSS/StyleRestaurantes.css?ver=1.2" rel="stylesheet">

</head>
  <body>
    <div class="container">
        <div class="masthead">
             <?php include_once ('navegacion.php'); ?>
        </div>
    </div>
    <h1>NO SÉ QUE PONER</h1>

    <center>
      <div class="content-form col-md-7">
        <div id="Registro" class="tabcontent">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <div class="mitad">
                <tr>
                    <input placeholder="* Razon Social"  maxlength=50 name="razon_social" value="" type="text" required="">
                </tr>
                <div class="espacio"> </div>
                <tr>
                    <input placeholder="* RUC o DNI" onkeypress="return validarSoloNumeros(event)" maxlength=11 name="ruc_dni" value="" type="text" required="">
                </tr>
                <div class="espacio"> </div>
                <tr>
                    <input placeholder="* Nombres" maxlength=20 onkeypress="return validarSoloLetras(event)" name="nombres" value="" type="text" required="">
                </tr>
                <div class="espacio"> </div>
                <tr>
                    <input placeholder="* Apellidos" maxlength=20 onkeypress="return validarSoloLetras(event)" name="apellidos" value="" type="text" required="">
                </tr>
                <div class="espacio"> </div>
                <tr>
                <input placeholder="* Cargo" maxlength=20 onkeypress="return validarSoloLetras(event)" name="apellidos" value="" type="text" required="">
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
                <!-- <div class="espacio"> </div> -->

              </div>
                <div class="mitad">
                  <tr>
                      <input placeholder="Red Social" maxlength=20 name="red_social" value="" type="text" required>
                  </tr>
                  <div class="espacio"> </div>
                  <tr>
                      <input placeholder="Dirección" maxlength=20 name="pass" value="" type="text" required>
                  </tr>
                  <div class="espacio"> </div>
                  <tr>
                      <input placeholder="Referencia de la dirección" maxlength=500 name="pass" value="" type="text" required>
                  </tr>
                  <div class="espacio"> </div>
                  <tr>
                      <input placeholder="Latitud" maxlength=20 name="pass" value="" type="text" required>
                  </tr>
                  <div class="espacio"> </div>
                  <tr>
                      <input placeholder="Longitud" maxlength=20 name="pass" value="" type="text" required>
                  </tr>
                  <div class="espacio"> </div>
                  <tr>
                      <input placeholder="Red Social" maxlength=20 name="pass" value="" type="text" required>
                  </tr>
                  <div class="espacio"> </div>
                  <tr>
                      <input placeholder="Red Social" maxlength=20 name="pass" value="" type="text" required>
                  </tr>

                  <div class="espacio"> </div>
                  <tr>
                      <input placeholder="Contraseña" maxlength=20 name="pass" value="" type="text" required="">
                  </tr>
                </div>
                <div class="espacio"> </div>
                <td colspan="2">
                    <button style="margin-top:10px;" type="submit" name="LoginUsuario" class="buttonForm">Guardar Datos</button>
                </td>
            </form>
        </div>
    </center>
  </body>
  <script src="js/funciones.js"></script>
</html>
