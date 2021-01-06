<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo $this->_config->obtener('app/webbase'); ?>">RIIDE</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form class="w-100" method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerDatosExpediente"><input name="EXP" class="form-control form-control-dark w-100" type="number" placeholder="Buscar expediente" aria-label="Search"></form>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>CerrarSesion">Salir</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo $this->_config->obtener('app/webbase'); ?>Inicio">
              <span data-feather="home"></span>
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDePacientes">
              <span data-feather="users"></span>
              Pacientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDeExpedientes">
              <span data-feather="file"></span>
              Expedientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDeConsejeria">
              <span data-feather="user-plus"></span>
              Consejería
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDePsicologia">
              <span data-feather="user-check"></span>
              Psicología
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDeTickets">
              <span data-feather="layers"></span>
              Tickets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDeBitacoras">
              <span data-feather="file-plus"></span>
              Bitácoras
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDeAportaciones">
              <span data-feather="dollar-sign"></span>
              Aportaciones
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDeGastos">
              <span data-feather="dollar-sign"></span>
              Gastos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>MenuDeBalances">
              <span data-feather="check-square"></span>
              Balances
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">