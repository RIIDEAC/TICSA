<?php
namespace app\modelos\instrumentos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
use stdClass;
/**
 * 	PARA IMPLEMENTAR INTRODUCIR LA ID DE LA PRUEBA
 	$this->_bai->obtener('BAI_ID');
 */
class CalificarBAIBECK
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
				'table' => 'DAT_BAIBECK_BAI', 
				//'limit' => '', 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('BAI_ID','=',$id),
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
			'HORMIGUEO',
			'BOCHORNO',
			'PIERNAS',
			'RELAJARSE',
			'PEOR',
			'MAREO',
			'OPRESION',
			'INSEGURIDAD',
			'TERROR',
			'NERVIOSISMO',
			'AHOGO',
			'MANOS',
			'CUERPO',
			'CONTROL',
			'RESPIRAR',
			'MORIR',
			'ASUSTADO',
			'INDIGESTION',
			'DEBILIDAD',
			'RUBORIZARSE',
			'SUDORACION'
		);


		$riesgo = new stdClass;
		$riesgo->{'PUNTOS'} = 0;
		
		foreach ($array as $key => $value)
		{
			if(in_array($key, $campos))
			{
				$riesgo->{'PUNTOS'} = $riesgo->{'PUNTOS'} + $value;
			}
		}

		if($riesgo->{'PUNTOS'} >= 0 && $riesgo->{'PUNTOS'} <= 5)
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