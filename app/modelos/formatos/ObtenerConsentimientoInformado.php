<?php
namespace app\modelos\formatos;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultFirst};
use \app\modelos\centro\ObtenerDatosCentro;
use \app\modelos\pacientes\{ObtenerFamiliarRepresentantePorPaciente};
use \app\nucleo\{Config};

class ObtenerConsentimientoInformado
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
		Config $Config,
		ObtenerDatosCentro $ObtenerDatosCentro,
		ObtenerFamiliarRepresentantePorPaciente $ObtenerFamiliarRepresentantePorPaciente
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_config = $Config;
		$this->_centro = $ObtenerDatosCentro;
		$this->_familiares = $ObtenerFamiliarRepresentantePorPaciente;
	}

	public function obtener($ning)
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'INGRESO' => array(
						'*',
					),
					'TIPOINGRESO' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'*',
					),
					'ESTADOCIVIL' => array(
						'*',
					),
					'ESCOLARIDAD' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'*',
					),
					'OCUPACION' => array(
						'*',
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
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_CARGO'
					),
					'PERIODICO' => array(
						'*',
						'CANTIDAD AS CANTIDADPERIODICO'
					),
					'TIPOPERIODO' => array(
						'*'
					),
					'CONVINGRESO' => array(
						'*',
						'CANTIDAD AS CANTIDADINGRESO'
					),
					'MONEDA' => array(
						'TIM_MIN AS MONEDAPERIODICO'
					),
					'BECA' => array(
						'BECA_MIN AS BECAPERIODICO'
					),
					'MONEDAINGRESO' => array(
						'TIM_MIN AS MONEDAINGRESO'
					),
					'BECAINGRESO' => array(
						'BECA_MIN AS BECAINGRESO'
					),
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/notaingreso') => 'INGRESO'
				),
				'join' => array(
					$this->_config->obtener('dbnombres/usuarios') => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
					$this->_config->obtener('dbcatalogos/tipoingreso') => array(
						'ALIAS' => 'TIPOINGRESO',
						'ON' => 'TII_ID'
					),
					$this->_config->obtener('dbcatalogos/codigopostal') => array(
						'ALIAS' => 'CODIGOPOSTAL',
						'ON' => 'COP_ID'
					),											
					$this->_config->obtener('dbcatalogos/estadocivil') => array(
						'ALIAS' => 'ESTADOCIVIL',
						'ON' => 'ESC_ID'
					),
					$this->_config->obtener('dbcatalogos/escolaridad') => array(
						'ALIAS' => 'ESCOLARIDAD',
						'ON' => 'ESO_ID'
					),
					$this->_config->obtener('dbcatalogos/ocupacion') => array(
						'ALIAS' => 'OCUPACION',
						'ON' => 'OCU_ID'
					),
					$this->_config->obtener('dbnombres/pacientes') => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					$this->_config->obtener('dbnombres/convenioperiodico') => array(
						'ALIAS' => 'PERIODICO',
						'ON' => 'NING_ID'
					),
					$this->_config->obtener('dbnombres/convenioingreso') => array(
						'ALIAS' => 'CONVINGRESO',
						'ON' => 'NING_ID'
					),
				),
				'repetir' => array(
					array
					(
						'desde' => array(
						$this->_config->obtener('dbnombres/pacientes') => 'PACIENTE'
						),
						'join' => array(
							$this->_config->obtener('dbcatalogos/sexo') => array(
								'ALIAS' => 'SEXO',
								'ON' => 'SEX_ID'
							),
							$this->_config->obtener('dbcatalogos/entidades') => array(
								'ALIAS' => 'ENTIDADES',
								'ON' => 'ENF_ID'
							),											
							$this->_config->obtener('dbcatalogos/nacionalidad') => array(
								'ALIAS' => 'NACIONALIDAD',
								'ON' => 'NAC_ID'
							),
						),
					),
					array
					(
						'desde' => array(
						$this->_config->obtener('dbnombres/convenioperiodico') => 'PERIODICO'
						),
						'join' => array(
							$this->_config->obtener('dbcatalogos/tipomoneda') => array(
								'ALIAS' => 'MONEDA',
								'ON' => 'TIM_ID'
							),
							$this->_config->obtener('dbcatalogos/beca') => array(
								'ALIAS' => 'BECA',
								'ON' => 'BECA_ID'
							),
							$this->_config->obtener('dbcatalogos/tipoperiodo') => array(
								'ALIAS' => 'TIPOPERIODO',
								'ON' => 'PER_ID'
							),
						),
					),
					array
					(
						'desde' => array(
						$this->_config->obtener('dbnombres/convenioingreso') => 'CONVINGRESO'
						),
						'join' => array(
							$this->_config->obtener('dbcatalogos/tipomoneda') => array(
								'ALIAS' => 'MONEDAINGRESO',
								'ON' => 'TIM_ID'
							),
							$this->_config->obtener('dbcatalogos/beca') => array(
								'ALIAS' => 'BECAINGRESO',
								'ON' => 'BECA_ID'
							),
						),
					)

				),
				'where' => array('INGRESO.NING_ID','=',$ning)
			)	
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$notaIngreso = (object) $this->_result->getFirstObj($datos);

			return (object) array(
				'CENTRO' => $this->_centro->obtener(),
				'FORMATO' => $notaIngreso,
				'FAMILIAR' => $this->_familiares->obtener($notaIngreso->PAC_ID)
			);
		}

		return false;
	}
}