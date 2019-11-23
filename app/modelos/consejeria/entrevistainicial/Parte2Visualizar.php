<?php
namespace app\modelos\consejeria\entrevistainicial;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 
 */
class Parte2Visualizar
{
	private $_db,
			$_count,
			$_result,
			$_entrevista;
	
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
			'table' => 'DAT_EINICIALII_EINII', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('EINII_ID','=',$id),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$this->_entrevista = $this->_result->getFirstObj($datos);

			return (object) array(
				'CONSUMO' => $this->consumoDE(),
				'TIEMPO' => $this->TiempoConsumo(),
				'SOLO' => $this->solo(),
				'LUGAR' => $this->lugar(),
				'DETENER' => $this->detenerConsumo(),
				'DINERO' => $this->DineroConsumo(),
			);
		}
	}

	public function consumoDE()
	{
		$sustancias = [
			'ALCOHOL' => 'Alcohol',
			'MARIHUANA' => 'Marihuana',
			'COCAINA' => 'Cocaína',
			'HEROINA' => 'Heroina',
			'METANFETAMINA' => 'Metanfetaminas/Anfetaminas',
			'INHALABLES' => 'Inhablables',
			'ALUCINOGENOS' =>'Alucinogenos',
			'DISENO' => 'Drogas de diseño',
			'ESTIMULANTES' => 'Medicamentos estimulantes',
			'DEPRESORES' => 'Medicamentos depresores',
			'TABACO' => 'Tabaco',
			'OTROS' => 'Otras sustancias'
		];

		$resultados = [];

		foreach ($sustancias as $key => $value)
		{
			if($this->_entrevista->{$key} == '1')
			{
				$resultados[$value]['FORMA'] = $this->FormaConsumo($key);
				$resultados[$value]['FRECUENCIA'] = $this->FrecuenciaConsumo($key);
				$resultados[$value]['CANTIDAD'] = $this->_entrevista->{$key.'CANTIDAD'};
				$resultados[$value]['EDAD'] = $this->_entrevista->{$key.'EDAD'}. ' años';
				if($key == $this->PrincipalConsumo())
				{
					$resultados['PRINCIPAL'] = $value;
				}
				if($key == 'ALCOHOL')
				{
					//SACAR TIPO DE BEBIDA
					$resultados[$value]['TIPO'] = $this->TipoAlcohol();
				}
			}
		}

		return $resultados;
	}

	public function FormaConsumo($sustancia)
	{
		$llave = $sustancia.'FORMA';
		
		if($this->_entrevista->{$llave} == '1')
		{
			return 'Ingerida';
		}
		if($this->_entrevista->{$llave} == '2')
		{
			return 'Iyectada';
		}
		if($this->_entrevista->{$llave} == '3')
		{
			return 'Fumada';
		}
		if($this->_entrevista->{$llave} == '4')
		{
			return 'Inhalada';
		}
		if($this->_entrevista->{$llave} == '5')
		{
			return 'Otras';
		}
	}

	public function FrecuenciaConsumo($sustancia)
	{
		$llave = $sustancia.'FRECUENCIA';
		if($this->_entrevista->{$llave} == '1')
		{
			return '1 día';
		}

		return $this->_entrevista->{$llave}.' días';
	}

	public function PrincipalConsumo()
	{
		$array = [
			'1' => 'ALCOHOL',
			'2' => 'MARIHUANA',
			'3' => 'COCAINA',
			'4' => 'HEROINA',
			'5' => 'METANFETAMINA',
			'6' => 'INHALABLES',
			'7' => 'ALUCINOGENOS',
			'8' => 'DISENO',
			'9' => 'ESTIMULANTES',
			'10' => 'DEPRESORES',
			'11' => 'TABACO',
			'12' => 'OTROS',
		];

		foreach ($array as $key => $value)
		{
			if($this->_entrevista->PRINCIPALCONSUMO == $key)
			{
				return $value;
			}
		}
	}

	public function TipoAlcohol()
	{
		if($this->_entrevista->TIPOALCOHOL !== '0')
		{
			$array = ['1'=>'Cerveza','2'=>'Vino','3'=>'Pulque','4'=>'Coolers','5'=>'Destilado'];

			foreach ($array as $key => $value)
			{
				if($this->_entrevista->TIPOALCOHOL == $key)
				{
					return $value;
				}
			}
		}

		return 'No consume alcohol';
	}

	public function TiempoConsumo()
	{
		return $this->_entrevista->TIEMPOCONSUMO. ' años';
	}

	public function solo()
	{
		if($this->_entrevista->SOLO == '1')
		{
			return 'Solo';
		}

		return 'Acompañado';
	}

	public function lugar()
	{
		if($this->_entrevista->LUGARCONSUMO == '1')
		{
			return 'Público';
		}

		return 'Privado';
	}

	public function detenerConsumo()
	{
		if($this->_entrevista->DETENERCONSUMO == '1')
		{
			return 'Sí';
		}

		return 'No';
	}

	public function DineroConsumo()
	{
		$array = ['ALCOHOL','TABACO','DROGA'];
		$res = [];

		foreach ($array as $value)
		{
			if($this->_entrevista->{'DINERO'.$value} > '0')
			{
				$res[$value] = $this->_entrevista->{'DINERO'.$value}. ' pesos mensuales';
			}
			
		}

		return $res;
	}


}