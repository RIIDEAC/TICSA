<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBInsert,DBUpdate};
use \app\modelos\paciente\{DatosNotaDeIngresoSinRl,DatosDeConsejeroAsignado};
/**
 * 
 */
class RegistrarAsignarConsejero
{
	private $_db,
			$_paciente,
			$_actualizar,
			$_consejero;
	
	public function __construct
	(
		DBInsert $DBInsert,
		DBUpdate $DBUpdate,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl,
		DatosDeConsejeroAsignado $DatosDeConsejeroAsignado
	)
	{
		$this->_db = $DBInsert;
		$this->_actualizar = $DBUpdate;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
		$this->_consejero = $DatosDeConsejeroAsignado;
	}

	public function registrar(array $datos): bool
	{
		unset($datos['TOKEN']);

		$paciente = $this->_paciente->obtener($datos['NING_ID']);

		$datos['PAC_ID'] = $paciente->PAC_ID;

		if($consejero = $this->_consejero->obtener($datos['NING_ID']))
		{
			//ACTUALIZAR
			if($this->_actualizar->update(
				array(
					'TABLE' => 'DAT_CONSASIGNADOS_COA',
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
			if($this->_db->registrar('DAT_CONSASIGNADOS_COA', $datos))
			{
				return true;
			}
		}

		
		
		return false;
	}
}