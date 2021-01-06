<?php
namespace app\modelos\formatos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
use stdClass;
/**
 * 	PARA IMPLEMENTAR INTRODUCIR LA ID DE LA PRUEBA
 	$this->_assist->obtener('ASS_ID');
 */
class CalificarAssist
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

	public function obtener(int $ass_id)
	{
		if(is_numeric($ass_id))
		{
			$datos = $this->_db->get(
				array(
				'table' => 'DAT_ASSIST_ASS', 
				//'limit' => '', 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('ASS_ID','=',$ass_id),
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
		else if(is_object($ass_id))
		{
			return (object) $this->riesgo($ass_id);	
		}

		return false;
	}

	protected function riesgo(object $assist): stdClass
	{
		$sustancia = array(
			'TABACO' => array(
					'TABACO_2',
					'TABACO_3',
					'TABACO_4',
					'TABACO_6',
					'TABACO_7'
					),
			'ALCOHOL' => array(
					'ALCOHOL_2',
					'ALCOHOL_3',
					'ALCOHOL_4',
					'ALCOHOL_5',
					'ALCOHOL_6',
					'ALCOHOL_7'
					),
			'CANNABIS' => array(
					'CANNABIS_2',
					'CANNABIS_3',
					'CANNABIS_4',
					'CANNABIS_5',
					'CANNABIS_6',
					'CANNABIS_7'
					),
			'COCAINA' => array(
					'COCAINA_2',
					'COCAINA_3',
					'COCAINA_4',
					'COCAINA_5',
					'COCAINA_6',
					'COCAINA_7'
					),
			'ANFETAMINA' => array(
					'ANFETAMINA_2',
					'ANFETAMINA_3',
					'ANFETAMINA_4',
					'ANFETAMINA_5',
					'ANFETAMINA_6',
					'ANFETAMINA_7'
					),
			'INHALABLES' => array(
					'INHALABLES_2',
					'INHALABLES_3',
					'INHALABLES_4',
					'INHALABLES_5',
					'INHALABLES_6',
					'INHALABLES_7'
					),
			'SEDANTES' => array(
					'SEDANTES_2',
					'SEDANTES_3',
					'SEDANTES_4',
					'SEDANTES_5',
					'SEDANTES_6',
					'SEDANTES_7'
					),
			'ALUCINOGENOS' => array(
					'ALUCINOGENOS_2',
					'ALUCINOGENOS_3',
					'ALUCINOGENOS_4',
					'ALUCINOGENOS_5',
					'ALUCINOGENOS_6',
					'ALUCINOGENOS_7'
					),
			'OPIACEOS' => array(
					'OPIACEOS_2',
					'OPIACEOS_3',
					'OPIACEOS_4',
					'OPIACEOS_5',
					'OPIACEOS_6',
					'OPIACEOS_7'
					),
			'OTROS' => array(
					'OTROS_2',
					'OTROS_3',
					'OTROS_4',
					'OTROS_5',
					'OTROS_6',
					'OTROS_7'
					)
		);

		$riesgo = new stdClass;

		foreach ($sustancia as $key => $value)
		{
			$riesgo->{$key} = new stdClass;
			$riesgo->{$key}->{'PUNTOS'} = 0;

			foreach ($value as $v)
			{
				$riesgo->{$key}->{'PUNTOS'} = $riesgo->{$key}->{'PUNTOS'} + $assist->{$v};
			}

			if($key == 'ALCOHOL')
			{
				if($riesgo->{$key}->{'PUNTOS'} == '0')
				{
					$riesgo->{$key}->{'RIESGO'} = 'Nulo';			
				}
				if($riesgo->{$key}->{'PUNTOS'} >= 1 && $riesgo->{$key}->{'PUNTOS'} <= 10)
				{
					$riesgo->{$key}->{'RIESGO'} = 'Bajo';			
				}
				if($riesgo->{$key}->{'PUNTOS'} >= 11 && $riesgo->{$key}->{'PUNTOS'} <= 26)
				{
					$riesgo->{$key}->{'RIESGO'} = 'Moderado';			
				}
				if($riesgo->{$key}->{'PUNTOS'} >= 27)
				{
					$riesgo->{$key}->{'RIESGO'} = 'Alto';			
				}
			}
			else
			{
				if($riesgo->{$key}->{'PUNTOS'} == 0)
				{
					$riesgo->{$key}->{'RIESGO'} = 'Nulo';			
				}
				if($riesgo->{$key}->{'PUNTOS'} >= 1 && $riesgo->{$key}->{'PUNTOS'} <= 3)
				{
					$riesgo->{$key}->{'RIESGO'} = 'Bajo';			
				}
				if($riesgo->{$key}->{'PUNTOS'} >= 4 && $riesgo->{$key}->{'PUNTOS'} <= 26)
				{
					$riesgo->{$key}->{'RIESGO'} = 'Moderado';			
				}
				if($riesgo->{$key}->{'PUNTOS'} >= 27)
				{
					$riesgo->{$key}->{'RIESGO'} = 'Alto';			
				}
			}
		}

		return $riesgo;
	}
}