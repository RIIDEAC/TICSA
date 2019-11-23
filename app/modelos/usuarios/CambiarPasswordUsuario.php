<?php
namespace app\modelos\usuarios;
use \app\modelos\sql\{DBUpdate};
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
use \app\nucleo\Config;

class CambiarPasswordUsuario 
{
	private $_db,
			$_usu,
			$_config;

	public function __construct
	(
		DBUpdate $DBUpdate,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo,
		Config $Config
	)
	{
		$this->_db = $DBUpdate;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
		$this->_config = $Config;
	}

	public function cambiar($array)
	{
		unset($array['TOKEN']);
		unset($array['USU_PASS']);
		unset($array['RUSU_PASS']);
		
		return $this->_db->update(
		array(
				'TABLE' => 'DAT_USUARIO_USU',
				'SET' => array(
					'USU_PASS' => 
					password_hash($array["NUSU_PASS"], PASSWORD_DEFAULT, ["cost" => 12])
				),
				'WHERE' => array('USU_ID','=',$this->_usu->obtener($_SESSION[$this->_config->obtener("sesion/correo")])->USU_ID)
			)
		);
	}
}