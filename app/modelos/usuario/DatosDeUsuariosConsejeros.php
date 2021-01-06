<?php
namespace app\modelos\usuario;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosDeUsuariosConsejeros
{
	private $_db,
			$_count,
			$_result;
	
	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;	
	}

	public function obtener()
	{
		$dato = $this->_db->obtener(
			array
			(
				'datos' => array(
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_CORREO',
						'USU_ID',
					),
					'CONSEJERO' => array(
						'*',
					),
				),
				'desde' => array(
					'DAT_USUARIOCONSEJERO_UCO' => 'CONSEJERO'
				),
				'join' => array(
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
				),
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getObj($dato);
		}

		return false;
	}
}