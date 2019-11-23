<?php //echo '<pre>'; print_r($datos); ?>
<div class="alert alert-danger" role="alert">
  El paciente presenta un <strong>adeudo de <?php echo $datos['CANTIDAD']; ?> pesos</strong> en <?php echo $datos['DIAS']; ?> días de tratamiento.  
  <p>Por lo que sólo se podrán recibir aportaciones <strong><?php echo $datos['FORMA']; ?></strong></p>
  <p>Tenga en consideración que pueden existir otros adeudos, esta cantidad se refiere únicamente a adedudos en aportaciones periódicas.</p>
  <p>En caso de que necesite revisar las aportaciones del paciente, de clic <a href="<?php echo $this->_config->obtener('app/webbase'); ?>VisualizarAportacionesPacientesActivos/">aquí</a></p>
</div>