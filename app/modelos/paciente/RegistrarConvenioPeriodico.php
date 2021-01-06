<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
/**
 * 
 */
class RegistrarConvenioPeriodico
{
	private $_db,
			$_paciente;
	
	public function __construct
	(
		DBInsert $DBInsert,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl
	)
	{
		$this->_db = $DBInsert;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
	}

	public function registrar(array $datos): bool
	{
		unset($datos['TOKEN']);
		
		$datos['USU_ID'] = $_SESSION['id'];

		$ning = $this->_paciente->obtener($datos['NING_ID']);

		$datos['PAC_ID'] = $ning->PAC_ID;

		if(strtotime($datos['FECHA_CAPTURA']) >= strtotime($ning->PAC_FINGRESO))
		{
			if($this->_db->registrar('DAT_CONVENIOPERIODICO_CPE', $datos))
			{
				return true;
			}	
		}

		return false;
	}
}