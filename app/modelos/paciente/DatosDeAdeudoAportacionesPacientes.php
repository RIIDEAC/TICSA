<?php 
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultObj};
use \app\modelos\paciente\{DatosConvenioPeriodico,DatosNotaDeIngresoSinRl,ObtenerDatosDeAportacionesPorFechas};
use \DateTime;
use \stdClass;
/**
 * 
 */
class DatosDeAdeudoAportacionesPacientes
{
	
	private $_db,
			$_count,
			$_result,
			$_convenio,
			$_notaIngreso,
			$_aportacionesPorFechas,
			$_beca = true;
	
	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj,
		DatosConvenioPeriodico $DatosConvenioPeriodico,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl,
		ObtenerDatosDeAportacionesPorFechas $ObtenerDatosDeAportacionesPorFechas
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
		$this->_convenio = $DatosConvenioPeriodico;
		$this->_notaIngreso = $DatosNotaDeIngresoSinRl;
		$this->_aportacionesPorFechas = $ObtenerDatosDeAportacionesPorFechas;	
	}

	/**
	 * @param null|numeric $idNotaIngreso
	 *
	 * @return false|stdClass
	 */
	public function obtener($idNotaIngreso = null)
	{
		if(!$idNotaIngreso)
		{
			$idNotaIngreso = $_POST['NING_ID'];
		}

		if($this->_notaIngreso = $this->NotaIngreso($idNotaIngreso))
		{
			if($this->_convenio = $this->_convenio->obtener($idNotaIngreso))
			{
				return (object) $this->Convenio($idNotaIngreso);
			}
		}
		
		return false;
		
	}

	public function NotaIngreso($idNotaIngreso)
	{
		return $this->_notaIngreso->obtener($idNotaIngreso);
	}

	/**
	 * @return false|int
	 */
	public function diasTranscurridos($fecha_inicio,string $fecha_final)
	{
		$inicio = new DateTime($fecha_inicio);
	    $hoy = new DateTime($fecha_final);
	    return $hoy->diff($inicio)->days;
	}
	
	public function Periodo($numeroPagos, $CANTIDAD)
	{
		return $numeroPagos * $CANTIDAD;
		
	}

	//DETERMINAR CANTIDAD A PAGAR POR CONVENIO
	public function Convenio(int $idNotaIngreso)
	{
			$aportaciones= (object) [];

			if(count($this->_convenio) > 1)
			{
				//MAS DE 1 CONVENIO

				$fechas=[];
				$x=1;
				foreach ($this->_convenio as $value)
				{
					if($value->BECA_ID == 1)
					{
						$this->_beca = true;
					}
					else
					{
						$this->_beca = false;
					}

					$fechas[$x] = $value->FECHA_CAPTURA;
					$x++; 
				}

				$x=1;
				$pago = 0;

				foreach ($this->_convenio as $value)
				{
					if($x == 1)
					{
						$inicio = $this->_notaIngreso->PAC_FINGRESO;
						$ultimo = $fechas[$x+1];
						$ultimo = date("Y-m-d",strtotime($ultimo."- 1 days")); 
					}
					else
					{
						$inicio = $fechas[$x];

						if(isset($fechas[$x+1]))
						{
							$ultimo = $fechas[$x+1];
							$ultimo = date("Y-m-d",strtotime($ultimo."- 1 days"));
						}
						else
						{
							$ultimo = date("Y-m-d");
							$pago = 1;
						}
					}

					// SACAR LAS APORTACIONES DE CADA CONVENIO
					$aportaciones->{$x} = new stdClass;

					$aportaciones->{$x}->{'APORTACIONES'} = $this->_aportacionesPorFechas->obtener($idNotaIngreso,$inicio,$ultimo);

					$aportaciones->{$x}->{'CONVENIO'} = $value;

					$aportaciones->{$x}->{'FECHA_INICIO'} = $inicio;
					$aportaciones->{$x}->{'FECHA_FINAL'} = $ultimo;
					$aportaciones->{$x}->{'PAGARCADA'} = $value->PER_DIA;
					$aportaciones->{$x}->{'DIAS'} = floor($this->diasTranscurridos($inicio,$ultimo));

					$aportaciones->{$x}->{'PAGOS'} = floor($this->diasTranscurridos($inicio,$ultimo) / $value->PER_DIA) + $pago;
					$aportaciones->{$x}->{'CANTIDADPORPAGO'} = $value->CANTIDAD;

					if(isset($fechas[$x+1]))
					{
						$aportaciones->{$x}->{'DIASEXTRAS'} = $aportaciones->{$x}->{'DIAS'} - ($aportaciones->{$x}->{'PAGOS'} * $value->PER_DIA);

						$pagoPorDia = $value->CANTIDAD / $value->PER_DIA;

						$aportaciones->{$x}->{'TOTALAJUSTE'} = floor($aportaciones->{$x}->{'DIASEXTRAS'} * $pagoPorDia);
					}
					else
					{
						$aportaciones->{$x}->{'TOTALAJUSTE'} = 0;
					}	

					$aportaciones->{$x}->{'APAGARSINAJUSTE'} = $this->Periodo($aportaciones->{$x}->{'PAGOS'},$value->CANTIDAD);

					$aportaciones->{$x}->{'APAGAR'} = $this->Periodo($aportaciones->{$x}->{'PAGOS'},$value->CANTIDAD) + $aportaciones->{$x}->{'TOTALAJUSTE'};

					$aportaciones->{$x}->{'PAGADO'} = $this->Pagado($aportaciones->{$x}->{'APORTACIONES'},$value->TIM_ID);

					$aportaciones->{$x}->{'RESTANTE'} = $aportaciones->{$x}->{'APAGAR'} - $aportaciones->{$x}->{'PAGADO'};

					$aportaciones->{$x}->{'LIMITEADEUDO'} = $this->TresSemanas($value->PER_DIA,$value->CANTIDAD);

					if($aportaciones->{$x}->{'RESTANTE'} >= $aportaciones->{$x}->{'LIMITEADEUDO'})
					{
						$aportaciones->{$x}->{'TRESSEMANAS'} = 'Con adeudo';
					}
					else
					{
						$aportaciones->{$x}->{'TRESSEMANAS'} = 'Sin adeudo';
					}

					$x++; 
				}

				return $aportaciones;
				
			}
			else //-----------------------UN SOLO COVENIO -------------------------------------
			{
				if($this->_convenio[0]->BECA_ID == 1)
				{
					$this->_beca = true;
				}
				else
				{
					$this->_beca = false;
				}

				$inicio = $this->_notaIngreso->PAC_FINGRESO;
				$ultimo = date("Y-m-d");
				$x = 1;

				$aportaciones->{$x} = new stdClass;

				$aportaciones->{$x}->{'APORTACIONES'} = $this->_aportacionesPorFechas->obtener($idNotaIngreso,$inicio,$ultimo);

				$aportaciones->{$x}->{'CONVENIO'} = $this->_convenio[0];

				$aportaciones->{$x}->{'FECHA_INICIO'} = $inicio;
				$aportaciones->{$x}->{'FECHA_FINAL'} = $ultimo;
				$aportaciones->{$x}->{'PAGARCADA'} = $this->_convenio[0]->PER_DIA;
				$aportaciones->{$x}->{'DIAS'} = floor($this->diasTranscurridos($inicio,$ultimo));

				$aportaciones->{$x}->{'PAGOS'} = floor($this->diasTranscurridos($inicio,$ultimo) / $this->_convenio[0]->PER_DIA) + 1;
				$aportaciones->{$x}->{'CANTIDADPORPAGO'} = $this->_convenio[0]->CANTIDAD;

				$aportaciones->{$x}->{'APAGAR'} = $this->Periodo($aportaciones->{$x}->{'PAGOS'}, $this->_convenio[0]->CANTIDAD);

				$aportaciones->{$x}->{'PAGADO'} = $this->Pagado($aportaciones->{$x}->{'APORTACIONES'},$this->_convenio[0]->TIM_ID);

				$aportaciones->{$x}->{'RESTANTE'} = $aportaciones->{$x}->{'APAGAR'} - $aportaciones->{$x}->{'PAGADO'};

				$aportaciones->{$x}->{'LIMITEADEUDO'} = $this->TresSemanas($this->_convenio[0]->PER_DIA,$this->_convenio[0]->CANTIDAD);

				if($aportaciones->{$x}->{'RESTANTE'} >= $aportaciones->{$x}->{'LIMITEADEUDO'})
				{
					$aportaciones->{$x}->{'TRESSEMANAS'} = 'Con adeudo';
				}
				else
				{
					$aportaciones->{$x}->{'TRESSEMANAS'} = 'Sin adeudo';
				}

				return $aportaciones;
			}

			return false;
	}

	public function Pagado($aportaciones,$tipomoneda)
	{
		$total = 0;

		if(!empty($aportaciones))
		{
			
			foreach ($aportaciones as $value)
			{
				if($value->TIA_ID == 1)
				{
					if($tipomoneda == 1 && $value->TIM_ID == 2)
					{
						$CANTIDAD = $value->CANTIDAD * $value->TIPO_CAMBIO;
					}
					
					if($tipomoneda == 1 && $value->TIM_ID == 1)
					{
						$CANTIDAD = $value->CANTIDAD;
					}

					if($tipomoneda == 2 && $value->TIM_ID == 2)
					{
						$CANTIDAD = $value->CANTIDAD;
					}
					
					if($tipomoneda == 2 && $value->TIM_ID == 1)
					{
						$CANTIDAD = round($value->CANTIDAD / 18 , 2);
					}

					$total = $total + $CANTIDAD;
				}
				
			}
		}

		return $total;
		
	}

	public function TresSemanas($pagarCada,$cantidadporPago)
	{
		$cantidadPorDia = $cantidadporPago / $pagarCada;
		$TresSemanas = $cantidadPorDia * 21;

		return $TresSemanas;
	}

	public function RecibirAportaciones($idNotaIngreso): bool
	{
		$aportaciones = $this->obtener($idNotaIngreso);

		//COMPROBAR BECA
		if($this->_beca)
		{
			return false;
		}

		//plazo de tres semanas
		if($this->diasTranscurridos($this->_notaIngreso->PAC_FINGRESO, date("Y-m-d")) < 21)
		{
			return false;
		}

		//COMPROBAR 21 DIAS

		foreach ($aportaciones as $value)
		{
			if($value->RESTANTE >= $value->LIMITEADEUDO)
			{
				return true;
			}
		}
		
		return false;
	}

}