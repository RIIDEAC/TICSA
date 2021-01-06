<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\paciente\RegistrarVincularExpediente;
use \app\modelos\validar\Validar;
/**
 * 
 */
class VerificarDatosVincularExpediente
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
		RegistrarVincularExpediente $RegistrarVincularExpediente,
		Validar $Validar
	)
	{
		$this->_revisar = require_once 'app/libreria/registro/VincularExpediente.php';
		$this->_validar = $Validar;
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_expediente = $RegistrarVincularExpediente;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_expediente->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Vinculo/Ver');
		}

		$this->_redirigir->a('Inicio', 'Error');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('Inicio', 'Post');
		}
		
		if($this->_validar->entrada($this->_post, $this->_revisar)->fails())
		{
			$this->_redirigir->a('Inicio','Validar');
		}
	}
}