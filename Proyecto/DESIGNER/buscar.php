
<?php require ('InicioSesion.php');
include_once "../DAO/UbicacionDAO.php";
$ubicacionDAO = new UbicacionDAO();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Fooched</title>
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/styleModal.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />



    <script src="alertify/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/bootstrap.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRCleE2CV2kBgWDWmOMQMyvSHrXifc1WA"></script>

  </head>
  <body class="landing is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <header id="header" class="alt">
        <?php require_once ('nav.php'); ?>

      </header>

      <!-- Banner -->
      <section id="banner">
        <h2>Fooched</h2>
        <p>Encuentra el mejor establecimiento de comida al mejor precio</p>
        <p>Despliega la barra y selecciona al lugar donde quieres ir, para generar la ruta:</p>
        <select class="txt" onchange="draw_rute(this.value)" id="direccion">
      						<option value="0">Rutas &#8595;</option>
      						<?=$ubicacionDAO->GET_PUNTOS_VENTAS();?>
      					</select>
            <p>Presiona el boton para habilitar el mapa:</p>
        <ul class="actions special">
          <li><button class="button" id="mostrarEstablecimientos">Ver el mapa de establecimientos en Chincha</button></li>
        </ul>
        <section id="map"></section>
      </section>



      

      <section id="list-restaurant" class="box special list">

        <div class="container">
          <div class="row">
            <div class="col-3  fh5co-item-wrap animate-box">
              <div class="fh5co-item">
                <img src="images/pic02.jpg" class="img-restaurant" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
            <h3>Bake Potato Pizza</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
<a href="cateRestaurantes.php" class="button-rest">Ver</a><!--primer cambio-->
</div>
        </div>

        <div class="col-3  fh5co-item-wrap animate-box">
          <div class="item">
            <img src="images/pic02.jpg" class="img-restaurant" alt="">
            <h3>Restaurant</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
            <a href="cateRestaurantes.php" class="button-rest">Ver</a><!--primer cambio-->
          </div>
        </div>

        <div class="col-3  fh5co-item-wrap animate-box">
          <div class="item">
            <img src="images/pic02.jpg" class="img-restaurant" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
            <h3>Restaurant</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
            <a href="cateRestaurantes.php" class="button-rest">Ver</a><!--primer cambio-->
          </div>
        </div>
        <div class="col-3  fh5co-item-wrap animate-box">
          <div class="item">
            <img src="images/pic02.jpg" class="img-restaurant" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
            <h3>Restaurant</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
            <a href="cateRestaurantes.php" class="button-rest">Ver</a><!--primer cambio-->

          </div>
        </div>
      </div>

      </section>
    </section>



      <!-- Footer -->
      <footer id="footer">
        <ul class="icons">
          <li>
            <a href="#" class="icon fa-twitter"
            ><span class="label">Twitter</span></a
            >
          </li>
          <li>
            <a href="#" class="icon fa-facebook"
            ><span class="label">Facebook</span></a
            >
          </li>
          <li>
            <a href="#" class="icon fa-instagram"
            ><span class="label">Instagram</span></a
            >
          </li>
          <li>
            <a href="#" class="icon fa-github"
            ><span class="label">Github</span></a
            >
          </li>
          <li>
            <a href="#" class="icon fa-dribbble"
            ><span class="label">Dribbble</span></a
            >
          </li>
          <li>
            <a href="#" class="icon fa-google-plus"
              ><span class="label">Google+</span></a
              >
          </li>
        </ul>
      </footer>
    </div>
    <!-- Scripts -->


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/buscarMapModal.js?v=2"></script>
    </body>
    </html>
