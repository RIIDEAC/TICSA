<?php
namespace app\modelos\centro;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};

class ObtenerDatosCentro
{
	private $_db,
			$_count,
			$_result;

	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result =$DBResultFirst;
	}

	public function obtener()
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_CENTRO_CEN', 
				//'limit' =>  1, 
				//'orderby' => 'FAM_PATERNO', 
				//'order' => '', 
				//'where' => array('NING_ID','=', 1),
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