<?php
namespace app\modelos\ticket;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultObj};
use \app\nucleo\Config;
use \app\modelos\usuarios\{ObtenerDatosUsuarioporID,ObtenerDatosUsuarioporCorreo};

class ObtenerTodoslosTicketsAbiertosporUsuario
{
	private $_db,
			$_count,
			$_result,
			$_config;

	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj,
		Config $Config,
		ObtenerDatosUsuarioporID $ObtenerDatosUsuarioporID,
		ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
		$this->_config = $Config;
		$this->_responsable = $ObtenerDatosUsuarioporID;
		$this->_usuario = $ObtenerDatosUsuarioporCorreo;
	}

	public function obtener($id = null)
	{
		if(!$id)
		{
			$id = $this->_usuario->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ID;
		}

		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'TICKET' => array(
						'*'	
					),
					'PACIENTE' => array(
						'PAC_PATERNO',
						'PAC_MATERNO',
						'PAC_NOMBRE',
					),
					'USUARIO' => array(
						'USU_CORREO AS CORREO'
					),
					
				),
				'desde' => array(
					'DAT_TICKET_TIC' => 'TICKET'
				),
				'join' => array(
					'DAT_PACIENTE_PAC' => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
				),
				'where' => array('TIC_ESTADO','=',1),
				'and' => array(
					array('RESPONSABLE_ID','=',$id),
				),
			)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$datos=  $this->_result->getObj($datos);
			
			foreach ($datos as $key => $value)
			{
				$value->RESPONSABLE_ID = $this->_responsable->obtener($value->RESPONSABLE_ID)->USU_CORREO;
			}
			
			return $datos;
		}

		return false;
	}
}