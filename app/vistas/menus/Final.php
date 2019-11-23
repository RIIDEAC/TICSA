</ul>
    <form class="form-inline my-2 my-lg-0" action="">
      <input class="form-control mr-sm-2" type="number" min="1" placeholder="Buscar expediente" aria-label="Search">
      <button class="btn btn-outline-secundary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<div class="nav-scroller bg-white box-shadow">
<nav class="nav nav-underline">
  <a class="nav-link active" href="<?php echo $this->_config->obtener('app/webbase'); ?>VisualizarExpediente">Expediente pacientes activos</a>
  <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>VisualizarExpedienteEgresados">Expediente pacientes egresados</a>
  <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>VisualizarAportacionesPacientesActivos">Aportaciones pacientes activos</a>
  <a class="nav-link" href="<?php echo $this->_config->obtener('app/webbase'); ?>VisualizarAportacionesPacientesEgresados">Aportaciones pacientes egresados</a>
</nav>
</div>
<main role="main">
	