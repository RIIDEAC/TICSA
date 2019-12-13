<?php
namespace app\modelos\aportaciones;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultObj};
use \app\modelos\pacientes\{ContarDiasTratamientoPacienteporNING_ID};
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
		ObtenerAportacionesPacienteporNING_ID $ObtenerAportacionesPacienteporNING_ID	
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
		$this->_dias = $ContarDiasTratamientoPacienteporNING_ID;
		$this->_aportaciones = $ObtenerAportacionesPacienteporNING_ID;
	}

	public function obtener($ning_id)
	{
		
	}
}