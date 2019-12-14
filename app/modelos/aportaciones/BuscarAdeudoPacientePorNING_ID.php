<?php
namespace app\modelos\aportaciones;
use \app\modelos\pacientes\{ContarDiasTratamientoPacienteporNING_ID,ObtenerConvenioIngresoPorNING_ID,ObtenerConvenioPeriodicoPorNING_ID};
use \app\modelos\aportaciones\ObtenerAportacionesPacienteporNING_ID;
/**
 * 
 */
class BuscarAdeudoPacientePorNING_ID
{
	private $_dias,
			$_aportaciones,
			$_conIngreso,
			$_conPeriodico;

	public function __construct
	(
		ObtenerConvenioIngresoPorNING_ID $ObtenerConvenioIngresoPorNING_ID,
		ObtenerConvenioPeriodicoPorNING_ID $ObtenerConvenioPeriodicoPorNING_ID,
		ContarDiasTratamientoPacienteporNING_ID $ContarDiasTratamientoPacienteporNING_ID,
		ObtenerAportacionesPacienteporNING_ID $ObtenerAportacionesPacienteporNING_ID	
	)
	{
		$this->_dias = $ContarDiasTratamientoPacienteporNING_ID;
		$this->_aportaciones = $ObtenerAportacionesPacienteporNING_ID;
		$this->_conIngreso = $ObtenerConvenioIngresoPorNING_ID;
		$this->_conPeriodico = $ObtenerConvenioPeriodicoPorNING_ID;
	}

	public function obtener(int $ning_id)
	{
		$this->_dias = $this->_dias->obtener($ning_id);
		$this->_aportaciones = $this->_aportaciones->obtener($ning_id);
		$this->_conIngreso = $this->_conIngreso->obtener($ning_id);
		$this->_conPeriodico = $this->_conPeriodico->obtener($ning_id);
		$this->adeudo($ning_id);
	}

	protected function adeudo($ning_id)
	{
		$this->periodica($ning_id);
		$this->ingreso($ning_id);
	}

	protected function periodica($ning_id)
	{
		if($this->_conPeriodico->BECA_ID == 2)
		{
			if($this->_aportaciones)
			{
				//echo '<pre>';
				//print_r($this->_aportaciones);
				if($this->_conPeriodico->PER_ID == '1')
				{
					$periodoDias = 7;
				}
				if($this->_conPeriodico->PER_ID == '2')
				{
					$periodoDias = 15;
				}
				if($this->_conPeriodico->PER_ID == '3')
				{
					$periodoDias = 30;
				}
				if($this->_conPeriodico->PER_ID == '4')
				{
					$periodoDias = 90;
				}
				if($this->_conPeriodico->PER_ID == '5')
				{
					$periodoDias = 180;
				}
				//DIAS DE TRATAMIENTO ES MAYOR QUE DIAS DE PERIODO
				if($this->_dias > $periodoDias)
				{
					//ESTABLECER LA PERIODICIDAD EN DIAS

					//CALCULAR LO QUE DEBIO DE PAGAR HASTA LA FECHA.'<br>';

					$vecesdePago = floor($this->_dias / $periodoDias);
					$cantidadquedebeestarpagada = $vecesdePago * $this->_conPeriodico->CANTIDAD;
					
					//CALCULAR TOTAL APORTACIONES PERIODICAS
					
					$pesos = 0;
					$pesosenDolares = 0;
					$dolares = 0;
					$dolaresenPesos = 0;
					foreach ($this->_aportaciones as $value)
					{
						if($value->TIA_ID == 1 && $value->TIM_ID = 1)
						{
							$pesos = $pesos + $value->CANTIDAD;
							$pesosenDolares = $pesosenDolares + ($value->CANTIDAD / 18);
							$totalPesos = round($pesos + $pesosenDolares);
						}

						if($value->TIA_ID == 1 && $value->TIM_ID = 2)
						{
							$dolares = $dolares + $value->CANTIDAD;
							$dolaresenPesos = $dolaresenPesos + ($value->CANTIDAD * $value->TIPO_CAMBIO);
							$totalDolares = round($dolares + $dolaresenPesos);
						}
					}

					//DETERMINANDO LA MONEDA DEL CONVENIO
					
					if($this->_conPeriodico->TIM_ID == 1) //PESOS
					{
						if($totalPesos < $cantidadquedebeestarpagada)
						{
							return true;
						}
					}

					if($this->_conPeriodico->TIM_ID == 2) //DOLARES
					{
						if($totalDolares < $cantidadquedebeestarpagada)
						{
							return true;
						}
					}
				}
			}
			else
			{
				//DEVOLVER TRUE EN CASO DE QUE NO HAYA APORTACIONES
				return true;
			}
		}

		return false;
	}

	protected function ingreso($ning_id)
	{
		if($this->_conIngreso->BECA_ID == 2)
		{
			if($this->_aportaciones)
			{
				//CALCULAR APORTACIONES
			}
			else
			{
				//DEVOLVER TRUE EN CASO DE QUE NO HAYA APORTACIONES
				return true;
			}
		}

		//SIN ADEUDO
		//return false;
	}
}