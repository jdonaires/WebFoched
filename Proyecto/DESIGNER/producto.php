
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
    <link href="assets/css/estiloF.css" rel="stylesheet" />
  </head>
  <body>
    <center>
    <div id='container'>
      <div class='signup'>
         <form action="" method="post">
           <h1>Productos</h1>
           <select class="" name="">
             <option value="">Bebidas</option>
             <option value="">Platos</option>
           </select>
           <input type='text' name="txt_nombre" placeholder='Nombre'  />
           <input type='text' name="txt_precio" placeholder='Precio: 0.00'  />
           <input type="submit" name="btn_registrar" placeholder='SUBMIT' value="Registrar ">
         </form>
    </center>

  </body>
</html>
