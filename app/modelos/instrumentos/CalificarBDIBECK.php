<?php
namespace app\modelos\instrumentos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
use stdClass;
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
		if(is_numeric($id))
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
		}
		else if(is_object($id))
		{
			return (object) $this->riesgo($id);
		}


		return false;
	}

	protected function riesgo($array)
	{
		$campos = array(
			'TRISTE',
			'CASTIGO',
			'ESPERANZA',
			'DESILUSIONADO',
			'FRACASO',
			'PEOR',
			'SATISFECHO',
			'SUICIDIO',
			'CULPABLE',
			'LLORAR',
			'IRRITABLE',
			'APETITO',
			'INTERES',
			'PESO',
			'PERDERPESO',
			'DECISIONES',
			'SALUD',
			'ATRACTIVO',
			'SEXO',
			'TRABAJO',
			'DORMIR',
			'CANSANCIO'
		);


		$riesgo = new stdClass;
		$riesgo->{'PUNTOS'} = 0;
		$riesgo->{'ESPECIAL'} = new stdClass;
		
		foreach ($array as $key => $value)
		{
			if(in_array($key, $campos))
			{
				$riesgo->{'PUNTOS'} = $riesgo->{'PUNTOS'} + $value;
			}

			if($key == 'SUICIDIO')
			{
				if($value == '0')
				{
					$riesgo->{'ESPECIAL'}->{$key} = 'No tengo pensamientos suicidas';
				}
				if($value == '1')
				{
					$riesgo->{'ESPECIAL'}->{$key} = 'Tengo pensamientos suicidas pero no los llevaría a cabo';
				}
				if($value == '2')
				{
					$riesgo->{'ESPECIAL'}->{$key} = 'Me gustaría suicidarme';
				}
				if($value == '3')
				{
					$riesgo->{'ESPECIAL'}->{$key} = 'Me suicidaría si tuviera oportunidad';
				}
				
			}
		}
		if($riesgo->{'PUNTOS'} == 0)
		{
			$riesgo->{'RIESGO'} = 'Nula';
		}
		if($riesgo->{'PUNTOS'} >= 1 && $riesgo->{'PUNTOS'} <= 5)
		{
			$riesgo->{'RIESGO'} = 'Mínima';
		}
		if($riesgo->{'PUNTOS'} >= 6 && $riesgo->{'PUNTOS'} <= 15)
		{
			$riesgo->{'RIESGO'} = 'Leve';
		}
		if($riesgo->{'PUNTOS'} >= 16 && $riesgo->{'PUNTOS'} <= 30)
		{
			$riesgo->{'RIESGO'} = 'Moderada, es necesario referir a consulta psiquiátrica';
		}
		if($riesgo->{'PUNTOS'} >= 31)
		{
			$riesgo->{'RIESGO'} = 'Severa, es necesario referir a consulta psiquiátrica';
		}

		return (object) $riesgo;
	}
}