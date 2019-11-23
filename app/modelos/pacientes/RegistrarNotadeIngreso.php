<?php
namespace app\modelos\pacientes;
use \app\nucleo\Config;
use \app\modelos\sql\DBInsert;
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\modelos\pacientes\{NumeroDeNotasDeIngresoPorPaciente,NumeroDeNotasDeEgresoPorPaciente,ObtenerPacienteporID};
use \app\modelos\fechas\CalcularEdadPorFechadeNacimiento;
/**
 * 
 */
class RegistrarNotadeIngreso
{
	private $_config,	
			$_db,
			$_usu,
			$_ingresos,
			$_egresos;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		NumeroDeNotasDeIngresoPorPaciente $NumeroDeNotasDeIngresoPorPaciente,
		NumeroDeNotasDeEgresoPorPaciente $NumeroDeNotasDeEgresoPorPaciente,
		ObtenerPacienteporID $ObtenerPacienteporID,
		CalcularEdadPorFechadeNacimiento $CalcularEdadPorFechadeNacimiento
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_ingresos = $NumeroDeNotasDeIngresoPorPaciente;
		$this->_egresos = $NumeroDeNotasDeEgresoPorPaciente;
		$this->_edad = $CalcularEdadPorFechadeNacimiento;
		$this->_paciente = $ObtenerPacienteporID;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);

		if($this->verificarIngresos($data['PAC_ID']))
		{
			$data['PAC_EDAD'] = $this->_edad->obtener
			(
				$this->_paciente->obtener($data['PAC_ID'])->PAC_FNACIMIENTO,
				$data['PAC_FINGRESO']
			);

			$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;
			
			if($id = $this->_db->registrar($this->_config->obtener('dbnombres/notaingreso'), $data))
			{
				return $id;
			}
		}

		return false;
	}

	public function verificarIngresos($paciente_id)
	{
		if($this->_ingresos->obtener($paciente_id) == $this->_egresos->obtener($paciente_id))
		{
			return true;
		}

		return false;
	}
}
