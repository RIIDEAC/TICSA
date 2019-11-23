<?php
namespace app\modelos\consejeria;
use \app\nucleo\Config;
use \app\modelos\sql\{DBInsert};
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{ObtenerDatosPacienteporNING_ID};
/**
 * 
 */
class RegistrarNotaGrupal
{
	private $_config,	
			$_db,
			$_usu,
			$_paciente;
	
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

		$ids = $data['NING_ID'];

		unset($data['NING_ID']);

		$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;

		if($idNota = $this->_db->registrar($this->_config->obtener('dbnombres/notaconsejeriagru'), $data))
		{
			$x=0;

			unset($datos);

			foreach ($ids as $value)
			{
				$datos['NCG_ID'] = $idNota;
				$datos['PAC_ID'] = (int) $this->_paciente->obtener($value)->PAC_ID;
				$datos['NING_ID'] = $value;

				$this->_db->registrar($this->_config->obtener('dbnombres/consejerigrupaldat'), $datos);					
			}

			return true;
			
		}

		return false;
	}
}
