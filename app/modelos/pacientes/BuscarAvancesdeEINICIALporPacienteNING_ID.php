<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};
use \app\modelos\pacientes\ObtenerPacienteporID;

class BuscarAvancesdeEINICIALporPacienteNING_ID
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
				'table' => 'DAT_EINICIALI_EINI', 
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
		$resultados[3] = $this->parte3($id);
		$resultados[4] = $this->parte4($id);
		$resultados[5] = $this->parte5($id);
		$resultados[6] = $this->parte6($id);
		$resultados[7] = $this->parte7($id);
		$resultados[8] = $this->parte8($id);
		
		return $resultados;
	}

	protected function parte2($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_EINICIALII_EINII', 
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
	protected function parte3($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_EINICIALIII_EINIII', 
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
	protected function parte4($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_EINICIALIV_EINIV', 
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
	protected function parte5($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_EINICIALV_EINV', 
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
	protected function parte6($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_EINICIALVI_EINVI', 
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
	protected function parte7($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_EINICIALVII_EINVII', 
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
	protected function parte8($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_EINICIALVIII_EINVIII', 
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