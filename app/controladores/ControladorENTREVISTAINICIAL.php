<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\token\{GenerarToken,RevisarToken};
use \app\modelos\redirigir\Redirigir;
use \app\modelos\pacientes\BuscarAvancesdeEINICIALporPacienteNING_ID;
use \app\nucleo\{Config};
use \app\modelos\vista\Vista;

class ControladorENTREVISTAINICIAL
{
	public function __construct
	(
		RevisarToken $RevisarToken, 
		GenerarToken $GenerarToken,
		Entrada $Entrada,
		Redirigir $Redirigir,
		BuscarAvancesdeEINICIALporPacienteNING_ID $BuscarAvancesdeEINICIALporPacienteNING_ID,
		Config $Config,
		Vista $Vista
	)
	{
		$this->_entrada = $Entrada;
		$this->_revisartoken = $RevisarToken;
		$this->_generartoken = $GenerarToken;
		$this->_redirigir = $Redirigir;
		$this->_avance = $BuscarAvancesdeEINICIALporPacienteNING_ID;
		$this->_config = $Config;
		$this->_vista = $Vista;
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
				$partes = 0;

				foreach ($this->_avance->obtener($_POST['NING_ID']) as $key => $value)
				{
					if($value == 0)
					{
						$this->_vista->ver('consejeria/CapturarENTREVISTAINICIAL'.$key);
						break;
					}

					$partes++;
				}

				if($partes == 8)
				{
					$this->_vista->ver('consejeria/FormatoHecho');
				}
			}
			
		}
	}

	public function Token()
	{
		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/salir'));
		}

		echo $this->_generartoken->generar();
	}
}