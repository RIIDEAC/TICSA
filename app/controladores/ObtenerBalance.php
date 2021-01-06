<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\paciente\{DatosDeAdeudoAportacionesPacientes};
use \app\modelos\vista\Vista;
/**
 * 
 */
class ObtenerBalance
{
	private $_post,
			$_deuda,
			$_vista;
	
	public function __construct
	(
		Post $Post,
		DatosDeAdeudoAportacionesPacientes $DatosDeAdeudoAportacionesPacientes,
		Vista $Vista
	)
	{
		$this->_post = $Post;
		$this->_deuda = $DatosDeAdeudoAportacionesPacientes;
		$this->_vista = $Vista;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if(isset($_POST['NING_ID']) && is_numeric($_POST['NING_ID']))
		{
			if($balance = $this->_deuda->obtener($this->_post['NING_ID']))
			{
				$this->_vista->ver(
					array(
						'expediente/BalanceDeAportaciones'
					), (object) $balance
				);
			}
		}
		else
		{
			//
		}	
		
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			//
		}
	}
}