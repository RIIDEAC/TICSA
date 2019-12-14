<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultFirst};
use \app\nucleo\Config;
/**
 * 
 */
class ObtenerConvenioPeriodicoPorNING_ID
{
	
	private $_config,
			$_db,
			$_count,
			$_result;

	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst,
		Config $Config
	)
	{
		$this->_config = $Config;
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
	}

	public function obtener(int $ning_id)
	{

	$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'CONVENIO' => array(
						'*',
					),
					'MONEDA' => array(
						'*',
					),
					'PERIODO' => array(
						'*',
					),
					'BECA' => array(
						'*',
					),
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/convenioperiodico') => 'CONVENIO'
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
						'ALIAS' => 'PERIODO',
						'ON' => 'PER_ID'
					)
				),
				'where' => array('CONVENIO.NING_ID','=',$ning_id),
			)	
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_result->getFirstObj($datos);
		}

		return false;
	}
}