<?php
namespace app\modelos\catalogos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 
 */
class ObtenerDatosDeFormato
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
	public function obtener(string $formatos)
	{
		$resultado = array();

		if(is_array($formatos))
		{
			foreach ($formatos as $formato)
			{
				$resultado[$formato] = $this->catalogo($formato);			
			}

			return (object) $resultado;
		}
		else
		{
			return $this->catalogo($formatos);
		}	
	}

	public function catalogo($table)
	{
		$dato = $this->_db->get(
			array(
			'table' => 'CAT_FORMATOS_FOR', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('FOR_TABLE','=',$table),
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