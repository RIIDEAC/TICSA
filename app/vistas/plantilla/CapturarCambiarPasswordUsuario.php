<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Cambiar contraseña</h1>
        <p class="text-justify"><strong>INTRUCCIONES:</strong> Introduce tu constraseña actual y después elige la nueva y presiona "Cambiar".</p>
        <p>
            Recuerda que la contraseña debe de cumplir con los siguientes criterios:

            <li>Tener minimo 8 caracteres</li>
            <li>Tener minimo un número</li>
            <li>Tener minimo 1 letra mayúscula</li>
        </p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarCambiarPasswordUsuario/">
        <div class="row">
            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputPassword">Contraseña actual</label>
                    <input name="USU_PASS" minlength="8" maxlength="25" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>                
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputPassword1">Contraseña nueva</label>
                    <input name="NUSU_PASS" minlength="8" maxlength="25" type="password" id="inputPassword1" class="form-control" placeholder="Contraseña nueva" required>                
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-label-group">
                    <label for="inputPassword2">Repetir contraseña</label>
                    <input name="RUSU_PASS" minlength="8" maxlength="25" type="password" id="inputPassword2" class="form-control" placeholder="Repetir contraseña nueva" required>                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-left">
                <br>
                <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
                <button type="submit" class="btn btn-primary btn-lg">Cambiar</button>
            </div>
        </div>    
        </form>
    </div>
</div>