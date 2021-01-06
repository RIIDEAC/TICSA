<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\{BuscarFamiliarRepetido,ActualizarRepresentanteLegal};
/**
 * 
 */
class RegistrarFamiliar
{
	private $_db,
			$_familiar,
			$_representante;
	
	public function __construct
	(
		DBInsert $DBInsert,
		BuscarFamiliarRepetido $BuscarFamiliarRepetido,
		ActualizarRepresentanteLegal $ActualizarRepresentanteLegal
	)
	{
		$this->_db = $DBInsert;
		$this->_familiar = $BuscarFamiliarRepetido;
		$this->_representante = $ActualizarRepresentanteLegal;
	}

	public function registrar(array $datos): bool
	{
		unset($datos['TOKEN']);
		
		$datos['USU_ID'] = $_SESSION['id'];

		$datos['FAM_NOMBRE'] = strtoupper($datos['FAM_NOMBRE']);
		$datos['FAM_PATERNO'] = strtoupper($datos['FAM_PATERNO']);
		$datos['FAM_MATERNO'] = strtoupper($datos['FAM_MATERNO']);

		$datos['FAM_ICURP'] =  md5($datos['FAM_NOMBRE'].$datos['FAM_PATERNO'].$datos['FAM_MATERNO'].$datos['FAM_FNACIMIENTO'].$datos['SEX_ID'].$datos['NAC_ID'].$datos['ENF_ID']);

		//ACTUALIZAR REPRESENTANTE LEGAL

		if($this->_familiar->buscar($datos['FAM_ICURP']))
		{
			if($datos['RPR_ID'] == '1')
			{
				$this->_representante->actualizar($datos['PAC_ID']);
			}

			if($this->_db->registrar('DAT_FAMILIAR_FAM', $datos))
			{
				return true;
			}
		}
		
		return false;
	}
}