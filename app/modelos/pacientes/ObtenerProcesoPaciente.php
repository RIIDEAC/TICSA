<?php
namespace app\modelos\pacientes;
use \app\libreria\traductor\FormatosString;
use \app\modelos\formatos\{ObtenerNotadeIngreso,ObtenerNotadeEgresoporNING_ID};
use \app\modelos\pacientes\{ObtenerEdadPacienteporNING_ID};
/**
 * 
 */
class ObtenerProcesoPaciente
{
	
	public function __construct
	(
		FormatosString $FormatosString,
		ObtenerNotadeIngreso $ObtenerNotadeIngreso,
		ObtenerNotadeEgresoporNING_ID $ObtenerNotadeEgresoporNING_ID,
		ObtenerEdadPacienteporNING_ID $ObtenerEdadPacienteporNING_ID
	)
	{
		$this->_formatos = $FormatosString;
		$this->_notaingreso = $ObtenerNotadeIngreso;
		$this->_notaegreso = $ObtenerNotadeEgresoporNING_ID;
		$this->_edad = $ObtenerEdadPacienteporNING_ID;
	}

	public function obtener($id)
	{
		return array(
			'GENERAL' => $this->general($id),
			'CLINICO' => $this->clinico($id),
			'CONSEJERIA' => $this->consejeria($id),
			'PSICOLOGIA' => $this->psicologia($id),
			'TICKETS' => $this->tickets($id),
			'APORTACIONES' => $this->aportaciones($id),
		);
	}

	public function general($id)
	{
		$resultados['EDAD'] = $this->_edad->actual($id);

		return (object) $resultados;
	}

	public function clinico($id)
	{
		if($notaIngreso = $this->_notaingreso->obtener($id))
		{			
			$resultados['NOTAINGRESO'] = $notaIngreso;

			$resultados['NOTAINGRESO']->EDAD = $this->_edad->ingreso($id);
		}
		if($notaEgreso = $this->_notaegreso->obtener($id))
		{			
			$resultados['NOTAEGRESO'] = $notaEgreso;
			$resultados['NOTAEGRESO']->EDAD = $this->_edad->egreso($id);
		}

		if(count($resultados))
		{
			return (object) $resultados;
		}

		return false;
	}

	public function consejeria($id)
	{
		
	}

	public function psicologia($id)
	{

	}

	public function tickets($id)
	{

	}

	public function aportaciones($id)
	{

	}
}