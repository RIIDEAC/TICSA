<?php
namespace app\modelos\instrumentos;
use stdClass;

class CalificarENTREVISTAINICIAL
{
	private $_parte,
			$_datosEntrevista;

	private $fields = array(
			'1' => array(
			'SALARIO',
			'EMPLEO',
			'DESEMPLEADO',
			'TIEMPODESEMPLEADO',
			'DEPENDE',
			'DEPENDEPAREJA',
			'DEPENDEHIJOS',
			'DEPENDEPADRES',
			'DEPENDEFAMILIA',
			'DEPENDIENTES',
			'DEPENDIENTESPAREJA',
			'DEPENDIENTESHIJOS',
			'DEPENDIENTESPADRES',
			'DEPENDIENTESFAMILIARES',
			'VIVEPAREJA',
			'VIVEHIJOS',
			'VIVEPADRES',
			'VIVEFAMILIA',
			'PAREJA',
			'TIEMPORELACION',
		),	
	);

	public function obtener(object $array, int $parte)
	{
		$this->_parte = $parte;
		$this->_datosEntrevista = $array;

		return $this->{'Calificar'.$parte}($array);
	}

	public function Calificar1($array)
	{
		$resultados = new stdClass;

		if($array->DESEMPLEADO == 1)
		{
			$resultados->DESEMPLEADO = 'Sí, hace'.$array->TIEMPODESEMPLEADO.' meses';
		}
		else
		{
			$resultados->DESEMPLEADO = 'No';
		}

		if($array->DEPENDE == 1)
		{
			$resultados->DEPENDE = 'Sí';

			//DE QUIENES
			if($array->DEPENDEPAREJA == 1)
			{
				$resultados->DEPENDE = $resultados->DEPENDE. ', de la pareja';
			}
			if($array->DEPENDEHIJOS == 1)
			{
				$resultados->DEPENDE = $resultados->DEPENDE. ', de hijos';
			}
			if($array->DEPENDEPADRES == 1)
			{
				$resultados->DEPENDE = $resultados->DEPENDE. ', de los padres';
			}
			if($array->DEPENDEFAMILIA == 1)
			{
				$resultados->DEPENDE = $resultados->DEPENDE. ', de familiares o amigos';
			}

		}
		else
		{
			$resultados->DEPENDE = 'No';
		}
//**************************
		if($array->DEPENDIENTES == 1)
		{
			$resultados->DEPENDIENTES = 'Sí';

			//QUIENES
			if($array->DEPENDIENTESPAREJA == 1)
			{
				$resultados->DEPENDIENTES = $resultados->DEPENDIENTES. ', de la pareja';
			}
			if($array->DEPENDIENTESHIJOS == 1)
			{
				$resultados->DEPENDIENTES = $resultados->DEPENDIENTES. ', de hijos';
			}
			if($array->DEPENDIENTESPADRES == 1)
			{
				$resultados->DEPENDIENTES = $resultados->DEPENDIENTES. ', de los padres';
			}
			if($array->DEPENDIENTESFAMILIA == 1)
			{
				$resultados->DEPENDIENTES = $resultados->DEPENDIENTES. ', de familiares o amigos';
			}

		}
		else
		{
			$resultados->DEPENDIENTES = 'No';
		}

		if($array->VIVESOLO == 0)
		{
			$resultados->VIVE = 'Vive con ';

			//QUIENES
			if($array->VIVEPAREJA == 1)
			{
				$resultados->VIVE = $resultados->VIVE. ',pareja';
			}
			if($array->VIVEHIJOS == 1)
			{
				$resultados->VIVE = $resultados->VIVE. ',hijos';
			}
			if($array->VIVEPADRES == 1)
			{
				$resultados->VIVE = $resultados->VIVE. ',padres';
			}
			if($array->VIVEFAMILIA == 1)
			{
				$resultados->VIVE = $resultados->VIVE. ',familiares o amigos';
			}

		}
		else
		{
			$resultados->VIVE = 'El paciente vive sólo';
		}

		

		return $resultados;
	}


}