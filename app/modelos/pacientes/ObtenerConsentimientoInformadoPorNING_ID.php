<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};

class ObtenerConsentimientoInformadoPorNING_ID
{
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
	}

	public function obtener($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_CONSENTIMIENTO_CON', 
				//'limit' =>  1, 
				//'orderby' => 'FAM_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_result->getFirstObj($datos);
		}

		return false;
	}
}