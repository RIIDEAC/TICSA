<li class="nav-item dropdown">
    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Bitácoras
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>BitacoraPacientesRegistrados">Pacientes registrados</a>
      <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>BitacoraPacientesActivos">Pacientes internados</a>
      <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>BitacoraPacientesEgresados">Pacientes egresados</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Referencias/Contrarreferencias</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>BitacoraTicket">Tickets</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>BitacoraFamiliaresRegistrados">Familiares registrados</a>
    </div>
</li>