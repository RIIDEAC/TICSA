<li class="nav-item dropdown">
    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Cobranza
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarAportacionPacienteActivo">Recibir aportación paciente activo</a>
      <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarAportacionPacienteEgresado">Recibir aportación paciente egresado</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Eliminar aportación</a>
    </div>
</li>