<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultFirst};
/**
 * 
 */
class DatosNotaDeIngresoSinRl
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
					'EXPEDIENTE' => array(
						'*',
					),
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_ID',
						'USU_CARGO',
					),
					'USUARIO2' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_ID',
						'USU_CARGO',
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
					'SEXO2' => array(
						'*',
					),
					'ENTIDADES2' => array(
						'*',
					),
					'NACIONALIDAD2' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
					'TIPOINGRESO' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'COP_ID',
						'd_codigo',
						'd_asenta',
						'd_tipo_asenta',
						'D_mnpio',
						'd_estado'
					),
					'ESCOLARIDAD' => array(
						'*',
					),
					'ESTADOCIVIL' => array(
						'*',
					),
					'OCUPACION' => array(
						'*',
					),
					'FAMILIAR' => array(
						'*',
					),
					'PARENTESCO' => array(
						'*',
					),
					'SUSTANCIA' => array(
						'*',
					),
					'FORMAADMIN' => array(
						'*',
					),
					'FRECUENCIA' => array(
						'*',
					),
					'CONSUME' => array(
						'*',
					),
				),
				'desde' => array(
					'DAT_NINGRESO_NING' => 'EXPEDIENTE'
				),
				'join' => array(
					'CAT_TIPOINGRESO_TII' => array(
						'ALIAS' => 'TIPOINGRESO',
						'ON' => 'TII_ID'
					),
					'CAT_CODIGOPOSTAL_COP' => array(
						'ALIAS' => 'CODIGOPOSTAL',
						'ON' => 'COP_ID'
					),											
					'CAT_ESCOLARIDAD_ESO' => array(
						'ALIAS' => 'ESCOLARIDAD',
						'ON' => 'ESO_ID'
					),
					'CAT_ESTADOCIVIL_ESC' => array(
						'ALIAS' => 'ESTADOCIVIL',
						'ON' => 'ESC_ID'
					),
					'CAT_OCUPACION_OCU' => array(
						'ALIAS' => 'OCUPACION',
						'ON' => 'OCU_ID'
					),
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
					'DAT_PACIENTE_PAC' => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					'DAT_FAMILIAR_FAM' => array(
						'ALIAS' => 'FAMILIAR',
						'ON' => 'PAC_ID'
					),
					'CAT_SISVEASUS_SIS' => array(
						'ALIAS' => 'SUSTANCIA',
						'ON' => 'SIS_ID',
					),
					'CAT_CONSUMEACTUALDROGA_CAD' => array(
						'ALIAS' => 'CONSUME',
						'ON' => 'CND_ID',
					),
	 				'CAT_FORMAADMINISTRACIONDROGA_FAD' => array(
						'ALIAS' => 'FORMAADMIN',
						'ON' => 'FAD_ID',
	 				),
	 				'CAT_FRECUENCIACONSUMODROGA_FCD' => array(
						'ALIAS' => 'FRECUENCIA',
						'ON' => 'FCD_ID',
					),
				),
				'where' => array('EXPEDIENTE.NING_ID','=',$id),
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
							'DAT_USUARIO_USU' => array(
								'ALIAS' => 'USUARIO2',
								'ON' => 'USU_ID'
							),
						),
					),
					array
					(
						'desde' => array(
						'DAT_FAMILIAR_FAM' => 'FAMILIAR'
						),
						'join' => array(
							'CAT_SEXO_SEX' => array(
								'ALIAS' => 'SEXO2',
								'ON' => 'SEX_ID'
							),
							'CAT_ENTIDADFEDERATIVA_ENF' => array(
								'ALIAS' => 'ENTIDADES2',
								'ON' => 'ENF_ID'
							),											
							'CAT_NACIONALIDAD_NAC' => array(
								'ALIAS' => 'NACIONALIDAD2',
								'ON' => 'NAC_ID'
							),
							'CAT_PARENTESCO_PAE' => array(
								'ALIAS' => 'PARENTESCO',
								'ON' => 'PAE_ID'
							),
						),
					),
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