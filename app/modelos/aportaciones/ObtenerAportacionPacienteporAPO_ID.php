<?php
namespace app\modelos\aportaciones;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};
use \app\libreria\traductor\FormatosString;

class ObtenerAportacionPacienteporAPO_ID
{
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst,
		FormatosString $FormatosString
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_formato = $FormatosString;
	}

	public function obtener($id)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_APORTACION_APO', 
				//'limit' =>  1, 
				//'orderby' => 'FAM_PATERNO', 
				//'order' => '', 
				'where' => array('APO_ID','=', $id),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$formato = $this->_result->getFirstObj($datos);

			foreach ($formato as $key => $value)
			{
				if($data = $this->_formato->obtener($key.'/'.$value))
				{
					$formato->{$key} = $data;
				}
			}

			return $formato;
		}

		return false;
	}
}