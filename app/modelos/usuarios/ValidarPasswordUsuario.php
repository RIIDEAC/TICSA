<?php
namespace app\modelos\usuarios;
use \app\modelos\usuarios\ObtenerPasswordporCorreo;

class ValidarPasswordUsuario
{
	public function __construct(ObtenerPasswordporCorreo $ObtenerPasswordporCorreo)
	{
		$this->_datosUsuario = $ObtenerPasswordporCorreo;
	}

	public function validar($correo, $pass)
	{
		if($usuario = $this->_datosUsuario->obtener($correo))
		{
			return password_verify($pass, $usuario->USU_PASS);
		}
		
		return false; 
	}

}