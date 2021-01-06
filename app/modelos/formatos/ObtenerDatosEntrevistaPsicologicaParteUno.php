<?php 
namespace app\modelos\formatos;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
/**
 * 
 */
class ObtenerDatosEntrevistaPsicologicaParteUno
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
					'ENTREVISTA' => array(
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
					'DAT_ENTPSIINI_EPI' => 'ENTREVISTA'
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
				'where' => array('ENTREVISTA.EPI_ID','=',$id),
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}