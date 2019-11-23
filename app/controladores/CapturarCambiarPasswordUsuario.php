<?php
namespace app\controladores;
use \app\modelos\vista\VistaConToken;
use \app\modelos\permisos\MenuporPermisos;
/**
 * 
 */
class CapturarCambiarPasswordUsuario
{
	private 	$_vista,
				$_menu,
				$_redirigir;

	public function __construct
	(
		VistaConToken $VistaConToken, 
		MenuporPermisos $MenuporPermisos
	)
	{
		$this->_vista = $VistaConToken;
		$this->_menu = $MenuporPermisos;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		$this->_vista->ver('plantilla/CapturarCambiarPasswordUsuario');
		$this->_vista->ver('plantilla/Footer');
	}
}