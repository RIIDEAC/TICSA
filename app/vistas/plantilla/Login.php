<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $this->_config->obtener('app/descripcion'); ?>">
    <meta name="author" content="<?php echo $this->_config->obtener('app/author'); ?>">
    <title><?php echo $this->_config->obtener('app/descripcion'); ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="<?php echo $this->_config->obtener('app/webbase'); ?>css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarCredenciales/">
      <div class="text-center mb-4">
        <img class="mb-4" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/riide-logo-60x60.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?php echo $this->_config->obtener('app/descripcion'); ?></h1>
        <p>Introduce tus datos y da clic en Entrar</p>
        <?php if(isset($_SESSION[$this->_config->obtener('sesion/error')])){ foreach($_SESSION[$this->_config->obtener('sesion/error')] as $error){ foreach($error as $e){ ?>
          <div class="alert alert-warning" role="alert">
            <?php echo $e; ?>
          </div>
        <?php } } } ?>
      </div>

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
          <input type="checkbox" value="1" required> Acepto Terminos y Condiciones
        </label>
      </div>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; <?php echo $this->_config->obtener('app/since').'-'.date("Y"); ?></p>
    </form>
  </body>
</html>
