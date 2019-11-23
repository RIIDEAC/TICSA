<?php
namespace app\nucleo;

class App
{
	private     $_contenedor,
                $_controlador = 'Inicio',
                $_salir = 'CerrarSesion',
                $_login = 'Login',
                $_metodo = 'Index',
                $_parametros = [],
                $_autentificar,
                $_config,
                $_default = 'Inicio',
                $_rol,
                $_sinpermisos = 'SinPermisos';

	public function __construct
    (
        \DI\Container $Contenedor, 
        \app\modelos\sesion\RevisarSesion $RevisarSesion, 
        \app\nucleo\Config $Config
    )
	{
        $this->_contenedor = $Contenedor;
        $this->_config = $Config;
        $this->_autentificar = $RevisarSesion;
        $this->_url = $this->filtrarUrl();
        
        if(file_exists($this->_config->obtener('dir/controladores').$this->_url[0]. '.php'))
        {
            $this->_controlador = $this->_url[0];
            unset($this->_url[0]);
        }

        if($this->_controlador == $this->_salir)
        {
            unset($_SESSION[$this->_config->obtener('sesion/tiempo')]);
            unset($_SESSION[$this->_config->obtener('sesion/correo')]);
            session_destroy();
            session_start();
            $this->_controlador = $this->_login;
        }

        //COMPRUEBA SI PARA EL CONTROLADOR NECESITA LOGIN
        
        if(!in_array($this->_controlador, $this->_config->obtener('controladores/noLogin')))
        {
            //COMPRUEBA LA SESION EN CASO DE QUE SI SE NECESITE LOGIN
            if(!$this->_autentificar->revisar())
            {
                //SI NO PASA LA COMPROBACION CARGA EL CONTROLADOR DE LOGIN
                $this->_controlador = $this->_login;
            }
            else
            {
                //SI PASA LA SESION CARGAMOS EL ROL
                $this->_rol = $_SESSION[$this->_config->obtener('sesion/rol')];

                //COMPRUEBA SI EL CONTROLADOR SE ENCUENTRA EN LA LISTA DE RESTRICCION
                if(in_array($this->_controlador, $this->_config->obtener('controladores/permisos/'.$this->_rol)))
                {
                    //ENTONCES NO TIENE PERMISO SE CARGA EL CONTROLADOR POR DEFAULT
                    $this->_controlador = $this->_sinpermisos;
                }
            }
        }
        else
        {
            //COMPRUEBA LA SESION EN CASO DE QUE NO SE NECESITE LOGIN
            if($this->_autentificar->revisar())
            {
                $this->_controlador = $this->_default;
            }
        }    

        $this->_controlador = 'app\\controladores\\'.$this->_controlador;

        $this->_controlador = $this->_contenedor->get($this->_controlador);

        if(isset($this->_url[1]))
        {
            if(method_exists($this->_controlador, $this->_url[1]))
            {
                $this->_metodo = $this->_url[1];
                unset($this->_url[1]);
            }
        }
        
        $this->_parametros = $this->_url ? array_values($this->_url) : [];
        
        call_user_func_array([$this->_controlador, $this->_metodo], $this->_parametros);
        
        
	}

	public function filtrarUrl()
	{
		if(isset($_GET['url']))
        {
            return $this->_url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));    
        }
	}

}