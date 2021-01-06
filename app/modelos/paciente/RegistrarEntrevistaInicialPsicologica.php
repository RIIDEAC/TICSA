<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
/**
 * 
 */
class RegistrarEntrevistaInicialPsicologica
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

		if($datos['PARTE'] == 1)
		{
			$table = 'DAT_ENTPSIINI_EPI';
		}
		else
		{
			$table = 'DAT_ENTPSIINII_EPII';
		}

		unset($datos['PARTE']);

		if($this->_db->registrar($table, $datos))
		{
			return true;
		}
		
		
		return false;
	}
}