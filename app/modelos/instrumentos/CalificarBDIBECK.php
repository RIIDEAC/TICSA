<?php
namespace app\modelos\instrumentos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 	PARA IMPLEMENTAR INTRODUCIR LA ID DE LA PRUEBA
 	$this->_bdi->obtener('BDI_ID');
 */
class CalificarBDIBECK
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
			'table' => 'DAT_BDIBECK_BDI', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('BDI_ID','=',$id),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($datos) !==0)
		{
			//SI HAY DATOS
			return $this->riesgo($this->_result->getFirstObj($datos));	
		}

		return false;
	}

	protected function riesgo($array)
	{
		$unset = array(
			'BDI_ID',
			'PAC_ID',
			'NING_ID',
			'USU_ID',
			'PERDERPESO',
			'FECHA_REGISTRO'
		);

		$riesgo = [];
		$riesgo['PUNTOS'] = 0;
		
		foreach ($array as $key => $value)
		{
			if(!in_array($key, $unset))
			{
				$riesgo['PUNTOS'] = $riesgo['PUNTOS'] + $value;
			}

			if($key == 'SUICIDIO' && $value >= 1)
			{
				$riesgo['ESPECIAL'][$key] = $value;
			}
		}

		if($riesgo['PUNTOS'] >= 0 && $riesgo['PUNTOS'] <= 9)
		{
			$riesgo['RIESGO'] = 'Mínima';
		}
		if($riesgo['PUNTOS'] >= 10 && $riesgo['PUNTOS'] <= 16)
		{
			$riesgo['RIESGO'] = 'Leve';
		}
		if($riesgo['PUNTOS'] >= 17 && $riesgo['PUNTOS'] <= 29)
		{
			$riesgo['RIESGO'] = 'Moderada';
		}
		if($riesgo['PUNTOS'] >= 30)
		{
			$riesgo['RIESGO'] = 'Severa';
		}

		return $riesgo;
	}
}