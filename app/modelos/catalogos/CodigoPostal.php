<?php
namespace app\modelos\catalogos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class CodigoPostal
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
	/**
    * @param numeric $codigo
    */
	
	public function obtener($codigo)
	{
		$dato = $this->_db->get(
			array(
			'table' => 'CAT_CODIGOPOSTAL_COP', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('d_codigo','LIKE','%'.$codigo.'%'),
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