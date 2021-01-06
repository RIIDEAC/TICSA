<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
/**
 * 
 */
class RegistrarTicket
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

		$datos['PAC_ID'] = $this->_paciente->obtener($datos['NING_ID'])->PAC_ID;

		if($datos['ETI_ID'] == 2)
		{
			$datos['FECHA_CIERRE'] = date("Y-m-d");
		}

		if($this->_db->registrar('DAT_TICKET_TIC', $datos))
		{
			return true;
		}
		
		
		return false;
	}
}