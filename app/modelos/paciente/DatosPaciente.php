<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 
 */
class DatosPaciente
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

	public function obtener($id)
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_PACIENTE_PAC', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('PAC_ID','=',$id),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}