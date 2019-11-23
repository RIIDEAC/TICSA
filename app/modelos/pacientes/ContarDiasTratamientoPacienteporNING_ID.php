<?php
namespace app\modelos\pacientes;
use \app\modelos\pacientes\{ObtenerDatosNotaIngresoporNING_ID};
use DateTime;
/**
 * 
 */
class ContarDiasTratamientoPacienteporNING_ID
{
	
	public function __construct
	(
		ObtenerDatosNotaIngresoporNING_ID $ObtenerDatosNotaIngresoporNING_ID
	)
	{
		$this->_notaingreso = $ObtenerDatosNotaIngresoporNING_ID;
	}

	public function obtener($ning_id, $fechacomparacion = null)
	{

		if($nota = $this->_notaingreso->obtener($ning_id))
		{
			$fechaIngreso = $nota->PAC_FINGRESO;

			if(!$fechacomparacion)
			{
				$fechacomparacion = date("Y-m-d");
			}

			$date1 = new DateTime($fechaIngreso);
			$date2 = new DateTime($fechacomparacion);
			$diff =  $date1->diff($date2);
			return $diff->days;

		}

		return false;
	}
}