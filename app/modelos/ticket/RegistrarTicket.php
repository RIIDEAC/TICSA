<?php
namespace app\modelos\ticket;
use \app\nucleo\Config;
use \app\modelos\sql\DBInsert;
use \app\modelos\usuarios\{ObtenerDatosUsuarioporCorreo};
/**
 * 
 */
class RegistrarTicket
{
	private $_config,	
			$_db,
			$_usu,
			$_ingresos,
			$_egresos,
			$_icurp;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
		$this->_usu = $ObtenerDatosUsuarioporCorreo;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);
		
		$data['USU_ID'] = $this->_usu->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;

		if($data['TIC_ESTADO'] == '2')
		{
			$data['FECHA_CIERRE'] = date("Y-m-d");
		}

		if($this->_db->registrar($this->_config->obtener('dbnombres/ticket'), $data))
		{
			return true;
		}
		

		return false;
	}
}
