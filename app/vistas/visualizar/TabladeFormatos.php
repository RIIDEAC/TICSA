<?php //echo '<pre>'; print_r($datos); ?>
<table class="table table-striped" id="table" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Formato</th>
      <th scope="col">Fecha de captura</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
    $x=1; 
    foreach ($datos as $key => $value) { 
    foreach ($value['DATOS'] as $llave => $valor) {  ?>
  	<tr>
      <th><?php echo $x++; ?></th>
      <td><?php echo $value['NOMBRE']; ?></td>
      <td><?php echo $valor->FECHA_REGISTRO; ?></td>
      <td>
        <a target="_blank" class="btn btn-primary" 
        href="<?php echo $this->_config->obtener('app/webbase');  ?><?php echo $value['CONTROLADOR']; ?>/<?php echo $valor->{$value['ID']}; ?>" 
        role="button">Ver
      </a>
      </td>
    </tr>
  	<?php } } ?>
  </tbody>
</table>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();  
    } );
</script>
</div>