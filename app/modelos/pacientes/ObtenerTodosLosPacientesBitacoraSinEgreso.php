<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultObj};
use \app\modelos\pacientes\{ObtenerPacienteporID};

class ObtenerTodosLosPacientesBitacoraSinEgreso
{
	private $_db,
			$_count,
			$_result,
			$_pacientes,
			$_paciente;

	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj,
		ObtenerPacienteporID $ObtenerPacienteporID
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result =$DBResultObj;
		$this->_paciente = $ObtenerPacienteporID;
	}

	public function obtener()
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_PACIENTE_PAC', 
				//'limit' =>  1, 
				//'orderby' => 'PAC_ID', 
				//'order' => '', 
				//'where' => array('USU_CORREO','=', $correo),
				//'and' => array('', '', '')
				), 
			array(
				'PAC_ID'
				)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$pacientes = $this->_result->getObj($datos);
			
			$idsIngreso = array();

			//SI HAY PACIENTES ENTONCES BUSCAMOS HOJAS DE INGRESO Y EGRESO

			//PRIMERO SI ESTA INGRESADO POR CAD NOTA DE INGRESO BUSCAMOS SU CORRESPONDIENTE NOTA DE EGRESO

			foreach ($pacientes as $value)
			{
				$ingresos = $this->_db->get(
					array(
						'table' => 'DAT_NINGRESO_NING', 
						//'limit' =>  1, 
						//'orderby' => 'PAC_ID', 
						//'order' => '', 
						'where' => array('PAC_ID','=', $value->PAC_ID),
						//'and' => array('', '', '')
						), 
					array(
						'PAC_ID','NING_ID'
						)
				);

				if($this->_count->getCount($datos) !== 0)
				{
					$notasdeingreso = $this->_result->getObj($ingresos);
				
					//BUSCAR NOTAS DE EGRESO POR CADA NOTA DE INGRESO ENCONTRADA

					foreach ($notasdeingreso as $ningreso)
					{
						$egresos = $this->_db->get(
							array(
								'table' => 'DAT_NEGRESO_NEGR', 
								//'limit' =>  1, 
								//'orderby' => 'PAC_ID', 
								//'order' => '', 
								'where' => array('NING_ID','=', $ningreso->NING_ID),
								//'and' => array('', '', '')
								), 
							array(
								'NEGR_ID'
								)
						);

						if($this->_count->getCount($egresos) == 0)
						{
							$idsIngreso[$ningreso->PAC_ID] = $ningreso->NING_ID;
						}
					}
					
				}


			} // FIN DEL FOREACH()

			if(!empty($idsIngreso))
			{
				return $this->obtenerTodoslosDatos($idsIngreso);
			}


		} //FIN DE IF()

		return false;
	}

	public function obtenerTodoslosDatos($pacientes = array())
	{
		$datos = array();

		foreach ($pacientes as $key => $value)
		{
			$datos[$value] = $this->_paciente->obtener($key);			
		}

		return $datos;
	}
}