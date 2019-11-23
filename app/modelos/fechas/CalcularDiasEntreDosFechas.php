<?php
namespace app\modelos\fechas;
use DateTime;
/**
 * 
 */
class CalcularDiasEntreDosFechas
{
	public function obtener($fecha1, $fecha2 = null)
	{
		if(!$fecha2)
		{
			$fecha2 = date("Y-m-d");
		}

		$date1 = new DateTime($fecha1);
		$date2 = new DateTime($fecha2);
		$diff =  $date1->diff($date2);
		
		return $diff->days;
	}
}