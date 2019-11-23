<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\ObtenerTodosLosFamiliares;

class BitacoraFamiliaresRegistrados
{
	private $_vista,
			$_menu,
			$_familiares,
			$_formatos;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodosLosFamiliares $ObtenerTodosLosFamiliares
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_familiares = $ObtenerTodosLosFamiliares;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($familiares = $this->_familiares->obtener())
		{
			$this->_vista->ver('pacientes/BitacoraFamiliaresRegistrados', $familiares);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}		
		$this->_vista->ver('plantilla/Footer');
	}
}