<!-- Level one dropdown -->
<li class="nav-item dropdown">
  <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Clínico</a>
  <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarClinicoNotadeIngreso/">Nota de ingreso</a></li>

    <li><a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarClinicoNotadeEgreso/">Nota de egreso</a></li>

    <li class="dropdown-divider"></li>
    <!-- Level two dropdown-->
    <li class="dropdown-submenu">
      <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Diagnósticos</a>
      <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
        <li><a tabindex="-1" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDiagnosticoMedico" class="dropdown-item">Médico</a></li>
        <li><a href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDiagnosticoPsiquiatrico/" class="dropdown-item">Psiquiátrico</a></li>
      </ul>
    </li>
    <!-- End Level two -->
    <!-- Level tre dropdown-->
    <li class="dropdown-submenu">
      <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Medicamentos</a>
      <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
        <li><a tabindex="-1" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarRecibirMedicamento" class="dropdown-item">Recibir medicamento</a></li>
      </ul>
    </li>
    <!-- End Level two -->
  </ul>
</li>
<!-- End Level one -->


