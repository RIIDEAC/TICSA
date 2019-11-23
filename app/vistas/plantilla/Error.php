<div class="jumbotron">
<div class="container">
  <h2 class="display-4">Registro no realizado</h2>
  <?php 
  if(is_array($_SESSION[$this->_config->obtener('sesion/error')]))
  	{ 
  		foreach ($_SESSION[$this->_config->obtener('sesion/error')] as $error)
  			{ 
  				foreach ($error as $e) 
  					{ 
  						?>
  	
  		<div class="alert alert-warning" role="alert">
  			<p><?php echo $e; ?></p>
  		</div>
<?php 
	} 
			} 
					}
					else
					{

						?>
		  <div class="alert alert-warning" role="alert">
		  	<p><?php echo $_SESSION[$this->_config->obtener('sesion/error')]; ?></p>
		  </div>
<?php } ?>  	
</div>
</div>