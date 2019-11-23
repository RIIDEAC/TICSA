<?php
namespace app\controladores;
use \app\modelos\vista\VistaConToken;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\centro\ObtenerDatosCentro;
/**
 * 
 */
class CapturarDatosCentro
{
	private 	$_vista,
				$_menu,
				$_redirigir,
				$_centro;

	public function __construct
	(
		VistaConToken $VistaConToken, 
		MenuporPermisos $MenuporPermisos,
		ObtenerDatosCentro $ObtenerDatosCentro
	)
	{
		$this->_vista = $VistaConToken;
		$this->_menu = $MenuporPermisos;
		$this->_centro = $ObtenerDatosCentro;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if(!$this->_centro->obtener())
		{
			$this->_vista->ver('centro/CapturarDatosCentro');
		}
		else 
		{
			$this->_vista->ver('plantilla/RegistroyaRealizado');
		}		
		$this->_vista->ver('plantilla/Footer');
	}
}