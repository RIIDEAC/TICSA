<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\token\Token;
use \app\modelos\paciente\RegistrarPaciente;
/**
 * 
 */
class VerificarDatosPaciente
{
	private $_post,
			$_redirigir,
			$_token,
			$_paciente;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir, 
		Token $Token,
		RegistrarPaciente $RegistrarPaciente
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_token = $Token;
		$this->_paciente = $RegistrarPaciente;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_paciente->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Paciente/MenuDePacientes');
		}

		$this->_redirigir->a('CapturarDatosPaciente', 'Repetido');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('CapturarDatosPaciente', 'Post');
		}
		
		if(!$this->_token->verificar())
		{
			$this->_redirigir->a('CapturarDatosPaciente','Token');
		}
	}
}