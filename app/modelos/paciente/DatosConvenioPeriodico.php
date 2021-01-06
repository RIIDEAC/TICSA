<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosConvenioPeriodico
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

	public function obtener(int $id)
	{
		$dato = $this->_db->obtener(
			array
			(
				'datos' => array(
					'CONVENIO' => array(
						'*',
					),
					'BECA' => array(
						'*',
					),
					'TIPOMONEDA' => array(
						'*',
					),
					'PERIODO' => array(
						'*',
					),
				),
				'desde' => array(
					'DAT_CONVENIOPERIODICO_CPE' => 'CONVENIO'
				),
				'join' => array(
					'CAT_BECA_BECA' => array(
						'ALIAS' => 'BECA',
						'ON' => 'BECA_ID'
					),
					'CAT_TIPOMONEDA_TIM' => array(
						'ALIAS' => 'TIPOMONEDA',
						'ON' => 'TIM_ID'
					),
					'CAT_PERIODOAPORTACION_PER' => array(
						'ALIAS' => 'PERIODO',
						'ON' => 'PER_ID'
					),
				),
				'where' => array('CONVENIO.NING_ID','=',$id)
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getObj($dato);
		}

		return false;
	}
}