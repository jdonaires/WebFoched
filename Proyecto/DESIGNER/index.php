<?php require ('InicioSesion.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fooched</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <script src="alertify/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/bootstrap.css">

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
        <ul class="actions special">
          <!-- <li><a href="#" class="button">Contactenos</a></li> -->
        </ul>
      </section>

      <!-- Main -->
      <section id="main" class="container">
        <section class="box special">
          <header class="major">
            <h2>
              Anuncia Con Nosotros Y Aumentas Tus Ventas.
            </h2>
          </header>
          <span class="image featured">
            <ul class="slides">
              <input type="radio" name="radio-btn" id="img-1" checked />
              <li class="slide-container">
                <div class="slide">
                  <img
					src="IMG/bg1.png"
                  />
                </div>
                <div class="nav">
                  <label for="img-6" class="prev">&#x2039;</label>
                  <label for="img-2" class="next">&#x203a;</label>
                </div>
              </li>

              <input type="radio" name="radio-btn" id="img-2" />
              <li class="slide-container">
                <div class="slide">
                  <img
				  src="IMG/car1.jpg"
                  />
                </div>
                <div class="nav">
                  <label for="img-1" class="prev">&#x2039;</label>
                  <label for="img-3" class="next">&#x203a;</label>
                </div>
              </li>

              <input type="radio" name="radio-btn" id="img-3" />
              <li class="slide-container">
                <div class="slide">
                  <img
				  src="IMG/slide_9.jpg"
                  />
                </div>
                <div class="nav">
                  <label for="img-2" class="prev">&#x2039;</label>
                  <label for="img-4" class="next">&#x203a;</label>
                </div>
              </li>

              <input type="radio" name="radio-btn" id="img-4" />
              <li class="slide-container">
                <div class="slide">
                  <img
				  src="IMG/slide_2.jpg"
                  />
                </div>
                <div class="nav">
                  <label for="img-3" class="prev">&#x2039;</label>
                  <label for="img-5" class="next">&#x203a;</label>
                </div>
              </li>

              <input type="radio" name="radio-btn" id="img-5" />
              <li class="slide-container">
                <div class="slide">
                  <img
				  src="IMG/slide_7.jpg"
                  />
                </div>
                <div class="nav">
                  <label for="img-4" class="prev">&#x2039;</label>
                  <label for="img-6" class="next">&#x203a;</label>
                </div>
              </li>

              <input type="radio" name="radio-btn" id="img-6" />
              <li class="slide-container">
                <div class="slide">
                  <img
				  src="IMG/slide_3.jpg"
                  />
                </div>
                <div class="nav">
                  <label for="img-5" class="prev">&#x2039;</label>
                  <label for="img-1" class="next">&#x203a;</label>
                </div>
              </li>

              <li class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                <label for="img-6" class="nav-dot" id="img-dot-6"></label>
              </li>
            </ul>
          </span>
        </section>

        <section class="box special features">
				<h2>Categorias</h2>
          <div class="features-row">
            <section>
					<span class="icon major"><img style="width: 75px; min-height: 75px;" src="IMG/Logos/LogoRestaurante.png" alt=""></span>
					<h3>Restaurantes</h3>
              <p>
                Integer volutpat ante et accumsan commophasellus sed aliquam
                feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
                dolore magna aliquam veroeros.
			  </p>
			  <a href="#" class="button">Ir Categoria Restaurantes</a>
            </section>
            <section>
					<span class="icon major"><img style="width: 75px; min-height: 75px;" src="IMG/Logos/LogoPolleria.png" alt=""></span>
					<h3>Pollerias</h3>
              <p>
                Integer volutpat ante et accumsan commophasellus sed aliquam
                feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
                dolore magna aliquam veroeros.
			  </p>
			  <a href="#" class="button">Ir Categoria Pollerias</a>
            </section>
          </div>
          <div class="features-row">
            <section>
              <span class="icon major"><img style="width: 75px; min-height: 75px;" src="IMG/Logos/LogoCevicheria.png" alt=""></span>
              <h3>Cevicherias</h3>
              <p>
                Integer volutpat ante et accumsan commophasellus sed aliquam
                feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
                dolore magna aliquam veroeros.
			  </p>
			  <a href="#" class="button">Ir Categoria Cevicherias</a>
            </section>
            <section>
				<span class="icon major"><img style="width: 75px; min-height: 75px;" src="IMG/Logos/LogoAnticucheria.png" alt=""></span>
				<h3>Anticucherias</h3>
              	<p>
                Integer volutpat ante et accumsan commophasellus sed aliquam
                feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
                dolore magna aliquam veroeros.
				  </p>
				  <a href="#" class="button">Ir Categoria Anticucherias</a>
            </section>
          </div>
        </section>
        <div class="row">
          <div class="col-6 col-12-narrower">
            <section class="box special">
              <span class="image featured"
                ><img src="images/pic02.jpg" alt=""
              /></span>
              <h3>Sed lorem adipiscing</h3>
              <p>
                Integer volutpat ante et accumsan commophasellus sed aliquam
                feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
                dolore magna aliquam veroeros.
              </p>
              <ul class="actions special">
                <li><a href="#" class="button alt">Learn More</a></li>
              </ul>
            </section>
          </div>
          <div class="col-6 col-12-narrower">
            <section class="box special">
              <span class="image featured"
                ><img src="images/pic03.jpg" alt=""
              /></span>
              <h3>Accumsan integer</h3>
              <p>
                Integer volutpat ante et accumsan commophasellus sed aliquam
                feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
                dolore magna aliquam veroeros.
              </p>
              <ul class="actions special">
                <li><a href="#" class="button alt">Learn More</a></li>
              </ul>
            </section>
          </div>
        </div>
      </section>

      <!-- CTA -->

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
  </body>
</html>
