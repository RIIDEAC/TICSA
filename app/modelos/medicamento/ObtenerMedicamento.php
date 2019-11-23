<?php
namespace app\modelos\medicamento;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class ObtenerMedicamento
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

	public function obtener($med)
	{
		$datos = $this->_db->get(
			array(
			'table' => 'CAT_MEDICAMENTOS_MED', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('DESCRIPCION_COMPLETA','LIKE','%'.$med.'%'),
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