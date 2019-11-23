<!-- Level one dropdown -->
<li class="nav-item dropdown">
  <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"> Pacientes</a>
  <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarPacienteIngreso/">Registrar paciente</a></li>
    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>EliminarPaciente">Eliminar Paciente</a></li>
    <li class="dropdown-divider"></li>
    <!-- Level two dropdown-->
    <li class="dropdown-submenu">
      <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Familiares</a>
      <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
        <li>
          <a tabindex="-1" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarPacienteFamiliar/" class="dropdown-item">Registrar familiar</a>
        </li>      
        <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>EliminarFamiliar">Eliminar Familiar</a></li>
      </ul>
    </li>
    <!-- End Level two -->
    <li class="dropdown-divider"></li>
    <!-- Level tree dropdown-->
    <li class="dropdown-submenu">
      <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Convenios</a>
      <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
        <li>
          <a tabindex="-1" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarConvenioAportacionesPeriodicas/" class="dropdown-item">Aportaciones periódicas</a>
        </li>      
        <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarConvenioAportacionesIngreso">Aportaciones de ingreso</a></li>
      </ul>
    </li>
    <!-- End Level tree -->
  </ul>
</li>
<!-- End Level one -->