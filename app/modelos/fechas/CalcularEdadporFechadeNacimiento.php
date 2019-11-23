<?php
namespace app\modelos\fechas;
/**
 * 
 */
class CalcularEdadPorFechadeNacimiento
{
	
	public function obtener($fechanacimiento, $fecha2 = null)
	{
		if(!$fecha2)
		{
			$fecha2 = date("Y-m-d");
		}
	    

		$naz = explode('-', $fechanacimiento);

		$anonaz = $naz[0];
		$mesnaz = $naz[1];
		$dianaz = $naz[2];

		$reg = explode('-', $fecha2);

	    $ano = $reg[0];
		$mes = $reg[1];
		$dia = $reg[2];

	    if(($mesnaz == $mes) && ($dianaz > $dia))
	    {
			$ano=($ano-1);
		}

		if ($mesnaz > $mes)
		{
			$ano=($ano-1);
		}

		return ($ano-$anonaz);
	}
}