<?php
namespace app\modelos\usuario;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 
 */
class DatosUsuarioPorCorreo
{
	
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

	public function obtener(string $correo)
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_USUARIO_USU', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('USU_CORREO','=',$correo),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}