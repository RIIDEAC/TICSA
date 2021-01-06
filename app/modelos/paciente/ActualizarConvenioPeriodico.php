<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBUpdate;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;

/**
 * 
 */
class ActualizarConvenioPeriodico
{
	private $_db,
			$_paciente;
	
	public function __construct
	(
		DBUpdate $DBUpdate,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl
	)
	{
		$this->_db = $DBUpdate;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
	}

	public function actualizar(array $datos): bool
	{
		unset($datos['TOKEN']);

		$id = $datos['CPE_ID'];

		unset($datos['CPE_ID']);

		$ning = $this->_paciente->obtener($datos['NING_ID']);

		unset($datos['NING_ID']);

		if(strtotime($datos['FECHA_CAPTURA']) >= strtotime($ning->PAC_FINGRESO))
		{
			if($this->_db->update(
				array(
					'TABLE' => 'DAT_CONVENIOPERIODICO_CPE',
					'SET' => $datos,
					'WHERE' => array('CPE_ID','=',$id)
				)
			))
			{
				return true;
			}
		}

		return false;
	}
}