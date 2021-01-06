<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBUpdate;
use \DateTime;
/**
 * 
 */
class ActualizarNotaDeIngreso
{
	private $_db,
			$_repetido;
	
	public function __construct
	(
		DBUpdate $DBUpdate,
		BuscarPacienteRepetido $BuscarPacienteRepetido
	)
	{
		$this->_db = $DBUpdate;
		$this->_repetido = $BuscarPacienteRepetido;	
	}

	public function actualizar(array $datos): bool
	{
		unset($datos['TOKEN']);

		$cumpleanos = new DateTime($datos['PAC_FNACIMIENTO']);
	    $hoy = new DateTime();
	    $annos = $hoy->diff($cumpleanos);
	    $datos['PAC_EDAD'] = $annos->y;

	    unset($datos['PAC_FNACIMIENTO']);
	    $idExpediente = $datos['NING_ID'];
	    unset($datos['NING_ID']);

		if($this->_db->update(
			array(
				'TABLE' => 'DAT_NINGRESO_NING',
				'SET' => $datos,
				'WHERE' => array('NING_ID','=',$idExpediente)
			)
		))
		{
			return true;
		}

		return false;
	}
}