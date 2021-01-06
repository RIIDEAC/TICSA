<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\paciente\{DatosPacientesActivos,DatosDeAdeudoAportacionesPacientes};
/**
 * 
 */
class BalancesPacientesActivos
{
	private $_vista,
			$_pacientes,
			$_balance;
	
	public function __construct
	(
		VistaToken $Vista,
		DatosPacientesActivos $DatosPacientesActivos,
		DatosDeAdeudoAportacionesPacientes $DatosDeAdeudoAportacionesPacientes
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientesActivos;
		$this->_balance = $DatosDeAdeudoAportacionesPacientes;
	}

	public function Index($ning = null): void
	{
		$this->_vista->ver(
			array(
				'template/HeaderSelect',
	 			'template/Nav'
	 		)
		);

		if($pacientes = $this->_pacientes->obtener())
		{
			if($ning && is_numeric($ning))
			{
				$balance = $this->_balance->obtener($ning);
			}
			else
			{
				$balance = [];
			}

			$this->_vista->ver(
	 		array(
	 				'expediente/BalancesPacientes',
	 			), (object) array(
	 				'PACIENTES' => $pacientes,
	 				'BALANCE' => $balance,
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
	 	$this->_vista->ver(
			array(
				'template/FooterSelect'
	 		)
		);
	 	
	}	
}
