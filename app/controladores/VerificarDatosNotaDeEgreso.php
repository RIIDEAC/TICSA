<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\token\Token;
use \app\modelos\paciente\RegistrarNotaDeEgreso;
/**
 * 
 */
class VerificarDatosNotaDeEgreso
{
	private $_post,
			$_redirigir,
			$_token,
			$_notadeegreso;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir, 
		Token $Token,
		RegistrarNotaDeEgreso $RegistrarNotaDeEgreso
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_token = $Token;
		$this->_notadeegreso = $RegistrarNotaDeEgreso;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_notadeegreso->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado');
		}

		$this->_redirigir->a('CapturarDatosNotaDeEgreso', 'Error');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('CapturarDatosNotaDeEgreso', 'Post');
		}
		
		if(!$this->_token->verificar())
		{
			$this->_redirigir->a('CapturarDatosNotaDeEgreso','Token');
		}
	}
}