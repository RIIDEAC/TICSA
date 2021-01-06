<?php
namespace app\nucleo;
use \app\nucleo\Config;
use \app\modelos\contenedor\Contenedor;
use \app\modelos\sesion\Sesion;
/**
 * 
 */
class App
{
	private     $_contenedor,
                $_login = 'Login',
                $_metodo = 'Index',
                $_parametros = [],
                $_config,
                $_url,
                $_sesion,
                $_inicio = 'Inicio',
                $_sinPermiso = 'SinPermiso';

    public      $_controlador = 'Login';
	
	public function __construct(Contenedor $Contenedor, Config $Config, Sesion $Sesion)
	{
		$this->_contenedor = $Contenedor;
        $this->_config = $Config;
        $this->_sesion = $Sesion;
        $this->_url = $this->filtrarUrl();

        //SI EL CONTROLADOR ES NULO ASIGNAMOS VALOR DE LOGIN
        if(!isset($this->_url[0]))
        {
            $this->_url[0] = $this->_login;
        }

        //SI EL CONTROLADOR EXISTE
        if(file_exists($this->_config->obtener('dir/controladores').$this->_url[0]. '.php'))
        {
        	$this->_controlador = $this->_url[0];
            unset($this->_url[0]);

            //Si el controlador requiere de sesión
        	if(!in_array($this->_controlador, $this->_config->obtener('sesion/noLogin')))
        	{
        		//Verificar sesion
        		if(!$this->_sesion->verificar())
        		{
                    //Redirigir a login
        			$this->_controlador = $this->_login;
        		}
        	}
            
            //Si existe sesion
            if($this->_sesion->verificar())
            {
                //Verificar que el controlador no sea de Login
                if(in_array($this->_controlador, $this->_config->obtener('sesion/Login')))
                {
                    //Redirigir a inicio
                    $this->_controlador = $this->_inicio;
                }
            }

            //Actualizar caducidad de sesion

            $this->_sesion->tiempo();
        }
        //SI EL CONTROLADOR NO EXISTE PERO TAMPOCO ES NULO
        else
        {
            if($this->_sesion->verificar())
            {
                //Redirigir a inicio
                $this->_controlador = $this->_inicio;
                //Actualizar caducidad de sesion
                $this->_sesion->tiempo();
            }
            else
            {
                //Redirigir a login
                $this->_controlador = $this->_login;
            }
        }

        //VERIFICAR PERMISOS DE USUARIO VS CONTROLADOR
        
        foreach ($this->_config->obtener('sesion/roles') as $key => $value)
        {
            foreach ($value as $controlador)
            {
                if($this->_controlador == $controlador)
                {
                    //REQUIERE PERMISOS
                    if((int) $_SESSION['rol'] > $key)
                    {
                        if((int) $_SESSION['rol'] !== $key)
                        {
                            $this->_controlador = $this->_sinPermiso;
                        } 
                    } 
                }
            }
        }
        

        //INICIAR EL CONTROLADOR Y LOS PARAMETROS
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
       /**
	 * +        * @return null|string[]
	 * +        *
	 * +        * @psalm-return non-empty-list<string>|null
	 * +
	 *
	 * @return null|string[]
	 *
	 * @psalm-return non-empty-list<string>|null
	 */
	public function filtrarUrl()
	{
		if(isset($_GET['url']))
        {
            return $this->_url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));    
        }
    }
}