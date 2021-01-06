<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Balances pacientes Activos</h1>
</div>
    <div class="container">
        <p class="text-justify"><strong>INTRUCCIONES:</strong> Este apartado es para visualizar el balance de pacientes que se encuentran activos, si desea ver el balance de otro proceso del mismo paciente egresadó elija la opción adecuada.</p>
        <div class="col-md-12">
            <div class="form-group col-md-6">
              <label for="NING_ID"><h3>Elige un paciente</h3></label>
                <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                    <option>Selecciona el paciente</option>
                  <?php foreach ($datos->PACIENTES as $value) { ?>
                    <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
                  <?php } ?>
                </select>
            </div>
            <div id="RESPUESTA" class="col-md-12">
                <?php if(!empty($datos->BALANCE->{'1'})){ ?>
                <div class="card mt-3">
                    <div class="card-body">
                    <?php foreach ($datos->BALANCE as $value) { ?>
                        <p>Resumen del Convenio:</p>
                        Fecha de inicio: <strong><?php echo $value->FECHA_INICIO; ?></strong>
                        Fecha de termino: <strong><?php echo $value->FECHA_FINAL; ?></strong>
                        Días transcurridos: <strong><?php echo $value->DIAS; ?></strong>
                        <br>
                        Periodicidad del pago: <strong><?php echo $value->CONVENIO->PER_MIN; ?></strong>
                        Cantidad: <strong><?php echo $value->CONVENIO->CANTIDAD; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong>
                        <br>
                        Cantidad de pagos que debería de tener cubiertos: <strong><?php echo $value->PAGOS; ?></strong>
                        <br>
                        <?php if(isset($value->DIASEXTRAS)){ ?>
                            Días extras: <strong><?php echo $value->DIASEXTRAS; ?></strong>
                            Cantidad por ajuste: <strong><?php echo $value->TOTALAJUSTE; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong>
                            <br>
                            Total sin ajuste: <strong><?php echo $value->APAGARSINAJUSTE; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong><br>
                        <?php } ?>
                        Total: <strong><?php echo $value->APAGAR; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong><br>

                        Cantidad que ha pagado: <strong><?php echo $value->PAGADO; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong>
                        <br>
                       <?php if($value->RESTANTE > 0){ ?>
                        <div class="alert alert-danger" role="alert">
                        Se debe: <strong><?php echo $value->RESTANTE; ?> </strong><?php echo $value->CONVENIO->TIM_MIN; ?>
                        </div>
                       <?php }else{ ?>
                        <div class="alert alert-success" role="alert">
                        Saldo a favor de: <strong><?php echo $value->RESTANTE * -1; ?> </strong><?php echo $value->CONVENIO->TIM_MIN; ?>
                        </div>
                       <?php } ?> 
                        <hr>                    
                    <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php //echo '<pre>'; print_r($datos->BALANCE); echo '</pre>'; ?>
        </div> 
    </div>
<script>
// ------------------------------------------------------- //
// ENABLE AND DISABLED
// ------------------------------------------------------ //
$('select').selectpicker();
$('#NING_ID').change(function(){
    var data ={"NING_ID" : $(this).val()};
    $.ajax({
        data: data,
        url: '<?php echo $this->_config->obtener('app/webbase').'ObtenerBalance'; ?>',
        type: 'POST',
        success: function(response)
        {
            $("#RESPUESTA").html(response);
        }
    });
})
</script>