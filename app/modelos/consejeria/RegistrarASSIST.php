<?php
namespace app\modelos\consejeria;
use \app\modelos\log\RegistrarMovimientoDB;
use \app\nucleo\Config;
use \app\modelos\sql\{DBInsert};
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{ObtenerDatosPacienteporNING_ID};
/**
 * 
 */
class RegistrarASSIST
{
	private $_config,	
			$_db,
			$_usu,
			$_ingresos,
			$_egresos,
			$_icurp;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		ObtenerDatosPacienteporNING_ID $ObtenerDatosPacienteporNING_ID,
		RegistrarMovimientoDB $RegistrarMovimientoDB
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_paciente = $ObtenerDatosPacienteporNING_ID;
		$this->_log = $RegistrarMovimientoDB;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);

		$data['PAC_ID'] = (int) $this->_paciente->obtener($data['NING_ID'])->PAC_ID;

		$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;

		if($this->_db->registrar($this->_config->obtener('dbnombres/assist'), $data))
		{
			$this->_log->log($this->_config->obtener('dbnombres/assist'),'REGISTRO ASSIST',$data['USU_ID']);
			return true;
		}
		
		return false;
	}
}
