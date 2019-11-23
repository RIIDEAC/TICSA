<?php
namespace app\modelos\aportaciones;
use \app\modelos\log\RegistrarMovimientoDB;
use \app\nucleo\Config;
use \app\modelos\sql\{DBInsert};
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{ObtenerDatosPacienteporNING_ID};
/**
 * 
 */
class RegistrarAportacionPaciente
{
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		ObtenerDatosPacienteporNING_ID $ObtenerDatosPacienteporNING_ID,
		RegistrarMovimientoDB $RegistrarMovimientoDB
	)
	{
		$this->_log = $RegistrarMovimientoDB;
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_paciente = $ObtenerDatosPacienteporNING_ID;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);
		
		$data['PAC_ID'] = (int) $this->_paciente->obtener($data['NING_ID'])->PAC_ID;

		$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;

		if($id = $this->_db->registrar($this->_config->obtener('dbnombres/aportacionpaciente'), $data))
		{
			$this->_log->log($this->_config->obtener('dbnombres/aportacionpaciente'),'REGISTRO APORTACION',$data['USU_ID']);
			return $id;
		}
		
		return false;
	}
}
