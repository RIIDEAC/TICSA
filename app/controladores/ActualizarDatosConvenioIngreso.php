<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\token\Token;
use \app\modelos\paciente\ActualizarConvenioIngreso;
/**
 * 
 */
class ActualizarDatosConvenioIngreso
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
		ActualizarConvenioIngreso $ActualizarConvenioIngreso
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_token = $Token;
		$this->_convenio = $ActualizarConvenioIngreso;
		$this->Comprobacion();
	}

	public function Index(): void
	{		
		if($this->_convenio->actualizar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Familiar/MenuDePacientes');
		}

		$this->_redirigir->a('ActualizarDatosConvenioIngreso', 'Repetido');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('VerDatosExpediente', 'Post');
		}
		
		if(!$this->_token->verificar())
		{
			$this->_redirigir->a('VerDatosExpediente','Token');
		}
	}
}