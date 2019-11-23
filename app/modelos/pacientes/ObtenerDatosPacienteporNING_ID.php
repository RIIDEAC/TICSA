<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};
use \app\modelos\pacientes\ObtenerPacienteporID;

class ObtenerDatosPacienteporNING_ID
{
	private $_db,
			$_count,
			$_result,
			$_paciente;

	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst,
		ObtenerPacienteporID $ObtenerPacienteporID
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_paciente = $ObtenerPacienteporID;
	}

	public function obtener($id = null)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_NINGRESO_NING', 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_paciente->obtener($this->_result->getFirstObj($datos)->PAC_ID);
		}

		return false;
	}
}