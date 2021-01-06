<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
/**
 * 
 */
class DatosDeAportacion
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
					'APORTACION' => array(
						'*',
					),
					'TIPOAPORTACION' => array(
						'*',
					),
					'TIPOMONEDA' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
					'RECIBIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_CARGO',
					),
				),
				'desde' => array(
					'DAT_APORTACION_APO' => 'APORTACION'
				),
				'join' => array(
					'CAT_TIPOAPORTACION_TIA' => array(
						'ALIAS' => 'TIPOAPORTACION',
						'ON' => 'TIA_ID'
					),
					'CAT_TIPOMONEDA_TIM' => array(
						'ALIAS' => 'TIPOMONEDA',
						'ON' => 'TIM_ID'
					),
					'DAT_PACIENTE_PAC' => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'RECIBIO',
						'ON' => 'USU_ID'
					),
				),
				'where' => array('APORTACION.APO_ID','=',$id)
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}