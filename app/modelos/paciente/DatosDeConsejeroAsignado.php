<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
/**
 * 
 */
class DatosDeConsejeroAsignado
{
	private $_db,
			$_count,
			$_result;
	
	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;	
	}

	public function obtener(int $id)
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
					'DAT_CONSASIGNADOS_COA' => 'CONSEJERO'
				),
				'join' => array(
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
				),
				'where' => array('CONSEJERO.NING_ID','=',$id),
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}