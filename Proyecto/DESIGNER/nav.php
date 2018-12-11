

<nav id="nav">
  <ul>
          <?php
            if ($objSe->get_Usuario() != null) {
                $ver = $objSe->get_Usuario();
                echo ('<li><a class="icon fa-user-circle">Bienvenido &nbsp: &nbsp '.$ver.'</a></li>');
            } else echo null;
          ?>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="buscar.php">Buscar</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li>
      <a href="#" class="icon fa-angle-down">Administrar</a>
      <ul>
      <?php
        require_once('../BOL/Usuario.php');
        require_once('../DAO/UsuarioDAO.php');

        $user = new Usuario();
        $userDAO = new UsuarioDAO();

        $userTemp = "";
        $userTemp = $objSe->get_Usuario();
        
              
        if ($userTemp != null) {
          $DatosObtenidos;
          $user->__SET('Id_Usuario', 	$userTemp);
          $DatosObtenidos = $userDAO->Buscar($user);
          
          if ($DatosObtenidos["Rol"] == "Admin") {
            echo "<li><a href='Negocio.php'>Registrar Negocio</a></li>";
          }
        } else echo null;
        
      ?>

      <?php
        require_once('../BOL/Usuario.php');
        require_once('../DAO/UsuarioDAO.php');

        $user = new Usuario();
        $userDAO = new UsuarioDAO();

        $userTemp = "";
        $userTemp = $objSe->get_Usuario();
        
              
        if ($userTemp != null) {
          $DatosObtenidos;
          $user->__SET('Id_Usuario', 	$userTemp);
          $DatosObtenidos = $userDAO->Buscar($user);
          
          if ($DatosObtenidos["Rol"] == "Admin") {
            echo "<li><a href='producto.php'>Registrar Productos</a></li>";
          }
        } else echo null;
        
      ?>
        <li><a href="generic.php">Generic</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="elements.php">Elements</a></li>
        <li>
          <a href="#">Submenu</a>
          <ul>
            <li><a href="#">Option One</a></li>
            <li><a href="#">Option Two</a></li>
            <li><a href="#">Option Three</a></li>
            <li><a href="#">Option Four</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <?php
            if ($objSe->get_Usuario() == null) {
             echo"<li><a ";
                if ($objSe->get_Usuario() == null) {
                    echo ("href='frmIngresar.php'");
                } else echo "href=''"; 
              echo "class='button'>";
              echo "Ingresar";
              echo "</a></li>";
            } else echo null; 
    ?>
    <li><a href="frmRegistrarse.php" class="button">Registrarse</a></li>
    <?php
            if ($objSe->get_Usuario() != null) {
             echo"<li><a ";
                if ($objSe->get_Usuario() != null) {
                    echo ("href='CerrarSesion.php'");
                } else echo "href=''"; 
              echo "class='button'>";
              echo "Cerrar Sesión";
              echo "</a></li>";
            } else echo null; 
    ?>
        <li>
    </li>
  </ul>
</nav>


