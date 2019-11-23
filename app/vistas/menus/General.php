<!-- Level one dropdown -->
<li class="nav-item dropdown">
  <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><?php echo $_SESSION[$this->_config->obtener('sesion/correo')]; ?></a>
  <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarCambiarPasswordUsuario">Cambiar contraseña</a>
    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase').$this->_config->obtener('dir/salir'); ?>">Cerrar sesión</a></li>

    <li class="dropdown-divider"></li>

    <!-- Level two dropdown-->
    <li class="dropdown-submenu">
      <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
      <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
        <li>
          <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
        </li>

        <!-- Level three dropdown-->
        <li class="dropdown-submenu">
          <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
          <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
            <li><a href="#" class="dropdown-item">3rd level</a></li>
            <li><a href="#" class="dropdown-item">3rd level</a></li>
          </ul>
        </li>
        <!-- End Level three -->
        <li><a href="#" class="dropdown-item">level 2</a></li>
        <li><a href="#" class="dropdown-item">level 2</a></li>
      </ul>
    </li>
    <!-- End Level two -->
  </ul>
</li>
<!-- End Level one -->


    