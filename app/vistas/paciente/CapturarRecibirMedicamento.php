<div class="jumbotron">
  <div class="container-fluid">
    <h1 class="display-3">Registrar medicamento</h1>
    <p><strong>INSTRUCCIONES:</strong> Se debe de registrar medicamento por medicamento, aunque puede registrar multiples cajas, frascos, etc. del mismo. También debe de registrar la cantidad de medicamento que contiene cada frasco, caja, etc. además del número de días que se le suministrará y la cantidad de veces al día. Todos los medicamento que encontrará son los que se encuentran registrados en los catálogos oficiales que proporciona la SSA y se encuentran por su nombre genérico.</p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarCapturarMedicamento/">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="NING_ID">Paciente</label>
            <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
              <?php foreach ($datos as $value) { ?>
                <option value="<?php echo $value->NING_ID; ?>"><?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="FECHA_CAPTURA">Fecha de recibido</label>
            <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
        </div>
      </div>
      <div class="form-row">
       <div class="form-group col-md-6">
          <label for="MEDICAMENTO">Buscar el medicamento</label>
          <input type="text" class="form-control" id="MEDICAMENTO" placeholder="Escribe el nombre del medicamento">
        </div> 
      </div>
      <div id="RESPUESTA"></div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="REC_CAN">¿Cuántos fracos, cajas, etc. recibe del mismo?</label>
          <input type="number" min="1" minlength="1" name="REC_CAN" class="form-control" id="REC_CAN" placeholder="Número de cajas, frascos, cremas, apoyetas, etc." required>
        </div>
        <div class="form-group col-md-3">
          <label for="REC_NCAN">Cantidad que contiene cada caja, frasco</label>
          <input type="number" min="1" minlength="1" name="REC_NCAN" class="form-control" id="REC_NCAN" placeholder="Ejemplo: 20 tabletas, 5 capsulas, etc." required>
        </div>
       </div> 
        <div class="form-row">
        <div class="form-group col-md-3">
          <label for="REC_DIAS">Número de días que se le suministrará el medicamento</label>
          <input type="number" min="1" minlength="1" name="REC_DIAS" class="form-control" id="REC_DIAS" placeholder="Número de días" required>
        </div>
        <div class="form-group col-md-3">
          <label for="REC_NDIAS">Número de veces por día que se suministrará el medicamento</label>
          <input type="number" min="1" minlength="1" name="REC_NDIAS" class="form-control" id="REC_NDIAS" placeholder="Número de veces al día" required>
        </div>
      </div>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
      <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
  </form>
  </div>
</div>
<script>
  $( "#MEDICAMENTO" ).on('keyup',function()
  {
    var cp = {"MED" : document.getElementById("MEDICAMENTO").value};
    
    if(cp['MED'].length > 4)
    {
        $.ajax({
          data: cp,
          url: '<?php echo $this->_config->obtener('app/webbase').'ControladorMEDICAMENTO'; ?>',
          type: 'POST',
          success: function(response)
          {
            $("#RESPUESTA").html(response);
            $('select').selectpicker('refresh');
          }
      });
    }    
  });
</script>