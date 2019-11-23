<?php
namespace app\controladores;
use \app\modelos\vista\VistaConToken;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\ObtenerTodosLosPacientes;
use \app\modelos\catalogos\ObtenerCatalogos;
/**
 * 
 */
class CapturarPacienteFamiliar
{
	private 	$_vista,
				$_menu,
				$_pacientes;

	public function __construct
	(
		VistaConToken $VistaConToken, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodosLosPacientes $ObtenerTodosLosPacientes,
		ObtenerCatalogos $ObtenerCatalogos
	)
	{
		$this->_vista = $VistaConToken;
		$this->_menu = $MenuporPermisos;
		$this->_pacientes = $ObtenerTodosLosPacientes;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($pacientes = $this->_pacientes->obtener())
		{
			$catalogos = $this->_catalogos->obtener(
						array(
							'CAT_SEXO_SEX',
							'CAT_ENTIDADFEDERATIVA_ENF',
							'CAT_NACIONALIDAD_NAC',
							'CAT_PARENTESCO_PAE',
						)
			);
			$this->_vista->ver('paciente/CapturarPacienteFamiliar', 
				(object) 
				array
				(
					'PACIENTES' => $pacientes,
					'CATALOGOS' => $catalogos
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