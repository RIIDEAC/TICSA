<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosPacientesNoActivos
{
	private $_db,
			$_count,
			$_result;
	
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
   * @return \stdClass|false
*/
	public function obtener()
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_PACIENTE_PAC', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			//'where' => array('PAC_ICURP','=',$icurp),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			$dato =  $this->_result->getObj($dato);

			$resultados = array();

			foreach ($dato as $key => $value)
			{
				if($datos = $this->expedientesAbiertos($value->PAC_ID))
				{
					$resultados[$value->PAC_ID] = $value;
				}
			}

			if(!empty($resultados))
			{
				return (object) $resultados;
			}
		}

		return false;
	}

	public function expedientesAbiertos($id): bool
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_NINGRESO_NING', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('PAC_ID','=',$id),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($numeroAbiertos = $this->_count->getCount($dato))
		{
			if($numeroAbiertos !== 0)
			{
				//REVISAR LOS CERRADOS
				$dato = $this->_db->get(
					array(
					'table' => 'DAT_NEGRESO_NEGR', 
					//'limit' => '', 
					//'orderby' => '', 
					//'order' => '', 
					'where' => array('PAC_ID','=',$id),
					//'and' => array('', '', '')
					), 
					array(
					'*'
					)
				);

				if($numeroCerrados = $this->_count->getCount($dato))
				{
					if($numeroCerrados !== 0)
					{
						if($numeroCerrados === $numeroAbiertos)
						{
							return true;
						}	
					}
								
				}
			}

			return false;

		}

		return true;
	}
}