<?php
namespace app\modelos\catalogos;
use \app\modelos\sql\{DBGet,DBResultObj};
/**
 * 
 */
class ObtenerCatalogos
{
	
	public function __construct
	(
		DBGet $DBGet,
		DBResultObj $DBResultObj
	)
	{
		$this->_db = $DBGet;
		$this->_result = $DBResultObj;
	}

	public function obtener($catalogos)
	{
		$resultado = (object) array();

		foreach ($catalogos as $value)
		{
			$catalogo = $this->_db->get(
			array(
				'table' => $value, 
				//'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				//'where' => array('PAC_ICURP','=', $icurp),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)			
			);

			$resultado->$value = (object) $this->_result->getObj($catalogo);
		}

		return (object) $resultado;
	}
}