<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\validar\Validar;
use \app\modelos\paciente\RegistrarAportacion;
/**
 * 
 */
class VerificarAportacion
{
	private $_post,
			$_redirigir,
			$_revisar,
			$_validar,
			$_aportacion;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir, 
		RegistrarAportacion $RegistrarAportacion,
		Validar $Validar
	)
	{
		$this->_revisar = require_once 'app/libreria/registro/Aportacion.php';
		$this->_validar = $Validar;
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_aportacion = $RegistrarAportacion;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if($this->_aportacion->registrar($this->_post))
		{
			$this->_redirigir->a('RegistroRealizado/Aportacion/MenuDeExpedientes');
		}

		$this->_redirigir->a('MenuDeAportaciones', 'Error');
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{

			$this->_redirigir->a('MenuDeAportaciones', 'Post');
		}
		
		if($this->_validar->entrada($this->_post, $this->_revisar)->fails())
		{

			$this->_redirigir->a('MenuDeAportaciones','Error');
		}
	}
}