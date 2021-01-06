<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosFamiliares
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
					'FAMILIARES' => array(
						'*',
					),
					'SEXOFAM' => array(
						'*',
					),
					'ENTIDADESFAM' => array(
						'*',
					),
					'NACIONALIDADFAM' => array(
						'*',
					),
					'PARENTESCO' => array(
						'*',
					),
					'REPRESENTATE' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
					'CODIGOPOSTALFAM' => array(
						'COP_ID',
						'd_codigo',
						'd_tipo_asenta',
						'd_asenta',
						'D_mnpio',
						'd_estado',
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
				),
				'desde' => array(
					'DAT_FAMILIAR_FAM' => 'FAMILIARES'
				),
				'join' => array(
					'CAT_CODIGOPOSTAL_COP' => array(
						'ALIAS' => 'CODIGOPOSTALFAM',
						'ON' => 'COP_ID'
					),											
					'CAT_SEXO_SEX' => array(
						'ALIAS' => 'SEXOFAM',
						'ON' => 'SEX_ID'
					),
					'CAT_ENTIDADFEDERATIVA_ENF' => array(
						'ALIAS' => 'ENTIDADESFAM',
						'ON' => 'ENF_ID'
					),											
					'CAT_NACIONALIDAD_NAC' => array(
						'ALIAS' => 'NACIONALIDADFAM',
						'ON' => 'NAC_ID'
					),
					'CAT_REPRESENTANTELEGAL_RPR' => array(
						'ALIAS' => 'REPRESENTATE',
						'ON' => 'RPR_ID'
					),
					'CAT_PARENTESCO_PAE' => array(
						'ALIAS' => 'PARENTESCO',
						'ON' => 'PAE_ID'
					),
					'DAT_PACIENTE_PAC' => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
				),
				//'where' => array('PACIENTE.PAC_ID','=',$id),
				'repetir' => array(
					array
					(
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
						),
						'where' => array('PAC_ID','=','FAMILIARES.PAC_ID')
					),
				)
			)	
		);

		if($this->_count->getCount($dato) !== 0)
		{
			return ($this->_result->getObj($dato));
		}

		return false;
	}
}