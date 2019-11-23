<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\medicamento\ObtenerMedicamento;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\vista\Vista;

class ControladorMEDICAMENTO
{
	public function __construct
	(
		ObtenerMedicamento $ObtenerMedicamento,
		Vista $Vista,
		Entrada $Entrada,
		Redirigir $Redirigir
	)
	{
		$this->_med = $ObtenerMedicamento;
		$this->_vista = $Vista;
		$this->_entrada = $Entrada;
		$this->_redirigir = $Redirigir;
	}

	public function Index()
	{
		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/salir'));
		}

		if(strlen($_POST['MED']) > 4)
		{
			if($codigos = $this->_med->obtener($_POST['MED']))
			{
				$this->_vista->ver('paciente/CapturarMedicamento', $codigos);
			}
		}
	}
}