<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosPacientes
{
	private $_db,
			$_count,
			$_result;
	
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;	
	}

	public function obtener()
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_PACIENTE_PAC', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			//'where' => array('PAC_ICURP','=',$icurp),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getObj($dato);
		}

		return false;
	}
}