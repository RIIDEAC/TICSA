<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount};
/**
 * 
 */
class BuscarPacienteRepetido
{
	private $_db,
			$_count;
	
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
	}

	public function buscar(string $icurp, $idpaciente = null): bool
	{
		if(!$idpaciente){ $idpaciente = 0; }
		
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_PACIENTE_PAC', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('PAC_ID','!=',$idpaciente),
			'and' => array('PAC_ICURP','=',$icurp)
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return false;
		}

		return true;
	}
}