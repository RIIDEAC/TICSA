<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};
use \app\modelos\pacientes\ObtenerPacienteporID;

class BuscarAvancesEntrevistaPsicologicaporPacienteNING_ID
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
				'table' => 'DAT_ENTPSIINI_EPI', 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id),
				//'and' => array('', '', '')
				), 
			array(
				'PAC_ID'
				)
		);

		$resultados[1] = $this->_count->getCount($datos);
		$resultados[2] = $this->parte2($id);
		
		return $resultados;
	}

	protected function parte2($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_ENTPSIINII_EPII', 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id),
				//'and' => array('', '', '')
				), 
			array(
				'PAC_ID'
				)
		);

		return $this->_count->getCount($datos);
	}
}