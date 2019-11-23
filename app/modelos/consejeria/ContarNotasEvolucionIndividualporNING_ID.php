<?php
namespace app\modelos\consejeria;
use \app\modelos\sql\{DBGet, DBResultCount};

class ContarNotasEvolucionIndividualporNING_ID
{
	private $_db,
			$_count;

	public function __construct(DBGet $DBGet, DBResultCount $DBResultCount)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
	}

	public function obtener($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_NOTACONIND_NCI', 
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

		return $this->_count->getCount($datos);
	}
}