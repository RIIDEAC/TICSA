<?php //echo '<pre>'; print_r($datos); ?>
<div class="jumbotron">
<div class="container">
  <h1 class="display-5">Bitácora de pacientes activos</h1>
  <p>Listado de todos los pacientes que están actualmente en proceso de tratamiento</p>
</div>
</div>
<div class="container-fluid">
<table class="table table-striped" id="table" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apellido materno</th>
      <th scope="col">Nombres</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Lugar de nacimiento</th>
      <th scope="col">Nacionalidad</th>
      <th scope="col">Ingresó</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($datos as $key => $value) { ?>
    <tr>
      <th scope="row"><?php echo $value->PAC_ID; ?></th>
      <td><?php echo $value->PAC_PATERNO; ?></td>
      <td><?php echo $value->PAC_MATERNO; ?></td>
      <td><?php echo $value->PAC_NOMBRE; ?></td>
      <td><?php echo $value->PAC_FNACIMIENTO; ?></td>
      <td><?php echo $value->PAC_EDAD; ?></td>
      <td><?php echo $value->SEX_MAY; ?></td>
      <td><?php echo $value->ENF_MAY; ?></td>
      <td><?php echo $value->NAC_MAY; ?></td>
      <td><?php echo $value->PAC_FINGRESO; ?><br><?php echo $value->PAC_HINGRESO; ?></td>
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