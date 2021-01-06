<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\token\Token;
use \app\modelos\paciente\RegistrarConvenioPeriodico;
/**
 * 
 */
class VerificarDatosConvenioPeriodico
{
	private $_post,
			$_redirigir,
			$_token,
			$_convenio;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir, 
		Token $Token,
		RegistrarConvenioPeriodico $RegistrarConvenioPeriodico
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_token = $Token;
		$this->_convenio = $RegistrarConvenioPeriodico;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_convenio->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Convenio Periodico/MenuDeExpedientes');
		}

		$this->_redirigir->a('CapturarDatosConvenioDeAportaciones', 'Error');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('CapturarDatosConvenioDeAportaciones', 'Post');
		}
		
		if(!$this->_token->verificar())
		{
			$this->_redirigir->a('CapturarDatosConvenioDeAportaciones','Token');
		}
	}
}