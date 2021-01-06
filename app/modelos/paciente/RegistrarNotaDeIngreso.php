<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst,DBInsert};
use \DateTime;
/**
 * 
 */
class RegistrarNotaDeIngreso
{
	private $_db,
			$_get,
			$_count,
			$_result;
	
	public function __construct
	(
		DBInsert $DBInsert,
		DBGet $DBGet,
		DBResultCount $DBResultCount,
		DBResultFirst $DBResultFirst
	)
	{
		$this->_db = $DBInsert;
		$this->_get = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
	}

	public function registrar(array $datos): bool
	{
		$paciente = $this->_get->get(
			array(
			'table' => 'DAT_PACIENTE_PAC', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('PAC_ID','=',$datos['PAC_ID']),
			//'and' => array('', '', '')
			), 
			array(
			'PAC_FNACIMIENTO'
			)
		);

		if($this->_count->getCount($paciente) !== 0)
		{

			unset($datos['TOKEN']);
		
			$datos['USU_ID'] = $_SESSION['id'];

			$cumpleanos = new DateTime($this->_result->getFirstObj($paciente)->PAC_FNACIMIENTO);
		    $hoy = new DateTime();
		    $annos = $hoy->diff($cumpleanos);
		    $datos['PAC_EDAD'] = $annos->y;

			if($id = $this->_db->registrar('DAT_NINGRESO_NING', $datos))
			{
				return true;
			}
		}
		
		return false;
	}
}