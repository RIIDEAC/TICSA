<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class ObtenerFormatosDePacientesPorIdDeExpediente
{
	private $_db,
			$_count,
			$_result,
			$_formatos;
	
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
        * @param array[] $formatos
        *
        * @return \stdClass|null
        */
	public function obtener(array $formatos)
	{
		$this->_formatos = $formatos;

		$resultado = new \stdClass;

		foreach ($this->_formatos['FORMATOS'] as $formato)
		{
			
			if($f = $this->catalogo($formato))
			{
				$resultado->$formato = (object) $f;
			}
							
		}

		return (object) $resultado;
	}

	public function catalogo($table)
	{

		$dato = $this->_db->get(
			array(
			'table' => $table, 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('NING_ID','=',$this->_formatos['ID']),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getObj($dato);
		}

		return false;
	}
}