<?php
namespace app\modelos\tickets;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultObj};
/**
 * 
 */
class ObtenerTodosLosTickets
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
    */
	public function obtener()
	{
		$dato = $this->_db->obtener(
			array
			(
				'datos' => array(
					'TICKETS' => array(
						'*',
					),
					'TIPOTICKET' => array(
						'*',
					),
					'ESTADOTICKET' => array(
						'*',
					),
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
					),
					'PACIENTE' => array(
						'PAC_NOMBRE',
						'PAC_PATERNO',
						'PAC_MATERNO',
					),
				),
				'desde' => array(
					'DAT_TICKET_TIC' => 'TICKETS'
				),
				'join' => array(
					'CAT_TIPOTICKET_TIT' => array(
						'ALIAS' => 'TIPOTICKET',
						'ON' => 'TIT_ID'
					),
					'CAT_ESTADOTICKET_ETI' => array(
						'ALIAS' => 'ESTADOTICKET',
						'ON' => 'ETI_ID'
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
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return ($this->_result->getObj($dato));
		}

		return false;
	}
}