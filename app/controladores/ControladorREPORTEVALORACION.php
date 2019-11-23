<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\token\{GenerarToken,RevisarToken};
use \app\modelos\redirigir\Redirigir;
use \app\modelos\pacientes\ObtenerPreySeleccionporPacienteNING_ID;
use \app\nucleo\{Config};
use \app\modelos\vista\Vista;
use \app\modelos\consejeria\{BuscarValoracionPacienteporNING_ID};

class ControladorREPORTEVALORACION
{
	public function __construct
	(
		RevisarToken $RevisarToken, 
		GenerarToken $GenerarToken,
		Entrada $Entrada,
		Redirigir $Redirigir,
		ObtenerPreySeleccionporPacienteNING_ID $ObtenerPreySeleccionporPacienteNING_ID,
		Config $Config,
		Vista $Vista,
		BuscarValoracionPacienteporNING_ID $BuscarValoracionPacienteporNING_ID
	)
	{
		$this->_entrada = $Entrada;
		$this->_revisartoken = $RevisarToken;
		$this->_generartoken = $GenerarToken;
		$this->_redirigir = $Redirigir;
		$this->_preseleccion = $ObtenerPreySeleccionporPacienteNING_ID;
		$this->_config = $Config;
		$this->_vista = $Vista;
		$this->_valoracion = $BuscarValoracionPacienteporNING_ID;
	}

	public function Index()
	{
		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/salir'));
		}

		if($this->_revisartoken->revisar($_POST['TOKEN']))
		{
			if($_POST['NING_ID'] !== '0')
			{
				//VITAS Y CONSULTAS
				if(!$this->_valoracion->obtener($_POST['NING_ID']))
				{
					if($preseleccion = $this->_preseleccion->obtener($_POST['NING_ID']))
					{
						$this->_vista->ver('consejeria/CapturarFormatosPreySeleccion',$preseleccion);
					}
					else
					{
						//NO TIENE LOS INSTRUMENTOS COMPLETOS
						$this->_vista->ver('consejeria/FormatoIncompleto');
					}
				}
				else
				{
					$this->_vista->ver('consejeria/FormatoHecho');
				}
				
			}
			
		}
	}

	//CONTROL DE RENOVACION DE TOKEN
	public function Token()
	{
		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/salir'));
		}

		echo $this->_generartoken->generar();
	}
}