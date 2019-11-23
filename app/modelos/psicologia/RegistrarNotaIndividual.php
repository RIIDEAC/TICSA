<?php
namespace app\modelos\psicologia;
use \app\nucleo\Config;
use \app\modelos\sql\{DBInsert};
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{ObtenerDatosPacienteporNING_ID,ContarDiasTratamientoPacienteporNING_ID};
use \app\modelos\psicologia\{ContarNotasEvolucionIndividualporNING_ID};
/**
 * 
 */
class RegistrarNotaIndividual
{
	private $_config,	
			$_db,
			$_usu,
			$_paciente,
			$_notas,
			$_diasProceso;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		ObtenerDatosPacienteporNING_ID $ObtenerDatosPacienteporNING_ID,
		ContarNotasEvolucionIndividualporNING_ID $ContarNotasEvolucionIndividualporNING_ID,
		ContarDiasTratamientoPacienteporNING_ID $ContarDiasTratamientoPacienteporNING_ID
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_paciente = $ObtenerDatosPacienteporNING_ID;
		$this->_notas = $ContarNotasEvolucionIndividualporNING_ID;
		$this->_diasProceso = $ContarDiasTratamientoPacienteporNING_ID;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);

		$data['PAC_ID'] = (int) $this->_paciente->obtener($data['NING_ID'])->PAC_ID;

		$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;

		$data['NUMERO_SESION'] = $this->_notas->obtener($data['NING_ID']) + 1;

		$data['DIAS_TRATAMIENTO'] = $this->_diasProceso->obtener($data['NING_ID'],$data['FECHA_SESION']);

		if($this->_db->registrar($this->_config->obtener('dbnombres/notapsicologiaind'), $data))
		{
			return true;
		}
		
		return false;
	}
}
