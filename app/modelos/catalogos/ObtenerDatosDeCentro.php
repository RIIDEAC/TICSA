<?php
namespace app\modelos\catalogos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 
 */
class ObtenerDatosDeCentro
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
	/**
    * @param string/array $table
    */
	
	public function obtener()
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_CENTRO_CEN', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('CEN_ID','=',1),
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