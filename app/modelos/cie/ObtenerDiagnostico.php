<?php
namespace app\modelos\cie;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class ObtenerDiagnostico
{
	
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

	public function obtener($dx)
	{
		$datos = $this->_db->get(
			array(
			'table' => 'CAT_CIE_CIE', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('NOMBRE','LIKE','%'.$dx.'%'),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)

		);

		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_result->getObj($datos);
		}

		return false;
	}
}