<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\BuscarPacienteRepetido;
/**
 * 
 */
class RegistrarPaciente
{
	private $_db,
			$_paciente;
	
	public function __construct
	(
		DBInsert $DBInsert,
		BuscarPacienteRepetido $BuscarPacienteRepetido
	)
	{
		$this->_db = $DBInsert;
		$this->_paciente = $BuscarPacienteRepetido;
	}

	public function registrar(array $datos): bool
	{
		unset($datos['TOKEN']);
		
		$datos['USU_ID'] = $_SESSION['id'];

		$datos['PAC_NOMBRE'] = strtoupper($datos['PAC_NOMBRE']);
		$datos['PAC_PATERNO'] = strtoupper($datos['PAC_PATERNO']);
		$datos['PAC_MATERNO'] = strtoupper($datos['PAC_MATERNO']);

		$datos['PAC_ICURP'] =  md5($datos['PAC_NOMBRE'].$datos['PAC_PATERNO'].$datos['PAC_MATERNO'].$datos['PAC_FNACIMIENTO'].$datos['SEX_ID'].$datos['NAC_ID'].$datos['ENF_ID']);

		if($this->_paciente->buscar($datos['PAC_ICURP']))
		{
			if($this->_db->registrar('DAT_PACIENTE_PAC', $datos))
			{
				return true;
			}
		}
		
		return false;
	}
}