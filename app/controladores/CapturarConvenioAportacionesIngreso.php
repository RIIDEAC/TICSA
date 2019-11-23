<?php
namespace app\controladores;
use \app\modelos\vista\VistaConToken;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\ObtenerTodosLosPacientesSinConvenioIngreso;
/**
 * 
 */
class CapturarConvenioAportacionesIngreso
{
	private 	$_vista,
				$_menu,
				$_redirigir,
				$_pacientes;

	public function __construct
	(
		VistaConToken $VistaConToken, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodosLosPacientesSinConvenioIngreso $ObtenerTodosLosPacientesSinConvenioIngreso
	)
	{
		$this->_vista = $VistaConToken;
		$this->_menu = $MenuporPermisos;
		$this->_pacientes = $ObtenerTodosLosPacientesSinConvenioIngreso;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($pacientes = $this->_pacientes->obtener())
		{
			$this->_vista->ver('paciente/CapturarConvenioAportacionesIngreso',$pacientes);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}	
		$this->_vista->ver('plantilla/Footer');
	}
}