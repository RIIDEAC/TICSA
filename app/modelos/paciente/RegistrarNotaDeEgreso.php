<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
use \DateTime;
/**
 * 
 */
class RegistrarNotaDeEgreso
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
		if($paciente = $this->_paciente->obtener($datos['NING_ID']))
		{
			unset($datos['TOKEN']);
		
			$datos['USU_ID'] = $_SESSION['id'];
			$datos['PAC_ID'] = $paciente->PAC_ID;

			$cumpleanos = new DateTime($paciente->PAC_FNACIMIENTO);
		    $hoy = new DateTime($datos['PAC_FEGRESO']);
		    $annos = $hoy->diff($cumpleanos);
		    $datos['EDAD_EGRE'] = $annos->y;

		    $datetime1 = new DateTime($paciente->PAC_FINGRESO);
			$datetime2 = new DateTime($datos['PAC_FEGRESO']);
			$datos['DIAS_TRATAMIENTO'] = $datetime1->diff($datetime2)->days;

			if($this->_db->registrar('DAT_NEGRESO_NEGR', $datos))
			{
				return true;
			}
		}
		
		return false;
	}
}