<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\cpostal\ObtenerCodigoPostal;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\vista\Vista;

class ControladorCODIGOPOSTAL
{
	public function __construct
	(
		ObtenerCodigoPostal $ObtenerCodigoPostal,
		Vista $Vista,
		Entrada $Entrada,
		Redirigir $Redirigir
	)
	{
		$this->_codigo = $ObtenerCodigoPostal;
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

		if(strlen($_POST['CP']) > 3)
		{
			if($codigos = $this->_codigo->obtener($_POST['CP']))
			{
				$this->_vista->ver('paciente/CapturarCodigoPostal'.$_POST['Vista'],$codigos);
			}
		}
	}
}