<?php
namespace app\controladores;
use \app\modelos\vista\VistaConToken;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\ObtenerTodoslosPacientesSinIngreso;
use \app\modelos\catalogos\ObtenerCatalogos;
/**
 * 
 */
class CapturarClinicoNotadeIngreso
{
	private 	$_vista,
				$_menu,
				$_redirigir,
				$_pacientes;

	public function __construct
	(
		VistaConToken $VistaConToken, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodoslosPacientesSinIngreso $ObtenerTodoslosPacientesSinIngreso,
		ObtenerCatalogos $ObtenerCatalogos
	)
	{
		$this->_vista = $VistaConToken;
		$this->_menu = $MenuporPermisos;
		$this->_pacientes = $ObtenerTodoslosPacientesSinIngreso;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($pacientes = $this->_pacientes->obtener())
		{
			$catalogos = $this->_catalogos->obtener
			(
				array(
					'CAT_TIPOINGRESO_TII',
					'CAT_ESTADOCIVIL_ESC',
					'CAT_ESCOLARIDAD_ESO',
					'CAT_OCUPACION_OCU',
				)
			);
			$this->_vista->ver('paciente/CapturarClinicoNotadeIngreso',
				(object)
				array(
					'PACIENTES' => $pacientes,
					'CATALOGOS' => $catalogos,
				)
			);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}		
		$this->_vista->ver('plantilla/Footer');
	}
}