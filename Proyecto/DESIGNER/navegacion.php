<!DOCTYPE html>
<html lang="es">
<head>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="CSS/justified-nav.css" rel="stylesheet">
    <!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
  <div class="header">
  <ul class="social">
    <li><a href="#">Facebook</a>
      <li><a href="#">Instagram</a>
      <li><a href="#">Google</a>
    </li>
  </ul>

  <ul class="session">
    <li><a href="frmLogin.php">Login</a>
    </li>
  </ul>
  </div>
  <div class="logo">
    <a><img src="IMG/LOGO.png" alt="logo" width="50px" height="50px" ></a><!--cambiar logo-->
  </div>
    <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav text-md-center nav-justified w-100">
            <li class="nav-item active">
                <a class="nav-link" href="inicio.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias </a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="Restaurantes.php">Restaurantes</a>
                    <a class="dropdown-item" href="#">Pollerias</a>
                    <a class="dropdown-item" href="#">Chifas</a>
                    <a class="dropdown-item" href="#">Postrerìa</a>
                    <a class="dropdown-item" href="#">Otros</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
            </li>

        </ul>
    </div>
</nav>

        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
