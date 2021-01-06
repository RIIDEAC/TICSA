<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBInsert};
use \app\modelos\paciente\{DatosNotaDeIngresoSinRl};
/**
 * 
 */
class RegistrarNotaDeEvoluacionGrupalConsejeria
{
	private $_db,
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

		$ids = $datos['NING_ID'];

		unset($datos['NING_ID']);
		
		$datos['USU_ID'] = $_SESSION['id'];

		$fechaRegistro = $datos['FECHA_SESION'];

		if($idNota = $this->_db->registrar('DAT_NOTACONGRU_NCG', $datos))
		{
			$x=0;

			unset($datos);

			foreach ($ids as $value)
			{
				$datos['NCG_ID'] = $idNota;
				$datos['PAC_ID'] = $this->_paciente->obtener($value)->PAC_ID;
				$datos['NING_ID'] = $value;
				$datos['FECHA_CAPTURA'] = $fechaRegistro;

				$this->_db->registrar('DAT_CONSEJERIAGRUPALPAC_CGP', $datos);					
			}

			return true;
			
		}

		return false;
	}
}
