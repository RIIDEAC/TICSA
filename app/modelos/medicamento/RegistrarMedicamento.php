<?php
namespace app\modelos\medicamento;
use \app\nucleo\Config;
use \app\modelos\sql\{DBInsert};
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{ObtenerDatosPacienteporNING_ID};
/**
 * 
 */
class RegistrarMedicamento
{
	private $_config,	
			$_db,
			$_usu;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		ObtenerDatosPacienteporNING_ID $ObtenerDatosPacienteporNING_ID
	)
	{
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
		
		if($this->_db->registrar($this->_config->obtener('dbnombres/recetamedicamentos'), $data))
		{
			return true;
		}
		
		return false;
	}
}
