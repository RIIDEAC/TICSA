<?php
namespace app\modelos\usuarios;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultObj};

class ObtenerTodosLosUsuarios
{
	private $_db,
			$_count,
			$_resultados;

	public function __construct(DBGet $DBGet, DBResultCount $DBResultCount, DBResultObj $DBResultObj)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_resultados = $DBResultObj;
	}

	public function obtener()
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_USUARIO_USU', 
				//'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				//'where' => array('USU_CORREO','=', $correo),
				//'and' => array('', '', '')
				), 
			array(
				'USU_ID','USU_CORREO','USU_ROL'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_resultados->getObj($datos);
		}

		return false;
	}
}