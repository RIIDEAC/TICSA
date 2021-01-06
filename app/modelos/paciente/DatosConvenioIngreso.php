<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
/**
 * 
 */
class DatosConvenioIngreso
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
					'CONVENIO' => array(
						'*',
					),
					'BECA' => array(
						'*',
					),
					'TIPOMONEDA' => array(
						'*',
					),
				),
				'desde' => array(
					'DAT_CONVENIOINGRESO_CIN' => 'CONVENIO'
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
				),
				'where' => array('CONVENIO.NING_ID','=',$id)
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}