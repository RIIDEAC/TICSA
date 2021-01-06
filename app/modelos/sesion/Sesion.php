<?php
namespace app\modelos\sesion;
use \app\nucleo\Config;
/**
 * 
 */
class Sesion
{
	private $_config;
	
	public function __construct(Config $Config)
	{
		$this->_config = $Config;
	}

	public function iniciar($id,$usuario,$rol): void
	{
		$_SESSION['id'] = $id;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['rol'] = $rol;
		$this->tiempo();
	}
       /**
        * @return null|true
        */
	public function verificar()
	{
		if(!isset($_SESSION['id']))
		{
			$this->cerrar();
		}
		elseif (time() - $_SESSION['tiempoinicio'] > $this->_config->obtener('sesion/caducidad'))
		{
			$this->cerrar();
		}
		else
		{
			$this->tiempo();

			return true;	
		}
	}

	public function cerrar(): bool
	{
		unset($_SESSION['id']);
		unset($_SESSION['usuario']);
		unset($_SESSION['rol']);
		unset($_SESSION['tiempoinicio']);
		return false;
	}

	public function tiempo(): int
	{
		return $_SESSION['tiempoinicio'] = time();
	}

}