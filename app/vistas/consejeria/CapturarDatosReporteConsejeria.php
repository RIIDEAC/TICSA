    <div class="container">
        <h1 class="display-3">REPORTE DE VALORACIÓN</h1>
        <p class="text-justify"><strong>INTRUCCIONES:</strong>.</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosReporteDeConsejeria/">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="NING_ID"><h3>Paciente</h3></label>
                <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" onchange="cargarEI()" required>
                  <option>Selecciona un paciente</option>
                  <?php foreach ($datos->PACIENTES as $value) { ?>
                    <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></option>
                  <?php } ?>
                </select>
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
            url: '<?php echo $this->_config->obtener('app/webbase').'ObtenerReporteDeValoracion'; ?>',
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