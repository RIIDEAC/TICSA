<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\cie\ObtenerDiagnostico;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\vista\Vista;

class ControladorCIE
{
	public function __construct
	(
		ObtenerDiagnostico $ObtenerDiagnostico,
		Vista $Vista,
		Entrada $Entrada,
		Redirigir $Redirigir
	)
	{
		$this->_codigo = $ObtenerDiagnostico;
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

		if(strlen($_POST['DX']) > 4)
		{
			if($codigos = $this->_codigo->obtener($_POST['DX']))
			{
				$this->_vista->ver('paciente/DiagnosticoMedico', $codigos);
			}
		}
	}
}