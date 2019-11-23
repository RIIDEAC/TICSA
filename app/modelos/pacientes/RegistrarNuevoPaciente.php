<?php
namespace app\modelos\pacientes;
use \app\nucleo\Config;
use \app\modelos\sql\DBInsert;
use \app\modelos\usuarios\ObtenerDatosUsuarioporCorreo;
use \app\modelos\pacientes\{BuscarPacienteporICURP,CrearICURP};
/**
 * 
 */
class RegistrarNuevoPaciente
{
	private $_config,	
			$_db,
			$_usu,
			$_paciente,
			$_icurp;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		BuscarPacienteporICURP $BuscarPacienteporICURP,
		CrearICURP $CrearICURP
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_paciente = $BuscarPacienteporICURP;
		$this->_icurp = $CrearICURP;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);

		$data['PAC_NOMBRE'] = trim(strtoupper($data['PAC_NOMBRE']));
		$data['PAC_PATERNO'] = trim(strtoupper($data['PAC_PATERNO']));
		$data['PAC_MATERNO'] = trim(strtoupper($data['PAC_MATERNO']));

		if($this->verificarRepetido($data))
		{
			$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;
			$data['PAC_ICURP'] = $this->_icurp->crear($data);

			if($id = $this->_db->registrar($this->_config->obtener('dbnombres/pacientes'), $data))
			{
				return $id;
			}
		}

		return false;
	}

	public function verificarRepetido($data = array())
	{
		return $this->_paciente->obtener($this->_icurp->crear($data));
	}
}
