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
        <p>Encuentra El Mejor Establecimiento De Comida, Al Mejor Precio.</p>
        <ul class="actions special">
          <li><a href="#" class="button">Contactenos</a></li>
        </ul>
      </section>
      <!-- Main -->
      <section id="main" class="container">
        <section class="box special">
          <form role="form">
              <div class="form-group input-group" style="height:50%; padding-left: 50px; padding-right: 50px;">
                  <input type="text" class="form-control btn-light" id="inputBuscar" placeholder="Buscar" style="background-color: #f5f5f5; color: #000000;">
                  <samp style="padding-left: 50px;"></samp>
                  <div class="form-group">
                      <select id="formInput25" class="form-control btn-light" style="background-color: #f5f5f5; color: #000000;">
                          <option>Todos</option>
                          <option>Pollerias</option>
                          <option>Restaurantes</option>
                      </select>
                  </div>
                  <samp style="padding-left: 50px;"></samp>
                  <button type="submit" class="btn btn-light" style="height: 100%; background-color: #f5f5f5; color: #000000;">Buscar</button>
              </div>
          </form>

        </section>


                <!-- Table -->
                  <section class="box">
                    <h3>Restaurant</h3>

                    <h4>Menu</h4>
                    <div class="table-wrapper">
                      <table>
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Something</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                          </tr>
                          <tr>
                            <td>Nothing</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                          </tr>
                          <tr>
                            <td>Something</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                          </tr>
                          <tr>
                            <td>Nothing</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                          </tr>
                          <tr>
                            <td>Something</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
          </section >

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
