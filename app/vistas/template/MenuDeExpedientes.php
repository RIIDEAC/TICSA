<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Expedientes</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group dropleft">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Acciones
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosNotaDeIngreso">Registrar - Nota de Ingreso</a>
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosNotaDeEgreso">Registrar - Nota de Egreso</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosConvenioDeAportaciones">Registrar - Convenio de Aportaciones</a>
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosConvenioDeIngreso">Registrar - Convenio de Ingreso</a>
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosNuevoConvenioDeAportaciones">Agregar - Convenio de Aportaciones</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosAsignarConsejero">Asignar o modificar Consejero(a)</a>
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosAsignarPsicologo">Asignar o modificar Psicólogo(a)</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosVincularExpedienteViejo">Vincular expediente sistema viejo</a>
      </div>
    </div>
  </div>
</div>
