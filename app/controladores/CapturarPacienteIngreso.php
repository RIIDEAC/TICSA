<?php
namespace app\controladores;
use \app\modelos\vista\VistaConToken;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\catalogos\ObtenerCatalogos;
/**
 * 
 */
class CapturarPacienteIngreso
{
	private 	$_vista,
				$_menu,
				$_redirigir;

	public function __construct
	(
		VistaConToken $VistaConToken, 
		MenuporPermisos $MenuporPermisos,
		ObtenerCatalogos $ObtenerCatalogos
	)
	{
		$this->_vista = $VistaConToken;
		$this->_menu = $MenuporPermisos;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();

		$catalogos = $this->_catalogos->obtener
			(
				array(
					'CAT_SEXO_SEX',
					'CAT_ENTIDADFEDERATIVA_ENF',
					'CAT_NACIONALIDAD_NAC'
				)
			);

		$this->_vista->ver('paciente/CapturarPacienteIngreso',
			(object)
			array('CATALOGOS' => $catalogos)
		);
		
		$this->_vista->ver('plantilla/Footer');
	}
}