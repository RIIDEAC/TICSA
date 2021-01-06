<?php
namespace app\modelos\formatos;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultFirst};
use \app\modelos\formatos\CalificarScl;

class ObtenerDatosScl
{
	private $_db,
			$_count,
			$_result,
			$_config;

	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst,
		CalificarScl $CalificarScl
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_calificar = $CalificarScl;
	}

	public function obtener(int $id)
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'SCL' => array(
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
					'DAT_SCL90_SCL' => 'SCL'
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
				'where' => array('SCL.SCL_ID','=',$id),
			)	
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$prueba = (object) $this->_result->getFirstObj($datos);
			$calificacion = $this->_calificar->obtener($prueba);

			return (object) array(
				'FORMATO' => $prueba,
				'RESULTADOS' => $calificacion
			);
		}

		return false;
	}
}