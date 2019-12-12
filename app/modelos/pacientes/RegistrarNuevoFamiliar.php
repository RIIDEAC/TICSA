<?php
namespace app\modelos\pacientes;
use \app\nucleo\Config;
use \app\modelos\sql\DBInsert;
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{BuscarFamiliarporICURP,CrearICURPFamiliar};
/**
 * 
 */
class RegistrarNuevoFamiliar
{
	private $_config,	
			$_db,
			$_usu,
			$_familiar,
			$_icurp,
			$_parentesco = array(
				'1' => 'Esposo(a)',
				'3' => 'Hermano(a)',
				'4' => 'Concubino(a)',
				'5' => 'Sobrino(a)',
				'6' => 'Primo(a)',
				'7' => 'Nieto(a)',
				'8' => 'Hijo(a)',
				'9' => 'Hijo(a)',
				'10' => 'Abuelo(a)',
				'11' => 'Tío(a)',
			);
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		BuscarFamiliarporICURP $BuscarFamiliarporICURP,
		CrearICURPFamiliar $CrearICURPFamiliar
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_familiar = $BuscarFamiliarporICURP;
		$this->_icurp = $CrearICURPFamiliar;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);

		if($this->verificarRepetido($data))
		{
			$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;
			$data['FAM_NOMBRE'] = trim(strtoupper($data['FAM_NOMBRE']));
			$data['FAM_PATERNO'] = trim(strtoupper($data['FAM_PATERNO']));
			$data['FAM_MATERNO'] = trim(strtoupper($data['FAM_MATERNO']));

			$data['FAM_ICURP'] = $this->_icurp->crear($data);

			if($data['PAE_ID'] == '2')
			{
				if($data['SEX_ID'] == '1')
				{
					$data['PAC_PAREN'] = 'Padre';
				}
				else
				{
					$data['PAC_PAREN'] = 'Madre';
				}

			}

			foreach ($this->_parentesco as $key => $value)
			{
				if($key == $data['PAE_ID'])
				{
					$data['PAC_PAREN'] = $value;
				}
			}

			if($this->_db->registrar($this->_config->obtener('dbnombres/familiar'), $data))
			{
				return true;
			}
		}

		return false;
	}

	public function verificarRepetido($data = array())
	{
		return $this->_familiar->obtener($this->_icurp->crear($data));
	}
}
