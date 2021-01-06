<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
/**
 * 
 */
class ObtenerDatosPaciente
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

	public function obtener($id)
	{
		$dato = $this->_db->obtener(
			array
			(
				'datos' => array(
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_CORREO',
						'USU_ID',
					),
					'SEXO' => array(
						'*',
					),
					'ENTIDADES' => array(
						'*',
					),
					'NACIONALIDAD' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
				),
				'desde' => array(
					'DAT_PACIENTE_PAC' => 'PACIENTE'
				),
				'join' => array(
					'CAT_SEXO_SEX' => array(
						'ALIAS' => 'SEXO',
						'ON' => 'SEX_ID'
					),
					'CAT_ENTIDADFEDERATIVA_ENF' => array(
						'ALIAS' => 'ENTIDADES',
						'ON' => 'ENF_ID'
					),											
					'CAT_NACIONALIDAD_NAC' => array(
						'ALIAS' => 'NACIONALIDAD',
						'ON' => 'NAC_ID'
					),
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
				),
				'where' => array('PACIENTE.PAC_ID','=',$id),
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return $this->_result->getFirstObj($dato);
		}

		return false;
	}
}