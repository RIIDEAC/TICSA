<?php
namespace app\modelos\usuarios;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};

class ObtenerPasswordporCorreo 
{
	private $_db,
			$_count,
			$_first;

	public function __construct(DBGet $DBGet, DBResultCount $DBResultCount, DBResultFirst $DBResultFirst)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_first =$DBResultFirst;
	}

	public function obtener($correo)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_USUARIO_USU', 
				'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('USU_CORREO','=', $correo),
				//'and' => array('', '', '')
				), 
			array(
				'USU_PASS'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_first->getFirstObj($datos);
		}

		return false;
	}
}