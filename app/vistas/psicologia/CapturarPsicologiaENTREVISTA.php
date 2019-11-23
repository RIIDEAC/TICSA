<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">ENTREVISTA</h1>
        <p class="text-justify"><strong>INTRUCCIONES:</strong> Selecciona el paciente y automaticamente se cargará la sección correspondiente. La Entrevista está dividida en XX partes, puedes avanzar parte por parte y guardarla, el sistema permite la captura de 1 sola ENTREVISTA por proceso de tratamiento.</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarPsicologiaENTREVISTA/">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="NING_ID"><h3>Paciente</h3></label>
                <select id="NING_ID" name="NING_ID" class="form-control" data-live-search="true" onchange="cargarEI()" required>
                  <option value="0">Seleccione un paciente</option>
                  <?php foreach ($datos as $value) { ?>
                    <option value="<?php echo $value->NING_ID; ?>"><?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
                  <?php } ?>
                </select>
            </div>
          </div>
          <input type="hidden" id="TOKEN" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
        <div id="RESPUESTA"></div> 
    </div>
</div>
<script>
  function cargarEI()
      {
        var data = 
                  {
                    "NING_ID" : document.getElementById("NING_ID").value,
                    "TOKEN" : document.getElementById("TOKEN").value
                  };

        $.ajax({
            data: data,
            url: '<?php echo $this->_config->obtener('app/webbase').'ControladorENTREVISTAPSICOLOGICA'; ?>',
            type: 'POST',
            beforeSend: function()
            {
              $("#RESPUESTA").html("Cargando");
            },
            success: function(response)
            {
              $("#RESPUESTA").html(response);
              actualizarTOKEN();
            }
        });
      }

  function actualizarTOKEN()
  {
    var TOKEN = document.getElementById("TOKEN").value;
    $.ajax({
            data: TOKEN,
            url: '<?php echo $this->_config->obtener('app/webbase').'ControladorENTREVISTAPSICOLOGICA/Token'; ?>',
            type: 'POST',
            success: function(response)
            {
              document.getElementById("TOKEN").value = (response);
            }
        });
  }
</script>