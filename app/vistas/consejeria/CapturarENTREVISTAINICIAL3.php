<h1>Disposición al cambio - Parte 3</h1>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="FECHA_CAPTURA">Fecha de realización</label>
      <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
  </div>
</div>
   <div class="form-row">
    <div class="form-group col-md-12">
      <label>12. ¿Cuánto es el mayor tiempo que se ha propuesto y ha logrado no consumir alcohol/drogas? (mayor periodo de abstinencia en meses). Si nunca se ha abstenido, coloque "0".</label>
      <input type="number" min="0" max="120" id="TIEMPOABSTINENCIA" onchange="Enable(this.id,this.value)" value="0" class="form-control" name="TIEMPOABSTINENCIA" required>
    </div>
   </div>
   <div class="form-row"> 
     <div class="form-group col-md-4">
      <label>13. ¿Cuándo ocurrió? (mes y año)</label>
      <input type="month" class="form-control" id="FECHAABSTINENCIA" value="<?php echo date("Y-m"); ?>" name="FECHAABSTINENCIA" required disabled>
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-12">
      <label>14. ¿Por qué se abstuvo en esa ocasión y qué hizo para mantenerse sin consumir?</label>
      <textarea name="PORQUEABSTINENCIA" id="PORQUEABSTINENCIA" placeholder="Deje así en caso de que no haya dejado de consumir" class="form-control" maxlength="255"  required disabled>No aplica</textarea>
    </div>
   </div>

   <div class="form-row">
    <div class="form-group col-md-12">
      <label>15. En los últimos 6 meses, ¿cuánto tiempo es el mayor periodo que ha tenido sin consumir? (en días)</label>
      <input type="number" value="0" min="0" max="180" id="DIASABSTINENCIA" onchange="Enable(this.id,this.value)" class="form-control" name="DIASABSTINENCIA" required>
    </div>
	</div>
	<div class="form-row">
     <div class="form-group col-md-6">
      <label>16. ¿Cuándo ocurrió? (mes y año)</label>
      <input type="month" class="form-control" id="FECHADIASABSTINENCIA" value="<?php echo date("Y-m"); ?>" name="FECHADIASABSTINENCIA" required disabled>
    </div>
   </div>

   <div class="form-row">
    <div class="form-group col-md-12">
      <label>17. ¿Por qué se abstuvo en esa ocasión y qué hizo para mantenerse sin consumir?</label>
      <textarea name="PORQUEABSTINENCIADIAS" id="PORQUEABSTINENCIADIAS" placeholder="Deje así en caso de que no haya dejado de consumir" class="form-control" maxlength="255" required disabled>No aplica</textarea>
    </div>
   </div>


    <div class="form-group">
    <label>18. Actualmente, ¿qué tan importante es para usted dejar de consumir alcohol/drogas?</label><br>
 	 <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="1" name="IMPORTANTEDEJAR" required checked> 1) Nada importante
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="2" name="IMPORTANTEDEJAR" required> 2) Poco importante
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="3" name="IMPORTANTEDEJAR" required> 3) Algo importante
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="4" name="IMPORTANTEDEJAR" required> 4) Importante
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="5" name="IMPORTANTEDEJAR" required> 5) Muy importante
  		</label>
	  </div>
  	</div>
  	<div class="form-group">
    <label>19. En una escala del a 1 al 10 (en donde 1 es nada y 10 es mucho) ¿qué tan seguro se siente de no consumir alcohol/drogas?</label>
       <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="1" name="SEGURODEJAR" required checked> 1
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="2" name="SEGURODEJAR" required> 2
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="3" name="SEGURODEJAR" required> 3
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="4" name="SEGURODEJAR" required> 4
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="5" name="SEGURODEJAR" required> 5
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="6" name="SEGURODEJAR" required> 6
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="7" name="SEGURODEJAR" required> 7
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="8" name="SEGURODEJAR" required> 8
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="9" name="SEGURODEJAR" required> 9
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="10" name="SEGURODEJAR" required> 10
  		</label>
	  </div>
  </div>
  	<div class="form-group">
    <label>20. En estos momentos, usted piensa que:</label>
     <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="1" name="INTENCION" required checked> 1) No es su intención dejar de consumir
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="2" name="INTENCION" required> 2) Está indeciso de querer dejar de consumir
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="3" name="INTENCION" required> 3) Está decidido a dejar de consumir
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="4" name="INTENCION" required> 4) Ya está haciendo algo para dejar de consumir
  		</label>
	  </div>
	</div>  
	<div class="form-group">
	<label>21. ¿Qué tan dispuesto está para recibir el servicio de internamiento?</label><br>
 	 <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="1" name="DISPUESTO" required checked> 1) Nada dispuesto
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="2" name="DISPUESTO" required> 2) Poco dispuesto
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="3" name="DISPUESTO" required> 3) Algo dispuesto
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="4" name="DISPUESTO" required> 4) Dispuesto
  		</label>
	  </div>
	    <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="5" name="DISPUESTO" required> 5) Muy dispuesto
  		</label>
	  </div>
	</div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>22. Mencione tres principales razones por las cuales es importante para usted dejar de consumir:</label>
      <p>1: <input class="col-md-8" maxlength="255" placeholder="Escriba no aplica ante negativa" type="text" name="RAZON1" required> </p>
      <p>2: <input class="col-md-8" maxlength="255" placeholder="Escriba no aplica ante negativa" type="text" name="RAZON2" required> </p>
      <p>3: <input class="col-md-8" maxlength="255" placeholder="Escriba no aplica ante negativa" type="text" name="RAZON3" required> </p> 
    </div>
   </div>
   <div class="row">
		<div class="col-md-12 text-center">
		    <br>
		    <input type="hidden" name="PARTE" value="3">
		    <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
		</div>
	</div>
</form>
<script>
  function Enable(id,value)
  {
    if(id == 'TIEMPOABSTINENCIA' && value >= 1)
    {
      var items = ['FECHAABSTINENCIA','PORQUEABSTINENCIA'];
      items.forEach(function(element)
      {
        document.getElementById(element).disabled = false;
      });
      document.getElementById('PORQUEABSTINENCIA').value = '';
    }
    else
    {
      var items = ['FECHAABSTINENCIA','PORQUEABSTINENCIA'];
      items.forEach(function(element)
      {
        document.getElementById(element).disabled = true;
      });
      document.getElementById('PORQUEABSTINENCIA').value = 'No aplica';
    }
    
    if(id == 'DIASABSTINENCIA' && value >= 1)
    {
      var items = ['FECHADIASABSTINENCIA','PORQUEABSTINENCIADIAS'];
      items.forEach(function(element)
      {
        document.getElementById(element).disabled = false;
      });
      document.getElementById('PORQUEABSTINENCIADIAS').value = '';
    }
    else
    {
      var items = ['FECHADIASABSTINENCIA','PORQUEABSTINENCIADIAS'];
      items.forEach(function(element)
      {
        document.getElementById(element).disabled = true;
      });
      document.getElementById('PORQUEABSTINENCIADIAS').value = 'No aplica';
    }
  }
  $(document).on('click','#ENVIAR',function(){
  $("form :input").prop("disabled", false);
});
</script>