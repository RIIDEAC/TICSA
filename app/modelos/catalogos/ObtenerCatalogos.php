<?php
namespace app\modelos\catalogos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class ObtenerCatalogos
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
        * @param string[] $catalogos
        *
        * @return \stdClass|null
        */
	public function obtener($catalogos)
	{
		$resultado = array();

		if(is_array($catalogos))
		{
			foreach ($catalogos as $catalogo)
			{
				$resultado[$catalogo] = $this->catalogo($catalogo);			
			}

			return (object) $resultado;
		}
		else
		{
			return $this->catalogo($catalogos);
		}
	}

	public function catalogo(string $table)
	{
		$dato = $this->_db->get(
			array(
			'table' => $table, 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			//'where' => array('USU_CORREO','=',$correo),
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