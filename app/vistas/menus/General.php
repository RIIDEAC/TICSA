<!-- Level one dropdown -->
<li class="nav-item dropdown">
  <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><?php echo $_SESSION[$this->_config->obtener('sesion/correo')]; ?></a>
  <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarCambiarPasswordUsuario">Cambiar contraseña</a>
    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase').$this->_config->obtener('dir/salir'); ?>">Cerrar sesión</a></li>
  </ul>
</li>
<!-- End Level one -->


    