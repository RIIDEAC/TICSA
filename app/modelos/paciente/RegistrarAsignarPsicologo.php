<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBInsert,DBUpdate};
use \app\modelos\paciente\{DatosNotaDeIngresoSinRl,DatosDePsicologoAsignado};
/**
 * 
 */
class RegistrarAsignarPsicologo
{
	private $_db,
			$_paciente,
			$_actualizar,
			$_Psicologo;
	
	public function __construct
	(
		DBInsert $DBInsert,
		DBUpdate $DBUpdate,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl,
		DatosDePsicologoAsignado $DatosDePsicologoAsignado
	)
	{
		$this->_db = $DBInsert;
		$this->_actualizar = $DBUpdate;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
		$this->_Psicologo = $DatosDePsicologoAsignado;
	}

	public function registrar(array $datos): bool
	{
		unset($datos['TOKEN']);

		$paciente = $this->_paciente->obtener($datos['NING_ID']);

		$datos['PAC_ID'] = $paciente->PAC_ID;

		if($Psicologo = $this->_Psicologo->obtener($datos['NING_ID']))
		{
			//ACTUALIZAR
			if($this->_actualizar->update(
				array(
					'TABLE' => 'DAT_PSIASIGNADOS_PSA',
					'SET' => array('USU_ID' => $datos['USU_ID']),
					'WHERE' => array('NING_ID','=',$datos['NING_ID'])
				)
			))
			{
				return true;
			}

		}
		else
		{
			//REGISTRAR
			if($this->_db->registrar('DAT_PSIASIGNADOS_PSA', $datos))
			{
				return true;
			}
		}

		
		
		return false;
	}
}