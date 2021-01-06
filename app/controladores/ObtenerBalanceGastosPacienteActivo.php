<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\paciente\DatosBalanceDeGastosPaciente;
use \app\modelos\vista\Vista;
/**
 * 
 */
class ObtenerBalanceGastosPacienteActivo
{
	private $_post,
			$_gastos,
			$_vista;
	
	public function __construct
	(
		Post $Post,
		DatosBalanceDeGastosPaciente $DatosBalanceDeGastosPaciente,
		Vista $Vista
	)
	{
		$this->_post = $Post;
		$this->_gastos = $DatosBalanceDeGastosPaciente;
		$this->_vista = $Vista;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if(isset($_POST['NING_ID']) && is_numeric($_POST['NING_ID']))
		{
			if($gastos = $this->_gastos->obtener($this->_post['NING_ID']))
			{
				$this->_vista->ver(
					array(
						'expediente/BalanceDeGastos'
					),(object) $gastos
				);
			}
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