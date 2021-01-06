<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount};
/**
 * 
 */
class BuscarFamiliarRepetido
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

	public function buscar(string $icurp, $idfam = null): bool
	{
		if(!$idfam){ $idfam = 0; }

		$dato = $this->_db->get(
			array(
			'table' => 'DAT_FAMILIAR_FAM', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('FAM_ID', '!=', $idfam),
			'and' => array('FAM_ICURP','=',$icurp)
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