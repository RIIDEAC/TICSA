<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBUpdate;
use \app\modelos\paciente\{BuscarFamiliarRepetido,ActualizarRepresentanteLegal};
/**
 * 
 */
class ActualizarFamiliar
{
	private $_db,
			$_repetido;
	
	public function __construct
	(
		DBUpdate $DBUpdate,
		BuscarFamiliarRepetido $BuscarFamiliarRepetido,
		ActualizarRepresentanteLegal $ActualizarRepresentanteLegal
		
	)
	{
		$this->_db = $DBUpdate;
		$this->_repetido = $BuscarFamiliarRepetido;
		$this->_representante = $ActualizarRepresentanteLegal;
	}

	public function actualizar(array $datos): bool
	{
		unset($datos['TOKEN']);

		$datos['FAM_NOMBRE'] = strtoupper($datos['FAM_NOMBRE']);
		$datos['FAM_PATERNO'] = strtoupper($datos['FAM_PATERNO']);
		$datos['FAM_MATERNO'] = strtoupper($datos['FAM_MATERNO']);

		$datos['FAM_ICURP'] =  md5($datos['FAM_NOMBRE'].$datos['FAM_PATERNO'].$datos['FAM_MATERNO'].$datos['FAM_FNACIMIENTO'].$datos['SEX_ID'].$datos['NAC_ID'].$datos['ENF_ID']);

		if($this->_repetido->buscar($datos['FAM_ICURP'], $datos['FAM_ID']))
		{
			if($datos['RPR_ID'] == '1')
			{
				$this->_representante->actualizar($datos['PAC_ID']);
			}

			unset($datos['PAC_ID']);

			if($udpate = $this->_db->update(
				array(
					'TABLE' => 'DAT_FAMILIAR_FAM',
					'SET' => $datos,
					'WHERE' => array('FAM_ID','=',$datos['FAM_ID'])
				)
			))
			{
				return true;
			}
		}

		return false;
	}
}