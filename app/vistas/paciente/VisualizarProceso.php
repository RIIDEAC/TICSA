<?php //echo '<pre>'; print_r($datos); ?>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="true">General</a>

        <a class="nav-link" id="v-pills-clinico-tab" data-toggle="pill" href="#v-pills-clinico" role="tab" aria-controls="v-pills-clinico" aria-selected="false">Clínico</a>
        
        <a class="nav-link" id="v-pills-consejeria-tab" data-toggle="pill" href="#v-pills-consejeria" role="tab" aria-controls="v-pills-consejeria" aria-selected="false">Consejería</a>
        
        <a class="nav-link" id="v-pills-psicologia-tab" data-toggle="pill" href="#v-pills-psicologia" role="tab" aria-controls="v-pills-psicologia" aria-selected="false">Psicología</a>
        
        <a class="nav-link" id="v-pills-tickets-tab" data-toggle="pill" href="#v-pills-tickets" role="tab" aria-controls="v-pills-tickets" aria-selected="false">Tickets</a>
        
        <a class="nav-link" id="v-pills-aportaciones-tab" data-toggle="pill" href="#v-pills-aportaciones" role="tab" aria-controls="v-pills-aportaciones" aria-selected="false">Aportaciones</a>
      </div>
    </div>
    <div class="col-md-10">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
        <div class="row">  
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                 Paciente
              </div>
              <div class="card-body">
                 <h1><small>Expediente: </small><?php echo $datos->CLINICO->NOTAINGRESO->NING_ID; ?></h1>
                 <hr>
                 <h4><?php echo $datos->CLINICO->NOTAINGRESO->PAC_NOMBRE. ' '.$datos->CLINICO->NOTAINGRESO->PAC_PATERNO. ' ' .$datos->CLINICO->NOTAINGRESO->PAC_MATERNO; ?></h4>
                 <p>
                   Fecha y hora de ingreso: <?php echo $datos->CLINICO->NOTAINGRESO->PAC_FINGRESO.' '.$datos->CLINICO->NOTAINGRESO->PAC_HINGRESO; ?><br/>
                   Tipo de ingreso: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_TINGRESO; ?></strong><br/>
                   Edad actual: <strong><?php echo $datos->GENERAL->EDAD; ?></strong>  años<br/>
                 </p>
                 <hr>
                 <p>
                   Sexo: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_SEXO; ?></strong><br/>
                   Fecha de nacimiento: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_FNACIMIENTO; ?></strong><br/>
                   Edad al ingreso: <strong><?php echo $datos->CLINICO->NOTAINGRESO->EDAD; ?></strong>  años<br/>
                   Nacionalidad: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_NACIONALIDAD; ?></strong><br/>
                   Estado civil: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_ECIVIL; ?></strong><br/>
                   Escolaridad: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_ESCOLARIDAD; ?></strong><br/>
                   Sexo: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_OCUPACION; ?></strong><br/>
                 </p>
                 <hr>
                 El paciente <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_SCALLE; ?></strong><br/>
                 <?php if($datos->CLINICO->NOTAINGRESO->PAC_SCALLE == 'Tiene domicilio'){ ?>
                   Calle: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_CALLE; ?></strong><br/>
                   Número exterior: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_NEXTERIOR; ?></strong><br/>
                   Número interior: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_NINTERIOR; ?></strong><br/>
                   Código postal: <strong><?php echo $datos->CLINICO->NOTAINGRESO->PAC_CPOSTAL; ?></strong><br/>
                 <?php } ?>
                 <hr>
                 <?php if($datos->CLINICO->NOTAEGRESO){ ?>
                  Fecha y hora de egreso: <strong><?php echo $datos->CLINICO->NOTAEGRESO->PAC_FEGRESO.' '.$datos->CLINICO->NOTAEGRESO->PAC_HEGRESO; ?></strong><br/>
                  Edad al egreso: <strong><?php echo $datos->CLINICO->NOTAEGRESO->EDAD; ?></strong>  años<br/>
                  <h4><small>Días de tratamiento: </small><?php echo $datos->CLINICO->NOTAEGRESO->DIASTRATAMIENTO; ?></h4>
                 <?php } ?> 
                 <p>
                   Registrado por <?php echo $datos->CLINICO->NOTAINGRESO->NOMBRE.' '.$datos->CLINICO->NOTAINGRESO->PATERNO.' '.$datos->CLINICO->NOTAINGRESO->MATERNO; ?>
                 </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Familia
              </div>
              <div class="card-body">
                
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="tab-pane fade" id="v-pills-clinico" role="tabpanel" aria-labelledby="v-pills-clinico-tab">
          Clínico
        </div>
        <div class="tab-pane fade" id="v-pills-consejeria" role="tabpanel" aria-labelledby="v-pills-consejeria-tab">
          Consejeria
        </div>
        <div class="tab-pane fade" id="v-pills-psicologia" role="tabpanel" aria-labelledby="v-pills-psicologia-tab">
        Psicologia
        </div>
        <div class="tab-pane fade" id="v-pills-tickets" role="tabpanel" aria-labelledby="v-pills-tickets-tab">
        Tickets
        </div>
        <div class="tab-pane fade" id="v-pills-aportaciones" role="tabpanel" aria-labelledby="v-pills-aportaciones-tab">
        Aportaciones
        </div>
      </div>
    </div>
  </div>
</div>
<hr>