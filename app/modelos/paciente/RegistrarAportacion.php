<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
/**
 * 
 */
class RegistrarAportacion
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

		if($this->_db->registrar('DAT_APORTACION_APO', $datos))
		{
			return true;
		}
		
		return false;
	}
}