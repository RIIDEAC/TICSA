<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
/**
 * 
 */
class RegistrarEntrevistaInicialConsejeria
{
	private $_db,
			$_tables =  array(
				'1' => 'DAT_EINICIALI_EINI',
                '2' => 'DAT_EINICIALII_EINII',
                '3' => 'DAT_EINICIALIII_EINIII',
                '4' => 'DAT_EINICIALIV_EINIV',
                '5' => 'DAT_EINICIALV_EINV',
                '6' => 'DAT_EINICIALVI_EINVI',
                '7' => 'DAT_EINICIALVII_EINVII',
                '8' => 'DAT_EINICIALVIII_EINVIII',
			),
			$_paciente;
	
	public function __construct
	(
		DBInsert $DBInsert,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl
	)
	{
		$this->_db = $DBInsert;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
	}

	public function registrar(array $datos): bool
	{
		unset($datos['TOKEN']);
		
		$datos['USU_ID'] = $_SESSION['id'];

		$datos['PAC_ID'] = $this->_paciente->obtener($datos['NING_ID'])->PAC_ID;

		foreach ($this->_tables as $key => $value)
		{
			if($key == $datos['PARTE'])
			{
				$table = $value;
			}
		}

		unset($datos['PARTE']);

		if($this->_db->registrar($table, $datos))
		{
			return true;
		}
		
		
		return false;
	}
}