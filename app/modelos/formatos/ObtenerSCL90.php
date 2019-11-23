<?php
namespace app\modelos\formatos;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultFirst};
use \app\modelos\centro\ObtenerDatosCentro;
use \app\nucleo\{Config};
use \app\modelos\instrumentos\CalificarSCL90;

class ObtenerSCL90
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
		CalificarSCL90 $CalificarSCL90
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_config = $Config;
		$this->_centro = $ObtenerDatosCentro;
		$this->_calificar = $CalificarSCL90;
	}

	public function obtener(int $id)
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'SCL90' => array(
						'*',
					),
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
						'USU_CARGO',
					),
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/scl90') => 'SCL90'
				),
				'join' => array(
					$this->_config->obtener('dbnombres/usuarios') => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
					$this->_config->obtener('dbnombres/notaingreso') => array(
						'ALIAS' => 'INGRESO',
						'ON' => 'NING_ID'
					),
					$this->_config->obtener('dbnombres/pacientes') => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					)
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
						$this->_config->obtener('dbnombres/notaingreso') => 'INGRESO'
						),
						'join' => array(
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
						),
					)		
				),
				'where' => array('SCL90.SCL_ID','=',$id)
			)	
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$prueba = (object) $this->_result->getFirstObj($datos);
			$calificacion = $this->_calificar->obtener($prueba);

			return (object) array(
				'CENTRO' => $this->_centro->obtener(),
				'FORMATO' => $prueba,
				'RESULTADOS' => $calificacion
			);
		}

		return false;
	}
}