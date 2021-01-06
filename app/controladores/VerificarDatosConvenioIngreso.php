<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\token\Token;
use \app\modelos\paciente\RegistrarConvenioIngreso;
/**
 * 
 */
class VerificarDatosConvenioIngreso
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
		RegistrarConvenioIngreso $RegistrarConvenioIngreso
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_token = $Token;
		$this->_convenio = $RegistrarConvenioIngreso;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_convenio->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Convenio Ingreso/MenuDeExpedientes');
		}

		$this->_redirigir->a('CapturarDatosConvenioDeIngreso', 'Error');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('CapturarDatosConvenioDeIngreso', 'Post');
		}
		
		if(!$this->_token->verificar())
		{
			$this->_redirigir->a('CapturarDatosConvenioDeIngreso','Token');
		}
	}
}