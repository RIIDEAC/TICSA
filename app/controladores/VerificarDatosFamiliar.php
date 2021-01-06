<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\token\Token;
use \app\modelos\paciente\RegistrarFamiliar;
/**
 * 
 */
class VerificarDatosFamiliar
{
	private $_post,
			$_redirigir,
			$_token,
			$_familiar;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir, 
		Token $Token,
		RegistrarFamiliar $RegistrarFamiliar
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_token = $Token;
		$this->_familiar = $RegistrarFamiliar;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_familiar->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Familiar/MenuDePacientes');
		}

		$this->_redirigir->a('CapturarDatosExpediente', 'Error');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('CapturarDatosExpediente', 'Post');
		}
		
		if(!$this->_token->verificar())
		{
			$this->_redirigir->a('CapturarDatosExpediente','Token');
		}
	}
}