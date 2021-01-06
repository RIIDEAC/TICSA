<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\sesion\Sesion;
use \app\modelos\usuario\VerificarCredencialesCorreo;
use \app\modelos\validar\Validar;
/**
 * 
 */
class VerificarCredenciales
{
	private $_post,
			$_redirigir,
			$_sesion,
			$_usuario,
			$_validar;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir, 
		Sesion $Sesion,
		VerificarCredencialesCorreo $VerificarCredencialesCorreo,
		Validar $Validar
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_sesion = $Sesion;
		$this->_usuario = $VerificarCredencialesCorreo;
		$this->_validar = $Validar;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($usuario = $this->_usuario->verificar($this->_post['USU_CORREO']))
		{
			$this->_sesion->iniciar($usuario->USU_ID, $this->_post['USU_CORREO'], $usuario->USU_ROL);
			$this->_redirigir->a('Inicio');
		}

		$this->_redirigir->a('Login','Error');		
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('Login', 'Post');
		}
		
		if($this->_validar->entrada($this->_post, array('g-recaptcha-response' => array('google' => true)))->fails())
		{
			$this->_redirigir->a('Login','Token');
		}
	}
}