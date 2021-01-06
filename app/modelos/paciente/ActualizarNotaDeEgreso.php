<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBUpdate;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
use \DateTime;
/**
 * 
 */
class ActualizarNotaDeEgreso
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

		if($paciente = $this->_paciente->obtener($datos['NING_ID']))
		{
		
			$datos['USU_ID'] = $_SESSION['id'];
			$datos['PAC_ID'] = $paciente->PAC_ID;

			$cumpleanos = new DateTime($paciente->PAC_FNACIMIENTO);
		    $hoy = new DateTime($datos['PAC_FEGRESO']);
		    $annos = $hoy->diff($cumpleanos);
		    $datos['EDAD_EGRE'] = $annos->y;

		    $datetime1 = new DateTime($paciente->PAC_FINGRESO);
			$datetime2 = new DateTime($datos['PAC_FEGRESO']);
			$datos['DIAS_TRATAMIENTO'] = $datetime1->diff($datetime2)->days;

			if($this->_db->update(
				array(
					'TABLE' => 'DAT_NEGRESO_NEGR',
					'SET' => $datos,
					'WHERE' => array('NING_ID','=',$datos['NING_ID'])
				)
			))
			{
				return true;
			}
		}

		return false;
	}
}