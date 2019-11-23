<?php
namespace app\modelos\consejeria;
use \app\modelos\instrumentos\{CalificarASSIST,CalificarSCL90,CalificarBAIBECK,CalificarBDIBECK,CalificarSATISFACCION,CalificarENTREVISTAINICIAL};
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};
/**
 * 
 */
class ObtenerResultadosValoracionPacienteporNING_ID
{
	private $_db,
			$_count,
			$_result,
			$_assist,
			$_scl,
			$_bdi,
			$_bai,
			$_entrevista;
	
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst,
		CalificarBAIBECK $CalificarBAIBECK,
		CalificarBDIBECK $CalificarBDIBECK,
		CalificarSCL90 $CalificarSCL90,
		CalificarASSIST $CalificarASSIST,
		CalificarSATISFACCION $CalificarSATISFACCION,
		CalificarENTREVISTAINICIAL $CalificarENTREVISTAINICIAL
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_assist = $CalificarASSIST;
		$this->_scl = $CalificarSCL90;
		$this->_bai = $CalificarBAIBECK;
		$this->_bdi = $CalificarBDIBECK;
		$this->_satisfaccion = $CalificarSATISFACCION;
		$this->_entrevista = $CalificarENTREVISTAINICIAL;
	}

	public function obtener($id_expediente)
	{

		$datos = $this->_db->get(
			array(
				'table' => 'DAT_REPORTEVALORACION_RVA', 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id_expediente),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{

			$valoracion = $this->_result->getFirstObj($datos);

			//SOLICITAMOS TODAS LOS DATOS DE LAS HOJAS

			$resultados['ASSIST'] = $this->_assist->obtener($valoracion->ASS_ID);

			$resultados['SCL'] = $this->_scl->obtener($valoracion->SCL_ID);
			
			$resultados['BAI'] = $this->_bai->obtener($valoracion->BAI_ID);
			
			$resultados['BDI'] = $this->_bdi->obtener($valoracion->BDI_ID);
			
			$resultados['ENTREVISTA'] = $this->_entrevista->obtener(array('2' => $valoracion->EINII_ID, '3' => $valoracion->EINIII_ID, '8' => $valoracion->EINVIII_ID));
			
			$resultados['SATISFACCION'] = $this->_satisfaccion->obtener($valoracion->SAT_ID);

			$resultados['MEDICO'] = $valoracion->OBSERVACIONESMEDICO;
			$resultados['PSIQ'] = $valoracion->OBSERVACIONESPSIQ;
			$resultados['PSIC'] = $valoracion->OBSERVACIONESPSIC;

			return $resultados;
		}

		return false;
	}
}