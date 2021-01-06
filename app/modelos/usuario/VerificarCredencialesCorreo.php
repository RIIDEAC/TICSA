<?php
namespace app\modelos\usuario;
use \app\modelos\usuario\DatosUsuarioPorCorreo;
/**
 * 
 */
class VerificarCredencialesCorreo
{
	
	public function __construct
	(
		DatosUsuarioPorCorreo $DatosUsuarioPorCorreo
	)
	{
		$this->_usuario = $DatosUsuarioPorCorreo;
	}

	public function verificar(string $correo)
	{

		if($usuario = $this->_usuario->obtener($correo))
		{
			if(password_verify($_POST['USU_PASS'], $usuario->USU_PASS))
			{
				return $usuario;
			}
		}

		return false;
	}
}