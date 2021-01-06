<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\paciente\RegistrarNotaDeIngreso;
use \app\modelos\validar\Validar;
/**
 * 
 */
class VerificarDatosNotaDeIngreso
{
	private $_post,
			$_redirigir,
			$_expediente,
			$_revisar,
			$_validar;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir,
		RegistrarNotaDeIngreso $RegistrarNotaDeIngreso,
		Validar $Validar
	)
	{
		$this->_revisar = require_once 'app/libreria/registro/NotaDeIngreso.php';
		$this->_validar = $Validar;
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_expediente = $RegistrarNotaDeIngreso;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_expediente->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Nota de Ingreso/MenuDeExpedientes');
		}

		$this->_redirigir->a('CapturarDatosExpediente', 'Error');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('CapturarDatosExpediente', 'Post');
		}
		
		if($this->_validar->entrada($this->_post, $this->_revisar)->fails())
		{

			$this->_redirigir->a('CapturarDatosExpediente','Error');
		}
	}
}