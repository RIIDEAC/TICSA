<?php
namespace app\modelos\instrumentos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
use stdClass;
/**
 * 	PARA IMPLEMENTAR INTRODUCIR LA ID DE LA PRUEBA
 	$this->_scl->obtener('SCL_ID');
 */
class CalificarSCL90
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

	public function obtener($scl_id)
	{
		if(is_numeric($scl_id))
		{
				$datos = $this->_db->get(
				array(
				'table' => 'DAT_SCL90_SCL', 
				//'limit' => '', 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('SCL_ID','=',$scl_id),
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
		}
		else if(is_object($scl_id))
		{
			return (object) $this->riesgo($scl_id);
		}

		return false;
	}

	protected function riesgo($scl)
	{
		$regular = array(
			'CONFIANZA',
			'VIGILAN',
			'ENTIENDEN',
			'VALORAN',
			'APROVECHAN',
			'CONTROLAR',
			'VOCES',
			'PENSANDO',
			'PENSAMIENTOS',
			'SOLO',
			'SEXO',
			'VER',
			'CASTIGADO',
			'CUERPO',
			'ALEJADO',
			'MOVIENDOSE',
			'CABEZA',
		);

		$especiales = array(
			'CONTROLAR',
			'VOCES',
			'PENSANDO',
			'VER',
			'MOVIENDOSE'
		);

		$riesgo = new stdClass;
		$riesgo->{'PUNTOS'} = 0;
		$riesgo->{'ESPECIAL'} = new stdClass;

		foreach ($scl as $key => $value)
		{
			if(in_array($key, $regular))
			{
				$riesgo->{'PUNTOS'} = $riesgo->{'PUNTOS'} + $value;
			}

			if(in_array($key, $especiales))
			{
				if($value >= 2)
				{
					$riesgo->{'ESPECIAL'}->{$key} = $value;
				}
			}
		}
		if($riesgo->{'PUNTOS'} == 0)
		{
			$riesgo->{'RIESGO'} = 'Nulo';
		}
		if($riesgo->{'PUNTOS'} >= 1 && $riesgo->{'PUNTOS'} <= 18)
		{
			$riesgo->{'RIESGO'} = 'Leve';
		}
		if($riesgo->{'PUNTOS'} >= 19 && $riesgo->{'PUNTOS'} <= 36)
		{
			$riesgo->{'RIESGO'} = 'Mínima';
		}
		if($riesgo->{'PUNTOS'} >= 37 && $riesgo->{'PUNTOS'} <= 54)
		{
			$riesgo->{'RIESGO'} = 'Moderada, requiere valoración psiquiátrica';
		}
		if($riesgo->{'PUNTOS'} >= 55)
		{
			$riesgo->{'RIESGO'} = 'Severa, requiere valoración psiquiátrica';
		}

		return (object) $riesgo;
	}
}