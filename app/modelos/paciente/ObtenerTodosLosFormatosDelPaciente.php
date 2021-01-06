<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj,DBResultFirst}; 
/**
 * 
 */
class ObtenerTodosLosFormatosDelPaciente
{
	private $_formatos = array(
			'DAT_NEGRESO_NEGR',
			'DAT_CONVENIOINGRESO_CIN',
			'DAT_CONVENIPERIODICO_CPE',
			'DAT_FAMILIAR_FAM'
			);
	
	public function __construct
	(
		DBGet $DBGet,
		DBResultCount $DBResultCount,
		DBResultObj $DBResultObj,
		DBResultFirst $DBResultFirst
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
		$this->_first = $DBResultFirst;
	}

	public function obtener($ning): void
	{

	}

	
}