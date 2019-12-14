<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\aportaciones\BuscarAdeudoPacientePorNING_ID;
use \app\modelos\vista\Vista;

class ControladorBALANCEAPORTACIONES
{
	public function __construct
	(
		Entrada $Entrada,
		Redirigir $Redirigir,
		BuscarAdeudoPacientePorNING_ID $BuscarAdeudoPacientePorNING_ID,
		Vista $Vista
	)
	{
		$this->_entrada = $Entrada;
		$this->_redirigir = $Redirigir;
		$this->_adeudo = $BuscarAdeudoPacientePorNING_ID;
		$this->_vista = $Vista;
	}

	public function Index()
	{
		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/salir'));
		}

		if($_POST['NING_ID'] !== '0' && is_numeric($_POST['NING_ID']))
		{		
			if($this->_adeudo->obtener($_POST['NING_ID']))
			{
				$this->_vista->ver('aportaciones/AvisoAdeudo');
			}
		}
	}
}
