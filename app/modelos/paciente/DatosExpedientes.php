<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosExpedientes
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
					'EXPEDIENTE' => array(
						'*',
					),
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_ID',
					),
					'USUARIO2' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_ID',
					),
					'USUARIO3' => array(
						'USU_NOMBRE AS CONSNOMBRE',
						'USU_PATERNO AS CONSPATERNO',
						'USU_MATERNO AS CONSMATERNO',
					),
					'USUARIO4' => array(
						'USU_NOMBRE AS PSINOMBRE',
						'USU_PATERNO AS PSIPATERNO',
						'USU_MATERNO AS PSIMATERNO',
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
					'TIPOINGRESO' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'COP_ID',
						'd_codigo',
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
					'SISTEMAVIEJO' => array(
						'*',
					),
					'CONSEJERO' => array(
						'USU_ID AS CONSEJERO',
					),
					'PSICOLOGO' => array(
						'USU_ID AS PSICOLOGO',
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
					'DAT_SISTEMAVIEJO_SIV' => array(
						'ALIAS' => 'SISTEMAVIEJO',
						'ON' => 'NING_ID'
					),
					'DAT_CONSASIGNADOS_COA' => array(
						'ALIAS' => 'CONSEJERO',
						'ON' => 'NING_ID'
					),
					'DAT_PSIASIGNADOS_PSA' => array(
						'ALIAS' => 'PSICOLOGO',
						'ON' => 'NING_ID'
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
							'DAT_USUARIO_USU' => array(
								'ALIAS' => 'USUARIO2',
								'ON' => 'USU_ID'
							),
						),
						//'where' => array('PACIENTE.PAC_ID','=','EXPEDIENTE.PAC_ID')
					),
					array
					(
						'desde' => array(
						'DAT_CONSASIGNADOS_COA' => 'CONSEJERO'
						),
						'join' => array(
							'DAT_USUARIO_USU' => array(
								'ALIAS' => 'USUARIO3',
								'ON' => 'USU_ID'
							),
						),
					),
					array
					(
						'desde' => array(
						'DAT_PSIASIGNADOS_PSA' => 'PSICOLOGO'
						),
						'join' => array(
							'DAT_USUARIO_USU' => array(
								'ALIAS' => 'USUARIO4',
								'ON' => 'USU_ID'
							),
						),
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