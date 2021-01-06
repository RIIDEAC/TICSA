<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBUpdate;
use \app\modelos\paciente\{BuscarPacienteRepetido,ActualizarEdadNotaDeIngresoYEgreso};
/**
 * 
 */
class ActualizarPaciente
{
	private $_db,
			$_repetido,
			$_actualizaredad;
	
	public function __construct
	(
		DBUpdate $DBUpdate,
		BuscarPacienteRepetido $BuscarPacienteRepetido,
		ActualizarEdadNotaDeIngresoYEgreso $ActualizarEdadNotaDeIngresoYEgreso
		
	)
	{
		$this->_db = $DBUpdate;
		$this->_repetido = $BuscarPacienteRepetido;
		$this->_actualizaredad = $ActualizarEdadNotaDeIngresoYEgreso;
	}

	public function actualizar(array $datos): bool
	{
		unset($datos['TOKEN']);

		$datos['PAC_NOMBRE'] = strtoupper($datos['PAC_NOMBRE']);
		$datos['PAC_PATERNO'] = strtoupper($datos['PAC_PATERNO']);
		$datos['PAC_MATERNO'] = strtoupper($datos['PAC_MATERNO']);

		$datos['PAC_ICURP'] =  md5($datos['PAC_NOMBRE'].$datos['PAC_PATERNO'].$datos['PAC_MATERNO'].$datos['PAC_FNACIMIENTO'].$datos['SEX_ID'].$datos['NAC_ID'].$datos['ENF_ID']);
		
		if($this->_repetido->buscar($datos['PAC_ICURP'], $datos['PAC_ID']))
		{
			if($this->_db->update(
				array(
					'TABLE' => 'DAT_PACIENTE_PAC',
					'SET' => $datos,
					'WHERE' => array('PAC_ID','=',$datos['PAC_ID'])
				)
			))
			{
				//Si existe nota de ingreso y egreso modificar la edad de ingreso y egreso al modificar fecha de nacimiento
				$this->_actualizaredad->actualizar($datos['PAC_ID'],$datos['PAC_FNACIMIENTO']);

				return true;
			}
		}

		return false;
	}
}