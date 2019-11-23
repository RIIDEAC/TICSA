<?php
namespace app\modelos\instrumentos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 	PARA IMPLEMENTAR INTRODUCIR LA ID DE LA PRUEBA
 	$this->_satisfaccion->obtener('SAT_ID');
 */
class CalificarSATISFACCION
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
		$datos = $this->_db->get(
			array(
			'table' => 'DAT_SATISFACCIONVIDA_SAT', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('SAT_ID','=',$id),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($datos) !==0)
		{
			//SI HAY DATOS
			return $this->satisfaccion($this->_result->getFirstObj($datos));	
		}

		return false;
	}

	protected function satisfaccion($array)
	{
		$unset = array(
			'SAT_ID',
			'PAC_ID',
			'NING_ID',
			'USU_ID',
			'FECHA_REGISTRO'
		);

		$resultado = [];
		
		foreach ($array as $key => $value)
		{
			if(!in_array($key, $unset))
			{
				if($value >= 1 && $value <= 5)
				{
					$resultado[$key] = 'Completamente insatisfecho';
				}
				if($value >= 6 && $value <= 7)
				{
					$resultado[$key] = 'Insatisfecho';
				}
				if($value == 8)
				{
					$resultado[$key] = 'Satisfecho';
				}
				if($value >= 9 && $value <= 10)
				{
					$resultado[$key] = 'Completamente satisfecho';
				}
				
			}
		}

		return $resultado;
	}
}