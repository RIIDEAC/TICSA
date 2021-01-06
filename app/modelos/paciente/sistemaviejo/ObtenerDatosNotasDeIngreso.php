<?php
namespace app\modelos\paciente\sistemaviejo;
use \app\modelos\sql\{DBResultCount,DBResultObj,DBGet};
/**
 * 
 */
class ObtenerDatosNotasDeIngreso
{
	private $_db,
			$_result,
			$_count;
	
	public function __construct
	(
		DBResultObj $DBResultObj,
		DBGet $DBGet,
		DBResultCount $DBResultCount
		
	)
	{
		$this->_db = $DBGet;
		$this->_result = $DBResultObj;
		$this->_count = $DBResultCount;
		
	}

	public function obtener()
	{
		
		$datos = $this->_db->get(
			array(
			'table' => 'expedientes'
			), 
		array(
			'*'
			),
			array(
            'host' => '127.0.0.1',
            'dbname' => 'aman_admin',
            'dbuser' => 'root',
            'dbpass' => '',
            )
		);
		
		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_result->getObj($datos);
		}

		return false;
	}	
}