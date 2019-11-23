<?php
namespace app\modelos\cpostal;
use \app\modelos\sql\{DBGet,DBResultObj,DBResultCount};
/**
 * 
 */
class ObtenerCodigoPostal
{
	
	public function __construct
	(
		DBGet $DBGet,
		DBResultObj $DBResultObj,
		DBResultCount $DBResultCount
	)
	{
		$this->_db = $DBGet;
		$this->_result = $DBResultObj;
		$this->_count = $DBResultCount;
	}

	public function obtener($codigo)
	{
		if(is_numeric($codigo) && strlen($codigo) > 3)
		{
			$codigo = $this->_db->get(
				array(
					'table' => 'CAT_CODIGOPOSTAL_COP', 
					//'limit' => '', 
					//'orderby' => '', 
					//'order' => '', 
					'where' => array('d_codigo','=',$codigo),
					//'and' => array('', '', '')
					), 
				array(
					'*'
					)
			);

			if($this->_count->getCount($codigo) !== 0)
			{
				return $this->_result->getObj($codigo);
			}
		}

		return false;
	}
}