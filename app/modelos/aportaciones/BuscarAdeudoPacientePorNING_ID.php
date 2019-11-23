<?php
namespace app\modelos\aportaciones;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultObj};
use \app\modelos\pacientes\{ContarDiasTratamientoPacienteporNING_ID,ObtenerConsentimientoInformadoPorNING_ID};
use \app\modelos\aportaciones\ObtenerAportacionesPacienteporNING_ID;
/**
 * 
 */
class BuscarAdeudoPacientePorNING_ID
{
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj,
		ContarDiasTratamientoPacienteporNING_ID $ContarDiasTratamientoPacienteporNING_ID,
		ObtenerConsentimientoInformadoPorNING_ID $ObtenerConsentimientoInformadoPorNING_ID,
		ObtenerAportacionesPacienteporNING_ID $ObtenerAportacionesPacienteporNING_ID	
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
		$this->_dias = $ContarDiasTratamientoPacienteporNING_ID;
		$this->_consentimiento = $ObtenerConsentimientoInformadoPorNING_ID;
		$this->_aportaciones = $ObtenerAportacionesPacienteporNING_ID;
	}

	public function obtener($ning_id)
	{
		if($consentimiento = $this->_consentimiento->obtener($ning_id))
		{
			if($consentimiento->BECA !== '1')
			{
				if($consentimiento->PERIODO == '1')
				{
					$dias = $this->_dias->obtener($ning_id);
					
					if($dias > 21)
					{
						if($aportaciones = $this->_aportaciones->obtener($ning_id))
						{
							$limiteDeuda = $consentimiento->CANTIDAD * 3;
							$PagoSinAdeudo = (floor($dias / 7) + 1) * $consentimiento->CANTIDAD;
							
							$PeriodicaPesos = 0;
							$PeriodicaDolares = 0;
							
							foreach ($aportaciones as $key => $value)
							{
								if($value->MONEDA == 'pesos')
								{
									$PeriodicaPesos = $PeriodicaPesos + $value->CANTIDAD;
								}
								else
								{
									$PeriodicaDolares = $PeriodicaDolares + $value->CANTIDAD;
								}
							}
							
							if($PeriodicaDolares > 0)
							{
								$PeriodicaDolares = $PeriodicaDolares * (18.50);
							}

							$totalPagado = $PeriodicaPesos + $PeriodicaDolares;

							if(($PagoSinAdeudo - $totalPagado) >= $limiteDeuda)
							{
								return $atraso = array('CANTIDAD' => $PagoSinAdeudo - $totalPagado, 'FORMA' => 'Periódicas', 'DIAS' => $dias);
							}
						}
						else
						{
							// NO HA DADO APORTACIONES EN MAS DE UN MES
							return $atraso = array
							('CANTIDAD' => $PagoSinAdeudo = (floor($dias / 7)) * $consentimiento->CANTIDAD,
							 'FORMA' => 'Periódicas', 'DIAS' => $dias);
						}

					}
				}
				else
				{
					//MENSUAL

				}
				
			}// NO HA PASADO UN MES
			
		}

		return false;
	}
}