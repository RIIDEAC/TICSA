<?php 
namespace app\modelos\formatos;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
use \app\modelos\formatos\CalificarAssist;
/**
 * 
 */
class ObtenerDatosAssist
{
	
	private $_db,
			$_count,
			$_calificar,
			$_result;
	
	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst,
		CalificarAssist $CalificarAssist
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_calificar = $CalificarAssist;	
	}

	/**
	 * @return \stdClass|false
	 */
	public function obtener(int $id)
	{
		$dato = $this->_db->obtener(
			array
			(
				'datos' => array(
					'ASSIST' => array(
						'*',
					),
					'EXPEDIENTE' => array(
						'*',
					),
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_ID',
						'USU_CARGO',
						'USU_PRO',
					),
					'PACIENTE' => array(
						'*',
					),
					
				),
				'desde' => array(
					'DAT_ASSIST_ASS' => 'ASSIST'
				),
				'join' => array(
					'DAT_NINGRESO_NING' => array(
						'ALIAS' => 'EXPEDIENTE',
						'ON' => 'NING_ID'
					),
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
					'DAT_PACIENTE_PAC' => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),											
				),
				'where' => array('ASSIST.ASS_ID','=',$id),
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return (object) array_merge( (array) $this->_result->getFirstObj($dato), (array) $this->_calificar->obtener($id));
		}

		return false;
	}
}