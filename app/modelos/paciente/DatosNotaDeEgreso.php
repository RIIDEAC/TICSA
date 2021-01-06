<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
/**
 * 
 */
class DatosNotaDeEgreso
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
					'EGRESO' => array(
						'*',
					),
					'NOTAINGRESO' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
					'TIPOEGRESO' => array(
						'*',
					),
					'TIPOINGRESO' => array(
						'*',
					),
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_CARGO'
					),
				),
				'desde' => array(
					'DAT_NEGRESO_NEGR' => 'EGRESO'
				),
				'join' => array(
					'CAT_TIPOEGRESO_TIE' => array(
						'ALIAS' => 'TIPOEGRESO',
						'ON' => 'TIE_ID'
					),
					'DAT_PACIENTE_PAC' => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					'DAT_NINGRESO_NING' => array(
						'ALIAS' => 'NOTAINGRESO',
						'ON' => 'NING_ID'
					),
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
				),
				'where' => array('EGRESO.NEGR_ID','=',$id),
				'repetir' => array(
					array(
						'desde' => array(
						'DAT_NINGRESO_NING' => 'NOTAINGRESO'
						),
						'join' => array(
							'CAT_TIPOINGRESO_TII' => array(
								'ALIAS' => 'TIPOINGRESO',
								'ON' => 'TII_ID'
							),
						)
					)
				)
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}