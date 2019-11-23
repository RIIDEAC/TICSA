<div class="jumbotron">
<div class="container">
  <h1 class="display-5">Bitácora de tickets</h1>
  <p>Listado de todos los tickets que han sido registrados</p>
</div>
</div>
<div class="container-fluid">
<table class="table table-striped" id="table" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipo</th>
      <th scope="col">Estado</th>
      <th scope="col">Registró</th>
      <th scope="col">Responsable</th>
      <th scope="col">Paciente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($datos as $key => $value) { ?>
  	<tr>
      <th scope="row"><?php echo $value->TIC_ID; ?></th>
      <td><?php echo $this->_formatos->obtener('TIC_TIPO/'.$value->TIC_TIPO); ?></td>
      <td><?php echo $this->_formatos->obtener('TIC_ESTADO/'.$value->TIC_ESTADO); ?></td>
      <td><?php echo $value->CORREO; ?></td>
      <td><?php echo $value->CORREO; ?></td>
      <td><?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></td>
       <td><?php echo $value->FECHA_REGISTRO; ?></td>
      <td><?php echo $value->TIC_OBSERVACIONES; ?></td>
    </tr>
  	<?php } ?>
  </tbody>
</table>
</div>
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