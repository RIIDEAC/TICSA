<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Registro realizado</h1>
</div>
<div class="jumbotron">
<div class="container">
  <div class="alert alert-primary" role="alert">
  	<p><?php echo $datos->REGISTRO; ?> registrado </p>
  	<p><a href="<?php echo $this->_config->obtener('app/webbase').$datos->VER; ?>">Ver aquí</a></p>
  </div>	
</div>
</div>