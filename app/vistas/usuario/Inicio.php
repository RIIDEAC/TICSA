<div class="jumbotron">
	<div class="container">
	  <h1 class="display-3">Inicio</h1>
	  <p><?php echo $_SESSION[$this->_config->obtener('sesion/correo')]; ?></p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver mi perfil</a></p>
	</div>
</div>
	<div class="container-fluid">
	<?php if(!empty($datos)){ foreach ($datos as $key => $value) { ?>
  <h1 class="display-5">Tickets abiertos</h1>
  <p>Tienes estos tickets pendientes de solución</p>
  <table class="table table-striped" id="table" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tipo</th>
        <th scope="col">Paciente</th>
        <th scope="col">Fecha</th>
        <th scope="col">Observaciones</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($datos as $key => $value) { ?>
    	<tr>
        <th scope="row"><?php echo $value->TIC_ID; ?></th>
        <td><?php echo $this->_formatos->obtener('TIC_TIPO/'.$value->TIC_TIPO); ?></td>
        <td><?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></td>
         <td><?php echo $value->FECHA_REGISTRO; ?></td>
        <td><?php echo $value->TIC_OBSERVACIONES; ?></td>
        <td><a target="_blank" class="btn btn-primary" href="<?php echo $this->_config->obtener('app/webbase').'RevisarCerrarTicket/'.$value->TIC_ID; ?>" role="button">Cerrar</a></td>
      </tr>
    	<?php } ?>
    </tbody>
  </table>
  <script type="text/javascript">
      $(document).ready(function() {
        $('#table').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        }); 
      } );
  </script>	
		<?php } }else { ?>
      <h4>No tienes ningún Ticket abierto</h4>
    <?php } ?>  
</div>