<div class="jumbotron">
  <div class="container-fluid">
    <h1 class="display-3">Registrar diagnóstico psiquiátrico <small>CIE-10</small></h1>
    <p>Si bien la historia clínica y las notas de evolución médicas deben de encontrarse en el expediente de forma impresa y firmadas por el médico, este apartado sirve para que el resto del equipo pueda considerar alguna condición del paciente en la toma de decisiones sin necesidad de buscar expediente por expediente.</p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarDiagnosticoPsiquiatrico/">
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
          <label for="DIAGNOSTICO">Buscar el diagnóstico con base en el CIE10</label>
          <input type="text" class="form-control" id="DIAGNOSTICO" placeholder="Escribe el nombre del diagnóstico">
          </select>
        </div> 
      </div>
      <div id="RESPUESTA"></div>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
      <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
  </form>
  </div>
</div>
<script>
  $( "#DIAGNOSTICO" ).on('keyup',function()
  {
    var cp = {"DX" : document.getElementById("DIAGNOSTICO").value};
    
    if(cp['DX'].length > 4)
    {
        $.ajax({
          data: cp,
          url: '<?php echo $this->_config->obtener('app/webbase').'ControladorCIE'; ?>',
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