<?php
namespace app\controladores;
use \app\modelos\paciente\{DatosAportacionesPorExpediente};
use \app\modelos\vista\Vista;
/**
 * 
 */
class VerAportacionesDelPaciente
{
	private $_vista,
			$_aportaciones;
	
	public function __construct
	(
		DatosAportacionesPorExpediente $DatosAportacionesPorExpediente,
		Vista $Vista
	)
	{
		$this->_aportaciones = $DatosAportacionesPorExpediente;
		$this->_vista = $Vista;
	}

	public function Index($ning): void
	{
		$this->_vista->ver(
			array(
				'template/HeaderTables',
	 			'template/Nav'
	 		)
		);

		if(isset($ning) && is_numeric($ning))
		{
			if($aportaciones = $this->_aportaciones->obtener($ning))
 			{
 				$this->_vista->ver(
		 			array(
		 				'expediente/TablaDeAportacionesDelExpediente'
		 			), (object) array(
		 				'APORTACIONES' => $aportaciones,
		 			)
 				);
 			}
 			else
 			{
 				$this->_vista->ver(
					array(
						'template/SinRegistros'
			 		)
				);
 			}
		}
		else
		{
			$this->_vista->ver(
				array(
					'template/SinRegistros'
		 		)
			);
		}
		$this->_vista->ver(
			array(
				'template/FooterTablesAportaciones'
	 		)
		);	
		
	}
}