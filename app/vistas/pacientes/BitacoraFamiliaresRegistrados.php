<?php //echo '<pre>'; print_r($datos); ?>
<div class="jumbotron">
<div class="container">
  <h1 class="display-5">Bitácora de familiares registrados</h1>
  <p>Listado de todos los familiares que han sido registrados</p>
</div>
</div>
<div class="container-fluid">
<table class="table table-striped" id="table" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Familiar</th>
      <th scope="col">Paciente</th>
      <th scope="col">Parentesco</th>
      <th scope="col">Teléfonos</th>
      <th scope="col">Dirección</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($datos as $key => $value) { ?>
  	<tr>
      <th scope="row"><?php echo $value->PAC_ID; ?></th>
      <td><?php echo $value->FAM_PATERNO. ' ' .$value->FAM_MATERNO. ' ' .$value->FAM_NOMBRE; ?></td>
      <td><?php echo $value->PAC_PATERNO. ' ' .$value->PAC_MATERNO. ' ' .$value->PAC_NOMBRE; ?></td>
      <td><?php echo $value->PAE_MIN; ?></td>
      <td><?php echo $value->FAM_TELEFONOF; ?><br><?php echo $value->FAM_TELEFONOM; ?></td>
      <td>
        <?php echo $value->FAM_CALLE. ' #' .$value->FAM_NEXTERIOR. ' ' .$value->FAM_NINTERIOR; ?><br>
        <?php echo $value->d_tipo_asenta. ' ' .$value->d_asenta. ', C.P. ' .$value->d_codigo; ?><br>
        <?php echo $value->d_ciudad. ' ' .$value->d_estado; ?>
      </td>
      <td><?php echo $value->SEX_MAY; ?></td>
      <td><?php echo $value->FAM_FNACIMIENTO; ?></td>
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