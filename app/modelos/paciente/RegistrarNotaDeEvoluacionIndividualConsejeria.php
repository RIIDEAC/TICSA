<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\{DatosNotaDeIngresoSinRl,NumeroDeNotasIndividualesDeConsejeria};
use \DateTime;
/**
 * 
 */
class RegistrarNotaDeEvoluacionIndividualConsejeria
{
	private $_db,
			$_paciente;
	
	public function __construct
	(
		DBInsert $DBInsert,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl,
		NumeroDeNotasIndividualesDeConsejeria $NumeroDeNotasIndividualesDeConsejeria
	)
	{
		$this->_db = $DBInsert;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
		$this->_notas = $NumeroDeNotasIndividualesDeConsejeria;
	}

	public function registrar(array $datos): bool
	{
		print_r($datos);
		
		unset($datos['TOKEN']);
		
		$datos['USU_ID'] = $_SESSION['id'];

		$paciente = $this->_paciente->obtener($datos['NING_ID']);

		$datos['PAC_ID'] = $paciente->PAC_ID;

		$datos['NUMERO_SESION'] = $this->_notas->obtener($datos['NING_ID']) + 1;

		$inicio = new DateTime($paciente->PAC_FINGRESO);
	    $hoy = new DateTime(date("Y-m-d"));
	    $datos['DIAS_TRATAMIENTO'] = $hoy->diff($inicio)->days;

		

		if($this->_db->registrar('DAT_NOTACONIND_NCI', $datos))
		{
			return true;
		}
		
		
		return false;
	}
}