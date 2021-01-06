<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Entrevista Inicial Psicológica</h1>
</div>
<div class="container">
    <p class="text-justify"><strong>INTRUCCIONES:</strong> Selecciona el paciente y automaticamente se cargará la sección correspondiente. La Entrevista está dividida en 2 partes, puedes avanzar parte por parte y guardarla, el sistema permite la captura de 1 sola ENTREVISTA por proceso de tratamiento.</p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosEntrevistaInicialPsicologica/">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="NING_ID"><h3>Paciente</h3></label>
            <select id="NING_ID" name="NING_ID" class="form-control" data-live-search="true" onchange="cargarEI()" required>
              <option value="">Seleccione un paciente</option>
              <?php foreach ($datos->PACIENTES as $value) { ?>
                <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></option>
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="FECHA_CAPTURA"><h3>Fecha de captura</h3></label>
          <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
        </div>
      </div>
      <input type="hidden" id="TOKEN" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
    <div id="RESPUESTA"></div> 
</div>
<script>
  function cargarEI()
      {
        var data = 
                  {
                    "NING_ID" : document.getElementById("NING_ID").value
                  };

        $.ajax({
            data: data,
            url: '<?php echo $this->_config->obtener('app/webbase').'ObtenerAvanceEntrevistaPsicologica'; ?>',
            type: 'POST',
            beforeSend: function()
            {
              $("#RESPUESTA").html("Cargando");
            },
            success: function(response)
            {
              $("#RESPUESTA").html(response);
            }
        });
      }
</script>