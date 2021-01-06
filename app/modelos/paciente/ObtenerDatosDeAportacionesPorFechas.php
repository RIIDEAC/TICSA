<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultObj,DBResultCount};
/**
 * 
 */
class ObtenerDatosDeAportacionesPorFechas
{
	private $_db,
			$_count,
			$_result;

	public function __construct
	(
		DBGet $DBGet,
		DBResultCount $DBResultCount,
		DBResultObj $DBResultObj
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
	}

	/**
	 * @param null|string $fechatermino
	 *
	 * @return \stdClass|false
	 */
	public function obtener($ning, $fechainicio = null, ?string $fechatermino = null)
	{
		$datos = $this->_db->get(
			array(
			'table' => 'DAT_APORTACION_APO', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('NING_ID','=',$ning),
			//'and' => array('', '', ''),
			'between' => array('FECHA_REGISTRO',$fechainicio,$fechatermino),
			), 
		array(
			'*'
			)
		);
		
		if($this->_count->getCount($datos) !== 0)
		{

			return (object) $this->_result->getObj($datos);
		}

		return false;
	}
}