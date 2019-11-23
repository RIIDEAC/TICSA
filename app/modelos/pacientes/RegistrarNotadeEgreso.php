<?php
namespace app\modelos\pacientes;
use \app\nucleo\Config;
use \app\modelos\sql\{DBInsert};
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{ObtenerDatosNotaIngresoporNING_ID,ContarDiasTratamientoPacienteporNING_ID,ObtenerPacienteporID};
use \app\modelos\fechas\CalcularEdadPorFechadeNacimiento;
/**
 * 
 */
class RegistrarNotadeEgreso
{
	private $_config,	
			$_db,
			$_usu,
			$_paciente,
			$_pacDatos;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		ObtenerDatosNotaIngresoporNING_ID $ObtenerDatosNotaIngresoporNING_ID,
		CalcularEdadPorFechadeNacimiento $CalcularEdadPorFechadeNacimiento,
		ContarDiasTratamientoPacienteporNING_ID $ContarDiasTratamientoPacienteporNING_ID,
		ObtenerPacienteporID $ObtenerPacienteporID
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_paciente = $ObtenerDatosNotaIngresoporNING_ID;
		$this->_edad = $CalcularEdadPorFechadeNacimiento;
		$this->_diasTratamiento = $ContarDiasTratamientoPacienteporNING_ID;
		$this->_pacDatos = $ObtenerPacienteporID;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);
		unset($data['ENVIAR']);

		$data['PAC_ID'] = (int) $this->_paciente->obtener($data['NING_ID'])->PAC_ID;

		$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;

		$data['EDAD_EGRE'] = $this->_edad->obtener
			(
				$this->_pacDatos->obtener($data['PAC_ID'])->PAC_FNACIMIENTO,
				$data['PAC_FEGRESO']
			);

		$data['DIAS_TRATAMIENTO'] = $this->_diasTratamiento->obtener(
			$data['NING_ID'],
			$data['PAC_FEGRESO']
		);

		if($this->_db->registrar($this->_config->obtener('dbnombres/notaegreso'), $data))
		{
			return true;
		}
		

		return false;
	}
}
