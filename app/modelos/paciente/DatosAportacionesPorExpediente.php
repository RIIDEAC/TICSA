<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosAportacionesPorExpediente
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
	/**
	 * @return \stdClass|false
	 *
	 * @param numeric $ning
	 */
	public function obtener($ning)
	{
		$dato = $this->_db->obtener(
			array
			(
				'datos' => array(
					'TIPOAPORTACION' => array(
						'*',
					),
					'TIPOMONEDA' => array(
						'*',
					),
					'APORTACIONES' => array(
						'*',
					),
				),
				'desde' => array(
					'DAT_APORTACION_APO' => 'APORTACIONES'
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
				),
				'where' => array('APORTACIONES.NING_ID','=',$ning),
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return ($this->_result->getObj($dato));
		}

		return false;
	}
}