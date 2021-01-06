<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBUpdate,DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class ActualizarRepresentanteLegal
{
	private $_db,
			$_count,
			$_result;
	
	public function __construct
	(
		DBUpdate $DBUpdate,
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj
	)
	{
		$this->_actualizar = $DBUpdate;
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;	
	}

	public function actualizar($pacienteiD): void
	{
		$dato = $this->_db->get(
			array(
			'table' => 'DAT_FAMILIAR_FAM', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('PAC_ID','=',$pacienteiD),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			$familiares = $this->_result->getObj($dato);
			
			foreach ($familiares as $value)
			{
				$this->_actualizar->update(
				array(
					'TABLE' => 'DAT_FAMILIAR_FAM',
					'SET' => array('RPR_ID' => 2),
					'WHERE' => array('PAC_ID','=',$value->PAC_ID)
				)
				);
			}
		}
	}
}