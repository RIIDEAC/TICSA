<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\token\{GenerarToken,RevisarToken};
use \app\modelos\redirigir\Redirigir;
use \app\nucleo\{Config};
use \app\modelos\vista\Vista;
use \app\modelos\consejeria\{BuscarValoracionPacienteporNING_ID,BuscarPlanIndividualPacienteporNING_ID};

class ControladorPLANCONSEJERIAINDIVIDUAL
{
	public function __construct
	(
		RevisarToken $RevisarToken, 
		GenerarToken $GenerarToken,
		Entrada $Entrada,
		Redirigir $Redirigir,
		Config $Config,
		Vista $Vista,
		BuscarValoracionPacienteporNING_ID $BuscarValoracionPacienteporNING_ID,
		BuscarPlanIndividualPacienteporNING_ID $BuscarPlanIndividualPacienteporNING_ID	
	)
	{
		$this->_entrada = $Entrada;
		$this->_revisartoken = $RevisarToken;
		$this->_generartoken = $GenerarToken;
		$this->_redirigir = $Redirigir;
		$this->_config = $Config;
		$this->_vista = $Vista;	
		$this->_valoracion =  $BuscarValoracionPacienteporNING_ID;
		$this->_pci = $BuscarPlanIndividualPacienteporNING_ID;
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
				if($valoracion = $this->_valoracion->obtener($_POST['NING_ID']))
				{
					if(!$this->_pci->obtener($_POST['NING_ID']))
					{
						$this->_vista->ver('consejeria/CapturarPLANINDIVIDUAL', $valoracion);
					}
					else
					{
						//YA TIENE EL FORMATO HECHO
						$this->_vista->ver('consejeria/FormatoHecho');
					}
				}
				else
				{
					//NO TIENE VALORACION COMPLETA
					$this->_vista->ver('consejeria/FormatoIncompleto');
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