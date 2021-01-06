<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount};
/**
 * 
 */
class NumeroDeNotasIndividualesDeConsejeria
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
	/**
        * @param int $ning
        *
        * @return 
        */
	public function obtener(int $ning): int
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_NOTACONIND_NCI', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('NING_ID','=', $ning),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		return $this->_count->getCount($dato);
	}
}