<?php
namespace app\modelos\consejeria;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};

class BuscarPlanIndividualPacienteporNING_ID
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
		$this->_result = $DBResultFirst;
	}

	public function obtener($id = null)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_PLANCONSIND_PCI', 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
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