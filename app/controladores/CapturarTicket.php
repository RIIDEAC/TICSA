<?php
namespace app\controladores;
use \app\modelos\vista\VistaConToken;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\ObtenerTodosLosPacientes;
use \app\modelos\usuarios\ObtenerTodosLosUsuarios;
/**
 * 
 */
class CapturarTicket
{
	private 	$_vista,
				$_menu,
				$_redirigir,
				$_pacientes,
				$_usuarios;

	public function __construct
	(
		VistaConToken $VistaConToken, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodosLosPacientes $ObtenerTodosLosPacientes,
		ObtenerTodosLosUsuarios $ObtenerTodosLosUsuarios
	)
	{
		$this->_vista = $VistaConToken;
		$this->_menu = $MenuporPermisos;
		$this->_pacientes = $ObtenerTodosLosPacientes;
		$this->_usuarios = $ObtenerTodosLosUsuarios;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($pacientes = $this->_pacientes->obtener())
		{
			$this->_vista->ver('ticket/CapturarTicket',['PACIENTES' => $pacientes, 'USUARIOS' => $this->_usuarios->obtener()]);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}		
		$this->_vista->ver('plantilla/Footer');
	}
}