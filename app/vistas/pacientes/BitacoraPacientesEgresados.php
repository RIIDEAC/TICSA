<?php //echo '<pre>'; print_r($datos); ?>
<div class="jumbotron">
<div class="container">
  <h1 class="display-5">Bitácora de pacientes egresados</h1>
  <p>Listado de todos los pacientes que egresaron</p>
</div>
</div>
<div class="container-fluid">
<table class="table table-striped" id="table" style="width:100%">
  <thead>
    <tr>
      <th scope="col">Exp</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Edad ingreso</th>
      <th scope="col">Edad egreso</th>
      <th scope="col">Fecha de ingreso</th>
      <th scope="col">Fecha de egreso</th>
      <th scope="col">Días tratamiento</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($datos as $key => $value) { ?>
  	<tr>
      <th scope="row"><?php echo $value->NING_ID; ?></th>
      <td><?php echo $value->PAC_PATERNO; ?> <?php echo $value->PAC_MATERNO; ?> <?php echo $value->PAC_NOMBRE; ?></td>
      <td><?php echo $value->SEX_MAY; ?></td>
      <td><?php echo $value->PAC_FNACIMIENTO; ?></td>
      <td><?php echo $value->PAC_EDAD; ?></td>
      <td><?php echo $value->EDAD_EGRE; ?></td>
      <td><?php echo $value->PAC_FINGRESO; ?></td>
      <td><?php echo $value->PAC_FEGRESO; ?></td>
      <td><?php echo $value->DIAS_TRATAMIENTO; ?></td>
      <td><a class="btn btn-primary" href="<?php echo $this->_config->obtener('app/webbase').'PerfilPaciente/'.$value->PAC_ID; ?>" role="button">Ver perfil</a></td>
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