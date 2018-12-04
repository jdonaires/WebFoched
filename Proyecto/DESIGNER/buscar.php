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
    <link rel="stylesheet" href="assets/css/restaurantes.css" />


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

      </section>
      <!-- Main -->
      <div class="campo-busqueda">
        <div class="input input-txt ">
            <label>Dónde ir</label>
                  <span class="input-icon ubicacion">
                    <input type="text" id="nombre_mixto" name="nombre_mixto" value="" placeholder="Introduce plato, distrito, restaurant..." class="default-input ui-autocomplete-input" />
                    <input type="hidden" id="id_destino" name="id_destino" value=""/>
                  </span>
        </div>
  </div>

          <div class="columns large-5 pad0">
            <div class="campo-tipo campo-show ">
              <label for="tipo_cocina"><span>¿Donde?¿Qué tipo de cocina?</span></label>
            <div class="select-wrapper">
<select name="tipo_cocina" id="tipo_cocina" data-placeholder="Cualquier tipo" class="category select-native select-native--white-no-border" title="¿Qué tipo de cocina?">
          <option value="0">Cualquier tipo</option>
              <optgroup label="Tipo de Restaurant">
                  <option value="">Polleria</option>
                  <option value="">Fusión</option>
                  <option value="">Pescado</option>
                  <option value="">Parrillada</option>
                  <option value="">Cafetería</option>
                  <option value="">Casera</option>
                  <option value="">Cebichería</option>
                  <option value="">Chifa</option>
                  <option value="">De Mercado</option>
                  <option value="">Típicas</option>
                  <option value="">Variada</option>

              </optgroup>
              <optgroup label="Distrito">
                  <option value="">Pueblo Nuevo</option>
                  <option value="">Chincha Baja</option>
                  <option value="">Chincha Baja</option>
                  <option value="">Pueblo Nuevo</option>
                  <option value="">Grocio Prado</option>
                  <option value="">Sunampe</option>
              </optgroup>
        </select>
      </div>
  </div>


                </div>
                <div class="hom-buscador-btn campo-show form-submit columns end medium-4 medium-centered large-2 large-uncentered">
                  <input class="btn large" id="btnBuscar" type="submit" value="BUSCAR">
                </div>
                </div>
          </form>
        </div>
        </div>




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
