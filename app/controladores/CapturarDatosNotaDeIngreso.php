<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosPacientesNoActivos;
/**
 * 
 */
class CapturarDatosNotaDeIngreso
{
	private $_vista,
			$_catalogos,
			$_pacientes;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosPacientesNoActivos $DatosPacientesNoActivos
	)
	{
		$this->_vista = $Vista;
		$this->_catalogos = $ObtenerCatalogos;
		$this->_pacientes = $DatosPacientesNoActivos;
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
	 				'expediente/CapturarDatosNotaDeIngreso',
	 			)
	 			,(object)[
	 		'PACIENTES' => $pacientes, 
	 		'CATALOGOS' => $this->_catalogos->obtener(
	 			array(
	 				'CAT_TIPOINGRESO_TII', 
	 				'CAT_ESTADOCIVIL_ESC',
	 				'CAT_ESCOLARIDAD_ESO',
	 				'CAT_OCUPACION_OCU',
	 				'CAT_CONSUMEACTUALDROGA_CAD',
	 				'CAT_FORMAADMINISTRACIONDROGA_FAD',
	 				'CAT_FRECUENCIACONSUMODROGA_FCD',
	 				'CAT_SISVEASUS_SIS',
	 			))
	 		]);
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