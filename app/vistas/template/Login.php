<form class="form-signin" method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarCredenciales/">
      <img class="mb-4" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/riide-logo-60x60.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Introduce tus datos</h1>

      <div class="form-label-group">
        <input name="USU_CORREO" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Correo electrónico</label>
      </div>

      <div class="form-label-group">
        <input name="USU_PASS" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="1" required checked> Acepto Términos y Condiciones
        </label>
      </div>
      <div class="form-label-group">
        <div class="g-recaptcha" data-sitekey="6LcGiMcUAAAAAEjfIXSOBONHCnZAAEomNWQHBigb"></div>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; <?php echo $this->_config->obtener('app/since').'-'.date("Y"); ?></p>
    </form>