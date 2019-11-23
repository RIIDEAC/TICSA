<?php
namespace app\modelos\pacientes;
use \app\modelos\fechas\CalcularEdadporFechadeNacimiento;
use \app\modelos\pacientes\{ObtenerDatosPacienteporNING_ID,ObtenerDatosNotaEgresoporNING_ID,ObtenerDatosNotaIngresoporNING_ID};
/**
 * 
 */
class ObtenerEdadPacienteporNING_ID
{
	
	public function __construct
	(
		CalcularEdadporFechadeNacimiento $CalcularEdadporFechadeNacimiento,
		ObtenerDatosPacienteporNING_ID $ObtenerDatosPacienteporNING_ID,
		ObtenerDatosNotaEgresoporNING_ID $ObtenerDatosNotaEgresoporNING_ID,
		ObtenerDatosNotaIngresoporNING_ID $ObtenerDatosNotaIngresoporNING_ID
	)
	{
		$this->_edad = $CalcularEdadporFechadeNacimiento;
		$this->_paciente = $ObtenerDatosPacienteporNING_ID;
		$this->_egreso = $ObtenerDatosNotaEgresoporNING_ID;
		$this->_ingreso = $ObtenerDatosNotaIngresoporNING_ID;
	}

	public function actual($ning)
	{
		$fechaEgreso = date("Y-m-d");

		$fechaNacimiento = $this->_paciente->obtener($ning)->PAC_FNACIMIENTO;

		return $this->_edad->obtener($fechaNacimiento,$fechaEgreso);
	}

	public function egreso($ning)
	{
		$fechaEgreso = $this->_egreso->obtener($ning)->PAC_FEGRESO;

		$fechaNacimiento = $this->_paciente->obtener($ning)->PAC_FNACIMIENTO;

		return $this->_edad->obtener($fechaNacimiento,$fechaEgreso);
	}

	public function ingreso($ning)
	{
		$fechas = $this->_paciente->obtener($ning);

		$fechaNacimiento = $fechas->PAC_FNACIMIENTO;
		$fechaEgreso = $this->_ingreso->obtener($ning)->PAC_FINGRESO;


		return $this->_edad->obtener($fechaNacimiento,$fechaEgreso);
	}
}