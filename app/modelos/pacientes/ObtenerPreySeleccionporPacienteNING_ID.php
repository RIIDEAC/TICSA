<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultObj};

class ObtenerPreySeleccionporPacienteNING_ID
{
	private $_db,
			$_count,
			$_result,
			$_resultados = array();

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
				'PAC_ID'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{

			$this->formatos('DAT_ASSIST_ASS',$id,array('ASS_ID','FECHA_REGISTRO'),'ASSIST');
			$this->formatos('DAT_SCL90_SCL',$id,array('SCL_ID','FECHA_REGISTRO'),'SCL90');
			$this->formatos('DAT_BAIBECK_BAI',$id,array('BAI_ID','FECHA_REGISTRO'),'BAIBECK');
			$this->formatos('DAT_BDIBECK_BDI',$id,array('BDI_ID','FECHA_REGISTRO'),'BDIBECK');
			$this->formatos('DAT_SATISFACCIONVIDA_SAT',$id,array('SAT_ID','FECHA_REGISTRO'),'SATISFACCION');
			$this->entrevista($id);		
			
			//SI EXISTEN TODAS LAS PRUEBAS DE formatos ENTONCES DEVOLVEMOS PARA QUE EL USUARIO ELIJA CUALES DESEA INTEGRAR
			
			if(count($this->_resultados) == 6)
			{
				return $this->_resultados;
			}
		}

		return false;	
	}

	protected function formatos($table,$id,$columnas,$nombre)
	{
		//BUSCAR EN LA TABLA
		$datos = $this->_db->get(
			array(
				'table' => $table, 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id),
				//'and' => array('', '', '')
				), 
			$columnas
		);

		if($this->_count->getCount($datos) !== 0)
		{
			//SI HAY RESULTADOS
			$this->_resultados[$nombre] = $this->_result->getObj($datos);
		}

		return false;
	}

	protected function entrevista($id)
	{
		$tablas =  array(
		'DAT_EINICIALI_EINI' => 'EINI_ID',
        'DAT_EINICIALII_EINII' => 'EINII_ID',
        'DAT_EINICIALIII_EINIII' => 'EINIII_ID',
        'DAT_EINICIALIV_EINIV' => 'EINIV_ID',
        'DAT_EINICIALV_EINV' => 'EINV_ID',
        'DAT_EINICIALVI_EINVI' => 'EINVI_ID',
        'DAT_EINICIALVII_EINVII' => 'EINVII_ID',
        'DAT_EINICIALVIII_EINVIII' => 'EINVIII_ID'
		);

		$x=0;

		foreach ($tablas as $key => $value)
		{
			$x++;

			$datos = $this->_db->get(
			array(
				'table' => $key, 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id),
				//'and' => array('', '', '')
				), 
			array(
				$value,'FECHA_REGISTRO'
				)
			);

			if($this->_count->getCount($datos) !== 0)
			{
				//SI HAY RESULTADOS
				$entrevista[$x] = $this->_result->getObj($datos);
			}
		}

		if(count($entrevista) == 8)
		{
			$this->_resultados['ENTREVISTA'] = $entrevista;
		}

		return false;
	}
}