<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosPacientes;
/**
 * 
 */
class CapturarDatosFamiliar
{
	private $_vista,
			$_catalogos,
			$_pacientes;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosPacientes $DatosPacientes
	)
	{
		$this->_vista = $Vista;
		$this->_catalogos = $ObtenerCatalogos;
		$this->_pacientes = $DatosPacientes;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
				'template/HeaderSelect',
	 			'template/Nav'
	 		)
		);
		if($pacientes = $this->_pacientes->obtener())
		{
			$this->_vista->ver(
		 		array(
		 				'paciente/CapturarDatosFamiliar',
		 			),
		 		(object) array( 
		 		'CATALOGOS' => $this->_catalogos->obtener(
		 			array(
		 				'CAT_ENTIDADFEDERATIVA_ENF', 
		 				'CAT_NACIONALIDAD_NAC',
		 				'CAT_SEXO_SEX',
		 				'CAT_PARENTESCO_PAE'
		 			)), 'PACIENTES' => $pacientes)
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
