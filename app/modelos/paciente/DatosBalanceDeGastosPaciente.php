<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosBalanceDeGastosPaciente
{
	private $_db,
			$_count,
			$_result;
	
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;	
	}

	public function obtener($ning): int
	{
		return $this->total($this->ingresos($ning),$this->gastos($ning));
	}

	public function ingresos($ning): int
	{
		$ingresos = $this->_db->get(
			array(
			'table' => 'DAT_APORTACION_APO', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('NING_ID','=',$ning),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		$total = 0;

		if($this->_count->getCount($ingresos) !== 0)
		{
			$ingresos = $this->_result->getObj($ingresos);

			foreach ($ingresos as $ingreso)
			{
				if($ingreso->TIA_ID == 11 || $ingreso->TIA_ID == 13)
				{
					if($ingreso->TIM_ID == 2)
					{
						$cantidad = $ingreso->CANTIDAD * $ingreso->TIPO_CAMBIO;
					}
					else
					{
						$cantidad = $ingreso->CANTIDAD;
					}

					$total = $total + $cantidad;
				}
			}
		}

		return $total;
	}

	public function gastos($ning): int
	{
		$gastos = $this->_db->get(
			array(
			'table' => 'DAT_GASTOSPACIENTE_GAP', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('NING_ID','=',$ning),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		$total = 0;

		if($this->_count->getCount($gastos) !== 0)
		{
			$gastos = $this->_result->getObj($gastos);

			foreach ($gastos as $gasto)
			{
				if($gasto->TIM_ID == 2)
				{
					$cantidad = $gasto->CANTIDAD * $gasto->TIPO_CAMBIO;
				}
				else
				{
					$cantidad = $gasto->CANTIDAD;
				}

				$total = $total + $cantidad;
			}
		}

		return $total;
	}

	private function total(int $ingresos,int $gastos): int
	{
		return $ingresos - $gastos;
	}

}