<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\token\Token;
use \app\modelos\paciente\ActualizarNotaDeEgreso;
/**
 * 
 */
class ActualizarDatosNotaDeEgreso
{
	private $_post,
			$_redirigir,
			$_token,
			$_notaDeEgreso;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir, 
		Token $Token,
		ActualizarNotaDeEgreso $ActualizarNotaDeEgreso
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_token = $Token;
		$this->_notaDeEgreso = $ActualizarNotaDeEgreso;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_notaDeEgreso->actualizar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Formato/MenuDeExpedientes');
		}

		$this->_redirigir->a('Inicio', 'Repetido');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('Inicio', 'Post');
		}
		
		if(!$this->_token->verificar())
		{
			$this->_redirigir->a('Inicio','Token');
		}
	}
}