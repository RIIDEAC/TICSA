<?php
namespace app\modelos\formatos;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultFirst};
use \app\modelos\centro\ObtenerDatosCentro;
use \app\nucleo\{Config};
use \app\modelos\instrumentos\CalificarASSIST;

class ObtenerASSIST
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
		CalificarASSIST $CalificarASSIST
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_config = $Config;
		$this->_centro = $ObtenerDatosCentro;
		$this->_calificar = $CalificarASSIST;
	}

	public function obtener($id)
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'ASSIST' => array(
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
					$this->_config->obtener('dbnombres/assist') => 'ASSIST'
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
				'where' => array('ASSIST.ASS_ID','=',$id)
			)	
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$assit = (object) $this->_result->getFirstObj($datos);
			$calificacion = $this->_calificar->obtener($assit);

			return (object) array(
				'CENTRO' => $this->_centro->obtener(),
				'FORMATO' => $assit,
				'RESULTADOS' => $calificacion
			);
		}

		return false;
	}
}