<h1>Datos generales - Parte 1</h1>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="FECHA_CAPTURA">Fecha de realización</label>
      <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
  </div>
</div>
<div class="form-row">
    <div class="form-group col-md-2">
      <label id="SALARIO">Salario mensual:</label>
      <input type="number" value="0" class="form-control" name="SALARIO">
    </div>
    <div class="form-group col-md-4">
      <label id="EMPLEO">Tiempo trabajando en el empleo actual (en meses):</label>
      <input type="number" value="0" class="form-control" name="EMPLEO">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label>¿Se encuentra desempleado actualmente?</label>
      <div class="form-check form-check-inline">
    		<label class="form-check-label">
      		<input class="form-check-input" value="0" type="radio" onchange="EnableDesempleado(this.value)" name="DESEMPLEADO" checked> No
    		</label>
  	  </div>
        <div class="form-check form-check-inline">
    		<label class="form-check-label">
      		<input class="form-check-input" value="1" type="radio" onchange="EnableDesempleado(this.value)" name="DESEMPLEADO"> Sí
   		 </label>
  	  </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label class="form-check-label">¿Hace cuanto? (en meses)</label>
      <input type="number" value="0" class="form-control" id="TIEMPODESEMPLEADO" name="TIEMPODESEMPLEADO" disabled>
    </div>
</div>
<hr>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label>¿Depende económicamente de alguien?</label>
      <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" id="DEPENDE" value="1" type="radio" onchange="EnableDepende(this.value)" name="DEPENDE"> Sí
  		</label>
	  </div>
      <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" value="2" id="DEPENDE1" type="radio" onchange="EnableDepende(this.value)" name="DEPENDE" checked> No
 		 </label>
	  </div>
    </div>
</div>
<div class="form-row">     
    <div class="form-group col-md-12">
      <label class="form-check-label">¿Quién o quienes?</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDEPAREJA" type="checkbox" id="DEPENDEPAREJA" value="1" disabled>
        <label class="form-check-label" for="DEPENDEPAREJA">Pareja</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDEHIJOS" type="checkbox" id="DEPENDEHIJOS" value="1" disabled>
        <label class="form-check-label" for="DEPENDEHIJOS">Hijos o hijas</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDEPADRES" type="checkbox" id="DEPENDEPADRES" value="1" disabled>
        <label class="form-check-label" for="DEPENDEPADRES">Madre o padre</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDEFAMILIA" type="checkbox" id="DEPENDEFAMILIA" value="1" disabled>
        <label class="form-check-label" for="DEPENDEFAMILIA">Otros familiares o amigos</label>
      </div>
    </div>
</div>
<hr>
<div class="form-row">
    <div class="form-group col-md-6">
      <label>¿Alguien depende económicamente de usted?</label>
      <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" value="1" type="radio" onchange="EnableDependientes(this.value)" name="DEPENDIENTES"> Sí
      </label>
    </div>
      <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" value="2" type="radio" onchange="EnableDependientes(this.value)" name="DEPENDIENTES" checked> No
     </label>
    </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
      <label class="form-check-label">¿Quién o quienes?</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDIENTESPAREJA" type="checkbox" id="DEPENDIENTESPAREJA" value="1" disabled>
        <label class="form-check-label" for="DEPENDIENTESPAREJA">Pareja</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDIENTESHIJOS" type="checkbox" id="DEPENDIENTESHIJOS" value="1" disabled>
        <label class="form-check-label" for="DEPENDIENTESHIJOS">Hijos o hijas</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDIENTESPADRES" type="checkbox" id="DEPENDIENTESPADRES" value="1" disabled>
        <label class="form-check-label" for="DEPENDIENTESPADRES">Padres</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="DEPENDIENTESFAMILIARES" type="checkbox" id="DEPENDIENTESFAMILIARES" value="1" disabled>
        <label class="form-check-label" for="DEPENDIENTESFAMILIARES">Otros familiares o amigos</label>
      </div>
    </div>
</div>
<hr>
<div class="form-row">
    <div class="form-group col-md-12">
      <label class="form-check-label">Personas con las que vive: </label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="VIVEPAREJA" type="checkbox" id="VIVEPAREJA" value="1">
        <label class="form-check-label" for="VIVEPAREJA">Pareja</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="VIVEHIJOS" type="checkbox" id="VIVEHIJOS" value="1">
        <label class="form-check-label" for="VIVEHIJOS">Hijos o hijas</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="VIVEPADRES" type="checkbox" id="VIVEPADRES" value="1">
        <label class="form-check-label" for="VIVEPADRES">Madre o padre</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="VIVEFAMILIA" type="checkbox" id="VIVEFAMILIA" value="1">
        <label class="form-check-label" for="VIVEFAMILIA">Otros familiares o amigos</label>
      </div>
    </div>
</div>
<hr>
<div class="form-row">	
	<div class="form-group col-md-3">
      <label>¿Tiene pareja?</label><br>
      <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" value="1" onchange="EnablePareja(this.value)"  type="radio" name="PAREJA"> Sí
  		</label>
	  </div>
      <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" value="2" onchange="EnablePareja(this.value)" type="radio" name="PAREJA" checked> No
 		 </label>
	  </div>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-3">
      <label>Tiempo de la relación: (en meses)</label>
      <input type="number" value="0" id="TIEMPORELACION" name="TIEMPORELACION" class="form-control" disabled>
	</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
    <br>
    <input type="hidden" name="PARTE" value="1">
    <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
</div>
</div>
</form>
<script>
/*-------------------------------------------------------
//  ACTIVAR LAS PREGUNTAS
---------------------------------------------------------*/
function EnablePareja(value)
{
  if(value == '1')
  {
      document.getElementById('TIEMPORELACION').disabled = false;
  }
  else
  {
     document.getElementById('TIEMPORELACION').disabled = true;
     document.getElementById('TIEMPORELACION').value = 0;
  }
  
}
function EnableDesempleado(value)
{
  if(value == '1')
  {
      document.getElementById('TIEMPODESEMPLEADO').disabled = false;
  }
  else
  {
     document.getElementById('TIEMPODESEMPLEADO').disabled = true;
     document.getElementById('TIEMPODESEMPLEADO').value = 0;
  }
  
}
function EnableDependientes(value)
{
  var items = ['PAREJA','HIJOS','PADRES','FAMILIARES'];
  if(value == '1')
  {
      items.forEach(function(element)
      {
        document.getElementById('DEPENDIENTES'+element).disabled = false;
      });
  }
  else
  {
     items.forEach(function(element)
      {
        document.getElementById('DEPENDIENTES'+element).disabled = true;
        document.getElementById('DEPENDIENTES'+element).checked = false;
      });
     
  }
  
}
function EnableDepende(value)
{
  var items = ['PAREJA','HIJOS','PADRES','FAMILIARES'];
  if(value == '1')
  {
      items.forEach(function(element)
      {
        document.getElementById('DEPENDE'+element).disabled = false;
      });
  }
  else
  {
     items.forEach(function(element)
      {
        document.getElementById('DEPENDE'+element).disabled = true;
        document.getElementById('DEPENDE'+element).checked = false;
      });
     
  }
  
}
$(document).on('click','#ENVIAR',function(){
  $("form :input").prop("disabled", false);
});
</script>